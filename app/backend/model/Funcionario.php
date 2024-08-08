<?php
require_once "app/backend/DAO/funcionarioDAO.php";
class Funcionario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function CadastrarFuncionario(){
        $funcionario = new Funcionario();
        $funcionarioDAO = new FuncionarioDAO();
        $funcionario->nome = $_POST["nome"];
        $funcionario->email = $_POST["email"];
        $funcionario->senha = $_POST["senha"];
        $funcionarioDAO->create($funcionario);
    }
    public function listarAll(){
        $funcionarioDAO = new FuncionarioDAO();
        return $funcionarioDAO->read_all();
    }
}