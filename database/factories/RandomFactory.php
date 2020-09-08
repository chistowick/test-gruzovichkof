<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Random;
use Faker\Generator as Faker;

$factory->define(Random::class, function (Faker $faker) {
    return [
        'random' => rand(),
        'added_on' => now(),
    ];
});
