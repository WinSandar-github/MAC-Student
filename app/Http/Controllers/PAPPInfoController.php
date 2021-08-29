<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;

class PAPPInfoController extends Controller
{
  public function info(){
    $client = new \GuzzleHttp\Client();
    $res_requirement = json_decode($client->request('GET', Helper::$domain.'/get_requirement_id')->getBody(),true);
    $requirements  = $res_requirement['data'];

    return view('pages.student_info.student_papp_information',['requirements' => $requirements]);
  }
}
