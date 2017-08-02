<?php
namespace App\admin\controllers;

use App\Usuario;
use App\banco\Personal;
use System\tools\url\Url;

class BancoPersonal
{
    function __construct()
    {
        Role('admin');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        $usuarios = Usuario::where('role','banco')->get();
        View(compact('usuarios'));
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View(compact('usuario_id'));
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //se manda los datos del formulario al repositorio para ser guardados
        $ingresarPersonal = Store($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarPersonal)) 
        {
            Success('bancoPersonal/'.$ingresarPersonal, 'Los datos personales han sido agregados con exito..!');
        } 
        else 
        {
            Error('bancoPersonal/create', $ingresarPersonal);
        }
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $personal = Personal::find($id);
        View(compact('personal'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View(compact('id'));
    }

    // localhost/proyecto/modulo/principal/ID/put
    public function update($id)
    {
        //Actualizar datos con el ID
    }

    // localhost/proyecto/modulo/principal/ID/delete
    public function destroy($id)
    {
        //Borrar un registro usando el ID
    }
}