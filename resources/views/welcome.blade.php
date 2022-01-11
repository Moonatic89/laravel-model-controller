@extends('layouts.app')

@section('content')

<div class="container d_flex ">

    @foreach ($movies as $movie)

    <div class="movieCard">

        <div class="titles">
            <h3>Titolo/Originale</h3>
            {{$movie->title}} / {{$movie->original_title}}
        </div>

        <div class="nationality">
            <h3>Nazionalità</h3>
            {{$movie->nationality}}
        </div>

        <div class="date">
            <h3>Data di Uscita</h3>
            {{$movie->date}}
        </div>

        <div class="vote">
            <h3>Voto</h3>
            {{$movie->vote}}
        </div>

    </div>
    @endforeach


</div>

@endsection