<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAOneRegisterController extends Controller
{
    public function register(){
        return view('pages.cpa.cpa_one_register');
    }
    public function self_study(){
        return view('pages.cpa.cpa_one_self_study');
    }
    public function mac(){
        return view('pages.cpa.cpa_one_mac');
    }
    public function private_school(){
        return view('pages.cpa.cpa_one_private_school');
    }
}
