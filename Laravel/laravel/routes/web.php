<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/show-date', function() {
    return view('show-date');
});

Route::get('/movies/{title}/{year?}', function($title = 'No hay una pelicula seleccionada', $year = 2024) { 
    return view('movies', array(
        'title' => $title,
        'year' => $year,
    ));
})->where(array(
    'title' => '[a-zA-Z0-9\s]+',
    'year' => '[0-9]{4}'
));

Route::get('/list-movies', function(){
    $title = 'Listado de peliculas';
    $lists = array('Batman', 'Superman', 'Spiderman', 'Iron Man', 'Captain America', 'Thor', 'Wonder Woman');

    return view('movies.list')
        ->with('title', $title)
        ->with('lists', $lists)
    ;
});

Route::get('/page-generic', function(){
    return view('page');
});
*/

// Controlador de peliculas
Route::get('/movie', [MovieController::class, 'index']);

Route::get('/redirect', [MovieController::class, 'redirect']);

Route::get('/details/{year?}', [MovieController::class, 'details'])->middleware('testyear');

Route::get('/movie-datails', [MovieController::class, 'show'])
            ->where('title', '[a-zA-Z0-9\s]+')
            ->where('year', '[0-9]{4}');


Route::resource('/user', UserController::class);