<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 22/06/17
 * Time: 18:45
 */
class Ferramenta extends Model{

    static $tabela = 'ferramentas';
    static $classe = 'Ferramenta';
    static $chave_primaria = 'id';

    protected $id,
        $descricao,
        $qtd,
        $especificacao,
        $dataAquisicao,
        $dataSaida,
        $status;

    public function getTabela()
    {
        return static::$tabela;
    }

    public function getCampos()
    {
        return array(
            'id'             => array('rotulo' => 'id'),
            'descricao'      => array('rotulo' => 'descricao'),
            'qtd'            => array('rotulo' => 'qtd'),
            'especificacao'  => array('rotulo' => 'especificacao'),
            'dataAquisicao'  => array('rotulo' => 'dataAquisicao'),
            'dataSaida'      => array('rotulo' => 'dataSaida'),
            'status'         => array('rotulo' => 'status')
        );
    }

    public function getCamposObrigatorios()
    {
        return array('descricao', 'qtd', 'especificacao', 'dataAquisicao', 'status');
    }
}