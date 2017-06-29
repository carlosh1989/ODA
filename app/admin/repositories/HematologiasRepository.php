<?php
namespace App\admin\repositories;

use App\Hematologia;
use Eloquent;

class HematologiasRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function ingresar($data)
    {
    	extract($data);
    	$hematologia = new Hematologia;
    	$hematologia->id_solicitud = $id_solicitud;
    	$hematologia->hematocritos = $hematocritos;
    	$hematologia->hemoglobina = $hemoglobina;
    	$hematologia->neutrofilos = $neutrofilos;
    	$hematologia->linfocitos = $linfocitos;
        $hematologia->leucocitos = $leucocitos;
    	$hematologia->save();

    	if ($hematologia->id) 
    	{
    		return $id_solicitud;
    	} 
    	else 
    	{
    		return 'Error al guardar solicitud.';
    	}
    }
}