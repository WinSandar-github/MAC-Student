<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;


class ReportController extends Controller
{

    public function appList($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $course = $res['data'];
        
       
      
        return view('pages.home.application_list',compact('course'));
    }
    public function attendRegistrationList($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $res_module = json_decode($client->request('GET', Helper::$domain.'/module')->getBody(),true);

        $modules =  $res_module['data'];
        $course = $res['data'];
     
       
      
        return view('pages.home.attendes_registration_list',compact('course','modules'));
    }

    public function exam_list($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $res_module = json_decode($client->request('GET', Helper::$domain.'/module')->getBody(),true);

        $modules =  $res_module['data'];
        $course = $res['data'];
        return view('pages.home.exam_approve_list',compact('course','modules'));
    }

    
    public function exam_result_list($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $res_module = json_decode($client->request('GET', Helper::$domain.'/module')->getBody(),true);

        $modules =  $res_module['data'];
        $course = $res['data'];
        return view('pages.home.exam_result_list',compact('course','modules'));
    }

    public function entryExamList()
    {  
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course_by_course_code/cpa_1')->getBody(),true);
 
         
        $course = $res['data'][0];
        
        return view('pages.home.entry_exam_list',compact('course'));
    }

    public function qualifiedTestList()
    {  
        return view('pages.home.qualified_test_list');
    }

    
}
