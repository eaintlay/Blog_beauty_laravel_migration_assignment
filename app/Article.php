<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $fillable=['title','body'];

     public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
   
}

