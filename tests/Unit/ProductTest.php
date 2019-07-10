<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

    
class ProductTest extends TestCase
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
    
    public function Createproduct()
    {
        $this->withoutExceptionHandling();
        $data = [
           'Productname'=>'wood',
            'Productdetail'=>'asdasdasd',
            'Quantity'=>'20',
            'Price'=>'2000',
            'Productimage'=>"Uploads/product/1561830182sky.jpg",
            'Status'=>'Available',
            'Categoryid'=>'2',
            'Userid'=>'1',
        ];
        $product = Product::create($data);
        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals($data['Productname'], $product->Productname);
        $this->assertEquals($data['Productdetail'], $product->Productdetail);
        $this->assertEquals($data['Quantity'], $product->Quantity);
        $this->assertEquals($data['Price'], $product->Price);
        $this->assertEquals($data['Productimage'], $product->Productimage);        
        $this->assertEquals($data['Status'], $product->Status);       
        $this->assertEquals($data['Categoryid'], $product->Categoryid);        
        $this->assertEquals($data['Userid'], $product->Userid);        
        $this->assertTrue(true);
               
      }

      
}
