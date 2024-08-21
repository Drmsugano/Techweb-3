<?php
$funcionarioController = new FuncionarioController();
$fornecedorController = new FornecedorController();
$request = $_SERVER["REQUEST_URI"];

switch ($request) {
    case "/cadastroFuncionario":
        ?>
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
                            <i class="btn btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#funcionarioModal<?= $funcionario->id ?>">Editar</i>
                            <a class="btn btn-danger" href='?del=<?= $funcionario->id ?>' class='m-1 btn btn-danger'
                                onclick="return confirm ('Confirma a Exclusão')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        break;

    case "/cadastroFornecedor":
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Inscrição Estadual</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">CEP</th>
                    <th scope="col">UF</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($fornecedorController->listarAll() as $fornecedor) {
                    require "modalFornecedor.php";
                    ?>
                    <tr>
                        <td>
                            <?= $fornecedor->nome ?>
                        </td>
                        <td>
                            <?= $fornecedor->telefone ?>
                        </td>
                        <td>
                            <?= $fornecedor->email ?>
                        </td>
                        <td>
                            <?= $fornecedor->ie ?>
                        </td>
                        <td>
                            <?= $fornecedor->cnpj ?>
                        </td>
                        <td>
                            <?= $fornecedor->cep ?>
                        </td>
                        <td>
                            <?= $fornecedor->uf ?>
                        </td>
                        <td>
                            <?= $fornecedor->cidade ?>
                        </td>
                        <td>
                            <?= $fornecedor->endereco ?>
                        </td>
                        <td>
                            <?= $fornecedor->bairro ?>
                        </td>
                        <td>
                            <i class="btn btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#fornecedorModal<?= $fornecedor->id  ?>">Editar</i>
                            <a class="btn btn-danger" href='?delFornecedor=<?= $fornecedor->id ?>' class='m-1 btn btn-danger'
                                onclick="return confirm ('Confirma a Exclusão')">Excluir</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <?php break;
}
?>