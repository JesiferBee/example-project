<h1>Profile page</h1>
{{-- <h3>{{ $name }}</h3>
<h3>{{ $major }}</h3>
<h2>Subject : </h2>
@foreach ($subjects as $sub)
<ul>
    <li>{{ $sub }}</li>
</ul>
@endforeach
<h2>Skills :</h2>
@foreach ($skills as $s)
<ul>
    <li>{{ $s }}</li>
</ul>
@endforeach --}}

@foreach ($students as $st)
    <h2>{{ $st['name'] }}</h2>
    <ul>
        @foreach ($st['skills'] as $s)
            <li>{{ $s }}</li>
        @endforeach
    </ul>
@endforeach