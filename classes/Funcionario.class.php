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
}
?>