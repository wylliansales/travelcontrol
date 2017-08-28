<?php echo $app ?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Usuários</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href='#modal-cadastro' class="btn btn-primary pull-right j_novousuario" data-toggle="modal">Novo Usuário</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="tabela-usuario" class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Login</th>
                        <th>Perfil</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="j_usuario">                                        
                        <?php  
                        if (isset($usuarios)) :                            
                                 foreach($usuarios as $value) :  ?>
                             <tr class="j_<?= $value->getId() ?>"> 
                                     <td> <?= $value->getId() ?></td>
                                     <td> <?= $value->getLogin() ?></td>
                                     <td> <?php  
                                        if($value->getPerfil() == 'A'){
                                             echo  'Administrador';   
                                        } elseif($value->getPerfil() == 'U') {
                                                    echo 'Usuário';
                                                } elseif ($value->getPerfil() == 'S') {
                                                    echo 'Suporte';
                                                }   
                                        ?></td>
                                     <td><?php 
                                          if ($value->getStatus() == '1') {
                                                echo "Ativo";
                                            } elseif ($value->getStatus() == '0') {
                                                echo "Desativado";
                                            }  
                                      ?></td> 
                                     <td><a href="modulo=usuario&acao=editar&id=<?= $value->getId() ?>" class="j_editUsuario" data-target="#modal-cadastro" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a></td> 
                            </tr>                                  
                        <?php     endforeach;
                        endif;  ?>
                 </tbody>
            </table>
        </div>
    </div>
</div>    

<div class="modal fade modal-primary" id="modal-cadastro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cadastro</h4>
            </div>
            <div class="modal-body">
                <form name="form-usuario" href="modulo=usuario&acao=cadastrar" method="post">
                            <input type="hidden" name="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Login</label>
                                        <input type="text" name="login" class="form-control" maxlength="9" placeholder="Digite seu nome" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Senha</label>
                                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Confirmar Senha</label>
                                        <input type="password" name="senha-confirme" class="form-control" placeholder="Digite sua senha" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Perfil</label>
                                        <select name="perfil" id="" class="form-control">
                                            <option value="U" selected>Usuário</option>
                                            <option value="A">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Ativo</label>
                                        <select name="status" id="" class="form-control">
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
            <div class="modal-footer">                
            </div>
        </div>
    </div>
</div>

