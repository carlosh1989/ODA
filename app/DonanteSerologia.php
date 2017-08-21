<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class DonanteSerologia extends Model {
    protected $table = 'donantes_serologia';
   	public $timestamps = false;

    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}
