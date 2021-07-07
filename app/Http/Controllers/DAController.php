<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentInfo;

class DAController extends Controller
{
    public function daform(){
        return view('pages.da');
    }

    public function daSubmit(Request $request){
        return $request->all();
        $request['name_mm'] = $request['name_mm'];
        $request['name_eng'] = $request['name_eng'];
        $request['nrc'] = $request['nrc'];
        $request['father_name_mm'] = $request['father_name_mm'];
        $request['father_name_eng'] = $request['father_name_eng'];
        $request['race'] = $request['race'];
        $request['religion'] = $request['religion'];
        $request['date_of_birth'] = $request['date_of_birth'];
        $request['phone'] = $request['phone'];
        $request['current_address'] = $request['current_address'];
        $request['gov_staff'] = $request['gov_staff'];
        $request['image_location'] = $request['image_location'];
        $request['registeration_no'] = 1;//need to discuss
        $request['date'] = date("Y-m-d");
        $request['approve_reject_status'] = FALSE;

        $request['email'] = $request['email'];
        $request['password'] = Hash::make($request['password']);
        $user = StudentInfo::create($request);
        Alert::success('Success', 'Successfully Registered!');
        return redirect(url('/'));
    }
}