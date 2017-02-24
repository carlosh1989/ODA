<?php
namespace App\${modulo}\controllers;

use App\${modulo}\models\${controller}Model;
use Controller,View,Token,Session,Arr,Message;

class ${controller} extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('${modulo}/${controllerView}/${vista}');
    }
}