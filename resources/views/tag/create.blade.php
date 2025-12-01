
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Create Tag</h1>

    <form action="{{route('tag.store')}}" method="POST" class="form">
        @csrf
        <input type="text" name="title" placeholder="Title" class="form-control mb-2">
        <button type="submit" class="btn btn-primary d-table m-auto">Submit</button>
    </form>
    
    
</x-layout>
