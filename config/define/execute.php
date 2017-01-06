<?php
require('./config/config.php');
require('./config/db.php');

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


define('DB_ADAPTER', $adapter);
define('DB_HOST', $host);
define('DB_NAME', $dbname);
define('DB_USER', $user);
define('DB_PASSWORD', $password);
define('DB_PORT', $port);

