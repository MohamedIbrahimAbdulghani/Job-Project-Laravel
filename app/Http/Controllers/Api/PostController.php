<?php

namespace App\Http\Controllers\Api;

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
        $data = Post::all();
        return response()->json(['data' =>$data, 'Message' => 'Post Fetch Successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Post::create($request->all());
        return response()->json(['data' => $data, 'Message' => 'Post Created Successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::findOrFail($id);
        return response()->json(['data' => $data, 'Message' => 'Post Fetch Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::findOrFail($id);
        $data->update($request->all());
        return response()->json(['data' => $data, 'Message' => 'Post Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::findOrFail($id);
        $data->delete();
        return response()->json(['data' => $data, 'Message' => 'Post Deleted Successfully'], 200);
    }
}
