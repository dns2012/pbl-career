<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'post'
    ];

    /**
     * One to many relation Post.
     *
     * @return void
     */
    public function post()
    {
        return $this->hasMany('App\Post', 'category_id', 'id');
    }
}
