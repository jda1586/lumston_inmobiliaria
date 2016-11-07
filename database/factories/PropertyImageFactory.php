<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 21/10/2016
 * Time: 12:53 AM
 */
$factory->define(App\PropertyImage::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'path' => 'http://lorempixel.com/800/480/city/' . $faker->numberBetween(1, 10),
        'system' => 'URL',
    ];
});