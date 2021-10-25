<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;

class DARegisterController extends Controller
{
    //show da application form
    public function registerForm($id)
    {
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
       
        $batch = $res['data'];
        // return $batch_id;
        return view('pages.da.da_one_form',compact('batch'));
    }    

    public function da_two_register()
    {
        return view('pages.da.da_two_register');
    }
}
