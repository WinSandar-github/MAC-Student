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
    public function course()
    {
        $BACKEND_URL = "https://demo.aggademo.me/MAC/public/index.php/api";
        // $BACKEND_URL = "http://localhost:8000/api";
        
        $client = new \GuzzleHttp\Client();
       
        $batch = json_decode($client->request('GET', $BACKEND_URL.'/publish_batch')->getBody(),true);
        
        // $batch = Http::get('http://localhost:8000/batch/'.$id);
        // return $batch;
        return view('pages.student_course_detail',['batch' => $batch]);
    } 
}
