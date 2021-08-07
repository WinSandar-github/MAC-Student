<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;


class CPATwoRegisterController extends Controller
{
    public function register(){
        return view('pages.cpa.cpa_two_register');
    }
    public function self_study(){
        return view('pages.cpa.cpa_two_self_study');
    }
    public function mac(){
        return view('pages.cpa.cpa_two_mac');
    }
    public function private_school(){
        return view('pages.cpa.cpa_two_private_school');
    }

    public function cpaTwoExamRegister()
    {

        return view('pages.cpa.cpa_two_exam_register');
    }

    public function cpaTwoAppForm($id)
    {       
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
        $batch = $res['data'];
        return view('pages.cpa.cpa_two_app_form',compact('batch'));
    }
}
