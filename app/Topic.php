<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    public function posts()
    {
        $this->hasMany('posts');
    }

    public function categories()
    {
        $this->belongsTo('categories');
    }
}
