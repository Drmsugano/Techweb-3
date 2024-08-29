<?php
require_once "app/backend/model/Fornecedor.php";
class FornecedorController extends Fornecedor{

    public static function create(){
        return include_once "app/view/cadastroFornecedor.php";
    }
    public function cadastrar(){
        $fornecedor = new Fornecedor();
        $fornecedor->CadastrarFornecedor();
    }
    public function listarAll(){
        $fornecedor = new Fornecedor();
        return $fornecedor->listarAll();
    }
    public function listar($id){
        $fornecedor = new Fornecedor();
        return $fornecedor->listar($id);
    }
    public function deletar(){
        $fornecedor = new Fornecedor();
        $fornecedor->deletar();
    }
    public function alterar(){
        $fornecedor = new Fornecedor();
        $fornecedor->alterar();
    }
}