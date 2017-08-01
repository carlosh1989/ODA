<?php 
namespace App\banco;
use \Illuminate\Database\Eloquent\Model;
 
class Personal extends Model {
    protected $table = 'banco_sangre_personal';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}
