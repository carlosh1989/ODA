<?php
namespace App\modular\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View,Token,Session;

class Principal extends Controller
{
    function __construct()
    {
        // code...
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::ver('modular/principal/index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::ver('modular/principal/create');
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
        View::ver('modular/principal/show', $data);
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        $data['id'] = $id;
        View::ver('modular/principal/edit' , $data);
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