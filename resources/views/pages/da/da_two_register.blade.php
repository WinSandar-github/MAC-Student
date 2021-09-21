@php
$nrc_language = config('myanmarnrc.language');
$nrc_regions = config('myanmarnrc.regions_states');
$nrc_townships = config('myanmarnrc.townships');
$nrc_citizens = config('myanmarnrc.citizens');
$nrc_characters = config('myanmarnrc.characters');
@endphp
@extends('layouts.app')

@section('content')
    <div class="main-wrapper">
        <div class="overlay"></div>
        <div class="section page-banner">
            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA Two Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>
            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">
            </div>
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">
            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">
        </div>
        <div class="section">
            <div class="container">
                

                <div class="comment-form study" style="display:none;">
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="___class_+?36___">                            

                            <div class="row" id="self_study_container">
                                {{-- <form id="self_study_form" method="post" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"> --}}
                                <form method="post" id="da_two_selfstudy_form" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                        <h5 class="card-title text-center my-1 fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                            ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br>
                                            (ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>

                                        <div class="card-body">

                                            <br />
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    
                                                    <label class="col-md-3 col-form-label">အမှတ်စဥ် - ({{ $batch['id'] }})</label>
                                                    
                                                    <label class="col-md-7 col-form-label label">ပညာသင်နှစ်</label>
                                                    <div class="col-md-2">
                                                        <input type="text" name="mac_semester" id="date" class="form-control" placeholder="ခုနှစ်(YYYY)" autocomplete="off" >
                                                        
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-8">
                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>
                                                            
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                            class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_self"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_self"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_self" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-center" style="padding-right:8px">{{ __('(က)') }}</span>အထက်လူကြီး၏ထောက်ခံစာ
                                                        </label>
                                                        <div class="col-md-2 text-center"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-6"  id="degree_edu" >
                                                            <input  disabled type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</label>                                                        
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno"readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('၁၇။') }}</span>ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)စာမေးပွဲအောင်မြင်ခဲ့သည့်</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(က)') }}</span>ခုနှစ်/လ</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>အဆင့်</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="အဆင့်" id="da_one_pass_level" name="da_one_pass_level" class="form-control ">
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၈။') }}</span>မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း</label>
                                                </div>

                                                    <div class="row">
                                                      <div class="col-md-1"></div>
                                                      <div class="col-md-1">
                                                          <label class="form-check-label">(က)</label>
                                                      </div>
                                                      <div class="col-md-1">
                                                          <input type="checkbox" value="ယခုနှစ်တက်ရောက်ခြင်း"
                                                              name="reg_reason[]">
                                                      </div>
                                                      <div class="col-md-9">
                                                          <label class="form-check-label">ယခုနှစ်တက်ရောက်ခြင်း</label>
                                                      </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ခ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox"
                                                                value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label
                                                                class="form-check-label">သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ဂ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label class="form-check-label">သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ဃ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9"><label>စာမေးပွဲကျရှုံးခြင်း</label></div>
                                                    </div><br />

                                                    <div class="row mb-4">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(င)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label>သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left">{{ __('၁၉။') }}</span>
                                                            <span class="pull-center" style="padding-right: 35px;">{{ __('(က)') }}</span>တက်ရောက်မည့်သင်တန်း
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="student_regno" class="form-control course_name"
                                                                placeholder="အပိုင်း" id="part_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>သင်တန်းအမှတ်စဥ်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="student_regno" class="form-control batch_no"
                                                                placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>ကိုယ်ပိုင်အမှတ်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="personal_no_self" class="form-control personal_no_self"
                                                                placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_self">

                                                        </div>
                                                    </div>                                                   


                                                    <div class="row mb-5">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="da_two_self_reg_declare" onchange="$('#submit_btn_self').prop('disabled', !this.checked)">
                                                                    <span class="form-check-sign"></span>
                                                                    <p class="fw-bolder">
                                                                        * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                                        * မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကိုလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                                    </p>
                                                                </label>
                                                            </div>
                                                            <h6 class="mt-4 pt-1">ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                        </div>
                                                    </div>    

                                                    <div class="row justify-content-center">                                                      
                                                            <button  type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="submit_btn_self" data-bs-toggle="modal" data-bs-target="#exampleModal3">Submit</button>
                                                        </div>
                                                    </div>

                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>

                            <div class="row" id="private_school_container">
                                {{-- <form method="post" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"> --}}
                                <form method="post" id="da_two_private_form" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3 p-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-center my-1 fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ <br>
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br> 
                                                (ကိုယ်ပိုင်သင်တန်းကျောင်းတွင်တက်ရောက်မည့် အသစ်တက်ခွင့်ရသူများ)</h5>
                                            <br />
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>

                                                  <div class="row mt-5">
                                                        <div class="col-md-8">
                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('') }}</span>ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control form-select"
                                                                            name="private_school_name" id="selected_school_id"
                                                                            style="width: 100%;">
                                                                            <option value="" disabled selected>Select School</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('') }}</span>ပညာသင်နှစ်</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="" id="academic_year" name="academic_year" class="form-control" >
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_mm" class="form-control" readonly="">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_eng" class="form-control" readonly="">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                                <div class="col-md-6">
                                                                    <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                        <div class="col-md-2">
                                                                            <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control nrc_township" name="nrc_township" readonly>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>
                                                            
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row  mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                            class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_private"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_private"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_private" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left">{{ __('') }}</span>
                                                            <span class="pull-center" style="padding-right:75px">{{ __('(က)') }}</span>အထက်လူကြီး၏ထောက်ခံစာ
                                                        </label>
                                                        <div class="col-md-1"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-7"  id="degree_edu" >
                                                            <input  disabled type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('၁၇။') }}</span>ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)စာမေးပွဲအောင်မြင်ခဲ့သည့်</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(က)') }}</span>ခုနှစ်/လ</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>အဆင့်</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="အဆင့်" id="da_one_pass_level" name="da_one_pass_level" class="form-control year"  required="">
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left">{{ __('၁၈။') }}</span>
                                                        <span class="pull-center" style="padding-right:61px">{{ __('(က)') }}</span>တက်ရောက်မည့်သင်တန်း
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="student_regno" class="form-control course_name"
                                                            placeholder="အပိုင်း" id="part_no_self" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">{{ __('(ခ)') }}</span>သင်တန်းအမှတ်စဥ်
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="student_regno" class="form-control batch_no"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_self" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">{{ __('(ဂ)') }}</span>ကိုယ်ပိုင်အမှတ်
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_self" class="form-control personal_no_self"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_self" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" name="da_two_private_reg_declare" type="checkbox" onchange="$('#da_two_private_submit').prop('disabled', !this.checked)">
                                                                <span class="form-check-sign"></span>
                                                                <p class="fw-bolder">
                                                                    * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                                    * မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကိုလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                                </p>
                                                            </label>
                                                        </div>
                                                        <h6 class="mt-4 pt-1">ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">                                                       
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="da_two_private_submit"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal2">Submit
                                                        </button>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="row" id="mac_container">

                                <form method="post" id="da_two_mac_form" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />
                                    <div class="card border-success mb-3 " style="padding:3% 5% 3% 5%;">
                                        <div class="card-body">
                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder"> မြန်မာနိုင်ငံစာရင်းကောင်စီ <span id="mac_type"></span> <br>
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>                                                
                                            
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row mt-5">
                                                    
                                                    <label class="col-md-3 col-form-label">အမှတ်စဥ် - ({{ $batch['id'] }})</label>
                                                    
                                                    <label class="col-md-7 col-form-label label">ပညာသင်နှစ်</label>
                                                    <div class="col-md-2">
                                                        <input type="text" name="mac_semester" id="date" class="form-control" placeholder="ခုနှစ်(YYYY)" autocomplete="off" required>
                                                        
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-8">
                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>
                                                            
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                            class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_mac"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_mac"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_mac" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-center" style="padding-right:8px">{{ __('(က)') }}</span>အထက်လူကြီး၏ထောက်ခံစာ
                                                        </label>
                                                        <div class="col-md-2 text-center"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-6"  id="degree_edu" >
                                                            <input  disabled type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                        </div>
                                                    </div>
                                                </div>
                                                    

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>တက်ရောက်ခွင့်ရရှိခဲ့သည့်အမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('၁၇။') }}</span>ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)စာမေးပွဲအောင်မြင်ခဲ့သည့်</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(က)') }}</span>ခုနှစ်/လ</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>အဆင့်</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="အဆင့်" id="da_one_pass_level" name="da_one_pass_level" class="form-control year"  required="">
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left">{{ __('၁၈။') }}</span>
                                                        <span class="pull-center" style="padding-right: 35px;">{{ __('(က)') }}</span>တက်ရောက်မည့်သင်တန်း
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="student_regno" class="form-control course_name"
                                                            placeholder="တက်ရောက်မည့်သင်တန်း" id="part_no_mac" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>သင်တန်းအမှတ်စဥ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="student_regno" class="form-control batch_no"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ဂ)') }}</span>ကိုယ်ပိုင်အမှတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_self" class="form-control personal_no_self"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_self" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="row mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="da_two_mac_reg_declare" onchange="$('#submit_btn_mac').prop('disabled', !this.checked)">
                                                                <span class="form-check-sign"></span>
                                                                <p class="fw-bolder">
                                                                    * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                                    * မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကိုလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                                </p>
                                                            </label>
                                                        </div>
                                                        <h6 class="mt-4 pt-1">ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                    </div>
                                                </div>    

                                                <div class="row justify-content-center">                                                      
                                                        <button  type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="submit_btn_mac" data-bs-toggle="modal" data-bs-target="#exampleModal1">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Feedback Text -->
            <!-- <div class="exam_feedback" style="display:none; margin-left: 7%; margin-right: 7%;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body exam_text">

                            </div>
                        </div>
                    </div> -->

            <!-- MAC -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoMac();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(MAC) Form Fee - ****** MMK</h4>
                                    </center>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                                 data-value="CBPAY" name="payment_method" id="cb_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                                 data-value="MPU" name="payment_method" id="mpu_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                                 data-value="CASH" name="payment_method" id="cash_img_mac">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>

            <!-- PRIVATE -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Private School) Form Fee - ****** MMK</h4>
                                    </center>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                                 data-value="CBPAY" name="payment_method" id="cb_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                                 data-value="MPU" name="payment_method" id="mpu_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                                 data-value="CASH" name="payment_method" id="cash_img_private">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>


            <!-- SELF -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Self Study) Form Fee - ****** MMK</h4>
                                    </center>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                                 data-value="CBPAY" name="payment_method" id="cb_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                                 data-value="MPU" name="payment_method" id="mpu_img">
                                        </center>
                                        <br>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <center>
                                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                                 data-value="CASH" name="payment_method" id="cash_img_self">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>


        </div><br /></br />
    </div>
    </div>
    <!-- JavaScript Section -->
    <script>
        var mmnrc_regions = {!! json_encode($nrc_regions) !!};
        // get NRC Townships data from myanmarnrc.php config file
        var mmnrc_townships = {!! json_encode($nrc_townships) !!};
        // get NRC characters data from myanmarnrc.php config file
        var mmnrc_characters = {!! json_encode($nrc_characters) !!};
        // get language data from myanmarnrc.php config file
        var mmnrc_language = "{{ $nrc_language }}";
    </script>
