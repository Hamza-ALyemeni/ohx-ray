<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\Employee::class, function (Faker $faker) {
    $rand =rand(1,2);
    $gender = ['male','female'];
    return [
        'f_name'     => $this->faker->firstName(),
        'l_name'    => $this->faker->lastName(),
        'country_id'    => $this->faker->randomElement([3,17,63,102,108,114,144,173,184,221,184,184,184]),
        'location'    => $this->faker->state(),
        'gender'    => $rand,
        'level_id'    => $this->faker->randomElement([1,2,3]),
        'sub_level_id'    => $this->faker->randomElement([1,2,3,4,5,6,7]),
        'date_of_birth'    => $this->faker->date(),
        'address'    => $this->faker->address(),
        'email'    => $this->faker->unique()->safeEmail(),
        'phone'    => $this->faker->phoneNumber(),
        'password'    => Hash::make('123456'),
        
    ];
});
