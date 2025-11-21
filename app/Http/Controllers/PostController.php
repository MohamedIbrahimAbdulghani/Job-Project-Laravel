<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
    public function create() {
        $post = Post::create([
            'title' => 'My Find Unique Post For Testing  For Deleting ',
            'body' => 'This is to test find for testing 3 for deleting',
            'author' => 'Mohamed Ibrahim Abdulghani',
            'published' => true,
        ]);
        return redirect('/post');
    }
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, 'pageTitle'=>$post->title]);
    }
    public function delete($id) {
        Post::destroy($id);
        return back();
    }
}
