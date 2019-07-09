<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyaddTest extends TestCase
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
            'Companyname'=>'Esewa',
             'Companydetail'=>'asdasd',
             'Ownername'=>'1',
             'Address'=>123123,
             'Phoneno'=>'asdasd',            
             'Userid'=>'1',
         ];
         $response = $this->json('POST', '/api/Company',$data);
             $response->assertStatus(200);
             $response->assertJson(['status' => true]);
             $response->assertJson(['message' => " Successful"]);
             $response->assertJson(['data' => $data]);           
       }
}
