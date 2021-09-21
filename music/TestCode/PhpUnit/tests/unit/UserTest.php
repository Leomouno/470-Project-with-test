<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

public function setUp() :void {

		$this->user = new \App\Models\User;
		
	}


	public function testUserName()
	{
		$this->user->setUserName('raf');

		$this->assertEquals($this->user->getUserName(), 'raf');
	}

	public function testPassword()
	{
		$this->user->setPassword('123');

		$this->assertEquals($this->user->getPassword(), '123');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('raf@gmail');

		$this->assertEquals($user->getEmail(), 'raf@gmail');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setUserName('raf');

		$user->setEmail('raf@gmail');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('user_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['user_name'], 'raf');
		$this->assertEquals($emailVariables['email'], 'raf@gmail');
	}

public function testLogin()
    {
        $user = new \App\Models\User;
        $username = 'leo';
        $pass = '1111';
        $user->setUserName('leo');
        $user->setPassword('1111');
        $this->assertEquals($user->login($username, $pass), 'Valid Login');

    }
		
	public function testSignup()
    {
        $user = new \App\Models\User;
        $username = 'sky';
        $pass = '1111';
		$email='sky@gmail.com';
        $user->setUserName('sky');
        $user->setPassword('1111');
		$user->setEmail('sky@gmail.com');
        $this->assertEquals($user->Signup($username, $pass,$email), 'Valid Signup');

    }	
	
	public function testcheck_logged_in(){
		$user = new \App\Models\User;
        $username = 'sky';
        $user->setUserName('sky');
        $this->assertEquals($user->check_logged_in($username), 'Valid loggedin');

	}

	public function testlogout(){
		$user = new \App\Models\User;
        $username = 'cosmo';
        $user->setUserName('cosmo');
        $this->assertEquals($user->logout($username), 'Valid logout');
	}
	
}