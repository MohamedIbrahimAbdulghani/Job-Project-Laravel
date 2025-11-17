<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protected $fillable = [
    //     'author',
    //     'content',
    //     'post_id'
    // ];
    protected $guarded = [];

    // this is function to make relationship between Post and Comments { one to many }
    public function getPost() {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
