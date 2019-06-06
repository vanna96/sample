<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'profile' => $faker->word,
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'price' => $faker->randomNumber(4),
        'description' => $faker->paragraph(rand(2, 10), true),
        'category_id' => function () {
            return factory(App\Models\Category::class)->create()->id;
        },
    ];
});