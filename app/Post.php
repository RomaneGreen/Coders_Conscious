<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'content', 'featured', 'category_id', 'slug'];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ['deleted_at'];

    public function categeory()
    {
        return $this->belongsTo('App\Categeory');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
