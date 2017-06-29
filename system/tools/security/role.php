<?php
namespace System\tools\security;

use System\tools\rounting\Redirect;
use System\tools\session\Session;

class Permission {

	public static function withRole($role)
	{
    	if($role)
    	{
	        $session = new Session();
	        if ($session->isRegistered()) {
	            if($session->isExpired()) 
	            {
	                Redirect::to('');
	            } 
	            else 
	            {
	                $usuario = (object) Session::get('current_user');
	                if($usuario->rol != $role)
	                {
	                    Redirect::to('');
	                }
	            }
	        } 
	        else
	        {
	            Redirect::to('');
	        }
    	}
	}

	public static function withoutRole()
	{
        $session = new Session();
        if ($session->isRegistered()) {
            if($session->isExpired()) 
            {
                Redirect::to('');
            } 
        } 
        else
        {
            Redirect::to('');
        }
	}
}
