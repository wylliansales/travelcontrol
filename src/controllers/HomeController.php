<?php

class HomeController
{
    
    public function index()
    {       
        $data['title'] = 'Controle de viagem';
        Template::exibir('index', $data);
    }

    public function login()
    {
        $data['title'] = 'Controle de viagem';
        Template::indexLogin('login', $data);
    }





   /* public function carregarContent(){
      if ($_POST['rota']) {
        Template::renderPage($_POST['rota']);
      }
        
    } */
    // INICIO Tudo relacionando a classe Motorista
    
   // FIM Tudo relacionando a classe Motorista 

   // INICIO USUÁRIO
   public function cadastrarUsuario()
   {
        $data['title'] = 'Controle de Viagem';
        Template::exibir('formCadastro', $data);
   }
   // FIM USUÁRIO

}


