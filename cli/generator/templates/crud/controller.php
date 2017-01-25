<?php
namespace App\${modulo}\controllers;

use App\partidas\models\${controller}Model;
use Controller,View;

class ${controller} extends Controller
{
    function __construct()
    {
        // code...
    }

    // localhost/proyecto/${modulo}/${controllerView}
    public function index()
    {
        View::ver('${modulo}/${controllerView}/index');
    }

    // localhost/proyecto/${modulo}/${controllerView}/create
    public function create()
    {
        View::ver('${modulo}/${controllerView}/create');
    }

    // localhost/proyecto/${modulo}/${controllerView}/
    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    // localhost/proyecto/${modulo}/${controllerView}/ID
    public function show($id)
    {
        View::ver('${modulo}/${controllerView}/show',$data);
    }

    // localhost/proyecto/${modulo}/${controllerView}/ID/edit
    public function edit($id)
    {
        View::ver('${modulo}/${controllerView}/edit',$data);
    }

    // localhost/proyecto/${modulo}/${controllerView}/ID/put
    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    // localhost/proyecto/${modulo}/${controllerView}/ID/delete
    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}