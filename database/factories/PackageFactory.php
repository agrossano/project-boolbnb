<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
      'name' => $faker -> randomElement($array = array ('basic','medium','gold')),
      'price_of_package' => $faker -> randomElement($array = array ('2.99','5.99','9.99')),
      'number_of_hours' => $faker -> randomElement($array = array ('24','72','144'))
    ];
});
