<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	
    return [
        'content' => $faker->name,
        'post_id'=>function(){
        	return factory(\App\Post::class)->create()->id;
        }
    ];
});
