<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'created_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        'updated_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
    ];
});
