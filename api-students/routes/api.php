<?php

use App\Http\Controllers\api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);

Route::post('/student', [StudentController::class, 'store']);

Route::get('/student/{id}', [StudentController::class, 'show']);

Route::put('/student/{id}', [StudentController::class, 'update']);



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