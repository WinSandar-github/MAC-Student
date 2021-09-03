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
                    <h2 class="title">CPA Two Registration  <span>Form</span></h2>
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
                            <p class="card-text reject">Your CPA 2 Registration Form need to prepare.Please update your form.  
                                </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body">
                            <p class="card-text">Your CPA 2 Registration Form is checking</p>
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
                </div> --}}
            
                <div class="comment-form study" style="display:none;">
                                            
                
                    <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <!-- <div class="card border-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                            <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{url('cpa_two_mac',request('id'))}}">
                                    <div class="card border-success mb-3">
                                        <div class="card-body col-md-12"  style="height:100px;">
                                            <h6 class="card-title text-center">MAC</h6> 
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('cpa_two_self_study',request('id'))}}">
                                        <div class="card border-success mb-3" >
                                            <div class="card-body"  style="height:100px;">
                                                <h6 class="card-title text-center">ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ</h6>                                      
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-md-4">
                                <a href="{{url('cpa_two_private_school',request('id'))}}">
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
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>

                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>

                                {{--<form class="needs-validation" method="post" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data">--}}
                                <form class="needs-validation" method="post" action="javascript:void();" enctype="multipart/form-data">
                                <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >
                                        <!-- <div class="row ">

                                            <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                            <div class="col-md-5 col-form-label">တက်ရောက်မယ် သင်တန်းအမှတ်စဥ်</div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <label class="col-form-label">{{ _('(က) နှစ်/လ') }}</label>
                                                </div>
                                                                                </div>
                                            <div class="col-md-4"> <div>
                                                    <input type="text" class="form-control" placeholder="mmm/yyyy" id="cpa_one_pass_date" value="" required>
                                            </div></div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4"><div>
                                                    <label class="col-form-label">{{ _('(ခ) ကိုယ်ပိုင်အမှတ်') }}</label>
                                            </div></div>
                                            <div class="col-md-4"><div>
                                                    <input type="text" class="form-control" id="cpa_one_access_no" value="" required>
                                            </div></div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4"><div>
                                                    <label class="col-form-label">{{ _('(ဂ) အဆင့်') }}</label>
                                            </div></div>
                                            <div class="col-md-4"><div>
                                                    <input type="text" class="form-control" id="cpa_one_success_no" value="" required>
                                            </div></div>
                                        </div>
                                                                        <br/>

                                        <div class="row mb-3">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၃။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့် သင်တန်းအမှတ်စဥ်/အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                    <input type="text" class="form-control" id="batch_part_no" value="" required>
                                            </div>
                                        </div> -->

                                        <div class="row mt-3">

                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        
                                    </div>
                                    <div class="col-md-11">
                                            <label class="col-form-label">{{ _('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ဒုတိယပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
										<div>
                                    		<label class="col-form-label">{{ _('(က) နှစ်/လ') }}</label>
                                    	</div>
									</div>
                                    <div class="col-md-5"> 
                                            <input type="text" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date" value="" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('(ခ) ကိုယ်ပိုင်အမှတ်') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                            <input type="text" class="form-control" id="cpa_one_access_no" value="" placeholder="ကိုယ်ပိုင်အမှတ်" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5"><div>
                                            <label class="col-form-label">{{ _('(ဂ) အဆင့်') }}</label>
                                    </div></div>
                                    <div class="col-md-5"><div>
                                            <input type="text" class="form-control" id="cpa_one_success_no" value="" placeholder="အဆင့်" required>
                                    </div></div>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" >
                                    
                                    </div>
                                </div>

                                        <div class="row">
                                            <div class="col-md-2 offset-md-5">
                                                {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal1">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
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
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                                <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>      
                                </div>
                                
                                {{--<form  method="post" action="javascript:CPA2_Self_Study_Submit();" enctype="multipart/form-data">--}}
                                <form  method="post" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >
                                        <!-- <div class="row ">
                                                                
                                            <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                            <div class="col-md-6 col-form-label">တက်ရောက်မယ် သင်တန်းအမှတ်စဥ်</div>
                                            <div class="col-md-5    ">
                                                <div class="single-form">
                                                    <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(က) </div>
                                            <div class="col-md-1" style="padding-top:10px">
                                                <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam"  name="reg_reason[]">
                                            </div>
                                            <div class="col-md-9">
                                                    <label class="col-form-label">{{ _('သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>
                                            
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ခ)</div>
                                            <div class="col-md-1" style="padding-top:10px">
                                                <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance"  name="reg_reason[]">
                                            </div>
                                            <div class="col-md-9">
                                                    <label class="col-form-label">{{ _(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>
                                            
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ဂ)</div>
                                            <div class="col-md-1" style="padding-top:10px">
                                                <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam"  name="reg_reason[]">
                                            </div>
                                            <div class="col-md-9">
                                                    <label class="col-form-label">{{ _(' စာမေးပွဲကျရှုံးခြင်း') }}</label>                                   
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(ဃ)</div>
                                            <div class="col-md-1" style="padding-top:10px">
                                                <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned"  name="reg_reason[]">
                                            </div>
                                            <div class="col-md-9">
                                                <label class="col-form-label">{{ _(' သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>                                   
                                            </div>
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-1">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('၃။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့် သင်တန်းအမှတ်စဥ်/အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-5 single-form mt-2">
                                                    <input type="text" class="form-control" id="batch_part_no" value="" >
                                            </div>
                                        </div> -->

                                        <div class="row mb-3 mt-3">
                                                        
                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                    <div class="col-md-6 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                    <div class="col-md-5    ">
                                            <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        
                                    </div>
                                    <div class="col-md-11">
                                            <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က) </div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ _('သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ခ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ _(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဂ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ _(' စာမေးပွဲကျရှုံးခြင်း') }}</label>                                   
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဃ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                        <label class="col-form-label">{{ _(' သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>                                   
                                    </div>
                                    
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('အပိုင်း') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" >
                                    
                                    </div>
                                </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-2 offset-md-5">
                                                {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal2">Submit
                                                </button>
                                            </div> 
                                        </div>
                                    </fieldset>
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
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                            
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>
                                {{--<form  method="post" class="needs-validation" novalidate action="javascript:CPA2_Mac_Submit();" enctype="multipart/form-data" >--}}
                                <form  method="post" class="needs-validation" novalidate action="javascript:void();" enctype="multipart/form-data" >
                                    <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >
                                        <!-- <div class="row ">

                                            <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                            <div class="col-md-5 col-form-label">တက်ရောက်မယ် သင်တန်းအမှတ်စဥ်</div>
                                            <div class="col-md-4">
                                                <div class="single-form">
                                                    <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div>
                                                    <label class="col-form-label">{{ _('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4"><div>
                                                    <label class="col-form-label">{{ _('(က) နှစ်/လ') }}</label>
                                            </div></div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <input type="text" class="form-control" placeholder="mmm/yyyy" id="cpa_one_pass_date" value="" required>
                                                </div>
                                                                            </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <label class="col-form-label">{{ _('(ခ) ကိုယ်ပိုင်အမှတ်') }}</label>
                                                </div>
                                                                                </div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <input type="text" class="form-control" id="cpa_one_access_no" value="" required>
                                                </div>
                                                                                </div>
                                        </div>
                                                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <label class="col-form-label">{{ _('(ဂ) အဆင့်') }}</label>
                                                </div>
                                                                                </div>
                                            <div class="col-md-4">
                                                                                    <div>
                                                    <input type="text" class="form-control" id="cpa_one_success_no" value="" required>
                                                </div>
                                                                                </div>
                                        </div>
                                                                        <br>
                                        <div class="row mb-3">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ _('၃။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့် သင်တန်းအမှတ်စဥ်/အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                    <input type="text" class="form-control" id="batch_part_no" value="" >
                                            </div>
                                        </div>
                                                                        <br> -->

                                <div class="row mb-3 mt-3">

                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                    <div class="col-md-5">
                                            <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div>
                                            <label class="col-form-label">{{ _('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ဒုတိယပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5"><div>
                                            <label class="col-form-label">{{ _('(က) နှစ်/လ') }}</label>
                                    </div></div>
                                    <div class="col-md-5">
										<div>
	                                         <input type="text" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date" value="" required>
	                                    </div>
									</div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
										<div>
	                                        <label class="col-form-label">{{ _('(ခ) ကိုယ်ပိုင်အမှတ်') }}</label>
	                                    </div>
									</div>
                                    <div class="col-md-5">
										<div>
	                                        <input type="text" class="form-control" id="cpa_one_access_no" placeholder="ကိုယ်ပိုင်အမှတ်" value="" required>
	                                    </div>
									</div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
										<div>
	                                         <label class="col-form-label">{{ _('(ဂ) အဆင့်') }}</label>
	                                    </div>
									</div>
                                    <div class="col-md-5">
										<div>
	                                         <input type="text" class="form-control" id="cpa_one_success_no" placeholder="အဆင့်" value="" required>
	                                    </div>
									</div>
                                </div><br>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" >
                                    
                                    </div>
                                </div>
                                        <div class="row mb-3">
                                            <div class="col-md-2 offset-md-5">
                                                {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal3">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
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

    <!-- PRIVATE -->
     <form method="post" class="needs-validation" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div><br>
               <div class="modal-body">
                   <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" name="payment_method">
                            </div><br>
                            <h5>CBPay</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" name="payment_method">
                            </div><br>
                            <h5>MPU</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" name="payment_method">
                            </div><br>
                            <h5>CASH</h5>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                    </div>
               </div><br>
               <div class="modal-footer">
                 <center>
                     <button type="submit" id="btn1" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal">Submit 
                 </center>
               </div>
             </div>
           </div>
         </div>
     </form>

     <!-- SELF -->
      <form method="post" class="needs-validation" action="javascript:CPA2_Self_Study_Submit();" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div><br>
               <div class="modal-body">
                   <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" name="payment_method">
                            </div><br>
                            <h5>CBPay</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" name="payment_method">
                            </div><br>
                            <h5>MPU</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" name="payment_method">
                            </div><br>
                            <h5>CASH</h5>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                    </div>
               </div><br>
               <div class="modal-footer">
                 <center>
                     <button type="submit" id="btn2" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal">Submit 
                 </center>
               </div>
             </div>
           </div>
         </div>
     </form>

      <!-- MAC -->
       <form method="post" class="needs-validation" action="javascript:CPA2_Mac_Submit();" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div><br>
               <div class="modal-body">
                   <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" name="payment_method">
                            </div><br>
                            <h5>CBPay</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" name="payment_method">
                            </div><br>
                            <h5>MPU</h5>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto'> 
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" name="payment_method" id="channel">
                            </div><br>
                            <h5>CASH</h5>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                    </div>
               </div><br>
               {{--<div class="modal-footer">
                 <center>
                     <button type="submit" id="btn3" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal">Submit 
                 </center>
               </div>--}}
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
reg_feedback();
var exam_date=localStorage.getItem("exam_date");
console.log(exam_date)

// $('#btn1').click(function() {
//     setTimeout(function() {$('#exampleModal1').modal('hide');}, 1000);
// });

// $('#btn2').click(function() {
//     setTimeout(function() {$('#exampleModal2').modal('hide');}, 1000);
// });

// $('#btn3').click(function() {
//     setTimeout(function() {$('#exampleModal3').modal('hide');}, 1000);
// });

</script>
@endpush