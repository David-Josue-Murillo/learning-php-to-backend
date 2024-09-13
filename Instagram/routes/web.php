<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;

Route::get('/', function () {
    
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
    
    return view('welcome');
});
