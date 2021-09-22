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
                    <h2 class="title">Teacher Registration  <span>Form</span></h2>
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

                    <div id="teacher_form" class="card border-success mb-3">
                        <div class="card-body p-4">
                            <form id="teacher_register_form" enctype="multipart/form-data" action="javascript:void();"  autocomplete="off" ><!--class="needs-validation"-->
                                <div class="row mb-3">
                                    <h5 class="card-title text-center fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center fw-bolder">သင်တန်းဆရာမှတ်ပုံတင်လျှောက်လွှာ</h5>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-10"></div>
                                    <label class="col-md-2 col-form-label fw-bolder">ဆရာပုံစံ-၁</label>
                                                    
                                </div>
                              <div class="row mb-3">
                                <div class="col-md-8">

                                  <div class="row mb-5">
                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အီးမေးလ်</label>
                                      <div class="col-md-6">
                                          <input type="email" name="email" class="form-control" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ။" id="email">
                                          
                                      </div>
                                  </div>

                                  <div class="row mb-5">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>လျို့ဝှက်နံပါတ်</label>
                                        <div class="col-md-6">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="လျို့ဝှက်နံပါတ် ထည့်ပါ။" autocomplete='off' >
                                           
                                        </div>
                                  </div>

                                  <div class="row mb-5">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း</label>
                                        <div class="col-md-6">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="လျို့ဝှက်နံပါတ်ကို နောက်တစ်ကြိမ်ထပ်မံထည့်ပါ။" autocomplete='off' >
                                           
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-4 text-center">
                                  <div class="col-md-8 pull-right">
                                    
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
                                                    <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                                    <br>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                                <p >
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </p>
                                            </div>
                                    {{--User Photo--}}
                                  </div>
                                  
                                </div> 
                                
                              </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                    <div class="col-md-4">
                                        <input type="text" name="name_mm" id="name_mm" class="form-control"  placeholder="အမည်(မြန်မာ)"  >
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="name_eng" class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                    <div class="col-md-8">
                                        <div class="row" >
                                            <div class="col-md-2 col-5 pr-1">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region" >
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <select class="form-control" name="nrc_township" id="nrc_township" >
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
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                            <input type="text" name="nrc_number" id="nrc_number" placeholder="ဥပမာ။ ။၁၂၃၄၅၆" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6"  style="height: 38px" autocomplete="off" >
                                            </div>
                                        </div>
                                    </div>
                              </div>

                                <div class="row mb-3">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                            <div class="row mb-3">
                                                <div class="col-md-6 ">
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
                                                                <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*" required>
                                                            </span>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
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
                                                                <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" required>
                                                            </span>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-4">
                                      <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" placeholder="အဘအမည် (မြန်မာ)" autocomplete="off" >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="father_name_eng" class="form-control" placeholder="အဘအမည် (အင်္ဂလိပ်)" autocomplete="off" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                    <div class="col-md-8">
                                         <input type="text" placeholder="လူမျိုး" name="race" autocomplete="off" class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" autocomplete="off" name="religion" class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label">မွေးသက္ကရာဇ်</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" class="form-control" autocomplete="off"
                                                   placeholder="DD-MMM-YYYY" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဖုန်းနံပါတ်') }}</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control" placeholder="ဖုန်းနံပါတ်" autocomplete="off" id="phone">
                                       
                                    </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဆက်သွယ်ရန်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="address"
                                                   class="form-control" value="{{ old('address') }}" autocomplete="off" >
                                        </div>
                                </div>

                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                   class="form-control" value="{{ old('current_address') }}" autocomplete="off">
                                        </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <label class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-8">
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

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                            <div class="col-md-11 pull-right">
                                                <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                            </div>

                                </div>
                                <div class="row mb-3" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_staff1" value="1" onclick="selectStaff(1)" > ဟုတ်
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_staff" value="0" onclick="selectStaff(0)" > မဟုတ်

                                            </div>
                                            <div class="col-md-4">
                                                <label class="invalid-feedback gov_employee text-danger">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးပါ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="rec_letter" style="display:none" >
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-labe mt-1 label_align_right">သက်ဆိုင်ရာ ဌာနအကြီးအကဲ၏ ခွင့်ပြုမိန့်</label>

                                                    <div class="col-md-8">
                                                        <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                        
                                                    </div>
                                            </div>
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" autocomplete="off" >
                                                    </div>
                                            </div>

                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" autocomplete="off" >
                                                    </div>
                                            </div>
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးစိုက်ရာဒေသ" name="organization"
                                                            class="form-control" value="{{ old('organization') }}" autocomplete="off" >
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                    
                                
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                    <label class="col-md-3 col-form-label label">သင်ကြားမည့်သင်တန်းကျောင်းအမည်</label>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="form-check m-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="school_type" id="school_staff1" value="1" onclick="selectSchoolType(1)" > Private
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="school_type" id="school_staff2" value="0" onclick="selectSchoolType(0)" > Individual

                                            </div>
                                            <div class="col-md-8">
                                                <label class="invalid-feedback school_type text-danger">သင်ကြားမည့်သင်တန်းကျောင်းအမည် Private/Individual ရွေးပါ</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label"></label>
                                    <div class="col-md-8">
                                        <div class="private_type">
                                            <select class="form-control" name="selected_school_id" id="selected_school_id"  >
                                                    <option value="" disabled selected>ရွေးပါ</option>
                                                    
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                    <label class="col-md-4 col-form-label"><b>{{ __('သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ') }}</b></label>
                                    <div class="col-md-6 pull-right" style="text-align:right;">
                                        <label class="invalid-feedback col-form-label certificate text-danger">သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ ထည့်ပါ</label>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label" ></label>
                                    <label class="col-md-3 col-form-label label" >{{ __('လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း') }}</label>
                                    
                                    <div class="col-md-8">
                                        <select class="form-control select2" name="certificates[]" id="selected_cpa_subject"  multiple="multiple"  style="width: 100%;" >
                                               
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="row mb-3" >
                                    <label class="col-md-1 col-form-label "></label>
                                    <label class="col-md-3 col-form-label label" >{{ __('ဒီပလိုမာစာရင်းကိုင်သင်တန်း') }}</label>
                                   
                                    <div class="col-md-8">
                                        <select class="form-control select2" name="diplomas[]" id="selected_da_subject"  multiple="multiple"  style="width: 100%;" >
                                               
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control " name="exp_desc" rows="3" placeholder="သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ" ></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-10 col-form-label fw-bolder">
                                        <input type="checkbox" id="submit_confirm" onclick="ConfirmSubmitTeacher()">
                                        {{ __('အထက်ဖော်ပြပါ အချက်အလက်များ မှန်ကန်ကြောင်း ကိုယ်တိုင်ကတိပြုဝန်ခံပါသည်။') }}
                                    </label>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100 submit_btn" id="teacher_submit" disabled>{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal -->
            <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <button type="submit" id="btn1" onclick="check_email_teacher()" class="btn btn-success btn-hover-dark w-30">Verify
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
<script src="{{asset('assets/js/teacher_register.js')}}"></script>
<script src="{{ asset('js/form_validation/teacher_validation.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
        });
        $('.select2').select2({
                placeholder: "Select"
        });
        $( "#teacher_register_form" ).submit(function( event ) {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            var tbl_degree = $('.tbl_degree_body tr').length;
            var tbl_certificate = $('#selected_cpa_subject').length;
            var tbl_diploma = $('#selected_da_subject').length;
            var school_type = $('input[name="school_type"]:checked').length;
            if (!checkedNum) {
                $(".gov_employee").show();
                event.preventDefault();
            }
            if(!tbl_degree){
                $(".degree").show();
                event.preventDefault();
            }
            if(!tbl_certificate){
                $(".certificate").show();
                event.preventDefault();
            }
            if(!tbl_diploma){
                $(".certificate").show();
                event.preventDefault();
            }
            if(!school_type){
                $(".school_type").show();
                event.preventDefault();
            }
            
        });
        $('input[type=radio][name="gov_employee"]').change(function() {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            if (!checkedNum) {
                $(".gov_employee").show();
            }
            else {
                $(".gov_employee").hide();
            }
        });
        $('input[type=radio][name="school_type"]').change(function() {
            var school_type = $('input[name="school_type"]:checked').length;
            if (!school_type) {
                $(".school_type").show();
            }
            else {
                $(".school_type").hide();
            }
        });
        $("input[id*='name_mm'], text[id*='name_mm']").on('keyup', function(e) {
            myanmarLetterOnly($(this));
        });
        $(document).on('keydown', '#name_mm', function () {
            myanmarLetterOnly($(this));
        });
        $("input[id*='father_name_mm'], text[id*='father_name_mm']").on('keyup', function(e) {
            myanmarLetterOnly($(this));
        });
        $(document).on('keydown', '#father_name_mm', function () {
            myanmarLetterOnly($(this));
        });
        function myanmarLetterOnly( self )
        {
            val = self.val();
            if ( /[a-zA-Z0-9]+$/.test( val ) ) {
              self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
            }
        }
        loadSubject(2,"selected_cpa_subject");
        loadSubject(1,"selected_da_subject");
    });

</script>
@endpush
