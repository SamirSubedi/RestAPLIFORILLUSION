<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";

    protected $fillable = ['title','subtitle','category','body','image'];


    public function categories()
    {
    	return $this->belongsToMany('App\category','category_posts')->withTimestamps();;
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
