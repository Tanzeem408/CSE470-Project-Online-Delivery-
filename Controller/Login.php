<?php

namespace App\Models;

class Login
{
	public $check;

	public $userid;

	public function setID($userid)
	{
		$this->userid = $userid;
	}

	public function getID()
	{
		return $this->userid;
	}

	public function setLogin($check)
	{
		$this->check = $check;
	}

	public function Check($check)
	{
        if ($check>0){
            return 'login successful';
        }else{
            return 'Wrong password';
        }
		
	}

}