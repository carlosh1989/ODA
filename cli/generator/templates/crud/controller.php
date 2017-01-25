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


    // localhost/proyecto/${modulo}/${controller}
    public function index()
    {
        View::ver('${modulo}/${controller}/index');
    }

    // localhost/proyecto/${modulo}/${controller}/create
    public function create()
    {
        View::ver('${modulo}/${controller}/create');
    }

    // localhost/proyecto/${modulo}/${controller}/
    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    // localhost/proyecto/${modulo}/${controller}/ID
    public function show($id)
    {
        View::ver('${modulo}/${controller}/show',$data);
    }

    // localhost/proyecto/${modulo}/${controller}/ID/edit
    public function edit($id)
    {
        View::ver('${modulo}/${controller}/edit',$data);
    }

    // localhost/proyecto/${modulo}/${controller}/ID/put
    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    // localhost/proyecto/${modulo}/${controller}/ID/delete
    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}