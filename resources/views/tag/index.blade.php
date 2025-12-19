
<x-layout title="Tag Page">

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
    <h1 class="text-3xl font-bold underline mb-3">Tag Page</h1>
    <a class="btn btn-primary ml-3 float-end" href="{{route('tags.create')}}">Create new tag</a>

    @foreach($tags as $tag)
        <h1 class="text-2xl"><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->title }}</a></h1>
        <a class="btn btn-secondary" href="{{route('tags.edit', $tag->id)}}">Edit</a>
        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Are You Sure To Delete This Tag ?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form class="d-inline-block" action="{{route('tags.destroy', $tag->id)}}" method="POST" {{-- onsubmit="return confirm('Are you sure, this is cannot be reserved?')"  --}}>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach


    <div class="mt-3">
        {{ $tags->links() }}
    </div>

</x-layout>
