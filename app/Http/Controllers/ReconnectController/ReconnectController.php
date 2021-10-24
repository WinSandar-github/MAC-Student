<?php

namespace App\Http\Controllers\ReconnectController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;


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

    
    //show da existing register form
    public function da_two_registerForm($id)
    {
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        return view('pages.da.da_two_existing_reg_form',compact('batch'));
    }

    public function DAOneExistingRegForm($id)
    {
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
      
       
        return view('pages.da.da_one_existing_reg_form',compact('batch'));
    }

    public function daOneExistingEditForm()
    {
         
       
        return view('pages.da.da_one_existing_reg_edit');
    }

    public function daTwoExistingEditForm()
    {
         
       
        return view('pages.da.da_two_existing_reg_edit');
    }

    //show cpa_two_register for cpa one pass
    public function CPATwoRegCpaOnePassForm($id)
    {
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        return view('pages.cpa.cpa_two_reg_cpaone_pass',compact('batch'));
    }

    public function existing_user_cpa_one($id)
    {
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        return view('pages.cpa.existing_user_cpa_one',compact('batch'));
    }

    //update form for cpa one reject
    public function cpaOneExistingEditForm(){
        return view('pages.cpa.cpa_one_existing_edit_form');
    }

    //update form for cpa two reject
    public function cpaTwoExistingEditForm(){
        return view('pages.cpa.cpa_two_existing_edit_form');
    }
}
