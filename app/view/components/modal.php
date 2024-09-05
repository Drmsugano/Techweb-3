<div class="modal fade" id="funcionarioModal<?= $funcionario->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Alteração de Funcionario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <?php foreach ($funcionarioController->listar($funcionario->id) as $funcionarioForm) { ?>
                    <form action="/funcionario/update?id=<?= $funcionario->id ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="container">
                            <div class="d-flex">
                                <label class="fs-6 fw-bold me-2" for="id">ID do Funcionario: </label>
                                <input type="number" class="form-control form-control-sm mb-2 w-auto"
                                    value="<?= $funcionarioForm->id ?>" name="id" readonly>
                            </div>
                            <label class="fs-6 fw-bold" for="nome">Nome do Funcionario</label>
                            <input type="text" class="form-control mb-3" name="nome"
                                placeholder="<?= $funcionarioForm->nome ?>">
                            <label class="fs-6 fw-bold" for="nome">Email do Funcionario</label>
                            <input type="text" class="form-control mb-3" name="email"
                                placeholder="<?= $funcionarioForm->email ?>">
                            <label class="fs-6 fw-bold" for="nome">Senha do Funcionario</label>
                            <input type="text" class="form-control mb-3" name="senha"
                                placeholder="<?= $funcionarioForm->senha ?>">
                        </div>
                        <div class="m-3">
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary" name="alterarFuncionario">
                                    Alterar Funcionario
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