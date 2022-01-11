@extends('layouts.app')

@section('content')

<div class="container">

    @foreach ($movies as $movie)

    <div class="movieName">
        {{$movie->title}}
    </div>
    @endforeach

</div>

@endsection