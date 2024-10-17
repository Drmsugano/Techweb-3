<?php
namespace app\model\entity;

class Equipe {
    private $id;
    private $nome;
    private $inicio;
    private $fim;

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
}
