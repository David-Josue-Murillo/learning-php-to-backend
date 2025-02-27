<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthRegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){

        $validate = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'surname'   => ['required', 'string', 'max:255'],
            'nick'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email','max:255','unique:users'],
            'password'  => ['required', 'string', 'min:6','confirmed'],
        ]);

        $name     = $request->input('name');
        $surname  = $request->input('surname');
        $nick     = $request->input('nick');
        $email    = $request->input('email');
        $password = $request->input('password');

        $user = User::create([
            'role' => 'user',
            'name' => $name,
            'surname' => $surname,
            'nick' => $nick,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect()->route('login');
    }
}
