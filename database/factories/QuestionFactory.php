<?php

use Faker\Generator as Faker;

use App\Question;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)), '.'),
        'body' => $faker->paragraphs(rand(3,7), true),  //true converts it to string rather than array
        'views' => rand(0, 10),
       // 'answers_count' => rand(0, 10),
        'votes' => rand(-3, 10),        //I didnt set votes as an unsigned int in the table migration

    ];
});
