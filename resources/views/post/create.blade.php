
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Create Post</h1>

    <form action="{{route('post.store')}}" method="POST" class="form">
        @csrf
        <input type="text" name="title" placeholder="Title" class="form-control mb-2">
        <input type="text" name="body" placeholder="Body" class="form-control mb-2">
        <input type="text" name="author" placeholder="Author" class="form-control mb-2">
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>
    
    
</x-layout>
