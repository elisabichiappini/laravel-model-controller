<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
// individuato model con il namespace
use App\Models\Movie;
use Illuminate\Http\Request;

//estendiamo a PageController la classe Controller
class PageController extends Controller
{
    public function index() {
        //metodo statico per prendere tutto il contenuto della tabella movies
        $movies = Movie::all();
        return view('welcome', ['movies' => $movies]);
    }
}
