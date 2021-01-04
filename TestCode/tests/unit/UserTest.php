<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function setUp()
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetTheFirstName()
	{
		$this->user->setFirstName('Billy');

		$this->assertEquals($this->user->getFirstName(), 'Billy');
	}

	public function testThatWeCanGetTheLastName()
	{
		$this->user->setLastName('Garrett');

		$this->assertEquals($this->user->getLastName(), 'Garrett');
	}

	public function testFullNameIsReturned()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy');

		$user->setLastName('Garrett');

		$this->assertEquals($user->getFullName(), 'Billy Garrett');
	}

	public function testFirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy     ');

		$user->setLastName('     Garrett');

		$this->assertEquals($user->getFirstName(), 'Billy');

		$this->assertEquals($user->getLastName(), 'Garrett');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('billy@codecourse.com');

		$this->assertEquals($user->getEmail(), 'billy@codecourse.com');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy');

		$user->setLastName('Garrett');

		$user->setEmail('billy@codecourse.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Billy Garrett');
		$this->assertEquals($emailVariables['email'], 'billy@codecourse.com');
	}
}