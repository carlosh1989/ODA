<?php
namespace App\banco\repositories;

use App\Donante;
use App\DonanteSerologia;
use Eloquent;

class SerologiasRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function store($data)
    {
        extract($data);
        $examen = new DonanteSerologia;
        $examen->donante_id = $donante_id;
        $examen->responsable = $responsable;
        $examen->VIH = $VIH;
        $examen->HBSAG = $HBSAG;
        $examen->ANTIVHC = $ANTIVHC;
        $examen->SIFILIS = $SIFILIS;
        $examen->CHAGAS = $CHAGAS;
        $examen->fecha = $fecha;

        if($examen->save())
        {
            return $examen->id;
        }
        else
        {
            return 'Error al ingresar serologia.';
        }
    }

    public function show($id)
    {
        $data['serologia'] =DonanteSerologia::where('donante_id',$id)->get();
        return $data;
    }

    public function update($id,$data)
    {

    }

    public function destroy($id)
    {

    }
}