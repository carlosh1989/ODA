<?php
namespace App\admin\controllers;

use App\admin\repositories\HematologiasRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Hematologias extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::show('index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        extract($_GET);
        View::show('create',compact('id_solicitud'));
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        $registro = Repo::ingresar($_POST);

        if (is_numeric($registro)) 
        {
            Redirect::send('admin/solicitudes/'.$registro,'success', 'El examen hematologico ha sido ingresado.');
        } 
        else 
        {
            Redirect::send('admin/hematologias/create?id_solicitud='.$id_solicitud,'error', $registro);
        }
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        View::show('show', compact('id'));
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