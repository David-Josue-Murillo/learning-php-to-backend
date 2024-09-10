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

    public function show($title, $year) {
        return view('movies.show', 
            ['title' => $title, 'year' => $year]
        );
    }
}
