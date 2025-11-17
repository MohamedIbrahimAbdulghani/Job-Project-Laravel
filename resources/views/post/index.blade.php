
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Blog Page</h1>

    @foreach($post as $post)
        <h1 class="text-2xl"><a href="{{route('comment')}}">{{ $post->title }}</a></h1>
        <p>{{ $post->body }}</p>
        <ul>
            @foreach ($post->getComments as $comment)
                <li>The comment related by post : { {{$comment->content}}, {{$comment->author}} }</li>
            @endforeach
        </ul>
        <hr>
    @endforeach

</x-layout>
