<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        //
        'first_name'=>$faker->firstName(null),
        'last_name'=>$faker->lastName(),
        'birthday'=>$faker->date('Y-m-d', 'now')
    ];
});
