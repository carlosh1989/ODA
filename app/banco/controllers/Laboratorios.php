<?php
namespace App\banco\controllers;
use App\Laboratorio;

class Laboratorios 
{
    function __construct()
    {
        Role('banco');
    }

    public function index()
    {
        $laboratorios =  Laboratorio::all();
        View(compact('laboratorios'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {
        $ingresarLaboratorio = Store($_POST);
        if (is_numeric($ingresarLaboratorio)) 
        {
            Success('laboratorios/'.$ingresarLaboratorio, 'El laboratorio se ingreso exitosamente..!');
        } 
        else 
        {
            Error('laboratorios/create', $ingresarLaboratorio);
        }
    }

    public function show($id)
    {
        $laboratorio = Laboratorio::find($id);
        View(compact('laboratorio'));
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