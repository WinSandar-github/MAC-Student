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
                    <h2 class="title">PAPP Renewal Registration <span>Form</span></h2>
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
            <div class="container mt-5"> 
                <div class="card border-success mb-3" id="papp_renew_form"><br/><!---->
                    <div class="row mb-5">
                        <div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၄)</h6>
                        </div>
                        <h5 class="card-title text-center fw-bolder">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                            အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် သက်တမ်းတိုးရန်လျှောက်ထားခြင်း
                        </h5>
                        {{--<div class="d-flex justify-content-between">
                            <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                            <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                        </div>--}}
                    </div>
                    <form method="post" action="javascript:RenewPAPP();" enctype="multipart/form-data" id="papp_renew_form_submit">
                    	<div class="card-body">
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
                                <div class="row mb-3" style="padding-left: 100px;">
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
                                 
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဃ)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
                                    {{--<div class="col-md-8">
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
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="နှစ်၊လ(MMM-YYYY)">
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="foreign_degree[]" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="Add()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>--}}

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
                                                <input type="file"  class="form-control" name="cpa" style="display:none">
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
                                                    <input type="file"  class="form-control" name="ra" style="display:none">
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
                                                <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-2" id="degree_year0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 col-auto">
                                                <label for="" class="col-form-label"> အောင်မြင်သည့်နှစ်/လ</label>
                                            </div>
                                            <div class="col-md-7 col-auto">
                                                <input type="type" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-4" id="edu0" >
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 col-auto">
                                                <label for="" class="col-form-label"> Attached Certificate</label>
                                            </div>
                                            <div class="col-md-2 foreign_degree_file">
                                            </div>
                                            <div class="col-md-5"  id="degree_edu" style="padding-left:5px; display: none;">
                                                <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                            </div>
                                            <div class="col-md-1" id="add_div" >
                                                <button type="button" class="btn btn-primary"  style="padding-left:5px; display: none;" id="add_btn" onclick="AddCPAFFDegree()" >
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpa_batch_no" id="cpa_batch_no">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(စ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="address" id="address">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="contact_mail" id="contact_mail">
                                    </div>
                                </div>
                                {{--<div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('CPA(FF) Registeraion No.') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="reg_no" id="reg_no" required="">
                                    </div>
                                </div>--}}
                            </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-12"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်
                                                <input type="text" style="display:inline; width:100px;" name="papp_date" id="papp_date" placeholder="နှစ်(YYYY)" class="form-control">ခုနှစ်အတွက်
                                                <input type="text" style="display:inline; width:100px;" name="papp_reg_date" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control papp_reg_date">ရက်စွဲပါ မှတ်ပုံတင်အမှတ်
                                                <input type="text" class="form-control" name="papp_reg_no" id="papp_reg_no" style="display: inline;width: 120px;" placeholder="မှတ်ပုံတင်အမှတ်" required=""> ဖြင့်မှတ်ပုံတင်ပေးခဲ့ပီးဖြစ်ပါသည်။
                                                <input type="text" style="display:inline; width:100px;" name="papp_renew_year" id="papp_renew_year" placeholder="နှစ်(YYYY)" class="form-control papp_renew_year">ခုနှစ်အတွက် မှတ်ပုံတင်သက်တမ်းတိုးပေးရန် လျှောက်ထားပါသည်။
                                            </label>
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
                                    <div class="col-md-1"><input type="radio" id="firm_check" name="work_name" onclick="getPappFirm()"></div>
                                    <div class="col-md-10">

                                        <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                    </div>
                                </div><br/>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="used_firm_check" value="" onclick="getPappFirm()"></div>
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
                                            <input type="text" class="form-control"  name="used_firm_name" >
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
                                            <input type="text" class="form-control" value="" name="used_firm_type" >
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
                                        <input type="text" class="form-control" value="" name="used_firm_level" ></div>
                                    <!-- </div> -->
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="staff_firm_check" value="" onclick="getPappFirm()"></div>
                                    <div class="col-md-4">
                                        <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" name="staff_firm_name" ></div>
                                    <!-- </div> -->
                                </div><br>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                    <label  class="error attend_place_error" style="display:none;" for="work_name">Please select one</label>
                                </div><br>
                                <div class="row mt-3">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၄။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-11"  style="font-size:15px;"><input type="text" style="display:inline; width:70px;" name="audit_year" id="audit_year" class="form-control" required=""> ပြက္ခဒိန်နှစ်အတွင်း အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကိုဦးစီးပိုင်ရှင်/ ဦးဆောင်အဖွဲ့ဝင်/ သာမန်အစုဝင်/ အဖွဲ့ခေါင်းဆောင်အနေဖြင့် ကျွန်ုပ်လက်ခံဆောင်ရွက်ခဲ့သည့် Statutory Audit Work စုစုပေါင်း (<input type="text" style="display:inline; width:50px;" name="audit_work" class="form-control" required="">) ခုရှိပါသည်။ အဆိုပါ Statutory Audit Work အပြည့်အစုံကို အောက်ပါဇယားအတွင်းထုတ်ဖော်ကြေညာပါသည်-</label>
                                        </div><br>



                                    </div>
                                </div><br><br>

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
                                </div><br>

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
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-10">
                                            <label >လက်ခံဆောင်ရွက်ပေးသည့် လုပ်ငန်းအားလုံးအတွက် နှစ်အလိုက် Register ဖြင့်မှတ်တမ်းတင်ထားရှိပါသည်။MAC မှလိုအပ်၍ တောင်းခံလျှင် တင်ပြနိုင်ပါသည်။</label>
                                    </div>
                                </div><br/>

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
                                    {{--<div class="col-md-4 view_cpa_ff_file">
										<input type="hidden" id="hidden_cpa_ff_file">
                                        <!-- <input type="file" class="form-control"  id="cpa_ff_file"  name="cpa_ff_file"> -->
                                    </div>--}}
                                </div><br/><br>
                                
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ) </div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
									<div class="col-md-4">
                                        <input type="file" class="form-control" id="cpd_record_file" name="cpd_record_file" required="">
                                    </div>
                                </div><br/><br>

                                <div class="row mt-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
                                    <div class="col-md-4">
                                            <input type="text" class="form-control" id="total_hours" name="total_hours" placeholder="စုစုပေါင်း နာရီ" required="" >
                                    </div>
                                </div><br/>
                                
                                <br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="mpa_mem_card_front" id="mpa_mem_card_front" required="" accept="image/*">
                                    </div>
                                </div><br/><br>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-4">
                                        <input type="file" class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back" required="" accept="image/*">
                                    </div>
                                </div>

                               <br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(Full-Fledged) Registeration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="cpaff_reg_no" id="cpaff_reg_no">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    <div class="col-md-6 col-form-label">PAPP Registeration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="papp_reg_no" placeholder="Enter PAPP Registeration No.">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                    <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                </div><br/>
								</div><br>
                              <div class="row ">
                                  <div class="col-md-2 offset-md-5">
                                      <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                                  </div>
                              </div><br/>
                        </div>
                    </form>
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
<script src="{{ asset('js/form_validation/papp_renew_validation.js') }}"></script>
<script type="text/javascript">
    $('document').ready(function(){
        var course_type = location.pathname.split('/');
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
        loadDescription('PAPP');
        Papp_feedback();
        loadCpaffData();
        loadPappData();
        loadCpaffInitialData();
    });
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
    $(".papp_reg_date").flatpickr({
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
    $("#audit_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
</script>
@endpush
