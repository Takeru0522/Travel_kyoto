<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function likes()
    {
        return $this->belongsToMany('App\User', 'review_likes')->withTimestamps();
    }
}
