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
                    <h2 class="title">Mentor Registration  <span>Form</span></h2>
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

          <div class="blog-details-comment">
              <div class="comment-form">
                  <!-- Form Wrapper Start -->
                  <div class="form-wrapper">

                      {{--<form method="post" class="needs-validation" action="javascript:createDARegister();" enctype="multipart/form-data" novalidate>--}}
                      <form method="post" id="da_one_app_form" class="needs-validation" action="javascript:void(0);"
                            enctype="multipart/form-data" novalidate>
                          @csrf
                          <div class="row">
                              <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                  <div class="row mb-5">
                                      <h5 class="card-title text-center fw-bolder">
                                          စာရင်းကိုင်အလုပ်သင်များလက်ခံသင်ကြားလိုသောလက်မှတ်ရပြည်သူ့စာရင်းကိုင်<br>
                                          (Certified Public Accountant)၏အချက်အလက်များ
                                      </h5>
                                      {{--<div class="d-flex justify-content-between">
                                          <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                                          <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                                      </div>--}}
                                  </div>

                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="row mb-5">
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}" required="">
                                              </div>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}" required="">
                                              </div>
                                          </div>

                                          <div class="row mb-5">
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" required="">
                                              </div>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" id="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" required="">
                                              </div>
                                          </div>

                                          <div class="row mb-5">
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>လူမျိူး/ကိုးကွယ်သည့်ဘာသာ</label>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control" value="{{ old('race') }}" required="">
                                              </div>
                                              <div class="col-md-4">
                                                  <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" required="">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-4 text-center">
                                          {{--User Photo--}}
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail img-circle shadow">
                                                  <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="previewImg"
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
                                          </div>
                                          {{--User Photo--}}
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                      <div class="col-md-9">
                                          <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                              <div class="col-md-2 col-5 pr-1">
                                                  <select class="form-control" name="nrc_state_region"
                                                          id="nrc_state_region"
                                                          style="margin-top: 0px; margin-bottom: 0px;">
                                                      <option value="" disabled selected>ရွေးပါ</option>
                                                      @foreach($nrc_regions as $region)
                                                          <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                              {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                          </option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                              <div class="col-md-3 col-7 px-1">
                                                  <select class="form-control" name="nrc_township" id="nrc_township"
                                                          style="margin-top: 0px; margin-bottom: 0px;" required>
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
                                                  <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                          style="margin-top: 0px; margin-bottom: 0px;" required>
                                                      <option value="" disabled selected>ရွေးပါ</option>
                                                      @foreach($nrc_citizens as $citizen)
                                                          <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                              {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                          </option>
                                                      @endforeach
                                                  </select>
                                              </div>

                                              <div class="col-md-5 col-7 pl-1">
                                                  <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                          id="nrc_number" pattern=".{6,6}" class="form-control"
                                                          oninput="this.value= en2mm(this.value);"
                                                          maxlength="6" minlength="6" placeholder=""
                                                          style="height: 38px" value="{{ old('nrc_number') }}"
                                                          required>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <div class="col-md-6 text-center">
                                          <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail shadow">
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCFrontImg" alt="Upload Photo">
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
                                              <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                          </div>
                                      </div>

                                      <div class="col-md-6 text-center">
                                          <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail shadow">
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCBackImg"
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
                                              <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>မွေးသက္ကရာဇ်</label>
                                      <div class="col-md-9">
                                          <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}" required>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>ပညာအရည်အချင်း</label>
                                      <div class="col-md-9">
                                          <input type="text" name="education" class="form-control" placeholder="ပညာအရည်အချင်း" required>
                                      </div>
                                  </div>
                                  <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                    <div class="col-md-11 pull-right">
                                        <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>RA/CPA အောင်မြင်သောနှစ်/ကိုယ်ပိုင်အမှတ်</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_success_year" id="ra_cpa_success_year" class="form-control" placeholder="RA/CPA အောင်မြင်သောနှစ်" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_personal_no" id="ra_cpa_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" required>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>CPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_no" id="cpa_reg_no" class="form-control" placeholder="CPA မှတ်ပုံတင်အမှတ်" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_date" id="cpa_reg_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" autocomplete='off' required>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>PPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="ppa_reg_no" id="ppa_reg_no" class="form-control" placeholder="PPA မှတ်ပုံတင်အမှတ်" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="ppa_reg_date" id="ppa_reg_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                      <div class="col-md-9">
                                          <textarea placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="address" class="form-control" rows="3" style="resize:none;" required=""></textarea>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Phone Number/Fax Number</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone Number" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="fax_no" id="fax_no" class="form-control" placeholder="FAX Number" required>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Contact Email</label>
                                      <div class="col-md-9">
                                          <input type="email" placeholder="Contact Email" name="m_email" id="m_email" class="form-control" required="">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>Audit Firm အမည်</label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="Audit Firm အမည်" name="audit_firm_name" id="audit_firm_name" class="form-control" required="">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>စတင်တည်ထောင်သည့်နေ့</label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" name="audit_started_date" id="audit_started_date" class="form-control" required="">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>Audit Firm ၏ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="number" name="audit_structure" id="audit_structure" class="form-control"  placeholder="0" value="{{ old('audit_structure') }}" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="audit_staff_no" id="audit_staff_no" class="form-control" placeholder="0" value="{{ old('audit_staff_no') }}" required>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>လက်ရှိလက်ခံဆောင်ရွက်စစ်ဆေးပေးရသည့်လုပ်ငန်းများ</label>
                                      <div class="col-md-9">
                                        <div class="form-group">
                                          <select class="form-control form-select" name="current_check_service_id" id="selected_service_id" style="margin-right:3px;" required>
                                              <option value="" disabled selected>Select Current Service</option>
                                          </select>
                                          <div class="col-md-5 check-service-other" style="visibility:hidden;">
                                            <div class="form-group">
                                                <input type="text" id="other_service" name="current_check_services_other" class="form-control" placeholder="other" >
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ</label>
                                      <div class="col-md-4">
                                          <div class="form-check">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="1" name="experience" required>
                                                      <label class="form-check-label " for="">ရှိ</label>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="0" name="experience" required>
                                                      <label class="form-check-label " for="">မရှိ</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div id="started_teaching" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>စာရင်းကိုင်အလုပ်သင်များအား အလုပ်သင်ကြားပေးမှု စတင်ခဲ့သည့်ခုနှစ်</label>
                                      <div class="col-md-9">
                                          <input type="text"  name="started_teaching_year" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control" value="{{ old('started_teaching_year') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="internship_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်</label>
                                      <div class="col-md-9">
                                          <input type="number" name="internship_accept_no" class="form-control" placeholder="0" value="{{ old('internship_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="current_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>လက်ရှိလက်ခံသင်ကြားပေးသော အလုပ်သင်ဦးရေ</label>
                                      <div class="col-md-9">
                                          <input type="number" name="current_accept_no" class="form-control" placeholder="0" value="{{ old('current_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="trained_trainees" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>မွေးထုတ်ပေးခဲ့သည့် အလုပ်သင်ဦးရေ</label>
                                      <div class="col-md-9">
                                          <input type="number" name="trained_trainees_no" class="form-control" placeholder="0" value="{{ old('trained_trainees_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="repeat_yearly" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>နှစ်စဥ်ဆက်တိုက်အလုပ်သင်ကြားနိုင်ခြင်း ရှိ/မရှိ</label>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="yes" value="1" name="repeat_yearly" required>
                                                        <label class="form-check-label " for="">ရှိ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="no" value="0" name="repeat_yearly" required>
                                                        <label class="form-check-label " for="">မရှိ</label>
                                                        <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div id="training_absent" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ</label>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="yes" value="1" name="training_absent" required>
                                                        <label class="form-check-label " for="">ရှိ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="no" value="0" name="training_absent" required>
                                                        <label class="form-check-label " for="">မရှိ</label>
                                                        <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div id="absent_reason" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>ရှိပါက ပြတ်တောက်ခဲ့ရသည့် အကြောင်းအရင်း</label>
                                        <div class="col-md-9">
                                          <textarea class="form-control" name="training_absent_reason" id="exampleFormControlTextarea1" rows="3" style="resize:none;"></textarea>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <p class="fw-bolder">
                                          * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်စွာရေးသွင်းထားပါသည်။၊<br>
                                      </p>
                                  </div>

                                  <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                                  <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >

                                  <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" >{{ __('Submit') }}</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <!-- Form Wrapper End -->
              </div>
              <br><br>
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
<script>
    //loadService();
</script>
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/mentor_register.js')}}"></script>
<!-- <script src="{{asset('assets/js/profile_photo.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function (e) {
      $("input[name=training_absent]").on("click", function(evt) {
        var checkedValue = $("input[name='training_absent']:checked").val();
        if(checkedValue == '1'){
          $("#absent_reason").css('display','block');
          $("#absent_reason").find("textarea").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#absent_reason").css('display','none');
          $("#absent_reason").find("textarea").prop('required',false);
        }
      });

      $("input[name=experience]").on("click", function(evt) {
        var checkedValue = $("input[name='experience']:checked").val();
        if(checkedValue == '1'){
          $("#started_teaching,#internship_accept,#current_accept,#trained_trainees,#repeat_yearly,#training_absent").css('display','block');
          $("#started_teaching").find("input").prop('required',true);
          $("#internship_accept").find("input").prop('required',true);
          $("#current_accept").find("input").prop('required',true);
          $("#trained_trainees").find("input").prop('required',true);
          $("#repeat_yearly").find("input").prop('required',true);
          $("#training_absent").find("input").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#started_teaching,#internship_accept,#current_accept,#trained_trainees,#repeat_yearly,#training_absent,#absent_reason").css('display','none');
          $("input[name='training_absent']").prop('checked',false);
          $("#started_teaching").find("input").prop('required',false);
          $("#internship_accept").find("input").prop('required',false);
          $("#current_accept").find("input").prop('required',false);
          $("#trained_trainees").find("input").prop('required',false);
          $("#repeat_yearly").find("input").prop('required',false);
          $("#training_absent").find("input").prop('required',false);
        }
      });

      $("#selected_service_id").change(function(){
        checkOtherService($(this));
      });

      $("input[name='cpa_reg_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='ppa_reg_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='audit_started_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='started_teaching_year']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });

      $("input[name='date_of_birth']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
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



    });

    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }

    function checkOtherService(option){
      var selected_id = $(option).val();
      if(selected_id == 9){
        $(".check-service-other").css('visibility','visible');
      }
      else{
        $(".check-service-other").css('visibility','hidden');
      }
    }
    loadService();
</script>
@endpush
