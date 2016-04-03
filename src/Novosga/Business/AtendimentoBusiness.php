<?php
namespace Novosga\Business;

use DateTime;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\OptimisticLockException;
use Exception;
use Novosga\Config\AppConfig;
use Novosga\Model\Atendimento;
use Novosga\Model\Contador;
use Novosga\Model\PainelSenha;
use Novosga\Model\Prioridade;
use Novosga\Model\Servico;
use Novosga\Model\Unidade;
use Novosga\Model\Usuario;
use Novosga\Model\Util\Senha;
use Novosga\Model\Util\UsuarioSessao;
use Novosga\Util\DateUtil;
use PDO;

/**
 * AtendimentoBusiness
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class AtendimentoBusiness extends ModelBusiness {
    
    // estados do atendimento
    const SENHA_EMITIDA = 1;
    const CHAMADO_PELA_MESA = 2;
    const ATENDIMENTO_INICIADO = 3;
    const ATENDIMENTO_ENCERRADO = 4;
    const NAO_COMPARECEU = 5;
    const SENHA_CANCELADA = 6;
    const ERRO_TRIAGEM = 7;
    const ATENDIMENTO_ENCERRADO_CODIFICADO = 8;
    
    public static function situacoes() {
        return array(
            self::SENHA_EMITIDA => _('Señal emitida'),
            self::CHAMADO_PELA_MESA => _('Llamado a Ventanilla'),
            self::ATENDIMENTO_INICIADO => _('Atención iniciada'),
            self::ATENDIMENTO_ENCERRADO => _('Atención cerrada'),
            self::NAO_COMPARECEU => _('No se presentó'),
            self::SENHA_CANCELADA => _('Señal cancelada'),
            self::ERRO_TRIAGEM => _('Error de triage'),
            self::ATENDIMENTO_ENCERRADO_CODIFICADO => _('Atención cerrada y codificada')
        );
    }
    
    public static function nomeSituacao($status) {
        $arr = self::situacoes();
        return $arr[$status];
    }
    
    /**
     * Adiciona uma nova senha na fila de chamada do painel de senhas
     * @param Unidade $unidade
     * @param Atendimento $atendimento
     */
    public function chamarSenha(Unidade $unidade, Atendimento $atendimento) {
        $senha = new PainelSenha();
        $senha->setUnidade($unidade);
        $senha->setServico($atendimento->getServicoUnidade()->getServico());
        $senha->setNumeroSenha($atendimento->getSenha()->getNumero());
        $senha->setSiglaSenha($atendimento->getSenha()->getSigla());
        $senha->setMensagem($atendimento->getSenha()->getLegenda());
        // local
        $senha->setLocal($atendimento->getServicoUnidade()->getLocal()->getNome());
        $senha->setNumeroLocal($atendimento->getLocal());
        // prioridade
        $senha->setPeso($atendimento->getSenha()->getPrioridade()->getPeso());
        $senha->setPrioridade($atendimento->getSenha()->getPrioridade()->getNome());
        // cliente
        $senha->setNomeCliente($atendimento->getCliente()->getNome());
        $senha->setDocumentoCliente($atendimento->getCliente()->getDocumento());
        
        $this->em->persist($senha);
        $this->em->flush();
        
        AppConfig::getInstance()->hook("attending.call", $atendimento, $senha);
    }

    /**
     * Move os registros da tabela atendimento para a tabela de historico de atendimentos.
     * Se a unidade não for informada, será acumulado serviços de todas as unidades.
     * @param type $unidade
     * @throws Exception
     */
    public function acumularAtendimentos($unidade = 0) {
        if ($unidade instanceof Unidade) {
            $unidade = $unidade->getId();
        }
        $data = DateUtil::nowSQL();
        $conn = $this->em->getConnection();
        
        // tables name
        $historicoTable = $this->em->getClassMetadata('Novosga\Model\AtendimentoHistorico')->getTableName();
        $historicoCodifTable = $this->em->getClassMetadata('Novosga\Model\AtendimentoCodificadoHistorico')->getTableName();
        $atendimentoTable = $this->em->getClassMetadata('Novosga\Model\Atendimento')->getTableName();
        $atendimentoCodifTable = $this->em->getClassMetadata('Novosga\Model\AtendimentoCodificado')->getTableName();

        // copia os atendimentos para o historico
        $sql = "
            INSERT INTO $historicoTable 
            (
                id, unidade_id, usuario_id, servico_id, prioridade_id, status, sigla_senha, num_senha, num_senha_serv, 
                nm_cli, num_local, dt_cheg, dt_cha, dt_ini, dt_fim, ident_cli, usuario_tri_id, atendimento_id
            )
            SELECT 
                a.id, a.unidade_id, a.usuario_id, a.servico_id, a.prioridade_id, a.status, a.sigla_senha, a.num_senha, a.num_senha_serv, 
                a.nm_cli, a.num_local, a.dt_cheg, a.dt_cha, a.dt_ini, a.dt_fim, a.ident_cli, a.usuario_tri_id, a.atendimento_id
            FROM 
                $atendimentoTable a
            WHERE 
                a.dt_cheg <= :data AND (a.unidade_id = :unidade OR :unidade = 0)
        ";
        $query = $conn->prepare($sql);
        $query->bindValue('data', $data, PDO::PARAM_STR);
        $query->bindValue('unidade', $unidade, PDO::PARAM_INT);
        $query->execute();

        // copia os atendimentos codificados para o historico
        $query = $conn->prepare("
            INSERT INTO $historicoCodifTable
            SELECT 
                ac.atendimento_id, ac.servico_id, ac.valor_peso
            FROM 
                $atendimentoCodifTable ac
            WHERE 
                ac.atendimento_id IN (
                    SELECT a.id FROM $atendimentoTable a WHERE dt_cheg <= :data AND (a.unidade_id = :unidade OR :unidade = 0)
                )
        ");
        $query->bindValue('data', $data, PDO::PARAM_STR);
        $query->bindValue('unidade', $unidade, PDO::PARAM_INT);
        $query->execute();

        // limpa atendimentos codificados
        $this->em->createQuery('
                    DELETE Novosga\Model\AtendimentoCodificado e WHERE e.atendimento IN (
                        SELECT a.id FROM Novosga\Model\Atendimento a WHERE a.dataChegada <= :data AND (a.unidade = :unidade OR :unidade = 0)
                    )
                ')
                ->setParameter('data', $data)
                ->setParameter('unidade', $unidade)
                ->execute()
        ;

        // limpa o auto-relacionamento para poder excluir os atendimento sem dar erro de constraint (#136)
        $this->em->createQuery('UPDATE Novosga\Model\Atendimento e SET e.pai = NULL WHERE e.dataChegada <= :data AND (e.unidade = :unidade OR :unidade = 0)')
                ->setParameter('unidade', $unidade)
                ->setParameter('data', $data)
                ->execute()
        ;

        // limpa atendimentos da unidade
        $this->em->createQuery('DELETE Novosga\Model\Atendimento e WHERE e.dataChegada <= :data AND (e.unidade = :unidade OR :unidade = 0)')
                ->setParameter('data', $data)
                ->setParameter('unidade', $unidade)
                ->execute()
        ;

        // limpa a tabela de senhas a serem exibidas no painel
        $this->em->createQuery('DELETE Novosga\Model\PainelSenha e WHERE (e.unidade = :unidade OR :unidade = 0)')
                ->setParameter('unidade', $unidade)
                ->execute()
        ;

        // zera o contador das senhas
        $this->em->createQuery('UPDATE Novosga\Model\Contador e SET e.total = 0 WHERE (e.unidade = :unidade OR :unidade = 0)')
                ->setParameter('unidade', $unidade)
                ->execute()
        ;
    }
    
    public static function isNumeracaoServico() {
        if (NOVOSGA_INSTALLED) {
            $db = \Novosga\Config\DatabaseConfig::getInstance();
            $tipoNumeracao = \Novosga\Model\Configuracao::get($db->createEntityManager(), Senha::TIPO_NUMERACAO);
            if ($tipoNumeracao) {
                return $tipoNumeracao->getValor() == Senha::NUMERACAO_SERVICO;
            }
        }
        return false;
    }
    
    public function buscaAtendimento(Unidade $unidade, $id) {
        $query = $this->em->createQuery("SELECT e FROM Novosga\Model\Atendimento e JOIN e.servicoUnidade su WHERE e.id = :id AND su.unidade = :unidade");
        $query->setParameter('id', (int) $id);
        $query->setParameter('unidade', $unidade->getId());
        return $query->getOneOrNullResult();
    }
    
    public function buscaAtendimentos(Unidade $unidade, $senha) {
        $field = self::isNumeracaoServico() ? 'numeroSenhaServico' : 'numeroSenha';
        $cond = '';
        $sigla = strtoupper(substr($senha, 0, 1));
        // verificando se a letra foi informada (o primeiro caracter diferente do valor convertido para int)
        $porSigla = ctype_alpha($sigla);
        if ($porSigla) {
            $cond = 'e.siglaSenha = :sigla AND';
            $numeroSenha = (int) substr($senha, 1);
        } else {
            $numeroSenha = (int) $senha;
        }
        $query = $this->em->createQuery("
            SELECT 
                e 
            FROM 
                Novosga\Model\Atendimento e 
                JOIN e.servicoUnidade su 
            WHERE 
                e.$field = :numero AND $cond
                su.unidade = :unidade 
            ORDER BY 
                e.id
        ");
        $query->setParameter('numero', $numeroSenha);
        if ($porSigla) {
            $query->setParameter('sigla', $sigla);
        }
        $query->setParameter('unidade', $unidade->getId());
        return $query->getResult();
    }
    
    
    public function chamar(Atendimento $atendimento, Usuario $usuario, $local) {
        $atendimento->setUsuario($usuario);
        $atendimento->setLocal($local);
        $atendimento->setStatus(AtendimentoBusiness::CHAMADO_PELA_MESA);
        $atendimento->setDataChamada(new DateTime());
        // atualiza o proximo da fila
        $query = $this->em->createQuery("
            UPDATE 
                Novosga\Model\Atendimento e 
            SET 
                e.usuario = :usuario, e.local = :local, e.status = :novoStatus, e.dataChamada = :data
            WHERE 
                e.id = :id AND e.status = :statusAtual
        ");
        $query->setParameter('usuario', $atendimento->getUsuario()->getId());
        $query->setParameter('local', $atendimento->getLocal());
        $query->setParameter('novoStatus', $atendimento->getStatus());
        $query->setParameter('data', $atendimento->getDataChamada());
        $query->setParameter('id', $atendimento->getId());
        $query->setParameter('statusAtual', AtendimentoBusiness::SENHA_EMITIDA);
        /* 
         * caso entre o intervalo do select e o update, o proximo ja tiver sido chamado
         * a consulta retornara 0, entao tenta pegar o proximo novamente (outro)
         */
        return $query->execute() > 0;
    }
    
    /**
     * Retorna o atendimento em andamento do usuario informado
     * @param integer|Usuario $usuario
     * @return Atendimento
     */
    public function atendimentoAndamento($usuario) {
        $status = array(
            AtendimentoBusiness::CHAMADO_PELA_MESA,
            AtendimentoBusiness::ATENDIMENTO_INICIADO,
            AtendimentoBusiness::ATENDIMENTO_ENCERRADO
        );
        $query = $this->em->createQuery("SELECT e FROM Novosga\Model\Atendimento e WHERE e.usuario = :usuario AND e.status IN (:status)");
        $query->setParameter('usuario', $usuario);
        $query->setParameter('status', $status);
        return $query->getOneOrNullResult();
    }
    
    /**
     * Gera um novo atendimento
     * 
     * @param integer|Unidade $unidade
     * @param integer|Usuario $usuario
     * @param integer|Servico $servico
     * @param integer|Prioridade $prioridade
     * @param string $nomeCliente
     * @param string $documentoCliente
     * @return Atendimento
     * @throws Exception
     */
    public function distribuiSenha($unidade, $usuario, $servico, $prioridade, $nomeCliente, $documentoCliente) {
        // verificando a unidade
        if (!($unidade instanceof Unidade)) {
            $unidade = $this->em->find("Novosga\Model\Unidade", (int) $unidade);
        }
        if (!$unidade) {
            throw new Exception(_('Nenhum unidade escolhida'));
        }
        // verificando o usuario na sessao
        if (!($usuario instanceof Usuario) || $usuario instanceof UsuarioSessao) {
            if ($usuario instanceof UsuarioSessao) {
                $usuario = $usuario->getWrapped();
            } else {
                $usuario = $this->em->find("Novosga\Model\Usuario", (int) $usuario);
            }
        }
        if (!$usuario) {
            throw new Exception(_('Nenhum usuário na sessão'));
        }
        // verificando o servico
        if (!($servico instanceof Servico)) {
            $servico = $this->em->find("Novosga\Model\Servico", (int) $servico);
        }
        if (!$servico) {
            throw new Exception(_('Serviço inválido'));
        }
        // verificando a prioridade
        if (!($prioridade instanceof Prioridade)) {
            $prioridade = $this->em->find("Novosga\Model\Prioridade", (int) $prioridade);
        }
        if (!$prioridade || $prioridade->getStatus() == 0) {
            throw new Exception(_('Prioridade inválida'));
        }
        
        // verificando se o servico esta disponivel na unidade
        $query = $this->em->createQuery("SELECT e FROM Novosga\Model\ServicoUnidade e WHERE e.unidade = :unidade AND e.servico = :servico");
        $query->setParameter('unidade', $unidade);
        $query->setParameter('servico', $servico);
        $su = $query->getOneOrNullResult();
        if (!$su) {
            throw new Exception(_('Serviço não disponível para a unidade atual'));
        }
        
        $contador = $this->em->find('Novosga\Model\Contador', $unidade);
        if (!$contador) {
            $contador = new Contador();
            $contador->setUnidade($unidade);
            $contador->setTotal(0);
            $this->em->persist($contador);
            $this->em->flush();
        }
        
        $numeroSenha = $contador->getTotal() + 1;
        $contador->setTotal($numeroSenha);
        
        $atendimento = new Atendimento();
        $atendimento->setServicoUnidade($su);
        $atendimento->setPrioridade($prioridade);
        $atendimento->setUsuarioTriagem($usuario);
        $atendimento->setStatus(AtendimentoBusiness::SENHA_EMITIDA);
        $atendimento->setLocal(0);
        $atendimento->setNomeCliente($nomeCliente);
        $atendimento->setDocumentoCliente($documentoCliente);
        $atendimento->setSiglaSenha($su->getSigla());

        try {
            $attempts = 5;
            $this->em->beginTransaction();
            do {
                try {
                    // assert version
                    $this->em->lock($contador, LockMode::PESSIMISTIC_WRITE, $numeroSenha);

                    // ultimo numero gerado (servico). busca pela sigla do servico para nao aparecer duplicada (em caso de mais de um servico com a mesma sigla)
                    try {
                        $numeroSenhaServico = (int) $this->em->createQuery('
                                SELECT 
                                    e.numeroSenhaServico
                                FROM 
                                    Novosga\Model\Atendimento e 
                                    JOIN e.servicoUnidade su
                                WHERE 
                                    su.unidade = :unidade AND 
                                    e.siglaSenha = :sigla 
                                ORDER BY 
                                    e.numeroSenhaServico DESC
                            ')
                                ->setParameter('unidade', $unidade)
                                ->setParameter('sigla', $su->getSigla())
                                ->setMaxResults(1)
                                ->getSingleScalarResult()
                        ;
                    } catch (Exception $e) {
                        $numeroSenhaServico = 0;
                    }

                    $atendimento->setDataChegada(new DateTime());
                    $atendimento->setNumeroSenha($numeroSenha);
                    $atendimento->setNumeroSenhaServico($numeroSenhaServico + 1);
                    
                    $this->em->persist($atendimento);
                    $this->em->merge($contador);
                    $this->em->commit();
                    $this->em->flush();
                    break;
                } catch(OptimisticLockException $e) {
                    $attempts--;
                    if ($attempts <= 0) {
                        throw $e;
                    }
                    usleep(100);
                }
            } while ($attempts > 0);

            if ($attempts === 0) {
                throw new Exception(_('Erro ao tentar gerar nova senha'));
            }

            if (!$atendimento || !$atendimento->getId()) {
                throw new \Exception(sprintf(_('O último ID retornado pelo banco não é de um atendimento válido: %s'), $id));
            }

            AppConfig::getInstance()->hook("attending.create", $atendimento);

            return $atendimento;
        } catch (Exception $e) {
            try {
                $this->em->rollback();
            } catch (Exception $ex) {
            }
            throw $e;
        }
    }
    
    /**
     * Redireciona um atendimento para outro servico
     * @param Atendimento $atendimento
     * @param Usuario $usuario
     * @param integer|Unidade $unidade
     * @param integer|Servico $servico
     * @return Atendimento
     */
    public function redirecionar(Atendimento $atendimento, Usuario $usuario, $unidade, $servico) {
        // copiando a senha do atendimento atual
        $su = $this->em
                ->createQuery('SELECT e FROM Novosga\Model\ServicoUnidade e WHERE e.servico = :servico AND e.unidade = :unidade')
                ->setParameter('servico', $servico)
                ->setParameter('unidade', $unidade)
                ->getSingleResult();
        ;
        $novo = new Atendimento();
        $novo->setLocal(0);
        $novo->setServicoUnidade($su);
        $novo->setPai($atendimento);
        $novo->setDataChegada(new DateTime());
        $novo->setStatus(AtendimentoBusiness::SENHA_EMITIDA);
        $novo->setSiglaSenha($atendimento->getSenha()->getSigla());
        $novo->setNumeroSenha($atendimento->getNumeroSenha());
        $novo->setNumeroSenhaServico($atendimento->getNumeroSenhaServico());
        $novo->setUsuario($usuario);
        $novo->setUsuarioTriagem($usuario);
        $novo->setPrioridade($atendimento->getPrioridade());
        $novo->setNomeCliente($atendimento->getCliente()->getNome());
        $novo->setDocumentoCliente($atendimento->getCliente()->getDocumento());
        $this->em->persist($novo);
        $this->em->flush();
        return $novo;
    }
    
    /**
     * Transfere o atendimento para outro serviço e prioridade
     * 
     * @param Atendimento $atendimento
     * @param Unidade $unidade
     * @param integer|Servico $novoServico
     * @param integer|Prioridade $novaPrioridade
     * @return boolean
     */
    public function transferir(Atendimento $atendimento, Unidade $unidade, $novoServico, $novaPrioridade) {
        // transfere apenas se a data fim for nula (nao finalizados)
        return $this->em->createQuery('
                UPDATE 
                    Novosga\Model\Atendimento e
                SET 
                    e.servico = :servico,
                    e.prioridade = :prioridade
                WHERE 
                    e.id = :id AND 
                    e.unidade = :unidade AND
                    e.dataFim IS NULL
                ')
                ->setParameter('servico', $novoServico)
                ->setParameter('prioridade', $novaPrioridade)
                ->setParameter('id', $atendimento)
                ->setParameter('unidade', $unidade)
                ->execute() > 0
        ;
    }
    
    /**
     * Atualiza o status da senha para cancelado
     * 
     * @param Atendimento $atendimento
     * @param Unidade $unidade
     * @return boolean
     */
    public function cancelar(Atendimento $atendimento, Unidade $unidade) {
        // cancela apenas se a data fim for nula
        return $this->em->createQuery('
                UPDATE 
                    Novosga\Model\Atendimento e
                SET 
                    e.status = :status,
                    e.dataFim = :data
                WHERE 
                    e.id = :id AND 
                    e.unidade = :unidade AND
                    e.dataFim IS NULL
                ')
                ->setParameter('status', AtendimentoBusiness::SENHA_CANCELADA)
                ->setParameter('data', new DateTime())
                ->setParameter('id', $atendimento)
                ->setParameter('unidade', $unidade)
                ->execute() > 0
        ;
    }
    
    /**
     * Reativa o atendimento para o mesmo serviço e mesma prioridade.
     * Só pode reativar atendimentos que foram: Cancelados ou Não Compareceu
     * 
     * @param Atendimento $atendimento
     * @param Unidade $unidade
     * @return boolean
     */
    public function reativar(Atendimento $atendimento, Unidade $unidade) {
        // reativa apenas se estiver finalizada (data fim diferente de nulo)
        return $this->em->createQuery('
                UPDATE 
                    Novosga\Model\Atendimento e
                SET 
                    e.status = :status,
                    e.dataFim = NULL
                WHERE 
                    e.id = :id AND 
                    e.unidade = :unidade AND
                    e.status IN (:statuses)
                ')
                ->setParameter('status', AtendimentoBusiness::SENHA_EMITIDA)
                ->setParameter('statuses', array(AtendimentoBusiness::SENHA_CANCELADA, AtendimentoBusiness::NAO_COMPARECEU))
                ->setParameter('id', $atendimento)
                ->setParameter('unidade', $unidade)
                ->execute() > 0
        ;
    }
    
}
