<?php

namespace Tests\Unit;

use App\User;
use App\Category;
use App\Product;
use App\Booking;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
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
    /**@test */
    public function testBookingtest()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $user=User::first();
        factory(Category::class)->create();
        $category = Category::first();
        factory(Product::class)->create();
        $product = Product::first(['Categoryid'->$category->id,'Userid'->$user->id]);
        $response = $this->post('/book',[
             'Quantity'=>1,
             'Price'=>'2000',
             'Productid'=>$product->id,
             'Userid'=>$user->id,
        ]);
        $this->assertCount(1,Booking::all());               
       }
}
