<?php 

namespace app\model\dao;

use app\model\entity\Funcionario;
use \PDOException;
use \PDO;

//require_once('DAO.class.php');
//require_once('model/Funcionario.class.php');

class FuncionarioDAO extends DAO {

	
	public function __construct() {
		// Chama o construtor do pai
        parent::__construct();
	}
	
	
	/**
	* Implementação dos métodos CRUD mais listagem
	*/
	
	/**
	* Método Create (recebe um objeto de funcionario)
	*/
	public function create($funcionario) {
		try {
	
			$pdo = $this->conexao->get_pdo();
			
            $pdo_sql = $pdo->prepare("INSERT INTO funcionario (nome, email, senha, data_cadastro) VALUES (:nome, :email, :senha, :data_);");
            $pdo_sql->bindParam(":nome", $funcionario->nome, PDO::PARAM_STR); // (PDO::PARAM_INT - Só permite entreda de string)
            $pdo_sql->bindParam(":email", $funcionario->email, PDO::PARAM_STR);
            $pdo_sql->bindParam(":senha", $funcionario->senha, PDO::PARAM_STR);
            $pdo_sql->bindParam(":data_", $funcionario->dataCadastro, PDO::PARAM_STR);
            if ($pdo_sql->execute()) {
                return true;
            } else {
                return false;
            }
            return $pdo_sql->fetch();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
	}
	
	
	public function read_all() {
	
		try {
	
			$pdo = $this->conexao->get_pdo();
			
            $pdo_sql = $pdo->prepare("SELECT id, nome, email FROM funcionario;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll(); // Traz todos os registros em um array
            $funcionarios = array(); // Array de objetos funcionarios
            foreach($array_retorno as $array_func) {
            	$funcionario = new Funcionario();
            	$funcionario->id = $array_func['id'];
            	$funcionario->nome = $array_func['nome'];
            	$funcionario->email = $array_func['email'];
            	
            	$funcionarios[] = $funcionario;
            }
            return $funcionarios;            
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
	}
	
	public function delete($id) {
	
		try {
			$pdo = $this->conexao->get_pdo();
		
			$pdo_sql = $pdo->prepare("DELETE FROM funcionario WHERE id=:id ;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            if ($pdo_sql->execute()) { // Se tudo der certo ok
                return true;
            } else {
                return false;
            }
            return $pdo_sql->fetch();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
	}
	
	public function read($id) {

		try {
			$pdo = $this->conexao->get_pdo();
			
            $pdo_sql = $pdo->prepare("SELECT id, nome, email, senha FROM funcionario WHERE id=:id;");
            // Impede SQL Inject, (PDO::PARAM_INT - Só permite entrada de inteiro)
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT); 
            $pdo_sql->execute();
            $array_func = $pdo_sql->fetch();
            // Tranformar array de retorno em objeto funcionario
            $funcionario = new Funcionario();
            $funcionario->id = $array_func['id'];
            $funcionario->nome = $array_func['nome'];
            $funcionario->email = $array_func['email'];
            $funcionario->senha = $array_func['senha'];
            
            return $funcionario;
           
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
	}

    public function update($funcionario) {
        try {

            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("UPDATE funcionario SET nome=:nome, email=:email, senha=:senha WHERE id=:id;");
            $pdo_sql->bindValue(":id", $funcionario->id); 
            $pdo_sql->bindParam(":nome", $funcionario->nome, PDO::PARAM_STR); // (PDO::PARAM_INT - Só permite entreda de string)
            $pdo_sql->bindParam(":email", $funcionario->email, PDO::PARAM_STR);
            $pdo_sql->bindParam(":senha", $funcionario->senha, PDO::PARAM_STR);

            if ($pdo_sql->execute()) {
                return true;
            } else {
                return false;
            }
            return $pdo_sql->fetch();

        } catch (PDOException $ex) {
            var_dump($ex.getMessage());
            return 'error '. $ex->getMessage();
        }
    }

}

?>