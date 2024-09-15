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
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
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
