<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable=['article_id','category_id','category_name','post_name','post_detail','photo','content'];



public function article()
{
	return $this->belongsTo('App\Article');
    	        

}

public function category()
{
	return $this->belongsTo('App\Category');
    	        

}
public function comments(){
	return $this->hasMany('App\Comment');
}






}
