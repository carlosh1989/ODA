<?php
namespace App\banco\controllers;
use App\Laboratorio;
use System\template\View;

class Laboratorios 
{
    function __construct()
    {
        Role('banco');
    }

    public function index()
    {
        View(Repo());
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        RepoConfirm($_POST,'laboratorios','laboratorios/create');
    }

    public function show($id)
    {
        View(Repo($id));
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

    public function gps()
    {
        View::theme('edit','banco2');
    }

    /* FIN DE METODOS RESTFUL*/
    public function busqueda()
    {
        extract($_POST);
        $laboratorio = Laboratorio::where('razon_social', $razon_social)->first();
        //Arr($laboratorio);
        if($laboratorio)
        {
            Success('laboratorios/'.$laboratorio->id,'Ok');
        }
        else
        {
            Info('laboratorios','Laboratorio no registrado.');
        }
    }
}