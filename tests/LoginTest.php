<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testLogin()
    {
    	$this->visit('/')
             ->see('Login');
    }
    public function testCheckCorrectLogin()
    {
    	$this->visit('/')
         ->type('admin', 'username')
         ->type('admin','password')
         ->press('Login')
         ->seePageIs('/home');
    }
	
	public function testCheckIncorrectLogin
	{
		$this->visit('/')
         ->type('admins', 'username')
         ->type('admins','password')
         ->press('Login')
         ->seePageIs('/');
	}
    
}
