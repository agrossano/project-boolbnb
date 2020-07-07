<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partnership;
use Faker\Generator as Faker;

$factory->define(Partnership::class, function (Faker $faker) {
    return [
      'start_date' => $faker -> dateTime(),
      'end_date' => $faker -> dateTimeInInterval($startDate = 'now', $interval = '+ 144 hours', $timezone = null),
      'status' => $faker -> randomElement($array = array ('attiva','non attiva'))
    ];
});
