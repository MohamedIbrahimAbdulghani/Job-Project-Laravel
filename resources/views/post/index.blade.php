
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Blog Page</h1>

    @foreach($post as $post)
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    @endforeach

</x-layout>
