<?php
require_once 'Funcionario.class.php';
require_once 'FuncionarioDAO.class.php';
require_once 'Util.class.php';

$util = new Util();
$dao = new FuncionarioDAO();

if(isset($_POST['cadastrar'])) {
    $funcionario = new Funcionario();
	$funcionario->nome = $_POST['nome'];
    $funcionario->email = $_POST['email'];
    $funcionario->senha = $_POST['senha'];
    $funcionario->dataCadastro = $util->dataAtual(2); // Data e hora atual

    if ($dao->create($funcionario) == 'ok'){
        header("Location: ../index.php");
    } else {
        // Isso não funciona pensar em uma maneira de apresentar a mensagem
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; // Se der erro imprime na tela um script
    }
} elseif (isset($_GET['del'])) {

    $id_funcionario = $_GET['del'];

    if ($dao->delete($id_funcionario) == 'ok') {
        // Submete para a própria página
        header('Location: ../index.php');
    } else {
        // Isso não funciona pensar em uma maneira de apresentar a mensagem
        echo '<script type="text/javascript">alert("Erro ao apagar!");</script>';
    }
} elseif (isset($_POST['editar'])) {
    $funcionario = new Funcionario();
    $funcionario->id = $_POST['id'];
	$funcionario->nome = $_POST['nome'];
    $funcionario->email = $_POST['email'];
    $funcionario->senha = $_POST['senha'];
    $funcionario->dataCadastro = $util->dataAtual(2); // Data e hora atual

    if ($dao->update($funcionario) == 'ok'){
        header("Location: ../index.php");
    } else {
        // Isso não funciona pensar em uma maneira de apresentar a mensagem
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; // Se der erro imprime na tela um script
    }
}

?>