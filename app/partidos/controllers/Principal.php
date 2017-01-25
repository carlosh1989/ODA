<?php
namespace App\partidos\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;

class Principal extends Controller
{
    function __construct()
    {
        // code...
    }

    // localhost/proyecto/partidos/principal
    public function index()
    {
        View::ver('partidos/principal/index');
    }

    // localhost/proyecto/partidos/principal/create
    public function create()
    {
        View::ver('partidos/principal/create');
    }

    // localhost/proyecto/partidos/principal/
    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    // localhost/proyecto/partidos/principal/ID
    public function show($id)
    {
        View::ver('partidos/principal/show',$data);
    }

    // localhost/proyecto/partidos/principal/ID/edit
    public function edit($id)
    {
        View::ver('partidos/principal/edit',$data);
    }

    // localhost/proyecto/partidos/principal/ID/put
    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    // localhost/proyecto/partidos/principal/ID/delete
    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}