<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'author'];
    public function catageory() {
        return $this->belongsTo('App\Categeory');
    }
}
