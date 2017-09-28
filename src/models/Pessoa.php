<?php


class Pessoa extends Model
{
	static $tabela = 'pessoas';
	static $classe = 'Pessoa';
	static $chave_primaria = 'id';

	protected $id,
			  $nome,
			  $cpf,
			  $cep,
			  $endereco,
			  $bairro,
			  $numero,
			  $cidade,
			  $uf,
			  $data_nac,
			  $data_cadastro;


	public function getTabela() 
	{
		return static::$tabela;
	}

	public function getCampos()
	{
		return array(
				"id"			=> array('rotulo' => 'id'),
				'nome'			=> array('rotulo' => 'nome'),
				'cpf'			=> array('rotulo' => 'cpf'),
				'cep'			=> array('rotulo' => 'cep'),
				'endereco'		=> array('rotulo' => 'endereco'),
				'bairro'		=> array('rotulo' => 'bairro'),
				'numero'		=> array('rotulo' => 'numero'),
				'cidade'		=> array('rotulo' => 'cidade'),
				'uf'			=> array('rotulo' => 'uf'),
				'data_nasc'	 	=> array('rotulo' => 'data_nasc')				
			);
	}	

	public function getCamposObrigatorios()
	{
		return array('nome', 'cpf');
	}	  
}