<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Breed;

$factory->define(Breed::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
