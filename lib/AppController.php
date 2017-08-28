<?php

class AppController {
    public static function inicializar() { 
        if(isset($_POST)) {       
                $modulo = isset($_POST['modulo']) ? $_POST['modulo'] : 'home';
                $acao = isset($_POST['acao']) ? $_POST['acao'] : 'index';
                $classe = ucfirst($modulo) . 'Controller';
            
            try {
                if (!class_exists($classe)){
                    throw new Exception('Controller inexistente!');
                }
                
                $classeInstancia = new $classe;
                if (!method_exists($classeInstancia, $acao)){
                    throw new Exception("Não existe acao $acao no controller $classe!");
                }
                
                $classeInstancia->$acao();
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
                echo $exc->getTraceAsString();
                exit;
                }
               
        } else {
                $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'home';
                $acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
                $classe = ucfirst($modulo) . 'Controller';
            
            try {
                if (!class_exists($classe)){
                    throw new Exception('Controller inexistente!');
                }
                
                $classeInstancia = new $classe;
                if (!method_exists($classeInstancia, $acao)){
                    throw new Exception("Não existe acao $acao no controller $classe!");
                }
                
                $classeInstancia->$acao();
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
                echo $exc->getTraceAsString();
                exit;
                }
            }   
        }
}