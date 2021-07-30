<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPATwoRegisterController extends Controller
{
    public function self_study(){
        return view('pages.cpa.cpa_two_self_study');
    }
    public function mac(){
        return view('pages.cpa.cpa_two_mac');
    }
    public function private_school(){
        return view('pages.cpa.cpa_two_private_school');
    }

    public function cpaTwoExamRegister()
    {
        return view('pages.cpa.cpa_two_exam_register');
    }
}
