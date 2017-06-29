<?php
namespace App\admin\controllers;

use App\Paciente;
use App\admin\controllers\Pensionados;
use App\admin\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message;
use System\tools\rounting\Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		Redirect::to('admin/pacientes');
    }

    public function busqueda()
    {
    	extract($_GET);
    	$paciente = Paciente::where('cedula',$cedula)->first();

    	if($paciente)
    	{
	    	View::show('solicitudes',compact('paciente'));
    	}
    	else
    	{
    		Redirect::send('admin/pacientes/create?cedula='.$cedula,'info','Paciente no registrado en el sistema.');
    	}
    }
}