<?php
require_once 'classes/Funcionario.class.php';
require_once 'classes/FuncionarioDAO.class.php';

$dao = new FuncionarioDAO();

if (isset($_POST['cadastrar'])) {
    $funcionario = new Funcionario();
    $funcionario->nome = $_POST['nome'];
    $funcionario->email = $_POST['email'];
    $funcionario->senha = $_POST['senha'];

    if ($dao->create($funcionario) == 'ok') {
        header("Location: index.php");
    } else {
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OO</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="hidden" name="id" value="" />

        <label>Nome</label>
        <input type="text" name="nome" value="" /> <br>

        <label>E-mail</label>
        <input type="email" name="email" value="" /> <br>

        <label>Senha</label>
        <input type="password" name="senha" value="" /> <br>

        <button type="submit" name="cadastrar">
            Cadastrar
        </button>
    </form>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dao->read_all() as $funcionario): ?>
            <tr>
                <td><?= $funcionario->nome?></td>
                <td><?= $funcionario->email?></td>
                <td>
                    <button type="button">Editar</button>
                    <button type="button">Excluir</button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>