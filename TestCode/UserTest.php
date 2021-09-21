<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetName()
	{
		$this->user->setName('Tanzeem');

		$this->assertEquals($this->user->getName(), 'Tanzeem');
	}


	public function testThatWeCanGetContact()
	{
		$this->user->setContact('01861134262');

		$this->assertEquals($this->user->getContact(), '01861134262');
	}


	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('tanzeem@gmail.com');

		$this->assertEquals($user->getEmail(), 'tanzeem@gmail.com');
	}

}