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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA One Exam Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">

            </div>--}}
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">

            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">--}}

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="card-body">
                                    <div class="row mb-5">
                                        <h5 class="card-title text-center fw-bolder">
                                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                            လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းစာမေးပွဲဖြေခွင့်လျှောက်လွှာ<br>
                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                            <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                        </div>
                                    </div>
                                    {{--<form method="post" id="cpa_exam_register" enctype="multipart/form-data">--}}
                                    <form  method="post" action="javascript:void();"  id="cpa_exam_form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="form_type" class="form-control" name="form_type">
                                        <input type="hidden" name="is_private" id="is_private" class="form-control">
                                            <div class="col-md-12 mt-3">

                                                <div class="row">
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
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;" readonly>
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
                                                    </div>

                                                    <div class="col-md-4 text-center">
                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image" id="previewImg">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>
                                                            
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control"
                                                            value="{{ old('race') }}"  readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" id="religion" name="religion"
                                                            class="form-control" value="{{ old('religion') }}" readonly="" >
                                                    </div>
                                                </div> 

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="" >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="current_address" id="current_address" class="form-control"  readonly>
                                                    </div>
                                                </div>                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="address" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" id="phone" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" disabled >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name" id="name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" id="position" class="form-control" readonly>
                                                    </div>
                                                </div>                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" id="department" class="form-control" readonly>
                                                    </div>
                                                </div>                                               

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>အဖွဲ့အစည်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" id="organization" class="form-control" readonly>
                                                    </div>
                                                </div>                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>ကုမ္ပဏီအမည်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" id="company_name" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>လစာနှင့်လစာနှုန်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary" class="form-control" readonly>
                                                    </div>
                                                </div>                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၇။') }}</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes"
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
                                                                                            class="form-check-input mr-3" id="no"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left" style="padding-left: 113px;">{{ __('(က)') }}</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
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
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၈။') }}</span>တက္ကသိုလ်တစ်ခုခုမှအောင်မြင်ပြီးခဲ့သော - </label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left: 113px;">{{ __('(က)') }}</span>တက္ကသိုလ်အမည်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name" id="university_name" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left: 113px;">{{ __('(ခ)') }}</span>ဘွဲ့အမည်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" id="degree_name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left: 113px;">{{ __('(ဂ)') }}</span>နှစ်၊လ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date" id="qualified_date" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left: 113px;">{{ __('(ဃ)') }}</span>ခုံအမှတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ခုံအမှတ်" name="roll_number" id="roll_number" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-4 col-form-label label_align_right"><span class="pull-left">{{ __('၁၉။') }}</span>သင်တန်းတက်ရောက်သည့်နေရာ </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="attend_place" id="attend_place" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" >{{ __('၂၀။') }}</span>ယခုဖြေဆိုမည့် Module -</label>
                                                
                                                    <div class="row col-md-8 py-2" style="padding-left: 35px;">
                                                        <div class="col-md-4 form-check-radio">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" 
                                                                        id="module1" name="is_full_module" value="1"  >
                                                                <span class="form-check-sign"></span>
                                                                Module 1
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4 form-check-radio">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio"
                                                                        id="module2" name="is_full_module" value="2" >
                                                                <span class="form-check-sign"></span>
                                                                Module 2
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4 form-check-radio">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio"
                                                                        id="allmodule" name="is_full_module" value="3" >
                                                                <span class="form-check-sign"></span>
                                                                All Modules
                                                            </label>
                                                        </div>
                                                        <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-4 col-form-label label_align_right"><span class="pull-left">{{ __('၂၁။') }}</span>ဖြေဆိုမည့်စာဖြေဌာန</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <select class="form-control form-select" name="exam_department" id="exam_department" required >
                                                                <option value="" disabled selected>ဖြေဆိုမည့်စာဖြေဌာန ရွေးချယ်ပါ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"
                                                            id="cpa1_label1">{{ __('၂၂။') }}</label>
                                                        <label
                                                            class="col-md-3 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <select  class="form-control form-select"
                                                                    name="private_school_name" id="selected_school_id"
                                                                    style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                {{--<div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" id="cpa1_label1">{{ __('၂၂။') }}</span>ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" id="selected_school_id" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>--}}

                                                {{--<div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၂။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်</label>
                                                            </div>
                                                        </div>

                                                </div>--}}

                                                <div id="last_exam_data">
                                                    <div class="row mb-3">
                                                        <!-- စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ -->
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left" id="cpa1_label2">၂၁။</span>
                                                            <span class="pull-left" style="padding-left: 90px;">{{ __('(က)') }}</span>နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်</label>
                                                        <div class="col-md-8">
                                                                <input type="text" id="last_ans_exam_no" name="last_ans_exam_no" class="form-control" placeholder="နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်"  >

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left" style="padding-left: 113px;">{{ __('(ခ)') }}</span>ကျင်းပသည့် ခုနှစ်/လ</label>
                                                        <div class="col-md-8">
                                                                <input type="text" id="date" name="date" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" >

                                                        </div>

                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-12 col-form-label"><span class="pull-left" style="margin-right: 40px;padding-left: 113px;">{{ __('(ဂ)') }}</span>အဆိုပါစာမေးပွဲအောင်မြင်ခဲ့သည့် Moduleရှိပါက ဆိုင်ရာအကွက်တွင်အမှတ်အသားပြုရန် - </label>
                                                    </div>

                                                    <div class="row mb-3" style="padding-left: 382px;">                                                    
                                                        <div class="row col-md-8">
                                                            <div class="col-md-4 form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"  name="last_ans_module[]"  value="Module 1">
                                                                    <span class="form-check-sign"></span>
                                                                    Module 1
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"  name="last_ans_module[]"  value="Module 2">
                                                                    <span class="form-check-sign"></span>
                                                                    Module 2
                                                                </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--<div class="row">
                                                        <!-- <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၃။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-5 mt-3">
                                                            <div class="">
                                                                <input type="hidden" id="invoice_image" class="form-control"  name="invoice_image" required="" value="invoice_image">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" style="display:none;">
                                                        <div class="col-md-1">

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">ရက်စွဲ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="single-form">
                                                                <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>

                                                </div><br/>--}}

                                                <div class="row">



                                                </div>

                                                <div class="row mb-3 mt-3">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" onchange="$('#cpa_exam_submit').prop('disabled', !this.checked)">
                                                            <span class="form-check-sign"></span>
                                                            <p class="fw-bolder">
                                                                * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ကြောင်းဝန်ခံပါသည်။<br>
                                                                
                                                            </p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="cpa_exam_submit">{{ __('Submit') }}</button>
                                                    
                                                </div><br/>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>
    <!-- Modal Payment -->
