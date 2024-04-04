<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request) {
    $Student = new Student;

    $Student->fullname = $request->input('fullname');
    $Student->course = $request->input('course');
    $Student->phone = $request->input('phone');


    $Student->save();

    return response()->json([
        'status'=>200,
        'message'=>'Registered successfully'
    ]);
}
}
