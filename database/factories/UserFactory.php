<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'phone' => $faker->phoneNumber,
        'cpf' => str_random(11)
    ];
});

$factory->state(\App\User::class,'admin', function($faker){
    return[
      'role'=> \App\User::ROLE_ADMIN
    ];
});

$factory->state(\App\User::class,'user', function($faker){
    return[
      'role'=> \App\User::ROLE_USER
    ];
});

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber
    ];
});
