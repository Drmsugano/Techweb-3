<?php 

namespace app\lib;

use \PDOExcetion;
use \PDO;

class Conexao {

	private $usuario;
	private $senha;
	private $banco;
	private $servidor;
	private static $pdo; // PDO (PHP Data Objects)
	
	public function __construct() {
		$this->servidor = "localhost";
		$this->banco = "ifpr";
		$this->usuario = "root";
		$this->senha = "";
	}
	
	public function get_pdo() {
		try {
			if (is_null(self::$pdo)) {
				self::$pdo = new PDO("mysql:host=$this->servidor;dbname=$this->banco",
									$this->usuario,
									$this->senha);
			}
			return self::$pdo; // :: é utilizado quando pretende-se referenciar um método ou variável estática
		} catch (PDOException $ex) {
			echo "mysql:host=$this->servidor;dbname=$this->banco";
            echo "Usuario:" . $this->usuario;
            echo "Senha:" . $this->senha;
            echo 'ERROR: ' . $ex->getMessage();
		}
	}
}
?>
