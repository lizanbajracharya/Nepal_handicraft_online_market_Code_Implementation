<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'Companyname'=>'asdasd',
             'Companyinfo'=>'asdasd',
             'Ownername'=>'asdasd',
             'Address'=>'asdasd',
             'Phoneno'=>'asdasd',            
    ];
});
