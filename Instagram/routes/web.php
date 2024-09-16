<?php

use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\AuthRegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//use App\Models\Image;

Route::get('/', function () {
    /*
    $images = Image::all();
    foreach ($images as $image) {
        echo "<h2>Post</h2>";
        echo $image->image_path."<br />";
        echo $image->description."<br />";
        echo "Autor: ". $image->user->name." ".$image->user->surname."<br />";

        if(count($image->comments) >= 1){
            echo "<h3>Comentarios</h3>";
            foreach ($image->comments as $comment) {
                echo $comment->user->name." ".$comment->user->surname.": ";
                echo $comment->content."<br />";                
            }
        }
        
        echo "LIKES: ". count($image->likes);
        echo "<hr />";
    }
    die();
    */
    return view('welcome');
});

Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthLoginController::class, 'login']);
Route::get('/register', [AuthRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthRegisterController::class, 'register']);
Route::post('/logout', [AuthLoginController::class, 'logout'])->name('logout');
Route::get('/home', [AuthLoginController::class, 'showApp'])->name('home');


Route::group(['prefix' => 'user'], function() {
    Route::get('/config', [UserController::class, 'config'])->name('config');
    Route::post('/update', [UserController::class, 'update'])->name('update');
});
