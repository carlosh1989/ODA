<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class BancoHistoria extends Model {
    protected $table = 'banco_historias';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}
