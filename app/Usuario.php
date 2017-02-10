<?php 
namespace App;
use App\Tarea;
use \Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model {
    protected $table = 'usuarios';

    //Ejemplo de definir campos
    protected $fillable = ['nombre','email','password'];

    public function tareas()
    {
        return $this->hasMany(Tarea::class,'usuario_id');
    }
}

