<?php
namespace App\banco\controllers;
use App\Laboratorio;

class Laboratorios
{
    function __construct()
    {
        Role('banco');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        $laboratorios = Laboratorio::all();
        View(compact('laboratorios'));
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View();
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Arr::show($_POST);
        //se manda los datos del formulario al repositorio para ser guardados
        $ingresarLaboratorio = Store($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarLaboratorio)) 
        {
            Success('laboratorios/'.$ingresarLaboratorio, 'El laboratorio se ingreso exitosamente..!');
        } 
        else 
        {
            Error('laboratorios/create', $ingresarLaboratorio);
        }
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $laboratorio = Laboratorio::find($id);
        View(compact('laboratorio'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View(compact('id'));
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