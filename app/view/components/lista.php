<?php 
$funcionarioController=new FuncionarioController(); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarioController->listarAll() as $funcionario): 
                include "modal.php";
                ?>

                <tr>
                    <th scope="row">
                        <?= $funcionario->id ?>
                    </th>
                    <td>
                        <?= $funcionario->nome ?>
                    </td>
                    <td>
                        <?= $funcionario->email ?>
                    </td>
                    <td>
                        <i class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#funcionarioModal<?= $funcionario->id ?>">Editar</i>
                        <a class="btn btn-danger" href='?del=<?= $funcionario->id ?>' class='m-1 btn btn-danger' onclick="return confirm ('Confirma a Exclusão')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>