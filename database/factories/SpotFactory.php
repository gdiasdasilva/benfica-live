<?php

use Faker\Generator as Faker;

$factory->define(App\Spot::class, function (Faker $faker) {
    if (app()->environment() !== 'testing') {
        $fakeImage = $faker->image('public/storage/spots', 675, 450, 'sports', false);
    } else {
        $fakeImage = '';
    }

    return [
        'name' => $faker->company,
        'slug' => str_slug($faker->company),
        'address' => $faker->address,
        'city' => $faker->city,
        'image' => "spots/$fakeImage",
        'latitude' => (string) $faker->latitude,
        'longitude' => (string) $faker->longitude,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'is_approved' => $faker->boolean(90),
        'country_id' => \App\Country::inRandomOrder()->first()->id,
        'website' => $faker->url,
    ];
});
