
<x-layout :title="$pageTitle">

    <h1 class="text-3xl font-bold underline mb-3">{{ $post->title }}</h1>

        <h1 class="text-2xl">Title Is: {{ $post->title }}</h1>
        <p>Body Is: {{ $post->body }}</p>
        <p>Author Is:{{ $post->author }}</p>

</x-layout>
