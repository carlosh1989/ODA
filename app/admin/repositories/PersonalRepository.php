<?php
namespace App\admin\repositories;

use App\banco\Personal as BancoPersonal;
use Eloquent;

class PersonalRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function store($data)
    {
        extract($data);
        $personal = new BancoPersonal;
        $personal->usuario_id = $usuario_id;
        $personal->nacionalidad = $nacionalidad;
        $personal->cedula = $cedula;
        $personal->fecha_nacimiento = $fecha_nacimiento;
        $personal->telefono_fijo = $telefono_fijo;
        $personal->telefono_celular = $telefono_celular;
        $personal->cargo = $cargo;
        //$pensionado = Pensionado::create($data);

        if( $personal->save())
        {
            return $usuario_id;
        }
        else
        {
            return 'Error al ingresar datos personales.';
        }
    }

    public function show($id)
    {

    }

    public function update($id,$data)
    {

    }

    public function destroy($id)
    {

    }
}