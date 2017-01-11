<?php
namespace App\traspaso\controllers;

use System\PrincipalController;

class Principal extends PrincipalController
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
        $this->view('traslado/all', $data);
    }
}