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
}