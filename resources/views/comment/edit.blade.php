
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Edit Comment</h1>

    <form action="{{route('comments.update', $comment->id)}}" method="POST" class="form">
        @csrf
        @method('PUT')
        <input type="text" name="author" placeholder="Author" class="form-control mb-2" value="{{$comment->author}}">
        <input type="text" name="content" placeholder="Content" class="form-control mb-2" value="{{$comment->content}}">
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>


</x-layout>
