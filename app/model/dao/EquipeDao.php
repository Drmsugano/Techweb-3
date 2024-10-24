<?php
namespace app\model\dao;
use app\model\entity\Equipe;
use \PDOExcetion; 
use \PDO;

class EquipeDao extends Dao{
    public function __construct() {
        parent::__construct();
    }
    public function create($equipe) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO equipe (nome, inicio, fim) VALUES (:nome, :inicio, :fim);");
            $pdo_sql->bindValue(":nome", $equipe->nome);
            $pdo_sql->bindValue(":inicio", $equipe->inicio);
            $pdo_sql->bindValue(":fim", $equipe->fim);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM equipe;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $equipes = array();
            foreach ($array_retorno as $lista) {
                $equipes[] = $this->listaEquipe($lista);
            }
            return $equipes;            
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM equipe WHERE id= :id;");
            $pdo_sql->bindParam(":id",$id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $retorno = $pdo_sql->fetchAll();
            $equipeForm = array();
            foreach ($retorno as $lista) {
                $equipeForm[] = $this->listaEquipe($lista);
            }
            return $equipeForm;           
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
            $pdo_sql->bindParam(":inicio", $equipe->inicio);
            $pdo_sql->bindParam(":fim", $equipe->fim);
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

    public function listaEquipe($row)
    {
        $equipe = new Equipe();
        $equipe->id = $row["id"];
        $equipe->nome = $row["nome"];
        $equipe->inicio = $row["inicio"];
        $equipe->fim = $row["fim"];
        return $equipe;
    }

}