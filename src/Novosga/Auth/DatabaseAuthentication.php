<?php
namespace Novosga\Auth;

/**
 * Database Authentication
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class DatabaseAuthentication extends Authentication {
    
    public function init(array $config) {
    }
    
    /**
     * Verifica o usuário e senha na tabela de usuarios
     * @param type $username
     * @param type $password
     * @return boolean
     */
    public function auth($username, $password) {
        $query = $this->em->createQuery("SELECT u FROM Novosga\Model\Usuario u WHERE u.login = :login AND u.status = 1");
        $query->setParameter('login', $username);
        try {
            $user = $query->getSingleResult();
            if ($user) {
                if ($user->getSenha() == \Novosga\Security::passEncode($password)) {
                    return $user;
                }
            }
        } catch (\Doctrine\ORM\NoResultException $e) {
        }
        return false;
    }
    
    public function test() {
        return true;
    }
    
}
