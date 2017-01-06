<?php
require_once 'vendor/autoload.php';
return [
  'paths' => [
    'migrations' => 'db/migrations',
    'seeds' => 'db/seeds'
  ],
  //'migration_base_class' => '\Migrations\Migration\Migration',
  'environments' => [
    'default_migration_table' => 'phinxlog',
    'default_database' => 'dev',
    'dev' => [
      'adapter' => DB_ADAPTER,
      'host' => DB_HOST,
      'name' => DB_NAME,
      'user' => DB_USER,
      'pass' => DB_PASSWORD,
      'port' => DB_PORT
    ]
  ]
];	