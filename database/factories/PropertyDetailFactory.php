<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 25/10/2016
 * Time: 12:33 PM
 */
$factory->define(App\PropertyDetail::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'ground' => $faker->randomNumber(4),
        'construction' => $faker->randomNumber(4),
        'amenities' => $faker->randomElement(['garage;fireplace;balcony;', 'garage;pool;security;', 'garage;security;']),
    ];
});