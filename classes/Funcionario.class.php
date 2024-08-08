<?php
require_once 'Conexao.class.php';

class Funcionario {
    private $con;
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    public function __contruct() {
        $this->con = new Conexao();
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }
}
