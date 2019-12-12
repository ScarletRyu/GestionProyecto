<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empleados;
use Faker\Generator as Faker;

$factory->define(Empleados::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstname,
        'apellido' => $faker->lastname,
        'email' => $faker->email,
        'telefono' => $faker->phoneNumber
    ];
});
