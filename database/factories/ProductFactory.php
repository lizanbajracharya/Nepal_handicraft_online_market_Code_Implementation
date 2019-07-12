<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Productname'=>'wood',
            'Productdetail'=>'asdasdasd',
            'Quantity'=>'20',
            'Price'=>'2000',
            'Status'=>'Available',
            'Productimage'=>$faker->image,
    ];
});
