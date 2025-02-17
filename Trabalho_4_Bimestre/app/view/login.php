<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Login</title>
</head>

<body class="bg-primary">
    <nav class="navbar bg-dark">
        <div class="container-fluid text-center text-light">
            <span class="navbar-brand mb-0 h1 text-light">Techweb-3</span>
        </div>
    </nav>
    <div class="container">
        <div class="body-form">
            <div class="card rounded shadow-lg mb-3">
                <div class="card-header bg-dark">
                    <h3 class="text-center text-light">Login</h3>
                </div>
                <div class="card-body">
                    <form action="/autenticar" method="POST">
                        <label for="inputUsuario" class="col-form-label text-bold">Usuario</label>
                        <input type="text" id="inputUsuario" name="usuario" class="form-control" required>
                        <label for="inputSenha" class="col-form-label text-bold">Senha</label>
                        <input type="password" id="inputSenha" name="senha" class="form-control mb-3" required>
                        <div class="text-center">
                            <button class="pe-4 ps-4 btn btn-primary w-50" type="submit">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-body-tertiary">
                    @IFPR
                </div>
            </div>
            <?php if (isset($_GET['fail'])) { ?>
                <div class="alert alert-danger" role="alert">
                    Usuario ou Senha Incorreta
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>