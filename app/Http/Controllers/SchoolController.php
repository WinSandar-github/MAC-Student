<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function info(){
        return view('pages.school.school_registration');
    }
    public function edit(){
        return view('pages.school.school_edit');
    }
}
