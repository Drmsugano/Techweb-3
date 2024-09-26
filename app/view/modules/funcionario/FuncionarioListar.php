<?php
include __DIR__."/../../includes/header.php";
?>
<br>
<body>
    <main>
        <a href="/funcionario/form">Cadastrar Funcionario</a>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($funcionarios as $funcionario): ?>
                <tr>
                    <td><?= $funcionario->nome ?></td>
                    <td><?= $funcionario->email ?></td>
                    <td>
                        <a href="/funcionario/form?edit=<?= $funcionario->id ?>">
                            <button>Editar</button>
                        </a>

                        <a href="/funcionario/delete?id=<?= $funcionario->id ?>">
                            <button>Excluir</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
    </main>
    </table>

</body>
<?php
include __DIR__."/../../includes/footer.php";
?>