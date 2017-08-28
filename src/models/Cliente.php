<?php


class Cliente extends Pessoa 
{
	static $tabela = 'clientes';
	static $classe = 'Cliente';
	static $chave_primaria = 'id';

	protected $id,
			  $nome_fantasia,
			  $razao_social,
			  $ie,
			  $cnpj,
			  $pessoa_id;



	public function getTabela()
	{
		return static::$tabela;
	}		  

	public function getCampos()
	{
		return array(
				 'id'			=> array('rotulo' => 'id'),
				 'nome_fantasia'=> array('rotulo' => 'nome_fantasia'),
				 'razao_social' => array('rotulo' => 'razao_social'),
				 'ie'			=> array('rotulo' => 'ie'),
				 'cnpj'			=> array('rotulo' => 'cnpj'),
				 'pessoa_id'    => array('rotulo' => 'pessoa_id')
			);
	}

	public function getCamposObrigatorios()
	{
		return array('nome_fantasia', 'razao_social', 'cnpj', 'pessoa_id');
	}
}