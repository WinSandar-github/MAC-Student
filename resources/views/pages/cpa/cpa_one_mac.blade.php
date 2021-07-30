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
                    <h2 class="title">Registration  <span>Form</span></h2>
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
                                            
                
                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                <div class="card border-success mb-3">
                    <div class="card-body">
                    <div class="row">   
                    <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                        <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-3 col-form-label pt-4">{{ __('ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းအမည်') }}</div> 
                                    <div class="col-md-3 col-form-label pt-4">
                                        <input type="text" id="private_school_name" class="form-control" value="" >
                                    </div> 
                                </div> -->
                                <div class="row">
                                    <div class="col-md-3 col-form-label pt-4">{{ __('ပညာသင်နှစ်') }}</div> 
                                    <div class="col-md-3 col-form-label pt-4">
                                        <input type="text"  id="academic_year" class="form-control" value="" required>
                                    </div> 
                                </div><br/>
                            </div>    
                            <div class="col-md-3">
                                <div class="card" style="width:230px;">
                                    <div class="card-header" style="padding:0px 0px 0px 0px;">
                                    <img src="{{ asset('assets/images/profile.png') }}" alt="Avatar" id="img_preview" style="width:230px;height:150px"> 
                                    </div>
                                    <div class="card-body" style="padding-left:2px;padding-right:0px;">
                                        <input type="file" id="photo" accept="image/*" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; width: 220px;" value="" required>
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                        <!-- <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5> -->
                        <div>
                            <!-- <div class="row">
                                <div class="col-md-2 col-form-label pt-4">{{ __('ပညာသင်နှစ်') }}</div> 
                                <div class="col-md-2 col-form-label pt-4">
                                    <input type="text" id="academic_year" class="form-control" value="" >
                                </div> 
                            </div><br/> -->
                            <div class="row">
                                <div class="col-md-1 col-form-label pt-4">{{ __('၁။') }}</div>
                                <div class="col-md-4 col-form-label pt-4">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
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
                                                    <button type="submit" onclick="SearchStudentByNRC()"  class="btn btn-primary btn-hover-dark">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div> 
                            <form  method="post" action="javascript:Mac_Submit();" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အမည်(မြန်မာ)') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="name_mm" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၃။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အမည်(အင်္ဂလိပ်)') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="name_eng" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဓာတ်ပုံ') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <br/>
                                            <input type="file" id="photo" class="form-control" accept="image/*" value="" required>
                                       
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အဘအမည်(မြန်မာ)') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="father_name_mm" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၅။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အဘအမည်(အင်္ဂလိပ်)') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="father_name_eng" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၆။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('လူမျိူး') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="race" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဘာသာ') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="religion" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၈။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('မွေးသဣရာဇ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="date_of_birth" name="date_of_birth"  placeholder="dd/mm/yyyy" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၉။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ပညာအရည်အချင်း') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="education" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၀။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ရာထူး') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="position" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၁။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဌာန') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="department" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ရုံးစိုက်ရာဒေသ') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="office_area" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၃။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="radio" id="yes" name="civil_servant" value="1" style="margin-left: 3%;" @if(old('gov_staff')) checked @endif >
                                            <label for="yes">ဟုတ်</label>

                                            <input type="radio" id="no" name="civil_servant" value="0" style="margin-left: 3%;" @if(!old('gov_staff')) checked @endif >
                                            <label for="no">မဟုတ်</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အမြဲတမ်းနေရပ်လိပ်စာ') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="address" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၅') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="current_address" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၆။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဖုန်းနံပါတ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="phone" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('Email') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="email" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="direct_access_no" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၈။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="single-form">
                                            <input type="text" id="entry_success_no" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၁၉။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">                                    
                                        <label class="col-form-label">{{ _('(က) သင်တန်းကာလအတွင်း အောက်ပါအတိုင်း အလုပ်သင်ဆင်းလိုပါသည်-') }}</label>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <input type="checkbox" value="" id="cpa_check" >
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ _('(၁) အစိုးရ ဌာနတွင်') }}</label>
                                    </div>
                                    <div class="col-md-4" style="padding-top:10px">
                                        <input type="checkbox"  value="" id="gov_department" >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ _('(၂) ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းတွင်') }}</label>
                                    
                                    </div>
                                    <div class="col-md-4" style="padding-top:10px">
                                            <input type="checkbox" value="" id="personal_acc_training">
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('(ခ) ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်') }}</label>
                                    
                                    </div>
                                    <div class="col-md-6" style="padding-top:10px">
                                        <input type="checkbox" value=""  id="after_second_exam">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ _('၂၀။') }}</label>                                   
                                    </div>
                                    <div class="col-md-10">
                                            <label class="col-form-label">{{ _('အစိုးရဌာနတွင်အလုပ်သင်ဆင်းလိုကြောင်းအဆိုပြုသူများအတွက် ပူးတွဲတင်ပြရမည့် စာရွက်စာတမ်းများ') }}</label>                                   
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label class="col-form-label">{{ _('(က) အကျင့်စာရိတ္တကောင်းမွန်ကြောင်းထောက်ခံချက်') }}</label>
                                    
                                    </div>
                                    <div class="col-md-4">
                                            <input type="file" id="good_morale_file" class="form-control" value="" required>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('(ခ) ပြစ်မှုကင်းရှုင်းကြောင်းထောက်ခံချက်') }}</label>
                                    
                                    </div>
                                    <div class="col-md-4" >
                                        <input type="file" class="form-control" value="" id="no_crime_file" required>
                                    </div>
                                </div>
                            <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ _('၂၁။') }}</label>                                   
                                    </div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('ဖြေဆိုမည့် Module') }}</label>                                   
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ _('Module-1') }}</label> 
                                                <input type="radio"  name="module" value="" id="module1" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ _('Module-2') }}</label> 
                                                <input type="radio" name="module" value="" id="module2" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ _('All Module') }}</label> 
                                                <input type="radio" name="module" value="" id="allmodule" >  
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>                            
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၂၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('အထက်ဖော်ပြပါ အချက်များအားလုံးမှန်ကန်ပါသည်။') }}</label>
                                            <label class="col-form-label">{{ _('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                        </div>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

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

</script>
@endpush