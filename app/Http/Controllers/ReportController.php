<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomClass\Helper;


class ReportController extends Controller
{
    public function app_list($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);

     
         
       
        $course = $res['data'];
        // switch ($course['code']) {
        //     case "da_1":
        //         $course_name = "ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)";
        //         break;
        //     case "da_2":
        //         $course_name = "ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)";

        //         break;
        //     case "da_1":
        //         $course_name = "ဒီမာစာရင်းကိုင်(ပထမပိုင်း)";
        //         break;
        //     case "da_2":
        //         $course_name = "ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)";

        //         break;    
            

        // }
       
      
        return view('pages.home.application_list',compact('course'));
    }

    public function exam_list($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $course = $res['data'];
        return view('pages.home.exam_approve_list',compact('course'));
    }

    
    public function exam_result_list($course_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/course/'.$course_id)->getBody(),true);
        $course = $res['data'];
        return view('pages.home.exam_result_list',compact('course'));
    }

    public function entryExamList()
    {  
        return view('pages.home.entry_exam_list');
    }

    public function qualifiedTestList()
    {  
        return view('pages.home.qualified_test_list');
    }

    
}
