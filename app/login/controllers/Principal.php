<?php
namespace App\login\controllers;

use App\Tarea;
use App\Usuario;
use App\login\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
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
		echo 'VERDADERO';
		echo '<hr>';
		echo '<hr>';
		echo $_POST[Token::id()];
		echo '<hr>';
		echo Token::id();
    }

    public function orm()
    {
/*    	$user = Usuario::create([
    		'username'=>'carlos silva',
    		'email'=>'elmorochez22@gmail.com',
    		'password'=>'asdas556a1d1as65d1as56d1as516d'
    	]);*/

    	echo "guardado";
    	echo '<pre>';
    	$usuarios = Usuario::all();
    	foreach ($usuarios as $usu) 
    	{
    		echo $usu->email;
    		echo '<hr>';
    	}

    	$usuario = Usuario::find(1);

    	$usuario->email = 'moro@gmail.com';
    	$usuario->save();
    	echo 'Actualizado';
    	$usuario = Usuario::find(1);
    	echo '<hr>';
    	echo $usuario->email;
    	echo '<hr>';
    	echo 'Entidad Relación';
    	echo '<hr>';
    	foreach ($usuario->tareas as $tarea) 
    	{
    		echo $tarea->titulo;
    		echo '<hr>';
    	}

    	$tareas = Tarea::all();


		foreach (Arr::paginator($tareas,1) as $item) {
		    echo $item->titulo . '<br>';
		}

		echo Arr::paginator($tareas);
		echo '<hr>';
		Arr::ver($tareas,1);
    }

    public function orm2()
    {
    	PrincipalModel::test();
    }

    public function paginacion()
    {
    	$data['tareas'] = Tarea::all();
    	View::show('paginacion', $data);
		View::ver('login/principal/paginacion', $data);

    }
    public function flash()
    {
		Message::add('success','titulo','Mensaje de la alerta..!');
		View::ver('login/principal/flash');
    }
}