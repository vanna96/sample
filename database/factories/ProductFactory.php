<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\Category;

$factory->define(Product::class, function ($faker) {
    return [
        'name' =>  $faker->name ,
        'price' =>  $faker->name,
        'status' =>  $faker->word ,
        'profile' =>  $faker->word ,
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        }
    ];
});
