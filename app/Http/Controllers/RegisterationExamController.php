<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterationExam;
use Alert;

class RegisterationExamController extends Controller
{
    public function regform()
    {
        return view('pages.reg_exam');
    }
    
    public function regSubmit(Request $request)
    {
        if ($request->hasfile('invoice_image')) {
            $file = $request->file('invoice_image');
            $name  = uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/storage/reg_exam/',$name);
            $invoice_image = '/storage/reg_exam/'.$name;
        }

        $reg_exam  =   new RegisterationExam();
        $reg_exam->id = $request->id;
        $reg_exam->student_info_id = $request->student_info_id;
        $reg_exam->date = $request->date;
        $reg_exam->invoice_image = $invoice_image;
        $reg_exam->invoice_date  = $request->invoice_date;
        $reg_exam->private_school_name = $request->private_school_name;
        $reg_exam->grade = $request->grade;
        $reg_exam->batch_id = $request->batch_id;
        $reg_exam->is_full_module = $request->is_full_module;
        $reg_exam->exam_type_id = $request->exam_type_id;
        $reg_exam->save();

        Alert::success('Success', 'Successfully Registered!');
        return redirect(url('/'));
    }
}
