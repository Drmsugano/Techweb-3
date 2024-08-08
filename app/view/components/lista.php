<?php 
$funcionarioController = new FuncionarioController();
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Setor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($funcionarioController->listarAll() as $funcionario) { ?>
            <tr>
                <th scope="row"><?= $funcionario->id ?></th>
                <td><?= $funcionario->nome ?></td>
                <td><?= $funcionario->email ?></td>
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>