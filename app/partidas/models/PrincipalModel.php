<?php
namespace App\partidas\models;

use System\ORM;

class PrincipalModel extends ORM
{
    function __construct()
    {
        # code...
    }

    public function dos()
    {
    	$string = 'Principal model';
    	return $string;
    }
}