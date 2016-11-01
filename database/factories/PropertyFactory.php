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
        'type' => $faker->randomElement(['house', 'depto']),
        'category' => $faker->randomElement(['habitacional', 'comercial', 'corporativa', 'terrenos']),
        'address' => $faker->streetName,
        'outside_number' => $faker->buildingNumber,
        'inside_number' => $faker->randomDigit,
        'city_id' => 0,
        'state_id' => 0,
        'country_id' => 0,
        'postal_code' => $faker->postcode,
        'suburb' => $faker->randomElement(['Colinas de san javier', 'valle real', 'bugambilias', 'la sima', 'puerta de hierro', 'providencia']),
        'price' => $faker->randomNumber(7),
        'unit' => 'mxn',
        'bedrooms' => $faker->randomDigit,
        'bathrooms' => $faker->randomDigit,
        'latitude' => $faker->latitude(20.5, 20.8),
        'longitude' => $faker->longitude(-103.5, -103.2),
        'status' => $faker->randomElement(['for_sale', 'for_rent'])
    ];
});