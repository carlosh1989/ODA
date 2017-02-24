<?php
namespace App\ingreso\controllers;

use App\ingreso\models\PrivadosModel;
use Controller,View,Token,Session,Arr,Message;

class Privados extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::ver('ingreso/privados/index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::ver('ingreso/privados/create');
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Guardar datos enviados de -create-
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $data['id'] = $id;
        View::ver('ingreso/privados/show', $data);
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        $data['id'] = $id;
        View::ver('ingreso/privados/edit' , $data);
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