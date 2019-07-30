<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'quantity' => rand(2,10),
        'category_id' =>function(){
            return factory(App\Category::class)->create()->id;
        },
         'description' => $faker->sentence,
    ];
});
