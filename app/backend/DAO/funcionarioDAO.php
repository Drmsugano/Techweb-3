<?php
require_once "DAO.php";
class FuncionarioDAO extends DAO
{
    public function create($funcionario)
    {
        try {
            $pdo = Conexao::getConexao();
            $pdo_sql = $pdo->prepare("INSERT INTO funcionario (nome,email,senha) VALUES (:nome,:email,:senha)");
            $pdo_sql->bindValue(":nome", $funcionario->nome);
            $pdo_sql->bindValue(":email", $funcionario->email);
            $pdo_sql->bindValue(":senha", $funcionario->senha);
            if ($pdo_sql->execute() === true) {
                header('location: /cadastroFuncionario');
            } else {
                echo '<script>
                alert ("Falhou em Cadastrar")
                </script>';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function read($funcionario)
    {
        try {
            $conexao = Conexao::getConexao();
            if ($conexao === null) {
                throw new Exception("Não foi possível estabelecer uma conexão com o banco de dados.");
            }

            $sql = "SELECT * FROM funcionario WHERE id = :id";
            $result = $conexao->prepare($sql);
            $result->bindValue(":id", $funcionario->id, PDO::PARAM_INT);
            $result->execute();
            $lista = $result->fetchAll(PDO::FETCH_BOTH);
            $funcionarioForm = array();
            foreach ($lista as $l) {
                $funcionarioForm[] = $this->listaFuncionario($l);
            }
            return $funcionarioForm;
        } catch (Exception $e) {
            echo '<script>alert("' . $e->getMessage() . '")</script>';
        }
    }
    public function read_all()
    {
        try {
            $conexao = Conexao::getConexao();
            if ($conexao === null) {
                throw new Exception("Não foi possível estabelecer uma conexão com o banco de dados.");
            }

            $sql = "SELECT * FROM funcionario";
            $result = $conexao->prepare($sql);
            $result->execute();
            $lista = $result->fetchAll(PDO::FETCH_BOTH);
            $funcionarioList = array();
            foreach ($lista as $l) {
                $funcionarioList[] = $this->listaFuncionario($l);
            }
            return $funcionarioList;
        } catch (Exception $e) {
            echo '<script>alert("' . $e->getMessage() . '")</script>';

        }
    }
    public function update($funcionario)
    {
        try {
            $pdo = Conexao::getConexao();
            $pdo_sql = $pdo->prepare("UPDATE funcionario SET nome = :nome, email = :email , senha = :senha WHERE id = :id");
            $pdo_sql->bindValue(":nome", $funcionario->nome);
            $pdo_sql->bindValue(":email", $funcionario->email);
            $pdo_sql->bindValue(":senha", $funcionario->senha);
            $pdo_sql->bindValue(":id", $funcionario->id, PDO::PARAM_INT);
            if ($pdo_sql->execute() === true) {
                header('location: /cadastroFuncionario');
            } else {
                echo '<script>
                alert ("Falhou em Cadastrar")
                </script>';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function delete($funcionario)
    {
        try {
            $conexao = Conexao::getConexao();
            if ($conexao === null) {
                throw new Exception("Não foi possível estabelecer uma conexão com o banco de dados.");
            }
            $sql = "DELETE FROM funcionario WHERE id = :id";
            $result = $conexao->prepare($sql);
            $result->bindParam(":id",$funcionario->id, PDO::PARAM_INT);
            $result->execute();
            header("location: /cadastroFuncionario");
            exit;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function listaFuncionario($row)
    {
        $funcionario = new Funcionario();
        $funcionario->id = $row["id"];
        $funcionario->nome = $row["nome"];
        $funcionario->email = $row["email"];
        $funcionario->senha = $row["senha"];
        return $funcionario;
    }
}