<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeUnit\FunctionUnit;

use function Laravel\Prompts\table;

class CategoryController extends Controller
{
    //index
    public function index() {
        $categories = DB::table('categorias')
                    ->orderBy('id', 'desc')
                    ->get();

        return view('category.index',[
            'categories' => $categories
            ]);
    }

    public function getCetegory($id) {
        $category = DB::table('categorias')->where('id', '=', $id)->first();
    
        return view('category.category', [
            'category' => $category
        ]);
    }

    public function create() {
        return view('category.form')->with('status', 'Fruta creada correctamente');
    }

    public function save(Request $request) {
        // Save register
        $category = DB::table('categorias')
                    ->insert(array('nombre' => $request->input('name')
        ));

        return redirect()->route('index');
    }

    public function delete($id) {
        $category = DB::table('categorias')
                    ->where('id', $id)
                    ->delete();

        return redirect()->route('index')->with('status', 'Fruta eliminada correctamente');
    }
}
