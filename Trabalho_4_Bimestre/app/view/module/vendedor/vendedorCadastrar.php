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
                        <b>Cadastro de Vendedor</b>
                        </div>
                    <hr>
                    <div class="container">
                        <form action="/Vendedor/form/store" method="post">
                            <input type="number" id="idFuncionario" name="id" hidden>
                            <label class="fs-5 fw-bold mp-3" for="nome">Nome do Vendedor</label>
                            <input type="text" class="form-control mb-3" name="nome" id="nome" required>
                            <div class="row">
                                <div class="col">
                                    <label class="fs-5 fw-bold mp-3" for="nivel">Nível do Vendedor</label>
                                        <input type="text" class="form-control mb-3" name="nivel" required>
                                </div>
                                <div class="col">
                                    <label class="fs-5 fw-bold mp-3" for="equipe">Equipe</label>
                                    <select class="form-control mb-3" name="equipe" required>
                                        <?php foreach ($equipe as $equipes) { ?>
                                            <option value="<?= $equipes->id ?>"><?= $equipes->nome ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="mb-3 btn btn-primary" name="cadastrarVendedor"
                                id="botao">Cadastrar Vendedor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/sidebar.js"></script>
</body>

</html>