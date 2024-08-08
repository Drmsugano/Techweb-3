<?php
require_once "funcionarioController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarFuncionario'])) {
    $controllerFuncionario = new funcionarioController();
    $controllerFuncionario->cadastrar();
}