<?php
namespace App\home\controllers;

use App\home\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission,Url;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$laboratorios = laboratorio::all();
		View::ver('home/principal/index', compact('laboratorios'));
    }
}