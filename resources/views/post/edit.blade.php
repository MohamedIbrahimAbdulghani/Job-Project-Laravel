
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Edit Post</h1>

    <form action="{{route('posts.update', $post->id)}}" method="POST" class="form">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" class="form-control mb-2" value="{{$post->title}}">
        <input type="text" name="body" placeholder="Body" class="form-control mb-2" value="{{$post->body}}">
        <input type="text" name="author" placeholder="Author" class="form-control mb-2" value="{{$post->author}}">
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>


</x-layout>
