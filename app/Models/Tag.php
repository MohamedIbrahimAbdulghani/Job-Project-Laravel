<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    // this is function to make relationship between Post and tags { many to many }
    public function getPosts() {
        return $this->belongsToMany(Post::class);
    }
}
