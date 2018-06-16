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
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $html_content = join("\n\n", $faker->paragraphs(mt_rand(7, 20)));
    return [
        'title' => $faker->sentence(mt_rand(5, 10)),
        'content' => $html_content,
        'html_content' => $html_content,
        'slug' => $faker->slug(),
        'figure' => 'img' . mt_rand(1, 15) . '.jpg',
        'published_at' => $faker->dateTime,
        'description' => $faker->sentence(mt_rand(5, 15)),
        'status' => 1,
        // 'category_id' => mt_rand(1, 4),
    ];
});

$factory->define(App\Page::class, function(Faker\Generator $faker){
    return [
            'name' => $faker->company,
            'display_name' => $faker->company,
            'content' => $faker->realText(40),
            'html_content' => '< p > std content < /p >',
            'standard' => 1
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(7),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(7),
    ];
});