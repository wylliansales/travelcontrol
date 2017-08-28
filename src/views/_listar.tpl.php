<saction id="cadastrar">
    <div class="container">
        <div class="col-sm-12">
            <table class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Especificação</th>
                    <th>Data Aquisição</th>
                    <th>Data Saída</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ferramentas as $ferramenta){ ?>
                    <tr>
                        <td><?= $ferramenta->getId() ?></td>
                        <td><?= $ferramenta->getDescricao() ?></td>
                        <td><?= $ferramenta->getEspecificacao() ?></td>
                        <td><?= $ferramenta->getDataAquisicao() ?></td>
                        <td><?= $ferramenta->getDataSaida() ?></td>
                        <td><?= $ferramenta->getStatus() ?></td>
                        <td>
                            <a href="/?modulo=ferramenta&acao=deletar&id=<?= $ferramenta->getId() ?>">
                                <span class="glyphicon glyphicon glyphicon-trash" ></span>
                            </a>
                            &nbsp;
                            <a href="/?modulo=ferramenta&acao=editar&id=<?= $ferramenta->getId() ?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>

                            <a href="/?modulo=ferramenta&acao=editarStatus&id=<?= $ferramenta->getId() ?>">&nbsp;&nbsp;Alterar Status</a>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

            <h4>Quantidade Disponivel: &nbsp; <?= $quantidade ?> &nbsp; Ferramentas</h4>
        </div>
    </div>
</saction>