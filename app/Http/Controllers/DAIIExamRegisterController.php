<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DAIIExamRegisterController extends Controller
{
    public function daIIExamRegisterForm()
    {
        return view('pages.daII_exam_register');
    }
}
