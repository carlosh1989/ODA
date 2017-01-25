<?php
namespace App\traslados\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;

class Principal extends Controller
{
    function __construct()
    {
        // code...
    }

    public function index()
    {
        View::ver('traslados/principal/index');
    }

    public function create()
    {
    	View::ver('traslados/principal/create');
    }

    public function store()
    {
    	extract($_POST);
    	echo $var;
    }

    public function show($id)
    {
		View::ver('traslados/principal/show', $data);
    }

    public function edit($id)
    {
    	$data['id'] = $id;
    	View::ver('traslados/principal/edit', $data);
    }

    public function update($id)
    {
    	echo "update: ".$id;
    }
}