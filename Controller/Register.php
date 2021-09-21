<?php

namespace App\Models;

class Register
{
	public $check;

	public $address;

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}


	public function Check($check)
	{
        if ($check>0){
            return 'log in';
        }else{
            return 'new here? proceed to signup';
        }
		
	}

}