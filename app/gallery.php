<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table="gallerys";

    public function album()
    {
        return $this->belongsTo('App\album','album_id');
    }
}
