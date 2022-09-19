<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::all();
        dump($movies);
        return view('home', compact('movies'));
    }
}
