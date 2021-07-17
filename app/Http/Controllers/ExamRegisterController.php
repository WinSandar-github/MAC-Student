<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamRegisterController extends Controller
{
    public function registerForm()
    {
        return view('pages.exam_register');
    }
}
