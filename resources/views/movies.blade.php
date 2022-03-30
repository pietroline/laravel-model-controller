@extends('layout.base')

@section("pageTitle", "Home")

@section("content")

    <h1>Lista dei film</h1>

    <ul>
        @foreach ($movies as $key => $movie )
            <li>
                <a href="#">{{$key+1}} - {{$movie["title"]}} - {{$movie["original_title"]}} - {{$movie["nationality"]}} - {{$movie["date"]}} - {{$movie["vote"]}}</a>
            </li>
        @endforeach
    </ul>

@endsection