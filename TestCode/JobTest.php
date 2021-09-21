<?php

class JobTest extends \PHPUnit\Framework\TestCase
{

	protected $job;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->job = new \App\Models\job;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->job = new \App\Models\job;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetName()
	{
		$this->job->setName('pillow');

		$this->assertEquals($this->job->getName(), 'pillow');
	}


	public function testThatWeCanGetPayment()
	{
        $this->job->setPayment(500);

		$this->assertEquals($this->job->getPayment(), 500);
	}


	public function testTimeCanBeSet()
	{
		$job = new \App\Models\job;

		$job->setTime('12.00 pm');

		$this->assertEquals($job->getTime(), '12.00 pm');
	}


    public function testLocationCanBeSet()
	{
		$job = new \App\Models\job;

		$job->setLocation('Uttara');

		$this->assertEquals($job->getLocation(), 'Uttara');
	}

    public function testCategoryCanBeSet()
	{
		$job = new \App\Models\job;

		$job->setCategory('Document');

		$this->assertEquals($job->getCategory(), 'Document');
	}


}