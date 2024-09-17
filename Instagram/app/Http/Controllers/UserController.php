<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function config() {
        return view('user.config');
    }

    public function update(Request $request) {
        $user = Auth::user(); // Obtener el usuario actual

        // Validar los datos del formulario
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick'    => ['required', 'string', 'max:255', 'unique:users,nick,' . $user->id],
            'email'   => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
        ]);

        // Asignar los nuevos valores al usuario
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->nick = $request->input('nick');
        $user->email = $request->input('email');

        // Subir imagen
        $image = $request->file('image');
        if($image){
            $image_path_name = time().'_'.$image->getClientOriginalName();
            
            // Guardar en la carpeta storage/app/users
            $image->storeAs('users', $image_path_name, 'users'); // Guardar en la carpeta storage/app/users
            
            // Asignar la ruta de la imagen en la base de datos
            $user->image = $image_path_name;
        }

        // Guardar los cambios en la base de datos
        $user->update();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('config')->with(['message'=>'Usuario actualizado correctamente']);
    }

    public function getImage($filename) {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
        
        //return Storage::url('images/'.$filename);
    }
}
