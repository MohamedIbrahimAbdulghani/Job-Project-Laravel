<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }
    public function create() {
        $tags = Tag::create([
            'title' => 'this is title for tag 2'
        ]);
        return redirect('/tag');
    }
    public function show($id) {
        $tags = Tag::findOrFail($id);
        return view('tag.show', ['tag' => $tags, 'pageTitle'=>$tags->title]);
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

        ///////////////////   To Get Post From Tag Or To Get Post By Tag /////////////
        $tag = Tag::find(1);
        $tag->getPosts()->attach([2]);
        return response()->json([
            'tag' => $tag->title,
            'post' => $tag->getPosts()->get()
        ]);


    }

}
