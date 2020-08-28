<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bartender extends Model
{ 
     protected $table="bartender";
     public function barten()
     {
         return $this->belongsTo('App\User','user_id');
     }

}
