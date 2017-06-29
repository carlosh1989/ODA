<?php 
namespace App;
use App\Solicitud;
use \Illuminate\Database\Eloquent\Model;
 
class Paciente extends Model {
    protected $table = 'pacientes';
	public $timestamps = false;
    //Ejemplo de definir campos
    protected $fillable = ['nombre','apellido','cedula','fecha_nacimiento','direccion','telefono','sexo'];

	public function solicitudes()
	{
		return $this->hasMany(Solicitud::class, 'id_paciente','id');
	}
}