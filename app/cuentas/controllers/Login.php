<?php
namespace App\cuentas\controllers;

use System\PrincipalController;

class Login extends PrincipalController
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		$this->view('cuentas/index');
    }
}