<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function index()
    {
        $classes=DB::table('classes')->pluck('name', 'id');
        $students=DB::table('students')->pluck('name', 'id');

        return view('class.index', compact('classes', 'students'));
    }

    public function classes(Request $request)
    {
        $inputs = $request->all();
        $students = Student::where('class_id', $inputs['class_id'])->get();

        return $students;
    }
}
