<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    protected $fillable = [
        'title', 'content', 'featured_image', 'published'
    ];

    /**
     * Get the author of the blog
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get the comments
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * @inheritdoc
     */
    public function save(array $options = [])
    {
      $this->user_id = Auth::id();
      $this->published = ($this->published == 'on') ? 1 : 0;
      parent::save();
    }

}

