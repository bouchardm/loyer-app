<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Buildings::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'photo' => $faker->imageUrl(300, 300),
    ];
});

$factory->define(App\Apartments::class, function (Faker\Generator $faker) {

    return [
        'no' => $faker->buildingNumber,
        'price' => $faker->randomFloat(2, 600, 900),
        'building_id' => function() {
            return factory(\App\Buildings::class)->create()->id;
        },
    ];
});
