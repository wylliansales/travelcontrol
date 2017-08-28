<?php

class UsuarioController
{
	public function cadastrar()
	{		
		if (!empty($_POST['id'])) {
			$data['id'] = $_POST['id'];
			if(strlen($_POST['senha']) < 10) {
				$data['senha'] = md5($_POST['senha']);				
			} else {
				$data['senha'] = $_POST['senha'];
			}					
		} else {
			$data['senha'] = md5($_POST['senha']);
		} 
		$data['login'] = $_POST['login'];		
		$data['perfil'] = $_POST['perfil'];
		$data['status'] = $_POST['status'];
		$usuario = new Usuario($data);
		print_r($usuario);
		if ($usuario->save()) {	
			unset($data['senha']);
			$dados['usuario'] = $usuario;				
			Template::render('linhaLista', $dados);
		} else {
			//ERROR AO GRAVAR TRATAMENTO REALIZADO NO JAVASCRIPT
			echo "1";
		} 					
	}

	public function editar()
	{		
		$usuario = Usuario::selecionarUmArray($_POST['id']);				
		echo json_encode($usuario);
	}

	public function listar()
	{		
		$data['title'] = 'Controle de viagem';
		$data['usuarios'] = Usuario::selecionar();		
		Template::exibir('formCadastro', $data);		
	}

	public function efetuarLogin()
	{
		if(empty($_POST['login']) || empty($_POST['senha'])) {
			//CAMPO LOGIN OBRIGATÓRIO
			echo "0";
		} else {
			$data['login'] = $_POST['login'];
			$data['senha'] = $_POST['senha'];
			
			$callback = Usuario::validarLogin($data);
 			print_r($callback);
			if($callback['status']) {

				$_SESSION['id_usuario'] = $callback['usuario']['id_usuario'];
            	$_SESSION['tipo'] = $callback['usuario']['perfil_usuario'];
            	$_SESSION['login_usuario'] = $callback['usuario']['login_usuario'];
            	$_SESSION['login'] = $callback['status']; 
            	
            	Template::exibir('index');
			} else {
				echo $callback['msg'];
			}

		}


	}

	public function efetuarLogof()
	{
		 /*$data = Request::post();
		$email = $data['email'];
		$senha = $data['senha'];

		if($email == "" || $senha == "") {
			echo '1';
		} else {			
			$usuario = $Usuario::selecionar('email = email','null','null','null');
			


		}

		session_start();*/

	}
	public function verificarLogin($data) 
	{

	}
	public function getUsuarioLogado()
	{

	}
}