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
                    <h2 class="title">School Registration  <span>Form</span></h2>
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
            <div id="school_pending" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your School Registeration Form is checking</p>
                    </div>
                </div>
            </div>
            <div id="school_approve" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your School Registeration Form is approved!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <div id="school_form" class="card border-success mb-3">
                        <div class="card-body">
                            <form id="school_register_form" enctype="multipart/form-data" action="javascript:createSchoolRegister();" class="needs-validation" autocomplete="off" novalidate>
                                {{--<div class="row">
                                  <label class="col-md-1 col-form-label"></label>
                                  <label class="col-md-8 col-form-label">{{ __('လျှောက်ထားသူ၏အချက်အလက်များ') }}</label>

                                </div>--}}

                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('အီးမေးလ်') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" autocomplete='off' required placeholder="အီးမေးလ်လိပ်စာထည့်ပါ။">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('လျို့ဝှက်နံပါတ်') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" autocomplete='off' required placeholder="လျို့ဝှက်နံပါတ် ထည့်ပါ။">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('လျို့ဝှက်နံပါတ် အတည်ပြုခြင်း') }}</label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" name="confirm_password" class="form-control" autocomplete='off' required placeholder="လျို့ဝှက်နံပါတ်ကို နောက်တစ်ကြိမ်ထပ်မံထည့်ပါ။">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="col-md-5 pull-right">
                                      <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                      <p class="mt-2">
                                        <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' placeholder="အမည်(မြန်မာ)" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="name_eng" class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" autocomplete='off' required>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                          <div class="col-md-2 px-1">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region" >
                                                    <option value="" disabled selected>Select</option>
                                                @foreach($nrc_regions as $region)
                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                    </option>
                                                @endforeach
                                                </select>
                                          </div>
                                          <div class="col-md-3 col-7 px-1">
                                                <select class="form-control" name="nrc_township" id="nrc_township" >
                                                    <option value="" disabled selected>Select</option>    
                                                @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                          </div>
                                          <div class="col-md-2 col-5 px-1">
                                              <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                <option value="" disabled selected>Select</option>    
                                                @foreach($nrc_citizens as $citizen)
                                                      <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                          {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                      </option>
                                                  @endforeach
                                              </select>
                                          </div>
                                          <div class="col-md-5 col-7 pl-1">
                                              <input type="text" name="nrc_number" id="nrc_number" placeholder="ဥပမာ။ ။၁၂၃၄၅၆" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" required>
                                          </div>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label for="" class="col-md-3 col-form-label label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                    <div class="col-md-8">
                                        <input type="file" name="nrc_front" class="form-control" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label for="" class="col-md-3 col-form-label label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                    <div class="col-md-8">
                                        <input type="file" name="nrc_back" class="form-control" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_mm" id="father_name_mm" placeholder="အဘအမည်(မြန်မာ)" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_eng" class="form-control" placeholder="အဘအမည်(အင်္ဂလိပ်)" autocomplete='off' required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('မွေးသက္ကရာဇ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob" placeholder="ရက်၊လ၊နှစ် (DD-MMM-YYYY)" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control" placeholder="ပညာအရည်အချင်း" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }} </label>

                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" value='တစ်ဦးတည်းပိုင်လုပ်ငန်း' >
                                        <label class="">တစ်ဦးတည်းပိုင်လုပ်ငန်း </label>
                                        <label class="form-check-label type text-danger" style='display:none;float:right;'>ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ပေးပါ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' >
                                        <label class="">နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ' >
                                        <label class="">တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်' >
                                        <label class="">တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း</label>
                                    </div>
                                </div><br>


                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label class="col-md-6 col-form-label label">{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}</label>
                                    <div class="col-md-5">
                                        <div class="mb-3 col-auto">
                                            <input type="file" id="attachment" name="attachment" class="form-control" accept="application/pdf"  required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" name="address" style="resize:none;" class="form-control" autocomplete='off' required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဖုန်းနံပါတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="ဖုန်းနံပါတ်" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">၁၃။</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('သင်တန်းကျောင်းအချက်အလက်များ') }}</b></label>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းအမည်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="school_name" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('သင်ကြားမည့်သင်တန်း') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group col-md-5">
                                          <select name="attend_course[]" id="attend_course" class="form-control multiple-attend-course" multiple="multiple" required style="width:100%">
                                          </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းတည်နေရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="school_address" class="form-control" autocomplete='off' required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="private" value="private" required>
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="rent" value="rent" required>
                                            <label class="form-check-label" for="">အငှား</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="use_sharing" value="use_sharing" required>
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းခွဲတည်နေရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_address" class="form-control" autocomplete='off' required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="" value="private" required>
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="" value="rent" required>
                                            <label class="form-check-label" for="">အငှား</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="" value="use_sharing" required>
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ပူးတွဲတင်ပြသည့်အထောက်အထားများ') }}</b></label>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-6 col-form-label label">{{ __('လုပ်ငန်းလိုင်စင်') }}</label>
                                    <div class="col-md-6">
                                      <div class="mb-3 col-auto">
                                          <input type="file" id="business_license" name="business_license" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <label class="col-md-6 col-form-label label">{{ __('ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်') }}</label>
                                    <div class="col-md-6">
                                      <div class="mb-3 col-auto">
                                          <input type="file" id="" name="company_reg" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <label class="col-md-6 col-form-label label">{{ __('အဖွဲ့အစည်း၏မှတ်ပုံတင်လက်မှတ်မူရင်းနှင့်မိတ္တူ') }}</label>
                                    <div class="col-md-6">
                                      <div class="mb-3 col-auto">
                                          <input type="file" id="" name="org_reg_origin_and_copy" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>

                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="estiblisher_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="governer_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('အဖွဲ့အစည်းဖြစ်ပါက သက်ဆိုင်ရာအဖွဲ့အစည်း၏ အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၃)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="org_member_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၄)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="teacher_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('ကောင်စီရုံးကထုတ်ပေးထားသည့်သင်တန်းဆရာမှတ်ပုံတင်မိတ္တူများ') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="teacher_reg_copy" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းတည်နေရာလိပ်စာ(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="school_location_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းအဆောက်အဦ(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="school_building_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                 
                                  <label class="col-md-6 col-form-label label">{{ __('စာသင်ခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="classroom_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('သန့်စင်ခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="toilet_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('စီမံရုံးခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="manage_room_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('အထောက်အကူအခင်းအကျင်းများကိုဓါတ်ပုံနှင့်တကွဖော်ပြချက်') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="supporting_structure_photo" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 col-form-label label">{{ __('အဆောက်အဦအခင်းအကျင်းများအားရယူသုံးစွဲပုံ') }}</label>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="" value="private" required>
                                          <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="" value="rent" required>
                                          <label class="form-check-label" for="">အငှား</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="" value="use_sharing" required>
                                          <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                  <label class="col-md-6 label col-form-label">{{ __('သက်ဆိုင်သည့်အထောက်အထားများ၊စာချုပ်စာတမ်းများ') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="relevant_evidence_contracts" class="form-control" accept="application/pdf"  required />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                  
                                  <label class="col-md-10 col-form-label">{{ __('ကျောင်းတည်ထောင်ခြင်းအတွက်ရွေးချယ်ထားသည့် လုပ်ငန်းဖွဲ့စည်းမှုပုံစံအရပူးတွဲတင်ပြရမည့်အထောက်အထားများ(အစုအစပ်သဘောတူညီချက်/သင်းဖွဲ့စည်းမျဉ်း/သင်းဖွဲ့မှတ်တမ်း၊ဉပဒေနှင့်အညီရေးဆွဲပြုစုထားသော အခြားစာချုပ်စာတမ်းများ)') }}</label>

                                </div>
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-5 col-form-label">{{ __('') }}</label>
                                  <div class="col-md-6">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="sch_establish_notes_attach" class="form-control" accept="application/pdf"  required />
                                    </div>
                                  </div>
                                </div>


                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)နှင့်ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်') }}</b></label>
                                </div>

                                <div id="sch_establish_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_sch_established_persons table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >ဆက်သွယ်ရန်လိပ်စာ</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_sch_established_persons_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="sch_governs_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_sch_governs table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchGoverns("tbl_sch_governs")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_sch_governs_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="member_list_biography_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>

                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_member_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowMembershipBio("tbl_member_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_member_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="teacher_list_bio_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_teacher_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowTeacherBio("tbl_teacher_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_teacher_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းတည်ရာလိပ်စာ၊ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</b></label>
                                </div>

                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" name="school_location" style="resize:none;" class="form-control" autocomplete='off' required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းခွဲတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_location" class="form-control" autocomplete='off' required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းအဆောက်အဦး(အဆောက်အဦအမျိုးအစား/အတိုင်းအတာ/အထပ်အရေအတွက်)') }}</b></label>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အဆောက်အဦးအမျိုးအစား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="bulding_type" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="building_measurement" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အထပ်အရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="floor_numbers" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စာသင်ခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ/ဝင်ဆံ့သင်တန်းသား/လေအေးပေးစက်)') }}</label>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="classroom_number" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="classroom_measurement" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဝင်ဆံ့သင်တန်းသား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="student_num_limit" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('လေအေးပေးစက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="air_con" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('သန့်စင်ခန်း(အမျိုးအစား/အရေအတွက်)') }}</label>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အမျိုးအစား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="toilet_type" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="toilet_number" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စီမံရုံးခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ)') }}</label>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="manage_room_numbers" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="manage_room_measurement" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('မှတ်ချက်။လျှောက်လွှာကြေး ၁၀၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၅၀၀,၀၀၀ကျပ်၊နှစ်စဥ်ကြေး ၃၀၀,၀၀၀ကျပ်') }}</label>
                                </div>
                                <div class="row m-4">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>

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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{ asset('assets/js/school.js') }}"></script>
<script type="text/javascript">

