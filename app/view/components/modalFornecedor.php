<div class="modal fade" id="fornecedorModal<?= $fornecedor->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Alteração de Fornecedor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <?php foreach ($fornecedorController->listar($fornecedor->id) as $fornecedorForm) { ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="d-flex">
                                <label class="fs-6 fw-bold me-2" for="id" hidden>ID do Fornecedor: </label>
                                <input type="number" class="form-control form-control-sm mb-2 w-auto"
                                    value="<?= $fornecedorForm->id ?>" name="id" hidden readonly>
                            </div>
                            <label class="fs-6 fw-bold" for="nome">Nome do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="nome"
                                placeholder="<?= $fornecedorForm->nome ?>">
                            <label class="fs-6 fw-bold" for="nome">Email do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="email"
                                placeholder="<?= $fornecedorForm->email ?>">
                            <label class="fs-5 fw-bold mp-3" for="telefone">Telefone do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="telefone" id="telefone"
                                placeholder="Telefone do Fornecedor"  placeholder="<?= $fornecedorForm->telefone ?>"
                                required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">IE (Inscrição Estadual) do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="ie" id="ie"
                            placeholder="<?= $fornecedorForm->ie ?>"required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">CNPJ do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="cnpj" id="cnpj"
                            placeholder="<?= $fornecedorForm->cnpj ?>" required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">CEP do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="cep" id="cep" placeholder="<?= $fornecedorForm->cep ?>"
                            onblur="pesquisacep(this.value)" required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">UF do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="uf" id="uf" placeholder="<?= $fornecedorForm->uf ?>"
                                required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">Cidade do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="cidade" id="cidade"
                                placeholder="<?= $fornecedorForm->cidade ?>" required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">Endereço do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="endereco" id="endereco"
                                placeholder="<?= $fornecedorForm->endereco ?>r" required>
                            <label class="fs-5 fw-bold mp-3" for="telefone">Bairro do Fornecedor</label>
                            <input type="text" class="form-control mb-3" name="bairro" id="bairro"
                                placeholder="<?= $fornecedorForm->bairro ?>" required>
                        </div>
                        <div class="m-3">
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary" name="alterarFornecedor">
                                    Alterar Fornecedor
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