<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentInfo;
use Hash;
use Alert;

class DAController extends Controller
{
    public function daform(){
        return view('pages.da');
    }

    public function daSubmit(Request $request){
        $data = $request->all();
        $data['registration_no'] = 0;//need to discuss
        $data['date'] = date("Y-m-d");
        $data['approve_reject_status'] = 0;
        $data['password'] = Hash::make($data['password']);
        StudentInfo::create($data);
        Alert::success('Success', 'Successfully Registered!');
        return redirect(url('/'));
    }
}