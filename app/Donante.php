<?php 
namespace App;
use App\DonanteEstatus;
use App\DonanteHistoria;
use App\DonanteSerologia;
use App\DonanteTipeaje;
use \Illuminate\Database\Eloquent\Model;
 
class Donante extends Model {
    protected $table = 'donantes';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function historias()
	{
		return $this->hasMany(DonanteHistoria::class, 'donante_id','id');
	}

	public function historia()
	{
		return $this->hasOne(DonanteHistoria::class, 'donante_id','id');
	}

	public function serologia()
	{
		return $this->hasOne(DonanteSerologia::class, 'donante_id','id');
	}

	public function tipeaje()
	{
		return $this->hasOne(DonanteTipeaje::class, 'donante_id','id');
	}

	public function estatus()
	{
		return $this->hasOne(DonanteEstatus::class, 'donante_id','id');
	}
}

