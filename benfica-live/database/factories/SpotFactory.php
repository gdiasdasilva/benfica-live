<?php

use Faker\Generator as Faker;

$factory->define(App\Spot::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'city' => $faker->city,
        'latitude' => (string) $faker->latitude,
        'longitude' => (string) $faker->longitude,
        'country_id' => $faker->randomDigitNotNull,
        'tripadvisor_url' => $faker->url,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
