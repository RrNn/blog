<?php

use App\Post;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id'=> function(){
          return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});