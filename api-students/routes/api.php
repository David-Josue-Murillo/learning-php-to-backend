<?php

use App\Http\Controllers\api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);


Route::get('/student/{id}', function(){
    return response()->json([
        'message' => 'Estudiante 1',
        'status' => 200 
    ]);
});


Route::post('/student', [StudentController::class, 'store']);


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