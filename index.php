<?php
// Dividimos la URL.
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
require('config/define/execute.php');
session_start();

//Separando la cadena de la ruta en dos partes, la ruta para el modulo/clase/metodo y los parametros.
list($control,$parametros) = explode('?', $_SERVER['REQUEST_URI']);
$requestURI = explode( '/', $control );
// Eliminamos los espacios del principio y final
// y recalculamos los índices del vector.
$requestURI = array_values( array_filter( $requestURI ) );

//comprobamos si la baseUrl esta configurada.
//de no estarlo dara error.
if(baseUrl)
{
	//Verificando si la ruta MODULO -> CONTROLADOR -> METODO
	//esta completa.
	if($requestURI[1] and $requestURI[2])
	{
		//Modulo de hmvc
		$modulo = $requestURI[1];

		//controlador adentro de la carperta d e dicho modulo
		$controlador = $requestURI[2];

		//el metodo de ese controlador
		$metodo = $requestURI[3];

		$parametro = $requestURI[4];

		list($nombreControlador,$ext) = explode('.', $controlador);

		$nombreClase = ucfirst($nombreControlador);

		//colocamos la ruta completa de la clase haciendo uso de los namespace
		$cargarClase =  '\App\\'.$modulo.'\\controllers\\'.$nombreClase.'';

		//llamamos a la clase
		$controller = new $cargarClase();

		//Si no se pasa un tercer parametro URI entonces se sobre entiende de que 
		//el metodo a llamar es INDEX
		$method = $_SERVER['REQUEST_METHOD'];
		
		if (!$metodo) {
			switch ($method) {
			  case 'PUT':
				$id = $metodo;
				$params = array($id);
				$metodo = 'update';
			    break;
			  case 'POST':
				$metodo = 'store';
			    break;
			  case 'GET':
			  	if (!$requestURI[4]) 
			  	{
			  		$metodo = 'index';
			  	}

			  	if ($requestURI[4] == 'create') {
			  		//$metodo = 'create';
			  	}

				$metodo = 'index';
			    break;
			  case 'HEAD':
				$metodo = 'update';
			    break;
			  case 'DELETE':
				$metodo = 'delete';
			    break;
			  case 'OPTIONS':
				$metodo = 'optons';  
			    break;
			  default:
			    handle_error($request);  
			    break;
			}
		}

		if($metodo){
			switch ($method) {
			  case 'GET':
			  	if($metodo=='create')
			  	{
			  		$metodo = $metodo;
			  	}
			  	else
			  	{
			  		$num = is_numeric($metodo);
			  		if($num == true)
			  		{
			  			if($parametro and $parametro == 'edit')
			  			{
				  			$id = $metodo;
				  			$params = array($id);
				  			$metodo = 'edit';
			  			}
			  			else
			  			{
				  			$id = $metodo;
				  			$params = array($id);
				  			$metodo = 'show';
			  			}
			  		} 
			  		else 
			  		{
			  			$metodo = $metodo;	
			  		}
			  	}
			    break;
			  case 'POST':
				$id = $metodo;
				$params = array($id);
				$num = is_numeric($metodo);
				if (!$metodo) {
					$metodo = 'store';
				} 
				else 
				{
					if($num == true)
					{
						if (!$requestURI[4]) 
						{
							$metodo = 'update';
						}
						else
						{
							if ($requestURI[4] == 'delete') {
								$metodo = 'destroy';
							}	
							else
							{
								$metodo = $metodo;
							}
						}
					} 
					else 
					{
						$metodo = $metodo;	
					}
				}
			    break;
			  default:
			    handle_error($request);  
			    break;
			}
		}

		//pone vacio los aprametros para los metodos que no tengan.
		if(!$params){$params = array();}
		//llamamos al metodo
		call_user_func_array(array(__NAMESPACE__ .$cargarClase, $metodo),$params);
	}
	else
	{
		/*
		Constantes para controlador default
		*/
		$controladorDefault = ClaseDefault;
		$metodoDefault = metodoDefault;

		//Verificamos si se configuro el controlador default que puede ser por ejemplo el login o alguna clase de verificador de roles.
		if($controladorDefault and $metodoDefault)
		{
			//llamamos al metodo.
			$controladorDefault::$metodoDefault();
		}
		else
		{
		    ob_start();
		    include('resources/systemMessages/controllerDefault.php');
		    echo ob_get_clean();
		}
	}
}
else
{
	//echo "Error, cofigure el baseUrl en config/config.php";
    ob_start();
    include('resources/systemMessages/baseUrl.php');
    echo ob_get_clean();
}


