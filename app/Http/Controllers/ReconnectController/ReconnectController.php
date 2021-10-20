<?php

namespace App\Http\Controllers\ReconnectController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReconnectController extends Controller
{
    
    public function reconnect()
    {
        return view('pages.home.reconnect');
    }

    public function reconnect_papp()
    {
        return view('pages.student_info.reconnect_papp');
    }

    
    //show da existing register form
    public function da_two_registerForm()
    {
        return view('pages.da.da_two_existing_reg_form');
    }
    public function DAOneExistingRegForm()
    {
        return view('pages.da.da_one_existing_reg_form');
    }

    //show cpa_two_register for cpa one pass
    public function CPATwoRegCpaOnePassForm()
    {
        return view('pages.cpa.cpa_two_reg_cpaone_pass');
    }
}
