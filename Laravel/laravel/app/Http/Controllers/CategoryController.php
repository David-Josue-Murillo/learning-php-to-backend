<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CategoryController extends Controller
{
    //index
    public function index() {
        $categories = DB::table('categorias')->get();

        return view('category.index',
        ['categories' => $categories]
    );
    }
}
