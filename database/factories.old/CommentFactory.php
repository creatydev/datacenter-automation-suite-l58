<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Comment::class, function (Faker $faker) {
    $types = $faker->randomElement([
        (new App\Models\Support\Ticket),
    ]);

    return [
        'body'             => $faker->paragraph,
        'commentable_id'   => function () use ($faker, $types) {
            return $faker->randomElement($types::pluck('id')->toArray());
        },
        'commentable_type' => get_class($types),
    ];
});
