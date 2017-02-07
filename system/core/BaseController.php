<?php  
namespace System\core;

use System\template\View;
use Eloquent;

class BaseController
{
    function __construct()
    {
		new Eloquent();
    }

	public function test()
	{
		echo "test";
	}

	public function view($vista,$array=Null)
	{
		return View::ver('partidas/index');
	}
}
