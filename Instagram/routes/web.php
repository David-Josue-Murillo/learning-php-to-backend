<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;

Route::get('/', function () {
    
    $images = Image::all();
    foreach ($images as $image) {
        # code...
        echo $image->image_path."<br />";
        echo $image->description."<br />";
        echo "<hr />";

    }
    die();
    
    return view('welcome');
});
