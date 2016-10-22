<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    /*
     * 资源和文章一对一
     */
    public function post()
    {
        return $this->belongsTo('App/Post');
    }

}
