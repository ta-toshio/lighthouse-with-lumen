<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'reply'    => $faker->sentence(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});