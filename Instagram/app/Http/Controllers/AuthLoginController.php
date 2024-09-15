<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if($user && Hash::check($password, $user->password)){
            Auth::login($user);
            return redirect()->route('app', ['user' => $user]);
        }

        return redirect()->route('login');
    }

    public function showApp(){
        return view('app', ['user' => Auth::user()]);
    }

}
