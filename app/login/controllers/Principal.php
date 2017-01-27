<?php
namespace App\login\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;
use Zend\Cache\Storage\Adapter\Session;

class Principal extends Controller
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		View::ver('login/principal/index');
    }
    public function login()
    {
    	View::ver('login/principal/login');
    }

    public function verificar()
    {
    	echo "verificando";
    }

    public function store()
    {
    	echo "store";
    }
}