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
                    <h2 class="title">CPA (Full-Fledged) Existing User Registration  <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">

        </div>
        <div class="container" style="overflow: hidden;">

            <div class="row mt-5">
                <div class="card border-success mb-3" id="cpaff_from">
                    <div class="row mb-3">
                        {{--<div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၂)</h6>
                        </div>--}}
                        <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                        လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်ထားခြင်းကိုသက်တမ်းတိုးမြှင့်ရန်လျှောက်ထားခြင်း
                        </h5>
                    </div>
                    <div class="card-body">
                    <form method="post" id="cpaff_reconnect_form" action="javascript:void();" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row mb-3">
                                    <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>

                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>{{ __('အီးမေးလ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="email" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('လျို့ဝှက်နံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="password" placeholder="လျှို့ဝှက်နံပါတ်ထည့်ပါ" name="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>{{ __('လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း') }}</div>
                                    <div class="col-md-8">
                                        <input type="password" placeholder="လျှို့ဝှက်နံပါတ်အတည်ပြုခြင်း" name="confirm_password" class="form-control" id="confirm_password">
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
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*"></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                                {{--User Photo--}}
                            </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဃ)') }}</span>{{ __('အမည်') }}</div>                                    
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_mm" id="name_mm" placeholder="အမည်(မြန်မာ)" >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_eng"  placeholder="အမည်(အင်္ဂလိပ်)" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
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
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(စ)') }}</span>{{ __('အဘအမည်') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_mm" id="father_name_mm"  placeholder="အဖအမည်(မြန်မာ)" >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_eng"  placeholder="အဖအမည်(အင်္ဂလိပ်)" >
                                    </div>
                                </div> 
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">(ဆ)</span>ကျား / မ (Gender)</div>
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
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဇ)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
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
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဈ)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpa_batch_no"  placeholder="CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ည)') }}</span>{{ __('CPA(Full-Fledged) Registration No.') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpaff_reg_no" id="cpaff_reg_no"  placeholder="Enter CPA(Full-Fledged) Registeration No." >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဋ)') }}</span>{{ __('CPA(Full-Fledged) Initial Registration Date') }}</div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="cpaff_reg_year" id="cpaff_reg_year" placeholder="CPA(Full-Fledged) Initial Registration Date">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဌ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="address"  placeholder="ဆက်သွယ်ရန်လိပ်စာ" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone"  placeholder="တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email"  class="form-control" name="contact_mail"  placeholder="E-mail Address"  autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                <label class="col-md-10 col-form-label">ကျွန်ုပ်အား <input type="text" name="cpaff_pass_date" id="cpaff_pass_date" class="form-control" style="display: inline;width: 100px;" required=""> ခုနှစ်အတွက် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပြီးဖြစ်ပါသည်။ ထိုမှတ်ပုံတင်ကို <input type="text" name="cpaff_renew_date" id="cpaff_renew_date" class="form-control" style="display: inline;width: 100px;" required=""> ခုနှစ်အတွက် သက်တမ်းတိုးမြှင့်ပေးပါရန် လျှောက်ထားပါသည်။</label>                                
                            </div><br/>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                <label class="col-md-10 col-form-label">လျှောက်ထားသူသည် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေအရ ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်ရရှိထားသူ သို့မဟုတ် ရရှိခဲ့ဖူးသူဖြစ်ပါက အောက်ပါအချက်များကို ရှင်းလင်းဖော်ပြပါ-</label>                                
                            </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>

                                    <div class="col-md-7 col-form-label">နောက်ဆုံးထုတ်ပေးခဲ့သည့် ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့် မှတ်ပုံတင်အမှတ် </div>
                                    <div class="col-md-3">
                                        <input type="text" name="papp_reg_no" id="papp_reg_no" class="form-control" style="width:90%;">
                                        
                                    </div>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">လုပ်ကိုင်ခွင့်ပြုသည့်ခုနှစ်</div>
                                    <div class="col-md-3">
                                        <input type="text" name="papp_reg_year" id="papp_reg_year" class="form-control" style="width:90%;">
                                    </div><br><br>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">(မိတ္တူတင်ပြရန်)</div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="renew_file" style="width:90%;">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-9 col-form-label"> အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းလုပ်ကိုင်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ တွင်ဖော်ပြထားသည့် တာဝန်တစ်ရပ်ရပ်ကို ဆောင်ရွက်ရန်ပျက်ကွက်ခြင်း၊ ပုဒ်မ ၆၈ တွင် ဖော်ပြထားသည့် ကျင့်ဝတ်သိက္ခာတစ်ရပ်ရပ်ဖောက်ဖျက်ခြင်းတို့နှင့် စပ်လျဉ်း၍ ပုဒ်မ ၇၄ ပုဒ်မခွဲ (ခ) (ဂ) နှင့်ပုဒ်မ ၇၅ တို့အရပြစ်ဒဏ်ချမှတ်ခံထားရသူ ဟုတ်/မဟုတ်။ <input type="text" name="fine_person" class="form-control" style="display: inline;width: 100px;" >
                                </div><br/><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                                </div><br/><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ)မှတ်ပုံတင်လက်မှတ်</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="cpa_certificate" required="">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="mpa_mem_card" required="" accept="image/*">
                                    </div>
                                </div><br><br>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="mpa_mem_card_back" required="" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <div class="col-md-1"></div>
                                <div class="col-md-1 col-form-label">{{ __('(ဂ)') }}</div>
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

                              <div class="row">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                  <div class="col-md-6 col-form-label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</div>
                                  <div class="col-md-4">
                                        <input type="file"  class="form-control" name="cpd_record" required="">
                                  </div>
                              </div><br/>

                              <div class="row">
                                  <div class="col-md-2"></div>
                                  <!-- <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label> -->
                                  <label class="col-md-6 col-form-label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                                  <div class="col-md-4">
                                      <input type="text"  class="form-control" name="total_hours"  placeholder="စုစုပေါင်း နာရီ" required="">

                                  </div>
                              </div><br/><br>
                                                
                                <br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    <div class="col-md-6 col-form-label">နောက်ဆုံးမှတ်ပုံတင်ကြေးပေးသွင်းသည့်ခုနှစ်</div>
                                    <div class="col-md-4">
                                        <input type="text" name="last_paid_year" id="last_paid_year" class="form-control" placeholder="နောက်ဆုံးမှတ်ပုံတင်ကြေးပေးသွင်းသည့်ခုနှစ်">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(စ)') }}</label>
                                    <div class="col-md-4 col-form-label">ရပ်နား Form တင်ထားခြင်းရှိ/မရှိ</div>
                                    <div class="row col-md-6 py-2">
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="yes"
                                                        name="resign" value="1" onclick="$('#date_range').show()" required>
                                                <span class="form-check-sign"></span>
                                                ရှိ
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio mx-2">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id='no'
                                                        name="resign" value='0'  onclick="$('#date_range').hide()" required>
                                                <span class="form-check-sign"></span>
                                                မရှိ
                                            </label>
                                        </div>
                                        
                                        <label  class="error attend_place_error" style="display:none;" for="resign">Please select one</label>
                                    </div>
                                </div>

                                <div class="row mb-2" style="padding-left: 110px;display:none" id="date_range" >
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6" style="padding-left:0px;">
                                        <label>
                                            <input class="form-control" type="text" style="display:inline; width:100px;" name="resign_date" id="resign_date" placeholder="ခုနှစ်">&nbsp;&nbsp;ခုနှစ်တွင် ရပ်နား Form တင်ခဲ့ပါသည်။
                                        </label>
                                    </div>
                                </div>
                                <br/><br>

                                <div class="row mb-3" style="padding-left:50px; margin-top:10px;">
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
                                        <button type="submit" id="cpaff_submit" class="btn btn-success btn-hover-dark w-100" disabled>{{ __('Submit') }}</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            <div>
        </div>
    </div>

    {{-- Self_Confession_modal --}}
    <div id="submitModal" class="multi-step" style="width: 100%;height : 100vh">
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
<script src="{{ asset('js/form_validation/cpaff_reconnect_validation.js') }}"></script>
<script type="text/javascript">
    $("#cpaff_renew_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#cpaff_pass_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    // $("#old_card_no_year").datepicker({
    //     format: "yyyy",
    //     viewMode: "years", 
    //     minViewMode: "years",
    //     autoclose:true //to close picker once year is selected
    // });
    $("#papp_reg_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#last_paid_year").datepicker({
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
    $("#cpaff_reg_year").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    // $("input[name='start_date']").flatpickr({
    //     enableTime: false,
    //     dateFormat: "M-d-Y",
    //     allowInput: true,
    // });
    // $("input[name='end_date']").flatpickr({
    //     enableTime: false,
    //     dateFormat: "M-d-Y",
    //     allowInput: true,
    // });

    $(document).on('keydown', '#father_name_mm', function () {
        myanmarLetterOnly($(this));
    });
    $(document).on('keydown', '#name_mm', function () {
        myanmarLetterOnly($(this));
    });
    function myanmarLetterOnly(self) {
        val = self.val();
        if (/[a-zA-Z0-9]+$/.test(val)) {
            self.val(val.replace(/[a-zA-Z0-9]+$/, ''));
        }
    }
    $(document).ready(function() {
        $('.modal').MultiStep({
            title:'ဝန်ခံချက်',
            data:[{
                content:`
                <iframe src="{{ asset('assets/images/pa_promise.pdf') }}"  style="overflow:scroll;height:70vh;width:100%" height="100vh" width="70vh"></iframe>
                <div class="pull-right mt-1">
                    <h6 class="pull-left me-4 fw-bold">အထက်ဖော်ပြပါအချက်များအား</h6>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="self_confession" id="accept" value="1">
                    <label class="fw-bold">လက်ခံသည်</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="self_confession" id="not-accept" value="2">
                    <label class="fw-bold">လက်မခံပါ</label>
                    </div>
                    <div class="text-danger" id="valid_self_confession" style="display : none">
                    </div>
                </div>
                `,
                label:'ကိုယ်တိုင်ဝန်ခံချက်'
            },],
            final:`
            <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data" novalidate>
                @csrf
                <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center><br>
                <div class="mb-3" style="text-align:center;">
                    <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                    <label>We have been sent verification code on your email.Please check your email.</label>
                </div><br>
                <div class="mb-3" style="text-align:center;">
                    <label style="margin-bottom: 2%;">Enter your verification code</label>
                    <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Enter Verification Code"></center>
                </div>
                <center>
                <button type="submit" id="btn1" onclick="check_email_cpaff_other()" class="btn btn-success btn-hover-dark w-30">Verify
                </button>
                </center><br>
                <div class="col-md-12" style="text-align:center;">
                    <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                </div><br><br>
            </form>
            `,
            finalLabel:'Email Verification',
            modalSize:'lg',
        });
    });
</script>
@endpush
