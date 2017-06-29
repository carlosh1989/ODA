<?php
namespace App\admin\repositories;

use App\Paciente;
use Eloquent;

class PacientesRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function store($data)
    {
    	$paciente = Paciente::create($data);

    	if ($paciente->id) 
    	{
    		return $paciente->id;
    	} 
    	else 
    	{
    		return 'Error al guardar paciente.';
    	}
    }

    public function show($id)
    {

    }

    public function update($id,$data)
    {
        extract($data);
        $paciente = Paciente::find($id);

        if($paciente)
        {
            $paciente->cedula = $cedula;
            $paciente->nombre = $nombre;
            $paciente->apellido = $apellido;
            $paciente->fecha_nacimiento = $fecha_nacimiento;
            $paciente->sexo = $sexo;
            $paciente->telefono = $telefono;
            $paciente->direccion = $direccion; 

            if($paciente->save())
            {
                return TRUE;
            }
            else
            {
                return 'Error al actualizar los datos';
            }
        }
        else
        {
            return 'Error al actualizar paciente.';
        }
    }

    public function destroy($id)
    {

    }
}