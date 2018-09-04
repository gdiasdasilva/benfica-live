<?php

use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    $countryName = $faker->country;
    return [
        'continent_id' => $faker->randomDigitNotNull,
        'name' => $countryName,
        'name_pt' => $countryName,
        'slug_pt' => str_slug($countryName),
        'full_name' => $countryName,
        'code' => $faker->countryCode,
        'emoji' => $faker->emoji,
    ];
});
