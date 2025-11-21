<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
        use HasUuids; // it is build-in function to use UUID - Universal Unique Identifier

    protected $primaryKey = 'id';

    protected $keyType = 'string'; // UUID - Universal Unique Identifier { i use this method because it gives me many IDs that are 36 characters long or 128 bit, all different and completely random }

    public $incrementing = false;
    protected $fillable = [
        'author',
        'content',
        'post_id'
    ];
    // protected $guarded = [];

    // this is function to make relationship between Post and Comments { one to many }
    public function getPost() {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
