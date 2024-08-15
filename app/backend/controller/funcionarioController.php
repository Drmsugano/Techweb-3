<?php
require_once "app/backend/model/Funcionario.php";
class FuncionarioController extends Funcionario{
    public function cadastrar(){
        $funcionario = new Funcionario();
        $funcionario->CadastrarFuncionario();
    }
    public function listarAll(){
        $funcionario = new Funcionario();
        return $funcionario->listarAll();
    }
    public function listar($id){
        $funcionario = new Funcionario();
        return $funcionario->listar($id);
    }
    public function deletar(){
        $funcionario = new Funcionario();
        $funcionario->deletar();
    }
    public function alterar(){
        $funcionario = new Funcionario();
        $funcionario->alterar();
    }
}