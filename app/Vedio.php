<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vedio extends Model
{
    public function commentsVideo(){
        return $this ->hasMany('App\CommentsVideo');
    }

    
}
