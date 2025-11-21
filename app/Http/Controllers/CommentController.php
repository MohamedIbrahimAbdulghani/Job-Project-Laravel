<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        // $comments = Comment::all();
        $comments = Comment::cursorPaginate(5);
        return view('comment.index', compact('comments'));
    }
    public function create() {
        // Comment::create([
        //     'author' => 'Mohamed Ibrahim Abdulghani',
        //     'content' => 'This is another test comment number 1 for post number 3 for test delete number 2 ',
        //     'post_id' => 4,
        // ]);

        Comment::factory(100)->create();  // use it to create 100 comment fake by factory

        return redirect('/comment');
    }
    public function show($id) {
        $comments = Comment::findOrFail($id);
        return view('comment.show', compact('comments'));
    }
    public function delete($id) {
        Comment::destroy($id);
        return redirect('/post');
    }

}
