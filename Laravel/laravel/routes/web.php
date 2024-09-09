<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-date', function() {
    return view('show-date');
});

Route::get('/movies/{title?}', function($title = 'No hay una pelicula seleccionada') { 
    return view('movies', array('title' => $title));
});