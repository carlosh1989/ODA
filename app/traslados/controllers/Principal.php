<?php
namespace App\traslados\controllers;

use System\PrincipalController;

class Principal extends PrincipalController
{
    function __construct()
    {
        // code...
    }

    public function index()
    {
        $this->view('traslados/index');
    }

    public function dos()
    {
        echo "segundo metodo";
    }
}