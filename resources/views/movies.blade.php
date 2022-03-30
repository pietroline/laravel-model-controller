@extends('layout.base')

@section("pageTitle", "Home")

@section("content")

    <main>
        <div class="prev">
            <a href="/">Cliccami per tornare alla pagina precedente</a>
        </div>

        <h1>Lista dei film</h1>

        <ol>
            @foreach ($movies as $movie )
                <li>
                    <a href="#">{{$movie["title"]}} - {{$movie["original_title"]}} - {{$movie["nationality"]}} - {{$movie["date"]}} - {{$movie["vote"]}}</a>
                </li>
            @endforeach
        </ol>
    </main>

@endsection