<?php  
namespace System;

use System\View;

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

        $view->baseUrl = baseUrl;
        $view->menu = $view->render('app/views/templates/menu.php');
        $view->content = $view->render('app/views/modules/'.$vista.'.php');
        echo $view->render('app/views/templates/main.php');
    }
}
