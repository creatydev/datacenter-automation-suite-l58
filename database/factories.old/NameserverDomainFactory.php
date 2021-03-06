<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Domain::class, function (Faker $faker) {
    return [
        'name'            => $faker->word,
        'master'          => $faker->domainName,
        'last_check'      => Carbon::now()->subDays(rand(0, 90)),
        'type'            => 'main',
        'notified_serial' => date('Ymd') . $faker->randomNumber(2),
        'account'         => 'main',
    ];
});
