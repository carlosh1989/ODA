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
        $nombre = 'lorem asdasdsadasdasdasdasd asdas';
		View::show('index',compact('nombre'));
    }

    public function consultar()
    {
    	extract($_POST);

    	$donante = Donante::where('cedula',$cedula)->first();

    	if($donante)
    	{
    		$donante = $donante->tipeaje->ABO.''.$donante->tipeaje->RH;
    		if($donante)
    		{
	        	Redirect::send('home/principal/index#consulta','success','Su tipo de sangre es '.$donante);

    		}
    		else
    		{
	        	Redirect::send('home/principal/index#laboratorios','error','No se le ha hecho el tipeaje, puede dirigirse a algunos de los laboratorios parte del sistema.');
    		}
    	}    	
    	else
    	{
	        Redirect::send('home/principal/index#laboratorios','error','Usted no se encuentra en el sistema, dirijase al laboratorio mas cercano a usted para que pueda ingresar en el sistema.');
    	}
    }
}