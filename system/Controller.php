<?php  
namespace System;

use System\Template;

class PrincipalController
{
    public function view($vista, $array)
    {
        $view = new Template();
        if ($array) {
            foreach ($array as $name => $value) {
                //$this->vars[$name] = $value;
                $view->$name = $value;
                echo $view->title;
            }
        }

        list($modulo, $vista) = explode('/', $vista);

        $view->baseUrl = baseUrl;
        $view->content = $view->render('app/'.$modulo.'/views/'.$vista.'.php');
        echo $view->render('app/'.$modulo.'/views/theme/'.$modulo.'.php');
    }
}
