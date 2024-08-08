<?php
require_once "funcionarioController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarFuncionario'])) {
    $controllerFuncionario = new funcionarioController();
    $controllerFuncionario->cadastrar();
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deletar'])) {
    $controllerFuncionario = new funcionarioController();
    $controllerFuncionario->deletar();
}