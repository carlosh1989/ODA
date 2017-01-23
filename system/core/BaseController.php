<?php  
namespace System\core;

use System\template\View;

class BaseController
{
    function __construct()
    {
        # code....
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
