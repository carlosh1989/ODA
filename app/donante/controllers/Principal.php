<?php
namespace App\donante\controllers;

use App\donante\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('donante/principal/index');
    }
}