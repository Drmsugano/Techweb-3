<?php
require_once "DAO.php";
class FuncionarioDAO extends DAO {
    public function __construct() {
        parent::__construct();
    }
    public function create($funcionario){
        try {
        $pdo = $this->conn->conectar();
        $pdo_sql = $pdo->prepare("INSERT INTO funcionario (nome,email,senha) VALUES (:nome,:email,:senha)");
        $pdo_sql->bindParam(":nome",$funcionario->nome);
        $pdo_sql->bindParam(":email",$funcionario->email);
        $pdo_sql->bindParam(":senha",$funcionario->senha);
        if($pdo_sql->execute()){
            return "ok";
        } else{
            return "erro";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }
    public function delete($funcionario){

    }
    public function update($funcionario){

    }
    public function read($id){

    }
    public function read_all(){

    }
}