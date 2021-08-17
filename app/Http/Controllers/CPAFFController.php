<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAFFController extends Controller
{
    
    public function info(){
        return view('pages.cpa.cpa_ff_register');
    }

   
}
