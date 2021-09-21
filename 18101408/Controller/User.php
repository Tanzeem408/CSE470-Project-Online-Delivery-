<?php

namespace App\Models;

class User
{
	public $name;

	public $email;

	public $contact;

	public function setName($Name)
	{
		$this->name = $Name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setContact($contact)
	{
		$this->contact = $contact;
	}

	public function getContact()
	{
		return $this->contact;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}


}