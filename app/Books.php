<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function comments(){
        return $this ->hasMany('App\Comments');
    }
}
