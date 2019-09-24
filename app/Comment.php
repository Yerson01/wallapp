<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //one to many (inverse)
    public function user() {
        return $this->belongsTo(App\User);
    }

    //one to many (inverse)
    public function post() {
        return $this->belongsTo(App\Post);
    }


}
