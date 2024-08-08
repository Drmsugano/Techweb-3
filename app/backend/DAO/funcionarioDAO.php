<?php
require_once "DAO.php";
class FuncionarioDAO extends DAO
{
    public function create($funcionario)
    {
        try {
            $pdo = Conexao::getConexao();
            $pdo_sql = $pdo->prepare("INSERT INTO funcionario (nome,email,senha) VALUES (:nome,:email,:senha)");
            $pdo_sql->bindParam(":nome", $funcionario->nome);
            $pdo_sql->bindParam(":email", $funcionario->email);
            $pdo_sql->bindParam(":senha", $funcionario->senha);
            echo '<script>
                        alert ("Funcionario " + ' . $funcionario->nome . ' + " foi Cadastrado")
                </script>';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function read($id)
    {

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
    public function update($object)
    {

    }
    public function delete($id)
    {

    }
    public function listaFuncionario($row)
    {
        $funcionario = new Funcionario();
        $funcionario->id = $row["ID"];
        $funcionario->nome = $row["nome"];
        $funcionario->email = $row["email"];
        $funcionario->senha = $row["senha"];
        return $funcionario;
    }
}