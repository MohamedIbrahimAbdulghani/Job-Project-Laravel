
<x-layout :title="$pageTitle">

    <h1 class="text-3xl font-bold underline mb-3">{{ $comment->title }}</h1>

        <h1 class="text-2xl"><span style="font-weight: bold">Title Is: </span> {{ $comment->content }}</h1>
        <p><span style="font-weight: bold">Content Is : </span> {{ $comment->getPost->title }}</p>
        <p><span style="font-weight: bold">Body Is:</span> {{ $comment->getPost->body }}</p>
        <p><span style="font-weight: bold">Author Is:</span> {{ $comment->author }}</p>

</x-layout>
