<?php
 
use Illuminate\Database\Capsule\Manager as Capsule;
 
$capsule = new Capsule();
 
$capsule->addConnection([
    'driver'    => DB_ADAPTER,
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false,
]);
 
$capsule->setAsGlobal();
 
$capsule->bootEloquent();