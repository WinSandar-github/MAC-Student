<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function info(){
        return view('pages.teacher.teacher_registration');
    }
}
