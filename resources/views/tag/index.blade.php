
<x-layout title="Tag Page">

    <h1 class="text-3xl font-bold underline mb-3">Tag Page</h1>

    @foreach($tag as $tag)
        <h1>{{ $tag->title }}</h1>
    @endforeach

</x-layout>
