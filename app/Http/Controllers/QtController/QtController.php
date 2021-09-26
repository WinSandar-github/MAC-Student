<?php

namespace App\Http\Controllers\QtController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QtController extends Controller
{
    public function index(){
        return view('pages.qt_register.index');
    }
}
