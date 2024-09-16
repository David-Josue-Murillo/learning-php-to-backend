<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function validate(Request $request, $rules){
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return $validator;
    }

    public function register(Request $request){

        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

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
