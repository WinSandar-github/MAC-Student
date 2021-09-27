<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // public function payment()
    // {
    //     return view('pages.payment.payment');
    // }

    // public function cash()
    // {
    //     return view('pages.payment.cash');
    // }

    // public function verifyEmail()
    // {
    //     return view('pages.da.da_verify_email');
    // }

    public function paymentMethod()
    {
        return view('pages.payment.payment_method');
    }

    public function setPayment(Request $request)
    {
        setPayType($request->get('payment_type'));
        if ('MPU' == $request->get('payment_type')) {
            return redirect(url('mpu'));
        }else if('CBPAY' == $request->get('payment_type')) {
            return redirect(url('cbpay'));
        }
        else{
            return redirect(url('visa'));
        }
    }
}
