<?php

namespace Controller;

use Dao\UsuarioDao;
use Doctrine\ORM\EntityManager;
use Model\Usuario;

/**
 * Responsável por processr a requisição
 * do usuário
 */
class LoginController extends Controller{
    

    public static function login() {
        include '../app/view/login.php';
    }

    public static function autenticar(EntityManager $entityManager) {
        $usuario = new Usuario();
        $usuario->usuario = $_POST['usuario'];
        $usuario->senha = $_POST['senha'];
        $usuarioDAO = new UsuarioDao();
        $usuario_autenticado = $usuarioDAO->readUserByUserAndPass($entityManager,$usuario);
        if (!is_null($usuario_autenticado)) {
            $_SESSION['usuario_logado']['id'] = $usuario_autenticado->id;
            $_SESSION['usuario_logado']['nome'] = $usuario_autenticado->nome;
            header("Location: /Home");
        } else {
            header("Location: /?fail=true");
        }

    }

    public static function sair() {
        
        unset($_SESSION['usuario_logado']);
        header("Location: /Login");
    }
}

?>