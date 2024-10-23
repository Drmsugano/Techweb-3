<?php
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($url) {
    case "/Produto": ?>
        <div class="modal fade" id="produtoModal<?= $produtos->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Alteração de Produto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-3">
                        <?php
                        foreach ($produto->read($produtos->id) as $produtos) { ?>
                            <form action="/Produto/update?id=<?= $produtos->id ?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="d-flex">
                                        <label class="fs-6 fw-bold me-2" for="id">ID do Produto: </label>
                                        <input type="number" class="form-control form-control-sm mb-2 w-auto"
                                            value="<?= $produtos->id ?>" name="id" readonly>
                                    </div>
                                    <br>
                                    <label class="fs-6 fw-bold" for="nome">Descrição do Produto</label>
                                    <input type="text" class="form-control mb-3" name="descricao"
                                        placeholder="<?= $produtos->descricao ?>">
                                    <label class="fs-6 fw-bold" for="nome">Tipo do Produto</label>
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="<?= $produtos->tipo ?>">
                                    <label class="fs-6 fw-bold" for="nome">Quantidade do Produto</label>
                                    <input type="number" class="form-control mb-3" name="quantidade"
                                        placeholder="<?= $produtos->quantidade ?>">
                                    <label class="fs-6 fw-bold" for="nome">Categoria do Produto</label>
                                    <input type="text" class="form-control mb-3" name="categoria"
                                        placeholder="<?= $produtos->categoria ?>">
                                </div>
                                <div class="m-3">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary" name="alterarProduto">
                                            Alterar Produto
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        break;

    case "/Equipe": ?>
        <div class="modal fade" id="equipeModal<?= $equipes->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Alteração de Equipes</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-3">
                        <?php
                        foreach ($equipe->read($equipes->id) as $equipes) { ?>
                            <form action="/Equipe/update?id=<?= $equipes->id ?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="d-flex">
                                        <label class="fs-6 fw-bold me-2" for="id">ID da Equipe: </label>
                                        <input type="number" class="form-control form-control-sm mb-2 w-auto"
                                            value="<?= $equipes->id ?>" name="id" readonly>
                                    </div>
                                    <br>
                                    <label class="fs-6 fw-bold" for="nome">Nome da Equipe</label>
                                    <input type="text" class="form-control mb-3" name="nome" placeholder="<?= $equipes->nome ?>">
                                    <div class="row">
                                        <div class="col">
                                            <label class="fs-5 fw-bold mp-3" for="inicio">Inicio da Equipe</label>
                                            <input type="date" class="form-control mb-3" name="inicio" id="inicio" required>
                                        </div>
                                        <div class="col">
                                            <label class="fs-5 fw-bold mp-3" for="fim">Fim da Equipe</label>
                                            <input type="date" class="form-control mb-3" name="fim" id="fim" required
                                                onchange="validateDates()">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary" name="alterarEquipe">
                                            Alterar Equipe
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        break;
}
