<?php 
namespace App\laboratorio;
use App\Usuario;
use \Illuminate\Database\Eloquent\Model;
 
class Personal extends Model {
    protected $table = 'laboratorios_personal';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuario_id','id');
	}
	
}
