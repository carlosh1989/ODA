<?php
namespace App\${modulo}\controllers;

use App\${modulo}\models\${controller}Model;
use Controller,View,Token,Session;

class ${controller} extends Controller
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		View::ver('${modulo}/${controllerView}/${vista}');
    }
}