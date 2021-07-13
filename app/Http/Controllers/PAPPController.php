<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PAPPController extends Controller
{
    //
    public function info(){
        return view('pages.student_info.student_papp');
    }
}
