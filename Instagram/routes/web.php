<?php

use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\AuthRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'user'], function() {
    Route::get('/config', [UserController::class, 'config'])->name('config');
    Route::post('/update', [UserController::class, 'update'])->name('update');
    Route::get('/avatar/{filename}', [UserController::class, 'getImage'])->name('avatar');
});


Route::group(['prefix' => 'image'], function(){
    Route::get('/create', [ImageController::class, 'create'])->name('create');
    Route::post('/save', [ImageController::class, 'save'])->name('save');
    Route::get('/avatar/{filename}', [ImageController::class, 'getImage'])->name('avatar.image');
});