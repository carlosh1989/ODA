<?php
namespace App\cuentas\controllers;

use App\cuentas\models\Task;
use System\PrincipalController;
use Illuminate\Database\Capsule\Manager as Capsule;
class Login extends PrincipalController
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		//$this->view('cuentas/index');
        //\App\cuentas\models\Task::index();
        Task::index();
        //$tasks->index();
        
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver'    => DB_ADAPTER,
            'host'      => DB_HOST,
            'database'  => DB_NAME,
            'username'  => DB_USER,
            'password'  => DB_PASSWORD,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    
        Task::create([
            'title' => 'Task 1',
            'body' => 'Lorem ipsum'
        ]);
         
        // get all the records from the table
        dd(Task::all()->toArray());
    }

    public function create()
    {
    	$this->view('cuentas/create');
    }
}