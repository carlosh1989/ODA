<?php
namespace App\admin\repositories;

use App\Solicitud;
use Eloquent;

class SolicitudesRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function ingresar($data)
    {
    	extract($data);
    	$solicitud = new Solicitud;
    	$solicitud->id_paciente = $id_paciente;
    	$solicitud->observaciones = $observaciones;
    	$solicitud->fecha = date('d/m/Y');
    	$solicitud->hematologia = serialize($hematologia);
    	$solicitud->save();

    	if ($solicitud->id) 
    	{
    		return $solicitud->id;
    	} 
    	else 
    	{
    		return 'Error al guardar solicitud.';
    	}
    }
}