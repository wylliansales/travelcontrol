<section id="index-venda" class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Farturamento / Venda - VENDA N° 001
                    </div>
                    <div class="panel-body">
                        Cliente:
                        <form action="?modulo=cliente&buscarCliente" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-venda form-group form-venda-md">
                                        <label for="" class="control-label">Cód. Cliente</label>
                                        <div class="input-group">
                                            <input type="text" id="idCliente" name="idCliente" class="form-control"
                                                   placeholder="1">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-venda form-group form-venda-md">
                                        <label class="control-label">Nome:</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-venda form-group form-venda-md">
                                        <label for="tipoTabela" class="control-label">Tabela Preço:</label>
                                        <select name="" id="tipoTabela" class="form-control">
                                            <option value="">Padrão</option>
                                            <option value="">Especial</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        Produto:
                        <form action="">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="form-inline">
                                        <div class="form-group form-venda  is-empty">
                                            <input type="text" class="form-control" placeholder="Pesquisar">
                                            <span class="material-input"></span>
                                        </div>
                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2  col-md-2 pull-right">
                                    <h5>Total Pedido</h5>
                                    <p>R$ 0,00</p>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-inline">
                                    <div class="form-group form-venda">
                                        <label for="">Cód. Produto:</label>
                                        <input class="form-comum" size="20">
                                    </div>

                                    <div class="form-group form-venda">
                                        <label for="">Nome:</label>
                                        <input class="form-comum" size="35">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Qtd:</label>
                                        <input type="text" class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Estoque</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Vl. Recb.</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-inline">
                                    <div class="form-group form-venda">
                                        <label for="">Preço(R$):</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">&#37;Desc:</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Vl. Desc:</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Total UN</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <div class="form-group form-venda">
                                        <label for="">Total</label>
                                        <input class="form-comum" size="10">
                                    </div>
                                    <label class="text-danger troco-venda">Troco: R$ 0,00</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="" class="btn btn-primary btn-sm btn-venda">Salvar Item</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>COD.</th>
                                            <th>NOME</th>
                                            <th>VL. UND.</th>
                                            <th>QTD.</th>
                                            <th>DESC.</th>
                                            <th>VL. TOTAL</th>
                                            <th>OPÇÕES</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2121</td>
                                            <td>Refri. Coca 2L</td>
                                            <td>R$2,00</td>
                                            <td>2</td>
                                            <td>R$0,00</td>
                                            <td>R$4,00</td>
                                            <td>
                                                <a href=""><span class="label label-default">Editar</span></a>
                                                <a href=""><span class="label label-danger">Excluir</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2121</td>
                                            <td>Refri. Coca 2L</td>
                                            <td>R$2,00</td>
                                            <td>2</td>
                                            <td>R$0,00</td>
                                            <td>R$4,00</td>
                                            <td>
                                                <a href=""><span class="label label-default">Editar</span></a>
                                                <a href=""><span class="label label-danger">Excluir</span></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


