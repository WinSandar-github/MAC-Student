<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('pages.student_info.student_index');
    }
    public function info(){
        return view('pages.student_info.student_course');
    }
    public function study(){
        return view('pages.student_info.student_study');
    }
}
