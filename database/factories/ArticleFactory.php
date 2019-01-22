<?php

use Faker\Generator as Faker;
use App\Models\Article;
use App\Models\Author;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content'=>$faker->text(3000),
        'likes'=>$faker->randomDigit,
        'author_id'=>$faker->numberBetween(1,Author::count())
    ];
});
