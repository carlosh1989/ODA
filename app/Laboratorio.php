<?php 
namespace App;
use App\laboratorio\Personal as LaboratorioPersonal;
use \Illuminate\Database\Eloquent\Model;
 
class Laboratorio extends Model {
    protected $table = 'laboratorios';
	public $timestamps = false;

    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function laboratorio_personal()
	{
		return $this->hasMany(LaboratorioPersonal::class, 'laboratorio_id','id');
	}
}

