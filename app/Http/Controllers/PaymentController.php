<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('pages.payment.payment');
    }

    public function cash()
    {
        return view('pages.payment.cash');
    }

    public function verifyEmail()
    {
        return view('pages.da.da_verify_email');
    }
}
