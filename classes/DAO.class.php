<?php 

require_once('Conexao.class.php');

abstract class DAO {

    protected $conexao;

    public function __construct() {
		// Conexão com o banco de dados
		$this->conexao = new Conexao();
	}

    abstract public function create($object);
    abstract public function read($id);
    abstract public function read_all();
    abstract public function update($object);
    abstract public function delete($id);

}

?>