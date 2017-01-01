<?php
// Dividimos la URL.
require_once __DIR__ . '/vendor/autoload.php';
list($control,$parametros) = explode('?', $_SERVER['REQUEST_URI']);
$requestURI = explode( '/', $control );
// Eliminamos los espacios del principio y final
// y recalculamos los índices del vector.
$requestURI = array_values( array_filter( $requestURI ) );

//Modulo de hmvc
$modulo = $requestURI[1];

//controlador adentro de la carperta d e dicho modulo
$controlador = $requestURI[2];

//el metodo de ese controlador
$metodo = $requestURI[3];

list($nombreControlador,$ext) = explode('.', $controlador);
//echo $requestURI[2];
$nombreClase = ucfirst($nombreControlador);

//colocamos la ruta completa de la clase haciendo uso de los namespace
$cargarClase =  '\App\\'.$modulo.'\\controllers\\'.$nombreClase.'';

//llamamos a la clase
$controller = new $cargarClase();

//llamamos al metodo
$controller->$metodo();

//crear template desde bash
//http://stackoverflow.com/questions/6214743/create-new-file-from-templates-with-bash-script
