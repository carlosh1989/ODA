<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model {
    protected $table = 'usuario';
	public $timestamps = false;
    //Ejemplo de definir campos
    protected $fillable = ['nombre','apellido','password','cargo','rol','usuario'];
}

