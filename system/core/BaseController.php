<?php  
namespace System\core;

use Eloquent;
use Illuminate\Support\Facades\Redirect;
use System\template\View;
use System\tools\security\Permission;
use System\tools\session\Session;

class BaseController 
{
    public function __construct()
    {
    	new Eloquent();
    }
}
