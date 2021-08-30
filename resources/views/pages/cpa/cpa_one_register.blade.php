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

        <!-- Header Section Start -->
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
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
                    <h2 class="title">CPA Registration  <span>Form</span></h2>
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
        <div class="section section-padding">
            <div class="container">
                    {{-- <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">
                        
                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your CPA 1 Registration Form need to prepare.Please update your form  
                                </p>
                        </div>
                    </div>
                    </div>
                    <div class="check_registration" style="display:none;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body">
                                <p class="card-text">Your CPA 1 Registration Form is checking</p>
                            </div>
                        </div>
                    </div>
                    <div class="approve" style="display:none;">
                        <table width="100%">
                            <tr>
                                <td width="75%">
                                    <div class="card text-white bg-primary my-3">
                                        
                                        <div class="card-body">
                                            <p class="card-text">You have the opportunity to attend the training  </p>
                                            
                                            
                                        </div>
                                    </div>
                                </td>
                                <td width="25%">
                                    <div class="card text-white bg-primary my-3" id="aa_form" style="display:none;">
                                        
                                        <div class="card-body">
                                            <p id="aa" style="text-align:center;"></p>
                                            
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body add_exam">
                                
                            
                            </div>
                        </div>
                    </div> --}}
            
                <div class="comment-form study" style="display:none;">
                                            
                
                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <!-- <div class="card border-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                            <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{url('cpa_one_mac')}}">
                                    <div class="card border-success mb-3">
                                        <div class="card-body col-md-12"  style="height:100px;">
                                            <h6 class="card-title text-center">MAC</h6> 
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{url('cpa_one_self_study')}}">
                                        <div class="card border-success mb-3" >
                                            <div class="card-body"  style="height:100px;">
                                                <h6 class="card-title text-center">ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ</h6>                                      
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-md-4">
                                <a href="{{url('cpa_one_private_school')}}">
                                    <div class="card border-success mb-3">
                                        <div class="card-body" style="height:100px;">
                                            <h6 class="card-title text-center">Private School</h6>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                        <div class="row" id="private_school_container">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                                    <h5 class="card-title text-center">(ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5>
                                                </div>
                                            </div>
                                            <br/>

                                        </div>
                                    </div>

                                    <form class="needs-validation" method="post" action="javascript:Private_School_Submit();" enctype="multipart/form-data" novalidate>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၁။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <input type="text" id="private_school_name" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('ပညာသင်နှစ်') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <input type="text" id="academic_year" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၃။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <input type="text" id="direct_access_no" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၄။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <input type="text" id="entry_success_no" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div><br/>
                                                                        
                                        <div class="row">
                                            <div class="col-md-1">

                                                    <label class="col-form-label">{{ _('၅။') }}</label>

                                            </div>
                                            <div class="col-md-5">
                                                    <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့်သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                    <input type="text" class="form-control" id="batch_part_no" value="" required >
                                            </div>
                                        </div><br/>


                                        <div class="row">
                                            <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                            <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_pp" onclick="ConfirmSubmitPP()"></div>
                                            <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                        </div><br/>

                                        <div class="row mb-3">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" disabled>Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                        <div class="row" id="self_study_container">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                                    <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                                </div>
                                            </div>

                                        </div>

                                        </div>
                                    </div>
                                    <form id="cpa_one_self_study_form" class="needs-validation" method="post" action="javascript:Self_Study_Submit();" enctype="multipart/form-data" novalidate>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၁။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="col-form-label">{{ _('ပညာသင်နှစ်') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <input type="text" id="academic_year" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(က)</div>
                                            <div class="col-md-9 form-check" style="padding-top:10px">
                                                <input type="checkbox" class="" value="ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း" id="cpa_check" name="reg_reason[]" >
                                                                                        <label class="">{{ _('ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း') }}</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>

                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ _('(၁) တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" id="direct_access_no" class="form-control" value="" required>
                                            </div>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ _('(၂) ဝင်ခွင့်စာမေးပွဲအောင်မြင်သည့် အမှတ်စဥ်') }}</label>

                                            </div>
                                            <div class="col-md-5">
                                                    <input type="text" id="entry_success_no" class="form-control" value="" required >
                                            </div>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ခ)</div>
                                            <div class="col-md-9 form-check" style="padding-top:10px">
                                                                                    <input type="checkbox" class="" value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam" name="reg_reason[]" >
                                                                                    <label class="">{{ _(' သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ဂ)</div>
                                            <div class="col-md-4 form-check" style="padding-top:10px">
                                                                                    <input type="checkbox" class="" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance" name="reg_reason[]" >
                                                                                    <label class="">{{ _(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ဃ)</div>
                                            <div class="col-md-4 form-check" style="padding-top:10px">
                                                <input type="checkbox" class="" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam" name="reg_reason[]" >
                                                                                        <label class="">{{ _(' စာမေးပွဲကျရှုံးခြင်း') }}</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(င) </div>
                                            <div class="col-md-4 form-check" style="padding-top:10px">
                                                <input type="checkbox" class="" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned" name="reg_reason[]" >
                                                                                        <label class="">{{ _('သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2 col-form-label">(စ)</div>
                                            <div class="col-md-4">
                                                    <label class="col-form-label">{{ _('ဖြေဆိုမည့် Module') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input" name="module" value="" id="module1" required>
                                                        <label class="form-check-label">{{ _('Module-1') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input" name="module" value="" id="module2" >
                                                        <label class="form-check-label">{{ _('Module-2') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input" name="module" value="" id="allmodule" >
                                                        <label class="form-check-label">{{ _('All Module') }}</label>
                                                                                                        <div class="invalid-feedback mt-3">ဖြေဆိုမည့် Module ရွေးချယ်ပါ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br/>

                                        <div class="row">
                                            <div class="col-md-1">

                                                    <label class="col-form-label">{{ _('၃။') }}</label>

                                            </div>
                                            <div class="col-md-6">
                                                    <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့်သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                    <input type="text" class="form-control" id="batch_part_no" value="" required >
                                            </div>
                                        </div><br/>



                                        <div class="row">
                                            <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                            <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                            <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                        </div><br/>

                                        <div class="row mb-3">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" form="self_study_form" id="submit_btn_ss" disabled>{{ __('Submit') }}</button>
                                            </div>
                                        </div><br/>
                                    </form>
                                </div>
                            </div>
                
                        </div>
                        
                        <div class="row" id="mac_container">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                                </div>
                                            </div><br/>
                                        </div>
                                    
                                    <div>
                                    <form  method="post" class="needs-validation" action="javascript:Mac_Submit();" enctype="multipart/form-data" novalidate>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ _('၁။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <label class="col-form-label">{{ _('ပညာသင်နှစ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div>
                                                        <input type="text" id="academic_year" class="form-control" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ _('၂။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <label class="col-form-label">{{ _('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div>
                                                        <input type="text" id="direct_access_no" class="form-control" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ _('၃။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <label class="col-form-label">{{ _('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div>
                                                        <input type="text" id="entry_success_no" class="form-control" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ _('၄။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-1 col-form-label">(က)</div>
                                                <div class="col-md-6">
                                                    <label class="col-form-label">{{ _(' သင်တန်းကာလအတွင်း အောက်ပါအတိုင်း အလုပ်သင်ဆင်းလိုပါသည်-') }}</label>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-1">
                                                    <label class="col-form-label">{{ _('(၁)') }}</label>
                                                </div>
                                                <div class="col-md-3" style="padding-top:10px">
                                                    <div class="form-check">
                                                                                                <input type="radio" class="form-check-input" name="internship" value="အစိုးရ ဌာနတွင်" id="gov_department" required >
                                                                                                <label class="form-check-label">{{ _('အစိုးရ ဌာနတွင်') }}</label>
                                                                                            </div>
                                                </div>

                                            </div><br/>

                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-1">
                                                    <label class="col-form-label">{{ _('(၂)') }}</label>
                                                </div>
                                                <div class="col-md-3" style="padding-top:10px">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="internship"  value="ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းတွင်" id="personal_acc_training" required>
                                                        <label class="form-check-label">{{ _('ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းတွင်') }}</label>
                                                    </div>
                                                </div>
                                            </div><br/>

                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2 col-form-label">(ခ)</div>
                                                <div class="col-md-3" style="padding-top:10px">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" value="ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်"  name="internship"  id="after_second_exam" required>
                                                        <label class="form-check-label">{{ _('ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်') }}</label>

                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="col-form-label">{{ _('၅။') }}</label>
                                                </div>
                                                <div class="col-md-10">
                                                        <label class="col-form-label">{{ _('အစိုးရဌာနတွင်အလုပ်သင်ဆင်းလိုကြောင်းအဆိုပြုသူများအတွက် ပူးတွဲတင်ပြရမည့် စာရွက်စာတမ်းများ') }}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-1 col-form-label">(က) </div>
                                                <div class="col-md-5">
                                                    <label class="col-form-label">{{ _('အကျင့်စာရိတ္တကောင်းမွန်ကြောင်းထောက်ခံချက်') }}</label>

                                                </div>
                                                <div class="col-md-5">
                                                        <input type="file" id="good_morale_file" class="form-control" value="" required>
                                                </div>
                                            </div><br/>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-1 col-form-label">(ခ)</div>
                                                <div class="col-md-5">
                                                        <label class="col-form-label">{{ _(' ပြစ်မှုကင်းရှုင်းကြောင်းထောက်ခံချက်') }}</label>

                                                </div>
                                                <div class="col-md-5" >
                                                    <input type="file" class="form-control" value="" id="no_crime_file" required>
                                                </div>
                                            </div>
                                        <br/><br>
                                            <div class="row">
                                                <div class="col-md-1">

                                                        <label class="col-form-label">{{ _('၆။') }}</label>

                                                </div>
                                                <div class="col-md-6">
                                                        <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့်သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                </div>
                                                <div class="col-md-5">
                                                        <input type="text" class="form-control" id="batch_part_no" value="" required>
                                                </div>
                                            </div><br/>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="col-form-label">{{ _('၇။') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                        <label class="col-form-label">{{ _('ဖြေဆိုမည့် Module') }}</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input" type="radio"  name="module" value="1" id="module1" required>
                                                            <label class="form-check-label">{{ _('Module-1') }}</label>
                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input" type="radio" name="module" value="2" id="module2" required>
                                                            <label class="form-check-label">{{ _('Module-2') }}</label>

                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input" type="radio" name="module" value="3" id="allmodule" required>
                                                            <label class="form-check-label">{{ _('All Module') }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>


                                            <div class="row">
                                                <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_mac" onclick="ConfirmSubmitMac()"></div>
                                                <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                            </div><br/>

                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label"></label>
                                                <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 offset-md-5">
                                                    <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac" disabled>{{ __('Submit') }}</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
              
                        </div>

                <!-- Exam Feedback Text -->
                <div class="exam_feedback" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body exam_text">
                            
                        </div>
                    </div>
                </div>
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
 $('document').ready(function(){

        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);
        selectedRegistration(urlParams.get("study_type"))


        $("#cpa_one_self_study_form").submit(function( event ) {
			var fields = $("input[name='reg_reason[]']").serializeArray();
	    if (fields.length === 0)
	    {
	        //alert('nothing selected');
					$("input[name='reg_reason[]']").siblings("label").css('color','red');
	        return false;
	    }
	    else
	    {
				$("input[name='reg_reason[]']").siblings("label").css('color','#212529');
	        //alert(fields.length + " items selected");
	    }

		});

		$("input[name='reg_reason[]']").change(function(){
			$("input[name='reg_reason[]']").siblings("label").css('color','#212529');
		});
	});
        

reg_feedback();
var exam_date=localStorage.getItem("exam_date");
console.log(exam_date)
</script>
@endpush