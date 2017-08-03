<?php
namespace App\banco\repositories;

use App\Laboratorio;
use Eloquent;

class LaboratoriosRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function index()
    {
        $data['laboratorios'] =  Laboratorio::all();
        return $data;
    }

    public function store($data)
    {
        extract($data);
        $laboratorio = new Laboratorio;
        $laboratorio->razon_social = $razon_social;
        $laboratorio->direccion = $direccion;
        $laboratorio->telefono = $telefono;
        $laboratorio->email = $email;

        if( $laboratorio->save())
        {
            return $laboratorio->id;
        }
        else
        {
            return 'Error al ingresar datos de laboratorio.';
        }
    }

    public function show($id)
    {
        $data['laboratorio'] = Laboratorio::find($id);
        return $data;
    }

    public function update($id,$data)
    {

    }

    public function destroy($id)
    {

    }
}