@endsection
@push('scripts')
<script src="{{ asset('js/form_validation/da_two_reg_validation.js') }}"></script>
    <script type="text/javascript">
        $('document').ready(function() {
            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);
            $("input[name='mac_semester']").flatpickr({
                enableTime: false,
                dateFormat: "Y",
                allowInput: true,
            }); 

            selectedRegistration(urlParams.get("study_type"));

            get_student_info(student_id).then(data => {

                let student_info = data.data;
                console.log("student_info",student_info)
                if(data){
                    let current_stu_course = data.data.student_course_regs.slice(-1);
                    var mac_name = current_stu_course[0].mac_type == 2 ?   "(နေပြည်တော်သင်တန်းကျောင်း)" : "(ရန်ကုန်သင်တန်းကျောင်း)";
                    $('#mac_type').text(mac_name)

                    $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                    $('.course_name').val(current_stu_course[0].batch.course.name);
                    $('.batch_no').val(current_stu_course[0].batch.number);
                    var reg_srno = current_stu_course[0].batch.number;
                    // $('#reg_srno').append(reg_srno+1)

                    $(".profile_image").attr("src",BASE_URL+student_info.image);
                    $("input[name='email']").val(student_info.email);
                    $("input[name='name_mm']").val(student_info.name_mm);
                    $("input[name='name_eng']").val(student_info.name_eng);

                    $(".nrc_state_region").val(student_info.nrc_state_region);
                    $(".nrc_township").val(student_info.nrc_township);
                    $(".nrc_citizen").val(student_info.nrc_citizen);
                    $(".nrc_number").val(student_info.nrc_number);
                    $(".nrc_front_image").attr("src",BASE_URL+student_info.nrc_front);
                    $(".nrc_back_image").attr("src",BASE_URL+student_info.nrc_back);

                    $("input[name='father_name_mm']").val(student_info.father_name_mm);
                    $("input[name='father_name_eng']").val(student_info.father_name_eng);
                    $("input[name='race']").val(student_info.race);
                    $("input[name='religion']").val(student_info.religion);
                    $("input[name='date_of_birth']").val(student_info.date_of_birth);

                    let education = student_info.student_education_histroy;
                    $("input[name='degree_name']").val(education.degree_name);

                    let job = student_info.student_job;
                    $("input[name='job_name']").val(job.name);
                    $("input[name='position']").val(job.position);
                    $("input[name='department']").val(job.department);
                    // $("input[name='organization']").val(job.phone);
                    // $("input[name='company_name']").val(job.company_name);
                    // $("input[name='salary']").val(job.salary);
                    $("input[name='office_address']").val(job.office_address);
                    
                    if(student_info.gov_staff==0){
                        $("#no_mac").prop("checked",true);
                        $("#no_self").prop("checked",true);
                        $("#no_private").prop("checked",true);

                    }else{
                        $("#yes_mac").prop("checked",true);
                        $("#rec_letter_mac").css("display",'block');
                        $("#yes_self").prop("checked",true);
                        $("#rec_letter_self").css("display",'block');
                        $("#yes_private").prop("checked",true);
                        $("#rec_letter_private").css("display",'block');
                        if(student_info.recommend_letter!=null){
                            $(".recommend_letter").append("<a href='"+BASE_URL+student_info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                        }
                        

                    }

                    $("input[name='phone']").val(student_info.phone);
                    $("input[name='address']").val(student_info.address);
                    $("input[name='current_address']").val(student_info.current_address);

                    $(".personal_no_self").val(student_info.registration_no);




                }

            });

        })

        loadCourse();
        reg_feedback();
        loadPrivateSchoolList();

        var exam_date = localStorage.getItem("exam_date");
        $("input[name='exam_date']").val(formatDate(exam_date));

        

        $("#submit_btn_self").click(function () {
            // var aa = $("input[name=mac_semester]").val()
            // console.log("mac_semester",aa);
            // console.log("da_one_pass_level",$("input[name=da_one_pass_level]").val());
            // console.log("reg_reason",$('input[name="reg_reason[]"]:checked').length);
            // console.log("personal_no_self",$(".personal_no_self").val());
            if($("input[name=mac_semester]").val()!="" && 
                $("input[name=da_one_pass_level]").val()!="" && 
                $('input[name="reg_reason[]"]:checked').length > 0 && 
                $(".personal_no_self").val()!=""){
                    $('#exampleModal3').modal('show');
            }else{
                $('#exampleModal3').modal('hide');
            }
        });

        //MAC
        $('#mac_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal1').modal('hide');
            }, 1000);
        });

        $('#cash_img_mac').click(function() {
            $('#mac_btn').prop('disabled', false);
        });

        $('#cb_img').click(function() {
            $('#mac_btn').prop('disabled', true);
        });

        $('#mpu_img').click(function() {
            $('#mac_btn').prop('disabled', true);
        });
        $('#mac_btn').prop('disabled', true);

        //Self Study
        $('#self_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal3').modal('hide');
            }, 1000);
        });

        $('#cash_img_self').click(function() {
            $('#self_btn').prop('disabled', false);
        });

        $('#cb_img').click(function() {
            $('#self_btn').prop('disabled', true);
        });

        $('#mpu_img').click(function() {
            $('#self_btn').prop('disabled', true);
        });
        $('#self_btn').prop('disabled', true);

        //Private School
        $('#private_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal2').modal('hide');
            }, 1000);
        });

        $('#cash_img_private').click(function() {
            $('#private_btn').prop('disabled', false);
        });

        $('#cb_img').click(function() {
            $('#private_btn').prop('disabled', true);
        });

        $('#mpu_img').click(function() {
            $('#private_btn').prop('disabled', true);
        });
        $('#private_btn').prop('disabled', true);
    </script>
@endpush
