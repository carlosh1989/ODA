<?php
namespace App\partidas\controllers;

use App\partidas\models\SecundarioModel;
use Controller,View;

class Secundario extends Controller
{
    function __construct()
    {
        # code...
    }

    public function index()
    {
		View::ver('partidas/secundario');
    }

    public function form()
    {
    	echo "este es otro metodo";
    }
}