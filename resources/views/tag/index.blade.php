
<x-layout title="Tag Page">

    <h1 class="text-3xl font-bold underline mb-3">Tag Page</h1>
    <a class="btn btn-primary ml-3 float-end" href="{{route('tags.create')}}">Create new tag</a>

    @foreach($tags as $tag)
        <h1 class="text-2xl"><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->title }}</a></h1>
        <a class="btn btn-secondary" href="{{route('tags.edit', $tag->id)}}">Edit</a>
        <form class="d-inline-block" action="{{route('tags.destroy', $tag->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <hr>
    @endforeach


    <div class="mt-3">
        {{ $tags->links() }}
    </div>

</x-layout>
