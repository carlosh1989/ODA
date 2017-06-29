<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Hematologia extends Model {
    protected $table = 'hematologias';
	public $timestamps = false;
    //Ejemplo de definir campos
    protected $fillable = ['id_solicitud','hematocritos','hemoglobina','leucocitos','neutrofilos','linfocitos'];

	public function solicitud()
	{
		return $this->belongsTo(Paciente::class, 'id_paciente','id');
	}
}

