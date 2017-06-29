<?php
namespace App\admin\controllers;

use App\Solicitud;
use App\admin\repositories\SolicitudesRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Solicitudes extends Controller
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
        View::show('create',compact('id_paciente'));
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        $registro = Repo::ingresar($_POST);

        if (is_numeric($registro)) 
        {
            Redirect::send('admin/solicitudes/'.$registro,'success', 'La solicitud fue hecha!');
        } 
        else 
        {
            Redirect::send('admin/solicitudes/create','error', $registro);
        }
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $solicitud = Solicitud::find($id);
        $hematologia_seleccion = unserialize($solicitud->hematologia);
        View::show('show', compact('id','solicitud','hematologia_seleccion'));
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