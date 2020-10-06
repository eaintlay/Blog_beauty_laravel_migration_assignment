
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Article;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
    	'post_name' => $faker->post_name,
    	'post_detail' => $faker->post_detail,
        'photo' => 'frontendtemplate/instylr/img/' . $faker->image('public/frontendtemplate/instylr/img',400,300, null, false),
        
        'article_id'=>function(){
        	return factory(\App\Article::class)->create()->id;
         'category_id'=>function(){
         	return factory(\App\Category::class)->create()->id;
            'category_name'=>function(){
            return factory(\App\Category::class)->create()->category_name;

        }
    ];
});
