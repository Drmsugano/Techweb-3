<?php
require_once 'DAO.class.php';

class FuncionarioDAO extends DAO {

    public function __construct() {
        // Chama o construtor do pai
        parent::__construct();
    }

    public function create($funcionario) {
        
        try {
            $pdo = $this->conexao->get_pdo();
        
            $pdo_sql = $pdo->prepare("INSERT INTO funcionario (nome, email, senha) VALUES (:nome, :email, :senha);");
            $pdo_sql->bindParam(":nome", $funcionario->nome,  PDO::PARAM_STR);
            $pdo_sql->bindParam(":email", $funcionario->email, PDO::PARAM_STR);
            $pdo_sql->bindParam(":senha", $funcionario->senha,  PDO::PARAM_STR);

            if ($pdo_sql->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return "error" . $ex->getMessage();
        }

    }

    public function read($id){

    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("SELECT id, nome, email from funcionario");
            $pdo_sql->execute();
            // Todos os registro em um array
            $array_retorno = $pdo_sql->fetchAll();
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
            return 'erro' . $ex.getMessage();
        }
    }

    public function update($object) {

    }

    public function delete($id) {

    }

}

?>