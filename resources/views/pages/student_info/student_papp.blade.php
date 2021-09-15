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
                    <h2 class="title">PAPP Registration  <span>Form</span></h2>
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

                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="check_cpa_age" id="check_cpa_age">
                    <label class="col-md-12 col-form-label">{{ __('CPA (FF) သက်တမ်း ၁ နှစ် မပြည့်​သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>

                    <br/>
                    <br/>
                    <br/>
                </div>

                <div id="expiry_card" style="display:none;">
                    <div class="card border-danger my-3" style="height:60px;">
                        <div class="card-body">
                            <p  class="card-text" id="expire"></p>
                        </div>
                    </div>
                </div>

                <div class="card border-success mb-3" id="papp_from" style="display:none;">

                    <div class="card-body ">
                        <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                        <h5 class="card-title text-center">အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် မှတ်ပုံတင်ရန် ကနဦးလျှောက်ထားခြင်း</h5>
                        <br/>

                        {{--<form  method="post" action="javascript:Papp_Submit();" enctype="multipart/form-data" >--}}
                        <form  method="post" id="papp_form" action="javascript:void();" class="needs-validation" enctype="multipart/form-data" novalidate="">
                            <fieldset id="fieldset" disabled="disabled">
                            <!-- <fieldset id="fieldset" > -->

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="single-form">
                                                <label class="col-form-label">{{ __('၁။') }}</label>

                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="single-form">
                                                <label class="col-form-label" style="padding-left: 37px;">{{ __('လျှော​က်ထားသူ၏ ကိုယ်ရေးအချက်အလက်') }}</label>

                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="single-form">
                                                <label>(က) နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-2 col-5 px-1">
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
                                                <div class="col-md-3 col-7 px-1">
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
                                                <div class="col-md-2 col-5 px-1">
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
                                                <div class="col-md-4 col-7 pl-1">
                                                    <div class="single-form">
                                                        <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  required="" maxlength="6">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="single-form">
                                                        <button type="submit" onclick="SearchStudentID()"  class="btn btn-primary btn-hover-dark">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br/>--}}
                                    <div class="row pt-3" style="padding-left: 90px;">
                                        <label class="col-md-2 col-form-label" >{{ __('(က) ') }}</label>
                                        <div class="col-md-6 col-form-label">{{ __('CPA (FF) မှတ်ပုံတင် သက်တမ်း') }}</div>
                                        <div class="col-md-4 col-form-label">
                                            <lable id="cpa_age"></label>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-5">
                                    <div class="col-md-5 pull-right">
                                        <img class="col-md-3 profile-style" id="previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                        <p class="mt-2">
                                        <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                        </p>
                                    </div>
                                </div>
                            </div>




                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value="" id="cpa_check" onclick="CPA_Check()" >
                                                <label  class="col-form-label">CPA</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10"  id="cpa_edu" style="display:none;">
                                                <input type="file"  class="form-control" id="cpa_file" name="cpa_file">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value=""  id="ra_check" onclick="RA_Check()" >
                                                <label class="col-form-label">RA</label>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10"  id="ra_edu" style="display:none;">
                                                <input type="file" class="form-control" id="ra_file"  name="ra_file">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value=""  id="degree_check" onclick="Degree_Check()"  >
                                                <label  style="font-size:15px;">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                        </div>
                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-2" id="degree0">
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
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year0" placeholder="DD-MMM-YYYY">
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
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="Add()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-6"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်</label>
                                            <div class="col-md-2">
                                                <input type="text" name="papp_date" class="form-control papp_date" placeholder="ခုနှစ်/YYYY" required>
                                            </div>
                                            <label class="col-md-4"  style="font-size:15px;">ခုနှစ်အတွက်မှတ်ပုံတင်ပေးပါရန်လျှောက်ထားပါသည်။</label>
                                        </div>



                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၃။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('ကျွန်ုပ်သည် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ရာတွင်') }}</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="checkbox" id="firm_check" value="" ></div>
                                    <div class="col-md-10">

                                        <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                    </div>
                                </div><br/>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="checkbox" id="used_firm_check" value=""></div>
                                    <div class="col-md-10">
                                        <label style="font-size:15px;"> အသုံးပြုမည့်လုပ်ငန်းအမည် Firm Name, လုပ်ငန်းအမျိုးစားနှင့် မိမိ၏ အဆင့်မှာ အောက်ပါအတိုင်းဖြစ်ပါသည်-</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမည်</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control" value="" placeholder="လုပ်ငန်းအမည်" name="used_firm_name" >
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမျိုးအစား (တစ်ဦးတည်းပိုင်/ အစုစပ်/ ကုမ္ပဏီ စသည်)</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control" value="" name="used_firm_type" placeholder="တစ်ဦးတည်းပိုင်/ အစုစပ်/ ကုမ္ပဏီ">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                    <!-- <div class="single-form"> -->
                                        <label class="col-form-label">-အဆင့်(Principal/ Managing Partner/ Partner စသည်)</label>
                                    <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" value="" name="used_firm_level" placeholder="Principal/ Managing Partner/ Partner"></div>
                                    <!-- </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="checkbox" id="staff_firm_check" value=""></div>
                                    <div class="col-md-4">
                                        <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" name="staff_firm_name" value="" placeholder="ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်"></div>
                                    <!-- </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၄။') }}</label>

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
                                    <div class="col-md-7">
                                            <label style="font-size:15px;">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control"  id="cpa_ff_file" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> မှတ်ပုံတင်မည့် ပြက္ခဒိန်နှစ်မတိုင်မီနှစ်တွင် မြန်မာနိုင်ငံ၌ ၁၈၃ ရက်ထက်မနည်း နေထိုင်သူဖြစ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="file_183" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဂ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> အခြားလုပ်ငန်းအဖွဲ့အစည်းတစ်ရပ်ရပ်တွင် အချိန်ပြည့် တာဝန်ထမ်းတောင်နေသူ မဟုတ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="not_fulltime_file" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဃ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> လျှောက်ထားသည့်နှစ်အတွက် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကို မိမိ၏ အဓိကအသက်မွေးဝမ်းကျောင်းလုပ်ငန်းအဖြစ် မြန်မာနိုင်ငံအတွင်းတွင် လုပ်ကိုင်မည်ဖြစ်​ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file"  class="form-control" id="work_in_mm_file" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(င)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> လုပ်ငန်းဆောင်ရွက်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီ၏ ၉-၈-၂၀၁၈ ရက်စွဲပါအမိန့်ကြော်ငြာစာအမှတ် ၂၇/၂၀၁၈ ၏ နောက်ဆက်တွဲတွင် ဖော်ပြထားသည့်စည်းကမ်းချက်များနှင့် စပ်လျဥ်း၍ လိုက်နာခြင်း ရှိ/မရှိ၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="rule_conf_file" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(စ) </div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="cpd_record_file" required="" >
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="text" class="form-control" id="total_hours" name="total_hours" placeholder="စုစုပေါင်း နာရီ" required="" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဆ) </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <label class="col-md-4" >ပြည်တွင်းအခွန်ဦးစီးဌာနသို့ </label>
                                            <div class="col-md-3">
                                                <input type="text" name="tax_year" class="form-control tax_year" placeholder="ပြက္ခဒိန်နှစ်/YYYY" required>
                                            </div>
                                            <label class="col-md-5" >ပြက္ခဒိန်နှစ်အတွက် အခွန်ပေးဆောင်မှု </label>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-md-12">အထောက်အထား (ရှိလျှင်) (သို့မဟုတ်) အခွန်ကင်းရှင်းကြောင်း ထောက်ခံချက်၊</label>
                                        </div>


                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="tax_free_file" required="" >
                                    </div>
                                </div><br/>

                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">Submit</button>--}}
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="papp_submit_btn" >{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                    </div>

                </div>
            </div>


            <!-- <div class="card border-success mb-3" id="papp_renew_form" style="display:none;"><br/>
                <h5 class="card-title text-center">PAPP မှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားခြင်း</h5> <br/>
                <form method="post" action="javascript:RenewPAPP();" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                            <div class="col-md-7 col-form-label">သက်တမ်းတိုးလျှောက်လွှာ</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_file" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                            <div class="col-md-7 col-form-label"> PAPP မှတ်ပုံတင်ကတ် </div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_papp_reg" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                            <div class="col-md-7 col-form-label"> MICPA membership ကတ် (သက်ဆိုင်ရာပြက္ခဒိန်နှစ်တွက် သက်တမ်းတိုးပြီး ဖြစ်ရပါမည်။)</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_micpa" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                            <div class="col-md-7 col-form-label"> CPD နာရီ မှတ်တမ်းအထောက်အထားများ (သတ်တမ်းတိုးမည့် ပြက္ခဒိန်နှစ်မတိုင်မီ ကပ် လျက်ရှိသော နှစ်၏ နိုဝင်ဘာလမတိုင်မီ (၁၂) လ အတွင်း CPD နာရီ အနည်းဆုံး ၂၀ နာရီ ပြည့်မီရမည်ဖြစ်ပြီးတစ်ဆက်တည်းသုံးနှစ်တွင်စုစုပေါင်းနာရီ၁၂၀ပြည့်မီရမည်ဖြစ်ပါသည်။)</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_cpd" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                            <div class="col-md-7 col-form-label"> မှတ်ပုံတင်မည့်ပြက္ခဒိန်နှစ် မတိုင်မီနှစ်တွင် မြန်မာနိုင်ငံတွင် ၁၈၃ ရက်ထက်မနည်း နေထိုင်သူ ဖြစ်ကြောင်း ကိုယ်တိုင်ခံဝန်ချက်</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_183_recomm" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                            <div class="col-md-7 col-form-label"> အခြားလုပ်ငန်းအဖွဲ့အစည်းတစ်ရပ်ရပ်တွင် အချိန်ပြည့်တာဝန်ထမ်းဆောင်နေသူ မဟုတ် ကြောင်း ကိုယ်တိုင်ခံဝန်ချက်</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_not_fulltime_recomm" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                            <div class="col-md-7 col-form-label"> လျှောက်ထားသည့် ပြက္ခဒိန်နှစ်အတွက် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ် ငန်းကိုမိမိ၏အဓိကအသက်မွေးဝမ်းကြောင်းလုပ်ငန်းအဖြစ်မြန်မာနိုင်ငံအတွင်းတွင် လုပ်ကိုင် မည်ဖြစ်ကြောင်း ကိုယ်တိုင်ခံဝန်ချက်</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_rule_confession" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-2 offset-md-5">
                                <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->



        </div><br/></br/>

<!-- Modal -->
<form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="pappModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <button type="submit" id="btn1" onclick="check_email_papp()" class="btn btn-success btn-hover-dark w-30">Send Verification Code
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
<script type="text/javascript">
   isLoginPAPP();
   Papp_feedback();

   $(".degree_pass_year").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    $(".tax_year").flatpickr({
            enableTime: false,
            dateFormat: "Y",
            allowInput: true,
    });
    $(".papp_date").flatpickr({
            enableTime: false,
            dateFormat: "Y",
            allowInput: true,
    });
</script>
@endpush
