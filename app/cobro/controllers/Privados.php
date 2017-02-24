<?php
namespace App\cobro\controllers;

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
        View::show('index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::show('create');
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
        View::show('show', $data);
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        $data['id'] = $id;
        View::show('edit' , $data);
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