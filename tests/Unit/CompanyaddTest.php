<?php

namespace Tests\Unit;

use App\User;
use App\Company;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class CompanyaddTest extends TestCase
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
    public function testCompanyadd()
    {
        Session::start();
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $user=User::first();
        factory(Company::class)->create([
            'Userid' =>$user->id,
        ]);
        $company = Company::first();
        $response = $this->post('user/company',[
            'Companyname'=>$company->Companyname,
             'Companyinfo'=>$company->Companyinfo,
             'Ownername'=>$company->Ownername,
             'Address'=>$company->Address,
             'Phoneno'=>$company->Phoneno,            
             'Userid'=>$company->Userid,
         ]);
         $this->assertCount(1,Company::all());          
       }

       /**@test */
       public function testcount_company()
       {
           $companycount=5;
           $this->actingAs(factory(User::class)->create());
           $user=User::first();
           $company=factory(Company::class,$companycount)->create([
               'Userid'=>$user->id
           ]);
           $this->assertLessThanOrEqual($companycount,\count($company));
           $this->assertTrue(true);
       }
}
