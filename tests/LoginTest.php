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
    public function checkLogin()
    {
    	$this->visit('/')
         ->type('admin', 'username')
         ->type('admin','password')
         ->press('Login')
         ->seePageIs('/home');
    }

    
}
