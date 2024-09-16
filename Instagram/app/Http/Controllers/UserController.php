<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Guardar los cambios en la base de datos
        $user->update();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('config')->with(['message'=>'Usuario actualizado correctamente']);
    }
}
