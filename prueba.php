<?php
// Dividimos la URL.
require_once __DIR__ . '/vendor/autoload.php';
list($control,$parametros) = explode('?', $_SERVER['REQUEST_URI']);
$requestURI = explode( '/', $control );
// Eliminamos los espacios del principio y final
// y recalculamos los índices del vector.
$requestURI = array_values( array_filter( $requestURI ) );

//crear template desde bash
//http://stackoverflow.com/questions/6214743/create-new-file-from-templates-with-bash-script
