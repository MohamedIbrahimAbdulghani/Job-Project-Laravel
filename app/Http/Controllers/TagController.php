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
        $post1 = Post::find(1);
        $post3 = Post::find(3);

        $post1->getTags()->attach([3,4]);
        $post3->getTags()->attach([4]);

        return response()->json([
            'post 1' => $post1->getTags()->get(),
            'post 3' => $post3->getTags()->get(),
        ]);
    }

}
