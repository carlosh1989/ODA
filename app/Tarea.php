<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Tarea extends Model {
    protected $table = 'tareas';

    //Ejemplo de definir campos
    protected $fillable = ['usuario_id','titulo','body'];

}

