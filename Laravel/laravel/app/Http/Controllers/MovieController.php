<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller {
    
    public static function index() {
        $title = 'Mis Peliculas';

        return view('movies.index', 
            ['title' => $title]
        );
    }
}
