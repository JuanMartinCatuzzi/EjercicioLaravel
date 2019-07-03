<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->realText(),
        'awards'=>$faker->numberBetween(0, 15),
        'release_date'=>$faker->date('Y-m-d' ,'now'),
        'length'=>$faker->numberBetween(60,270),
        
        'revenue'=>$faker->numberBetween(0, 1000)
    ];
});
