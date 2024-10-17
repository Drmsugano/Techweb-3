<?php
namespace app\model\entity;
class Vendedor {
    private $id;
    private $nome;
    private $nivel;
    private $equipe_id;

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
}
