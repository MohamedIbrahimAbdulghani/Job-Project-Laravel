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
        $data = Tag::all();
        return response()->json(['data' => $data, 'Message' => 'Tags Fetched Successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Tag::create($request->all());
        return response()->json(['data' => $data, 'Message' => 'Tag Created Successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Tag::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Tag Is Not Found !'], 404);
        }
        return response()->json(['data' => $data, 'Message' => 'Tag Fetched Successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Tag::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Tag Is Not Found !'], 404);
        }
        $data->update($request->all());
        return response()->json(['data' => $data, 'Message' => 'Tag Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Tag::find($id);
        if(!$data) {
            return response()->json(['data' => null, 'Messages' => 'Tag Is Not Found !'], 404);
        }
        $data->delete();
        return response()->json(['data' => null, 'Message' => 'Tag Deleted Successfully'], 204);
    }
}
