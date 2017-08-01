<?php
namespace App\laboratorio\controllers;

use App\laboratorio\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('laboratorio/principal/index');
    }
}