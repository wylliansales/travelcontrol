<?php


class Viagem extends Model 
{
	static $tabela = 'viagens';
	static $classe = 'Viagem';
	static $chave_primaria = 'id';

	protected $id
			  $mororista_id,
			  $ajudante_id,
			  $rota_id,
			  $data_inicio,
			  $data_fim,
			  $status,
			  $peso,
			  $km_inicio,
			  $km_fim;

	public function getTabela()
	{
		return static::$tabela;
	}		  

	public function getCampos()
	{
		return array(
				'id'			=> array('rotulo' => 'id'),
				'motorista_id'			=> array('rotulo' => 'mororista_id'),
				'ajudante_id'	=> array('rotulo' => 'rota_id'),
				'rota_id'		=> array('rotulo' => 'rota_id'),
				'data_inicio'	=> array('rotulo' => 'data_inicio'),
				'data_fim'		=> array('rotulo' => 'data_fim'),
				'status'		=> array('rotulo' => 'status'),
				'peso'			=> array('rotulo' => 'peso'),
				'km_inicio'		=> array('rotulo' => 'km_inicio'),
				'km_fim'		=> array('rotulo' => 'km_fim')
			);
	}

	public function getCamposObrigatorios()
	{
		return array('mororista_id', 'ajudante_id', 'rota_id', 'data_inicio', 'status', 'peso', 'km_inicio');
	}
}