<?php
namespace App\traslado\controllers;

use System\PrincipalController;

class Test extends PrincipalController
{
    public function index()
    {
        echo "test";
    }

    public function metodo2()
    {
    	echo "metodo dos";
    }
}