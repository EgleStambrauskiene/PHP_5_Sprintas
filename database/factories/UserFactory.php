<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('iddqdidkfa'),
        'role' => $faker->randomElement([1,2,3]),
    ];
});
