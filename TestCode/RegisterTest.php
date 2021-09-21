<?php

class RegisterTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $register;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->register = new \App\Models\register;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->register = new \App\Models\register;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanSetLogin()
	{
        $register = new \App\Models\register;

		$this->assertEquals($this->register->Check(0), 'new here? proceed to signup');
	}

    public function testOld()
	{
        $register = new \App\Models\register;

		$this->assertEquals($this->register->Check(1), 'log in');
	}

    public function testThatWeCanGetAddress()
	{
		$this->register->setAddress('Gulshan');

		$this->assertEquals($this->register->getAddress(), 'Gulshan');
	}


}