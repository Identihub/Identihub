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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Bridge::class, function (Faker\Generator $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        }
    ];
});

$factory->define(App\SectionType::class, function (Faker\Generator $faker) {
    return [
        'name' => 'COLORS'
    ];
});

$factory->define(App\Section::class, function (Faker\Generator $faker) {
    return [
        'section_type_id' => 1,
        'order' => 0,
        'bridge_id' => factory(\App\Bridge::class)->create()->id
    ];
});
