<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        $comment = Comment::all();
        return view('comment.index', compact('comment'));
    }
    public function create() {
        Comment::create([
            'author' => 'Mohamed Ibrahim Abdulghani',
            'content' => 'This is another test comment number 1 for post number 3 for test delete number 2 ',
            'post_id' => 4,
        ]);
        return redirect('/comment');
    }
    public function show($id) {
        $comment = Comment::findOrFail($id);
        return view('comment.show', compact('comment'));
    }
    public function delete($id) {
        Comment::destroy($id);
        return redirect('/post');
    }

}
