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
}
