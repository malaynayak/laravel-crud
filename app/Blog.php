<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        $this->published = ($this->published == 'on' || $this->published) ? 1 : 0;
        parent::save();
    }

    /**
     * @inheritdoc
     */
    public function delete()
    {
        if($this->featured_image){
            File::delete(base_path() . '/public/' . $this->featured_image );
        }
        parent::delete();
    }
}

