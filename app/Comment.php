<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the comments
     */
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }

    /**
     * Get the comments
     */
    public function poseted()
    {
        return $this->belongsTo('App\User');
    }
}
