<?php
namespace App\supervisor\controllers;

use App\Supervisor;

class Principal
{
    function __construct()
    {

    }

    public function index()
    {
        $supervisores = Supervisor::all();
        View(compact('supervisores'));
        View::show('inicio',compact('supervisores'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}