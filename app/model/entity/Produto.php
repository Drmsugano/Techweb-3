<?php
namespace app\model\entity;

class Produto{
    private $id;
    private $descricao;
    private $tipo;
    private $quantidade;
    private $categoria;

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    function __get($atributo){
      return $this->$atributo;
    }
}