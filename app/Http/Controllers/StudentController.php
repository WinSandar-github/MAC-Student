<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CustomClass\Helper;


class StudentController extends Controller
{
    public function index(){
        return view('pages.student_info.student_index');
    }
    public function info(){
        return view('pages.student_info.student_course');
    }
    public function study(){
        return view('pages.student_info.student_study');
    }
    public function course($course_type_id)
    {
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/publish_batch/'.$course_type_id)->getBody(),true);
        

        $course = $res['course'];
       

        // $batch = Http::get('http://localhost:8000/batch/'.$id);
    // return $batch;
        return view('pages.student_course',["course" => $course]);
    } 
}