<?php
namespace App\traslado\controllers;

use System\PrincipalController;

class Principal extends PrincipalController
{
    public function index()
    {
        echo "<hr>";
        echo "partida";
        echo "<hr>";
        $this->principal();
        echo "<hr>";
    }
}
