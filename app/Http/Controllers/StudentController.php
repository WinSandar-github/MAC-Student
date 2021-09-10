<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CustomClass\Helper;


class StudentController extends Controller
{
    public function index()
    {
        return view('pages.student_info.student_index');
    }

    public function info()
    {
        return view('pages.student_info.student_course');
    }

    public function daOneRegister()
    {
        return view('pages.da.da_one_register');
    }

    public function course($course_type_id)
    {
       
        $client = new \GuzzleHttp\Client();
        $res = json_decode($client->request('GET', Helper::$domain . '/publish_batch/' . $course_type_id)->getBody(), true);
        $res_requirement = json_decode($client->request('GET', Helper::$domain . '/get_requirement_id')->getBody(), true);
        $course = $res['course'];
        $requirements  = $res_requirement['data'];
      
      
        
        
        return view('pages.student_course',["course" => $course,'requirements' => $requirements]);
    } 
}