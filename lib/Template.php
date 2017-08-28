<?php

class Template
{
    public static function exibir($template, array $data = null)
    {
        $data['app'] = '<script type="text/javascript" src="../dist/js/app.js"></script>';

        if (!is_null($data)) {
            extract($data);
        }

        $dir = dirname(__FILE__)
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . 'src'
            . DIRECTORY_SEPARATOR . 'views'
            . DIRECTORY_SEPARATOR;

        require_once $dir . '_header.tpl.php';       
        require_once $dir . '_menu.tpl.php';

        $dirs = array(
            'usuario'            
        );

        $verdade = false;
        foreach ($dirs as $d) {
            $file = dirname(__FILE__)
                . DIRECTORY_SEPARATOR . '..'
                . DIRECTORY_SEPARATOR . 'src'
                . DIRECTORY_SEPARATOR . 'views'
                . DIRECTORY_SEPARATOR . $d
                . DIRECTORY_SEPARATOR . $template . '.tpl.php';
            if (file_exists($file)) {
                require_once $file;
                $verdade = true;
            }
        }
        
        if(!$verdade) {
            require_once $dir . $template . '.tpl.php';
        }
        require_once $dir . '_footer.tpl.php';
    }

    public static function indexLogin($template, array $data = null)
    {
        $data['app'] = '<script type="text/javascript" src="../dist/js/app.js"></script>';

         if (!is_null($data)) {
            extract($data);
        }

        $dir = dirname(__FILE__)
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . 'src'
            . DIRECTORY_SEPARATOR . 'views'
            . DIRECTORY_SEPARATOR;

        require_once $dir. '_header.tpl.php';    
        require_once $dir. 'login.tpl.php';
        require_once $dir. '_footer.tpl.php';    
    }

    public static function index($template, array $data = null)
    {
        $data['app'] = '<script type="text/javascript" src="../dist/js/app.js"></script>';

         if (!is_null($data)) {
            extract($data);
        }

        $dir = dirname(__FILE__)
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . 'src'
            . DIRECTORY_SEPARATOR . 'views'
            . DIRECTORY_SEPARATOR;

        require_once $dir. '_menu.tpl.php';    
        require_once $dir. 'index.tpl.php';
        require_once $dir. '_footer.tpl.php';    
    }

    public static function renderPage($template, array $data = null)
    {
        if (!is_null($data)) {
            extract($data);
        }

        $dir = dirname(__FILE__)
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . 'src'
            . DIRECTORY_SEPARATOR . 'views'
            . DIRECTORY_SEPARATOR;              
        
       
            require_once $dir . $template . '.tpl.php';
      
       
    }


}


