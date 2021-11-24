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
    .form-group{
        margin-bottom: 1rem;
    }
    .list {
        max-height: 350px;
        overflow-y: auto !important;
    }
    li{
        display: inline;
    }
    ul{
        padding-left: 0px !important;
    }
</style>
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
                    <h2 class="title">Firm Article Registration  <span>Form</span></h2>
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
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                    <div class="comment-form">
                        <!-- Form Wrapper Start -->
                        <div class="form-wrapper">

                            <form method="post" id="article_cpaTwoPassOneYear_form"  action="javascript:void();"
                                    enctype="multipart/form-data" class="needs-validation" autocomplete="off" novalidate>
                                @csrf

                                <div class="row">
                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                        <div class="row mb-3">
                                            <h5 class="card-title text-center fw-bolder">
                                                ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br><br>
                                                ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး<br><br>
                                                စာရင်းကိုင်အလုပ်သင်လျှောက်လွှာပုံစံ
                                            </h5>
                                            <div>
                                                <h6 align="right">ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                <!-- <h6>အမှတ်စဥ် - {{ __("____") }}</h6> -->
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label>သို့</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-1"></div>
                                            <label class="col-md-3 col-form-label">အတွင်းရေးမှူး</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-1"></div>
                                            <label class="col-md-3 col-form-label">မြန်မာနိုင်ငံစာရင်းကောင်စီ</label>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-5 col-form-label label"><span class="pull-left">အကြောင်းအရာ။</span>လက်တွေ့အလုပ်သင်ကြားရန် ဆန္ဒပြုခြင်း</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-11">
                                                <ul>
                                                    <li>လူကြီးမင်း </li>
                                                    <li>
                                                        <input type="radio" class="form-check-input" value="1" id="male1" name="gender" >
                                                        <label class="form-check-label " for="">ခင်ဗျာ</label>
                                                        <input type="radio" class="form-check-input" value="0" id="female2" name="gender" >
                                                        <label class="form-check-label " for="">ရှင့်</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div id="renew_first_row" >
                                            <div class="row mb-3">
                                                <label class="col-md-1 col-form-label label"><span class="pull-left">{{__('၁။')}}</span></label>
                                                <div class="col-md-11">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" class="form-check-input" value="1" id="male3" name="gender2" >
                                                            <label class="form-check-label " for="">ကျွန်တော်</label>
                                                            <input type="radio" class="form-check-input" value="0" id="female3" name="gender2" >
                                                            <label class="form-check-label " for="">ကျွန်မ</label>
                                                        </li>
                                                        <li>သည် မြန်မာနိုင်ငံစာရင်းကောင်စီက ဖွင့်လှစ်သည့် လက်မှတ်ရပြည်သူ့စာရင်းကိုင်
                                                            <li>
                                                                <input type="radio" class="form-check-input" value="( ဒုတိယပိုင်း ) သင်တန်း"  name="course_exam" >
                                                                <label class="form-check-label " for=""> ( ဒုတိယပိုင်း ) သင်တန်း/</label><br/>
                                                                <input type="radio" class="form-check-input" value="အရည်အချင်းစစ်စာမေးပွဲ"  name="course_exam" >
                                                                <label class="form-check-label " for="">အရည်အချင်းစစ်စာမေးပွဲ</label>
                                                            </li>

                                                            ကို အောင်မြင်သူတစ်ဦးဖြစ်ပါသည်။</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="request_row">
                                            <div class="row mb-5">
                                                <label class="col-md-1 col-form-label label"><span class="pull-left" id="request_label">{{__('၂။')}}</span></label>
                                                <div class="col-md-11">
                                                    လက်တွေ့အလုပ်သင်ကြားရန်ဆန္ဒရှိပါသဖြင့် အောင်ဖော်ပြပါအချက်အလက်များကို ဖြည့်သွင်းလျှောက်ထားအပ်ပါသည်။
                                                </div>
                                            </div>
                                        </div>


                                        <div id="cpa2_pass_1year_row" style="display:none">
                                            <div class="row mb-3">
                                                <label class="col-md-1 col-form-label label"><span class="pull-left">{{__('၂။')}}</span></label>
                                                <div class="col-md-11">
                                                    အများပြည်သူသို့စာရင်းဝန်‌ဆောင်မှုပေးသည့်လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် မှတ်ပုံတင်ခဲ့ဖူးခြင်းမရှိပါ။
                                                </div>
                                            </div>

                                            <div class="row mb-5">
                                                <label class="col-md-1 col-form-label label"><span class="pull-left">{{__('၃။')}}</span></label>
                                                <div class="col-md-11">
                                                    လက်တွေ့အလုပ်သင်ကြားခြင်း (၂) နှစ်ပြည့်မြောက်ပြီး၍ ထပ်မံလိုအပ်သောအလုပ်သင် (၁) နှစ်ကို လက်တွေ့အလုပ်သင်ကြားရန် ဆန္ဒရှိပါသဖြင့် အောက်ဖော်ပြပါအချက်အလက်များကို ဖြည့်သွင်း လျှောက်ထားအပ်ပါသည်။
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-8">
                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အီးမေးလ်</label>
                                                    <div class="col-md-8">
                                                        <input type="email" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email" class="form-control" id="email">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>လျို့ဝှက်နံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်ထည့်ပါ" name="password" class="form-control" id="password" minlength="8">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း" name="confirm_password" class="form-control" id="confirm_password">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-md-4 text-center">
                                                {{--User Photo--}}
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-circle shadow">
                                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="previewImg"
                                                                alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                    <div class="d-flex justify-content-center">
                                                        <span class="btn btn-round btn-secondary btn-file">
                                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" id="profile_photo" name="image" accept="image/*"></span>
                                                        <br>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                                    <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>ကိုယ်ပိုင်အမှတ်/ခုံအမှတ်</label>
                                                    <div class="col-md-9">
                                                        <input type="text" placeholder="ကိုယ်ပိုင်အမှတ်" name="personal_no" id="personal_no" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    <div class="col-md-9">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select class="form-control" name="nrc_state_region"
                                                                        id="nrc_state_region"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                                    @foreach($nrc_regions as $region)
                                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 col-7 px-1">
                                                                <select class="form-control" name="nrc_township" id="nrc_township"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                                    @foreach($nrc_townships as $township)
                                                                        <option value="{{ $township['township_mm'] }}">
                                                                            {{ $township['township_mm'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 col-5 px-1">
                                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                                    @foreach($nrc_citizens as $citizen)
                                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-5 col-7 pl-1">
                                                                <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                        id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                        oninput="this.value= en2mm(this.value);"
                                                                        maxlength="6" minlength="6" placeholder=""
                                                                        style="height: 38px" value="{{ old('nrc_number') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <div class="row mb-3">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-5 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCFrontImg" alt="Upload Photo">
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

                                            <div class="col-md-5 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCBackImg"
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

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>ပညာအရည်အချင်း</label>

                                            <div class="col-md-9">
                                                <table class="table tbl_degree table-bordered input-table">
                                                    <thead>
                                                        <tr >
                                                            <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                            <th class="less-font-weight text-center"  width="40%">တက္ကသိုလ်/ဘွဲ့/ဒီပလိုမာ</th>
                                                            <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                            <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_degree_body">
                                                        <tr>
                                                            <td class="text-center"><input type="number" class="form-control" value="1" style="border:none"/></td>
                                                            <td><input type="text" name="degrees[]" class="form-control"  autocomplete="off" required></td>
                                                            <td><input type="file" name="degrees_certificates[]" class="form-control"  required></td>
                                                            <td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick='delRowEducation("tbl_degree_body")'><li class="fa fa-times"></li></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                        <!-- <div id="certificate_row">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p class="ml-2" style="font-weight:bold" align="left">ပညာအရည်အချင်းမိတ္တူ</p>
                                                        </div>
                                                        <div class="col-md-3 stu_certificate">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                            <div class="col-md-9" id="edu">
                                                <div class="row mb-3" id="edu0">
                                                    <div class="col-md-11" id="degree_edu">
                                                        <input type="file" class="form-control" id="certificate0" name="certificate[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary" id="add_btn" onclick="AddDAEdu()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control" value="{{ old('race') }}" >
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" id="religion" class="form-control" value="{{ old('religion') }}"  >
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>မွေးသက္ကရာဇ်</label>
                                            <div class="col-md-9">
                                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="dd-mm-yyyy" value="{{ old('date_of_birth') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" >
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" id="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" >
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="experience_row">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>လက်တွေ့အလုပ်သင်ကြားဖူးခြင်း ရှိ/မရှိ<span style="color:red">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="radio" class="form-check-input mr-3" value="1" id="experience_yes" name="experience" >
                                                                <label class="form-check-label " for="">ရှိ</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio" class="form-check-input mr-3" value="0" id="experience_no" name="experience" >
                                                                <label class="form-check-label " for="">မရှိ</label>
                                                            </div>
                                                            <label  class="error attend_place_error" style="display:none;" for="experience">Please select one</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="experience_attach_row" style="display:none">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>ရှိပါက အထောက်အထားများဖြင့် တင်ပြပေးပါရန်</label>
                                                <div class="col-md-9" id="experience">
                                                    <div class="row mb-3" id="experience0">
                                                        <div class="col-md-11" id="experience_file">
                                                            <input type="file" class="form-control" id="experience_file0" name="experience_file[]" autocomplete="off">
                                                        </div>
                                                        <div class="col-md-1 text-center" id="add_div">
                                                            <button type="button" class="btn btn-primary" id="add_btn" onclick="AddExp()">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="current_job_label">{{ __('၁၂။') }}</span>ပုဂ္ဂလိကနှင့် အစိုးရဌာနအဖွဲအစည်းများ၊ အခြားဌာနအဖွဲ့အစည်းများ၊ ကုမ္ပဏီများ၊ Non Audit Service လုပ်ငန်းများတွင် အချိန်ပြည့်/ အချိန်ပိုင်းဝန်ထမ်း အဖြစ်ဆောင်ရွက်နေခြင်း ရှိ/မရှိ<span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="1" id="current_job_yes" name="current_job" >
                                                            <label class="form-check-label " for="">ရှိ</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="0" id="current_job_no" name="current_job" >
                                                            <label class="form-check-label " for="">မရှိ</label>
                                                        </div>
                                                        <label  class="error attend_place_error" style="display:none;" for="current_job">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="current_job_row" style="display:none;">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>ရှိပါက ရာထူး/ စတင်ထမ်းဆောင်သည့်နေ့</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="ရာထူး" name="gov_position" id="position" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="dd-mm-yyyy" name="gov_joining_date" id="job_started_date" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="current_address_label">{{ __('၁၃။') }}</span>ဆက်သွယ်ရန်လိပ်စာ<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="current_address"  class="form-control" id="current_address">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="address_label">{{ __('၁၄။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="address" id="address" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="phone_label">{{ __('၁၅။') }}</span>ဖုန်းနံပါတ်<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" id="phone_no" class="form-control" placeholder="ဖုန်းနံပါတ်">
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="m_email_label">{{ __('၁၃။') }}</span>အီးမေးလ်လိပ်စာ<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="email" placeholder="အီးမေးလ်လိပ်စာ" name="m_email" id="m_email" class="form-control" >
                                            </div>
                                        </div> -->



                                        <!-- <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="papp_name_label">{{ __('၁၄။') }}</span>လက်တွေ့အလုပ်သင်ကြားလိုသည့် PAPP အမည်<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="papp_name" id="papp_name" class="form-control" placeholder="လက်တွေ့အလုပ်သင်ကြားလိုသည့် PAPP အမည်">
                                            </div>
                                        </div> -->

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="papp_name_label">{{ __('၁၆။') }}</span>လက်တွေ့အလုပ်သင်ကြားလိုသည့် PAPP အမည်<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input id="papp_name" type="text" name="papp_name" class="form-control" placeholder="လက်တွေ့အလုပ်သင်ကြားလိုသည့် PAPP အမှတ်">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="hidden" id="mentor_id">
                                                        <input type="text" name="mentor_name" id="mentor_name" class="form-control" placeholder="Mentor Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="previous_exam_pass_row" >
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left" id="exam_pass_date_label">{{ __('၁၇။') }}</span>စာမေးပွဲကျင်းပသည့် ခုနှစ်၊လ ၊ အောင်မြင်သည့်အမှတ်စဥ် </label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="dd-mm-yyyy" name="pass_date" id="pass_date" class="form-control" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="အောင်မြင်သည့်အမှတ်စဥ်" name="pass_no" id="pass_no" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="exam_pass_date_label">{{ __('၁၈။') }}</span>ရုံးအမိန့် </label>
                                            <div class="col-md-9">
                                                <input type="file" name="office_order_attach" class="form-control">
                                            </div>
                                        </div>

                                        <input type="hidden" id="student_info_id" name="student_info_id" >
                                        <input type="hidden" id="article_form_type" name="article_form_type" value="c2_pass_qt_pass_3yr">
                                        <input type="hidden" id="offline_user" value="true">
                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="confirm_142" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * <a href="https://demo.aggademo.me/MAC/public/storage/article/128.pdf" target="_blank">ဤရုံးအမိန့်အမှတ် (၁၂၈) </a> အားဖတ်ရှုပြီးဖြစ်ပါသည်။<br>
                                                    </p>
                                                </label><br>
                                                <label  class="error attend_place_error" style="display:none;" for="confirm_142">Please check one</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="confirm_status" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    * <div class="row">
                                                        <div class="col-md-1">၁ ။</div>
                                                        <div class="col-md-11">
                                                            <p class="fw-bolder">ကျွန်တော်/ ကျွန်မသည် ယခုလက်ရှိအချိန်တွင် အစိုးရနှင့် ပုဂ္ဂလိက အဖွဲ့အစည်းများတွင် အချိန်ပြည့်ဝန်ထမ်းအဖြစ် တာဝန်ထမ်းဆောင်နေခြင်းမရှိပါ။ Non Audit Service လုပ်ငန်းများလုပ်ကိုင် ဆောက်ရွက်နေခြင်းမရှိပါ။</p>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">၂ ။</div>
                                                        <div class="col-md-11">
                                                            <p class="fw-bolder">စာရင်းကိုင်အလုပ်သင်အဖြစ်ဆောင်ရွက်ရမည့် အချိန်အတွင်း အချိန်ပြည့်ဝန်ထမ်းအဖြစ် ဆောင်ရွက်ခြင်း၊ Non Audit Service လုပ်ငန်းများလုပ်ကိုင်မည်ဆိုပါက အလုပ်သင်အဖြစ်ဆောင်ရွက်ခြင်းမှ ရပ်ဆိုင်းခွင့်ပြုပါရန် မြန်မာနိုင်ငံစာရင်းကောင်စီသို့ မပျက်မကွက်အသိပေးပါမည်။ အလုပ်သင်ကာလအတွင်း အလုပ်သင်ကြားခြင်းနှင့်ဆိုင်သည့် လုပ်ငန်းတာဝန်များကို သာအချိန်ပြည့်တာဝန် ထမ်းဆောင်ရမည်ကို သိရှိပါသည်။</p>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">၃ ။</div>
                                                        <div class="col-md-11">
                                                            <p class="fw-bolder">စာရင်းကိုင်အလုပ်သင်နှင့် ကိုယ်ပိုင်စာရင်းကိုင် သင်တန်းကျောင်းများ ကြီးကြပ်ရေးကော်မတီ၏ ၇-၄-၂၀၂၀ ရက်စွဲပါ ရုံးအမိန့်အမှတ် ၁၂၈ ပါ စာရင်းကိုင်အလုပ်သင်များလိုက်နာရမည့် စည်းကမ်းချက်များနှင့် ရပိုင်ခွင့်များကို သိရှိနားလည် ပြီးဖြစ်ပါသည်။</p>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">၄ ။</div>
                                                        <div class="col-md-11">
                                                            <p class="fw-bolder">ဤဝန်ခံချက် ပျက်ကွက်ပါက အလုပ်သင်စည်းမျဥ်းများနှင့်အညီ အရေးယူခြင်းကို ခံရမည်ဖြစ်ကြောင်း သဘောတူပါသည်။</p>
                                                        </div>
                                                    </div>
                                                </label><br>
                                                <label  class="error attend_place_error" style="display:none;" for="confirm_status">Please check one</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="mentor_declare" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်စွာရေးသွင်းထားပါသည်။၊<br>
                                                    </p>
                                                </label>

                                            </div>
                                        </div>

                                        <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                                        <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >

                                        <div class="row justify-content-center">
                                            <button type="submit" id="submit_btn" class="btn btn-success btn-hover-dark w-25" disabled>
                                                Submit
                                            </button>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Form Wrapper End -->
                    </div>
                    <br><br>
            </div>

        </div>
<!-- Modal -->
<form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="modal fade" id="cpaTwoPassOneYearArticleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Email Verificatoin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center><br>
                                <div class="mb-3" style="text-align:center;">
                                    <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                                    <label>We have been sent verification code on your email.Please check your email.</label>
                                </div><br>
                                <div class="mb-3" style="text-align:center;">
                                    <label style="margin-bottom: 2%;">Enter your verification code</label>
                                    <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Enter Verification Code"></center>
                                </div>
                            </div>
                            <center>
                                <button type="submit" id="btn1" onclick="check_email_cpaTwoPassOneYear()" class="btn btn-success btn-hover-dark w-30">Verify
                                </button>
                            </center><br>
                            <div class="col-md-12" style="text-align:center;">
                                <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                            </div><br><br>
                        </div>
                    </div>
                </div>
</form>

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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/article_register.js')}}"></script>
<script src="{{ asset('js/form_validation/article_firm_validation.js') }}"></script>
<script type="text/javascript">
    $('document').ready(function(){

        loadMentorList();


    })

    $(document).ready(function (e) {
        $("input[name=current_job]").on("click", function(evt) {
            var checkedValue = $("input[name='current_job']:checked").val();
            if(checkedValue == '1'){
                $("#current_job_row").css('display','block');
            }
            else if(checkedValue == '0'){
                $("#current_job_row").css('display','none');
            }
        });

        $("input[name=experience]").on("click", function(evt) {
            var checkedValue = $("input[name='experience']:checked").val();
            if(checkedValue == '1'){
                $("#experience_attach_row").css('display','block');
            }
            else if(checkedValue == '0'){
                $("#experience_attach_row").css('display','none');
            }
        });

        $("input[id='job_started_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
        });

        // $("input[name='date_of_birth']").flatpickr({
        //         enableTime: false,
        //         dateFormat: "d-M-Y",
        //         allowInput: true
        // });

        $("input[name='pass_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true
        });

        $("input[name='previous_papp_start_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
        });

        $("input[name='previous_papp_end_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
        });

        $("input[id*='nrc_number'], text[id*='nrc_number']").change(function(e) {
            myanmarLetterOnly($(this));
        });

        $(document).on('keydown', '#nrc_number', function () {
            myanmarLetterOnly($(this));
        });

        $("input[id*='name_mm'], text[id*='name_mm']").change(function(e) {
            myanmarLetterOnly($(this));
        });

        $(document).on('keydown', '#name_mm', function () {
            myanmarLetterOnly($(this));
        });

        $("input[id*='father_name_mm'], text[id*='father_name_mm']").change(function(e) {
            myanmarLetterOnly($(this));
        });

        $(document).on('keydown', '#father_name_mm', function () {
            myanmarLetterOnly($(this));
        });

        $('#btn_cash').click(function () {
            setTimeout(function () {
                $('#exampleModal1').modal('hide');
            }, 1000);
        });

        $('#cash_img').click(function () {
            $('#btn_cash').prop('disabled', false);
        });

        $('#cb_img').click(function () {
            $('#btn_cash').prop('disabled', true);
        });

        $('#mpu_img').click(function () {
            $('#btn_cash').prop('disabled', true);
        });
        $('#btn_cash').prop('disabled', true);

    });

    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }

    function validateSubmitClick(){
      var check_confirm_142 = $("input[name=confirm_142]").prop('checked');
      var check_confirm_status = $("input[name=confirm_status]").prop('checked');
      var check_mentor_declare = $("input[name=mentor_declare]").prop('checked');

      if(check_confirm_142 == true && check_confirm_status == true && check_mentor_declare == true){
        $("#submit_btn").prop('disabled',false);
      }
      else if(check_confirm_142 == false || check_confirm_status == false || check_mentor_declare == false){
        $("#submit_btn").prop('disabled',true);
      }
    }

</script>
@endpush
