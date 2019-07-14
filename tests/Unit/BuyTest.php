<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Payment;
use App\User;
use App\Product;
use App\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class BuyTest extends TestCase
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

    /**@test */
    public function testbuytest()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $user=User::first();
        factory(Category::class)->create();
        $category = Category::first();
        factory(Product::class)->create();
        $product = Product::first(['Categoryid'->$category->id,'Userid'->$user->id]);
        $response = $this->post('/buy',[
            'Paymentway'=>'Esewa',
             'Contact'=>'asdasd',
             'Quantity'=>1,
             'Price'=>'2000',
             'Location'=>'asdasd',             
             'Productid'=>$product->id,
             'Userid'=>$user->id,
        ]);
        $this->assertCount(1,Payment::all());          
       }
       
       /**@test */
       public function testadd_category()
       {
        factory(Category::class)->create();
        $category= Category::first();
        $response=$this->post('admin/addcategoryy',[
            'Categoryname'=>$category->Categoryname
        ]);
        $this->assertCount(1,Category::all());
       }
    }
