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
                    <h2 class="title">Registration <span>Form</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

 

<div class="comment-form container">
    <div class="form-wrapper">
        <div class="row">
            <div class="col-md-12">
                <form class="needs-validation" id="da_update" action="javascript:void();" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <input type="hidden" name="stu_id" id="stu_id">
                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                        <div class="card-body">

                            <div class="row mb-5">
                                <h5 class="card-title text-center fw-bolder mb-3">
                                    မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                    လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                    <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                </div>
                                
                            </div>

                            <input type="hidden" name="batch_id" id="batch_id" />

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-3">
                                            <input type="text" name="name_mm" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="name_eng" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">၂။</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)<span style="color:red">*</span></label>
                                        <div class="col-md-3">
                                            <input type="text" name="father_name_mm" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="father_name_eng" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        

                                        <div class="col-md-6">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2">
                                                    <select class="form-control form-select" name="nrc_state_region" id="nrc_state_region" style="padding: 6px;">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control form-select" name="nrc_township" id="nrc_township" style="padding: 6px;">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_townships as $township)
                                                            <option value="{{ $township['township_mm'] }}">
                                                                {{ $township['township_mm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen" style="padding: 6px;">
                                                        <option value="" disabled selected>ရွေးပါ</option>
                                                        @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-4 ">
                                                    <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    {{--User Photo--}}
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle shadow">
                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                    alt="Upload Photo" id="da_to_cpa_preview_img">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                        <div class="d-flex justify-content-center">
                                            <span class="btn btn-round btn-secondary btn-file">
                                            <span class="fileinput-new">ဓာတ်ပုံ</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" id="profile_photo" name="image" accept="image/*" required></span>
                                            <input type="hidden" name="old_image" id="old_image">
                                            <br>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                    {{--User Photo--}}
                                </div>
                            </div>  
                            <div class="row mb-3">
                                <div class="col-md-6 text-center">
                                    <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail shadow">
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo" id="nrc_front_update">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                            <span class="btn btn-secondary btn-round btn-file">
                                                <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အရှေ့)</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="hidden" name="old_nrc_front" id="old_nrc_front">
                                                <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*" required>
                                            </span>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </div>
                                </div>

                                <div class="col-md-6 text-center">
                                    <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail shadow">
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_back_update"
                                                    alt="Upload Photo">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                                <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" id="old_nrc_back" id="old_nrc_back">
                                                    <input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" required>
                                                </span>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </div>
                                </div>
                            </div>

                                <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">၄။</span>ကျား / မ (Gender)<span style="color:red">*</span></label>
                                        <div class="row col-md-8 py-2">
                                            <div class="col-md-3 form-check-radio mx-2">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="male"
                                                            name="gender" value="Male" required>
                                                    <span class="form-check-sign"></span>
                                                    ကျား
                                                </label>
                                            </div>
                                            <div class="col-md-3 form-check-radio mx-2">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id='female'
                                                            name="gender" value='Female' required>
                                                    <span class="form-check-sign"></span>
                                                    မ
                                                </label>
                                            </div>
                                            
                                            <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                        </div>
                                    </div>
                            

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>လူမျိုး</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                            value="{{ old('race') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                            class="form-control" value="{{ old('religion') }}"  >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>မွေးသက္ကရာဇ်</label>
                                <div class="col-md-8">
                                    <input type="text" name="date_of_birth" class="form-control"
                                        placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ဖုန်းနံပါတ်</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                        class="form-control" value="{{ old('phone') }}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                        class="form-control" value="{{ old('address') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                        class="form-control" value="{{ old('current_address') }}"
                                        >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>လက်ရှိအလုပ်အကိုင်</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name"
                                        class="form-control" value="{{ old('name') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>ရာထူး</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                        value="{{ old('position') }}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>ဌာန</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                        value="{{ old('department') }}" >
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>အဖွဲ့အစည်း</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="အဖွဲ့အစည်း" name="organization"
                                            class="form-control" value="{{ old('organization') }}"  required="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>ကုမ္ပဏီအမည်</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name"
                                            class="form-control" value="{{ old('company_name') }}"  required="">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>လစာနှင့်လစာနှုန်း</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary"
                                            class="form-control" value="{{ old('salary') }}"  required="">
                                </div>
                            </div>
                               
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၇။') }}</span>ရုံးစိုက်ရာဒေသ</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                        class="form-control" value="{{ old('office_address') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁၈။') }}</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                <div class="col-md-2 pt-2">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-4"><input  type="radio"
                                                                        class="form-check-input mr-3" id="yes_self"
                                                                        name="gov_staff" value="1"
                                                                        style="margin-left: 3%;"  onclick="$('#rec_letter_da_to_cpa').show()">
                                            </div>
                                            <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 pt-2">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-4"><input  type="radio"
                                                                        class="form-check-input mr-3" id="no_self"
                                                                        name="gov_staff" value="0"
                                                                        style="margin-left: 3%;"  onclick="$('#rec_letter_da_to_cpa').hide()">
                                            </div>
                                            <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="rec_letter_da_to_cpa" style="display:none" >
                                <div class="row mb-3 "  >
                                    <label class="col-md-5 col-form-label label">
                                        <span class="pull-center" style="padding-right:35px">{{ __('(က)') }}</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                    </label>
                                    <div class="col-md-2"  id="degree_edu" >
                                        <span class="recommend_letter"></span>
                                    </div>
                                    <div class="col-md-5"  id="degree_edu" >
                                        <input   type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                        <input type="hidden" name="old_rec_letter">


                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" >{{ __('၁၉။') }}</span>တက္ကသိုလ်တစ်ခုခုမှအောင်မြင်ပြီးခဲ့သော-</label>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(က)') }}</span>ဘွဲ့အမည်</label>
                                <div class="col-md-4">
                                    <select name="degree_id" class="form-control degree_id" >
                                        
                                    </select>
                                <label  class="error degree_id_error" style="display:none;" for="degree_id">Please select one</label>

                                </div>
                                <div class="col-md-4" id="other_degree_name" style="display:none;">
                                    <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name" required >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ခ)') }}</span>တက္ကသိုလ်အမည်</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name"
                                            class="form-control" value=""
                                            >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ဂ)') }}</span>ခုံအမှတ်</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="ခုံအမှတ်" name="roll_number"
                                            class="form-control" value="" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(ဃ)') }}</span>နှစ်၊လ</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date"
                                            class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-3">                                
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(င)</span>Attached Certificate</label>
                                <div class="col-md-8" id="edu">
                                    <div class="row mb-3" id="edu0">
                                        <div class="col-md-11" id="degree_edu">
                                            <input type="file" class="form-control" id="certificate0" name="certificate[]" autocomplete="off">
                                        </div>
                                        <div class="col-md-1 text-center" id="add_div">
                                            <button type="button" class="btn btn-primary btn-success" style="padding-left:5px;" id="add_btn" onclick="AddDAEdu()">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="old_certificate" id="old_certificate">

                            

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('၂၀။') }}</span>သင်တန်းတက်ရောက်လိုသည့်နေရာ-</label>
                                
                                <div class="col-md-8">
                                    
                                    <div class="row">
                                        <div class="col-md-1">
                                            <input type="radio" id="mac" class="form-check-input" value="2" name="dtype" onclick="selectdType()"   required style="margin-left: 3%;">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="form-check-label" for="mac">ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး</label>
                                        </div>
                                    </div>

                                    <div class="  col-md-12" id="blk_dmac" style="display:none">
                                        <div class="mx-5 row  ">
                                            
                                            <div class="col-md-6 form-check   ">
                                                <input class="form-check-input" type="radio" id="sub_mac" name="mac_dtype" value='1'    >
                                                <label class="form-check-label" for="sub_mac">
                                                    <!-- <span class="form-check-sign"></span> -->
                                                    ရန်ကုန်သင်တန်းကျောင်း
                                                </label>
                                                
                                            </div> 
                                            <div class="col-md-6  form-check  ">
                                                <input class="form-check-input" type="radio" id="sub_mac2" name="mac_dtype" value='2'    >
                                                <label class="form-check-label" for="sub_mac2">
                                                    <!-- <span class="form-check-sign"></span> -->
                                                    နေပြည်တော်သင်တန်းကျောင်း
                                                </label>
                                            </div>
                                            <label  class="error attend_place_error" style="display:none;" for="mac_type">Please select one</label>

                                        </div>
                                
                                    </div>
                             
                                    <div class="row">
                                        <div class="col-md-1">
                                        <input type="radio" id="private" class="form-check-input" value="1" name="dtype" onclick="selectdType()"  required style="margin-left: 3%;">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="form-check-label" for="private">ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်း</label>
                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                        <input type="radio" id="self" class="form-check-input" value="0" name="dtype" onclick="selectdType()"  required style="margin-left: 3%;">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="form-check-label" for="self">ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ</label>
                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                        </div>
                                    </div>
                               
                            </div>   
                            </div> 
                            
                            <div class="row mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="da_one_declare" onchange="$('#da_two_pass_to_cpa').prop('', !this.checked)">
                                             <span class="form-check-sign"></span>
                                            <p class="fw-bolder">
                                                * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                * မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကိုလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                            </p>
                                        </label>
                                    </div>
                                   {{-- <h6 class="mt-4 pt-1">ရက်စွဲ - {{ date('d-M-Y') }}</h6>--}}
                                </div>
                            </div>                                         
                            
                            <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-success btn-hover-dark w-25"  id="da_two_pass_to_cpa"  >{{ __('Submit') }}</button>
                                
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
    $(document).ready(function (e) {
        // da_edit();
        $('.degree_id').select2({
            placeholder: "Select Degree"
        });
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
        });
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
        });
        $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
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

        
        if (localStorage.getItem("studentinfo") != null)
        {
              get_student_info(student_id).then(data => {
                  if(data){
                      var info = data.data;
                    
                      
                      var student_course = info.student_course_regs.slice(-1);
                      var job_history = data.data.student_job;
                      var education_history = data.data.student_education_histroy;
                      if(info){
                    $('#stu_id').val(info.id);
                 
                        $("input[name=name_mm]").val(info.name_mm);
                        $("input[name=name_eng]").val(info.name_eng);
                        $("#nrc_state_region").val(info.nrc_state_region);
                        $("#nrc_township").val(info.nrc_township);
                        $("#nrc_citizen").val(info.nrc_citizen);
                        $("#nrc_number").val(info.nrc_number);
                        $("input[name=father_name_mm]").val(info.father_name_mm);
                        $("input[name=father_name_eng]").val(info.father_name_eng);
                        $("input[name=race]").val(info.race);
                        $("input[name=religion]").val(info.religion);
                        $("input[name=date_of_birth]").val(info.date_of_birth);
                        $("input[name=phone]").val(info.phone);
                        $("input[name=address]").val(info.address);
                        $("input[name=current_address]").val(info.current_address);
 
 
                        document.getElementById('da_to_cpa_preview_img').src = BASE_URL + info.image;
                        $("input[name=old_image]").val(info.image);

                        document.getElementById('nrc_front_update').src = BASE_URL + info.nrc_front;
                        $("input[name=old_nrc_front]").val(info.nrc_front);

                        document.getElementById('nrc_back_update').src = BASE_URL + info.nrc_back;
                        $("input[name=old_nrc_back]").val(info.nrc_back); 

                      }

                      var batch_id = student_course[0].batch_id; 

                      $('#batch_id').val(batch_id)
                      $.ajax({
                            type: "get",
                            url: BACKEND_URL + "/batch/" + batch_id,
                            contentType: false,
                            processData: false,
                            async:false,
                            success: function (res) {
                                 
                                $('.batch_number').append(res.data.number);
                            }
                        })
                      if(job_history){
                        $("input[name=name]").val(job_history.company_name);
                        $("input[name=position]").val(job_history.position);
                        $("input[name=department]").val(job_history.department);
                        $("input[name=organization]").val(job_history.organization);
                        //$("input[name=address]").val(job_history.address);
                        //$("input[name=current_address]").val(job_history.current_address);
                        $("input[name=company_name]").val(job_history.company_name);
                        $("input[name=salary]").val(job_history.salary);
                        $("input[name=office_address]").val(job_history.office_address);
                      }

                      if(education_history){
                        $(".degree_id").select2().val(education_history.degree_id);
                        if(education_history.degree_id == 40){
                            $("input[name=degree_name]").val(education_history.degree_name);
                            $('#other_degree_name').show();
                        }
                        $("input[name=university_name]").val(education_history.university_name);
                        $("input[name=roll_number]").val(education_history.roll_number);
                        $("input[name=qualified_date]").val(education_history.qualified_date);
                        $("input[name=old_certificate]").val(JSON.parse(education_history.certificate));
                       }
                      // government staff OR not
                      if(info.gov_staff == 1){
                        $("input[name=gov_staff][value=1]").prop("checked",true);
                        $("#rec_letter_da_to_cpa").css("display",'block');
                        if(info.recommend_letter!=null){
                                $(".recommend_letter").append("<a href='"+BASE_URL+info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                            }
                      }
                      else{
                        $("input[name=gov_staff][value=0]").prop("checked",true);
                      }

                      if(info.gender=="Male"){
                            $("#male").prop("checked",true);
                        }else{
                            $("#female").prop("checked",true);
                        }

                      if(student_course[0].type == 0){
                        $("input[name=dtype][value=0]").prop("checked",true);

                         
                      }
                      else if(student_course[0].type == 1){
                        $("input[name=dtype][value=1]").prop("checked",true);
                      }else{
                        $("input[name=dtype][value=2]").prop("checked",true);
                        selectdType();
                        if(student_course[0].mac_type == 1){
                            $("input[name=mac_dtype][value=1]").prop("checked",true);

                            
                        }else{
                            $("input[name=mac_dtype][value=2]").prop("checked",true);
                            


                        }



                      }
                    }

                    //$("input").prop('',true);
              })
            }


        function myanmarLetterOnly( self )
        {
            val = self.val();
            if ( /[a-zA-Z0-9]+$/.test( val ) ) {
              self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
            }
        }

        getDegree();
        $('.degree_id').change(function(){
                var selectedDegree = $(this).val();
                if(selectedDegree == 40){ 
                    $('#other_degree_name').show()
                    $('#degree_name').prop('required',true)
                
                }
                else{
                    $('#other_degree_name').hide()
                    $('#degree_name').prop('required',false)

                };
                
            })

    });
</script>
@endpush
