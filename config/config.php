<?php
/*
--------------------------------------------------------------
Ruta Base del proyecto
--------------------------------------------------------------
*/
$baseUrl = 'localhost/ODA/';
/*
--------------------------------------------------------------
Constantes de Controlador por defecto
---------------------------------------------------------------
*/
$ClaseDefault = 'App\login\controllers\Login';
$metodoDefault = 'index';

/*
---------------------------------------------------------------
Definiendo las constantes
---------------------------------------------------------------
*/


if($baseUrl)
{
	define('baseUrl',$baseUrl);
}
else
{
	define('baseUrl','');
}

if ($ClaseDefault and $metodoDefault) 
{
	define('ClaseDefault',$ClaseDefault);
	define('metodoDefault',$metodoDefault);
}
else
{
	define('ClaseDefault','');
	define('metodoDefault','');
}





