
<x-layout title="Blog Page">

    <h1 class="text-3xl font-bold underline mb-3">Comments Exploring (testing)</h1>
    <a class="btn btn-primary ml-3 float-end" href="{{route('comments.create')}}">Create new comment</a>

    @foreach($comments as $comment)
        <h1 class="text-2xl"><a href="{{route('comments.show', $comment->id)}}">{{ $comment->author }}</a></h1>
        <p>{{ $comment->content }}</p>
        <a class="btn btn-secondary" href="{{route('comments.edit', $comment->id)}}">Edit</a>
        <form class="d-inline-block" action="{{route('comments.destroy', $comment->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <hr>
    @endforeach


    <div class="mt-3">
        {{ $comments->links() }}
    </div>

</x-layout>
