<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
         // $BACKEND_URL = "https://demo.aggademo.me/MAC/public/index.php/api";
        $BACKEND_URL = "http://localhost:8000/api";
        
         
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', $BACKEND_URL.'/publish_batch/'.$course_type_id)->getBody(),true);
        $batch = $res['batch'];
        $course = $res['course'];
        
        
        // $batch = Http::get('http://localhost:8000/batch/'.$id);
        // return $batch;
       
          
        
  
        return view('pages.student_course',['batch' => $batch,'course' => $course]);
    }

   
}
