<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // use HasUuids; // it is build-in function to use UUID - Universal Unique Identifier

    // protected $primaryKey = 'id';

    // protected $keyType = 'string'; // UUID - Universal Unique Identifier { i use this method because it gives me many IDs that are 36 characters long or 128 bit, all different and completely random }

    // public $incrementing = false;

    // protected $fillable = ['tittle', 'body', 'author', 'published'];

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