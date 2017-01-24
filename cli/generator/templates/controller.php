<?php
namespace App\${modulo}\controllers;

use App\partidas\models\${controller}Model;
use Controller,View;

class ${controller} extends Controller
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		View::ver('${modulo}/${vista}');
    }
}