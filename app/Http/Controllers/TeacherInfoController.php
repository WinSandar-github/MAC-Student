<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherInfoController extends Controller
{
  $client = new \GuzzleHttp\Client();
  $res_requirement = json_decode($client->request('GET', Helper::$domain.'/get_requirement_id')->getBody(),true);
  $requirements  = $res_requirement['data'];

  return view('pages.school.teacher_information',['requirements' => $requirements]);
}
