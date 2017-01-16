<?php
namespace App\${modulo}\controllers;

use App\partidas\models\${controller}Model;
use System\PrincipalController;

class ${controller} extends PrincipalController
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		$this->view('${modulo}/${vista}');
    }
}