<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function movies(){

        $movies = Movie::all();

        return view('movies', compact('movies'));
    }

    public function about(){
        return view('about');
    }

    public function movieDetail($id){
        $movie = Movie::where('id', $id)->first();

        return view('movieDetail', compact('movie'));
    }

}
