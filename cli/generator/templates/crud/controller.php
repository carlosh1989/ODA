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

    public function index()
    {
        View::ver('${modulo}/${controller}/index');
    }

    public function create()
    {
        View::ver('${modulo}/${controller}/create');
    }

    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    public function show($id)
    {
        View::ver('${modulo}/${controller}/show',$data);
    }

    public function edit($id)
    {
        View::ver('${modulo}/${controller}/edit',$data);
    }

    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}