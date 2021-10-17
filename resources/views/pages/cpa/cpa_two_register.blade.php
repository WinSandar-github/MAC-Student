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

            {{-- <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape"> --}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA Two Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{-- <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">

            </div> --}}
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">

            {{-- <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape"> --}}

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
                                        <a href="{{ url('cpa_two_mac', request('id')) }}">
                                        <div class="card border-success mb-3">
                                            <div class="card-body col-md-12"  style="height:100px;">
                                                <h6 class="card-title text-center">MAC</h6>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ url('cpa_two_self_study', request('id')) }}">
                                            <div class="card border-success mb-3" >
                                                <div class="card-body"  style="height:100px;">
                                                    <h6 class="card-title text-center">ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="{{ url('cpa_two_private_school', request('id')) }}">
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
                        <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5 class="card-title text-center fw-bolder">
                                                    မြန်မာနိုင်ငံစာရင်းကောင်စီ<br />
                                                    လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း)မှတ်ပုံတင်ခွင့်လျှောက်လွှာ<br />
                                                    (ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5></br>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="d-flex justify-content-between mt-2 mb-2">
                                                <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <form class="needs-validation" method="post" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data"> --}}
                                <form id="cpa2_private_form" method="post" action="javascript:void();"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" class="batch_id"
                                        value="{{ $batch['id'] }}" />
                                    <input type="hidden" name="sr_no" class="sr_no">
                                    <fieldset id="fieldset">
                                        <div class="col-md-12">
                                            <div class="row mb-3">
                                                <div class="col-md-8">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၁။') }}</span>တက်ရောက်မည့်
                                                            သင်တန်းအမှတ်စဥ်</div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="batch_name" name="batch_name"
                                                                class="form-control" readonly
                                                                value="{{ $batch['name'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၂။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(မြန်မာ)"
                                                                name="name_mm" id="name_mm" class="form-control name_mm"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)"
                                                                name="name_eng" id="name_eng" class="form-control name_eng"
                                                                value="{{ old('name_eng') }}" required="">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၃။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <div class="col-md-2">
                                                                    <select disabled class="form-control nrc_state_region"
                                                                        name="nrc_state_region" id="nrc_state_region">
                                                                        @foreach ($nrc_regions as $region)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_township"
                                                                        name="nrc_township" id="nrc_township">
                                                                        @foreach ($nrc_townships as $township)
                                                                            <option
                                                                                value="{{ $township['township_mm'] }}">
                                                                                {{ $township['township_mm'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_citizen"
                                                                        name="nrc_citizen" id="nrc_citizen">
                                                                        @foreach ($nrc_citizens as $citizen)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input disabled type="text" name="nrc_number"
                                                                        placeholder="၁၂၃၄၅၆" id="nrc_number"
                                                                        pattern=".{6,6}" class="form-control nrc_number"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px"
                                                                        value="{{ old('nrc_number') }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- User Photo --}}
                                                <div class="col-md-4" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style previewImg"
                                                                src="{{ asset('/assets/images/blank-profile-picture-1.png') }}"
                                                                accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div
                                                            class="fileinput-preview fileinput-exists thumbnail img-circle">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_private"
                                                                    name="profile_photo_private" accept="image/*"></span>
                                                            <br>
                                                            <a href="javascript:;"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- User Photo --}}
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၄။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                            <div class="col-md-4">
                                                <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)"
                                                    name="father_name_mm" id="father_name_mm"
                                                    class="form-control father_name_mm"
                                                    value="{{ old('father_name_mm') }}" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)"
                                                    name="father_name_eng" class="form-control father_name_eng"
                                                    id="father_name_eng" value="{{ old('father_name_eng') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၅။</span>ကျား / မ (Gender)<span
                                                    style="color:red">*</span></label>
                                            <div class="row col-md-8 py-2">
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input disabled class="form-check-input" type="radio"
                                                            id="male_private" name="gender" value="Male" required>
                                                        <span class="form-check-sign"></span>
                                                        ကျား
                                                    </label>
                                                </div>
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input disabled class="form-check-input" type="radio"
                                                            id='female_private' name="gender" value='Female' required>
                                                        <span class="form-check-sign"></span>
                                                        မ
                                                    </label>
                                                </div>

                                                <label class="error attend_place_error" style="display:none;"
                                                    for="gender">Please select one</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၆။') }}</span>လူမျိုး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="လူမျိုး" name="race"
                                                    class="form-control race" value="{{ old('race') }}" required=""
                                                    id="race">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၇။') }}</span>ကိုးကွယ်သည့်
                                                ဘာသာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion"
                                                    class="form-control religion" value="{{ old('religion') }}"
                                                    required="" id="religion">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၈။') }}</span>မွေးသက္ကရာဇ်</label>
                                            <div class="col-md-8">
                                                <input type="text" name="date_of_birth date_of_birth" readonly
                                                    class="form-control date_of_birth"
                                                    placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" id="date_of_birth" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"> <span
                                                    class="pull-left">{{ __('၉။') }}</span>ရာထူး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ရာထူး" name="position"
                                                    id="position" class="form-control position"
                                                    value="{{ old('position') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၀။') }}</span> ဌာန</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဌာန" name="department"
                                                    id="department" class="form-control department"
                                                    value="{{ old('department') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"> <span
                                                    class="pull-left">{{ __('၁၁။') }}</span>ရုံးလိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ရုံးလိပ်စာ" name="office_address"
                                                    id="office_address" class="form-control office_address"
                                                    value="{{ old('office_address') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၂။') }}</span>နိုင်ငံ့ဝန်ထမ်း
                                                ဟုတ်/မဟုတ်</label>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                class="form-check-input mr-3" id="yes_private"
                                                                name="gov_staff" value="1" style="margin-left: 3%;"
                                                                onclick="$('#rec_letter_private').show()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label "
                                                                for="yes_private">ဟုတ်</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                class="form-check-input mr-3" id="no_private"
                                                                name="gov_staff" value="0" style="margin-left: 3%;"
                                                                onclick="$('#rec_letter_private').hide()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label "
                                                                for="no_private">မဟုတ်</label></div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="rec_letter_private" style="display:none">
                                            <div class="row mb-3 ">
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left"
                                                        style="padding-left:105px">{{ __('(က)') }}</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                </label>
                                                <div class="col-md-2 text-center" id="degree_edu">
                                                    <span class="recommend_letter"></span>
                                                </div>
                                                <div class="col-md-6" id="degree_edu">
                                                    <input type="file" class="form-control" id="recommend_letter_private"
                                                        name="recommend_letter_private">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၃။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ"
                                                    name="current_address" class="form-control current_address"
                                                    value="{{ old('current_address') }}" required=""
                                                    id="current_address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၄။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="address"
                                                    class="form-control address" value="{{ old('address') }}"
                                                    required="" id="address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၅။') }}</span>ဖုန်းနံပါတ်</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone"
                                                    id="phone" class="form-control phone" value="{{ old('phone') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၆။') }}</span>အီးမေးလ်</label>
                                            <div class="col-md-8">
                                                <input type="email" id="email" readonly placeholder="အီးမေးလ်လိပ်စာထည့်ပါ"
                                                    name="email" class="form-control email" value="{{ old('email') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၇။') }}</span>ပညာရေး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly id="education" name="education"
                                                    class="form-control education" value="{{ old('education') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-6 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၈။') }}</span>{{ __('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <div class="col-md-2 label_align_right">
                                                <label class="col-form-label">{{ __(' နှစ်/လ') }}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control cpa_one_pass_date_private"
                                                    placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date" value=""
                                                    name="cpa_one_pass_date" required>
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <div class="col-md-2 label_align_right">
                                                <label class="col-form-label">{{ __(' ကိုယ်ပိုင်အမှတ်') }}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control personal_no_private" id="cpa_one_access_no" name="cpa_one_access_no" placeholder="ကိုယ်ပိုင်အမှတ်" value="" required>
                                            </div>
                                        </div> --}}
                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <div class="col-md-2 label_align_right">
                                                <label class="col-form-label">{{ __('အဆင့်') }}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control cpa_one_success_no_private"
                                                    id="cpa_one_success_no" name="cpa_one_success_no" placeholder="အဆင့်"
                                                    value="" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                            <label
                                                class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>
                                            <div class="col-md-8">
                                                <input type="text" name="batch_personal_no_private"
                                                    class="form-control personal_no_private" placeholder="ကိုယ်ပိုင်အမှတ်"
                                                    id="personal_no_mac" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3" style="display:none;">
                                            <label class="col-md-1 col-form-label">{{ __('၁၉။') }}</label>
                                            <label class="col-md-3 label_align_right  col-form-label"><span
                                                    class="pull-left">{{ __('(က)') }}</span>{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>
                                            <div class="col-md-8">
                                                <input readonly type="text" name="batch_part_no"
                                                    class="form-control course_name" placeholder="အပိုင်း" id="part_no_mac"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3" style="display:none;">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <label
                                                class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>
                                            <div class="col-md-8">
                                                <input readonly type="text" name="batch_no_private"
                                                    class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်"
                                                    id="batch_no_private" required="" value="{{ $batch['number'] }}">
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-3" style="display:none;">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                            <label class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>
                                            <div class="col-md-8">
                                                <input type="text" name="batch_personal_no_private" class="form-control personal_no_private" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" required="">
                                            </div>
                                        </div> --}}

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label "><span class="pull-left"
                                                    style="padding-right: 30px;">{{ __('၁၉။') }}</span>ဖြေဆိုမည့်
                                                Module</label>
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_one" type="radio"
                                                            name="module" value="1" id="module1">
                                                        <label class="form-check-label">{{ __('Module-1') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_two" type="radio"
                                                            name="module" value="2" id="module2">
                                                        <label class="form-check-label">{{ __('Module-2') }}</label>

                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_full" type="radio"
                                                            name="module" value="3" id="allmodule">
                                                        <label class="form-check-label">{{ __('All Module') }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-radio px-0">
                                                    <label class="error attend_place_error" style="display:none;"
                                                        for="module">Please select one</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="submit_confirm_private"
                                                        onchange="$('#cpa2_private').prop('disabled', !this.checked)">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။<br>
                                                        *
                                                        မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်းကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mb-3">
                                            {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                            <button type="submit" id="cpa2_private" value="submit"
                                                class="btn btn-success btn-hover-dark w-25" disabled>Submit
                                            </button>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="row" id="self_study_container">
                        <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <h5 class="card-title text-center fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ<br/>
                                                    လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ<br/>
                                                    (ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                                </div>
                                                <div class="col-md-2"></div>
                                            </div> -->

                                        <div class="row mb-5">
                                            <h5 class="card-title text-center fw-bolder">
                                                မြန်မာနိုင်ငံစာရင်းကောင်စီ<span id="mac_type"></span><br>
                                                လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ<br />
                                                (ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                            <div class="d-flex justify-content-between mt-2 mb-2">
                                                <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                {{-- <form  method="post" action="javascript:CPA2_Self_Study_Submit();" enctype="multipart/form-data"> --}}
                                <form method="post" id="cpa2_self_form" action="javascript:void();"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" class="batch_id"
                                        value="{{ $batch['id'] }}" />
                                    <input type="hidden" name="sr_no" class="sr_no">

                                    <fieldset id="fieldset">


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၁။') }}</span>တက်ရောက်မည့်
                                                            သင်တန်းအမှတ်စဥ်</div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="batch_name" name="batch_name"
                                                                class="form-control" readonly
                                                                value="{{ $batch['name'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၂။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(မြန်မာ)"
                                                                name="name_mm" id="name_mm" class="form-control name_mm"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)"
                                                                name="name_eng" id="name_eng" class="form-control name_eng"
                                                                value="{{ old('name_eng') }}" required="">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၃။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <select disabled class="form-control nrc_state_region"
                                                                        name="nrc_state_region" id="nrc_state_region"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_regions as $region)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_township"
                                                                        name="nrc_township" id="nrc_township"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_townships as $township)
                                                                            <option
                                                                                value="{{ $township['township_mm'] }}">
                                                                                {{ $township['township_mm'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_citizen"
                                                                        name="nrc_citizen" id="nrc_citizen"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_citizens as $citizen)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input disabled type="text" name="nrc_number"
                                                                        placeholder="၁၂၃၄၅၆" id="nrc_number"
                                                                        pattern=".{6,6}" class="form-control nrc_number"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px"
                                                                        value="{{ old('nrc_number') }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- User Photo --}}
                                                <div class="col-md-4" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style previewImg"
                                                                src="{{ asset('/assets/images/blank-profile-picture-1.png') }}"
                                                                accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div
                                                            class="fileinput-preview fileinput-exists thumbnail img-circle">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_self"
                                                                    name="profile_photo_self" accept="image/*"></span>
                                                            <br>
                                                            <a href="javascript:;"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- User Photo --}}
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၄။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                <div class="col-md-4">
                                                    <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)"
                                                        name="father_name_mm" id="father_name_mm"
                                                        class="form-control father_name_mm"
                                                        value="{{ old('father_name_mm') }}" required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)"
                                                        name="father_name_eng" class="form-control father_name_eng"
                                                        id="father_name_eng" value="{{ old('father_name_eng') }}"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">၅။</span>ကျား / မ (Gender)<span
                                                        style="color:red">*</span></label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-3 form-check-radio mx-2">
                                                        <label class="form-check-label">
                                                            <input disabled class="form-check-input" type="radio"
                                                                id="male_self" name="gender" value="Male" required>
                                                            <span class="form-check-sign"></span>
                                                            ကျား
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 form-check-radio mx-2">
                                                        <label class="form-check-label">
                                                            <input disabled class="form-check-input" type="radio"
                                                                id='female_self' name="gender" value='Female' required>
                                                            <span class="form-check-sign"></span>
                                                            မ
                                                        </label>
                                                    </div>

                                                    <label class="error attend_place_error" style="display:none;"
                                                        for="gender">Please select one</label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၆။') }}</span>လူမျိုး</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="လူမျိုး" name="race"
                                                        class="form-control race" value="{{ old('race') }}" required=""
                                                        id="race">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၇။') }}</span>ကိုးကွယ်သည့်
                                                    ဘာသာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ"
                                                        name="religion" class="form-control religion"
                                                        value="{{ old('religion') }}" required="" id="religion">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၈။') }}</span>မွေးသက္ကရာဇ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth date_of_birth" readonly
                                                        class="form-control date_of_birth"
                                                        placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" id="date_of_birth" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၉။') }}</span> ရာထူး</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ရာထူး" name="position"
                                                        id="position" class="form-control position"
                                                        value="{{ old('position') }}" required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"> <span
                                                        class="pull-left">{{ __('၁၀။') }}</span>ဌာန</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ဌာန" name="department"
                                                        id="department" class="form-control department"
                                                        value="{{ old('department') }}" required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"> <span
                                                        class="pull-left">{{ __('၁၁။') }}</span>ရုံးလိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ရုံးလိပ်စာ"
                                                        name="office_address" id="office_address"
                                                        class="form-control office_address"
                                                        value="{{ old('office_address') }}" required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၂။') }}</span>နိုင်ငံ့ဝန်ထမ်း
                                                    ဟုတ်/မဟုတ်</label>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input disabled type="radio"
                                                                    class="form-check-input mr-3" id="yes_self"
                                                                    name="gov_staff" value="1" style="margin-left: 3%;"
                                                                    onclick="$('#rec_letter_self').show()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                    for="yes_self">ဟုတ်</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input disabled type="radio"
                                                                    class="form-check-input mr-3" id="no_self"
                                                                    name="gov_staff" value="0" style="margin-left: 3%;"
                                                                    onclick="$('#rec_letter_self').hide()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                    for="no_self">မဟုတ်</label></div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div id="rec_letter_self" style="display:none">
                                                <div class="row mb-3 ">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left"
                                                            style="padding-left:93px">{{ __('(က)') }}</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                    </label>
                                                    <div class="col-md-2 text-center" id="degree_edu">
                                                        <span class="recommend_letter"></span>
                                                    </div>
                                                    <div class="col-md-6" id="degree_edu">
                                                        <input type="file" class="form-control"
                                                            id="recommend_letter_self" name="recommend_letter_self">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၃။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ"
                                                        name="current_address" class="form-control current_address"
                                                        value="{{ old('current_address') }}" required=""
                                                        id="current_address">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၄။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ဆက်သွယ်ရန်လိပ်စာ"
                                                        name="address" class="form-control address"
                                                        value="{{ old('address') }}" required="" id="address">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၅။') }}</span>ဖုန်းနံပါတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone"
                                                        id="phone" class="form-control phone"
                                                        value="{{ old('phone') }}" required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၆။') }}</span>အီးမေးလ်</label>
                                                <div class="col-md-8">
                                                    <input type="email" id="email" readonly
                                                        placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email"
                                                        class="form-control email" value="{{ old('email') }}"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၇။') }}</span>ပညာရေး</label>
                                                <div class="col-md-8">
                                                    <input type="text" readonly id="education" name="education"
                                                        class="form-control education" value="{{ old('education') }}"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">{{ __('၁၈။') }}</span>{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                <div class="row col-md-8 py-2">

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                name="reg_reason[]"
                                                                value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (က) သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                name="reg_reason[]"
                                                                value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ခ) သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                name="reg_reason[]" value="စာမေးပွဲကျရှုံးခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ဂ) စာမေးပွဲကျရှုံးခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                name="reg_reason[]" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ဃ) သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း
                                                        </label>
                                                    </div>
                                                    <!-- <label  class="error attend_place_error" style="display:none;" for="reg_reason[]">Please select registration reason.</label> -->
                                                </div>
                                            </div>
                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-1 col-form-label">{{ __('၁၉။') }}</label>
                                                <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                <label
                                                    class="col-md-2 label_align_right  col-form-label">{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>
                                                <div class="col-md-8">
                                                    <input readonly type="text" name="batch_part_no"
                                                        class="form-control course_name" placeholder="အပိုင်း"
                                                        id="part_no_self">
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                <label
                                                    class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>
                                                <div class="col-md-8">
                                                    <input readonly type="text" name="batch_no_self"
                                                        class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်"
                                                        id="batch_no_self" value="{{ $batch['number'] }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                <label
                                                    class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="batch_personal_no_self"
                                                        class="form-control personal_no_self" placeholder="ကိုယ်ပိုင်အမှတ်"
                                                        id="personal_no_self">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left"
                                                        style="padding-right: 30px;">{{ __('၁၉။') }}</span>ဖြေဆိုမည့်
                                                    Module</label>
                                                <div class="col-md-8 mt-2">
                                                    <div class="row mx-2">
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_one" type="radio"
                                                                name="module" value="1" id="module1">
                                                            <label
                                                                class="form-check-label">{{ __('Module-1') }}</label>
                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_two" type="radio"
                                                                name="module" value="2" id="module2">
                                                            <label
                                                                class="form-check-label">{{ __('Module-2') }}</label>

                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_full" type="radio"
                                                                name="module" value="3" id="allmodule">
                                                            <label
                                                                class="form-check-label">{{ __('All Module') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-radio px-0">
                                                        <label class="error attend_place_error" style="display:none;"
                                                            for="module">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left:17px;">၂၀။</span>သင်တန်းတက်ရောက်မည့်နေရာ<span style="color:red">*</span>-</label>
                                            <div class="row  col-md-8 checkbox-radios   py-2">
                                                <div class="col-md-5 form-check-radio">
                                                    <label class="form-check-label" for="sub_self">
                                                    <input class="form-check-input" type="radio" id="sub_self" name="self_type" value='1'    >
                                                        <span class="form-check-sign"></span>
                                                        ရန်ကုန်သင်တန်းကျောင်း
                                                    </label>
                                                </div>
                                                <div class="col-md-6  form-check-radio">
                                                    <label class="form-check-label" for="sub_self2">
                                                    <input class="form-check-input" type="radio" id="sub_self2" name="self_type" value='2'    >
                                                        <span class="form-check-sign"></span>
                                                        နေပြည်တော်သင်တန်းကျောင်း
                                                    </label>
                                                </div>
                                                <label  class="error attend_mac_error" style="display:none;" for="attend_place">Please select one</label>
                                                
                                            </div>
                                        </div> --}}
                                            <div class="row mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="submit_confirm_self"
                                                            onchange="$('#cpa2_self').prop('disabled', !this.checked)">
                                                        <span class="form-check-sign"></span>
                                                        <p class="fw-bolder">
                                                            * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။<br>
                                                            *
                                                            မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်းကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-2 offset-md-5">
                                                    {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                                    <button type="submit" id="cpa2_self" value="submit"
                                                        class="btn btn-success btn-hover-dark w-100" disabled>Submit
                                                    </button>
                                                </div>
                                            </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="row" id="mac_container">
                        <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5 class="card-title text-center fw-bolder">
                                                    မြန်မာနိုင်ငံစာရင်းကောင်စီ<br />
                                                    လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ဒုတိယပိုင်း)မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>

                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="d-flex justify-content-between mt-2 mb-2">
                                                <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <form  method="post" class="needs-validation" novalidate action="javascript:CPA2_Mac_Submit();" enctype="multipart/form-data" > --}}
                                <form method="post" id="cpa2_mac_form" novalidate action="javascript:void();"
                                    enctype="multipart/form-data">
                                    <input type="hidden" class="batch_id" name="batch_id"
                                        value="{{ $batch['id'] }}" />
                                    <input type="hidden" name="sr_no" class="sr_no">
                                    <fieldset id="fieldset">

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၁။') }}</span>တက်ရောက်မည့်
                                                            သင်တန်းအမှတ်စဥ်</div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="batch_name" name="batch_name"
                                                                class="form-control" readonly
                                                                value="{{ $batch['name'] }}">

                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၂။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(မြန်မာ)"
                                                                name="name_mm" id="name_mm" class="form-control name_mm"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" readonly placeholder="အမည်(အင်္ဂလိပ်)"
                                                                name="name_eng" id="name_eng" class="form-control name_eng"
                                                                value="{{ old('name_eng') }}" required="">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span
                                                                class="pull-left">{{ __('၃။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <div class="col-md-2">
                                                                    <select disabled class="form-control nrc_state_region"
                                                                        name="nrc_state_region" id="nrc_state_region"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_regions as $region)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_township"
                                                                        name="nrc_township" id="nrc_township"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_townships as $township)
                                                                            <option
                                                                                value="{{ $township['township_mm'] }}">
                                                                                {{ $township['township_mm'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <select disabled class="form-control nrc_citizen"
                                                                        name="nrc_citizen" id="nrc_citizen"
                                                                        style="padding:6px;">
                                                                        @foreach ($nrc_citizens as $citizen)
                                                                            <option
                                                                                value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input disabled type="text" name="nrc_number"
                                                                        placeholder="၁၂၃၄၅၆" id="nrc_number"
                                                                        pattern=".{6,6}" class="form-control nrc_number"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px"
                                                                        value="{{ old('nrc_number') }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- User Photo --}}
                                                <div class="col-md-4" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style previewImg"
                                                                src="{{ asset('/assets/images/blank-profile-picture-1.png') }}"
                                                                accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div
                                                            class="fileinput-preview fileinput-exists thumbnail img-circle">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_mac"
                                                                    name="profile_photo_mac" accept="image/*"></span>
                                                            <br>
                                                            <a href="javascript:;"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- User Photo --}}
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၄။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                            <div class="col-md-4">
                                                <input type="text" readonly placeholder="အဘအမည်(မြန်မာ)"
                                                    name="father_name_mm" id="father_name_mm"
                                                    class="form-control father_name_mm"
                                                    value="{{ old('father_name_mm') }}" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" readonly placeholder="အဘအမည်(အင်္ဂလိပ်)"
                                                    name="father_name_eng" class="form-control father_name_eng"
                                                    id="father_name_eng" value="{{ old('father_name_eng') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၅။</span>ကျား / မ (Gender)<span
                                                    style="color:red">*</span></label>
                                            <div class="row col-md-8 py-2">
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input disabled class="form-check-input" type="radio" id="male_mac"
                                                            name="gender" value="Male" required>
                                                        <span class="form-check-sign"></span>
                                                        ကျား
                                                    </label>
                                                </div>
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input disabled class="form-check-input" type="radio"
                                                            id='female_mac' name="gender" value='Female' required>
                                                        <span class="form-check-sign"></span>
                                                        မ
                                                    </label>
                                                </div>

                                                <label class="error attend_place_error" style="display:none;"
                                                    for="gender">Please select one</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၆။') }}</span>လူမျိုး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="လူမျိုး" name="race"
                                                    class="form-control race" value="{{ old('race') }}" required=""
                                                    id="race">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၇။') }}</span>ကိုးကွယ်သည့်
                                                ဘာသာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion"
                                                    class="form-control religion" value="{{ old('religion') }}"
                                                    required="" id="religion">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၈။') }}</span>မွေးသက္ကရာဇ်</label>
                                            <div class="col-md-8">
                                                <input type="text" name="date_of_birth date_of_birth" readonly
                                                    class="form-control date_of_birth"
                                                    placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" id="date_of_birth" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၉။') }}</span> ရာထူး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ရာထူး" name="position"
                                                    id="position" class="form-control position"
                                                    value="{{ old('position') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"> <span
                                                    class="pull-left">{{ __('၁၀။') }}</span>ဌာန</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဌာန" name="department"
                                                    id="department" class="form-control department"
                                                    value="{{ old('department') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"> <span
                                                    class="pull-left">{{ __('၁၁။') }}</span>ရုံးလိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ရုံးလိပ်စာ" name="office_address"
                                                    id="office_address" class="form-control office_address"
                                                    value="{{ old('office_address') }}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၂။') }}</span>နိုင်ငံ့ဝန်ထမ်း
                                                ဟုတ်/မဟုတ်</label>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                class="form-check-input mr-3" id="yes_mac" name="gov_staff"
                                                                value="1" style="margin-left: 3%;"
                                                                onclick="$('#rec_letter_mac').show()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label "
                                                                for="yes_mac">ဟုတ်</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                class="form-check-input mr-3" id="no_mac" name="gov_staff"
                                                                value="0" style="margin-left: 3%;"
                                                                onclick="$('#rec_letter_mac').hide()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label "
                                                                for="no_mac">မဟုတ်</label></div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="rec_letter_mac" style="display:none">
                                            <div class="row mb-3 ">
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left"
                                                        style="padding-left:93px">{{ __('(က)') }}</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                </label>
                                                <div class="col-md-2 text-center" id="degree_edu">
                                                    <span class="recommend_letter"></span>
                                                </div>
                                                <div class="col-md-6" id="degree_edu">
                                                    <input type="file" class="form-control" id="recommend_letter_mac"
                                                        name="recommend_letter_mac">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၃။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="အမြဲတမ်းနေရပ်လိပ်စာ"
                                                    name="current_address" class="form-control current_address"
                                                    value="{{ old('current_address') }}" required=""
                                                    id="current_address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၄။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="address"
                                                    class="form-control address" value="{{ old('address') }}"
                                                    required="" id="address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၅။') }}</span>ဖုန်းနံပါတ်</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly placeholder="ဖုန်းနံပါတ်" name="phone"
                                                    id="phone" class="form-control phone" value="{{ old('phone') }}"
                                                    required="">
                                            </div>
                                        </div><br>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၆။') }}</span>အီးမေးလ်</label>
                                            <div class="col-md-8">
                                                <input type="email" id="email" readonly placeholder="အီးမေးလ်လိပ်စာထည့်ပါ"
                                                    name="email" class="form-control email" value="{{ old('email') }}"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၇။') }}</span>ပညာရေး</label>
                                            <div class="col-md-8">
                                                <input type="text" readonly id="education" name="education"
                                                    class="form-control education" value="{{ old('education') }}"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-6 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၈။') }}</span>{{ __('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <div class="col-md-2 label_align_right">
                                                <label class="col-form-label">{{ __(' (နှစ်/လ)') }}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control cpa_one_pass_date_mac"
                                                    placeholder="လ ၊ နှစ် (MMM-YYYY)" id="cpa_one_pass_date_mac"
                                                    name="cpa_one_pass_date_mac" value="">
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <div class="col-md-2 label_align_right">

                                                    <label class="col-form-label">{{ __(' ကိုယ်ပိုင်အမှတ်') }}</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control personal_no_mac" id="cpa_one_access_no" name="cpa_one_access_no_mac" placeholder="ကိုယ်ပိုင်အမှတ်" value="" >
                                            </div>
                                        </div> --}}

                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <div class="col-md-2 label_align_right">

                                                <label class="col-form-label">{{ __('(အဆင့်)') }}</label>

                                            </div>
                                            <div class="col-md-8">

                                                <input type="text" class="form-control cpa_one_success_no_mac"
                                                    id="cpa_one_success_no" name="cpa_one_success_no_mac"
                                                    placeholder="အဆင့်" value="">

                                            </div>
                                        </div><br>

                                        <div class="row mb-3" style="display:none;">
                                            <label class="col-md-1 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၉။') }}</span></label>
                                            <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">{{ __('(က)') }}</span>{{ __('တက်ရောက်မည့်သင်တန်း') }}</label>

                                            <div class="col-md-8">
                                                <input readonly type="text" name="batch_part_no"
                                                    class="form-control course_name" placeholder="အပိုင်း"
                                                    id="part_no_mac">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="display:none;">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <label
                                                class="col-md-2 label_align_right col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                            <div class="col-md-8">
                                                <input readonly type="text" name="batch_no_mac"
                                                    class="form-control batch_no" placeholder="သင်တန်းအမှတ်စဥ်"
                                                    id="batch_no_mac" value="{{ $batch['number'] }}">

                                            </div>
                                        </div>

                                        <div class="row mb-4" style="display:none;">
                                            <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                            <label
                                                class="col-md-2 label_align_right col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="batch_personal_no_mac"
                                                    class="form-control personal_no_mac" placeholder="ကိုယ်ပိုင်အမှတ်"
                                                    id="personal_no_mac" value="">

                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left"
                                                    style="padding-right: 30px;">{{ __('၁၉။') }}</span>ဖြေဆိုမည့်
                                                Module</label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_one" type="radio"
                                                            name="module" value="1" id="module1">
                                                        <label class="form-check-label">{{ __('Module-1') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_two" type="radio"
                                                            name="module" value="2" id="module2">
                                                        <label class="form-check-label">{{ __('Module-2') }}</label>

                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input class="form-check-input module_full" type="radio"
                                                            name="module" value="3" id="allmodule">
                                                        <label class="form-check-label">{{ __('All Module') }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-radio px-0">
                                                    <label class="error attend_place_error" style="display:none;"
                                                        for="module">Please select one</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="display:none">
                                            <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၂၀။</span>သင်တန်းတက်ရောက်မည့်နေရာ<span
                                                    style="color:red">*</span>-</label>
                                            <div class="row  col-md-8 checkbox-radios   py-2">
                                                <div class="col-md-5 form-check-radio">
                                                    <label class="form-check-label" for="sub_mac">
                                                        <input class="form-check-input" type="radio" id="sub_mac"
                                                            name="mac_type" value='1'>
                                                        <span class="form-check-sign"></span>
                                                        ရန်ကုန်သင်တန်းကျောင်း
                                                    </label>
                                                </div>
                                                <div class="col-md-6  form-check-radio">
                                                    <label class="form-check-label" for="sub_mac2">
                                                        <input class="form-check-input" type="radio" id="sub_mac2"
                                                            name="mac_type" value='2'>
                                                        <span class="form-check-sign"></span>
                                                        နေပြည်တော်သင်တန်းကျောင်း
                                                    </label>
                                                </div>
                                                <label class="error attend_mac_error" style="display:none;"
                                                    for="attend_place">Please select one</label>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="submit_confirm_mac"
                                                        onchange="$('#cpa2_mac').prop('disabled', !this.checked)">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။<br>
                                                        *
                                                        မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်းကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mb-3 justify-content-center">
                                            {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                            <button type="submit" id="cpa2_mac" value="submit"
                                                class="btn btn-success btn-hover-dark w-25" disabled>Submit
                                            </button>

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
        <form method="post" class="needs-validation" action="javascript:CPA2_Private_School_Submit();"
            enctype="multipart/form-data" novalidate>
            @csrf
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <center>
                                    <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(Private
                                        School) Form Fee - ****** MMK</h4>
                                </center>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                            height="50%" data-value="CBPAY" name="payment_method" id="cb_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                            height="50%" data-value="MPU" name="payment_method" id="mpu_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                            height="50%" data-value="CASH" name="payment_method" id="cash_img_private">
                                    </center>
                                    <br>
                                </div>
                                <input type="hidden" name="payment_method" value="CASH">
                                <center>
                                    <button type="submit" id="cpa2private_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now </button>
                                </center>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </form>


        <!-- self -->
        <form method="post" class="needs-validation" action="javascript:CPA2_Self_Study_Submit();"
            enctype="multipart/form-data" novalidate>
            @csrf
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <center>
                                    <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(Self
                                        Study) Form Fee - ****** MMK</h4>
                                </center>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                            height="50%" data-value="CBPAY" name="payment_method" id="cb_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                            height="50%" data-value="MPU" name="payment_method" id="mpu_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                            height="50%" data-value="CASH" name="payment_method" id="cash_img_self">
                                    </center>
                                    <br>
                                </div>
                                <input type="hidden" name="payment_method" value="CASH">
                                <center>
                                    <button type="submit" id="cpa2self_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now </button>
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
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <center>
                                    <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Registeration(MAC)
                                        Form Fee - ****** MMK</h4>
                                </center>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cbpay.png') }}" width="50%"
                                            height="50%" data-value="CBPAY" name="payment_method" id="cb_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/mpu.png') }}" width="50%"
                                            height="50%" data-value="MPU" name="payment_method" id="mpu_img">
                                    </center>
                                    <br>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <center>
                                        <img class="fit-image" src="{{ asset('img/cash.png') }}" width="50%"
                                            height="50%" data-value="CASH" name="payment_method" id="cash_img_mac">
                                    </center>
                                    <br>
                                </div>
                                <input type="hidden" name="payment_method" value="CASH">
                                <center>
                                    <button type="submit" id="cpa2mac_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now </button>
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
        <script src="{{ asset('js/form_validation/cpa_two_reg_validation.js') }}"></script>
        <script type="text/javascript">
            $('document').ready(function() {


                reg_feedback();
                get_cpa_course();
                var exam_date = localStorage.getItem("exam_date");

                const queryString = location.search;
                const urlParams = new URLSearchParams(queryString);
                selectedRegistration(urlParams.get("study_type"));


                get_student_info(student_id).then(data => {

                    if (data) {
                        let student_info = data.data;
                        let current_stu_course = student_info.student_course_regs.slice(-1);
                        let exam_registers = student_info.exam_registers.slice(-1);

                        console.log('student_info from here', current_stu_course);
                        $('.name_mm').val(student_info.name_mm);
                        $('.name_eng').val(student_info.name_eng);
                        $('.nrc_state_region').val(student_info.nrc_state_region);
                        $('.nrc_township').val(student_info.nrc_township);
                        $('.nrc_citizen').val(student_info.nrc_citizen);
                        $('.nrc_number').val(student_info.nrc_number);

                        $('input[type=radio][name=mac_type]').map((k, v) => {
                            return $(v).val() == current_stu_course[0].mac_type ? $(v).attr('checked', 'true') : '';
                        });

                        $('.personal_no_private').val(student_info.cpersonal_no);
                        $('.personal_no_self').val(student_info.cpersonal_no);
                        $('.personal_no_mac').val(student_info.cpersonal_no);

                        $('.cpa_one_pass_date_private').val(formatDate(exam_registers[0].updated_at));
                        $('.cpa_one_pass_date_mac').val(formatDate(exam_registers[0].updated_at));

                        $('.cpa_one_success_no_private').val(exam_registers[0].grade);
                        $('.cpa_one_success_no_mac').val(exam_registers[0].grade);

                        $('.father_name_mm').val(student_info.father_name_mm);
                        $('.father_name_eng').val(student_info.father_name_eng);
                        $('.race').val(student_info.race);
                        $('.religion').val(student_info.religion);
                        $('.date_of_birth').val(student_info.date_of_birth);
                        $('.position').val(student_info.student_job.position);
                        $('.department').val(student_info.student_job.department);
                        $('.office_address').val(student_info.student_job.office_address);

                        if (data.data.gov_staff == 0) {
                            $("#no_self").prop("checked", true);
                            $("#no_private").prop("checked", true);
                            $("#no_mac").prop("checked", true);
                        } else {
                            $("#yes_mac").prop("checked", true);
                            $("#rec_letter_mac").css("display", 'block');
                            $("#yes_self").prop("checked", true);
                            $("#rec_letter_self").css("display", 'block');
                            $("#yes_private").prop("checked", true);
                            $("#rec_letter_private").css("display", 'block');
                            if (data.data.recommend_letter != null) {
                                $(".recommend_letter").append("<a href='" + BASE_URL + data.data
                                    .recommend_letter + "'  target='_blank'>View File</a><br/>")
                            }
                        }

                        //gender
                        if (data.data.gender == "Male") {
                            $("#male_self").prop("checked", true);
                            $("#male_private").prop("checked", true);
                            $("#male_mac").prop("checked", true);
                        } else {
                            $("#female_self").prop("checked", true);
                            $("#female_private").prop("checked", true);
                            $("#female_mac").prop("checked", true);
                        }

                        $('.current_address').val(student_info.current_address);
                        $('.address').val(student_info.address);
                        $('.phone').val(student_info.phone);
                        $('.email').val(student_info.email);
                        $('.education').val(student_info.student_education_histroy.degree_name);
                        $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                        // $('.course_name').val(current_stu_course[0].batch.course.name);
                        // $('.batch_no').val(current_stu_course[0].batch.number);
                        $('.previewImg').attr('src', BASE_URL + student_info.image);
                        if (exam_registers[0].grade == 1 && exam_registers[0].course.code == 'cpa_2') {
                            let batch_id = localStorage.getItem('batch_id');
                            // $('.batch_id').val(batch_id);
                            $.ajax({
                                type: "get",
                                url: BACKEND_URL + "/batch/" + batch_id,
                                contentType: false,
                                processData: false,
                                async: false,
                                success: function(res) {
                                    $('.batch_no').val(res.data.number);
                                    $('.batch_id').val(res.data.id);
                                    $('.personal_no').val(data.data.personal_no);
                                    if (exam_registers[0].is_full_module == "1") {
                                        $(".module_two").prop("checked", true);
                                        $('.module_one').attr('disabled', true);
                                        $('.module_full').attr('disabled', true);
                                    } else if (exam_registers[0].is_full_module == "2") {
                                        $(".module_one").prop("checked", true);
                                        $('.module_two').attr('disabled', true);
                                        $('.module_full').attr('disabled', true);
                                    } else if (exam_registers[0].is_full_module == "3") {
                                        $(".module_full").prop("checked", true);
                                        $('.module_two').attr('disabled', true);
                                        $('.module_full').attr('disabled', true);
                                    }
                                }
                            })
                        } else {
                            console.log('aa', $('.batch_no').val())
                            $('.batch_no').val();
                            $('.batch_id').val();
                        }
                        if (data.data.exam_registers.length != 0) {
                            $("input[name='office_address']").prop('readonly', false);
                            $("input[name='current_address']").prop('readonly', false);
                            $("input[name='address']").prop('readonly', false);
                            $("input[name='phone']").prop('readonly', false);
                            $("input[name='profile_photo_mac']").show();
                            $("input[name='profile_photo_self']").show();
                            $("input[name='profile_photo_private']").show();
                            $("input[name='recommend_letter_mac']").prop('disabled', false);
                            $("input[name='recommend_letter_self']").prop('disabled', false);
                            $("input[name='recommend_letter_private']").prop('disabled', false);
                            $("input[name='gov_staff']").prop('disabled', false);
                        } else {
                            $("input[name='office_address']").prop('readonly', true);
                            $("input[name='current_address']").prop('readonly', true);
                            $("input[name='address']").prop('readonly', true);
                            $("input[name='phone']").prop('readonly', true);
                            $("input[name='profile_photo_mac']").hide();
                            $("input[name='profile_photo_self']").hide();
                            $("input[name='profile_photo_private']").hide();
                            $("input[name='recommend_letter_mac']").prop('disabled', true);
                            $("input[name='recommend_letter_self']").prop('disabled', true);
                            $("input[name='recommend_letter_private']").prop('disabled', true);
                            $("input[name='gov_staff']").prop('disabled', true);
                        }
                    }

                });

            });

            // mac
            $('#cash_img_mac').click(function() {
                $('#cpa2mac_btn').prop('disabled', false);
            });

            $('#cb_img').click(function() {
                $('#cpa2mac_btn').prop('disabled', true);
            });

            $('#mpu_img').click(function() {
                $('#cpa2mac_btn').prop('disabled', true);
            });
            $('#cpa2mac_btn').prop('disabled', true);

            $('#cpa2mac_btn').click(function() {
                setTimeout(function() {
                    $('#exampleModal3').modal('hide');
                }, 1000);
            });

            // self
            $('#cash_img_self').click(function() {
                $('#cpa2self_btn').prop('disabled', false);
            });

            $('#cb_img').click(function() {
                $('#cpa2self_btn').prop('disabled', true);
            });

            $('#mpu_img').click(function() {
                $('#cpa2self_btn').prop('disabled', true);
            });
            $('#cpa2self_btn').prop('disabled', true);

            $('#cpa2self_btn').click(function() {
                setTimeout(function() {
                    $('#exampleModal2').modal('hide');
                }, 1000);
            });

            // private
            $('#cash_img_private').click(function() {
                $('#cpa2private_btn').prop('disabled', false);
            });

            $('#cb_img').click(function() {
                $('#cpa2private_btn').prop('disabled', true);
            });

            $('#mpu_img').click(function() {
                $('#cpa2private_btn').prop('disabled', true);
            });
            $('#cpa2private_btn').prop('disabled', true);

            $('#cpa2private_btn').click(function() {
                setTimeout(function() {
                    $('#exampleModal1').modal('hide');
                }, 1000);
            });
        </script>
    @endpush
