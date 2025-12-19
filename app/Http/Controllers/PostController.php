<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\AddPostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $post = Post::all();
        // $posts = Post::paginate(5); // to make paginate in show posts { show number of pages }
        // $posts = Post::simplePaginate(5); // to make paginate in show posts { show next and previous pages }
        $posts = Post::latest()->cursorPaginate(5); // to make paginate in show posts but in this case will make page number secure number pages
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['pageTitle'=>'Create Post']);
        // Post::factory(1)->create(); // use it to create ( 100 post ) fake data by factory
        // return redirect('/posts');
        // return response(['message' => 'Successfully created!'], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPostRequest $request)
    {
        // $validated = $request->validate();
        // Post::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'author' => $request->author,
        //     'published' => $request->has('published') ? 1 : 0 // this is a ternary operator to check if the published checkbox is checked or not
        // ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published') ? 1 : 0 ; // this is a ternary operator to check if the published checkbox is checked or not
        $post->save();
        return redirect('/posts')->with('success', 'Post Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        // return redirect('/posts');
        return view('post.show', ['post' => $posts, 'pageTitle'=>$posts->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['pageTitle'=>'Edit Post', 'post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddPostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);
        // $post->update([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'author' => $request->author,
        //     'published' => $request->has('published') ? 1 : 0 ,
        // ]);
        // return redirect('/posts');

        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published'); // this is a ternary operator to check if the published checkbox is checked or not
        $post->save();
        return redirect('/posts')->with('success', 'Post Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('delete', 'Post Deleted successfully!');
    }
}
