
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Edit Comment</h1>

    <form action="{{route('comments.update', $comment->id)}}" method="POST" class="form">
        @csrf
        @method('PUT')
        <input type="text" name="author" placeholder="Author" class="form-control mb-2" value="{{$comment->author}}">
        @error('author')
        <div class="alert alert-danger mb-2" role="alert">
            <span>{{ $message }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
        </div>
        @enderror
        <input type="text" name="content" placeholder="Content" class="form-control mb-2" value="{{$comment->content}}">
        @error('content')
        <div class="alert alert-danger mb-2" role="alert">
            <span>{{ $message }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
        </div>
        @enderror
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>


</x-layout>
