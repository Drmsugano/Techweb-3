<?php
class FornecedorDAO extends DAO
{
    public function create($fornecedor)
    {
        try {
            $pdo = Conexao::getConexao();
            $pdo_sql = $pdo->prepare("INSERT INTO fornecedor ( nome, email, telefone, cnpj, inscricao_estadual, cep, uf, cidade, endereco,bairro) VALUES (:nome,:email,:telefone,:cnpj,:ie,:cep,:uf,:cidade,:endereco,:bairro)");
            $pdo_sql->bindValue(":nome", $fornecedor->nome);
            $pdo_sql->bindValue(":email", $fornecedor->email);
            $pdo_sql->bindValue(":telefone", $fornecedor->telefone);
            $pdo_sql->bindValue(":cnpj", $fornecedor->cnpj);
            $pdo_sql->bindValue(":ie", $fornecedor->ie);
            $pdo_sql->bindValue(":cep", $fornecedor->cep);
            $pdo_sql->bindValue(":uf", $fornecedor->uf);
            $pdo_sql->bindValue(":cidade", $fornecedor->cidade);
            $pdo_sql->bindValue(":endereco", $fornecedor->endereco);
            $pdo_sql->bindValue(":bairro", $fornecedor->bairro);
            if ($pdo_sql->execute() === true) {
                header('location: /cadastroFornecedor');
            } else {
                echo '<script>
                alert ("Falhou em Cadastrar")
                </script>';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function read($fornecedor)
    {
        try {
            $conexao = Conexao::getConexao();
            if ($conexao === null) {
                throw new Exception("Não foi possível estabelecer uma conexão com o banco de dados.");
            }

            $sql = "SELECT id, nome, email, telefone, cnpj, inscricao_estadual,cnpj, cep, uf, cidade, bairro,endereco FROM fornecedor WHERE id = :id";
            $result = $conexao->prepare($sql);
            $result->bindValue(":id", $fornecedor->id, PDO::PARAM_INT);
            $result->execute();
            $lista = $result->fetchAll(PDO::FETCH_BOTH);
            $fornecedorForm = array();
            foreach ($lista as $l) {
                $fornecedorForm[] = $this->listaFornecedor($l);
            }
            return $fornecedorForm;
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

            $sql = "SELECT id, nome, email, telefone, cnpj, inscricao_estadual,cnpj, cep, uf, cidade, bairro, endereco FROM fornecedor";
            $result = $conexao->prepare($sql);
            $result->execute();
            $lista = $result->fetchAll(PDO::FETCH_BOTH);
            $fornecedorList = array();
            foreach ($lista as $l) {
                $fornecedorList[] = $this->listaFornecedor($l);
            }
            return $fornecedorList;
        } catch (Exception $e) {
            echo '<script>alert("' . $e->getMessage() . '")</script>';

        }
    }
    public function update($fornecedor)
    {
        try {
            $pdo = Conexao::getConexao();
            $pdo_sql = $pdo->prepare("UPDATE fornecedor SET nome = :nome, email = :email,  telefone = :telefone, cnpj = :cnpj, inscricao_estadual = :ie, cep = :cep, uf = :uf, cidade = :cidade, bairro = :bairro, endereco = :endereco
WHERE id = :id;");
            $pdo_sql->bindValue(":nome", $fornecedor->nome);
            $pdo_sql->bindValue(":email", $fornecedor->email);
            $pdo_sql->bindValue(":telefone", $fornecedor->telefone);
            $pdo_sql->bindValue(":cnpj", $fornecedor->cnpj);
            $pdo_sql->bindValue(":ie", $fornecedor->ie);
            $pdo_sql->bindValue(":cep", $fornecedor->cep);
            $pdo_sql->bindValue(":uf", $fornecedor->uf);
            $pdo_sql->bindValue(":cidade", $fornecedor->cidade);
            $pdo_sql->bindValue(":bairro", $fornecedor->bairro);
            $pdo_sql->bindValue(":endereco", $fornecedor->endereco);
            $pdo_sql->bindValue(":id", $fornecedor->id, PDO::PARAM_INT);
            if ($pdo_sql->execute() === true) {
                header('location: /cadastroFornecedor');
            } else {
                echo '<script>
                alert ("Falhou em Alterar")
                </script>';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function delete($fornecedor)
    {
        try {
            $conexao = Conexao::getConexao();
            if ($conexao === null) {
                throw new Exception("Não foi possível estabelecer uma conexão com o banco de dados.");
            }
            $sql = "DELETE FROM fornecedor WHERE id = :id";
            $result = $conexao->prepare($sql);
            $result->bindParam(":id", $fornecedor->id, PDO::PARAM_INT);
            $result->execute();
            header("location: /cadastroFornecedor");
            exit;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function listaFornecedor($row)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->id = $row["id"];
        $fornecedor->nome = $row["nome"];
        $fornecedor->email = $row["email"];
        $fornecedor->telefone = $row["telefone"];
        $fornecedor->cnpj = $row["cnpj"];
        $fornecedor->ie = $row["inscricao_estadual"];
        $fornecedor->cep = $row["cep"];
        $fornecedor->uf = $row["uf"];
        $fornecedor->cidade = $row["cidade"];
        $fornecedor->bairro = $row["bairro"];
        $fornecedor->endereco = $row["endereco"];
        return $fornecedor;
    }
}