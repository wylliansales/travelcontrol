<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <h3 class="title">Fornecedor</h3>
                        <form id="formFornecedor" action="?modulo=fonecedor&acao=cadastrar" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nome Fantasia</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Razão Social</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Inscrição Estatual</label>
                                        <input type="number" class="form-control" maxlength="9">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cnpj/Cpf</label>
                                        <input type="number" class="form-control" maxlength="14">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Endereço</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cidade</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estado</label>
                                        <input type="text" class="form-control" maxlength="2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contato</label>
                                        <input type='number' class="form-control" maxlength="10"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Ativo</label>
                                        <select name="" id="" class="form-control">
                                            <option value="1" selected>Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Salvar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>