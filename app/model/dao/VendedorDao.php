<?php
namespace app\model\dao;
use app\model\entity\Vendedor;
use \PDOExcetion; 
use \PDO;

class VendedorDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function create($vendedor) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO vendedor (nome, nivel, equipe_id) VALUES (:nome, :nivel, :equipe_id);");
            $pdo_sql->bindParam(":nome", $vendedor->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":nivel", $vendedor->nivel, PDO::PARAM_STR);
            $pdo_sql->bindParam(":equipe_id", $vendedor->equipe_id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT vd.id, vd.nome, vd.nivel, e.nome AS equipe FROM vendedor vd INNER JOIN EQUIPE ON e.id = vd.estilo_id;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $vendedores = [];
            foreach ($array_retorno as $lista) {
                $vendedor = new Vendedor();
                $vendedor->id = $lista['id'];
                $vendedor->nome = $lista['nome'];
                $vendedor->nivel = $lista['nivel'];
                $vendedor->equipe = $lista['equipe'];
                $vendedores[] = $vendedor;
            }
            return $vendedores;
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT id, nome, nivel, equipe_id FROM vendedor WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_vnd = $pdo_sql->fetch();
            $vendedor = new Vendedor();
            $vendedor->id = $array_vnd['id'];
            $vendedor->nome = $array_vnd['nome'];
            $vendedor->nivel = $array_vnd['nivel'];
            $vendedor->equipe_id = $array_vnd['equipe_id'];
            return $vendedor;
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function update($vendedor) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("UPDATE vendedor SET nome=:nome, nivel=:nivel, equipe_id=:equipe_id WHERE id=:id;");
            $pdo_sql->bindValue(":id", $vendedor->id);
            $pdo_sql->bindParam(":nome", $vendedor->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":nivel", $vendedor->nivel, PDO::PARAM_STR);
            $pdo_sql->bindParam(":equipe_id", $vendedor->equipe_id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function delete($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("DELETE FROM vendedor WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }
}