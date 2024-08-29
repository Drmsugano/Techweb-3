<?php
require_once "app/backend/model/Conexao.php";
require_once "app/backend/controller/controller.php";
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
    case "/funcionario/destroy?del=":
        FuncionarioController::deletar();
        break;
    default:
        http_response_code(404);
        break;
}