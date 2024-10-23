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
    <?php include("../app/view/components/sidebar.php"); ?>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu position-fixed pt-4'></i>
        </div>
        <br>
        <div class="m-4">
            <div class="card border-dark" style="width:95%; height:auto; margin: 0 auto;">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Equipes</h4>
                        <hr>
                    </div>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Início</th>
                                    <th scope="col">Fim</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($equipe->read_all() as $equipes) {
                                    include("../app/view/components/modal.php");
                                ?>
                                    <tr>
                                        <th scope="row"><?= $equipes->id ?></th>
                                        <td><?= $equipes->nome ?></td>
                                        <td><?= date('d/m/Y', strtotime($equipes->inicio)) ?></td>
                                        <td><?= date('d/m/Y', strtotime($equipes->fim)) ?></td>
                                        <td>
                                            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#equipeModal<?= $equipes->id ?>">Editar</button>
                                            <a class="btn btn-danger" href='/Equipe/destroy?id=<?= $equipes->id ?>' onclick="return confirm('Confirma a Exclusão?')">Excluir</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="/js/sidebar.js"></script>
</body>
</html>
