<?php

use app\backend\controller\FuncionarioController;


$request = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
switch ($request) {
    case '/':
        FuncionarioController::index();
        break;
    case "/cadastroFuncionario":
        FuncionarioController::create();
        break;
    case "/cadastroFornecedor":
        FornecedorController::create();
        break;
    case "/funcionario/form/store":
        FuncionarioController::cadastrar();
        break;
    case "/funcionario/update":
        FuncionarioController::alterar();
        break;
    case "/funcionario/destroy":
        FuncionarioController::deletar();
        break;
    default:
        http_response_code(404);
        break;
}