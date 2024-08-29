<?php
require_once 'classes/FuncionarioDAO.class.php';

$dao = new FuncionarioDAO();

$funcionario = null;

if (isset($_GET['edit'])) {
	$id_funcionario = $_GET['edit'];
	$funcionario = $dao->read($id_funcionario);
} else {
	$funcionario = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP OO</title>
</head>
<body>
	<form action="classes/FuncionarioController.php" method="POST">

		<input type="hidden" name="id" value="<?=(!is_null($funcionario))?($funcionario->id):('') ?>" />

		<label>Nome</label>
		<input type="text" name="nome" value="<?=(!is_null($funcionario))?($funcionario->nome):('') ?>" /> <br>

		<label>E-mail</label>
		<input type="email" name="email" value="<?=(!is_null($funcionario))?($funcionario->email):('') ?>" /> <br>

		<label>Senha</label>
		<input type="password" name="senha" value="<?=(!is_null($funcionario))?($funcionario->senha):('') ?>" /> <br>

		<button type="submit" name="<?=(is_null($funcionario))?("cadastrar"):("editar") ?>">
			<?=(is_null($funcionario))?("Cadastrar"):("Editar") ?>
		</button>
	</form>
	
	<hr>

	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dao->read_all() as $funcionario) :?>
				<tr>
					<td><?= $funcionario->nome ?></td>
					<td><?= $funcionario->email ?></td>
					<td>
						<a href="index.php?edit=<?=$funcionario->id?>">
						<button type="button">
							Editar
						</button>
						</a>
						
						<a href="classes/FuncionarioController.php?del=<?= $funcionario->id ?>">
						<button type="button">
							Excluir
						</button>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>