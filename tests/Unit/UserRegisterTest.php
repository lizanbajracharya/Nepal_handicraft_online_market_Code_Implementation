<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**test */
    public function testCreateUser()
    {      
        $this->withoutExceptionHandling();
        $this ->actingAs(factory(User::class)->create());
        $response = $this->get('user/dashboard')->assertOk();           
    }
}
