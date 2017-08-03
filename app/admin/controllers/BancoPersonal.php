<?php
namespace App\admin\controllers;

class BancoPersonal
{
    function __construct()
    {
        Role('admin');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View(Repo());
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View();
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //se manda los datos del formulario al repositorio para ser guardados
        $ingresarPersonal = Repo($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarPersonal)) 
        {
            Success('bancoPersonal/'.$ingresarPersonal, 'Los datos personales han sido agregados con exito..!');
        } 
        else 
        {
            Error('bancoPersonal/create', $ingresarPersonal);
        }
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        View(Repo($id));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View(Repo($id));
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