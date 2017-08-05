<?php
namespace App\banco\controllers;

use App\BancoHistoria;
use App\Donante;
use App\DonanteHistoria;

class Historias
{
    function __construct()
    {
        Role('banco');
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        $donante_id = Uri(5);
        $banco_historias = BancoHistoria::all();
        //Arr($banco_historia);
        View(compact('donante_id','banco_historias'));
    }

    public function store()
    {
        extract($_POST);
        //Arr($respuestas);
        $donante = Donante::find($donante_id);

        if($donante->historia)
        {
            if($respuestas)
            {
                foreach ($respuestas as $r) 
                {
                    $donante_historia = DonanteHistoria::where('donante_id',$donante_id)->where('historia_id',$r)->first();
                    $donante_historia->respuesta = 'yes';
                    $donante_historia->save();
                }
            }
        }
        else
        {
            $banco_historias = BancoHistoria::all();

            foreach ($banco_historias as $h) 
            {
                $donante_historia = new DonanteHistoria;
                $donante_historia->donante_id = $donante_id;
                $donante_historia->historia_id = $h->id;
                $donante_historia->respuesta = 'no';
                $donante_historia->save();
            }
        }
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