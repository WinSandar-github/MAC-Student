<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAOneRegisterController extends Controller
{
    
    public function info(){
        return view('pages.cpa.cpa_one_register');
    }
}
