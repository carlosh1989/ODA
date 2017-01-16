<?php
// bootstrap.php
require_once 'vendor/autoload.php';


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = array("db");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'dbname' => DB_NAME,
    'user' => DB_USER,
    'password' => DB_PASSWORD,
    'host' => DB_HOST,
    'driver' => DB_ADAPTER_DOCTRINE,
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

echo DB_NAME;