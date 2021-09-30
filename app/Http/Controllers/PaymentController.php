<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;
use Session;


/*  MPU Merchant ID & Secret Key  */ 
define('mpu_merchant_ID','204104001306141');
define('secret_Key','GQVVS3MOUU06XDCFRJDIVHI3WXWYH04P');
define('pgw_test_Url','https://www.mpuecomuat.com:60145/UAT/Payment/Payment/pay');
define('pgw_live_Url','https://www.mpuecomuat.com:60145/UAT/Payment/Payment/pay');

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


    

    function generate_hash_value()
        {
           
           // global $mpu_data;
                 
            //$input_fields_array=$mpu_data; 
    
            //var_dump($mpu_data);
                                
           // $signature_string = create_signature_string($input_fields_array);
            //global $secret_Key;
    
          //  var_dump($secret_Key);
            
           // $hash_value = hash_hmac('sha1', $signature_string, $secret_Key, false);
           // $hash_value = strtoupper($hash_value);
    
          
            return "Hash Value";
            //return $hash_value;
        }
    
    
    
        function create_signature_string($input_fields_array)
        {
    
            sort($input_fields_array, SORT_STRING);
          
            $signature_string = "";
            foreach($input_fields_array as $value)
            {
                if ($value != "")
                {
                    $signature_string .= $value;    
                }
            }
            
            return $signature_string;
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
