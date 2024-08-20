<?php
require_once "app/backend/DAO/FornecedorDAO.php";
class Fornecedor{
    private $nome;
    private $telefone;
    private $email;
    private $cep;
    private $endereco;
    private $cidade;
    private $uf;
    private $bairro;
    private $cnpj;
    private $ie;
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo) {
        return $this->$atributo;
    }
    public function cadastrarFornecedor(){
        $fornecedorDAO = new FornecedorDAO();
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $_REQUEST["nome"];
        $fornecedor->email = $_REQUEST["email"]; 
        $fornecedor->telefone = $_REQUEST["telefone"];
        $fornecedor->ie = $_REQUEST["ie"];
        $fornecedor->cnpj = $_REQUEST["cnpj"];
        $fornecedor->cep = $_REQUEST["cep"];
        $fornecedor->uf = $_REQUEST["uf"];
        $fornecedor->cidade = $_REQUEST["cidade"];
        $fornecedor->endereco = $_REQUEST["endereco"];
        $fornecedor->bairro = $_REQUEST["bairro"];
        $fornecedorDAO->create($fornecedor);        
    }
    public function listarAll(){
         $fornecedorDAO = new FornecedorDAO();
        return  $fornecedorDAO->read_all();
    }
    public function listar($id){
        $fornecedor = new Fornecedor();
         $fornecedorDAO = new FornecedorDAO();
        $fornecedor->id = $id;
        return  $fornecedorDAO->read($fornecedor);
    }
    public function deletar(){
         $fornecedorDAO = new FornecedorDAO();
        $fornecedor = new Fornecedor();
        $fornecedor->id = $_REQUEST["delFornecedor"];
         $fornecedorDAO->delete($fornecedor);
    }
    public function alterar(){
        $fornecedorDAO = new FornecedorDAO();
        $fornecedor = new Fornecedor();
        $fornecedor->id = $_REQUEST["id"];
        $fornecedor->nome = $_REQUEST["nome"];
        $fornecedor->email = $_REQUEST["email"]; 
        $fornecedor->telefone = $_REQUEST["telefone"];
        $fornecedor->ie = $_REQUEST["ie"];
        $fornecedor->cnpj = $_REQUEST["cnpj"];
        $fornecedor->cep = $_REQUEST["cep"];
        $fornecedor->uf = $_REQUEST["uf"];
        $fornecedor->cidade = $_REQUEST["cidade"];
        $fornecedor->endereco = $_REQUEST["endereco"];
        $fornecedor->bairro = $_REQUEST["bairro"];
         $fornecedorDAO->update($fornecedor);
    }
}