<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'author',
        'published',
    ]; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (read only)

    // this is function to make relationship between Post and Comments { one to many }
    public function getComments() {
        return $this->hasMany(Comment::class);
        // return $this->hasMany(Comment::class, 'id');
    }
}
