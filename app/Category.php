<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

    /**
     * Get the comments
     */
    public function blogs()
    {
        return $this->hasMany('App\Blog', 'category_id');
    }
}
