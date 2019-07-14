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
    public function test_Login_test()
    {      
        $this->withoutExceptionHandling();
        $this ->actingAs(factory(User::class)->create());
        $response = $this->get('user/dashboard')->assertOk();           
    }

    /**@test */
    public function testto_create_user()
    {
        factory(User::class)->create();
        $user=User::first();
        $response= $this->post('/register',[
            'Firstname' =>$user->Firstname,
            'Lastname' =>$user->Lastname,
            'Address' =>$user->Address,
            'Username' =>$user->Username,
            'Usertype' =>$user->Usertype,
            'Status' =>$user->Status,
            'password'=>$user->password,
            'email'=>$user->email
        ]);
        $this->assertCount(1,User::all());   
    }
}
