<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>
    <?php
    include("../app/view/components/sidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu position-fixed pt-4'></i>
        </div>
        <br>
        <div class="m-4">
            <div class="card border-dark" style="width:95%; height:auto; margin: 0 auto;">
                <div class="card-body">
                    <div class="card-title">
                        Produtos
                    </div>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produto as $produtos):
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $produtos->id ?>
                                        </th>
                                        <td>
                                            <?= $produtos->descricao ?>
                                        </td>
                                        <td>
                                            <?= $produtos->tipo ?>
                                        </td>
                                        <td>
                                            <?= $produtos->categoria ?>
                                        </td>
                                        <td>
                                            <i class="btn btn-warning text-white" data-bs-toggle="modal"
                                                data-bs-target="#produtoModal<?= $produtos->id ?>">Editar</i>
                                            <a class="btn btn-danger" href='/delete<?= $produtos->id ?>'
                                                class='m-1 btn btn-danger'
                                                onclick="return confirm ('Confirma a Exclusão')">Excluir</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/sidebar.js"></script>
</body>

</html>