<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;

class SchoolInfoController extends Controller

{
  public function info(){
    $client = new \GuzzleHttp\Client();
    $res_requirement = json_decode($client->request('GET', Helper::$domain.'/get_requirement_id')->getBody(),true);
    $requirements  = $res_requirement['data'];

    return view('pages.school.school_information',['requirements' => $requirements]);
  }
}
