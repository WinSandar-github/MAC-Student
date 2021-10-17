<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAFFController extends Controller
{
    
    public function info(){
        return view('pages.cpa.cpa_ff_register');
    }

    public function other(){
        return view('pages.cpa.cpaff_other');
    }

    // public function reject(){
    //     return view('pages.cpa.cpaff_reject');
    // }

    public function reject_initial(){
        return view('pages.cpa.update_cpaff_initial');
    }

    public function reject_renewal(){
        return view('pages.cpa.update_cpaff_renewal');
    }

    public function cpaffReconnect(){
        return view('pages.cpa.cpaff_reconnect');
    }

    public function cpaffRenew(){
        return view('pages.cpa.cpaff_renew');
    }
   
}
