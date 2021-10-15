<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;


class CPATwoRegisterController extends Controller
{
    public function register($id){
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        return view('pages.cpa.cpa_two_register',compact('batch'));
        
    }
    public function self_study($id){
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        return view('pages.cpa.cpa_two_self_study',compact('batch'));
    }
    public function mac($id){
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];

        return view('pages.cpa.cpa_two_mac',compact('batch'));
    }
    public function private_school($id){
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];

        
        return view('pages.cpa.cpa_two_private_school',compact('batch'));
    }

    public function cpaTwoExamRegister()
    {

        return view('pages.cpa.cpa_two_exam_register');
    }

    public function CPATwoRegCpaOnePassForm()
    {

        return view('pages.cpa.cpa_two_reg_cpaone_pass');
    }

    public function cpaTwoAppForm($id)
    {       
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
        $batch = $res['data'];
        return view('pages.cpa.cpa_two_app_form',compact('batch'));
    }
}
