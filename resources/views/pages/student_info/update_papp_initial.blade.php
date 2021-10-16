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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">PAPP Initial Registration<span>Form</span></h2>
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
            <div class="row mt-5">

                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="check_cpa_age" id="check_cpa_age">
                    <label class="col-md-12 col-form-label">{{ __('CPA (FF) သက်တမ်း ၁ နှစ် မပြည့်​သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>

                    <br/>
                    <br/>
                    <br/>
                </div>
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

                <div class="card border-success mb-3" id="papp_from">

                    <div class="card-body ">
                        <div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၃)</h6>
                        </div>
                        <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                            အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် မှတ်ပုံတင်ရန် ကနဦးလျှောက်ထားခြင်း
                        </h5><br>

                        {{--<form  method="post" action="javascript:Papp_Submit();" enctype="multipart/form-data" >--}}
                        <form  method="post" id="papp_form" action="javascript:void();" enctype="multipart/form-data">
                            <fieldset id="fieldset" disabled="disabled">
                            <!-- <fieldset id="fieldset" > -->
                            <input type="hidden" id="papp_id" name="papp_id"/>
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
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="papp_img"
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
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="နှစ်။လ(MMM-YYYY)">
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
                                        <input type="text"  class="form-control" name="address" id="address" placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone" id="phone" placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email"  class="form-control" name="contact_mail" id="contact_mail" placeholder="" >
                                    </div>
                                </div>
                            </div>




                                {{--<div class="row">
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
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="DD-MMM-YYYY">
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
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="Add()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}

                                <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            {{--<label class="col-md-4"  style="font-size:15px;">ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားဖြစ်ပြီး ကျွန်ုပ်အား</label>
                                            <div class="col-md-2">
                                                <input type="text" name="cpaff_pass_date" class="form-control cpaff_pass_date" placeholder="ခုနှစ်/YYYY">
                                            </div>
                                            <label class="col-md-5"  style="font-size:15px;">ခုနှစ်အတွက် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပြီးဖြစ်ပါသည်။</label>--}}

                                            <label class="col-md-11" class="form-control" style="font-size:15px;">ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားဖြစ်ပြီး ကျွန်ုပ်အား <input type="text" name="cpaff_pass_date" id="cpaff_pass_date" class="form-control cpaff_pass_date" placeholder="ခုနှစ်/YYYY" style="width: 100px;display: inline;"> ခုနှစ်အတွက် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပြီးဖြစ်ပါသည်။</label>
                                        </div>



                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၃။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            {{--<label class="col-md-6"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်</label>
                                            <div class="col-md-2">
                                                <input type="text" name="papp_date" class="form-control papp_date" placeholder="ခုနှစ်/YYYY">
                                            </div>
                                            <label class="col-md-4"  style="font-size:15px;">ခုနှစ်အတွက်မှတ်ပုံတင်ပေးပါရန်လျှောက်ထားပါသည်။</label>--}}

                                            <label class="col-md-11"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ် <input type="text" name="papp_date" id="papp_date" style="display: inline; width: 100px;" class="form-control papp_date" placeholder="ခုနှစ်/YYYY"> ခုနှစ်အတွက်မှတ်ပုံတင်ပေးပါရန်လျှောက်ထားပါသည်။</label>
                                        </div>



                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၄။') }}</label>

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
                                    <div class="col-md-1"><input type="radio" name="work_name" id="firm_check" value="" onclick="getPappFirm()"></div>
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
                                    <div class="col-md-1"><input type="radio" name="work_name" id="staff_firm_check" value="" onclick="getPappFirm()"></div>
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
                                            <label class="col-form-label">{{ __('၅။') }}</label>

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
                                            <label style="font-size:15px;">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်၊</label>
                                    </div>
                                    <div class="col-md-1 cpa_ff_file_old"></div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" name="cpa_ff_file"  id="cpa_ff_file" >
                                    </div>
                                </div><br/>
                                {{--<div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> မှတ်ပုံတင်မည့် ပြက္ခဒိန်နှစ်မတိုင်မီနှစ်တွင် မြန်မာနိုင်ငံ၌ ၁၈၃ ရက်ထက်မနည်း နေထိုင်သူဖြစ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="file_183" name="file_183">
                                    </div>
                                </div><br/><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဂ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> အခြားလုပ်ငန်းအဖွဲ့အစည်းတစ်ရပ်ရပ်တွင် အချိန်ပြည့် တာဝန်ထမ်းတောင်နေသူ မဟုတ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="not_fulltime_file" name="not_fulltime_file">
                                    </div>
                                </div><br/><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဃ)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> လျှောက်ထားသည့်နှစ်အတွက် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကို မိမိ၏ အဓိကအသက်မွေးဝမ်းကျောင်းလုပ်ငန်းအဖြစ် မြန်မာနိုင်ငံအတွင်းတွင် လုပ်ကိုင်မည်ဖြစ်​ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file"  class="form-control" id="work_in_mm_file" name="work_in_mm_file">
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(င)</div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;"> လုပ်ငန်းဆောင်ရွက်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီ၏ ၉-၈-၂၀၁၈ ရက်စွဲပါအမိန့်ကြော်ငြာစာအမှတ် ၂၇/၂၀၁၈ ၏ နောက်ဆက်တွဲတွင် ဖော်ပြထားသည့်စည်းကမ်းချက်များနှင့် စပ်လျဥ်း၍ လိုက်နာခြင်း ရှိ/မရှိ၊</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="rule_conf_file" name="rule_conf_file">
                                    </div>
                                </div>--}}<br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ) </div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
                                    <div class="col-md-1 cpd_record_file_old"></div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="cpd_record_file" name="cpd_record_file">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-7">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
                                    <div class="col-md-3">
                                            <input type="text" class="form-control" id="total_hours" name="total_hours" placeholder="စုစုပေါင်း နာရီ" >
                                    </div>
                                </div><br/><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဂ) </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-md-4" >ပြည်တွင်းအခွန်ဦးစီးဌာနသို့ </label>
                                            <div class="col-md-3">
                                                <input type="text" name="tax_year" id="tax_year" class="form-control tax_year" placeholder="ပြက္ခဒိန်နှစ်/YYYY">
                                            </div>
                                            <label class="col-md-5" >ပြက္ခဒိန်နှစ်အတွက် အခွန်ပေးဆောင်မှု </label>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-md-12">အထောက်အထား (ရှိလျှင်) (သို့မဟုတ်) အခွန်ကင်းရှင်းကြောင်း ထောက်ခံချက်၊</label>
                                        </div>


                                    </div>
                                    <div class="col-md-1 tax_free_file_old"></div>
                                    <div class="col-md-3">
                                            <input type="file" class="form-control" id="tax_free_file" name="tax_free_file">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား(အရှေ့)</div>
                                    <div class="col-md-1 mpa_mem_card_front_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="mpa_mem_card_front" id="mpa_mem_card_front" accept="image/*">
                                    </div>
                                </div><br/><br>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား(အနောက်)</div>
                                    <div class="col-md-1 mpa_mem_card_back_old"></div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back" accept="image/*">
                                    </div>
                                </div>
                                {{--<div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဈ)') }}</label>

                                    <div class="col-md-6 col-form-label">ကိုယ်တိုင်ဝန်ခံချက်</div>
                                    <div class="col-md-4">
                                        <input type="file"  class="form-control" name="letter" id="letter" >
                                    </div>
                                </div>--}}
                                <br/><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>

                                    <div class="col-md-7 col-form-label">CPA(FF) Registeraion No.</div>
                                    <div class="col-md-3">
                                        <input type="text"  class="form-control" name="reg_no"  id="reg_no">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm" onchange="$('#papp_submit').prop('disabled', !this.checked)"></div>
                                    <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                </div><br/><br>
                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" id="papp_submit" class="btn btn-success btn-hover-dark w-100"  data-toggle="modal" data-target="#pappModal" disabled>{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                    </div>

                </div>
            </div>

        </div><br/></br/>

<!-- Modal -->
{{-- <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
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
                            <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Enter Verification Code"></center>
                          </div>
                      </div>
                      <center>
                          <button type="submit" id="btn1" onclick="check_email_papp()" class="btn btn-success btn-hover-dark w-30">Verify
                          </button>
                      </center><br>
                      <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                      </div><br><br>
                </div>
            </div>
        </div>
    </form> --}}
    {{-- <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#pappModal">Open modal</button> --}}
    <div id="pappModal" class="multi-step" style="width: 100%;height : 100vh">
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
<!-- <script src="{{ asset('js/form_validation/papp_validation.js') }}"></script> -->
<script type="text/javascript">
   loadCpaffData();
   isLoginPAPP();
   Papp_feedback();
//    loadCpaffInitialData();
   //loadPappData();
    var papp_id=localStorage.getItem('papp_id');
    var reject_description=localStorage.getItem('reject_reason');
    $('#papp_id').val(papp_id);
    $('#remark_description').text(reject_description);
   $('input[name="degree_pass_year[]"]').flatpickr({
            enableTime: false,
            dateFormat: "M-Y",
            allowInput: true,
    });
    $("#cpaff_pass_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#papp_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#tax_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $.ajax({
        url: BACKEND_URL + "/papp/" + papp_id,
        type: 'get',
        success: function (result) {
            console.log('result==>',result);
            var papp=result.data[0];
            document.getElementById('papp_img').src=BASE_URL + papp.profile_photo;
            var cpaff_date=new Date(papp.cpaff_pass_date);
            var papp_date=new Date(papp.papp_date);
            var tax_date=new Date(papp.tax_year);
            $('#cpaff_pass_date').val(cpaff_date.getFullYear());
            $('#papp_date').val(papp_date.getFullYear());
            $('#cpa_batch_no').val(papp.cpa_batch_no);
            $('#address').val(papp.address);
            $('#phone').val(papp.phone);
            $('#contact_mail').val(papp.contact_mail);
            $('#cpaff_reg_no').val(papp.cpa_batch_no);
            if(papp.use_firm==1){
                $('#firm_check').attr('checked',true);
            }
            else if(papp.firm_name!=null || papp.firm_type!=null || papp.firm_step!=null)
            {
                $('#used_firm_check').attr('checked',true);
                $("input[name='used_firm_name']").val(papp.firm_name);
                $("input[name='used_firm_type']").val(papp.firm_type);
                $("input[name='used_firm_level']").val(papp.firm_step);
            }
            else if(papp.staff_firm_name!=null){                
                $('#staff_firm_check').attr('checked',true);
                $("input[name='staff_firm_name']").val(papp.staff_firm_name);
            }
            $("input[name='total_hours']").val(papp.cpd_hours);
            $('#tax_year').val(tax_date.getFullYear());
            $("input[name='reg_no']").val(papp.reg_no);
            $('.mpa_mem_card_back_old').append("<a href='" + BASE_URL + papp.mpa_mem_card_back + "'  target='_blank'>View File</a><br/>");
            $('.mpa_mem_card_front_old').append("<a href='" + BASE_URL + papp.mpa_mem_card_front + "'  target='_blank'>View File</a><br/>");
            $('.tax_free_file_old').append("<a href='" + BASE_URL + papp.tax_free_recommendation + "'  target='_blank'>View File</a><br/>");
            $('.cpd_record_file_old').append("<a href='" + BASE_URL + papp.cpd_record + "'  target='_blank'>View File</a><br/>");
            $('.cpa_ff_file_old').append("<a href='" + BASE_URL + papp.cpa_ff_recommendation + "'  target='_blank'>View File</a><br/>");
            if (papp.ra != null && papp.ra != "null") {
                $('#ra_edu').attr('checked', true);
                $('#cpa_edu').attr('disabled', true);   
                $('#education').attr('disabled', true); 
                getCPAEducation();        
                $(".ra_file").append("<a href='"+BASE_URL+papp.ra+"'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".ra_file").append("");
            }
            if(papp.cpa!=null && papp.cpa!="null"){
                $('#cpa_edu').attr('checked', true);   
                $('#education').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);            
                getCPAEducation();
                $(".cpa_file").show();
                $(".cpa_file").append("<a href='" + BASE_URL + papp.cpa + "'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".cpa_file").append("");
            }
            if (papp.foreign_degree != null && papp.foreign_degree != "null") {
                $('#education').attr('checked', true);
                $('#cpa_edu').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);
                getCPAEducation();
                let foreign_degree = JSON.parse(papp.foreign_degree);
                let degree_name = JSON.parse(papp.degree_name);
                let degree_pass_year = JSON.parse(papp.degree_pass_year);
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
    $(document).ready(function() {
        $('.modal').MultiStep({
            title:'ဝန်ခံချက်',
            data:[
                {
                    content:`<iframe src="{{ asset('assets/images/TMS requirment(23-9-2021).pdf') }}"  style="overflow:scroll;height:70vh;width:100%" height="100vh" width="70vh"></iframe>
                                <div class="pull-right mt-1">
                                <h6 class="pull-left me-4 fw-bold">အထက်ဖော်ပြပါအချက်များအား</h6>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="self_confession_PAPP" id="accept" value="1">
                                <label class="fw-bold">လက်ခံသည်</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="self_confession_PAPP" id="not-accept" value="2">
                                <label class="fw-bold">လက်မခံပါ</label>
                                </div>
                                <div class="text-danger" id="valid_self_confession_PAPP" style="display : none">
                                </div>
                            </div>`,
                    label   :'ကိုယ်တိုင်ဝန်ခံချက်'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                မိမိ၏စာရင်းလုပ်ငန်းအတွက် အများသိရှိစေရန်ကြော်ငြာရာတွင် မိမိကိုယ်တိုင်တာဝန်ခံဆောင်ရွက် ပေးနိုင်သည်ထက် သို့မဟုတ် မိမိတွင်ရှိသောအရည်အချင်း သို့မဟုတ် အတွေ့အကြုံထက်ပိုမိုထုတ် ဖော်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio"   name="check1" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check1" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                အခြားစာရင်းလုပ်ငန်းလုပ်ကိုင်သူအား ထိခိုက်နစ်နာစေသည့် အချက်အလက်ဖြင့် မိမိလုပ် ငန်းကို ကြော်ငြာခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check2" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check2" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                Global network/Association name အသုံးပြု၍ စာရင်းစစ်လုပ်ငန်းအမည်ဖြင့်ကြော်ငြာခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check3" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check3" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မိမိဝန်ဆောင်မှုမပေးသည့်အခြား Client များ၏ အမည်စာရင်းများအား ထည့်သွင်းကြော်ငြာ ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check4" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check4" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                လုပ်ငန်းအပ်နှံသူ၏ အမြတ်/ ဝင်ငွေပေါ်တွင် အခြေတည်၍ လုပ်ခငွေ/ အခကြေးငွေတောင်းယူခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check5" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check5" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 1'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                ကောင်စီကလိုအပ်၍ တောင်းဆိုသည့် စာရင်းများနှင့်စပ်လျဥ်းသည့် အချက်အလက်များကို တင်ပြ ပေးရန်ပျက်ကွက်ခြင်း။
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check6" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check6" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မိမိတစ်ဦးတည်းသာ သိရှိစေသော အကြောင်းအချက်များကို အလုပ်ရှင်၏ ခွင့်ပြုချက်မရဘဲ သို့မဟုတ် တည်ဆဲဥပဒေတစ်ရပ်အရ မဟုတ်ဘဲ အခြားသူထံထုတ်ဖော်အသိပေးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check7" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check7" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မိမိအားပေးအပ်သည့် စာရင်းပညာဆိုင်ရာ အလုပ်ဝတ္တရားများကို ဆောင်ရွက်ရာတွင် ထိုက်သင့် သော သတိပြုခြင်းမရှိဘဲ ဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check8" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check8" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၂ (ဍ) ပါ သတ်မှတ်ပြဌာန်းထားသည့် စာရင်းလုပ်ငန်း များ၊ Statutory Audit (including component auditor performance),Forensic Audit, Review Engagement , Assurance Engagement  ,Agreed upon Audit Procedures (including Independent Internal Audit) စာရင်းလုပ်ငန်းများနှင့် မြန်မာနိုင်ငံစာရင်းကောင်စီက အခါအားလျော်စွာ သတ်မှတ်သည့်လုပ်ငန်းများကို အများနှင့်ဆိုင်သော စာရင်းလုပ်ငန်း လုပ်ကိုင်သူမဟုတ်သူများနှင့် တွဲဖက်ဖွဲ့စည်းဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check9" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check9" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းဖော်ပြချက်၊ ကြေညာချက်၊ လုပ်ငန်းအလားအလာညွှန်းတမ်း၊ ရှင်းတမ်း၊ အစီရင်ခံစာ ငွေစာရင်းစာအုပ်၊ လက်မှတ် သို့မဟုတ် ပုံစံတွင် ပြင်ပစာရင်းစစ်အဖြစ် ထောက်ခံလက်မှတ် ရေးထိုးခြင်းများ၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check10" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check10" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 2'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                စဉ် (၉) နှင့် (၁၀) ပါ စာရင်းလုပ်ငန်းအမျိုးအစားများအား သက်တမ်းရှိသည့် အများပြည်သူသို့စာရင်း ဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်မရှိဘဲလုပ်ကိုင်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check11" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check11" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းစစ်လုပ်ငန်းအမည်ဖြင့် မှတ်ပုံတင်ထားသည့် စာရင်းစစ်လုပ်ငန်းအဖွဲ့ဝင်ဖြစ်သူသည် အခြား စာရင်းစစ်လုပ်ငန်းတစ်ခု၌ အဖွဲ့ဝင်အဖြစ်သော်လည်းကောင်း၊ မိမိကိုယ်ပိုင်စာရင်းစစ် လုပ်ငန်းအဖြစ် သော်လည်းကောင်း ဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check12" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check12" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းစစ်အစီရင်ခံစာတွင်လက်မှတ်ရေးထိုးရာ၌ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူတစ်ဦးသည် အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်  စာရင်းလုပ်ငန်း တစ်ခုထက်ပိုမို၍ လက်မှတ်ထိုးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check13" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check13" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                အကျိုးစီးပွားပါဝင်ပတ်သက်မှု၊ အကျိုးစီးပွားချင်း ပဋိပက္ခဖြစ်မှု၊ ဆန့်ကျင်ဖက်ဖြစ်မှု၊ လွတ်လပ်မှုကို ထိခိုက်စေမှု ဖြစ်စေသော လုပ်ငန်းများကို လက်ခံဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check14" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check14" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                ယခင်စာရင်းစစ်အဖြစ်ဆောင်ရွက်ခဲ့သူနှင့် ဆက်သွယ်ဆောင်ရွက်ခြင်းမပြုဘဲ ထိုစာရင်းစစ် ရာထူးကို လက်ခံခြင်း သို့မဟုတ် အခြားသူတစ်ဦးဆောင်ရွက်နေသည့် စာရင်းလုပ်ငန်းကို မိမိအတွက် တောင်းယူခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check15" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check15" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 3'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                စာရင်းစစ်များခန့်ထားခြင်းကိစ္စနှင့်စပ်လျဥ်း၍ မြန်မာနိုင်ငံကုမ္ပဏီများအက်ဥပဒေ သို့မဟုတ် သက်ဆိုင်ရာအခြားဥပ‌ဒေပါပြဌာန်းချက်များနှင့် ကိုက်ညီခြင်းမရှိသည့်ခန့်ထားမှုများကို လက်ခံဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check16" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check16" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                ကုမ္ပဏီညွှန်းတမ်းတွင်သော်လည်းကောင်း၊ အခြားတစ်််််နည်းနည်းဖြင့်သော်လည်းကောင်း ပုံနှိပ် ထုတ်ဝေရန် အနာဂတ်အမြတ်ငွေကို ခန့်မှန်းတွက်ချက်အတည်ပြုပေးခြင်း သို့မဟုတ် တစ်နှစ်စီ အတွက် အရှုံးအမြတ်များကို သီးခြားဖော်ပြခြင်းမပြုဘဲ တစ်နှစ်ထက်ပိုသောနှစ်များအတွက် ပျမ်းမျှ အမြတ်ငွေရှင်းတမ်းများကို ပုံနှိပ်ထုတ်ဝေရန်အတည်ပြုပေးခြင်း၊ သို့ရာတွင် လုပ်ငန်းလိုအပ်ချက်အရ ရေးဆွဲတင်ပြမည့် ကိစ္စရပ်များနှင့်သက်ဆိုင်ခြင်း မရှိစေရ၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check17" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check17" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                လုပ်ငန်းရှင်ကယုံမှတ်အပ်နှံထားသည့် ငွေကြေးများကို ကိုင်တွယ်ခန့်ခွဲရပါက ယင်းငွေကြေးများကို စနစ်တကျ သုံးစွဲခန့်ခွဲကြောင်း သိသာပေါ်လွင်စေ‌‌ရေးအတွက် လိုအပ်သော စာရင်းမှတ်တမ်းများ သီးခြား ဘဏ်စာရင်းများ ဖွင့်လှစ်ထိန်းသိမ်းရန်ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check18" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check18" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                လုပ်ငန်း၏ အမြတ် သို့မဟုတ် အရှုံးကို မမှန်မကန်ဖော်ပြထားခြင်းကိုသိလျှက်နှင့် ထုတ်ဖော် တင်ပြရန် ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check19" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check19" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းပညာရှင်ဆိုင်ရာ ကျင့်ဝတ်သိက္ခာနှင့် စာရင်းလုပ်ငန်းဆိုင်ရာကျင့်ဝတ်စည်းကမ်းများ၊ စံများကို လိုက်နာကျင့်သုံးမှုမရှိခြင်း
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check20" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check20" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 4'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                စာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်ကို ကာလသတ်မှတ်၍ ရုပ်သိမ်းခြင်းခံရသူ သို့မဟုတ် ပယ်ဖျက် ခြင်းခံရသူသည် စည်းကမ်းထိန်းသိမ်းရေးကော်မတီက ဆုံးဖြတ်ချက်ချသည့်နေ့မှ ရက်ပေါင်း ၃၀ အတွင်းစာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်ကိုကောင်စီထံပြန်လည်အပ်နှံရန်ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check21" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check21" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                             </li>
                            <li class="list-group-item">
                                မည်သည့်စာရင်းဖော်ပြချက်၊ ကြေညာချက်၊ ရှင်းတမ်း၊ အစီရင်ခံစာ၊ ငွေစာရင်းစာအုပ်၊ လက်မှတ် သို့မဟုတ် ပုံစံတွင်မဆို မဟုတ်မမှန်သည့်အချက်ကို သိလျှက်နှင့်ထည့်သွင်းဖော်ပြခြင်း သို့မဟုတ် ထောက်ခံလက်မှတ်ရေးထိုးခြင်း၊
                            </li>
                            <li class="list-group-item">
                                မိမိကိုယ်တိုင်သော်လည်းကောင်း၊ မိမိလုပ်ငန်း၏ အစုဝင််ကသော်လည်းကောင်း၊ မိမိ၏ ဝန်ထမ်းက သော်လည်းကောင်း၊ ကြီးကြပ်ကွပ်ကဲ၍ ပြည့်စုံစွာ စစ်ဆေးထားခြင်းမရှိသော လက်ကျန် ရှင်းတမ်း၊ အရှုံး/အမြတ်စာရင်း သို့မဟုတ် မည်သည့်စာရင်းဇယားကိုမဆို အတည်ပြုပေးခြင်း သို့မဟုတ် မိမိကိုယ်စား လက်မှတ်ရေးထိုးစေခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check22" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check22" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းစစ်လုပ်ငန်းအမည်တွင် နိုင်ငံခြားအဖွဲ့အစည်း၏အမည်ကို တိုက်ရိုက်သော်လည်းကောင်း၊ ဆင်တူရိုးမှားသော်လည်းကောင်း၊  တစ်စိတ်တစ်ဒေသသော်လည်းကောင်းသုံးစွဲခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check23" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check23" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်အညီ မြန်မာနိုင်ငံစာရင်းကောင်စီက ထုတ်ပြန်ထားသော အမိန့် ကြော်ငြာစာများအရ နိုင်ငံခြားသားများလုပ်ကိုင်ခွင့်မရှိသော စာရင်းလုပ်ငန်းများကို မိမိအမည်ခံ၍ နိုင်ငံခြားသားများအတွက် ဆောင်ရွက်ပေးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check24" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check24" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 5'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                လက်မှတ်ရပြည်သူ့စာရင်းကိုင် မဟုတ်သူအတွက် သို့မဟုတ် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် မဟုတ် သူနှင့် ပူးပေါင်းလုပ်ကိုင်၍ စာရင်းစစ်အနေဖြင့် ဘဏ္ဍာရေးရှင်းတမ်းများအား လက်မှတ်ရေး ထိုးပေးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check25" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check25" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                ငွေကြေးခဝါချမှု၊ အကြမ်းဖက်မှုအား ငွေကြေးထောက်ပံ့မှု၊ ပြစ်မှုတစ်ရပ်ရပ်နှင့်စပ်ဆိုင်နိုင်သည်ဟု သံသယဖြစ်ရမှု ဥပဒေတစ်ရပ်ရပ်ကို ချိုးဖောက်ရာရောက်သည်ဟု မှတ်ယူရမှု (Suspicious and unusual transaction/ events) စသည်တို့ကို တွေ့ရှိရပါက တရား မဝင်နည်းလမ်းဖြင့် ရရှိသည့်ေငွကြေးနှင့်ပစ္စည်းများ ဗဟိုထိန်းချုပ်ရေးအဖွဲ့ထံသို့ချက်ချင်း လျှို့ဝှက်သတင်းပေးပို့ရန် ပျက်ကွက် ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check26" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check26" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                Public Listed Companies နှင့် Public Interest ပါဝင်သော Companies ( ဥပမာ - Banking, Insurance Company, Real Estate Developer) များတွင် စာရင်းစစ်အဖြစ် ဆောင်ရွက်ပေး သူများသည်    ယင်းလုပ်ငန်းများနှင့်သက်ဆိုင်သော အခြားဝန်ဆောင်မှုများ ကိုဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check27" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check27" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                စာရင်းစစ်လုပ်ငန်းအမည်တွင် နိုင်ငံခြားအဖွဲ့အစည်း၏အမည်ကို တိုက်ရိုက်သော်လည်းကောင်း၊ ဆင်တူရိုးမှားသော်လည်းကောင်း၊  တစ်စိတ်တစ်ဒေသသော်လည်းကောင်းသုံးစွဲခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check28" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check28" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                မြန်မာနိုင်ငံစာရင်းစစ်စံ/ နိုင်ငံတကာစာရင်းစစ်စံပြဌာန်းချက်များနှင့် မညီညွတ်သောကိစ္စရပ် များ ဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check29" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check29" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 6'
                },
            ],
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
                <button type="submit" id="btn1" onclick="check_email_papp()" class="btn btn-success btn-hover-dark w-30">Verify
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
