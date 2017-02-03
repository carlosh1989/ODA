<?php
namespace System\tools\security;

class csrf {

    public function __construct()
    {
        		session_start();
    }
	public function get_token_id() {
	        if(isset($_SESSION['token_id'])) { 
	                return $_SESSION['token_id'];
	        } else {
	                $token_id = $this->random(10);
	                $_SESSION['token_id'] = $token_id;
	                return $token_id;
	        }
	}

	public function get_token() {
	        if(isset($_SESSION['token_value'])) {
	                return $_SESSION['token_value']; 
	        } else {
	                $token = hash('sha256', $this->random(500));
	                $_SESSION['token_value'] = $token;
	                return $token;
	        }
	}

	public function check_valid($method) {
	        if($method == 'post' || $method == 'get') {
	                $post = $_POST;
	                $get = $_GET;
	                if(isset(${$method}[$this->get_token_id()]) && (${$method}[$this->get_token_id()] == $this->get_token())) {
	                        return true;
	                } else {
	                        return false;   
	                }
	        } else {
	                return false;   
	        }
	}

	public function check($method)
	{
		if ($method == 'post') 
		{
	        if(isset($_SESSION['token_id'])) { 
	                $token_id = $_SESSION['token_id'];
	     
	        } else {
	                $token_id = $this->random(10);
	                $_SESSION['token_id'] = $token_id;

	        }

	        if(isset($_SESSION['token_value'])) {
	                $token = $_SESSION['token_value']; 
	
	        } else {
	                $token = hash('sha256', $this->random(500));
	                $_SESSION['token_value'] = $token;
	        }

			if(isset($_POST[$token_id]) && ($_POST[$token_id] == $token)) 
			{
				//echo 'TRUE';
				return TRUE;
			} 
			else 
			{
				//echo 'FALSE';
				return FALSE;  
			}
		}


	}


	public function form_names($names, $regenerate) {
	 
	        $values = array();
	        foreach ($names as $n) {
	                if($regenerate == true) {
	                        unset($_SESSION[$n]);
	                }
	                $s = isset($_SESSION[$n]) ? $_SESSION[$n] : $this->random(10);
	                $_SESSION[$n] = $s;
	                $values[$n] = $s;       
	        }
	        return $values;
	}

	public function form_name($n, $regenerate=false) {
		if($regenerate == true) 
		{
			unset($_SESSION[$n]);
		}

		$s = isset($_SESSION[$n]) ? $_SESSION[$n] : $this->random(10);
		$_SESSION[$n] = $s;
		return $s;
	}

	public function form($n, $regenerate=false) {
		if($regenerate == true) 
		{
			unset($_SESSION[$n]);
		}

		$s = isset($_SESSION[$n]) ? $_SESSION[$n] : $this->random(10);
		$_SESSION[$n] = $s;
		return $_POST[$s];
	}
	
	private function random($len) {
	        if (@is_readable('/dev/urandom')) {
	                $f=fopen('/dev/urandom', 'r');
	                $urandom=fread($f, $len);
	                fclose($f);
	        }
	 
	        $return='';
	        for ($i=0;$i<$len;++$i) {
	                if (!isset($urandom)) {
	                        if ($i%2==0) mt_srand(time()%2147 * 1000000 + (double)microtime() * 1000000);
	                        $rand=48+mt_rand()%64;
	                } else $rand=48+ord($urandom[$i])%64;
	 
	                if ($rand>57)
	                        $rand+=7;
	                if ($rand>90)
	                        $rand+=6;
	 
	                if ($rand==123) $rand=52;
	                if ($rand==124) $rand=53;
	                $return.=chr($rand);
	        }
	        return $return;
	}
}