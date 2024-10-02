<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// CREATE
Route::post('user/{name}', function($name){
    return "Hola $name, como estas?";

});  

// READ
Route::get('/user', function() {
    return "Hola mundo";
});

// UPDATE
Route::put('user/{name}', function($name){
    return "Hola $name, como estas?, quieres actualizar tu perfil?";
});

 // DELETE
Route::delete('user/{name}', function($name){
    return "Hola $name, como estas?, quieres borrar tu perfil?";
});

Route::get('user/{min}/{max}', function($min, $max){
    if(!is_numeric($min) || !is_numeric($max)){
        return response()->json(['error' => 'El parametro min y max deben ser numéricos'], 400);
    }

    $numero_random = rand($min, $max);
    $array = ['numero' => $numero_random];

    return response($array, 200);
});