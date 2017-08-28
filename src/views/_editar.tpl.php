
<section id="cadastrar">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="page-header">
                    <h1>Editar Ferramenta</h1>
                </div>
                <form action="/?modulo=ferramenta&acao=save" method="post" role="form">

                    <?php
                    if(!empty($ferramenta)) {

                        echo '<input type="hidden" id="id" name="id" value="'.$ferramenta->getId().'">';
                    }

                    if(!empty($msg)) {
                        $tipoErro = array_keys($msg);
                        $msgErro = array_values($msg);
                        echo '<div class="alert alert-'.$tipoErro['0'].'" role="alert">'.$msgErro['0'].'</div>';
                    }
                    ?>
                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" class="form form-control" value="<?= empty($ferramenta)?'':$ferramenta->getDescricao() ?>" required readonly="true">

                    <label for="especificacao">Especificação</label>
                    <input type="text" id="especificacao" name="especificacao" class="form form-control" value="<?= empty($ferramenta)?'':$ferramenta->getEspecificacao() ?>" required readonly="true">


                    <label for="qtd">Quantidade</label>
                    <input type="text" id="qtd" name="qtd" class="form form-control" value="<?= empty($ferramenta)?'':$ferramenta->getQtd() ?>" required readonly="true">

                    <label for="dataAquisicao" class=""">Data Aquisicao</label>
                    <input type="date" id="dataAquisicao" name="dataAquisicao" class="form form-control" value="<?= empty($ferramenta)?'':$ferramenta->getDataAquisicao() ?>" required readonly="true">

                    <label for="dataSaida" class=""">Data Saída</label>
                    <input type="date" id="dataSaida" name="dataSaida" class="form form-control" value="<?= empty($ferramenta)?'':$ferramenta->getDataSaida() ?>">

                    <div class="grupo-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" value="1"
                                    <?php $v = $ferramenta->getStatus();
                                    if($v == 1) {
                                        echo 'checked';
                                }
                                    ?>>
                                Desponivel
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" value="0"
                                <?php $v = $ferramenta->getStatus();
                                if($v == 0) {
                                    echo 'checked';
                                }
                                ?>>
                                Indisponível
                            </label>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</section>