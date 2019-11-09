<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'lastname' => $faker->lastName,
        'nickname' => $faker->state,
        'national_id' => $faker->numberBetween(1000000000000, 1999999999999),
        'school' => $faker->cityPrefix,
        'phone_number' => $faker->phoneNumber,
        'education_level_id' => $faker->numberBetween(1, 12)
    ];
});
