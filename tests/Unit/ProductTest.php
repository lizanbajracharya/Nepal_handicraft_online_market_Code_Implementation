<?php

namespace Tests\Unit;

use App\Product;
use App\Category;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;
    
class ProductTest extends TestCase
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
    public function testCreateproduct()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create(['id'=>2]));
        $user=User::first();
        factory(Category::class)->create();
        $category = Category::first();
        factory(Product::class)->create(['Categoryid'=>$category->id,'Userid' => $user->id]);
        $product = Product::first();
        $response = $this->post('user/addproduct',[
            'Productname'=> $product->Productname,
            'Productdetail'=> $product->Productdetail,
            'Quantity'=>'20',
            'Price'=>$product->Price,
            'Status'=>$product->Status,
            'Categoryid'=>$product->Categoryid,
            'Userid' => $product->Userid,
        ]);
        $this->assertCount(1,Product::all());
      }

      
}
