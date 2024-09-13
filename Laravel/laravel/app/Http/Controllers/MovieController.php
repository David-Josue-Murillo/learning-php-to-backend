<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class MovieController extends Controller {
    
    public function index() {
        $title = 'Mis Peliculas';

        return view('movies.index', 
            ['title' => $title]
        );
    }

    public function show($title = 'No hay pelicula', $year = '2005') {
        return view('movies.movie', 
            ['title' => $title, 'year' => $year]
        );
    }

    public function redirect() {
        return redirect('/movie');
    }

    public function details($year = null){
        return view('movies.details',
            ['year' => $year]
        );
    }

    public function form() {
        return view('movies.form');
    }

    public function getForm(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');

        return "El nombre es: $name y el email es: $email";

    }
    
}
