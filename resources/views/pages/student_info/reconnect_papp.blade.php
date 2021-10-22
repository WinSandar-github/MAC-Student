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
                    <h2 class="title">PAPP Existing User Registeration<span>Form</span></h2>
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
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> <!-- container-fluid p-4 -->
                {{--<div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark mb-3">

                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div id="rejected" style="display:none">
                    <div class="card text-white bg-dark my-3">
                        <div class="card-body">
                            <p class="card-text reject">Your PAPP registration form is rejected. Please update your information.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="pending" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your PAPP registration form is being checked.</p>
                        </div>
                    </div>
                </div>
                <div id="approved" style="display:none;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body">
                                <p class="card-text">Your PAPP registration form is approved! You need to subscribe your service with desire payment method!</p>
                            </div>
                        </div>

                </div>--}}
    
                <div class="card border-success mb-3" id="papp_renew_form"><br/><!---->
                    <div class="row mb-5">
                        <div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၄)</h6>
                        </div>
                        <h5 class="card-title text-center fw-bolder">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                            အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် သက်တမ်းတိုးမြှင့်ရန်လျှောက်ထားခြင်း
                        </h5>
                        {{--<div class="d-flex justify-content-between">
                            <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                            <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                        </div>--}}
                    </div>
                    <form method="post" action="javascript:void();" enctype="multipart/form-data" id="reconnect_papp_form">
                    	<div class="card-body">
						    <div class="row">
                                <div class="col-md-9">
                                <div class="row mb-3">
                                    <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>{{ __('အီးမေးလ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  placeholder="အီးမေးလ်လိပ်စာထည့်ပါ"  class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('လျှို့ဝှက်နံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်ထည့်ပါ" class="form-control" name="password" id="password">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>{{ __('လျှို့ဝှက်နံပါတ် အတည်ပြုခြင်း') }}</div>
                                    <div class="col-md-8">
                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း" class="form-control" name="confirm_password" id="confirm_password">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3 text-center">
                                {{--User Photo--}}
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                alt="Upload Photo">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div class="d-flex justify-content-center">
                                        <span class="btn btn-round btn-secondary btn-file">
                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required=""></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                                {{--User Photo--}}
                            </div>
                            <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဃ)') }}</span>{{ __('အမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng">
                                    </div>
                                </div>
                                <div class="row mb-3"  style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                            <div class="col-md-2 col-5 pr-1">
                                                <select class="form-control form-select" name="nrc_state_region" id="nrc_state_region">
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <select class="form-control form-select" name="nrc_township" id="nrc_township">
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen">
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    @foreach($nrc_citizens as $citizen)
                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                                <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            {{--<div class="col-md-6">
                                                <div class="row">
                                                    <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                </div>
                                                <div class="row">
                                                    <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                    <p class="mt-2">
                                                    <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                        value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);">
                                                    </p>
                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                </div>
                                                <div class="row">
                                                    <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                    <p class="mt-2">
                                                    <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                        value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);">
                                                    </p>
                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                </div>
                                            </div>--}}
                                            <div class="col-md-6 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                        <span class="btn btn-secondary btn-round btn-file">
                                                            <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အရှေ့)</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="hidden" value="">
                                                            <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*">
                                                        </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                        <span class="btn btn-secondary btn-round btn-file">
                                                            <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*">
                                                        </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                      
                                </div><br> 
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(စ)</span>ကျား / မ (Gender)</label>
                                    <div class="row col-md-8 py-2">
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="male"
                                                        name="gender" value="Male">
                                                <span class="form-check-sign"></span>
                                                ကျား
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id='female'
                                                        name="gender" value='Female'>
                                                <span class="form-check-sign"></span>
                                                မ
                                            </label>
                                        </div>
                                        
                                        <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                    </div>
                                </div>
                                <div class="row mb-3"  style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဆ)') }}</span>{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  placeholder="အဘအမည်(မြန်မာ)" class="form-control" name="father_name_mm" id="father_name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  placeholder="အဘအမည်(အင်္ဂလိပ်)" class="form-control" name="father_name_eng" id="father_name_eng">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ဇ)</span>လူမျိုး</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လူမျိုး" name="race" class="form-control" value="{{ old('race') }}" required="">
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ဈ)</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" class="form-control" value="{{ old('religion') }}" required="">
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ည)</span>မွေးသက္ကရာဇ်</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                    </div>
                                </div>

                               {{--<div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ဋ)</span>ဖုန်းနံပါတ်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" class="form-control" value="{{ old('phone') }}" required="">
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ဌ)</span>ဆက်သွယ်ရမည့်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဆက်သွယ်ရမည့်လိပ်စာ" name="current_address" class="form-control" value="{{ old('address') }}" required="">
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">၁၃။</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="address" class="form-control" value="{{ old('current_address') }}" required="">
                                    </div>
                                </div>--}}
                                
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဋ)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-8">
                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                                <label class="col-form-label" style="padding-left:5%;">CPA</label>
                                            </div>
                                        </div>
                                        <div id="cpa">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <input type="file"  class="form-control" name="cpa" >
                                                </div>
                                            </div><br/>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                                <label class="col-form-label" style="padding-left:5%;">RA</label>
                                            </div>
                                        </div>
                                        <div id="ra">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <!-- <div class="single-form"> -->
                                                        <input type="file"  class="form-control" name="ra" >
                                                    <!-- </div> -->
                                                </div>
                                            </div><br/>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-md-5 col-form-label label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                        </div>
                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-1" id="degree0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="type" class="form-control degree_pass_year" name="degree_pass_year[]" id="degree_pass_year" placeholder="လ၊နှစ်(MMM-YYYY)">
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAFFInitialDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <label  class="error attend_place_error" style="display:none;" for="education">Please select one</label><br/>
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဌ)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်" class="form-control" name="cpa_batch_no" id="cpa_batch_no">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဍ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8" >
                                        <input type="text"  placeholder="ဆက်သွယ်ရန်လိပ်စာ" class="form-control" name="address" id="address">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8" >
                                        <input type="text"  placeholder="တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('Contact E-mail Address') }}</div>
                                    <div class="col-md-8" >
                                        <input type="email"  placeholder="E-mail Address" class="form-control" name="contact_mail" id="contact_mail">
                                    </div>
                                </div>
                                {{--<div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဎ)') }}</span>နောက်ဆုံးမှတ်ပုံတင်ကြေးပေးသွင်းသည့်ခုနှစ်</div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="latest_reg_year" id="latest_reg_year" placeholder="နောက်ဆုံးမှတ်ပုံတင်ကြေးပေးသွင်းသည့်ခုနှစ်">
                                    </div>
                                </div>
                                <div class="row mb-1" style="padding-left: 110px;">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">(ဏ)</span>ရပ်နား Form တင်ထားခြင်းရှိ/မရှိ</label>
                                    <div class="row col-md-8 py-2">
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="yes"
                                                        name="submitted_stop_form" value="1" onclick="$('#date_range').show()" required>
                                                <span class="form-check-sign"></span>
                                                ရှိ
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id='no'
                                                        name="submitted_stop_form" value='0'  onclick="$('#date_range').hide()" required>
                                                <span class="form-check-sign"></span>
                                                မရှိ
                                            </label>
                                        </div>
                                        
                                        <label  class="error attend_place_error" style="display:none;" for="submitted_stop_form">Please select one</label>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;display:none" id="date_range" >
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="padding-left:0px;">
                                        <label>
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="from_date" id="from_date" placeholder="ရက်၊လ၊နှစ်">&nbsp;&nbsp;မှ&nbsp;&nbsp;
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="to_date" id="to_date" placeholder="ရက်၊လ၊နှစ်">&nbsp;&nbsp;အထိ ရပ်နား Form တင်ခဲ့ပါသည်။
                                        </label>
                                    </div>
                                </div>--}}
                                <div class="row">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span><span style="padding-left:0px">{{ __('CPA(Full-Fledged) အချက်အလက်များ') }}</span></label>
                                </div>
                                <div class="row" style="padding-left: 110px;">
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-11 col-form-label">လျှောက်ထားသူသည် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေအရ ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်ရရှိထားသူ သို့မဟုတ် ရရှိခဲ့ဖူးသူဖြစ်ပါက အောက်ပါအချက်များကို ရှင်းလင်းဖော်ပြပါ-</label>                                
                                </div>
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၁)') }}</label>

                                    <div class="col-md-7 col-form-label">နောက်ဆုံးထုတ်ပေးခဲ့သည့် ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့် လုပ်ကိုင်ခွင့်ပြုသည့်ခုနှစ်</div>
                                    <div class="col-md-3">
                                        <input type="text" name="old_card_no_year" id="old_card_no_year" class="form-control" style="width:90%;">
                                    </div>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">မှတ်ပုံတင်အမှတ်</div>
                                    <div class="col-md-3">
                                        <input type="text" name="reg_card_no" id="reg_card_no" class="form-control" style="width:90%;">
                                    </div><br><br>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">(မိတ္တူတင်ပြရန်)</div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="renew_file" style="width:90%;">
                                    </div>
                                </div>
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၂)') }}</label>
                                    <div class="col-md-9 col-form-label"> အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းလုပ်ကိုင်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ တွင်ဖော်ပြထားသည့် တာဝန်တစ်ရပ်ရပ်ကို ဆောင်ရွက်ရန်ပျက်ကွက်ခြင်း၊ ပုဒ်မ ၆၈ တွင် ဖော်ပြထားသည့် ကျင့်ဝတ်သိက္ခာတစ်ရပ်ရပ်ဖောက်ဖျက်ခြင်းတို့နှင့် စပ်လျဉ်း၍ ပုဒ်မ ၇၄ ပုဒ်မခွဲ (ခ) (ဂ) နှင့်ပုဒ်မ ၇၅ တို့အရပြစ်ဒဏ်ချမှတ်ခံထားရသူ ဟုတ်/မဟုတ်။ <input type="text" name="fine_person" class="form-control" style="display: inline;width: 100px;" >
                                </div>
                                </div>
                                <div class="row" style="padding-left: 110px;">
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-11 col-form-label">အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်</label>                                                              
                                </div><br/>

                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၁)') }}</label>
                                    <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ)မှတ်ပုံတင်လက်မှတ်</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="cpa_certificate" required="">
                                    </div>
                                </div><br/><br>

                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၂)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="mpa_mem_card_front"  id="mpa_mem_card_front" required="" accept="image/*">
                                    </div>
                                </div><br><br>
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="mpa_mem_card_back"  id="mpa_mem_card_back" required="" accept="image/*">
                                    </div>
                                </div>      
                                <div class="row mt-3" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၃)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(Full-Fledged) Registration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="cpaff_reg_no" id="cpaff_reg_no" placeholder="Enter CPA(FF) Registration No." required>
                                    </div>
                                </div>
                                <div class="row mt-3" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၄)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(Full-Fledged) Initial Registration လုပ်ခဲ့သော ခုနှစ်</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="cpaff_reg_year" id="cpaff_reg_year" placeholder="CPA(FF) Registration လုပ်ခဲ့သော ခုနှစ်" required>
                                    </div>
                                </div>
                                <div class="row mt-3" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၅)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(FF) နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="cpaff_last_renew_year" id="cpaff_last_renew_year" placeholder="CPA(Full-Fledged) နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်" required>
                                    </div>
                                </div><br><br><br>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၆)') }}</label>
                                    <div class="col-md-4 col-form-label">ရပ်နား Form တင်ထားခြင်းရှိ/မရှိ</div>
                                    <div class="row col-md-6 py-2">
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="yes"
                                                        name="resign" value="1" onclick="$('#date_range_cpaff').show()" required>
                                                <span class="form-check-sign"></span>
                                                ရှိ
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id='no'
                                                        name="resign" value='0'  onclick="$('#date_range_cpaff').hide()" required>
                                                <span class="form-check-sign"></span>
                                                မရှိ
                                            </label>
                                        </div>
                                        
                                        <label  class="error attend_place_error" style="display:none;" for="resign">Please select one</label>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;display:none" id="date_range_cpaff" >
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6" style="padding-left:0px;">
                                        <label>
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="resign_date" id="resign_date" placeholder="ခုနှစ်">&nbsp;&nbsp;တွင် ရပ်နား Form တင်ခဲ့ပါသည်။
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span><span style="padding-left:0px">{{ __('PAPP အချက်အလက်များ') }}</span></label>
                                </div>
                                {{--<div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-12"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်
                                                <input type="text" style="display:inline; width:100px;" name="papp_date" id="papp_date" placeholder="နှစ်(YYYY)" class="form-control" autocomplete="off">ခုနှစ်အတွက်
                                                <input type="text" style="display:inline; width:100px;" name="papp_reg_date" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control papp_reg_date" autocomplete="off">ရက်စွဲပါ မှတ်ပုံတင်အမှတ်
                                                <input type="text" class="form-control" name="registeration_no" style="display: inline;width: 100px;" placeholder="မှတ်ပုံတင်အမှတ်" required="" autocomplete="off"> ဖြင့်မှတ်ပုံတင်ပေးခဲ့ပီးဖြစ်ပါသည်။
                                                <input type="text" style="display:inline; width:100px;" name="papp_renew_year" id="papp_renew_year" placeholder="နှစ်(YYYY)" class="form-control papp_renew_year" autocomplete="off">ခုနှစ်အတွက် မှတ်ပုံတင်သက်တမ်းတိုးပေးရန် လျှောက်ထားပါသည်။
                                            </label>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1">
                                            <label class="col-form-label">{{ __('(က)') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label class="col-form-label">{{ __('ကျွန်ုပ်သည် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ရာတွင်') }}</label>
                                    </div>
                                </div>

                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" id="firm_check" name="work_name" onclick="getPappFirm()"></div>
                                    <div class="col-md-10">
                                        <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                    </div>
                                </div><br/>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="used_firm_check" value="" onclick="getPappFirm()"></div>
                                    <div class="col-md-10">
                                        <label style="font-size:15px;"> အသုံးပြုမည့်လုပ်ငန်းအမည် Firm Name, လုပ်ငန်းအမျိုးစားနှင့် မိမိ၏ အဆင့်မှာ အောက်ပါအတိုင်းဖြစ်ပါသည်-</label>
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမည်</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-5">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control"  name="used_firm_name" >
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမျိုးအစား (တစ်ဦးတည်းပိုင်/ အစုစပ်/ ကုမ္ပဏီ စသည်)</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-5">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control" value="" name="used_firm_type" >
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                    <!-- <div class="single-form"> -->
                                        <label class="col-form-label">-အဆင့်(Principal/ Managing Partner/ Partner စသည်)</label>
                                    <!-- </div> -->
                                    </div>
                                    <div class="col-md-5">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" value="" name="used_firm_level" ></div>
                                    <!-- </div> -->
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="staff_firm_check" value="" onclick="getPappFirm()"></div>
                                    <div class="col-md-4">
                                        <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                    </div>
                                    <div class="col-md-5">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" name="staff_firm_name" ></div>
                                    <!-- </div> -->
                                </div><br><br><br>
                                <div class="row" style="padding-left: 110px;">
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-11 col-form-label">အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်</label>                                                              
                                </div><br/>

                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(၁)</div>
                                    <div class="col-md-4">
                                        <label >PAPP မှတ်ပုံတင်ကတ်ပြား၊</label>
                                    </div>
									<div class="col-md-5">
                                        <input type="file" class="form-control"  id="papp_file"  name="papp_file" required="" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mt-3 mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၂)') }}</label>
                                    <div class="col-md-4 col-form-label">PAPP Registration No.</div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="papp_reg_no" id="papp_reg_no" placeholder="Enter PAPP Registration No." required>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၃)') }}</label>
                                    <div class="col-md-4 col-form-label">PAPP Initail Registration လုပ်ခဲ့သော ခုနှစ်</div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="papp_reg_year" id="papp_reg_year" placeholder="PAPP Registration လုပ်ခဲ့သော ခုနှစ်" required>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;display:none">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၄)') }}</label>
                                    <div class="col-md-4 col-form-label">PAPP နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်</div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="papp_last_renew_year" id="papp_last_renew_year" placeholder="PAPP နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်" >
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၄)') }}</label>
                                    <div class="col-md-4 col-form-label">PAPP နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်</div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="latest_reg_year" id="latest_reg_year" placeholder="PAPP နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(၅)') }}</label>
                                    <div class="col-md-4 col-form-label">ရပ်နား Form တင်ထားခြင်းရှိ/မရှိ</div>
                                    <div class="row col-md-6 py-2">
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="yes"
                                                        name="submitted_stop_form" value="1" onclick="$('#date_range').show()" required>
                                                <span class="form-check-sign"></span>
                                                ရှိ
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id='no'
                                                        name="submitted_stop_form" value='0'  onclick="$('#date_range').hide()" required>
                                                <span class="form-check-sign"></span>
                                                မရှိ
                                            </label>
                                        </div>
                                        
                                        <label  class="error attend_place_error" style="display:none;" for="submitted_stop_form">Please select one</label>
                                    </div>
                                </div>
                                <div class="row mb-2" style="padding-left: 110px;display:none" id="date_range" >
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6" style="padding-left:0px;">
                                        <label>
                                            {{--<input class="form-control" type="text" style="display:inline; width:100px;" name="from_date" id="from_date" placeholder="ရက်၊လ၊နှစ်">&nbsp;&nbsp;မှ&nbsp;&nbsp;
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="to_date" id="to_date" placeholder="ရက်၊လ၊နှစ်">&nbsp;&nbsp;အထိ ရပ်နား Form တင်ခဲ့ပါသည်။--}}
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="papp_resign_date" id="papp_resign_date" placeholder="ခုနှစ်">&nbsp;&nbsp;တွင် ရပ်နား Form တင်ခဲ့ပါသည်။
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-3" style="padding-left: 110px;">
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onchange="$('#btn_reconnect_papp').prop('disabled', !this.checked)"></div>
                                        <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                    </div>
								</div>
                                {{--<div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၆။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-11"  style="font-size:15px;"><?php echo date("Y") ?> ပြက္ခဒိန်နှစ်အတွင်း အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကိုဦးစီးပိုင်ရှင်/ ဦးဆောင်အဖွဲ့ဝင်/ သာမန်အစုဝင်/ အဖွဲ့ခေါင်းဆောင်အနေဖြင့် ကျွန်ုပ်လက်ခံဆောင်ရွက်ခဲ့သည့် Statutory Audit Work စုစုပေါင်း (<input type="text" style="display:inline; width:50px;" name="total_audit" class="form-control" required="">) ခုရှိပါသည်။ အဆိုပါ Statutory Audit Work အပြည့်အစုံကို အောက်ပါဇယားအတွင်းထုတ်ဖော်ကြေညာပါသည်-</label>
                                        </div><br>



                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class=""></label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <table class="table tbl_papp table-bordered input-table">
                                                    <thead>
                                                        <tr >
                                                            <th class="less-font-weight text-center" width="8%">စဉ်</th>
                                                            <th class="less-font-weight text-center"  width="37%">လုပ်ငန်းအပ်နှံသည့်ပုဂ္ဂိုလ်/ကုမ္ပဏီ/စီးပွားရေးအဖွဲ့အစည်း/လူမှုရေးအဖွဲ့အစည်း*</th>
                                                            <th class="less-font-weight text-center"  width="15%">စာရင်းကာလ**</th>
                                                            <th class="less-font-weight text-center"  width="40%">တာဝန်ယူဆောင်ရွက်သည့် Principal/Managing Partner/အမှုထမ်းPPA၏အမည်***</th>
                                                            <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowPapp("tbl_papp")'><li class="fa fa-plus"></li></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_papp_body">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">*</div>
                                    <div class="col-md-10">
                                        <p>နှစ်အတွင်း လက်ခံ/ရရှိ Statutory Audit Work လုပ်ငန်းအားလုံးကိုထည့်သွင်းရန်ဖြစ်ပါသည်။</p>
                                        <p>လုပ်ငန်းအပ်နှံသည့် ပုဂ္ဂိုလ်/ကုမ္ပဏီ/စီးပွားရေးအဖွဲ့အစည်း/လူမှုရေးအဖွဲ့အစည်း၏ မှတ်ပုံတင်အမှတ်ကိုပါ ဖော်ပြရန်လိုအပ်ပါသည်။ နှစ်အတွင်းလုပ်ငန်းမရှိလျှင် မရှိကြောင်းဖော်ပြရန်ဖြစ်သည်။</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">**</div>
                                    <div class="col-md-10">
                                        <p>ဆောင်ရွက်ပေးသည့်လုပ်ငန်း၏ စာရင်းကာလဖော်ပြရန်ဖြစ်ပါသည်။</p>                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">***</div>
                                    <div class="col-md-10">
                                        <p>ထို Statutory Audit Work ကို ဦးဆောင်တာဝန်ယူဆောင်ရွက်သူ (Team Leader) PPA အမည်ကိုဖော်ပြရန်ဖြစ်ပါသည်။</p>                                        
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၅။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('လျှောက်ထားသူ၏ဝန်ခံချက်-') }}</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(က)</div>
                                    <div class="col-md-10">
                                            <label >နှစ်အတွင်းလက်ခံဆောင်ရွက်ခဲ့သည့်လုပ်ငန်းများစာရင်းကို အပြည့်အစုံမှန်ကန်စွာ ဖော်ပြထားသည်။</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-10">
                                            <label >လက်ခံဆောင်ရွက်ပေးသည့် လုပ်ငန်းအားလုံးအတွက် နှစ်အလိုက် Register ဖြင့်မှတ်တမ်းတင်ထားရှိပါသည်။MAC မှလိုအပ်၍ တောင်းခံလျှင် တင်ပြနိုင်ပါသည်။</label>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၆။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျက် လျှောက်ထားပါသည်-') }}</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(က)</div>
                                    <div class="col-md-6">
                                        <label >PAPP မှတ်ပုံတင်ကတ်ပြား၊</label>
                                    </div>
									<div class="col-md-4">
                                        <input type="file" class="form-control"  id="papp_file"  name="papp_file" required="" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ) </div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
									<div class="col-md-4">
                                        <input type="file" class="form-control" id="cpd_record_file" name="cpd_record_file" required="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
                                    <div class="col-md-4">
                                            <input type="text" class="form-control" id="total_hours" name="total_hours" placeholder="စုစုပေါင်း နာရီ" required="" >
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="mpa_mem_card_front" id="mpa_mem_card_front" required="" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-4">
                                        <input type="file" class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back" required="" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(FF) Registration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Enter CPA(FF) Registration No." required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    <div class="col-md-6 col-form-label">PAPP Registration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="papp_reg_no" id="papp_reg_no" placeholder="Enter PAPP Registration No." required>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onchange="$('#btn_reconnect_papp').prop('disabled', !this.checked)"></div>
                                        <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                    </div>
								</div>--}}
                              <div class="row mb-3">
                                  <div class="col-md-2 offset-md-5">
                                      <button type="submit" id="btn_reconnect_papp" class="btn btn-success btn-hover-dark w-100 renew_submit" disabled>{{ __('Submit') }}</button>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </form>
              	</div>
            </div>
        </div>
    </div>
    <!-- Email Validate Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void(0);" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="reconnectPappModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Verificatoin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                            <label>We have been sent verification code on your email.Please check your email.</label>
                        </div>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label style="margin-bottom: 2%;">Enter your verification code</label>
                            <center><input type="text" class="form-control w-50" name="verify_code"
                                           placeholder="Enter Verification Code"></center>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn1" onclick="check_reconnect_papp_email()"
                                class="btn btn-success btn-hover-dark w-30">Verify
                        </button>
                    </center>
                    <br>
                    <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                    </div>
                    <br><br>
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
<script src="{{ asset('js/form_validation/reconnect_papp_validation.js') }}"></script>
<script type="text/javascript">
    $("#papp_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#papp_renew_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#resign_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#papp_resign_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $(".papp_reg_date").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    // $("#from_date").flatpickr({
    //         enableTime: false,
    //         dateFormat: "d-M-Y",
    //         allowInput: true,
    // });
    // $("#to_date").flatpickr({
    //         enableTime: false,
    //         dateFormat: "d-M-Y",
    //         allowInput: true,
    // });
    $("#degree_pass_year").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    $("#tax_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#latest_reg_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#old_card_no_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#cpaff_reg_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#cpaff_last_renew_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#papp_reg_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#papp_last_renew_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
</script>
@endpush
