<?php
namespace App\banco\controllers;

use App\Donante;
use App\DonanteSerologia;

class Serologias
{
    function __construct()
    {
        Role('banco');
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        $donante = Donante::find(Uri(5));
        View(compact('donante'));
    }

    public function store()
    {
        extract($_POST);
        $respuesta = Repo($_POST);

        if($respuesta)
        {
            Success('serologias/'.$donante_id,'Serologia agregada con exito');
        }
        else
        {
            Info('serologias/create/'.$donante_id, $respuesta);
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}