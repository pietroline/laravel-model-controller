@extends('layout.base')

@section("pageTitle", "Home")

@section("content")

    <main>
        <h1>Benvenuto nel nostro sito dei film </h1>

        <nav>
            <ul>
                <li>
                    <a href="/movie">Home</a>
                </li>
                <li>
                    <a href="#">
                        Chi siamo
                    </a>
                </li>
                <li>
                    <a href="#">
                        Dove siamo
                    </a>
                </li>
            </ul>
        </nav>
    </main>

@endsection