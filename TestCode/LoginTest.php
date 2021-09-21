<?php

class LoginTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $Login;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->Login = new \App\Models\Login;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->Login = new \App\Models\Login;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetID()
	{
		$this->Login->setID('101');

		$this->assertEquals($this->Login->getID(), '101');
	}


	public function testThatWeCanSetLogin()
	{
        $Login = new \App\Models\Login;

		$this->assertEquals($this->Login->Check(1), 'login successful');
	}

    public function testPass()
	{
        $Login = new \App\Models\Login;

		$this->assertEquals($this->Login->Check(0), 'Wrong password');
	}


}