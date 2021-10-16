<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DARegisterController extends Controller
{
    //show da application form
    public function registerForm()
    {
       

        return view('pages.da.da_one_form');
    }

    //show da_two_register for da one pass
    public function da_two_registerForm()
    {
        // return $batch_id;
        return view('pages.da.da_two_reg_daone_pass');
    }

    public function da_two_register()
    {
        return view('pages.da.da_two_register');
    }
}
