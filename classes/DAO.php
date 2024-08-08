<?php
require_once "Conexao.class.php";
abstract class DAO{
    protected $conn;
    public function __construct(){
        $this->conn = new Conexao();
    }
    abstract public function create($object);
    abstract public function read($id);
    abstract public function read_all();
    abstract public function update($object);
    abstract public function delete($id);
}