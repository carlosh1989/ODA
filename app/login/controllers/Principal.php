<?php
namespace App\login\controllers;

use App\partidas\models\PrincipalModel;
use Controller,View;
use System\tools\security\csrf;
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
		session_start();
		 
		$csrf = new csrf();
		 
		 
		// Genera un identificador y lo valida
		$data['token_id'] = $csrf->get_token_id();
		$data['token_value'] = $csrf->get_token($token_id);
		 
		// Genera nombres aleatorios para el formulario
		$data['form_names'] = $csrf->form_names(array('user', 'password'), false);
    	View::ver('login/principal/login', $data);
    }

    public function verificar()
    {
		$password = password_hash('test', PASSWORD_DEFAULT);
		$hash = $password;
    	$errors = array();
	    if (! empty($_POST)) 
	    {
	        if ($_POST['usuario'] == 'test' && password_verify($_POST['usuario'], $hash)) 
	        {
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
	        } 
	        else 
	        {
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
	            header('location: location: http://localhost/ODA/login/principal/login');
	            exit;
	        } else {
	            // Keep renewing the session as long as they keep taking action.
	            $session->renew();
	            echo "esta logueado";
	            echo "<hr>";
	            \krumo::dump($session->getSession());
	            $user = (object) $session->get('current_user');
	            echo $user->role;	
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

    public function bycript()
    {
    	echo "asdasds";
		// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
		//$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
		$password = password_hash('rasmuslerdorf', PASSWORD_DEFAULT);
		$hash = $password;
		if (password_verify('rasmuslerdorf', $hash)) {
		    echo '¡La contraseña es válida!';
		} else {
		    echo 'La contraseña no es válida.';
		}
    }

    public function csrf()
    {
		session_start();
		$csrf = new csrf();
		\krumo::dump($_POST);
		echo "<hr>";
		extract($_POST);
		$nombres = csrf::form_names(array('user', 'password'), false);
		\krumo::dump($nombres);
		$user = $nombres['user'];
		$password = $nombres['password'];
		echo "<hr>";
		echo $_POST[$user];
		echo "<hr>";
		echo csrf::form('user');

		if(csrf::form('user') || csrf::form('password')) {
		//if(isset($_POST[$form_names['user']], $_POST[$form_names['password']])) {
		        // Revisa si el identificador y su valor son válidos.
/*
		        if($csrf->check_post()) {
		                // Get the Form Variables.
		                $user = $_POST[$form_names['user']];
		                $password = $_POST[$form_names['password']];
		 
		                // La función Form va aquí
		                echo "<hr>";
		                echo "paso el chequeo";
		        }*/

		        // Regenera un valor aleatorio nuevo para el formulario.
		        //$form_names = $csrf->form_names(array('user', 'password'), true);
		        //csrf::check_post('post');
//asdasdas
		        if (csrf::check_post('post')) {
		        	echo 'VERDADERO';
		        } else {
		        	echo 'FALSO';
		        }
		        
		}	
    }
}