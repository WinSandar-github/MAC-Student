<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DARegisterController extends Controller
{
    public function registerForm()
    {
        // return $batch_id;
        return view('pages.da_register');
    }
}
