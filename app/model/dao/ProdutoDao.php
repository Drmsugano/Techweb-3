<?php
namespace app\model\dao;
use app\model\entity\Produto;
use \PDOExcetion;
use \PDO;

class ProdutoDao extends Dao{
    public function __construct() {
        parent::__construct();
    }
    public function create($produto) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO produto (descricao, tipo, quantidade, categoria) VALUES (:descricao, :tipo, :quantidade, :categoria);");
            $pdo_sql->bindValue(":descricao", $produto->descricao);
            $pdo_sql->bindValue(":tipo", $produto->tipo);
            $pdo_sql->bindValue(":quantidade", $produto->quantidade);
            $pdo_sql->bindValue(":categoria", $produto->categoria);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM produto;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $produtos = array();
            foreach ($array_retorno as $array_prod) {
                $produtos[] = $this->listaProduto($array_prod);
            }
            return $produtos;
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM produto WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_prod = $pdo_sql->fetchAll();
            $produtoForm = array();
            foreach ($array_prod as $lista) {
                $produtoForm[] = $this->listaProduto($lista);
            }
            return $produtoForm;
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function update($produto) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("UPDATE produto SET descricao=:descricao, tipo=:tipo, quantidade=:quantidade, categoria=:categoria WHERE id=:id;");
            $pdo_sql->bindValue(":id", $produto->id);
            $pdo_sql->bindParam(":descricao", $produto->descricao, PDO::PARAM_STR);
            $pdo_sql->bindParam(":tipo", $produto->tipo, PDO::PARAM_STR);
            $pdo_sql->bindParam(":quantidade", $produto->quantidade, PDO::PARAM_INT);
            $pdo_sql->bindParam(":categoria", $produto->categoria, PDO::PARAM_STR);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }

    public function delete($produto) {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("DELETE FROM produto WHERE id= :id;");
            $pdo_sql->bindValue(":id", $produto->id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error '. $ex->getMessage();
        }
    }
    public function listaProduto($row)
    {
        $produto = new Produto();
        $produto->id = $row["id"];
        $produto->descricao = $row["descricao"];
        $produto->tipo = $row["tipo"];
        $produto->quantidade = $row["quantidade"];
        $produto->categoria = $row["categoria"];
        return $produto;
    }

}