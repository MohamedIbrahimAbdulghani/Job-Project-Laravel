
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Comments Exploring (testing)</h1>

    @foreach($comments as $comment)
        <h1 class="text-2xl">{{ $comment->content }}</h1>
        <p>{{ $comment->author }}</p>
        <a href="{{route('post_by_id', $comment->getPost->id)}}">{{ $comment->getPost->title }}</a>
        <hr>
    @endforeach

</x-layout>
