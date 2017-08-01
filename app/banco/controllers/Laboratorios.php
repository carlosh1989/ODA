<?php
/*class MyClass {

  function declareGlobalsFn () {
    // functions declared inside a function have global scope

    function globalfn1() {echo "fn1";}

    function globalfn2() {echo "fn2";}
  }
}

$ob = new MyClass();
$ob->declareGlobalsFn();

globalfn1(); // fn1
globalfn2(); // fn2*/
namespace App\banco\controllers;

use App\Laboratorio;
use App\banco\repositories\LaboratoriosRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission;

class Laboratorios extends Controller
{
    function __construct()
    {
        Permission::withRole('banco');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        $laboratorios = Laboratorio::all();
        View(compact('laboratorios'));
        //$laboratorios = Laboratorio::all();
        //View::go(compact('laboratorios'));
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
        $ingresarLaboratorio = Repo::store($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingresarLaboratorio)) 
        {
            Send('laboratorios/'.$ingresarLaboratorio,'success', 'El laboratorio se ingreso exitosamente..!');
        } 
        else 
        {
            Send('laboratorios/create','error', $ingresarLaboratorio);
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