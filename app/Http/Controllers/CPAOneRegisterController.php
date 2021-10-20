<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAOneRegisterController extends Controller
{
    public function register(){
        return view('pages.cpa.cpa_one_register');
    }
    public function self_study(){
        return view('pages.cpa.cpa_one_self_study');
    }
    public function mac(){
        return view('pages.cpa.cpa_one_mac');
    }
    public function private_school(){
        return view('pages.cpa.cpa_one_private_school');
    }
    public function cpaOneForm()
    {
        return view('pages.cpa.cpa_one_form');
    }
    public function cpaOneDaPassForm()
    {
        return view('pages.cpa.cpa_one_dapass_form');
    }
    public function cpaOneEntryForm()
    {
        return view('pages.cpa.cpa_one_entry_form');
    }
    public function cpaOneEntryAppForm()
    {
        
        return view('pages.cpa.cpa_one_entry_app_form');
    }
    public function cpaEdit()
    {
        return view('pages.cpa.cpa_edit');
    }

    public function entry_edit()
    {      
        return view('pages.cpa.entry_edit');
    }
    public function cpaExamRegister()
    {
        return view('pages.cpa.cpa_exam_register');
    }
    public function aaMacRegister()
    {
        return view('pages.aa_register.aa_mac_register');
    }
    public function aaSelfRegister()
    {
        return view('pages.aa_register.aa_self_register');
    }
    public function aaPrivateRegister()
    {
        return view('pages.aa_register.aa_private_register');
    }

    public function existing_user_cpa_one()
    {
        return view('pages.cpa.existing_user_cpa_one');
    }
}
