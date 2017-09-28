<?php

class Ajudante extends Pessoa 
{
	static $tabela = 'ajudantes';
	static $classe = 'Ajudante';
	static $chave_primaria = 'id';

	protected $id,
			  $data_admissao,
			  $fone_1,
			  $fone_2,
			  $email,
			  $pessoa_id;

	public function getTabela() 
	{
		return static::$tabela;
	}

	public function getCampos() 
	{
		return array(
				'id'			=> array('rotulo' => 'id'),
				'data_admissao' => array('rotulo' => 'data_admissao'),
				'fone_1'		=> array('rotulo' => 'fone_1'),
				'fone_2'		=> array('rotulo' => 'fone_2'),
				'email'			=> array('rotulo' => 'email'),
				'pessoa_id'		=> array('rotulo' => 'pessoa_id')
			);
	}

	public function getCamposObrigatorios()
	{
		return array('data_admissao', 'pessoa_id');
		
	}


}