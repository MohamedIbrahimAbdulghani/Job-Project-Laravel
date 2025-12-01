
<x-layout title="Tag Page">

    <h1 class="text-3xl font-bold underline mb-3">Tag Page</h1>

    @foreach($tags as $tag)
        <h1 class="text-2xl"><a href="{{ route('tag.show', $tag->id) }}">{{ $tag->title }}</a></h1>
        <a class="btn btn-secondary" href="{{route('tag.edit', $tag->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('tag.delete', $tag->id)}}">Delete</a>
        <hr>
    @endforeach


    <div class="mt-3">
        {{ $tags->links() }}
    </div>

</x-layout>
