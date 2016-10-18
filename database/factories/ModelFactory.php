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
    static $password;

     return [
        'usuario' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'activo' => 1,
        'remember_token' => str_random(10),
        'api_token' => str_random(50)
    ];
});
