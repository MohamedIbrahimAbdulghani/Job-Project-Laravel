<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tags = Tag::all();
        $tags = Tag::cursorPaginate(5);
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $tags = Tag::create([
        //     'title' => 'this is title for tag 2'
        // ]);
        return view('tag.create', ['pageTitle'=>'Create Tag']);
        // Tag::factory(1)->create();
        // return redirect('/tag');
        // return response('Successful Creation', 201);
        // return redirect('/tag');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tag::create([
            'title' => $request->title,
        ]);
        return redirect('/tag');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tags = Tag::findOrFail($id);
        return view('tag.show', ['tag' => $tags, 'pageTitle'=>$tags->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.edit', ['tag' => $tag, 'pageTitle'=>$tag->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update([
            'title' => $request->title,
        ]);
        return redirect('/tag');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect('/tag');
        // return response('Successfully Deleted', 204);
        // return back();
    }
    //     public function testManyToMany() {
    //     ///////////////////   To Get Tags From Post Or To Get Tags By Post
    //     // $post1 = Post::find(1);
    //     // $post1->getTags()->attach([3,4]);
    //     // return response()->json([
    //     //     'post 1' => $post1->getTags()->get(),
    //     // ]);

    //     ///////////////////   To Get Post From Tag Or To Get Post By Tag /////////////
    //     $tag = Tag::find(2);
    //     $tag->getPosts()->attach([2]);
    //     return response()->json([
    //         'tag' => $tag->title,
    //         'post' => $tag->getPosts()->get()
    //     ]);


    // }
}
