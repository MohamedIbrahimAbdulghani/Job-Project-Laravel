<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tag = Tag::paginate(25);
        return response($tag, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tag::create($request->all());
        return response('Added Successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findOrFail($id);
        if(!$tag) {
            return response(['Message' => 'Tag Not Found!'], 404);
        }
        return response($tag, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag = Tag::findOrFail($id);
        if(!$tag) {
            return response(["Message" => "Tag Not Found!"], 404);
        }
        $tag->update($request->all());
        return response('Updated Successfully', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::findOrFail($id);
        if(!$tag) {
            return response(["Message" => "Tag Not Found!"], 404);
        }
        $tag->delete();
        return response('Deleted Successfully', 204);
    }
}
