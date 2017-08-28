
<?php
    echo $app;
    if(isset($msg)) { ?>
        <div class="alert alert-<?= $msg['tipo_error'] ?>">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong></strong> <?= $msg['error'] ?>
        </div>
<?php } ?>

<div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="login-panel panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <form name="login" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                
                                <a href="" class="btn btn-lg btn-primary btn-block botao_login">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>