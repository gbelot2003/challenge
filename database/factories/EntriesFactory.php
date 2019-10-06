<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->realText(300),
        'user_id' => $faker->numberBetween(1, 20)
    ];
});
