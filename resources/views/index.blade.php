
<x-layout title="Index Page">

    <h1 class="text-3xl font-bold underline">Index Page</h1>

    @foreach($jobs as $job)
        <p>{{$job['title']}}</p>
    @endforeach

</x-layout>
