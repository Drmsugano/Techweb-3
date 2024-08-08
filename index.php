<?php
require_once "app/backend/model/Conexao.php";
require_once "app/backend/controller/controller.php";
$request = $_SERVER["REQUEST_URI"];
switch ($request) {
    case '/':
        include_once "app/view/cadastroPessoa.php";
        break;
    
    default:
        http_response_code(404);
        break;
}