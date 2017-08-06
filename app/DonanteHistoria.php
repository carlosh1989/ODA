<?php 
namespace App;
use App\BancoHistoria;
use \Illuminate\Database\Eloquent\Model;
 
class DonanteHistoria extends Model {
    protected $table = 'donantes_historia';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function historia_pregunta()
	{
		return $this->belongsTo(BancoHistoria::class, 'historia_id','id');
	}	
}
