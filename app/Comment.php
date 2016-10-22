<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*
     * 评论与文章多对一
     */
    public function posts()
    {
        return $this->belongsTo('App\Post');
    }


    /*
     * 评论与用户一对一
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
