<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->text,
        'score' => $faker->text,
        'smoking' => $faker->text,
        'address' => $faker->address,
        'ward' => $faker->text,
        'station' => $faker->text,
        'store_pic' => $faker->url,
        'status' => 1,
    ];
});