$(document).ready(function (e) {
    $('.js-example-basic-multiple').select2();

    $( "#school_register_form" ).submit(function( event ) {
        var tbl_establish = $('.tbl_sch_established_persons_body tr').length;
        var tbl_governs = $('.tbl_sch_governs_body tr').length;
        var tbl_member_list_bio = $('.tbl_member_list_biography_body tr').length;
        var tbl_teacher_list_bio = $('.tbl_teacher_list_biography_body tr').length;

        if(!tbl_establish){
            $("#sch_establish_error").css('display','block');
            event.preventDefault();
        }
        if(!tbl_governs){
            $("#sch_governs_error").css('display','block');
            event.preventDefault();
        }
        if(!tbl_member_list_bio){
            $("#member_list_biography_error").css('display','block');
            event.preventDefault();
        }
        if(!tbl_teacher_list_bio){
            $("#teacher_list_bio_error").css('display','block');
            event.preventDefault();
        }

        //validate school_type checkbox
        var checkedNum = $('input[name="school_type[]"]:checked').length;
        if (!checkedNum) {
            $(".type").show();
        }
        else {
            $(".type").hide();
        }
    });

    $('.multiple-attend-course').select2({
        placeholder: "Select Requirement"
    });

    $('input[type=checkbox][name="school_type[]"]').change(function() {
        var checkedNum = $('input[name="school_type[]"]:checked').length;
        if (!checkedNum) {
            $(".type").show();
        }
        else {
            $(".type").hide();
        }
    });

    $("input[name='dob']").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true
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
    school_reg_feedback();

});

getCourses();

</script>
@endpush