<form  id="cpa_exam_register"   method="post"  class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Exam Registeration Form Fee - ****** MMK</h4>
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
                                     data-value="CASH" name="payment_method" id="cash_img">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="cpa_exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                        </center>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>
    <!-- JavaScript Section -->
@endsection
@push('scripts')
<script src="{{ asset('js/form_validation/cpa_one_exam_reg_validation.js') }}"></script>
<style>
    .profile-style {
        width: 170px !important;
        height: 190px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function (e) {
        $('#form_type').val(localStorage.getItem('course_id'));
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
        });
        $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
        });


        var boo = localStorage.getItem("isPrivateSchool");
        $('#is_private').val(boo);
        if (boo == "true") {
            if (document.getElementById('is_private_school')) {
                document.getElementById('is_private_school').style.display = 'block';
                document.getElementById('cpa1_label1').innerHTML = "၂၂။";
                document.getElementById('cpa1_label2').innerHTML = "၂၃။";
            }
        } else {
            if (document.getElementById('is_private_school')) {
                document.getElementById('is_private_school').style.display = 'none';
                document.getElementById('cpa1_label2').innerHTML = "၂၂။";
            }
        }

        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);

        selectedRegistration(urlParams.get("study_type"));
// console.log("study_type",selectedRegistration(urlParams.get("study_type")));
        get_student_info(student_id).then(data => {
           var student_info = data.data ;
        //    console.log('student_info',student_info);
            let current_stu_course = data.data.student_course_regs.slice(-1);
            $(".batch_number").append(current_stu_course[0].batch.number);
           if(student_info.acca_cima){
               $('#last_exam_data').hide();

           }else{
            $('#last_exam_data').show();
           }

            let current_stu_reg=student_info.student_register.slice(-1);

            if(current_stu_reg[0].module=="1"){
                    $("#module1").prop("checked", true);
            }
            else if(current_stu_reg[0].module=="2"){
                $("#module2").prop("checked", true);
            }
            else if(current_stu_reg[0].module=="3"){
                $("#allmodule").prop("checked", true);
            }

            if(student_info.gov_staff==0){
                $("#no").prop("checked", true);
            }else{
                $("#yes").prop("checked", true);
                $("#rec_letter").css("display",'block');
                if(student_info.recommend_letter!=null){
                    $(".recommend_letter").append("<a href='"+BASE_URL+student_info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                }
            }

            if(student_info.student_register[0].type == 0){
                $("input[name='attend_place']").val("ကိုယ်ပိုင်လေ့လာသင်ယူမည့်သူများ");
            }else if(student_info.student_register[0].type == 1){
                $("input[name='attend_place']").val("ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်း");
            }else if(student_info.student_register[0].type == 2 && student_info.student_course_regs[0].mac_type == 1){

                $("input[name='attend_place']").val("ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး(ရန်ကုန်သင်တန်းကျောင်း)");
            }else {
                $("input[name='attend_place']").val("ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး(နေပြည်တော်သင်တန်းကျောင်း)");
            }

            let exam_registers = student_info.exam_registers.slice(-1);

            if(data){
                // console.log('data',data);
                document.getElementById('previewImg').src = BASE_URL + data.data.image;
                $("input[name='name_mm']").val(data.data.name_mm);
                $("input[name='name_eng']").val(data.data.name_eng);
                $("input[name='nrc_state_region']").val(data.data.nrc_state_region);
                $("input[name='nrc_township']").val(data.data.nrc_township);
                $("input[name='nrc_citizen']").val(data.data.nrc_citizen);
                $("input[name='nrc_number']").val(data.data.nrc_number);
                $("input[name='father_name_mm']").val(data.data.father_name_mm);
                $("input[name='father_name_eng']").val(data.data.father_name_eng);
                $("input[name='race']").val(data.data.race);
                $("input[name='religion']").val(data.data.religion);
                $("input[name='date_of_birth']").val(data.data.date_of_birth);
                $("input[name='name']").val(data.data.student_job.name);
                $("input[name='position']").val(data.data.student_job.position);
                $("input[name='department']").val(data.data.student_job.department);
                $("input[name='organization']").val(data.data.student_job.organization);
                $("input[name='company_name']").val(data.data.student_job.company_name);
                $("input[name='salary']").val(data.data.student_job.salary);
                $("input[name='office_address']").val(data.data.student_job.office_address);
                $("input[name='current_address']").val(data.data.current_address);
                $("input[name='address']").val(data.data.address);
                $("input[name='phone']").val(data.data.phone);

                $("input[name='university_name']").val(data.data.student_education_histroy.university_name);
                $("input[name='degree_name']").val(data.data.student_education_histroy.degree_name);
                $("input[name='roll_number']").val(data.data.student_education_histroy.roll_number);
                $("input[name='qualified_date']").val(data.data.student_education_histroy.qualified_date);

                // $("input[name='private_school_name']").val(data.data.student_register[0].private_school_name);

                $("#last_ans_exam_no").val(exam_registers[0].batch.number);
                $("#date").val(formatDate(exam_registers[0].updated_at));

                

            }

        })

    });
    loadExamDepartment();
    loadSchoolList();
</script>
<script>
    // $( "#cpa_exam_submit" ).click(function() {
    //     if(allFilled('#cpa_exam_form')){
    //         $('#paymentModal').modal('show');
    //     }
    //     else{
    //     }
    // });
    // function allFilled(form_id) {
    //     var filled = true;
    //     $(form_id+' input').each(function() {
    //       if($(this).attr('id')=="date" && $(this).val() == '')
    //       {  filled = false;  }
    //       if($(this).attr('id')=="last_ans_exam_no" && $(this).val() == '')
    //       {  filled = false;  }
    //     });
    //     return filled;
    // }
    $('#cpa_exam_btn').click(function () {
        setTimeout(function () {
            $('#paymentModal').modal('hide');
        }, 1000);
    });

    $('#cash_img').click(function() {
        $('#cpa_exam_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa_exam_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa_exam_btn').prop('disabled', true);
    });
    $('#cpa_exam_btn').prop('disabled', true);
</script>
@endpush
