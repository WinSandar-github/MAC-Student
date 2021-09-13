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
        <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
        <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ul>
                <h2 class="title">DA One Registration  <span>Form</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>
        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">
            <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>
            <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">
        </div>
        <!-- Shape Icon Box End -->
        <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">
        <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">
    </div>
    <div class="container approve_request" style="overflow: hidden;">
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">

                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your DA 1 Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none; margin-top: 5%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your DA 1 Registration Form is checking</p>
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
                </div>
                <div class="comment-form study" >
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="">
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div disabled class="card text-center border-success text-success" onclick="selectedRegistration(3)" id="mac_card">
                                        <div class="card-body">
                                            <label  name="register_name"> Registration Mac</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center " onclick="selectedRegistration(1)" id="self_study_card">
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
                                </div>

                            </div><br/> -->

                            <div class="row" id="mac_container">
                                <form method="post" action="javascript:void();" id="da_mac_form" enctype="multipart/form-data">
                                    <div class="card border-success mb-3">
                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့် မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                        <div class="card-body">
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
                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                    <label class="col-md-5 col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control sr_no" name="student_regno"  readonly>

                                                    </div>
                                                </div>
                                                {{--<div class="row mb-3">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၂။') }}</label>
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
                                                </div>--}}
                                                <!-- <div class="row">
                                                    <div class="col-md-1">
                                                    </div>

                                                </div><br/> -->
                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('တက်ရောက်မယ်သင်တန်း') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="part_no_mac" id="part_no_mac" class="form-control course_name" disabled placeholder="အပိုင်း" id="" required>

                                                    </div>

                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="batch_no_mac" id="batch_no_mac" class="form-control batch_no" disabled placeholder="သင်တန်းအမှတ်စဥ်" id="" required>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="personal_no_mac" id="personal_no_mac" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" required>

                                                    </div>
                                                </div>

                                                {{--<div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_mac" onclick="ConfirmSubmitMac()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>

                                                </div><br/>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label"></label>
                                                    <label class="col-md-11 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                </div>--}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac">{{ __('Submit') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row" id="private_school_container">
                                <form method="post" action="javascript:void();" id="da_private_school_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card border-success mb-3">
                                        <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center my-1">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့် မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br> (ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5>
                                        <div class="card-body">
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
                                                    <label class="col-md-1 col-form-label">၁။</label>
                                                    <label class="col-md-5 col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>

                                                    <div class="col-md-6">
                                                            <input type="text"  class="form-control sr_no" name="student_regno" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>

                                                    <label class="col-md-4 col-form-label">{{ __('တက်ရောက်မယ်သင်တန်း') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="part_no_mac" id="part_no_mac" class="form-control course_name" disabled placeholder="အပိုင်း" id="" required>

                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="batch_no_private" class="form-control batch_no" disabled placeholder="သင်တန်းအမှတ်စဥ်" id="" required>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="personal_no_private" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" required>

                                                    </div>
                                                </div>

                                                {{--<div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_pp" onclick="ConfirmSubmitPP()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>

                                                </div><br/>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>

                                                </div>--}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" >Submit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row" id="self_study_container">
                                <form id="self_study_form" method="post" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card border-success mb-3">
                                        <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center my-1">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့် မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br>
                                         (ကိုယ်ပိုင်လေ့လာသင်ယူမယ်သူများ)</h5>

                                        <div class="card-body">
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
                                                {{--<div class="row">
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
                                                </div><br/>--}}

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">၁။</label>
                                                    <label class="col-md-5 col-form-label">တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>

                                                    <div class="col-md-6">
                                                            <input type="text"  class="form-control sr_no" name="student_regno " readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(က)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="ယခုနှစ်တက်ရောက်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label class="form-check-label">ယခုနှစ်တက်ရောက်ခြင်း</label>
                                                    </div>

                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ခ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                    </div>

                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ဂ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                    </div>

                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ဃ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>စာမေးပွဲကျရှုံးခြင်း</label>
                                                    </div>

                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(င)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                    </div>
                                                </div>

                                                <!-- <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-8 col-form-label">{{ __('အပိုဒ် ၁ ပါ(ခ)/(ဂ)/(ဃ)/(င) အတွက်') }}</label>
                                                </div> -->
                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                   <label class="col-md-4 col-form-label">{{ __('တက်ရောက်မယ်သင်တန်း') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="part_no_self" class="form-control course_name" disabled placeholder="အပိုင်း" id="" required>

                                                    </div>

                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>

                                                    <label class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                            <input type="text" name="batch_no_private" class="form-control batch_no" disabled placeholder="သင်တန်းအမှတ်စဥ်" id="" required>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="personal_no_self" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" required>

                                                    </div>
                                                </div>

                                                {{--<div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                </div>--}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_ss">{{ __('Submit') }}</button>
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



                <!-- Exam form Feedback  -->
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">

                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div class="exam_feedback" style="display:none; margin-top:5%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body exam_text">

                        </div>
                    </div>
                </div>




    </div>

    <br/></br/>
</div>


<!-- MAC -->
<form method="post" class="needs-validation" action="javascript:createMac();" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="modal fade" id="macModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(MAC) Form Fee - ****** MMK</h4>
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
<form method="post" class="needs-validation" action="javascript:createPrivateSchool();" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="modal fade" id="privateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(Private School) Form Fee - ****** MMK</h4>
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
<form method="post" class="needs-validation" action="javascript:createSelfStudy();" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="modal fade" id="selfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(Self Study) Form Fee - ****** MMK</h4>
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
    $('document').ready(function(){
        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);

        selectedRegistration(urlParams.get("study_type"));

        get_student_info(student_id).then(data => {
            console.log(">>>",data.data)
            if(data){
                let current_stu_course = data.data.student_course_regs.slice(-1);
                console.log(current_stu_course)

                $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                $('.course_name').val(current_stu_course[0].batch.course.name);
                $('.batch_no').val(current_stu_course[0].batch.number);

        }

        })

    })
    loadCourse();
    loadExam();
    reg_feedback();

    $("input[name='mac_date']").flatpickr({
        enableTime: false,
        dateFormat: "d-m-Y",
    });

</script>
<script>
    $( "#submit_btn_mac" ).click(function() {
        if(allFilled('#da_mac_form')){
            $('#macModal').modal('show');
        }
        else{
        }
    });
    $( "#submit_btn_ss" ).click(function() {
        if(allFilled('#self_study_form')){
            $('#selfModal').modal('show');
        }
        else{
        }
    });
    $( "#submit_btn_pp" ).click(function() {
        if(allFilled('#da_private_school_form')){
            $('#privateModal').modal('show');
        }
        else{
        }
    });
    function allFilled(form_id) {
        var filled = true;
        $(form_id+' input').each(function() {
            if($(this).val() == ''  ) filled = false;
            //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
        });
        return filled;
    }

    //MAC
    $('#mac_btn').click(function () {
        setTimeout(function () {
            $('#macModal').modal('hide');
        }, 1000);
    });

    $('#cash_img_mac').click(function() {
        $('#mac_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#mac_btn').prop('disabled', true);

    //Private School
    $('#private_btn').click(function () {
        setTimeout(function () {
            $('#privateModal').modal('hide');
        }, 1000);
    });

    $('#cash_img_private').click(function() {
        $('#private_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#private_btn').prop('disabled', true);

    //Self Study
    $('#self_btn').click(function () {
        setTimeout(function () {
            $('#selfModal').modal('hide');
        }, 1000);
    });

    $('#cash_img_self').click(function() {
        $('#self_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#self_btn').prop('disabled', true);
</script>

@endpush
