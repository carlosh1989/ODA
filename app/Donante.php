<?php 
namespace App;
use App\DonanteHistoria;
use \Illuminate\Database\Eloquent\Model;
 
class Donante extends Model {
    protected $table = 'donantes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function historia()
	{
		return $this->hasOne(DonanteHistoria::class, 'donante_id','id');
	}
}

