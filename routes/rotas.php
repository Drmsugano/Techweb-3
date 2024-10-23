<?php

use app\controller\HomeController;
use app\controller\LoginController;
use app\controller\ProdutoController;
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($url) {
    case "/":
        LoginController::login();
        break;
    case "/Login":
        LoginController::login();
        break;
    case "/Home":
        HomeController::index();
        break;
    case "/logout":
        LoginController::sair();
        break;
case "/Produto":
    ProdutoController::listar();
    break;
case "/Produto/create":
    ProdutoController::form();
    break;
case "/Produto/form/store":
    ProdutoController::create();
    break;
    case "/autenticar":
        LoginController::autenticar();
        break;
}