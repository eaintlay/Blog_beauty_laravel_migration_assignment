<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    
    protected $fillable=['category_id','title','body'];

     public function posts()
    {
        return $this->hasMany('App\Post');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }



      
    
}

