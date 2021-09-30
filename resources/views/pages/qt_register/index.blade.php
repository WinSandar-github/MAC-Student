@php
    $nrc_language = config('myanmarnrc.language');
    $nrc_regions = config('myanmarnrc.regions_states');
    $nrc_townships = config('myanmarnrc.townships');
    $nrc_citizens = config('myanmarnrc.citizens');
    $nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')

@section('content')

    <style>
        .p-input {
            border:none;
            border-bottom: 1px solid #1890ff;
            padding: 5px 10px;
            outline: none;
            text-align: center;
        }
    </style>

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
                    <h2 class="title">Qualified Test Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>
            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}"
                     alt="Shape">
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
        <div class="container" style="overflow: hidden;">
            <div class="status-reject" style="display:none">
                <div class="card text-white bg-dark my-3">

                    <div class="card-body">
                        <!-- status == 2 => reject -->
                        <p class="card-text reject">
                            Your DA 1 Registration Form need to prepare.Please update your form
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
                        <p class="card-text">You have the opportunity to attend the training </p>
                    </div>
                </div>

                <div class="card text-white bg-primary my-3">
                    <div class="card-body add_exam">
                    </div>
                </div>
            </div>

            {{--register form section--}}
            <div class="comment-form study">
                <input type="hidden" name="form_type" id="form_type">
                <div class="form-wrapper">
                    <div class="">
                        <!-- QT Register -->
                        <div class="row" style="margin-bottom:2%;">
                            <form method="post" action="javascript:void(0);" onsubmit="return false" id="qt_form" enctype="multipart/form-data">
                                <div class="card border-success mb-2 p-5">

                                    <div class="row mb-2">
                                        <h5 class="card-title text-center fw-bolder pb-4" style="line-height: 2rem">
                                            ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br>
                                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                            နိုင်ငံခြားတိုင်းပြည်များမှ စာရင်းပညာဆိုင်ရာလက်မှတ်ရရှိထားသည့်
                                            မြန်မာနိုင်ငံသားများအား<br>
                                            လက်မှတ်ရပြည်သူ့စာရင်းကိုင်အောင်လက်မှတ်ချီးမြှင့်ရန်အတွက်<br>
                                            အရည်အချင်းစစ်စာမေးပွဲဖြေဆိုရန်လျှောက်လွှာ
                                        </h5>
                                    </div>

                                    {{--Login info--}}
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row mb-2">
                                                {{--<label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                <label for="" class="col-md-5 col-form-label label_align_right">Email</label>--}}
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အီးမေးလ်</label>
                                                <div class="col-md-8" style="padding-left:10px;">
                                                    <input type="email" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email" class="form-control" id="email">
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                {{--<label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                <label for="" class="col-md-5 col-form-label label_align_right">Password</label>--}}
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>လျို့ဝှက်နံပါတ်</label>
                                                <div class="col-md-8" style="padding-left:10px;">
                                                    <input type="password" placeholder="လျို့ဝှက်နံပါတ်ထည့်ပါ" name="password" class="form-control" id="password">
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                {{--<label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                <label for="" class="col-md-5 col-form-label label_align_right">Confirm Password</label>--}}
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span><span class="pull-right">လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း</span></label>
                                                <div class="col-md-8" style="padding-left:10px;">
                                                    <input type="password" placeholder="လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း" name="confirm_password" class="form-control" id="confirm_password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 text-center">
                                            {{--<div class="col-md-7 pull-right">
                                                <img class="col-md-3 profile-style" id="previewImg"
                                                     src="{{ asset('assets/images/blank-profile-picture-1.png')}}"
                                                     accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                    <input type="file" class="custom-file-input" id="profile_photo"
                                                           name="image"
                                                           value="{{ old('image') }}" accept="image/*"
                                                           onchange="previewImageFile(this);" required>
                                                </p>
                                                <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.
                                                </div>
                                            </div>--}}

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
                                                    <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                                    <br>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                            {{--User Photo--}}
                                        </div>
                                    </div>

                                    {{--အမည်(မြန်မာ/အင်္ဂလိပ်)--}}
                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" class="form-control" id="name_mm">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" class="form-control" id="name_eng">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        <div class="col-md-9">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2 col-5 pr-1">
                                                    <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-7 px-1">
                                                    <select class="form-control" name="nrc_township" id="nrc_township">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_townships as $township)
                                                            <option value="{{ $township['township_mm'] }}">
                                                                {{ $township['township_mm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-5 px-1">
                                                    <select class="form-control" name="nrc_citizen" id="nrc_citizen">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-5 col-7 pl-1">
                                                    <input type="text" name="nrc_number" placeholder="eg : ၁၂၃၄၅၆" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား
                                                            (အရှေ့)</label>
                                                    </div>
                                                    <div class="row">
                                                        <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg"
                                                             src="{{ asset('assets/images/blank-profile-picture-1.png')}}"
                                                             accept="image/png,image/jpeg" alt="">
                                                        <p class="mt-2">
                                                            <input type="file" class="nrc-custom-file-input"
                                                                   id="nrc_front" name="nrc_front"
                                                                   value="{{ old('nrc_front') }}" accept="image/*"
                                                                   onchange="previewNRCFrontImageFile(this);" required>
                                                        </p>
                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png
                                                            Image.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား
                                                            (အနောက်)</label>
                                                    </div>
                                                    <div class="row">
                                                        <img class="col-md-12 nrc-image-style" id="previewNRCBackImg"
                                                             src="{{ asset('assets/images/blank-profile-picture-1.png')}}"
                                                             accept="image/png,image/jpeg" alt="">
                                                        <p class="mt-2">
                                                            <input type="file" class="nrc-custom-file-input"
                                                                   id="nrc_back" name="nrc_back"
                                                                   value="{{ old('nrc_back') }}" accept="image/*"
                                                                   onchange="previewNRCBackImageFile(this);" required>
                                                        </p>
                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png
                                                            Image.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-5 text-center">
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
                                                        <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*" required>
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                                <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4 text-center">
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
                                                         <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" required>
                                                     </span>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                                <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control" required="">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" id="father_name_eng" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>လူမျိုး</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control" value="{{ old('race') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" id="relogion" class="form-control" value="{{ old('religion') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>မွေးသက္ကရာဇ်</label>
                                        <div class="col-md-9">
                                            <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ဖုန်းနံပါတ်</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>ဆက်သွယ်ရမည့်လိပ်စာ</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="ဆက်သွယ်ရမည့်လိပ်စာ" name="current_address" id="current_address" class="form-control" value="{{ old('address') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        {{--<label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>--}}
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="address" id="address" class="form-control" value="{{ old('current_address') }}" required="">
                                        </div>
                                    </div>

                                    {{--လက်ရှိအလုပ်အကိုင်--}}
                                    <div class="row mb-2">
                                        <label for="" class="col-md-3 col-form-label label_align_right"><span
                                                    class="pull-left">{{ __('၁၃။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                        <div class="col-md-9">
                                            <input type="text" name="current_job" id="current_job" placeholder="လက်ရှိအလုပ်အကိုင်" class="form-control">
                                        </div>
                                    </div>

                                    {{--ရုံးလိပ်စာ--}}
                                    <div class="row mb-2">
                                        <label for="" class="col-md-3 col-form-label label_align_right"><span
                                                    class="pull-left">{{ __('၁၄။') }}</span>ရုံးလိပ်စာ</label>
                                        <div class="col-md-9">
                                            <input type="text" name="office_address" placeholder="ရုံးလိပ်စာ" id="office_address" class="form-control"
                                            >
                                        </div>
                                    </div>

                                    {{--ပညာအရည်အချင်း(local)--}}
                                    {{-- <div class="row mb-2">
                                        <label for="" class="col-md-3 col-form-label label_align_right"><span
                                                    class="pull-left">{{ __('၁၅။') }}</span>ပြည်တွင်းမှရရှိသည့်ပညာအရည်အချင်း</label>
                                    </div> --}}

                                    {{--ပညာအရည်အချင်း(local) လက်မှတ်မိတ္တူအမှန်--}}
                                    <div class="row mb-2">
                                        <label for="" class="col-md-3 col-form-label label_align_right"><span class="pull-left">၁၅။</span>ပြည်တွင်းမှရရှိသည့်ပညာအရည်အချင်း</label>
                                        <div class="col-md-9" id="edu">
                                            <div class="row mb-3" id="edu0">
                                                <div class="col-md-11" id="degree_edu">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" name="edu_status_local[]" id="edu_status_local" placeholder="ဘွဲ့အမည်" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control" id="certificate0" name="certificate[]" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 text-center" id="add_div">
                                                    <button type="button" class="btn btn-primary" id="add_btn"
                                                            onclick="AddQTEdu()">
                                                        <i class="fa fa-plus" style="margin-left: 0px"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--ပညာအရည်အချင်း(Foreign)--}}
                                    <div class="row mb-3">

                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">၁၆။</span>နိုင်ငံခြားတိုင်းပြည်မှပေးအပ်သည့် <br>
                                            ပညာအရည်အချင်း</label>

                                        <div class="col-md-3 pt-3">

                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"
                                                       name="edu_status_foreign" value="1">
                                                <label class="form-check-label">ACCA</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"
                                                       name="edu_status_foreign" value="2">
                                                <label class="form-check-label">CIMA</label>
                                            </div>

                                            <label class="error attend_place_error" style="display:none;"
                                                   for="gov_staff">Please select one</label>
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10">

                                            <div class="row mb-2">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">(က)</span>ပေးအပ်သည့်အဖွဲ့အစည် အမည်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="organization_name" placeholder="ပေးအပ်သည့်အဖွဲ့အစည် အမည်" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-md-4 col-form-label label">ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="organization_address" placeholder="ဆက်သွယ်ရန်လိပ်စာ" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-md-4 col-form-label label">အီးမေလ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="organization_email" placeholder="အီးမေလ်" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">(ခ)</span>စာမေးပွဲကျင်းပသည့်နှစ်၊ လ</label>
                                                <div class="col-md-8">
                                                    <input type="date" name="exam_date" placeholder="နှစ်၊လ" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">(ဂ)</span>မှတ်ပုံတင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="exam_register_no" placeholder="မှတ်ပုံတင်အမှတ်" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <p class="fw-bold">
                                           ၁၇။မြန်မာနိုင်ငံစာရင်းကောင်စီက
                                            <input class="p-input" type="text"> ခုနှစ်၊ <input class="p-input" type="text"> လ တွင်ကျင်းပမည့်အရည်အချင်းစစ်စာမေးပွဲကိုဝင်ရောက်ဖြေဆိုရန် လျှောက်ထားခြင်းဖြစ်ပါသည်။
                                        </p>
                                    </div>

                                    <div class="row mb-3">
                                        <p class="fw-bold">
                                            ၁၈။ပြည်ထောင်စုမြန်မာနိုင်ငံသားဖြစ်ကြောင်းနှင့် အခြားနိုင်ငံသားအဖြစ်ခံယူထားခြင်းမရှိကြောင်း ဝန်ခံကတိပြုပါသည်။
                                        </p>
                                    </div>

                                    {{--ဝန်ခံချက်--}}
                                    <div class="row mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"
                                                        name="submit_confirm_ss"
                                                       id="submit_confirm_ss"
                                                       value = "1"
                                                       onchange="$('#submit_btn_mac').prop('disabled', !this.checked)">
                                                <span class="form-check-sign"></span>
                                                <p class="fw-bolder">
                                                    * အထက်တွင်ဖော်ပြသည့်အချက်များ အားလုံးမှန်ကန်ပါသည်။ မမှန်မကန်ဖော်ပြပါကစာမေးပွဲဖြေဆိုခွင့်မရှိကြောင်းနှင့် ဖြေဆိုအောင်မြင်ပါကလည်း မြန်မာနိုင်ငံစာရင်းကောင်စီ၏အဆုံးအဖြတ်ကိုခံယူပါမည်ဟု ဝန်ခံကတိပြုပါသည်။
                                                </p>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-25"
                                                id="submit_btn_mac" disabled>
                                            {{ __('Submit') }}
                                        </button>
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
    </div>

    <!-- JavaScript Section -->
    <script>
        // function getname(name_mm) {
        //     console.log("aa");
        //     var name_mm_display = document.getElementById('name_mm_display');
        //     name_mm_display.value = name_mm.value;
        //   }
        var mmnrc_regions = {!! json_encode($nrc_regions) !!};
        // get NRC Townships data from myanmarnrc.php config file
        var mmnrc_townships = {!! json_encode($nrc_townships) !!};
        // get NRC characters data from myanmarnrc.php config file
        var mmnrc_characters = {!! json_encode($nrc_characters) !!};
        // get language data from myanmarnrc.php config file
        var mmnrc_language = "{{ $nrc_language }}";
        // Get value on change
    </script>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/QualifiedTest/qualifiedtest.js') }}"></script>
    <script src="{{ asset("js/form_validation/qt_validation.js") }}"></script>
    <script>
        $(document).ready(function(){
            $("input[name='exam_date']").flatpickr({
                enableTime: false,
                allowInput: true,
                altInput: true,
                altFormat: "Y , F",
                dateFormat: "d-m-Y",
            });
        });
        $(document).ready(function(){
            $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                allowInput: true,
                altInput: true,
                altFormat: "j F , Y",
                dateFormat: "d-m-Y",
            });
        });
    </script>
@endpush
