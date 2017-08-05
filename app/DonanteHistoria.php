<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class DonanteHistoria extends Model {
    protected $table = 'donantes_historia';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}
