<?php


class Usuario extends Model 
{
	static $tabela = 'usuarios';
	static $classe = 'Usuario';
	static $chave_primaria = 'id';
	
	protected $id,
			  $login,
			  $senha,
			  $perfil,
			  $status;

	public function getTabela() 
	{
		return static::$tabela;
	}

	public function getCampos()
	{
		return array(
				'id'		=> array('rotulo' => 'id'),
				'login'		=> array('rotulo' => 'login'),
				'senha'		=> array('rotulo' => 'senha'),
				'perfil'	=> array('rotulo' => 'perfil'),
				'status'	=> array('rotulo' => 'status')
			);
	}

	public function getCamposObrigatorios()
	{
		return array('login', 'senha', 'perfil', 'status');
	}

	 public static function selecionarUmArray($id) 
	 {
        $pdo = Banco::instanciar();
        $selectSQL = "SELECT * FROM " . static::$tabela 
                  . " WHERE " . static::$chave_primaria .  " = ? ";
        $statement = $pdo->prepare($selectSQL);
        $dados = array($id);
        $statement->execute($dados);
        $data = $statement->fetch();
        
        if ($data){            
            return  $data;
        } else {
            return NULL;
        }        
    }

    public static function validarLogin($data) 
    {
    	$callback_logar['status'] = false;
    	$usuario = Usuario::selecionar("login='".$data['login']."'");

    	if (empty($usuario[0])) {
    		//USUARIO NÃO CADASTRADO
    		$callback_logar['msg'] = '1';
    	} else {
    		$data['senha'] = md5($data['senha']);
    		if($usuario[0]->getSenha() == $data['senha']) {
    			if ($usuario[0]->getStatus() == 1) {

    				$callback_logar['status'] = true;
    				$callback_logar['usuario'] = ['perfil_usuario' => $usuario[0]->getPerfil(), 'id_usuario'=>$usuario[0]->getId(),'login_usuario' => $usuario[0]->getLogin()];
    			} else {
    				//USUARIO DESATIVADO
    				$callback_logar['msg'] = '3';
    			}
    		} else {
    			//SENHA INCORRETA
    			$callback_logar['msg'] = '2';
    		}
    	}

    	return $callback_logar;

    }	

}