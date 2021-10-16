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
    public function da_two_register()
    {
        return view('pages.da.da_two_register');
    }
}
