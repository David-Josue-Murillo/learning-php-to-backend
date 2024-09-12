<?php

namespace App\Http\Controllers;

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
}
