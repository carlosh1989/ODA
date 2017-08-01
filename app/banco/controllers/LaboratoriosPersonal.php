<?php
namespace App\banco\controllers;

use App\Usuario;
use App\banco\repositories\LaboratoriosPersonalRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission,Url;;

class LaboratoriosPersonal extends Controller
{
    function __construct()
    {
        parent::__construct();
        Permission::withRole('banco');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::show('index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        $laboratorio_id = Url::uri(5);
        View::show('create',compact('laboratorio_id'));
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Arr::show($_POST);
        //se manda los datos del formulario al repositorio para ser guardados
        $ingresarPersonal = Repo::store($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarPersonal)) 
        {
            Redirect::send('banco/laboratoriosPersonal/'.$ingresarPersonal,'success', 'El laboratorio se ingreso exitosamente..!');
        } 
        else 
        {
            Redirect::send('banco/laboratoriosPersonal/create','error', $ingresarPersonal);
        }
        //Guardar datos enviados de -create-
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $usuario = Usuario::find($id);
        View::show('show', compact('usuario'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View::show('edit' , compact('id'));
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