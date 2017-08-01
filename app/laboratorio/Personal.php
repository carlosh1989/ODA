<?php 
namespace App\laboratorio;
use \Illuminate\Database\Eloquent\Model;
 
class Personal extends Model {
    protected $table = 'laboratorios_personal';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}
