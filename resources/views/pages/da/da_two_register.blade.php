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
        <div class="section section-padding">
            <div class="container">
                <!-- <div class="status-reject" style="display:none">
                        <div class="card text-white bg-dark my-3">
                            
                            <div class="card-body">
                                status == 2 => reject
                                <p class="card-text reject">Your DA 2 Registration Form need to prepare.Please update your form  
                                 </p>
                            </div>
                        </div>
                    </div>
                    <div class="check_registration" style="display:none;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body">
                                <p class="card-text">Your DA 2 Registration Form is checking</p>
                            </div>
                        </div>
                    </div>
                    <div class="approve" style="display:none;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body">
                                <p class="card-text">You have the opportunity to attend the training  </p>
                                
                                
                            </div>
                        </div>
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body add_exam">
                                 
                            
                            </div>
                        </div>
                    </div> -->

                <div class="comment-form study" style="display:none;">
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="___class_+?36___">

                            <div class="row">
                                <!-- <div class="col-md-4">
                                        <div class="card text-center border-success text-success" onclick="selectedRegistration(3)" id="mac_card">
                                            <div class="card-body">
                                                <label  name="register_name"> Registration Mac</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card  text-center " onclick="selectedRegistration(1)" id="self_study_card">
                                            <div class="card-body ">
                                                <label name="register_name"> Registration Self Study</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-center" onclick="selectedRegistration(2)" id="private_card">
                                            <div class="card-body">
                                                <label  name="register_name"> Registration Private School</label>
                                            </div>
                                        </div>
                                    </div> -->

                            </div><br />
                            <div class="row" id="self_study_container">
                                {{-- <form id="self_study_form" method="post" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"> --}}
                                <form id="self_study_form" method="post" action="javascript:void();"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3">
                                        <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center my-1">
                                            ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                            မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br>
                                            (ကိုယ်ပိုင်လေ့လာသင်ယူမယ်သူများ)</h5>

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

                                                {{-- <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('၁။') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                                
                                                            </div>
                                                        </div>  
                                                    </div><br/> --}}

                                                <div class="row mb-3">

                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">

                                                    </div>
                                                </div>

                                                <div class="row mb-3">

                                                    <div class="col-md-1 col-form-label">{{ __('၂။') }}</div>
                                                    <div class="col-md-5 col-form-label">
                                                        တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="student_regno"
                                                            readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
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
                                                </div>


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
                                                        <label class="form-check-label">သင်တန်းတက်ရောက်ချိန် ၆၀%
                                                            မပြည့်ခြင်း</label>
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
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="အပိုင်း" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="" readonly>

                                                    </div>
                                                </div>


                                                {{-- <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                        <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                                        <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                    </div><br/>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                    </div> --}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" form="self_study_form" id="submit_btn_ss" >{{ __('Submit') }}</button> --}}
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal1">Submit
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row" id="private_school_container">
                                {{-- <form method="post" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"> --}}
                                <form method="post" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                            <h5 class="card-title text-center my-1">
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                                မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br> (ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5>
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

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၂။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၃။') }}</div>
                                                    <div class="col-md-5 col-form-label">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)
                                                        စာမေးပွဲအောင်မြင်ခဲ့သည့်နှစ်/လ</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="exam_date"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="အပိုင်း" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="" readonly>

                                                    </div>
                                                </div>

                                                {{-- <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                        <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_pp" onclick="ConfirmSubmitPP()"></div>
                                                        <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                        
                                                    </div><br/>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                        
                                                    </div><br/> --}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" >{{ __('Submit') }}</button> --}}
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal2">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <div class="row" id="mac_container">

                                {{-- <form method="post" action="javascript:createDaTwoMac();" enctype="multipart/form-data"> --}}
                                <form method="post" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />
                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                            <h5 class="card-title text-center">
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                                မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>

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

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5  col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၂။') }}</div>
                                                    <div class="col-md-5  col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="အပိုင်း" id="" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="" readonly>

                                                    </div>
                                                </div>

                                                {{-- <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('၄။') }}</label>
                                                            </div>
                                                        </div>
                                                                                                              
                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('လျှောက်လွှာကြေး ၁၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၈၀၀၀ကျပ်၊သင်တန်းကြေး ၃၀၀၀၀ကျပ်၊စုစုပေါင်းသင့်ငွေ ၃၉၀၀၀ကို ပေးသွင်းပြီးသည့်ပြေစာအမှတ်') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="single-form">
                                                                <input type="text" name="" class="form-control" >
                                                            </div>
                                                        </div>  
                                                       
                                                    </div> --}}

                                                {{-- <div class="row">
                                                        <div class="col-md-1">  
                                                        </div>
                                                        
                                                    </div><br/> --}}

                                                {{-- <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                        <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_mac" onclick="ConfirmSubmitMac()"></div>
                                                        <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                    </div><br/>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>  
                                                    </div> --}}


                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac" >{{ __('Submit') }}</button> --}}
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal3">Submit
                                                        </button>
                                                    </div>
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

            <!-- Exam Feedback Text -->
            <!-- <div class="exam_feedback" style="display:none; margin-left: 7%; margin-right: 7%;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body exam_text">
                                
                            </div>
                        </div>
                    </div> -->

            <!-- MAC -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoMac();"
                enctype="multipart/form-data" novalidate>
                @csrf
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div><br>
                            <div class="modal-body">
                                <div class="row justify-content-center mb-4 radio-group">
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                                height="50%" data-value="CBPAY" name="payment_method">
                                        </div><br>
                                        <h5>CBPay</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                                height="50%" data-value="MPU" name="payment_method">
                                        </div><br>
                                        <h5>MPU</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                                height="50%" data-value="CASH" name="payment_method">
                                        </div><br>
                                        <h5>CASH</h5>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <center>
                                    <button type="submit" id="btn1" class="btn btn-success btn-hover-dark w-100"
                                        data-bs-toggle="modal">Submit
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- PRIVATE -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoPrivateSchool();"
                enctype="multipart/form-data" novalidate>
                @csrf
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div><br>
                            <div class="modal-body">
                                <div class="row justify-content-center mb-4 radio-group">
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                                height="50%" data-value="CBPAY" name="payment_method">
                                        </div><br>
                                        <h5>CBPay</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                                height="50%" data-value="MPU" name="payment_method">
                                        </div><br>
                                        <h5>MPU</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                                height="50%" data-value="CASH" name="payment_method">
                                        </div><br>
                                        <h5>CASH</h5>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <center>
                                    <button type="submit" id="btn2" class="btn btn-success btn-hover-dark w-100"
                                        data-bs-toggle="modal">Submit
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <!-- SELF -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoSelfStudy();"
                enctype="multipart/form-data" novalidate>
                @csrf
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div><br>
                            <div class="modal-body">
                                <div class="row justify-content-center mb-4 radio-group">
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                                height="50%" data-value="CBPAY" name="payment_method">
                                        </div><br>
                                        <h5>CBPay</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                                height="50%" data-value="MPU" name="payment_method">
                                        </div><br>
                                        <h5>MPU</h5>
                                    </div>
                                    <div class="col-sm-3 col-5">
                                        <div class='radio mx-auto'>
                                            <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                                height="50%" data-value="CASH" name="payment_method">
                                        </div><br>
                                        <h5>CASH</h5>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <center>
                                    <button type="submit" id="btn3" class="btn btn-success btn-hover-dark w-100"
                                        data-bs-toggle="modal">Submit
                                </center>
                            </div>
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
    <script type="text/javascript">
        $('document').ready(function() {
            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);



            selectedRegistration(urlParams.get("study_type"))

        })

        loadCourse();
        reg_feedback();
        var exam_date = localStorage.getItem("exam_date");
        $("input[name='exam_date']").val(formatDate(exam_date));

        $('#btn1').click(function() {
            setTimeout(function() {
                $('#exampleModal1').modal('hide');
            }, 1000);
        });

        $('#btn2').click(function() {
            setTimeout(function() {
                $('#exampleModal2').modal('hide');
            }, 1000);
        });

        $('#btn3').click(function() {
            setTimeout(function() {
                $('#exampleModal3').modal('hide');
            }, 1000);
        });
    </script>
@endpush
