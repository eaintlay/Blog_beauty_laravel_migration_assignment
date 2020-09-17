
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'article_id'=>function(){
        	return factory(\App\Article::class)->create()->id;
        'category_id'=>function(){
        	return factory(\App\Category::class)->create()->id;
        }
    ];
});
