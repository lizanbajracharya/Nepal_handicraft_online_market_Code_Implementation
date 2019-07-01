<?php

namespace Tests\Unit;

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
        $response = $this->json('POST', '/api/Product',$data);
            $response->assertStatus(200);
            $response->assertJson(['status' => true]);
            $response->assertJson(['message' => "Product Created!"]);
            $response->assertJson(['data' => $data]);           
      }

      
}
