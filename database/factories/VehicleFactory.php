<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        "plate" => $faker->->regexify('[A-Z0-9]{7,10}'),
        "color" => $faker->colorName,
        "serial" => $faker->regexify('[A-Z0-9]{30}')->unique(),
        "year" => $faker->numberBetween(2000, 2019),
    ];
});
