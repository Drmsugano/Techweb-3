<?php
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
    public function listar($id){
        $funcionario = new Funcionario();
        $funcionarioDAO = new FuncionarioDAO();
        $funcionario->id = $id;
        return $funcionarioDAO->read($funcionario);
    }
    public static function deletar(){
        $funcionarioDAO = new FuncionarioDAO();
        $funcionario = new Funcionario();
        $funcionario->id = $_REQUEST["del"];
        $funcionarioDAO->delete($funcionario);
    }
    public static function alterar(){
        $funcionario = new Funcionario();
        $funcionarioDAO = new FuncionarioDAO();
        $funcionario->id = $_REQUEST["id"];
        $funcionario->nome = $_REQUEST["nome"];
        $funcionario->email = $_REQUEST["email"];
        $funcionario->senha = $_REQUEST["senha"];
        $funcionarioDAO->update($funcionario);
    }   
}