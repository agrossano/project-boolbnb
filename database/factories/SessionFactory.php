<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
      'ip_address' => $faker -> ipv4(),
      'user_agent' => $faker -> userAgent(),
      'payload' => $faker -> word(),
      'last_activity' => $faker -> randomDigit()
    ];
});
