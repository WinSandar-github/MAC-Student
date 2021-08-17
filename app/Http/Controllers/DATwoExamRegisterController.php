<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DATwoExamRegisterController extends Controller
{
    public function daTwoExamRegisterForm()
    {
        return view('pages.da_two_exam_register');
    }
}
