<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Post::all();  // this is to show all posts but show the first i added it
        $data = Post::latest()->get(); // this is to show the last post i added it
        return response()->json(['data' =>$data, 'success' => true, 'Message' => 'Post Fetch Successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Post::create($request->all());
        return response()->json(['data' => $data, 'success' => true, 'Message' => 'Post Created Successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'success' => false, 'Message' => 'Post Not Found'], 404);
        }
        return response()->json(['data' => $data, 'success' => true, 'Message' => 'Post Fetch Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'success' => false, 'Message' => 'Post Not Found'], 404);
        }
        $data->update($request->all());
        return response()->json(['data' => $data, 'success' => true, 'Message' => 'Post Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'success' => false, 'Message' => 'Post Not Found'], 404);
        }
        $data->delete();
        return response()->json(['data' => null, 'success' => true, 'Message' => 'Post Deleted Successfully'], 204);
    }
}
