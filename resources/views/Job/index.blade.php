<h1>Welcome In Jobs Page Get This Details From Model File</h1>

<ul>
    @foreach($jobs as $job)
        <li>{{ $job['title'] }} : {{ $job['salary'] }}</li>
@endforeach
</ul>
