<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function config() {
        return view('user.config');
    }

    public function validate(Request $request, $rules){
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return $validator;
    }
    
    public function update(Request $request) {
        $id = Auth::user()->id;

        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

        $name = $request->input('name');
        $username = $request->input('username');
        $nick = $request->input('nick');
        $email = $request->input('email');

        var_dump($id);
        var_dump($name);
        var_dump($username);
        var_dump($nick);
        var_dump($email);
        die();
    }
}
