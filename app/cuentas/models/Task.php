<?php
namespace App\cuentas\models;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class Task extends Eloquent
{
    protected  $fillable = ['title','body'];

    public function index()
    {
    	echo "<hr>";
    	echo "TASKS CARGADA";
    	echo "<hr>";
    }
}