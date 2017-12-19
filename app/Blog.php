<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * Get the author of the blog
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the comments
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
