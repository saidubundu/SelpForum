<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(rand(5, 10), '.'),
        'body' => $faker->paragraph(rand(3, 7), true),
        'views' => rand(0, 10),
//        'answers_count' => rand(0,10),
        'votes_count' => rand(-3, 10)
    ];
});