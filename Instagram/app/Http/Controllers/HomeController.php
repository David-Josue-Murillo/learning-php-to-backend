<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class HomeController extends Controller
{
    public function index() {
        $images = Image::orderBy('id', 'desc')->get();

        return view('layouts.home', ['images' => $images]);
    }
}
