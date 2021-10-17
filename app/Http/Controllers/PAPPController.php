<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PAPPController extends Controller
{
    //
    public function info(){
        return view('pages.student_info.student_papp');
    }

    public function renew_papp(){
        return view('pages.student_info.renew_papp');
    }

    public function reject_initial(){
        return view('pages.student_info.update_papp_initial');
    }

    public function reject_renewal(){
        return view('pages.student_info.update_papp_renewal');
    }
}
