<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'featured', 'category_id'];

    public function catageory()
    {
        return $this->belongsTo('App\Categeory');
    }
}
