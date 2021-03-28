<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'body' => $faker->text,
        'user_id' => null,
        'store_id' => null,
    ];
});
