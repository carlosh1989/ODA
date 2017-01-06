<?php

namespace App	raslado\controllers;

use System\PrincipalController;

class Principal extends PrincipalController
{
    public function index()

    {
        echo '<hr>';
        echo 'Metodo index de el controlador Traslado';
        echo '<hr>';
    }

    public function test()

    {
        echo 'test';
    }
}
