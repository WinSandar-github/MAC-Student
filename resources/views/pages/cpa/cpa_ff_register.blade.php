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
                    <h2 class="title">CPAFF Registration  <span>Form</span></h2>
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

            <div class="row mt-5">
                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="check_age" id="check_age">
                    <label class="col-md-12 col-form-label">{{ __('အသက် ၂၁ မပြည့်​သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>

                    <br/>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="pass_cpa_two" id="pass_cpa_two">
                    <label class="col-md-12 col-form-label">{{ __('CPA 2 မအောင်မြင်သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>

                    <br/>
                    <br/>
                    <br/>
                </div>
                <!-- <div id="rejected" style="display:none">
                    <div class="card text-white bg-dark my-3">
                        <div class="card-body">
                            <p class="card-text reject">Your CPAFF registration form is rejected. Please update your information.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="pending" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your CPAFF registration form is being checked.</p>
                        </div>
                    </div>
                </div>
                <div id="approved" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your CPAFF registration form is approved.</p>
                        </div>
                    </div>
                    <center>
                        <button id="cpaff_modal" value="submit" class="btn btn-success btn-hover-dark w-30"> Go to payment</button>
                    </center> <br>
                </div> -->

                <div id="expiry_card" style="display:none;">
                    <div class="card border-danger my-3" style="height:60px;">
                        <div class="card-body">
                            <p  class="card-text" id="expire"></p>
                        </div>
                    </div>
                </div>
                <div class="card border-success mb-3" id="cpaff_from" style="display:none;">
                    <div class="card-body">

                    {{--<form method="post" action="javascript:createCPAFFRegister();" class="needs-validation" enctype="multipart/form-data" novalidate>--}}
                    <form method="post" id="cpaff_form" action="javascript:void();" class="needs-validation" enctype="multipart/form-data" novalidate>
                    <fieldset id="fieldset" disabled>
                    <!-- <fieldset id="fieldset" > -->
                        <input type="hidden" name="status">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-8 col-form-label" style="padding-left: 37px;">{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>

                                <div class="row" style="padding-left: 90px;">
                                    <div class="col-md-2 col-form-label pt-4" >{{ __('(က)') }}</div>
                                    <div class="col-md-6 col-form-label pt-4">{{ __('အသက်') }}</div>
                                    <div class="col-md-4 col-form-label pt-4">
                                        <lable id="age"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-5 pull-right">
                                    <img class="col-md-3 profile-style" id="previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                    <p class="mt-2">
                                      <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                    </p>
                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                </div>
                            </div>
                        </div>


                        {{--<div class="row">
                            <div class="col-md-1 col-form-label"></div>
                            <div class="col-md-1 col-form-label pt-4">{{ __('(က)') }}</div>
                            <div class="col-md-3 col-form-label pt-4">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                            <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2  px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_township" id="nrc_township">
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3 pl-1">
                                            <div class="single-form">
                                            <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"   maxlength="6">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="single-form">
                                                <button type="submit" onclick="SearchStudentID()"  class="btn btn-primary btn-hover-dark">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div> <br/>     --}}



                            <!-- <fieldset id="fieldset" disabled> -->
                            <!-- <fieldset id="fieldset" > -->
                                <!-- <input type="hidden" name="status"> -->



                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-7">
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                                <label class="col-form-label">CPA</label>
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
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                                <label class="col-form-label">RA</label>
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
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-form-label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>

                                        </div>




                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-2" id="degree_name0">
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
                                                    <input type="type" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)">
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
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAFFDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><br/>





                                {{--<div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-7">
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                                <label class="col-form-label">CPA</label>
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
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                                <label class="col-form-label">RA</label>
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
                                            <div class="col-md-4">
                                                <input type="radio" name="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-form-label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>

                                        </div>




                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-2" id="degree_name0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="text"  class="form-control" name="degree_name0" placeholder="ဘွဲ့အမည်">
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year0" placeholder="လ၊နှစ်(MMM-YYYY)">
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file0" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAFFDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><br/>--}}

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label pt-4">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-3 col-form-label pt-4">{{ __('CPAအပတ်စဥ် /ကိုယ်ပိုင်အမှတ်') }}</label>
                                    <div class="col-md-7">
                                        <div class="single-form">
                                            <input type="text" name="cpa_no" class="form-control" id="cpa_no">
                                        </div>
                                    </div>
                                </div></br> -->

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လျှောက်ထားသူ၏ပညာအရည်အချင်းဆိုင်ကြေညာချက်(ဆိုင်ရာအကွက်တွင်အမှန်ခြစ်အမှတ်အသားပြု၍ဖြည့်ပေးပါ)') }}</label>
                                </div><br/>

                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားတော်၏နိုင်ငံသားဖြစ်ပြီး ') }}</label>

                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="cpa_part_2_check" value="" required="" onClick="CheckPartTwo()">
                                    </div>
                                    <!-- <div class="col-md-10">
                                        <div class="row">
                                            <label class="col-md-5 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="lyear" placeholder="ခုနှစ်">
                                            </div>
                                            <label class="col-md-3 col-form-label">ခုနှစ် တွင် ကိုယ်ပိုင်အမှတ် </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="personal_no" placeholder="ကိုယ်ပိုင်အမှတ်">
                                            </div>
                                            <label class="col-form-label">ဖြင့် အောင်မြင်ပါသည်။</label>
                                        </div>
                                    </div> -->
                                    <label class="col-md-10 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို အောင်မြင်ပါသည်။</label>
                                </div><br/>

                                <div class="pass_batch_two" style="display:none">
                                    <div class="row mb-3">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4">အောင်မြင်သည့် သင်တန်းအမှတ်စဉ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="pass_batch_no" placeholder="သင်တန်းအမှတ်စဉ်">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 " >
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4">ကိုယ်ပိုင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="pass_personal_no" placeholder="ကိုယ်ပိုင်အမှတ်">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="qt_pass_check" value="" required="" onClick="CheckQTPass()">
                                    </div>
                                    <label class="col-md-10 col-form-label">အဖွဲ့အစည်းက ပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီး မြန်မာနိုင်ငံစာရင်းကောင်စီကကျင်းပခဲ့သည့် အရည်အချင်းစစ်စာမေးပွဲကို အောင်မြင်ခဲ့ပါသည်။</label>
                                    <!-- <div class="col-md-10">
                                        <div class="row mb-1">
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="country" placeholder="နိုင်ငံ">
                                            </div>
                                            <label class="col-md-1 col-form-label">နိုင်ငံ</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="organization" placeholder="အဖွဲ့အစည်း">
                                            </div>
                                            <label class="col-md-7 col-form-label">အဖွဲ့အစည်းက ပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီး</label>
                                        </div>
                                        <div class="row mb-1">
                                            <label class="col-md-3 col-form-label">မြန်မာနိုင်ငံစာရင်းကောင်စီက </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="fyear" placeholder="ခုနှစ်">
                                            </div>
                                            <label class="col-md-1 col-form-label">ခုနှစ်</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="month" placeholder="လ">
                                            </div>
                                            <label class="col-md-4 col-form-label">လတွင် ကျင်းပခဲ့သည့် အရည်အချင်းစစ် </label>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">စာမေးပွဲကို ခုံအမှတ်</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="seat_num" placeholder="ခုံအမှတ်">
                                            </div>
                                            <label class="col-md-7 col-form-label">ဖြင့် အောင်မြင်ခဲ့ပါသည်။</label>

                                        </div>
                                    </div> -->

                                </div><br/>

                                <div class="qt_pass" style="display:none">
                                    <div class="row mb-3">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4">အောင်မြင်သည့် ခုနှစ်/လ</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control qt_pass_date" name="qt_pass_date"  placeholder="ခုနှစ်/လ (MMM-YYYY)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 " >
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4">ခုံအမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control qt_pass_seat_no" name="qt_pass_seat_no" placeholder="ခုံအမှတ်">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>
                                </div><br/>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်စာမေးပွဲအောင်လက်မှတ်</div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="cpa_certificate" required="">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား </div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="mpa_mem_card" required="" >
                                    </div>
                                </div><br/>

                                <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-1 col-form-label">{{ __('(ဂ)') }}</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                            </div>
                                            <div class="row">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                    value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" required>
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
                                                    value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" required>
                                                </p>
                                                <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div><br>


                                <!-- <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-6 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</div>

                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="nrc_front" required="" >
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-6 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</div>

                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="nrc_back" required="" >

                                    </div>
                                </div><br/> -->

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <label class="col-md-6 col-form-label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</label>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="cpd_record" required="" >

                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <!-- <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label> -->
                                    <label class="col-md-6 col-form-label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="total_hours"  placeholder="စုစုပေါင်း နာရီ" required="">

                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>

                                    <div class="col-md-6 col-form-label">ပတ်စပို့အရွယ်ဓာတ်ပုံ</div>
                                    <div class="col-md-4">

                                                <input type="file"  class="form-control" name="passport_image" required="" >

                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(စ)') }}</label>

                                    <div class="col-md-6 col-form-label">(၃) နှစ်ပြည့်ကြောင်း ထောက်ခံချက်</div>
                                    <div class="col-md-4">

                                                <input type="file"  class="form-control" name="three_years_full" required="" >

                                    </div>
                                </div><br/>

                                {{--<div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label mt-1"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></label>
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>

                                </div>--}}


                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="cpaff_submit_btn" >{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            <div>

        </div>




    </div>

    <!-- Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaffModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Code must have 6 digits (eg. 1234)"></center>
                          </div>
                      </div>
                      <center>
                          <button type="submit" id="btn1" onclick="check_email_cpaff()" class="btn btn-success btn-hover-dark w-30">Send Verification Code
                          </button>
                      </center><br>
                      <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                      </div><br><br>
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
    isLoginCPAFF();
    form_feedback();
    check_email_cpaff();
    $(".degree_pass_year").flatpickr({
            enableTime: false,
            dateFormat: "M-Y",
            allowInput: true,
    });

    $("input[name='qt_pass_date']").flatpickr({
            enableTime: false,
            dateFormat: "M-Y",
            allowInput: true,
    });
</script>
@endpush
