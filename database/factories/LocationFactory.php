<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
      'address' => $faker -> streetAddress(),
      'city' => $faker -> city(),
      'state' => $faker -> state(),
      'latitude' => $faker -> latitude($min = -90, $max = 90),
      'longitude' => $faker -> longitude($min = -180, $max = 180)
    ];
});
