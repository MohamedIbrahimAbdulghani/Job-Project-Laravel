
<x-layout :title="$pageTitle">

    <h1 class="text-3xl font-bold underline mb-3">{{ $comment->title }}</h1>

        <h1 class="text-2xl">Title Is: {{ $comment->title }}</h1>
        <p>Body Is: {{ $comment->body }}</p>
        <p>Author Is:{{ $comment->author }}</p>

</x-layout>
