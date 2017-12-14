<?php

use Faker\Generator as Faker;

$factory->define(App\Spot::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'latitude' => (string) $faker->latitude,
        'longitude' => (string) $faker->longitude,
        'country_id' => $faker->randomDigitNotNull
    ];
});
