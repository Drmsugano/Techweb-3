<?php

namespace app\controller;

use app\model\dao\UsuarioDao;
use app\model\entity\Usuario;

/**
 * Responsável por processr a requisição
 * do usuário
 */
class LoginController extends Controller{
    

    public static function login() {
        include '../app/view/login.php';
    }

    public static function autenticar() {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $usuarioDAO = new UsuarioDao();

        $usuario_autenticado = $usuarioDAO->readUserByUserAndPass($usuario, $senha);

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