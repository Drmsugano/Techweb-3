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
                        <b>Cadastro de Vendas</b>
                    </div>
                    <hr>
                    <div class="container">
                        <form action="/Venda/form/store" method="post">
                            <label class="fs-5 fw-bold mp-3" for="nome">Valor da Venda</label>
                            <input type="text" class="form-control mb-3" name="valor" id="nome" required>
                            <div class="row">
                                <div class="col">
                                    <label class="fs-5 fw-bold mp-3">Produtos</label>
                                    <select class="form-control" name="produto">
                                        <?php foreach ($produto->read_all() as $produtos) { ?>
                                            <option value="<?= $produtos->id ?>"><?= $produtos->descricao ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="fs-5 fw-bold mp-3">Vendedores</label>
                                    <select class="form-control" name="vendedor">
                                        <?php foreach ($vendedor->read_all() as $vendedores) { ?>
                                            <option value="<?= $vendedores->id ?>"><?= $vendedores->nome ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="mb-3 ms-2 btn btn-primary" name="cadastrarVenda"
                            id="botao">Cadastrar Venda</button>
                    </center>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="/js/sidebar.js"></script>
</body>

</html>