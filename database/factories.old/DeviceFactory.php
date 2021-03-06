<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\Device;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name'      => $faker->domainName,
        'ip'        => $faker->ipv4,
        'is_active' => (bool) random_int(0, 1),
    ];
});
