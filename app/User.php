<?php 
namespace App;
use App\Task;
use \Illuminate\Database\Eloquent\Model;
 
class User extends Model {
    protected $table = 'users';
    protected $fillable = ['username','email','password'];

    public function tasks()
    {
        return $this->hasMany(Task::class,'usuario_id');
    }
}