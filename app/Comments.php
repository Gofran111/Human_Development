<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function books(){
        return $this -> belongsTo('App\Books');
    }

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
