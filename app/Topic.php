<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
