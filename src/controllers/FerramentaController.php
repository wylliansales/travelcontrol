<?php


class FerramentaController 
{

    public function save() {

        $dados = array(
            'descricao'      => $_POST['descricao'],
            'qtd'            => $_POST['qtd'],
            'especificacao'  => $_POST['especificacao'],
            'dataAquisicao'  => $_POST['dataAquisicao'],
            'dataSaida'      => isset($_POST['dataSaida'])?$_POST['dataSaida']:'',
            'status'         => $_POST['status']
        );


        $ferramenta = new Ferramenta($dados);
        if(isset($_POST['id'])) {
            $ferramenta->setId($_POST['id']);
        }

        if ($ferramenta->save()) {
            $data['msg'] = array('success' => "Ferramenta". $ferramenta->getDescricao(). " salvo com sucesso!");
        } else {
            $data['msg'] = array('danger' => "Não foi possível realizar o cadastro, verifique os dados informados");
        }

        $data['title'] = 'Aula php';
        $data['menu'] = array(
            'listar'        => 'Listar',
            'cadastrar'     => 'Cadastrar'
        );
        $data['ferramenta']= '';

        Template::exibir('_cadastrar',$data);
    }


    public static function listarRemover() {

        $data['title'] = 'Aula php';
        $data['menu'] = array(
            'listar'        => 'Listar',
            'cadastrar'     => 'Cadastrar'
        );

        $data['ferramentas'] = Ferramenta::selecionar();

        $quantidade = 0;

        foreach ($data['ferramentas'] as $ferramenta) {
            if($ferramenta->getStatus() == 1) {
                $quantidade++;
            }
        }
        $data['quantidade'] = $quantidade;
        Template::exibir('_listar', $data);
    }


    public function editar() {
        if(isset($_GET['id'])){
            $ferramenta = Ferramenta::selecionarUm($_GET['id']);
        }
        $data['title'] = 'Aula php';
        $data['menu'] = array(
            'listar'        => 'Listar',
            'cadastrar'     => 'Cadastrar'
        );
        $data['ferramenta'] = isset($ferramenta)?$ferramenta:'';
        Template::exibir('_cadastrar',$data);
    }

    public function editarStatus(){
        if(isset($_GET['id'])){
            $ferramenta = Ferramenta::selecionarUm($_GET['id']);
        }

        $data['title'] = 'Aula php';
        $data['menu'] = array(
            'listar'        => 'Listar',
            'cadastrar'     => 'Cadastrar'
        );
        $data['ferramenta'] = isset($ferramenta)?$ferramenta:'';
        Template::exibir('_editar',$data);

    }

    public static function deletar() {
        $id = $_GET['id'];

        if($ferramenta = Ferramenta::selecionarUm($id)) {
            $ferramenta->deletar();
        }

        static::listarRemover();
    }

}