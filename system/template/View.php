<?php  
namespace System\template;

use System\template\Template;

class View
{
    public function ver($vista, $array=Null)
    {
        $view = new Template();
        if ($array) {
            foreach ($array as $name => $value) {
                //$this->vars[$name] = $value;
                $view->$name = $value;
                //echo $view->title;
            }
        }

        list($modulo, $controlador,$vista) = explode('/', $vista);

        $view->baseUrl = baseUrl;
        $view->content = $view->render('app/'.$modulo.'/views/'.$controlador.'/'.$vista.'.php');
        echo $view->render('app/'.$modulo.'/views/theme/'.$modulo.'.php');
    }

    public function prueba()
    {
        echo "asdasdad";
    }
}