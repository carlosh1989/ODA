<?php  
require __DIR__ . '/vendor/autoload.php';
use App\Controllers\Partida as Par;


$arr = array('cosa' => 'uno');
$krumo = new Krumo;
$krumo->dump($arr);

//require('app/controllers/Traslado.php');
//$traslado = new Traslado();




$partida = new Par();


$partida->hola2();

