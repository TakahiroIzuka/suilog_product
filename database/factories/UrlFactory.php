<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Url;
use Faker\Generator as Faker;

$factory->define(Url::class, function (Faker $faker) {
    return [
        'store_id' => null,
        'url' => $faker->url,
    ];
});
