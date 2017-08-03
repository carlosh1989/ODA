<?php
namespace App\laboratorio\repositories;

use App\Donante;
use Eloquent;

class DonantesRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function index()
    {
        $data['donantes'] = Donante::all();
        return $data;
    }

    public function store($data)
    {
    	
    }

    public function show($id)
    {

    }

    public function update($id,$data)
    {

    }

    public function destroy($id)
    {

    }
}