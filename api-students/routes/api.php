<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function(){
    return response()->json([
        'message' => 'Listado de estudiantes',
        'status' => 200 
    ]);
});


Route::get('/student/{id}', function(){
    return response()->json([
        'message' => 'Estudiante 1',
        'status' => 200 
    ]);
});


Route::post('/student', function(){
    return response()->json([
        'message' => 'Creando estudiante',
        'status' => 200 
    ]);
});


Route::put('/student/{id}', function(){
    return response()->json([
        'message' => 'Modificando todos los datos del estudiante',
        'status' => 200 
    ]);
});


Route::patch('/student/{id}', function(){
    return response()->json([
        'message' => 'Modificando un dato del estudiante',
        'status' => 200 
    ]);
});


Route::delete('/student/{id}', function(){
    return response()->json([
        'message' => 'Eliminando estudiante',
        'status' => 200 
    ]);
});