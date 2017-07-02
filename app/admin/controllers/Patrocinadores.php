<?php
namespace App\admin\controllers;

use App\admin\repositories\PatrocinadoresRepository as Repo;
use Controller,View,Token,Session,Arr,Message,Redirect,Permission;
use Stripe\Customer;
use Stripe\Stripe;

class Patrocinadores extends Controller
{
    function __construct()
    {
        parent::__construct();
        Permission::withRole('admin');
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::show('index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::show('create');
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Arr::show($_POST);
        try {
            Stripe::setApiKey('sk_test_UhDOTTpPmYMaTx0dJae5sHKF');

            extract($_POST);
             $charge = Customer::create(array(
                'card'     => $stripeToken,
                'email'   => $stripeEmail,
                'plan' => $plans,
                'description' => $id_pago
            )); 
            Redirect::send('admin/patrocinadores/','success', 'Afiliación hecha con exito..!.');
        } catch (\Stripe\Error\Card $e) {
            $error = $e->getMessage();
            echo $error;
        }
        //Guardar datos enviados de -create-
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        View::show('show', compact('id'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        View::show('edit' , compact('id'));
    }

    // localhost/proyecto/modulo/principal/ID/put
    public function update($id)
    {
        //Actualizar datos con el ID
    }

    // localhost/proyecto/modulo/principal/ID/delete
    public function destroy($id)
    {
        //Borrar un registro usando el ID
    }
}