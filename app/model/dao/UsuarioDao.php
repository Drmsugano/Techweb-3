<?php

namespace app\model\dao;

use app\model\entity\Usuario;

use \PDOExcetion; // Importa PDO da raiz
use \PDO;

//require_once('DAO.class.php');
//require_once('model/Funcionario.class.php');

class UsuarioDAO extends DAO
{

    public function create($usuario)
    {

    }
    public function read($id)
    {

    }
    public function read_all()
    {

    }
    public function update($usuario)
    {

    }
    public function delete($id)
    {

    }

    public function readUserByUserAndPass($usuario, $senha)
    {

        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT id, nome, usuario, senha FROM usuario WHERE usuario=:usuario AND senha=:senha;");
            // Impede SQL Inject, (PDO::PARAM_INT - Só permite entrada de inteiro)
            $pdo_sql->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            $pdo_sql->bindParam(":senha", $senha, PDO::PARAM_STR);
            $pdo_sql->execute();
            $array_usuario = $pdo_sql->fetch();

            if ($array_usuario) {
                // Tranformar array de retorno em objeto funcionario
                $usuario = new Usuario();
                $usuario->id = $array_usuario['id'];
                $usuario->nome = $array_usuario['nome'];
                $usuario->usuario = $array_usuario['usuario'];
                $usuario->senha = $array_usuario['senha'];
                return $usuario;
            } else {
                return null;
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

}
