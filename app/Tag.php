<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Get the blog category
     */
    public function tags()
    {
        return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'blog_id');
    }
}
