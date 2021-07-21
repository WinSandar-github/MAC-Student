<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DARegisterController extends Controller
{
    public function registerForm(Request $request, $batch_id)
    {
        // return $batch_id;
        return view('pages.da_register', compact('batch_id'));
    }
}
