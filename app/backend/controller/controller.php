<?php
require_once "funcionarioController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarFuncionario'])) {
    $controllerFuncionario = new funcionarioController();
    $controllerFuncionario->cadastrar();
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_REQUEST['del'])) {
    $controllerFuncionario = new funcionarioController();
    return $controllerFuncionario->deletar();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alterarFuncionario'])) {
    $controllerFuncionario = new funcionarioController();
    $controllerFuncionario->alterar();
}