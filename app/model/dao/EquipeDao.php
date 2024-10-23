<?php
namespace app\model\dao;
use app\model\entity\Equipe;
use \PDOExcetion; 
use \PDO;

class EquipeDao extends DAO{
    public function __construct() {
        parent::__construct();
    }
    public function create($equipe) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO equipe (nome, inicio, fim) VALUES (:nome, :inicio, :fim);");
            $pdo_sql->bindParam(":nome", $equipe->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":inicio", $equipe->inicio->format('Y-m-d H:i:s'), PDO::PARAM_STR);
            $pdo_sql->bindParam(":fim", $equipe->fim->format('Y-m-d'), PDO::PARAM_STR);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT id, nome FROM equipe;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $equipes = [];
            foreach ($array_retorno as $array_eqp) {
                $equipe = new Equipe();
                $equipe->id = $array_eqp['id'];
                $equipe->nome = $array_eqp['nome'];
                $equipes[] = $equipe;
            }
            return $equipes;            
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT id, nome, inicio, fim FROM equipe WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_eqp = $pdo_sql->fetch();
            $equipe = new Equipe();
            $equipe->id = $array_eqp['id'];
            $equipe->nome = $array_eqp['nome'];
            $equipe->inicio = new \DateTime($array_eqp['inicio']);
            $equipe->fim = new \DateTime($array_eqp['fim']);
            return $equipe;           
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function update($equipe) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("UPDATE equipe SET nome=:nome, inicio=:inicio, fim=:fim WHERE id=:id;");
            $pdo_sql->bindValue(":id", $equipe->id);
            $pdo_sql->bindParam(":nome", $equipe->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":inicio", $equipe->inicio->format('Y-m-d H:i:s'), PDO::PARAM_STR);
            $pdo_sql->bindParam(":fim", $equipe->fim->format('Y-m-d'), PDO::PARAM_STR);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function delete($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("DELETE FROM equipe WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

}