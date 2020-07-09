<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'type' => $faker -> unique() -> randomElement($array = array ('Wifi','Posto macchina','Piscina', 'Portineria', 'Sauna', 'Vista mare'))
    ];
});
