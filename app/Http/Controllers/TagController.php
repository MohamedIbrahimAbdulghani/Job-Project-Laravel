<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function index() {
        $tag = Tag::all();
        return view('tag.index', compact('tag'));
    }
    public function create() {
        $tag = Tag::create([
            'title' => 'this is title for tag 2'
        ]);
        return redirect('/tag');
    }
    public function show($id) {
        $tag = Tag::findOrFail($id);
        return view('tag.show', ['tag' => $tag, 'pageTitle'=>$tag->title]);
    }
    public function delete($id) {
        Tag::destroy($id);
        return back();
    }

    public function testManyToMany() {
        ///////////////////   To Get Tags From Post Or To Get Tags By Post
        // $post1 = Post::find(1);
        // $post1->getTags()->attach([3,4]);
        // return response()->json([
        //     'post 1' => $post1->getTags()->get(),
        // ]);

        ///////////////////   To Get Post From Tag Or To Get Post By Tag
        $tag = Tag::find(3);
        $tag->getPosts()->attach([4]);
        return response()->json([
            'tag' => $tag->title,
            'post' => $tag->getPosts()->get()
        ]);
    }

}
