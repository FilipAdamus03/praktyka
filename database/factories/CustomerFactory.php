<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});

