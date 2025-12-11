<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::cursorPaginate(5);
        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Comment::factory(1)->create();  // use it to create 100 comment fake by factory
        // return redirect('/comment');
        return view('comment.create', ['pageTitle'=>'Create Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Comment::create([
            'author' => $request->author,
            'content' => $request->content,
            'post_id' => Post::factory()->create()->id,
        ]);
        return redirect('/comment');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comments = Comment::findOrFail($id);
        return view('comment.show', ['comment' => $comments, 'pageTitle'=>$comments->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.edit', ['pageTitle'=>'Edit Comment', 'comment'=>$comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update([
            'author' => $request->author,
            'content' => $request->content,
        ]);
        return redirect('/comment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comment::destroy($id);
        return redirect('/comment');
    }
}
