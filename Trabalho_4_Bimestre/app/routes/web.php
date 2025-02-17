<?php
use Controller\EquipeController;
use Controller\HomeController;
use Controller\LoginController;
use Controller\ProdutoController;
use Controller\VendaController;
use Controller\VendedorController;
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
    //Rotas de Produto
    case "/Produto":
        ProdutoController::listar($entityManager);
        break;
    case "/Produto/create":
        ProdutoController::form();
        break;
    case "/Produto/form/store":
        ProdutoController::create($entityManager);
        break;
    case "/Produto/update":
        ProdutoController::edit($entityManager);
        break;
    case "/Produto/destroy":
        ProdutoController::delete($entityManager);
        break;
    //Rotas para Equipe
    case "/Equipe":
        EquipeController::listar($entityManager);
        break;
    case "/Equipe/create":
        EquipeController::form();
        break;
    case "/Equipe/form/store":
        EquipeController::create($entityManager);
        break;
    case "/Equipe/update":
        EquipeController::edit($entityManager);
        break;
    case "/Equipe/destroy":
        EquipeController::delete($entityManager);
        break;
    //Rotas para Vendedor
    case "/Vendedor":
        VendedorController::listar($entityManager);
        break;
    case "/Vendedor/create":
        VendedorController::form($entityManager);
        break;
    case "/Vendedor/form/store":
        VendedorController::create($entityManager);
        break;
    case "/Vendedor/update":
        VendedorController::edit($entityManager);
        break;
    case "/Vendedor/destroy":
        VendedorController::delete($entityManager);
        break;
    case "/Venda":
        VendaController::listar($entityManager);
        break;
    case "/Venda/create":
        VendaController::form($entityManager);
        break;
    case "/Venda/form/store":
        VendaController::create($entityManager);
        break;
    case "/Venda/update":
        VendaController::edit($entityManager);
        break;
    case "/Venda/destroy":
        VendaController::delete($entityManager);
    case "/Hello":
        phpinfo();
        break;
    case "/autenticar":
        LoginController::autenticar($entityManager);
        break;
}
