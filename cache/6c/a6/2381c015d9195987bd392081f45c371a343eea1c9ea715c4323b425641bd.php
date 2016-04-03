<?php

/* index.html.twig */
class __TwigTemplate_6ca62381c015d9195987bd392081f45c371a343eea1c9ea715c4323b425641bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("module.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-geral\" data-toggle=\"tab\">";
        // line 5
        echo gettext("Sistema");
        echo "</a></li>
        <li><a href=\"#tab-triagem\" data-toggle=\"tab\">";
        // line 6
        echo gettext("Triagem");
        echo "</a></li>
        <li><a href=\"#tab-api\" data-toggle=\"tab\">API</a></li>
        <li><a href=\"#tab-sobre\" data-toggle=\"tab\">";
        // line 8
        echo gettext("Sobre");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-geral\" class=\"tab-pane active\">
            <fieldset>
                <legend>";
        // line 13
        echo gettext("Banco de Dados");
        echo "</legend>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>";
        // line 17
        echo gettext("Chave");
        echo "</th>
                            <th>";
        // line 18
        echo gettext("Valor");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dbValues"]) ? $context["dbValues"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 23
            echo "                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 26
            if (((isset($context["k"]) ? $context["k"] : null) == "password")) {
                // line 27
                echo "                                    ***
                                ";
            } else {
                // line 29
                echo "                                    ";
                echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                echo "
                                ";
            }
            // line 31
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                </table>
            </fieldset>
            <fieldset>
                <legend>";
        // line 38
        echo gettext("Autenticação");
        echo "</legend>
                <div id=\"auth_message\" style=\"display:none\">
                    <div class=\"alert alert-success\">
                        ";
        // line 41
        echo gettext("Configuração salva com sucesso");
        // line 42
        echo "                    </div>
                </div>
                <div class=\"form-group auth-type\">
                    <label for=\"auth_type\">";
        // line 45
        echo gettext("Tipo");
        echo "</label>
                    <select id=\"auth_type\" class=\"form-control\">
                        <option value=\"db\" ";
        // line 47
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type") == "db")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Banco de Dados");
        echo "</option>
                        <option value=\"ldap\" ";
        // line 48
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type") == "ldap")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("LDAP e Banco de Dados");
        echo "</option>
                    </select>
                </div>
                <div id=\"auth-ldap\" class=\"auth-config\" ";
        // line 51
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type") != "ldap")) {
            echo "style=\"display:none\"";
        }
        echo ">
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_host\" class=\"form-label\">";
        // line 53
        echo gettext("Servidor");
        echo "</label>
                        <input id=\"auth_ldap_host\" name=\"host\" type=\"text\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "host"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_port\">";
        // line 57
        echo gettext("Porta");
        echo "</label>
                        <input id=\"auth_ldap_port\" class=\"form-control\" name=\"port\" type=\"text\" maxlength=\"6\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "port"), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: 389</span>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_host\">";
        // line 62
        echo gettext("Base DN");
        echo "</label>
                        <input id=\"auth_ldap_baseDn\" name=\"baseDn\" class=\"form-control\" type=\"text\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "baseDn"), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: DC=novosga,DC=org</span>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_loginAttribute\" class=\"form-label\">";
        // line 67
        echo gettext("Login Attribute");
        echo "</label>
                        <input id=\"auth_ldap_loginAttribute\" name=\"loginAttribute\" class=\"form-control\" type=\"text\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "loginAttribute"), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: sAMAccountName</span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_user\" class=\"form-label\">";
        // line 72
        echo gettext("Usuário");
        echo "</label>
                        <input id=\"auth_ldap_user\" name=\"username\" class=\"form-control\" type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "username"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_pass\" class=\"form-label\">";
        // line 76
        echo gettext("Senha");
        echo "</label>
                        <input id=\"auth_ldap_pass\" name=\"password\" class=\"form-control\" type=\"password\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "password"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_filter\" class=\"form-label\">";
        // line 80
        echo gettext("Filtro");
        echo "</label>
                        <input id=\"auth_ldap_filter\" name=\"filter\" class=\"form-control\" type=\"text\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap"), "filter"), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: objectClass=user</span>
                    </div>
                </div>
                <div class=\"buttons\">
                    <button id=\"auth_save\" class=\"btn btn-primary\" onclick=\"SGA.Admin.Auth.save()\">
                        ";
        // line 87
        echo gettext("Salvar");
        // line 88
        echo "                    </button>
                </div>
            </fieldset>
        </div>
        <div id=\"tab-triagem\" class=\"tab-pane\">
            <div class=\"form-group\">
                <label for=\"numeracao\" class=\"form-label\">";
        // line 94
        echo gettext("Tipo de numeração");
        echo "</label>
                <select id=\"numeracao\" class=\"form-control\" onchange=\"SGA.Admin.changeNumeracao()\">
                    ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["numeracoes"]) ? $context["numeracoes"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 97
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["k"]) ? $context["k"] : null) == (isset($context["numeracao"]) ? $context["numeracao"] : null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                </select>
            </div>
            <div class=\"form-group\">
                <label class=\"form-label\">";
        // line 102
        echo gettext("Reiniciar senhas");
        echo "</label>
                <button class=\"btn btn-danger\"
                        onclick=\"return SGA.Admin.reiniciarSenhas('";
        // line 104
        echo gettext("Deseja realmente reiniciar as senhas de todas unidades?");
        echo "')\">
                    ";
        // line 105
        echo gettext("Reiniciar");
        // line 106
        echo "                </button>
            </div>
        </div>
        <div id=\"tab-api\" class=\"tab-pane\">
            <fieldset>
                <legend>Web API</legend>
                <p>As URLs abaixoasasds são usadas para integrar o Novo SGA com outros projetos, como por exemplo o <strong>Painel Web</strong> e a <strong>Triagem Touch</strong>.</p>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>URI</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class=\"label label-danger\">POST</span>
                            </td>
                            <td>
                                /api/token
                            </td>
                            <td>
                                Autentica o usuário retornando o token de acesso.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/unidades
                            </td>
                            <td>
                                Retorna todas as unidades disponíveis
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/prioridades
                            </td>
                            <td>
                                Retorna todas as prioridades disponíveis
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/servicos
                            </td>
                            <td>
                                Retorna os serviços globais
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/servicos/:unidade
                            </td>
                            <td>
                                Retorna os serviços habilitados para a unidade informada
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-danger\">POST</span>
                            </td>
                            <td>
                                /api/distribui
                            </td>
                            <td>
                                Distribui uma nova senha para atendimento. Requer autenticação, um access_token válido e ativo.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <fieldset>
                <legend>";
        // line 192
        echo gettext("Clientes");
        echo "</legend>
                <p>Para acessar algumas URLs é necessário possuir um token de acesso, e para isso é necessário primeiro cadastrar a aplicação cliente.</p>
                <table id=\"oauth_clients\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Client Id</th>
                            <th>Client Secret</th>
                            <th>Redirect URI</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"buttons\">
                                <a href=\"#dialog-clientid\" data-toggle=\"modal\" class=\"btn btn-default\" onclick=\"\$('#dialog-clientid :input').val('');\">
                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                    ";
        // line 213
        echo gettext("Adicionar");
        // line 214
        echo "                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </fieldset>
        </div>
        <div id=\"tab-sobre\" class=\"tab-pane\">
            <div class=\"jumbotron\">
                <h1>OAC v";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</h1>
                <p>Sistema de Gerenciamento de Atendimento</p>
                <p>
                    <button id=\"btn-checkversion\" class=\"btn btn-default btn-lg\" role=\"button\" onclick=\"return SGA.Admin.checkVersion();\">
                        <span class=\"glyphicon glyphicon-refresh\"></span>
                        ";
        // line 228
        echo gettext("Verificar nova versão");
        // line 229
        echo "                    </button>
                    <a id=\"btn-downloader\" href=\"#\" class=\"btn btn-success btn-lg\" role=\"button\" style=\"display:none\">
                        <span class=\"glyphicon glyphicon-download\"></span>
                        Download <span class=\"version\"></span>
                    </a>
                    <span id=\"update-alert\" class=\"label label-success\" style=\"display:none\">
                        <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
        // line 236
        echo gettext("Parabéns, você possui a versão mais recente");
        // line 237
        echo "                    </span>
                </p>
            </div>
            <h2>Comunidade</h2>
            <p>Procurando ajuda? Acesse um dos canais do projeto através dos links abaixo:</p>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Blog
                        </div>
                        <div class=\"panel-body\">
                            <p>Notícias relacionadas aos projetos do Novo SGA e lançamento de novas versões</p>
                            <p>
                                <a href=\"http://novosga.org/blog\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 253
        echo gettext("Acessar");
        // line 254
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Fórum
                        </div>
                        <div class=\"panel-body\">
                            <p>Canal para tirar dúvidas sobre o uso ou instalação dos projetos.</p>
                            <p>
                                <a href=\"http://novosga.org/forum\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 269
        echo gettext("Acessar");
        // line 270
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Github
                        </div>
                        <div class=\"panel-body\">
                            <p>Participe diretamente do desenvolvimento relatando problemas (issues).</p>
                            <p>
                                <a href=\"https://github.com/novosga/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 285
        echo gettext("Acessar");
        // line 286
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        SGA.Admin.Auth.init();
        SGA.Admin.WebApi.loadClients();
    </script>
</div>

";
        // line 301
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 306
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 309
        echo gettext("Senhas reiniciadas com sucesso");
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 312
        echo gettext("Fechar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

";
        // line 319
        echo "<div id=\"dialog-clientid\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">OAuth2 client</h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/sga.admin/add_oauth_client\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"client_id\">Client Id</label>
                        <input type=\"text\" id=\"client_id\" name=\"client_id\" class=\"form-control\" required=\"true\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"client_secret\">Client Secret</label>
                        <input type=\"password\" id=\"client_secret\" name=\"client_secret\" class=\"form-control\" required=\"true\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"redirect_uri\">Redirect URL</label>
                        <input type=\"text\" id=\"client_redirect_uri\" name=\"redirect_uri\" class=\"form-control\" placeholder=\"http://\">
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Admin.WebApi.addClient(this)\">";
        // line 343
        echo gettext("Adicionar");
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 343,  535 => 327,  525 => 319,  516 => 312,  510 => 309,  504 => 306,  497 => 301,  481 => 286,  479 => 285,  462 => 270,  460 => 269,  443 => 254,  441 => 253,  423 => 237,  421 => 236,  412 => 229,  410 => 228,  402 => 223,  391 => 214,  389 => 213,  365 => 192,  277 => 106,  275 => 105,  271 => 104,  266 => 102,  261 => 99,  246 => 97,  242 => 96,  237 => 94,  229 => 88,  227 => 87,  218 => 81,  214 => 80,  208 => 77,  204 => 76,  198 => 73,  194 => 72,  187 => 68,  183 => 67,  176 => 63,  172 => 62,  165 => 58,  161 => 57,  155 => 54,  151 => 53,  144 => 51,  134 => 48,  126 => 47,  121 => 45,  116 => 42,  114 => 41,  108 => 38,  102 => 34,  94 => 31,  88 => 29,  84 => 27,  82 => 26,  77 => 24,  74 => 23,  70 => 22,  63 => 18,  59 => 17,  52 => 13,  44 => 8,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
