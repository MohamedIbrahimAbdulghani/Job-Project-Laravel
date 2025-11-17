<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // this is function to make relationship between Post and Comments { one to many }
    public function getComments() {
        return $this->hasMany(Comment::class);
        // return $this->hasMany(Comment::class, 'id');
    }

    // this is function to make relationship between Post and tags { many to many }
    public function getTags() {
        return $this->belongsToMany(Tag::class);
    }
}
