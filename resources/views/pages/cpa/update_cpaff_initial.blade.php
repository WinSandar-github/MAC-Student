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

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA (Full-Fledged) Initial Registration  <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">

        </div>
        <div class="container" style="overflow: hidden;">

            <div class="row mt-5">
                <div class="col-md-12 text-center mb-5" style="font-weight:bold;font-size:20px;" name="remark" id="remark">
                    <label>Reject လုပ်ရသည့်အကြောင်းအရင်း</label><label class="col-md-12 col-form-label text-danger" id="remark_description"></label>
                </div>
                <div id="expiry_card" style="display:none;">
                    <div class="card border-danger my-3" style="height:60px;">
                        <div class="card-body">
                            <p  class="card-text" id="expire"></p>
                        </div>
                    </div>
                </div>
                <div class="card border-success mb-3" id="cpaff_from">
                    <div class="row mb-3">
                        <div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၁)</h6>
                        </div>
                        <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                            လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်ရန်ကနဦးလျှောက်ထားခြင်း
                        </h5>
                    </div>
                    <div class="card-body">

                    {{--<form method="post" action="javascript:createCPAFFRegister();" class="needs-validation" enctype="multipart/form-data" novalidate>--}}
                    <form method="post" id="update_cpaff_form" action="javascript:createCPAFFRegister();" enctype="multipart/form-data">
                        @csrf
                    <!-- <fieldset id="fieldset" > -->
                        <input type="hidden" name="status">
                        <input type="hidden" name="form_type" value="0">
                        <input type="hidden" id="cpaff_id" name="cpaff_id"/>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row mb-3">
                                    <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>

                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>{{ __('အမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_mm" id="name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_eng" id="name_eng">
                                    </div>
                                </div>
                                {{--<div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-2 col-5 pr-1">
                                                <input type="text" name="nrc_state_region" class="form-control" id="nrc_state_region" readonly="">
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <input type="text" name="nrc_township" class="form-control" id="nrc_township" readonly="">
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <input type="text" name="nrc_citizen" class="form-control" id="nrc_citizen" readonly="">
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                                <input type="text" name="nrc_number" class="form-control" id="nrc_number" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <div class="row">
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
                                                <input type="text" name="nrc_number" placeholder="ဥပမာ - ၁၂၃၄၅၆" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_mm" id="father_name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_eng" id="father_name_eng">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                {{--User Photo--}}
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                               id="cpaff_img" alt="Upload Photo">
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
                                 
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဃ)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
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
                                                <div class="col-md-2 cpa_file"></div>
                                                <div class="col-md-8">
                                                    <input type="file"  class="form-control" name="cpa">
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
                                                <div class="col-md-2 ra_file" id="ra_file"></div>
                                                <div class="col-md-8">
                                                    <!-- <div class="single-form"> -->
                                                        <input type="file"  class="form-control" name="ra">
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
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-7 col-auto">
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-7 col-auto">
                                                    <input type="text" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-2 foreign_degree_file">
                                                </div>
                                                {{--<div class="col-md-5"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                                </div>--}}
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary"  style="padding-left:5px; display: none;" id="add_btn" onclick="AddCPAFFDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <label  class="error attend_place_error" style="display:none;" for="education">Please select one</label><br/>
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpa_batch_no" id="cpa_batch_no">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(စ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="address" id="address" placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone" id="phone"  placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email"  class="form-control" name="contact_mail" id="contact_mail"  placeholder="" >
                                    </div>
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လျှောက်ထားသူ၏ပညာအရည်အချင်းဆိုင်ကြေညာချက်(ဆိုင်ရာအကွက်တွင်အမှန်ခြစ်အမှတ်အသားပြု၍ဖြည့်ပေးပါ)') }}</label>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားတော်၏နိုင်ငံသားဖြစ်ပြီး ') }}</label>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="cpa_part_2_check" value=""  onClick="CheckPartTwo()">
                                    </div>
                                    <label class="col-md-10 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို <input type="text" name="cpa2_pass_date" id="cpa2_pass_date" placeholder="YYYY" class="form-control" style="display: inline;width: 100px;"> ခုနှစ်တွင် ကိုယ်ပိုင်အမှတ် <input type="text" name="cpa2_reg_no" id="cpa2_reg_no" class="form-control" style="display: inline;width: 100px;"> ဖြင့် အောင်မြင်ပါသည်။</label>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="qt_pass_check" value=""  onClick="CheckPartTwo()">
                                    </div>
                                    <label class="col-md-10 col-form-label"><input type="text" name="country" id="country" class="form-control" style="display: inline;width: 100px;" > နိုင်ငံ <input type="text" name="government" id="government" class="form-control" style="display: inline;width: 100px;" >အဖွဲ့အစည်းကပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရှိခဲ့ပြီး မြန်မာနိုင်ငံစာရင်းကောင်စီက 
                                    <input type="text" name="exam_year" id="exam_year" placeholder="YYYY" class="form-control" style="display: inline;width: 100px;" > ခုနှစ် <input type="text" name="exam_month" id="exam_month" placeholder="Month" class="form-control" style="display: inline;width: 100px;" > လတွင်
                                    ကျင်းပခဲ့သည့် အရည်အချင်းစစ်စာမေးပွဲကို ခုံအမှတ်<input type="text" name="roll_no" id="roll_no" class="form-control" style="display: inline;width: 100px;" >ဖြင့် အောင်မြင်ခဲ့ပါသည်။</label>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်စာမေးပွဲအောင်လက်မှတ်</div>
                                    <div class="col-md-1 cpa_certificate_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="cpa_certificate" id="cpa_certificate">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-1 mpa_mem_card_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="mpa_mem_card" id="mpa_mem_card" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-1 mpa_mem_card_back_old"></div>
                                    <div class="col-md-3">
                                        <input type="file" class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <div class="col-md-1"></div>
                                <div class="col-md-1 col-form-label">{{ __('(ဂ)') }}</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail shadow">
                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo" id="nrc_front">
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
                                                         alt="Upload Photo" id="nrc_back">
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
                              </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <label class="col-md-6 col-form-label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</label>
                                    <div class="col-md-1 cpd_record_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="cpd_record" id="cpd_record" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2"></div>
                                    <!-- <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label> -->
                                    <label class="col-md-6 col-form-label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="total_hours" id="total_hours"  placeholder="စုစုပေါင်း နာရီ" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    <div class="col-md-6 col-form-label">စာရင်းကိုင်အလုပ်သင်လုပ်သက်(၃)နှစ်ပြည့်ကြောင်းရုံးအမိန့်</div>
                                    <div class="col-md-1 three_years_full_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="three_years_full" id="three_years_full" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left:50px;">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="cpaff_submit_confirm" onchange="$('#cpaff_submit').prop('disabled', !this.checked)">
                                            <span class="form-check-sign"></span>
                                            <p class="fw-bolder">
                                                * အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။
                                            </p>
                                        </label>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" id="cpaff_submit" class="btn btn-success btn-hover-dark w-100" disabled>{{ __('Update') }}</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            <div>
        </div>
    </div>

    <!-- Modal -->
    {{--<form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
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
                            <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Enter Verification Code"></center>
                          </div>
                      </div>
                      <center>
                          <button type="submit" id="btn1" onclick="check_email_cpaff()" class="btn btn-success btn-hover-dark w-30">Verify
                          </button>
                      </center><br>
                      <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                      </div><br><br>
                </div>
            </div>
        </div>
    </form>--}}

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
    getCpersonalNo(); 

    var cpaff_id=localStorage.getItem('cpaff_id');
    var reject_description=localStorage.getItem('reject_reason');
    $('#cpaff_id').val(cpaff_id);
    $('#remark_description').text(reject_description);
    // check_email_cpaff();
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
    $(document).on('keydown', '#father_name_mm', function () {
        myanmarLetterOnly($(this));
    });
    $(document).on('keydown', '#name_mm', function () {
        myanmarLetterOnly($(this));
    });

    $("#cpa2_pass_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#exam_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#exam_month").datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months",
        autoclose:true //to close picker once year is selected
    }); 

    $.ajax({
        url: BACKEND_URL + "/cpa_ff/" + cpaff_id,
        type: 'get',
        success: function (result) {
            // console.log(result);
            var cpaff=result.data[0];
            console.log(cpaff)
            document.getElementById('cpaff_img').src=BASE_URL + cpaff.profile_photo;
            document.getElementById('nrc_front').src=BASE_URL + cpaff.nrc_front;
            document.getElementById('nrc_back').src=BASE_URL + cpaff.nrc_back;

            $('#name_mm').val(cpaff.name_mm);
            $('#name_eng').val(cpaff.name_eng);
            $('#nrc_state_region').val(cpaff.nrc_state_region);
            $('#nrc_township').val(cpaff.nrc_township);
            $('#nrc_citizen').val(cpaff.nrc_citizen);
            $('#nrc_number').val(cpaff.nrc_number);
            $('#father_name_mm').val(cpaff.father_name_mm);
            $('#father_name_eng').val(cpaff.father_name_eng);
            $('#cpa_batch_no').val(cpaff.cpa_batch_no);
            $('#address').val(cpaff.address);
            $('#phone').val(cpaff.phone);
            $('#contact_mail').val(cpaff.contact_mail);
            $('#country').val(cpaff.country);
            $('#government').val(cpaff.government);
            $('#roll_no').val(cpaff.roll_no);
            $('#total_hours').val(cpaff.total_hours);
            var cpa2_pass_date=new Date(cpaff.cpa2_pass_date);
            var exam_year=new Date(cpaff.exam_year);
            var exam_month=new Date(cpaff.exam_month);

            if(cpaff.cpa2_pass_date!=null || cpaff.cpa_batch_no!=null){
                $('#cpa_part_2_check').attr('checked',true);
                $('#cpa_part_2_check').attr('disabled',false);
                $("input[name='cpa2_pass_date']").val(cpa2_pass_date.getFullYear());
                $("input[name='cpa2_reg_no']").val(cpaff.cpa2_reg_no);
            }
            else if(cpaff.country!=null || cpaff.government!=null || cpaff.exam_year!=null || cpaff.exam_month!=null || cpaff.roll_no!=null)
            {
                // $('#used_firm_check').attr('checked',true);
                $('#qt_pass_check').attr('checked',true);
                $('#qt_pass_check').attr('disabled',false);

                $("input[name='country']").val(cpaff.country);
                $("input[name='government']").val(cpaff.government);
                $("input[name='exam_year']").val(exam_year.getFullMonth());
                $("input[name='exam_month']").val(exam_month.getFullMonth());
                $("input[name='roll_no']").val(cpaff.roll_no);
            }
            
            $('.cpa_certificate_old').append("<a href='" + BASE_URL + cpaff.cpa_certificate + "'  target='_blank'>View File</a><br/>");
            $('.mpa_mem_card_old').append("<a href='" + BASE_URL + cpaff.mpa_mem_card + "'  target='_blank'>View File</a><br/>");
            $('.mpa_mem_card_back_old').append("<a href='" + BASE_URL + cpaff.mpa_mem_card_back + "'  target='_blank'>View File</a><br/>");
            $('.cpd_record_old').append("<a href='" + BASE_URL + cpaff.cpd_record + "'  target='_blank'>View File</a><br/>");
            $('.three_years_full_old').append("<a href='" + BASE_URL + cpaff.three_years_full + "'  target='_blank'>View File</a><br/>");

            if (cpaff.ra != null && cpaff.ra != "null") {
                $('#ra_edu').attr('checked', true);
                // $('#cpa_edu').attr('disabled', false);   
                // $('#education').attr('disabled', false); 
                getCPAEducation();        
                $(".ra_file").append("<a href='"+BASE_URL+cpaff.ra+"'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".ra_file").append("");
            }
            if(cpaff.cpa!=null && cpaff.cpa!="null"){
                $('#cpa_edu').attr('checked', true);   
                // $('#education').attr('disabled', true); 
                // $('#ra_edu').attr('disabled', true);            
                getCPAEducation();
                $(".cpa_file").show();
                $(".cpa_file").append("<a href='" + BASE_URL + cpaff.cpa + "'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".cpa_file").append("");
            }
            if (cpaff.foreign_degree != null && cpaff.foreign_degree != "null") {
                $('#education').attr('checked', true);
                // $('#cpa_edu').attr('disabled', true); 
                // $('#ra_edu').attr('disabled', true);
                getCPAEducation();
                let foreign_degree = JSON.parse(cpaff.foreign_degree);
                let degree_name = JSON.parse(cpaff.degree_name);
                let degree_pass_year = JSON.parse(cpaff.degree_pass_year);
                for (let j = 0; j < degree_name.length - 1; j++) {
                    AddCPAFFDegree();
                }
                for (let i = 0; i < degree_name.length; i++) {
                    $('input[name="degree_name[]"]').eq(i).val(degree_name[i]);
                    $('input[name="degree_pass_year[]"]').eq(i).val(degree_pass_year[i]);
                    $($(".foreign_degree_file")[i]).append(jQuery("<a href='" + BASE_URL + foreign_degree[i] + "'  target='_blank'>View File</a><br/>"));
                }
            }
        }
    });
</script>
@endpush
