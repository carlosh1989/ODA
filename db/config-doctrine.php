<?php
// bootstrap.php
require_once 'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__,'../.env');
$dotenv->load();
require('config/define/execute.php');


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = array("db");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'dbname' => $_SERVER['ENV_DB_DATABASE'],
    'user' => $_SERVER['ENV_DB_USERNAME'],
    'password' => $_SERVER['ENV_DB_PASSWORD'],
    'host' => $_SERVER['ENV_DB_HOST'],
    'driver' => $_SERVER['ENV_DB_ADAPTER_DOCTRINE'],
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
