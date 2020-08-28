<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table="albums";

    public function galleries()
    {
         return $this->hasMany('App\gallery');
       
    }

}
