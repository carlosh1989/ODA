<?php
namespace App\partidas\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;

class Principal extends Controller
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		View::ver('partidas/index');
    }
}