$(function(){

	var url_post = '../app.php';
	var conteudo_body = $('body');

	$.ajaxSetup({
		url: url_post,
		type: 'POST',		
		beforeSend: '',
		error: function(){
			msg('danger', "Error na solicitação, procure um administrador");
		}
	})

	function msg(tipo, msg) {
		demo.showNotification('top', 'right', msg, tipo);
	}

	// INICIO TELA DE LOGIN
	 
	

	
	// EFETUAR LOGIN 
	var botao = $('.botao_login');
	botao.click(function() {
		var form_login = $('form[name="login"]');		
		var dados = form_login.serialize();
		var modulo_acao = "&modulo=usuario&acao=efetuarLogin" 
		var sender = dados + modulo_acao;		
		
		$.ajax({
			data: sender,			
			success: function(data) {

				if (data == '0') {
					msg('danger', 'Login e Senha obrigatório!');					
				} else {
					if (data == '1') {
						msg('danger', 'Login não cadastrado!');	
					} else {
						if (data == '2') {
							msg('danger', 'Senha incorreta!');	
						} else {
							if (data == '3') {
								msg('danger', 'Usuário desativado!');	
							} else {
								$('body').empty().html(data);	
							}
						}
					}
				}
			}
		})
		return false;
	});
	// FIM EFETUAR LOGIN
	
	//CADASTRAR LOGIN
	var modalUsuario = $('form[name="form-usuario"]');	
	var botaonovousuario = $('.j_novousuario');
	var tabelaUsuario = $('#tabela-usuario');

	botaonovousuario.click(function() {
		modalUsuario.find('input').val('');
	});

	modalUsuario.submit(function(){
		var idUsuario = $(this).find('input[name="id"]').val();		
		var nome = $(this).find('input[name="login"]').val();
		var dados = $(this).serialize();
		var acao = $(this).attr('href');
		var sender = dados + "&" +  acao;	
					
		$.ajax({
			data: sender,						
			success: function(data) {				
					if (data == '1') {
						msg('danger', 'Error, verifique os dados');
					} else {
						if(idUsuario != "") {
							$('.j_'+idUsuario).hide();
						}															
						$('.j_usuario').append(data);
						$('#modal-cadastro').modal('hide');	
						msg('success',"<strong>" + nome + "</strong> salvo com sucesso!");							
					}				
						
			}
		})
		return false;
	});
	// FIM  CADASTRAR LOGIN	
	
	//  EDITAR USUÁRIOS 		
	tabelaUsuario.on('click', '.j_editUsuario', function() {
		var acao = $(this).attr('href');

		$.ajax({
			data: acao,
			dataType: "json",
			success: function(data){							
				$.each(data, function(index, val) {	
					 modalUsuario.find('input[name="'+ index +'"]').val(val);
				});
				modalUsuario.find('input[name="senha-confirme"]').val(data.senha);
				$('#modal-cadastro').modal('show');
			}
		})

		return false;		
	});
	// FIM EDITAR USUÁRIOS
	
	// FIM TELA DE LOGIN 
	



	

})