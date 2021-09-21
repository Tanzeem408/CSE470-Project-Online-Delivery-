<?php

namespace App\Models;

class Job
{
	public $name;

	public $payment;

	public $location;

    public $time;

    public $category;

	public function setName($Name)
	{
		$this->name = $Name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPayment($payment)
	{
		$this->payment = $payment;
	}

	public function getPayment()
	{
		return $this->payment;
	}

	public function setTime($time)
	{
		$this->time = $time;
	}

	public function getTime()
	{
		return $this->time;
	}

    public function setLocation($location)
	{
		$this->location = $location;
	}

	public function getLocation()
	{
		return $this->location;
	}

    public function setCategory($category)
	{
		$this->category = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

}