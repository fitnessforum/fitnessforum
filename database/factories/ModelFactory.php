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
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'category_id' => $faker->randomDigitNotNull(10)
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'topics_id' => $faker->randomDigitNotNull(10),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'posts_id' => $faker->randomDigitNotNull(10),
        'user_id' => $faker->randomDigitNotNull(10)
    ];
});
