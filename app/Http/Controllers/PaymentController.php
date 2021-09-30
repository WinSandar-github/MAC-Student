<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;
use Session;

class PaymentController extends Controller
{
    public function paymentMethod($id)
    {
        // pay form type => application / register form / exam form / ...
        // id

        // $client = new \GuzzleHttp\Client();
        // $student_info = json_decode($client->request('GET', Helper::$domain .'/user_profile/' . $id)->getBody(),true);
        // dd($student_info);
        // $data = array();
        // $data['name'] = $student_info->data;

        return view('pages.payment.payment_method');
    }

    public function postPayment(Request $request)
    {
        $data = $request->all();
        Session::put('data', $data);
        return redirect(url('mpu'));
    }

    public function mpu()
    {
        $payment_type = Session::get('payment_type');
        $name_eng = Session::get('data')['name_eng'];
        $email = Session::get('data')['email'];
        $phone = Session::get('data')['phone'];
        $invoice_no = Session::get('data')['invoice_no'];
        // $form_fee = Session::get('data')['form_fee'];
        // return Session::all();
        return view('pages.payment.mpu',compact('payment_type','name_eng','email','phone','invoice_no'));
    }

    public function paymentStatus()
    {
        return view('pages.payment.payment_status');
    }

    // public function setPayment(Request $request)
    // {
    //     setPayType($request->get('payment_type'));
    //     if ('MPU' == $request->get('payment_type')) {
    //         return redirect(url('mpu'));
    //     }else if('CBPAY' == $request->get('payment_type')) {
    //         return redirect(url('cbpay'));
    //     }else if('VISA' == $request->get('payment_type')) {
    //         return redirect(url('visa'));
    //     }
    //     else{
    //         return redirect(url('master'));
    //     }
    // }
}
