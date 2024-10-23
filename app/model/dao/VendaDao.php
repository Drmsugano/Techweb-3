<?php
namespace app\model\dao;
use app\model\entity\Venda;
use \PDOExcetion;
use \PDO;

class VendaDao extends Dao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($venda)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO venda (valor, data, produto_id, vendedor_id) VALUES (:valor, :data, :produto_id, :vendedor_id);");
            $pdo_sql->bindParam(":valor", $venda->valor, PDO::PARAM_STR);
            $pdo_sql->bindParam(":data", $venda, PDO::PARAM_STR);
            $pdo_sql->bindParam(":produto_id", $venda->produto_id, PDO::PARAM_INT);
            $pdo_sql->bindParam(":vendedor_id", $venda->vendedor_id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read_all()
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM venda;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $vendas = [];
            foreach ($array_retorno as $array_vnd) {
                $venda = new Venda();
                $venda->id = $array_vnd['id'];
                $venda->valor = $array_vnd['valor'];
                $venda->data = $array_vnd['data'];
                $venda->produto_id = $array_vnd['produto_id'];
                $venda->vendedor_id = $array_vnd['vendedor_id'];
                $vendas[] = $venda;
            }
            return $vendas;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM venda WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_vnd = $pdo_sql->fetch();
            $venda = new Venda();
            $venda->id = $array_vnd['id'];
            $venda->valor = $array_vnd['valor'];
            $venda->data = $array_vnd['data'];
            $venda->produto_id = $array_vnd['produto_id'];
            $venda->vendedor_id = $array_vnd['vendedor_id'];
            return $venda;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function update($venda)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("UPDATE venda SET valor=:valor, data=:data, produto_id=:produto_id, vendedor_id=:vendedor_id WHERE id=:id;");
            $pdo_sql->bindValue(":id", $venda->id);
            $pdo_sql->bindParam(":valor", $venda->valor, PDO::PARAM_STR);
            $pdo_sql->bindParam(":data",$venda->data, PDO::PARAM_STR);
            $pdo_sql->bindParam(":produto_id", $venda->produto_id, PDO::PARAM_INT);
            $pdo_sql->bindParam(":vendedor_id", $venda->vendedor_id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("DELETE FROM venda WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
}