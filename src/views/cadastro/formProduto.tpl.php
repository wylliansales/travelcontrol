<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <h3 class="title">Produto</h3>
                        <form id="formFornecedor" action="?modulo=fonecedor&acao=cadastrar" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nome</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descrição</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Código de Barras</label>
                                        <input type='number' class="form-control" maxlength="10"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label for="" class="control-label">Código de Fábrica</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label for="custo" class="control-label">Vl. Custo</label>
                                        <input type="text" id="custo" class="form-control j_custo" maxlength="9">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label for="lucro" class="control-label">Lucro &#37;</label>
                                        <input type="text" id="lucro" class="form-control j_lucro" maxlength="14">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label for="preco-venda" class="control-label">Preço Venda</label>
                                        <input type="text" id="preco-venda" class="form-control" maxlength="14">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estoque</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Est. Min.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Desconto</label>
                                        <input type="text" class="form-control" maxlength="2">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fornecedor</label>
                                        <select name="" id="" class="form-control">
                                            <option value="1" selected>Coca Cola</option>
                                            <option value="0">Quarteto</option>
                                        </select>
                                    </div>
                                </div>
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