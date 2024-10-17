<?php
namespace app\model\entity;

class Usuario {

    private $id;
    private $nome;
    private $usuario;
    private $senha;

     /**
     * Método mágico
     */
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    /**
     * Método mágico
     */
    public function __get($atributo) {
        return $this->$atributo;
    }

}