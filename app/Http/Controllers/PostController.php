<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // $post = Post::all();
        // $posts = Post::paginate(5); // to make paginate in show posts { show number of pages }
        // $posts = Post::simplePaginate(5); // to make paginate in show posts { show next and previous pages }
        $posts = Post::cursorPaginate(5); // to make paginate in show posts but in this case will make page number secure number pages
        return view('post.index', compact('posts'));
    }
    public function create() {
        // Post::create([
        //     'title' => 'My Find Unique Post For Testing  ',
        //     'body' => 'This is to test find for testing  ',
        //     'author' => 'Mohamed Ibrahim Abdulghani',
        //     'published' => true,
        // ]);
        Post::factory(100)->create(); // use it to create ( 100 post ) fake data by factory

        return redirect('/post');
    }
    public function show($id) {
        $posts = Post::findOrFail($id);
        return view('post.show', ['post' => $posts, 'pageTitle'=>$posts->title]);
    }
    public function delete($id) {
        Post::destroy($id);
        return back();
    }
}
