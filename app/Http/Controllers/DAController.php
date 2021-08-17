<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DAFormRequest;
use App\StudentInfo;
use App\StudentJobHistroy;
use App\EducationHistroy;
use Hash;
use Alert;
use App\Http\Controllers\CustomClass\Helper;


class DAController extends Controller
{
    public function daform()
    {
        return view('pages.da');
    }

    public function daSubmit(DAFormRequest $request)
    {
        $nrc = $request['nrc_state_region'] .'/'. $request['nrc_township'] . $request['nrc_citizen'] . $request['nrc_number'];
        $data = StudentInfo::where('nrc', '=', $nrc)->first();

        if($data)
        {
            Alert::error("Error", "NRC has been used, please check again!");
            return redirect(url('/da'));
        }

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name  = uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/storage/student_info/',$name);
            $image = '/storage/student_info/'.$name;
        } 

        if ($request->hasfile('document')) {
            $file = $request->file('document');
            $name  = uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/storage/student_info/',$name);
            $document = '/storage/student_info/'.$name;
        } 

        $student_info = new StudentInfo();
        $student_info->name_mm          =   $request->name_mm;
        $student_info->name_eng         =   $request->name_eng;
        $student_info->nrc              =   $nrc;
        $student_info->father_name_mm   =   $request->father_name_mm;
        $student_info->father_name_eng  =   $request->father_name_eng;
        $student_info->race             =   $request->race;
        $student_info->religion         =   $request->religion;
        $student_info->date_of_birth    =   $request->date_of_birth;
        $student_info->address          =   $request->address;
        $student_info->current_address  =   $request->current_address;
        $student_info->phone            =   $request->phone;
        $student_info->gov_staff        =   $request->gov_staff;
        $student_info->image            =   $image;
        $student_info->registration_no  =   $request->registration_no;
        $student_info->approve_reject_status  =  0;
        $student_info->date             =   $request->date;
        $student_info->email            =   $request->email;
        $student_info->password         =   Hash::make($request->password);
        $student_info->save(); 
         
        $student_job_histroy = new StudentJobHistroy;
        $student_job_histroy->student_info_id   = $student_info->id;
        $student_job_histroy->name              = $request->job_name;
        $student_job_histroy->position          = $request->position;
        $student_job_histroy->department        = $request->department;
        $student_job_histroy->organization      = $request->organization;
        $student_job_histroy->company_name      = $request->company_name;
        $student_job_histroy->salary            = $request->salary;
        $student_job_histroy->address           = $request->office_address;
        $student_job_histroy->save();
        
        $education_histroy  =   new EducationHistroy();
        $education_histroy->student_info_id = $student_info->id;
        $education_histroy->university_name = $request->university_name;
        $education_histroy->degree_name     = $request->degree_name;
        $education_histroy->document        = $document;
        $education_histroy->qualified_date  = $request->qualified_date;
        $education_histroy->roll_number     = $request->roll_number;
        $education_histroy->save();

        Alert::success('Success', 'Successfully Registered!');
        return redirect(url('/'));
    }

    public function da_edit()
    {      
        return view('pages.da_edit');
    }

    public function daTwoAppForm($id)
    {       
        $client = new \GuzzleHttp\Client();
       
        $res = json_decode($client->request('GET', Helper::$domain.'/batch/'.$id)->getBody(),true);
        $batch = $res['data'];
        return view('pages.da.da_two_app_form',compact('batch'));
    }
}
