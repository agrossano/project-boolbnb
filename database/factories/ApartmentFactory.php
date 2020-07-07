<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
      'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
      'description' => $faker -> text(),
      'rooms_number' => $faker -> numberBetween($min = 1, $max = 8),
      'toilets_number' => $faker -> numberBetween($min = 1, $max = 5),
      'beds_number' => $faker -> numberBetween($min = 1, $max = 20),
      'square_metres' => $faker -> numberBetween($min = 10, $max = 600),
      'price_per_day' => $faker -> numberBetween($min = 50, $max = 900),
      'image' => $faker -> imageUrl($width = 640, $height = 480)
    ];
});
