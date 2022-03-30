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

        /*
        // richiesta di solo i film american
        $movies = Movie::Where("nationality", "american")->get();
        */

        /*
        // richiesta di film con vote >= 8
        $movies = Movie::Where("vote", ">=", "8")->get();
        */

        /*
        // richiesta di film in ordine alfabetico
        $movies = Movie::orderBy("title", "asc")->get();
        */
        
        /*
        // richiesta di soli 5 film americam 
        $movies = Movie::Where("nationality", "american")->limit(5)->get();
        */

        return view('movies', compact("movies"));
    }
}
