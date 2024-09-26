<?php

use app\controller\FuncionarioController;
use app\controller\HomeController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url) {
    case '/':
        HomeController::index();
        break;
    
    case '/funcionario':
        FuncionarioController::listar();
        break;
    
    case "/funcionario/form":
        FuncionarioController::form();
        break;

    case "/funcionario/form/create":
        FuncionarioController::create();
        break;
    case "/funcionario/delete":
        FuncionarioController::delete();
    default:
        echo "Erro 404";
        break;
}

