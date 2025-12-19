
<x-layout title="Blog Page">

    @if(session('success'))
        <div class="alert alert-success mb-2" role="alert">
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
        </div>
    @endif

    @if(session('delete'))
        <div class="alert alert-danger mb-2" role="alert">
            <span>{{ session('delete') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
        </div>
    @endif

    <h1 class="text-3xl font-bold underline mb-3 d-inline-block">Blog Page</h1>
    <a class="btn btn-primary ml-3 float-end" href="{{route('posts.create')}}">Create new post</a>

    @foreach($posts as $post)
    <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2" >
        <div>
            <h2><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h2>
            <p>{{ $post->author }}</p>
        </div>
        <div>
            <a class="btn btn-secondary" href="{{route('posts.edit', $post->id)}}">Edit</a>
            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Are You Sure To Delete This Post ?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form class="d-inline-block" action="{{route('posts.destroy', $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    <div class="mt-3">
        {{ $posts->links() }}
    </div>    {{-- To Show Links For Pagination --}}
</x-layout>
