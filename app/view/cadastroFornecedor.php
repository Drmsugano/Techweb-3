<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php 
    include("components/navbar.php");
    ?>
    <div class="m-3">
        <h2>CRUD de Fornecedor</h2>
        <div class="mb-3">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <input type="number" id="idFornecedor" name="id" hidden>
                        <label class="fs-5 fw-bold mp-3" for="nome">Nome do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="nome" id="nome"
                            placeholder="Nome do Fornecedor" required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="email">E-mail do Fornecedor</label>
                        <input type="email" class="form-control mb-3" name="email" id="email"
                            placeholder="E-mail do Fornecedor" required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">Telefone do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="telefone" id="telefone"
                            placeholder="Telefone do Fornecedor" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">IE (Inscrição Estadual) do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="ie" id="ie" placeholder="IE do Fornecedor"
                            required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">CNPJ do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="cnpj" id="cnpj"
                            placeholder="CNPJ do Fornecedor" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">CEP do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="cep" id="cep" placeholder="CEP do Fornecedor"
                           onblur="pesquisacep(this.value)" required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">UF do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="uf" id="uf" placeholder="UF do Fornecedor"
                            required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">Cidade do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="cidade" id="cidade"
                            placeholder="Cidade do Fornecedor" required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">Endereço do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="endereco" id="rua"
                            placeholder="Endereço do Fornecedor" required>
                    </div>
                    <div class="col">
                        <label class="fs-5 fw-bold mp-3" for="telefone">Bairro do Fornecedor</label>
                        <input type="text" class="form-control mb-3" name="bairro" id="bairro"
                            placeholder="Bairro do Fornecedor" required>
                    </div>
                </div>
                <button type="submit" class="mb-3 btn btn-primary" name="cadastrarFornecedor" id="botao">Cadastrar
                    Fornecedor</button>
            </form>
        </div>
        <div class="constainer-sm justify-content-center">
            <?php
            require_once "components/lista.php";
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="app/public/fornecedorCep.js"></script>
</body>

</html>