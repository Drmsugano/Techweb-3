<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
    include __DIR__."/../../components/navbar.php";
    ?>
<div class="container m-3">
    <h2>CRUD de Funcionários</h2>
    <div class="mb-3">
    <form action="/funcionario/form/store" method="post">
            <input type="number" id="idFuncionario" name="id" hidden>
            <label class="fs-5 fw-bold mp-3" for="nome">Nome do Funcionário</label>
            <input type="text" class="form-control mb-3" name="nome" id="nome" placeholder="Nome do Funcionario" required>
            <label class="fs-5 fw-bold mp-3" for="email">E-mail do Funcionário</label>
            <input type="email" class="form-control mb-3" name="email" id="email" placeholder="E-mail do Funcionario" required>
            <label class="fs-5 fw-bold mp-3" for="senha">Senha do Funcionário</label>
            <input type="password" class="form-control mb-3" name="senha" id="senha" placeholder="Senha do Funcionario" required>
            <button type="submit" class="mb-3 btn btn-primary" name="cadastrarFuncionario" id="botao">Cadastrar Funcionario</button>
        </form>
    </div>
    <div class="constainer-sm justify-content-center">
        <?php 
        require_once __DIR__."/../../components/lista.php";
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>