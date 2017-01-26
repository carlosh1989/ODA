<?php
namespace App\ventas\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;

class Principal extends Controller
{
    function __construct()
    {
        // code...
    }

    // localhost/proyecto/ventas/principal
    public function index()
    {
        View::ver('ventas/principal/index');
    }

    // localhost/proyecto/ventas/principal/create
    public function create()
    {
        View::ver('ventas/principal/create');
    }

    // localhost/proyecto/ventas/principal/
    public function store()
    {
    	//Guardar datos enviados de -create-
    }

    // localhost/proyecto/ventas/principal/ID
    public function show($id)
    {
        View::ver('ventas/principal/show',$data);
    }

    // localhost/proyecto/ventas/principal/ID/edit
    public function edit($id)
    {
        View::ver('ventas/principal/edit',$data);
    }

    // localhost/proyecto/ventas/principal/ID/put
    public function update($id)
    {
    	//Actualizar datos con el ID
    }

    // localhost/proyecto/ventas/principal/ID/delete
    public function destroy($id)
    {
    	//Borrar un registro usando el ID
    }
}