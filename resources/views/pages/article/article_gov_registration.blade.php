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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Government Article Registration  <span>Form</span></h2>
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
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                    <div class="comment-form">
                        <!-- Form Wrapper Start -->
                        <div class="form-wrapper">

                            <form method="post" id="article_gov_register_form"  action="javascript:javascript:void(0);"
                                    enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                        <div class="row mb-5">
                                            <h5 class="card-title text-center fw-bolder">
                                                ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br>
                                                ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး<br>
                                                စာရင်းကိုင်အလုပ်သင်လျှောက်လွှာပုံစံ
                                            </h5>
                                            <div>
                                                <h6 align="right">ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                <!-- <h6>အမှတ်စဥ် - {{ __("____") }}</h6> -->
                                            </div>
                                        </div>

                                        <div class="row">

                                            {{--<div class="col-md-8">
                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အီးမေးလ်</label>
                                                    <div class="col-md-8">
                                                        <input type="email" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email" class="form-control" id="email">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>လျို့ဝှက်နံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်ထည့်ပါ" name="password" class="form-control" id="password">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း" name="confirm_password" class="form-control" id="confirm_password">
                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="col-md-8">
                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-8">
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
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="education" class="form-control" placeholder="ပညာအရည်အချင်း">
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
                                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*"></span>
                                                        <br>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control" value="{{ old('race') }}" >
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" >
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
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
                                            <div class="col-md-6 text-center">
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

                                            <div class="col-md-6 text-center">
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
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>အလုပ်သမားမှတ်ပုံတင်အမှတ်</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="အလုပ်သမားမှတ်ပုံတင်အမှတ်" name="labor_registration_no" id="labor_registration_no" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
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

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>အဘ၏အလုပ်အကိုင်နှင့်နေရပ်လိပ်စာ</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="အလုပ်အကိုင်" name="father_job" id="father_job" class="form-control" >
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="နေရပ်လိပ်စာ" name="father_address" id="father_address" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>အိမ်ထောင် ရှိ/မရှိ</label>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="1" id="married_yes" name="married" >
                                                            <label class="form-check-label " for="">ရှိ</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="0" id="married_no" name="married" >
                                                            <label class="form-check-label " for="">မရှိ</label>
                                                        </div>
                                                        <label  class="error attend_place_error" style="display:none;" for="married">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="married_row" style="display:none;">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>ဇနီး/ခင်ပွန်း၏အမည်နှင့်အလုပ်အကိုင်</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="အမည်" name="married_name" id="married_name" class="form-control" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="အလုပ်အကိုင်" name="married_job" id="married_job" class="form-control">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ဇာတိမြို့နယ်</label>
                                            <div class="col-md-9">
                                                <input type="text" name="home_address" class="form-control" placeholder="ဇာတိမြို့နယ်">
                                            </div>
                                        </div>
                                            
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>ကြီးပြင်းရာမြို့နယ်</label>
                                            <div class="col-md-9">
                                                <input type="text" name="current_address" class="form-control" placeholder="ကြီးပြင်းရာမြို့နယ်">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>နေရပ်လိပ်စာ(အပြည့်အစုံ)</label>
                                            <div class="col-md-9">
                                                <textarea name="address" class="form-control" placeholder="နေရပ်လိပ်စာ" rows="3" style="resize:none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>ခေတ္တ</label>
                                            <div class="col-md-9">
                                                <input type="text" name="tempory_address" class="form-control" placeholder="ခေတ္တ">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>အမြဲတမ်း</label>
                                            <div class="col-md-9">
                                                <input type="text" name="permanent_address" class="form-control" placeholder="အမြဲတမ်း">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>ဖုန်းနံပါတ်/e-mail</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone_no" id="phone_no" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="e-mail" name="m_email" id="m_email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>အောက်ပါများ(မူရင်းအတိုင်း)ပူးတွဲတင်ပြပါသည်။</label>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>အလုပ်သမားမှတ်ပုံတင်ကတ်ပြား</label>
                                            <div class="col-md-9">
                                                <input type="file" name="labor_registration_attach" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>အကျင့်စာရိတ္တကောင်းမွန်ကြောင်း ရပ်ကွက်အုပ်ချုပ်ရေးမှူးရုံးမှထောက်ခံစာ</label>
                                            <div class="col-md-9">
                                                <input type="file" name="recommend_attach" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>ပြစ်မှုကင်းရှင်းကြောင်း ရဲစခန်းထောက်ခံစာ</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <input type="file" name="police_attach" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="mentor_declare" onchange="$('#submit_btn').prop('disabled', !this.checked)">
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


    </div>

    <!-- Modal 2 -->
    <form method="post" class="needs-validation" action="javascript:createArticleGovRegister();" enctype="multipart/form-data"
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
                                <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Application Form Fee -
                                    ****** MMK</h4>
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
                                <button type="submit" id="btn_cash" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now
                                </button>
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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/article_register.js')}}"></script>
<script src="{{ asset("js/form_validation/article_gov_validation.js") }}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $("input[name=married]").on("click", function(evt) {
            var checkedValue = $("input[name='married']:checked").val();
            if(checkedValue == '1'){
                $("#married_row").css('display','block');
            }
            else if(checkedValue == '0'){
                $("#married_row").css('display','none');
            }
        });

        $("input[name='job_started_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
        });

        $("input[name='date_of_birth']").flatpickr({
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
</script>
@endpush