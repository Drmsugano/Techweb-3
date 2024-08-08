<?php 
class Conexao {
    private $usuario;
    private $senha;
    private $nome_banco;
    private $servidor;
    private static $pdo;

    public function __construct() {
        $this->servidor = "localhost";
        $this->nome_banco = "ifpr";
        $this->usuario = "root";
        $this->senha = "";
    }

    public function conectar() {
        try {
            if (is_null(self::$pdo)) {
                self::$pdo = new PDO("mysql:host=$this->servidor;dbname=$this->nome_banco", $this->usuario, $this->senha);
            }
            return self::pdo;
        }catch(PDOException $ex) {
            echo 'ERROR: ' . $ex->getMessage();
        }
    }
}
?>