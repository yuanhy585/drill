<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*
     * 文章与评论一对多
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /*
     * 文章和资源一对一
     */
    public function resource()
    {
        return $this->hasOne('App\Resource');
    }

    /*
     * 文章和用户一对一
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
