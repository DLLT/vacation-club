<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanRegisterUser()
    {
        $this->visit('/')
            ->type('test@email', 'email')
            ->type('password','password')
            ->press('Register')
            ->seePageIs('/register/register_success');
    }

    public function testCanRegisterHouse()
    {

    }
}
