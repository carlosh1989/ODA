<?php
namespace App\home\controllers;

use App\Donante;
use App\Laboratorio;
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
    	$laboratorios = Laboratorio::all();
		View::show('index');
    }

    public function consultar()
    {
    	extract($_POST);

    	$donante = Donante::where('cedula',$cedula)->get();
    	if($donante)
    	{
	        Redirect::send('home/principal/index','success','Contraseña incorrecta.');
    	}
    	else
    	{
	        Redirect::send('auth/login','error','Usted no se encuentra en el sistema, dirijase al laboratorio mas cercano a usted para que pueda ingresar en el sistema.');
    	}
    }
}