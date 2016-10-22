<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * 用户与文章一对多
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /*
     * 用户与评论一对多
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
