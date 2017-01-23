<?php
require_once __DIR__ . '/vendor/autoload.php';
$aliases = require 'config/aliases.php';
Config\facades\AliasLoader::getInstance($aliases)->register();
var_dump($aliases);


View::ver('partidas/index', $data);