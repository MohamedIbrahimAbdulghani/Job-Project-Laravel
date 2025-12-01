
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Blog Page</h1>

    @foreach($posts as $post)
        <h1 class="text-2xl"><a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a></h1>
        <h2 class="text-xl">{{ $post->author }}</h2>
        <p>{{ $post->body }}</p>
        <ul>
            @foreach ($post->getComments as $comment)
                <li>The comment related by post : { {{$comment->content}}, {{$comment->author}} }</li>
            @endforeach
        </ul>
        <a class="btn btn-secondary" href="{{route('post.edit', $post->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('post.delete', $post->id)}}">Delete</a>
        <hr>
    @endforeach
    

    <div class="mt-3">
        {{ $posts->links() }}
    </div>    {{-- To Show Links For Pagination --}}
</x-layout>
