
<x-layout title="Tag Page">

    <h1 class="text-3xl font-bold underline mb-3">Tag Page</h1>

    @foreach($tags as $tag)
        <h1 class="text-2xl">{{ $tag->title }}</h1>
        <hr>
    @endforeach


    <div class="mt-3">
        {{ $tags->links() }}
    </div>

</x-layout>
