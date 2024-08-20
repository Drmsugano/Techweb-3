<?php
require_once "funcionarioController.php";
require_once "fornecedorController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarFuncionario'])) {
    $controllerFuncionario = new FuncionarioController();
    $controllerFuncionario->cadastrar();
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_REQUEST['del'])) {
    $controllerFuncionario = new FuncionarioController();
    return $controllerFuncionario->deletar();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alterarFuncionario'])) {
    $controllerFuncionario = new FuncionarioController();
    $controllerFuncionario->alterar();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarFornecedor'])) {
    $controllerFornecedor = new FornecedorController();
    $controllerFornecedor->cadastrar();
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_REQUEST['delFornecedor'])) {
    $controllerFornecedor = new FornecedorController();
    return $controllerFornecedor->deletar();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alterarFornecedor'])) {
    $controllerFornecedor = new FornecedorController();
    $controllerFornecedor->alterar();
}