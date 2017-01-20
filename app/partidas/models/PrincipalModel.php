<?php
namespace App\partidas\models;

use System\database\ORM;

class PrincipalModel extends ORM
{
    function __construct()
    {
        # code...
    }

    public function testModel()
    {
    	echo parent::testORM();
    }
}