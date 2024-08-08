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
            <?php foreach ($funcionarioController->listarAll() as $funcionario) { ?>
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
                        <button class="btn btn-warning text-white" onclick="alterarFuncionario()">Editar</button>
                        <a class="btn btn-danger" href='?deletar=<?= $funcionario->id ?>' class='m-1 btn btn-danger' onclick="return confirm ('Confirma a Exclusão')">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>