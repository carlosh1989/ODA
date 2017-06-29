<?php
namespace App\admin\controllers;

use App\Usuario;
use App\admin\repositories\UsuariosRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Usuarios extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        View::show('index', compact('usuarios'));
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::show('create');
    }


    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Guardar datos enviados de -create-
        //se manda los datos del formulario al repositorio para ser guardados
        $ingreso = Repo::ingresar($_POST);

        //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
        if (is_numeric($ingreso)) 
        {
            Redirect::send('admin/usuarios/'.$ingreso,'success', 'el usuario se agrego exitosamente.');
        } 
        else 
        {
            Redirect::send('admin/usuarios/create','error','Error al ingresar usuario');
        }

    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $usuario = Usuario:: find($id);
        View::show('show', compact('usuario'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View::show('edit' , compact('id'));
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
        if($id == 1)
        {
            Redirect::send('admin/usuarios','error', 'No puede borrar la cuenta admin original.');  
        }
        else
        {
            $usuario = (object) Session::get('current_user');

            if($usuario->id == $id)
            {
                Redirect::send('admin/usuarios','error', 'No puede borrar el usuario en el que esta logueado, porfavor comunique al admin originario para llevar a cabo dicha acción.');  
            }
            else
            {
                Usuario::find($id)->delete();
                Redirect::send('admin/usuarios','success', 'El usuario se borro con exito.');  
            }   
        }

    }
}