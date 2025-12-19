
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Edit Tag</h1>

    <form action="{{route('tags.update', $tag->id)}}" method="POST" class="form">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" class="form-control mb-2" value="{{$tag->title}}">
        @error('title')
        <div class="alert alert-danger mb-2" role="alert">
            <span>{{ $message }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
        </div>
    @enderror
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>


</x-layout>
