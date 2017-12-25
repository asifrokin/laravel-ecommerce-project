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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'address' => $faker->address,
    ];
});
$factory->define(App\Employee::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'address' => $faker->address,
    ];
});
$factory->define(App\EmployeeInfo::class, function (Faker\Generator $faker) {
    $roll=['admin', 'author', 'editor', 'subscriber'];
    return [
        'employee_id' =>  App\Employee::all()->random()->id ,
        'roll'=>$roll[rand(0,3)],
        'salary' => $faker->numberBetween($min = 6000, $max = 20000),
        'bonus' => $faker->numberBetween($min = 2000, $max = 7000),
        'cell_no' => $faker->phoneNumber
    ];
});
$factory->define(App\Role::class, function (Faker\Generator $faker) {
    $roll=['admin', 'author', 'editor', 'subscriber'];
    return [

        'name'=>$roll[rand(0,3)],

    ];
});

