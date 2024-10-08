<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();

        if($students->isEmpty()){
            $data = [
                'message' => 'No hay estudiantes',
                'status' => 200
            ];

            return response()->json($data, 200);
        }

        $data = [
            'students' => $students,
            'status' => 200,
        ];

        return response()->json($data, 200);
    }

    
}
