<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $comment = Comment::paginate(25);
        return response($comment, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        // $comment = $post->getComments()->create($request->all());     use it if you want to make a route specail this case { http://127.0.0.1:8000/api/post/019add1e-fd27-71c6-81d8-e4850752e76d/comments}
        Comment::create($request->all());
        return response('Added Successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        if(!$comment) {
            return response(['Message' => 'Comment Not Found!'], 404);
        }
        return response($comment, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = Comment::findOrFail($id);
        if(!$comment) {
            return response(["Message" => "Comment Not Found!"], 404);
        }
        $comment->update($request->all());
        return response('Updated Successfully', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        if(!$comment) {
            return response(["Message" => "Comment Not Found!"], 404);
        }
        $comment->delete();
        return response('Deleted Successfully', 204);
    }
}
