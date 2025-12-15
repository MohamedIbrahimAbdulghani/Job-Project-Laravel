
<x-layout title="Blog Page">

    <h2 class="text-3xl font-bold mb-1">Create Post</h2>
    <p  class="small" >Use this form to publish a new post to the blog.</p>

        <form action="{{route('posts.store')}}" method="POST" class="form">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title" class="form-control mb-2 mt-2" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger mb-2" role="alert">
                            <span>{{ $message }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
                        </div>
                    @enderror
                </div>

                <div class="col-6">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" placeholder="Author" class="form-control mb-2 mt-2" value="{{ old('author') }}" >
                    @error('author')
                        <div class="alert alert-danger mb-2" role="alert">
                            <span>{{ $message }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
                        </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" placeholder="Body" class="form-control mb-2 mt-2">{{old('body')}}</textarea>
                    @error('body')
                        <div class="alert alert-danger mb-2" role="alert">
                            <span>{{ $message }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right !important"></button>
                        </div>
                    @enderror
                </div>

                <div class="published">
                    <input type="checkbox" id="published" name="published" class="form-check-input ">
                    <label for="published" class="form-check-label " style="margin-left: 5px;">Is Published?</label>
                    <p id="published" class="small" style="margin-left: 25px">Do you want it published or saved as draft.</p>
                </div>
            </div>
            <button type="submit" class="btn btn-primary d-table m-auto " style="float: right">Save</button>
            <button type="button" class="btn  d-table m-auto " style="float: right"><a href="/posts" style="text-decoration: none">Cancel</a></button>
        </form>


</x-layout>
