<?php
namespace App\${modulo}\controllers;

use App\${modulo}\models\${controller}Model;
use Controller,View,Token,Session,Arreglo;

class ${controller} extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::ver('${modulo}/${controllerView}/index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::ver('${modulo}/${controllerView}/create');
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
        View::ver('${modulo}/${controllerView}/show', $data);
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        $data['id'] = $id;
        View::ver('${modulo}/${controllerView}/edit' , $data);
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