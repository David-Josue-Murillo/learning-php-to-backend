<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct() {

    }
    
    public function create() {
        return view('image.create');
    }

    public function save(Request $request) {
        
        //Validacion 
        $validate = $request->validate([
            'description' => ['required', 'string', 'max:255'],
            'image_path' => ['required', 'image'],
        ]);
        
        // Obtener datos
        $image_path = $request->file('image_path');
        $description = $request->input('description');

        // Asignar valores al nuevo objeto
        $user = Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $description;

        if($image_path){
            $image_path_name = time().'_'.$image_path->getClientOriginalName();
            $image_path->storeAs('images', $image_path_name, 'images');
            $image->image_path = $image_path_name;
        }

        // Guardar en la base de datos
        $image->save();

        return redirect()->route('home')->with('message', 'Imagen subida correctamente');
    }
}
