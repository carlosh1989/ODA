<?php  
require __DIR__ . '/vendor/autoload.php';
use App\Controllers\Partida as Par;
use App\Controllers\Traslado as Tras;







$arr = array('cosa' => 'uno');
$krumo = new Krumo;
$krumo->dump($arr);

//require('app/controllers/Traslado.php');
//$traslado = new Traslado();



$traslado = new Tras();
$partida = new Par();

$traslado->hola();
$partida->hola();

