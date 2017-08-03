<?php
namespace App\laboratorio\controllers;

class Donantes
{
    function __construct()
    {
        Role('laboratorio');
    }

    public function index()
    {
        View(Repo());
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