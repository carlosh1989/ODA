<?php
namespace App\admin\repositories;

use App\Usuario;
use Eloquent;

class UsuariosRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function ingresar($post)
    {
    	extract($post);
		$usuario = new Usuario;
		$usuario->nombre = $nombre;
		$usuario->apellido = $apellido;
		$usuario->usuario = $email;
		$usuario->rol = 'admin';
		$usuario->cargo = $cargo;
		$password2 = password_hash($password, PASSWORD_DEFAULT);
		$usuario->password = $password2 ;
		//$pensionado = Pensionado::create($data);

		if( $usuario->save())
		{
			//primero busca pensionado con el id para asi actualizar el id_autorizado
        	return $usuario->id;
		}
		else
		{
        	return 'Error al guardar datos de usuario';
		}
    }
}