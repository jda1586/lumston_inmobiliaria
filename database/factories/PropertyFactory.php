<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 21/10/2016
 * Time: 12:53 AM
 */
$factory->define(App\Property::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 0,
        'title' => $faker->title,
        'type' => $faker->randomElement(['house', 'depto']),
        'address' => $faker->streetName,
        'outside_number' => $faker->buildingNumber,
        'inside_number' => $faker->randomDigit,
        'city_id' => 0,
        'state_id' => 0,
        'country_id' => 0,
        'postal_code' => $faker->postcode,
        'suburb' => '',
        'price' => $faker->randomNumber(7),
        'unit' => 'mxn',
        'bedrooms' => $faker->randomDigit,
        'latitude' => $faker->latitude(20.5,20.8),
        'longitude' => $faker->longitude(-103.5,-103.2),
        'status' => $faker->randomElement(['for_sale', 'for_rent'])
    ];
});