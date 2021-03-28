<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Geo;
use Faker\Generator as Faker;

$factory->define(Geo::class, function (Faker $faker) {
    return [
        'store_id' => null,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
    ];
});
