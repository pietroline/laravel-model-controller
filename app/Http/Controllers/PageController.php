<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){ 
        return view("home");
    }

    public function movie() {

        $movies = Movie::all();

        return view('movies', compact("movies"));
    }
}
