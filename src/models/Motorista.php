<?php

class Motorista extends Pessoa 
{
	static $tabela = 'motoristas';
	static $classe = 'Motorista';
	static $chave_primaria = 'id';

	protected $id,			  
			  $data_admissao,
			  $cnh,
			  $categoria_cnh,
			  $validade_cnh,
			  $fone_1,
			  $fone_2,
			  $email,
			  $pessoa_id,;

	public function getTabela()
	{
		return static::$tabela;
	}		  

	public function getCampos()
	{
		return array(
				'id'			=> array('rotulo' => 'id'),				
				'data_admissao' => array('rotulo' => 'data_admisao'),
				'cnh'			=> array('rotulo' => 'cnh'),
				'categoria_cnh' => array('rotulo' => 'categoria_cnh'),
				'validade_cnh'	=> array('rotulo' => 'validade_cnh'),
				'fone_1'		=> array('rotulo' => 'fone_1'),
				'fone_2'		=> array('rotulo' => 'fone_2'),
				'email'			=> array('rotulo' => 'email'),
				'pessoa_id'		=> array('rotulo' => 'id' )
			);
	}

	public function getCamposObrigatorios()
	{
		return array('data_admissao', 'cnh', 'categoria_cnh', 'validade_cnh', 'pessoa_id');
	}

}