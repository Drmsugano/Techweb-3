<?php

namespace Dao;

use Doctrine\ORM\EntityManager;
use Model\Usuario;

use \PDOExcetion; // Importa PDO da raiz
use \PDO;

//require_once('DAO.class.php');
//require_once('model/Funcionario.class.php');

class UsuarioDAO extends Dao
{
    public function create($entityManager,$usuario)
    {

    }
    public function read($entityManager,$usuario)
    {

    }
    public function read_all($entityManager)
    {

    }
    public function update($entityManager,$usuario)
    {

    }
    public function delete($entityManager,$usuario)
    {

    }

    public function readUserByUserAndPass(EntityManager $entityManager,$usuario)
    {
        $usuario_query = $entityManager->createQuery('
            SELECT u FROM Model\Usuario u WHERE u.usuario = :usuario AND u.senha = :senha
        ');
        $usuario_query->setParameter('usuario', $usuario->usuario);
        $usuario_query->setParameter('senha', $usuario->senha);
        $usuario_auth = $usuario_query->getResult();
        if (count($usuario_auth) > 0) {
            $usuario->nome = $usuario_auth[0]->nome;
            $usuario->id = $usuario_auth[0]->id;
            return $usuario;
        }    
        else
        {
            return null;
        }
    }

}
