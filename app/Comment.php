<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function post()
    {
        $this->hasMany('App\Post');
    }
}
