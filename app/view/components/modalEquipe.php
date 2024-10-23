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
                                    <label class="fs-6 fw-bold" for="nome">Data de Inicio da Produto</label>
                                    <input type="date" class="form-control mb-3" name="inicio" value="<?= $equipes->inicio ?>">
                                    <label class="fs-6 fw-bold" for="nome">Data do Término da Equipe</label>
                                    <input type="date" class="form-control mb-3" name="termino" value="<?= $equipes->fim ?>">
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