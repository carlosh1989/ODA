<?php
namespace App\partidas\controllers;

use System\PrincipalController;

class Principal extends PrincipalController
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		$this->view('partidas/index');
    }

    public function dos()
    {
    	echo "segundo metodo"; 
    }
}