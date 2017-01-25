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


    // localhost/proyecto/partidos/Principal
    public function index()
    {
        View::ver('partidos/Principal/index');
    }

    // localhost/proyecto/partidos/Principal/create
    public function create()
    {
        View::ver('partidos/Principal/create');
    }

    // localhost/proyecto/partidos/Principal/
    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    // localhost/proyecto/partidos/Principal/ID
    public function show($id)
    {
        View::ver('partidos/Principal/show',$data);
    }

    // localhost/proyecto/partidos/Principal/ID/edit
    public function edit($id)
    {
        View::ver('partidos/Principal/edit',$data);
    }

    // localhost/proyecto/partidos/Principal/ID/put
    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    // localhost/proyecto/partidos/Principal/ID/delete
    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}