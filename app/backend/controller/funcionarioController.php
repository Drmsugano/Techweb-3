<?php
class FuncionarioController extends Funcionario{
    public static function index(){
        return include 'app/view/cadastroPessoa.php';
    }
    public static function create(){
        return include 'app/view/cadastroPessoa.php';
        ;
    }
    public static function cadastrar(){
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
    public static function deletar(){
        $funcionario = new Funcionario();
        $funcionario->deletar();
    }
    public static function alterar(){
        $funcionario = new Funcionario();
        $funcionario->alterar();
    }
}