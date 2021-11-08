<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsVideo extends Model
{
    public function Video(){
        return $this -> belongsTo('App\Vedio');
    }

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
