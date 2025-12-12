
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Create Comment</h1>

    <form action="{{route('comments.store')}}" method="POST" class="form">
        @csrf
        <input type="text" name="author" placeholder="Author" class="form-control mb-2">
        <input type="text" name="content" placeholder="Content" class="form-control mb-2">
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>


</x-layout>
