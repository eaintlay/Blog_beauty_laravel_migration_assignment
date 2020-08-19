<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable=['article_id','category_id'];



public function articles()
{
	return $this->belongsToMany('App\Article')
    	        ->withTimestamps();

}

public function categories()
{
	return $this->belongsToMany('App\Category')
    	        ->withTimestamps();

}




public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
