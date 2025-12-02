<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::paginate(25);
        return response($post,  200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        return response('Added Successfully',  201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        if(!$post) {
            return response(["Message" => "Post Not Found!"], 404);
        }
        return response($post, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        if(!$post) {
            return response(["Message" => "Post Not Found!"], 404);
        }
        $post->update($request->all());
        return response('Updated Successfully', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        if(!$post) {
            return response(["Message" => "Post Not Found!"], 404);
        }
        $post->delete();
        return response('Deleted Successfully', 204);
    }
}
