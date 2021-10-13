<?php

namespace App\Http\Controllers\QtController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CustomClass\Helper;

class QtController extends Controller
{
    public function index(){
        return view('pages.qt_register.index');
    }
    public function edit($id){
        $client = new \GuzzleHttp\Client();
        $res = json_decode($client->request('GET', Helper::$domain . '/qualifiedtest/' . $id)->getBody(), true);
        $qualified_test =  $res['data'];
        return view('pages.qt_register.edit',compact("qualified_test"));
    }
}
