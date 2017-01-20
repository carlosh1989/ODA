<?php  
namespace System\database;

abstract class ORM
{
	public function index()
	{
		echo "ORM";
	}

	public function testORM()
	{
		$var = "test ORM";
		return $var;
	}

	public function testORM2()
	{
		$var = "test ORM 2";
		return $var;
	}
}
