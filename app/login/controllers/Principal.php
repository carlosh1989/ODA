<?php
namespace App\login\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;
use rcastera\Browser\Session\Session;

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
    	$errors = array();
	    if (! empty($_POST)) {
	        if ($_POST['usuario'] == 'test' && $_POST['clave'] == 'test') {
	            $session = new Session();

	            // You can define what you like to be stored.
	            $user = array(
	                'user_id'	=> 1,
	                'username'	=> $_POST['username'],
	                'role'		=> 'admin'	
	            );

	            $session->register(120); // Register for 2 hours.
	            $session->set('current_user', $user);
	            header('location: http://localhost/ODA/login/principal/test');
	            exit;
	        } else {
	            $errors[] = 'Invalido login.';
				echo "Error";
	        }
	    }
    }

    public function test()
    {
	    $session = new Session();

	    // Check if the session registered.
	    if ($session->isRegistered()) {
	        // Check to see if the session has expired.
	        // If it has, end the session and redirect to login.
	        if ($session->isExpired()) {
	            $session->end();
	            //header('location: login.php');
	            exit;
	        } else {
	            // Keep renewing the session as long as they keep taking action.
	            $session->renew();
	            echo "esta logueado";
	        }
	    } else {
	        header('location: http://localhost/ODA/login/principal/login');
	        exit;
	    }
    }

    public function logout()
    {
	    $session = new Session();
	    $session->end();
	    header('location: http://localhost/ODA/login/principal/test');
	    exit;
    }
}