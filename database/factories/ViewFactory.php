<?php

/** @var Factory $factory */

use App\View;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(View::class, function (Faker $faker) {
    return [
        'ip_address' => $faker->ipv4()
    ];
});
