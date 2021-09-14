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
                                                <h5 class="card-title text-center">(ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5></br>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>

                                {{--<form class="needs-validation" method="post" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data">--}}
                                <form class="needs-validation" id="cpa2_private_form" method="post" action="javascript:void();" enctype="multipart/form-data">
                                <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row mb-3 mt-3">

                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                            <input type="text" id="batch_name" name="batch_name" class="form-control" readonly value="{{$batch['name']}}">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('၂။') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 label_align_right">
                                                        <div>
                                                            <label>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-12 mb-2">
                                                            <div>
                                                                <input type="text" readonly placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control name_mm" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div>
                                                                <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control name_eng" value="{{ old('name_eng') }}"  required="">
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('၃။') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 label_align_right">
                                                        <div>
                                                            <label>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_state_region" name="nrc_state_region" id="nrc_state_region">
                                                                        @foreach($nrc_regions as $region)
                                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_township" name="nrc_township" id="nrc_township">
                                                                        @foreach($nrc_townships as $township)
                                                                            <option value="{{ $township['township_mm'] }}">
                                                                                {{ $township['township_mm'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <select disabled class="form-control nrc_citizen" name="nrc_citizen" id="nrc_citizen" >
                                                                        @foreach($nrc_citizens as $citizen)
                                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input disabled type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                            id="nrc_number" pattern=".{6,6}" class="form-control nrc_number"
                                                                            oninput="this.value= en2mm(this.value);"
                                                                            maxlength="6" minlength="6" placeholder=""
                                                                            style="height: 38px" value="{{ old('nrc_number') }}"
                                                                            required>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div><br>




                                            </div>
                                            <div class="col-md-4">
                                                    <div class="col-md-7 pull-right">
                                                        <img class="col-md-3 profile-style previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                        <p class="mt-2">
                                                        <!-- <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                            value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                        </p>
                                                        <div class="form-text mb-2">Allowed Jpeg and Png Image.</div> -->
                                                    </div>
                                                </div>
                                        </div>
                                    </div>


                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၄။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control father_name_mm" value="{{ old('father_name_mm') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control father_name_eng" id="father_name_eng" value="{{ old('father_name_eng') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>လူမျိူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="လူမျိူး" name="race" class="form-control race" value="{{ old('race') }}" required="" id="race">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ကိုးကွယ်သည့် ဘာသာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion" class="form-control religion" value="{{ old('religion') }}" required="" id="religion">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __(' ၇။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>မွေးသက္ကရာဇ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" name="date_of_birth date_of_birth" readonly class="form-control date_of_birth" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  id="date_of_birth"  required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၈။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရာထူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရာထူး" name="position" id="position" class="form-control position" value="{{ old('position') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၉။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ဌာန</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဌာန" name="department" id="department" class="form-control department" value="{{ old('department') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၀။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရုံးလိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control office_address" value="{{ old('office_address') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၁။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="radio" disabled id="yes_private" class="form-check-input" value="1" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">ဟုတ်</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <input type="radio" disabled id="no_private" class="form-check-input no" value="0" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">မဟုတ်</label>
                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br/>

                                 <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၂။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control current_address" value="{{ old('current_address') }}" required="" id="current_address">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၃။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="နေရပ်လိပ်စာ" name="address" class="form-control address" value="{{ old('address') }}" required="" id="address">
                                        </div>
                                    </div>
                                </div><br>







                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ဖုန်းနံပါတ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone" id="phone" class="form-control phone" value="{{ old('phone') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="email" id="email" readonly placeholder="Enter your Email address!" name="email" class="form-control email" value="{{ old('email') }}" required="">
                                        </div>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Education</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="text" readonly  id="education"  name="education" class="form-control education" value="{{ old('education') }}" required="">
                                        </div>

                                    </div>
                                </div><br>





                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div>
                                            <label class="col-form-label">{{ __('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-2 label_align_right">
                                            <label class="col-form-label">{{ __(' နှစ်/လ') }}</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                             <input type="text" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date" value="" required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-2 label_align_right">

                                            <label class="col-form-label">{{ __(' ကိုယ်ပိုင်အမှတ်') }}</label>

                                    </div>
                                    <div class="col-md-8">

                                            <input type="text" class="form-control" id="cpa_one_access_no" placeholder="ကိုယ်ပိုင်အမှတ်" value="" required>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-2 label_align_right">

                                             <label class="col-form-label">{{ __('အဆင့်') }}</label>

                                    </div>
                                    <div class="col-md-8">

                                             <input type="text" class="form-control" id="cpa_one_success_no" placeholder="အဆင့်" value="" required>

                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 label_align_right  col-form-label">{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_part_no" class="form-control course_name" placeholder="အပိုင်း" id="part_no_mac" required="">

                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_no" class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" required="">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" required="">

                                    </div>
                                </div>


                                        <div class="row">
                                            <div class="col-md-2 offset-md-5">
                                                {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                                <button type="submit" id="cpa2_private" value="submit" class="btn btn-success btn-hover-dark w-100">Submit
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
                                <form  method="post" id="cpa2_self_form" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >


                                    <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row mb-3 mt-3">

                                                <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                <div class="col-md-6">
                                                        <input type="text" id="batch_name" name="batch_name" class="form-control" readonly value="{{$batch['name']}}">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('၂။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 label_align_right">
                                                    <div>
                                                        <label>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-12 mb-2">
                                                        <div>
                                                            <input type="text" readonly placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control name_mm" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div>
                                                            <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control name_eng" value="{{ old('name_eng') }}"  required="">
                                                        </div>
                                                    </div>

                                                </div>


                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('၃။') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 label_align_right">
                                                    <div>
                                                        <label>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div>
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <select disabled class="form-control nrc_state_region" name="nrc_state_region" id="nrc_state_region">
                                                                    @foreach($nrc_regions as $region)
                                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <select disabled class="form-control nrc_township" name="nrc_township" id="nrc_township">
                                                                    @foreach($nrc_townships as $township)
                                                                        <option value="{{ $township['township_mm'] }}">
                                                                            {{ $township['township_mm'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <select disabled class="form-control nrc_citizen" name="nrc_citizen" id="nrc_citizen" >
                                                                    @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input disabled type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                        id="nrc_number" pattern=".{6,6}" class="form-control nrc_number"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px" value="{{ old('nrc_number') }}"
                                                                        required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><br>




                                        </div>
                                        <div class="col-md-4">
                                                <div class="col-md-7 pull-right">
                                                    <img class="col-md-3 profile-style previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                    <p class="mt-2">
                                                    <!-- <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                        value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                    </p>
                                                    <div class="form-text mb-2">Allowed Jpeg and Png Image.</div> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၄။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control father_name_mm" value="{{ old('father_name_mm') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control father_name_eng" id="father_name_eng" value="{{ old('father_name_eng') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>လူမျိူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="လူမျိူး" name="race" class="form-control race" value="{{ old('race') }}" required="" id="race">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ကိုးကွယ်သည့် ဘာသာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion" class="form-control religion" value="{{ old('religion') }}" required="" id="religion">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __(' ၇။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>မွေးသက္ကရာဇ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" name="date_of_birth date_of_birth" readonly class="form-control date_of_birth" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  id="date_of_birth"  required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၈။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရာထူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရာထူး" name="position" id="position" class="form-control position" value="{{ old('position') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၉။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ဌာန</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဌာန" name="department" id="department" class="form-control department" value="{{ old('department') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၀။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရုံးလိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control office_address" value="{{ old('office_address') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၁။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="radio" disabled id="yes_self" class="form-check-input" value="1" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">ဟုတ်</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <input type="radio" disabled id="no_self" class="form-check-input no" value="0" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">မဟုတ်</label>
                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br/>

                                 <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၂။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control current_address" value="{{ old('current_address') }}" required="" id="current_address">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၃။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="နေရပ်လိပ်စာ" name="address" class="form-control address" value="{{ old('address') }}" required="" id="address">
                                        </div>
                                    </div>
                                </div><br>







                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ဖုန်းနံပါတ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone" id="phone" class="form-control phone" value="{{ old('phone') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="email" id="email" readonly placeholder="Enter your Email address!" name="email" class="form-control email" value="{{ old('email') }}" required="">
                                        </div>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Education</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="text" readonly  id="education"  name="education" class="form-control education" value="{{ old('education') }}" required="">
                                        </div>

                                    </div>
                                </div><br>





                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="col-form-label">{{ __('၁၇။') }}</label>

                                    </div>
                                    <div class="col-md-11">
                                            <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က) </div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ __('သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ခ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ __(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဂ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                            <label class="col-form-label">{{ __(' စာမေးပွဲကျရှုံးခြင်း') }}</label>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဃ)</div>
                                    <div class="col-md-1" style="padding-top:10px">
                                        <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned"  name="reg_reason[]">
                                    </div>
                                    <div class="col-md-9">
                                        <label class="col-form-label">{{ __(' သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 label_align_right  col-form-label">{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_part_no" class="form-control course_name" placeholder="အပိုင်း" id="part_no_mac" required="">

                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_no" class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" required="">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" required="">

                                    </div>
                                </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2 offset-md-5">
                                                {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                                <button type="submit" id="cpa2_self" value="submit" class="btn btn-success btn-hover-dark w-100">Submit
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
                                <form  method="post" id="cpa2_mac_form" class="needs-validation" novalidate action="javascript:void();" enctype="multipart/form-data" >
                                    <input type="hidden" id="batch_id" name="batch_id" value="{{$batch['id']}}"/>

                                    <fieldset id="fieldset" >

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row mb-3 mt-3">

                                                <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                <div class="col-md-6">
                                                        <input type="text" id="batch_name" name="batch_name" class="form-control" readonly value="{{$batch['name']}}">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('၂။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 label_align_right">
                                                    <div>
                                                        <label>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-12 mb-2">
                                                        <div>
                                                            <input type="text" readonly placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control name_mm" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div>
                                                            <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control name_eng" value="{{ old('name_eng') }}"  required="">
                                                        </div>
                                                    </div>

                                                </div>


                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('၃။') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 label_align_right">
                                                    <div>
                                                        <label>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div>
                                                        <div class="row">

                                                            <div class="col-md-3">
                                                                <select disabled class="form-control nrc_state_region" name="nrc_state_region" id="nrc_state_region">
                                                                    @foreach($nrc_regions as $region)
                                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <select disabled class="form-control nrc_township" name="nrc_township" id="nrc_township">
                                                                    @foreach($nrc_townships as $township)
                                                                        <option value="{{ $township['township_mm'] }}">
                                                                            {{ $township['township_mm'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <select disabled class="form-control nrc_citizen" name="nrc_citizen" id="nrc_citizen" >
                                                                    @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input disabled type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                        id="nrc_number" pattern=".{6,6}" class="form-control nrc_number"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px" value="{{ old('nrc_number') }}"
                                                                        required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><br>




                                        </div>
                                        <div class="col-md-4">
                                                <div class="col-md-7 pull-right">
                                                    <img class="col-md-3 profile-style previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                    <p class="mt-2">
                                                    <!-- <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                        value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                    </p>
                                                    <div class="form-text mb-2">Allowed Jpeg and Png Image.</div> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၄။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control father_name_mm" value="{{ old('father_name_mm') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control father_name_eng" id="father_name_eng" value="{{ old('father_name_eng') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>လူမျိူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="လူမျိူး" name="race" class="form-control race" value="{{ old('race') }}" required="" id="race">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ကိုးကွယ်သည့် ဘာသာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion" class="form-control religion" value="{{ old('religion') }}" required="" id="religion">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __(' ၇။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>မွေးသက္ကရာဇ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" name="date_of_birth date_of_birth" readonly class="form-control date_of_birth" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  id="date_of_birth"  required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၈။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရာထူး</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရာထူး" name="position" id="position" class="form-control position" value="{{ old('position') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၉။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ဌာန</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဌာန" name="department" id="department" class="form-control department" value="{{ old('department') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၀။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label> ရုံးလိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control office_address" value="{{ old('office_address') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၁။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="radio" disabled id="yes_mac" class="form-check-input" value="1" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">ဟုတ်</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-check">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <input type="radio" disabled id="no_mac" class="form-check-input no" value="0" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-check-label" for="">မဟုတ်</label>
                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br/>

                                 <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၂။') }}</label>
                                        </div>
                                    </div>


                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control current_address" value="{{ old('current_address') }}" required="" id="current_address">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၃။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>နေရပ်လိပ်စာ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="နေရပ်လိပ်စာ" name="address" class="form-control address" value="{{ old('address') }}" required="" id="address">
                                        </div>
                                    </div>
                                </div><br>







                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label>{{ __('၁၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label>ဖုန်းနံပါတ်</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone" id="phone" class="form-control phone" value="{{ old('phone') }}" required="">
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၅။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="email" id="email" readonly placeholder="Enter your Email address!" name="email" class="form-control email" value="{{ old('email') }}" required="">
                                        </div>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="">
                                            <label>{{ __('၁၆။') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 label_align_right">
                                            <label>Education</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="text" readonly  id="education"  name="education" class="form-control education" value="{{ old('education') }}" required="">
                                        </div>

                                    </div>
                                </div><br>





                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div>
                                            <label class="col-form-label">{{ __('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-2 label_align_right">
                                            <label class="col-form-label">{{ __(' (နှစ်/လ') }}</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                             <input type="text" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date" value="" required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-2 label_align_right">

                                            <label class="col-form-label">{{ __(' ကိုယ်ပိုင်အမှတ်') }}</label>

                                    </div>
                                    <div class="col-md-8">

                                            <input type="text" class="form-control" id="cpa_one_access_no" placeholder="ကိုယ်ပိုင်အမှတ်" value="" required>

                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-2 label_align_right">

                                             <label class="col-form-label">{{ __('(အဆင့်)') }}</label>

                                    </div>
                                    <div class="col-md-8">

                                             <input type="text" class="form-control" id="cpa_one_success_no" placeholder="အဆင့်" value="" required>

                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 label_align_right  col-form-label">{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_part_no" class="form-control course_name" placeholder="အပိုင်း" id="part_no_mac" required="">

                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input readonly type="text" name="batch_no" class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" required="">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" required="">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                        <button type="submit" id="cpa2_mac" value="submit" class="btn btn-success btn-hover-dark w-100">Submit
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

      <!-- private -->
      <form method="post" class="needs-validation" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data"
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
                                  <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(Private School) Form Fee - ****** MMK</h4>
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
                                  <button type="submit" id="cpa2private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                              </center>
                          </div>
                      </div>
                      <br>
                  </div>
              </div>
          </div>
      </form>


      <!-- self -->
      <form method="post" class="needs-validation" action="javascript:CPA2_Self_Study_Submit();" enctype="multipart/form-data"
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
                                  <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(Self Study) Form Fee - ****** MMK</h4>
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
                                  <button type="submit" id="cpa2self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                              </center>
                          </div>
                      </div>
                      <br>
                  </div>
              </div>
          </div>
      </form>

      <!-- MAC -->
      <form method="post" class="needs-validation" action="javascript:CPA2_Mac_Submit();" enctype="multipart/form-data"
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
                                  <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(MAC) Form Fee - ****** MMK</h4>
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
                                  <button type="submit" id="cpa2mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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


    reg_feedback();
    var exam_date=localStorage.getItem("exam_date");
    console.log(exam_date)

    const queryString = location.search;
    const urlParams = new URLSearchParams(queryString);
    selectedRegistration(urlParams.get("study_type"));


    get_student_info(student_id).then(data => {

            if(data){
                let student_info = data.data;
                let current_stu_course = student_info.student_course_regs.slice(-1);

                $('.name_mm').val(student_info.name_mm);
                $('.name_eng').val(student_info.name_eng);
                $('.nrc_state_region').val(student_info.nrc_state_region);
                $('.nrc_township').val(student_info.nrc_township);
                $('.nrc_citizen').val(student_info.nrc_citizen);
                $('.nrc_number').val(student_info.nrc_number);

                $('.father_name_mm').val(student_info.father_name_mm);
                $('.father_name_eng').val(student_info.father_name_eng);
                $('.race').val(student_info.race);
                $('.religion').val(student_info.religion);
                $('.date_of_birth').val(student_info.date_of_birth);
                $('.position').val(student_info.student_job.position);
                $('.department').val(student_info.student_job.department);
                $('.office_address').val(student_info.student_job.office_address);
                if(student_info.gov_staff==1){
                    var yes=document.getElementById("yes_mac");
                    yes.checked=true;
                }
                else{
                    var no=document.getElementById("no_mac");
                    no.checked=true;
                }

                if(student_info.gov_staff==1){
                    var yes=document.getElementById("yes_private");
                    yes.checked=true;
                }
                else{
                    var no=document.getElementById("no_private");
                    no.checked=true;
                }

                if(student_info.gov_staff==1){
                    var yes=document.getElementById("yes_self");
                    yes.checked=true;
                }
                else{
                    var no=document.getElementById("no_self");
                    no.checked=true;
                }

                $('.current_address').val(student_info.current_address);
                $('.address').val(student_info.address);
                $('.phone').val(student_info.phone);
                $('.email').val(student_info.email);
                $('.education').val(student_info.student_education_histroy.degree_name);



                // $('.sr_no');.val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                $('.course_name').val(current_stu_course[0].batch.course.name);
                $('.batch_no').val(current_stu_course[0].batch.number);
                $('.previewImg').attr('src',BASE_URL+student_info.image);

            }

        });

    });

    // mac
    $('#cash_img_mac').click(function() {
        $('#cpa2mac_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#cpa2mac_btn').prop('disabled', true);

    $('#cpa2mac_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal3').modal('hide');
        }, 1000);
    });

    // self
    $('#cash_img_self').click(function() {
        $('#cpa2self_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#cpa2self_btn').prop('disabled', true);

    $('#cpa2self_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal2').modal('hide');
        }, 1000);
    });

    // private
    $('#cash_img_private').click(function() {
        $('#cpa2private_btn').prop('disabled', false);
    });

    $('#btn_cbpay').prop('disabled', true);
    $('#btn_mpu').prop('disabled', true);
    $('#cpa2private_btn').prop('disabled', true);

    $('#cpa2private_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal1').modal('hide');
        }, 1000);
    });



</script>
@endpush
