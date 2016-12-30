<?php
require __DIR__.'/../vendor/autoload.php';

$arr = array('cosa' => 'uno');
$krumo = new Krumo;
$krumo->dump($arr);
echo "sdfsdf";

require 'app/controllers/Traslado.php';
$traslado = new Traslado();
echo $traslado->index();