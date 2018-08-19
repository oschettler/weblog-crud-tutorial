<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'summary' => $faker->paragraph,
        'body' => join("\n\n", $faker->paragraphs(4)),
        'published_at' => random_int(0, 1) ? $faker->dateTimeThisYear->format('Y-m-d H:i:s') : null,
    ];
});
