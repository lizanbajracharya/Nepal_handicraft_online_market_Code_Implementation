<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function logintest()
    {
    $this->visit(route('login'));
    $this->type('asd@asd.com', 'email');
    $this->type('12345678', 'password');
    $this->press('Login');
    $this->assertTrue(Auth::check());
    $this->seePageIs(route('user.userdashboard'));

    }
}
