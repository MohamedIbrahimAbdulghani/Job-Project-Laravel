<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::all();
        return response()->json(['data' => $data, 'Message' => 'Comments Fetched Successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Comment::create([
            'author' => $request->author,
            'content' => $request->content,
            'post_id' => Post::factory()->create()->id
        ]);
        return response()->json(['data' => $data, 'Message' => 'Comment Created Successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Comment::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Comment Is Not Found !'], 404);
        }
        return response()->json(['data' => $data, 'Message' => 'Comment Fetched Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Comment::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Comment Is Not Found !'], 404);
        }
        $data->update($request->all());
        return response()->json(['data' => $data, 'Message' => 'Comment Fetched Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Comment::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Comment Is Not Found !'], 404);
        }
        $data->delete();
        return response()->json(['data' => null, 'Message' => 'Comment Deleted Successfully'], 204);
    }
}
