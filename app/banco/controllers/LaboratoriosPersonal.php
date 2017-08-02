<?php
namespace App\banco\controllers;

use App\Usuario;
use App\laboratorio\Personal;
use System\template\View;
use System\tools\url\Url;

class LaboratoriosPersonal
{
    function __construct()
    {
        Role('banco');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View();
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        $laboratorio_id = Url::uri(5);
        View(compact('laboratorio_id'));
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Arr::show($_POST);
        //se manda los datos del formulario al repositorio para ser guardados
        $ingresarPersonal = Store($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarPersonal)) 
        {
            Success('laboratoriosPersonal/'.$ingresarPersonal, 'El laboratorio se ingreso exitosamente..!');
        } 
        else 
        {
            Error('laboratoriosPersonal/create', $ingresarPersonal);
        }
        //Guardar datos enviados de -create-
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $personal = Personal::find($id);
        View(compact('personal'));
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