<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuyTest extends TestCase
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

    public function buytest()
    {
        $data = [
            'Paymentway'=>'Esewa',
             'Contact'=>'asdasd',
             'Quantity'=>'1',
             'Price'=>'2000',
             'Location'=>'asdasd',             
             'Productid'=>'2',
             'Userid'=>'1',
         ];
         $response = $this->json('POST', '/App/Payment',$data);
             $response->assertStatus(200);
             $response->assertJson(['status' => true]);
             $response->assertJson(['message' => " Successful"]);
             $response->assertJson(['data' => $data]);           
       }
 
    }
