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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}

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

          <div class="blog-details-comment">
              <div class="comment-form">
                  <!-- Form Wrapper Start -->
                  <div class="form-wrapper">

                      <form method="post" id="mentor_register_form"  action="javascript:createMentorRegister();"
                            enctype="multipart/form-data" novalidate>
                          @csrf
                          <div class="row">
                              <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                  <div class="row mb-5">
                                      <h5 class="card-title text-center fw-bolder">
                                          မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                                          စာရင်းကိုင်အလုပ်သင်များအား အလုပ်သင်ကြားပေးသည့် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူ<br><br>
                                          (Professional Accountant in Public Practice - PAPP)၏အချက်အလက်များ
                                      </h5>
                                      {{--<div class="d-flex justify-content-between">
                                          <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                                          <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                                      </div>--}}
                                  </div>

                                  <div class="row">

                                    <div class="col-md-8">
                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အီးမေးလ်<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <input type="email" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ" name="email" class="form-control" id="email" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)<span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)<span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" id="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" >
                                            </div>
                                        </div>
                                    </div>

                                      <div class="col-md-4 text-center">
                                          {{--User Photo--}}
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail img-circle shadow">
                                                  <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="mentor_image"
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
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control" value="{{ old('race') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်<span style="color:red">*</span></label>
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
                                                          style="margin-top: 0px; margin-bottom: 0px;">
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
                                                          style="margin-top: 0px; margin-bottom: 0px;">
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
                                                          style="height: 38px" value="{{ old('nrc_number') }}">
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <div class="col-md-6 text-center">
                                          <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail shadow">
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_front" alt="Upload Photo">
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
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_back"
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

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>မွေးသက္ကရာဇ်<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>ပညာအရည်အချင်း<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" name="education" id="education" class="form-control" placeholder="ပညာအရည်အချင်း">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>RA/CPA အောင်မြင်သောနှစ်/ကိုယ်ပိုင်အမှတ်<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_success_year" id="ra_cpa_success_year" class="form-control" placeholder="RA/CPA အောင်မြင်သောနှစ်">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_personal_no" id="ra_cpa_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>CPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_no" id="cpa_reg_no" class="form-control" placeholder="CPA မှတ်ပုံတင်အမှတ်">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_date" id="cpa_reg_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" autocomplete='off'>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၀။') }}</span>PAPP မှတ်ပုံတင်အမှတ်/ရက်စွဲ<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="papp_reg_no" id="papp_reg_no" class="form-control" placeholder="PAPP မှတ်ပုံတင်အမှတ်">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="papp_reg_date" id="papp_reg_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                      <div class="col-md-1 papp_attachment_old"></div>
                                      <div class="col-md-8">
                                        <input type="file" class="form-control" id="papp_attachment" name="papp_attachment">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၁။') }}</span>ဆက်သွယ်ရန်လိပ်စာ<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <textarea placeholder="ဆက်သွယ်ရန်လိပ်စာ" name="address" id="address" class="form-control" rows="3" style="resize:none;" ></textarea>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Phone Number/Fax Number</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone Number">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="fax_no" id="fax_no" class="form-control" placeholder="FAX Number">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Contact Email<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="email" placeholder="Contact Email" name="m_email" id="m_email" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၂။') }}</span>Audit Firm အမည်<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="Audit Firm အမည်" name="audit_firm_name" id="audit_firm_name" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၃။') }}</span>စတင်တည်ထောင်သည့်နေ့<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" name="audit_started_date" id="audit_started_date" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၄။') }}</span>Audit Firm ၏ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="number" name="audit_structure" id="audit_structure" class="form-control"  placeholder="0" value="{{ old('audit_structure') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="audit_staff_no" id="audit_staff_no" class="form-control" placeholder="0" value="{{ old('audit_staff_no') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၅။') }}</span>လက်ရှိလက်ခံဆောင်ရွက်စစ်ဆေးပေးရသည့်လုပ်ငန်းများ<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="form-group">
                                            <select name="current_check_service_id[]" id="selected_service_id"
                                                class="form-control form-select" multiple="multiple"
                                                style="width:100%">
                                            </select>
                                        </div>
                                      </div>
                                  </div>
                                  
                                  <div id="check_service_other" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" id="other_service" name="current_check_services_other" class="form-control" placeholder="other" >
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>လွန်ခဲ့သော၃နှစ်ကနှစ်အလိုက်စစ်ဆေးခဲ့သောလုပ်ငန်းများ<br>(Pdf file သာတင်ရန်)</label>
                                      <div class="col-md-1 attachment_file_old"></div>
                                      <div class="col-md-8">
                                        <input type="file" class="form-control" id="attachment_file" name="attachment_file">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('၁၆။') }}</span>ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ<span style="color:red">*</span></label>
                                      <div class="col-md-4">
                                          <div class="form-check">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="1" id="experience_yes" name="experience" >
                                                      <label class="form-check-label " for="">ရှိ</label>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="0" id="experience_no" name="experience" >
                                                      <label class="form-check-label " for="">မရှိ</label>
                                                  </div>
                                                  <label  class="error attend_place_error" style="display:none;" for="experience">Please select one</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div id="started_teaching" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>စာရင်းကိုင်အလုပ်သင်များအား အလုပ်သင်ကြားပေးမှု စတင်ခဲ့သည့်ခုနှစ်</label>
                                      <div class="col-md-9">
                                          <input type="text"  name="started_teaching_year" id="started_teaching_year" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control" value="{{ old('started_teaching_year') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="internship_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်</label>
                                      <div class="col-md-9">
                                          <input type="number" name="internship_accept_no" id="internship_accept_no"  class="form-control" placeholder="0" value="{{ old('internship_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="current_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>လက်ရှိလက်ခံသင်ကြားပေးသော အလုပ်သင်ဦးရေ</label>
                                      <div class="col-md-9">
                                          <input type="number" name="current_accept_no" id="current_accept_no" class="form-control" placeholder="0" value="{{ old('current_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="trained_trainees" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>မွေးထုတ်ပေးခဲ့သည့် အလုပ်သင်ဦးရေ</label>
                                      <div class="col-md-9">
                                          <input type="number" name="trained_trainees_no" id="trained_trainees_no" class="form-control" placeholder="0" value="{{ old('trained_trainees_no') }}">
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
                                                        <input type="radio" class="form-check-input mr-3" id="yes" value="1" name="repeat_yearly" >
                                                        <label class="form-check-label " for="">ရှိ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="no" value="0" name="repeat_yearly" >
                                                        <label class="form-check-label " for="">မရှိ</label>
                                                        <!-- <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div> -->
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="repeat_yearly">Please select one</label>
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
                                                        <input type="radio" class="form-check-input mr-3" id="training_absent_yes" value="1" name="training_absent" >
                                                        <label class="form-check-label " for="">ရှိ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="training_absent_no" value="0" name="training_absent" >
                                                        <label class="form-check-label " for="">မရှိ</label>
                                                        <!-- <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div> -->
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="training_absent">Please select one</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div id="absent_reason" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>ရှိပါက ပြတ်တောက်ခဲ့ရသည့် အကြောင်းအရင်း</label>
                                        <div class="col-md-9">
                                          <textarea class="form-control" name="training_absent_reason" id="training_absent_reason" rows="3" style="resize:none;"></textarea>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <div class="form-check">
                                          <label class="form-check-label">
                                              <input class="form-check-input" type="checkbox" name="confirm_129">
                                              <span class="form-check-sign"></span>
                                              <p class="fw-bolder">
                                                  * <a href="https://demo.aggademo.me/MAC/public/storage/article/129.pdf" target="_blank">ဤရုံးအမိန့်အမှတ် (၁၂၉) </a> အားဖတ်ရှုပြီးဖြစ်ပါသည်။<br>
                                              </p>
                                          </label><br>
                                          <label  class="error attend_place_error" style="display:none;" for="confirm_129">Please check one</label>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="mentor_declare" onchange="$('#submit_btn').prop('disabled', !this.checked)">
                                            <span class="form-check-sign"></span>
                                            <p class="fw-bolder">
                                                * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်စွာရေးသွင်းထားပါသည်။<br>
                                            </p>
                                        </label>

                                    </div>
                                  </div>

                                  <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                                  <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >
                                  <input type="hidden" id="student_info_id" name="student_info_id">
                                  <input type="hidden" id="mentor_id" name="mentor_id">

                                  <div class="row justify-content-center">
                                    <button type="submit" id="submit_btn" class="btn btn-success btn-hover-dark w-25" disabled>
                                        Update
                                    </button>
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
<!-- <script src="{{ asset("js/form_validation/mentor_validation.js") }}"></script> -->
<script type="text/javascript">
    var mentor_id=localStorage.getItem('mentor_id');
    // console.log(mentor_id)
    $('#mentor_id').val(mentor_id);
    $(document).ready(function (e) {
      $('#selected_service_id').select2({
        placeholder: "Select Current Service"
      });

      $("input[name=training_absent]").on("click", function(evt) {
        var checkedValue = $("input[name='training_absent']:checked").val();
        if(checkedValue == '1'){
          $("#absent_reason").css('display','block');
        //   $("#absent_reason").find("textarea").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#absent_reason").css('display','none');
        //   $("#absent_reason").find("textarea").prop('required',false);
        }
      });

      $("input[name=experience]").on("click", function(evt) {
        var checkedValue = $("input[name='experience']:checked").val();
        if(checkedValue == '1'){
          $("#started_teaching,#internship_accept,#current_accept,#trained_trainees,#repeat_yearly,#training_absent").css('display','block');
        //   $("#started_teaching").find("input").prop('required',true);
        //   $("#internship_accept").find("input").prop('required',true);
        //   $("#current_accept").find("input").prop('required',true);
        //   $("#trained_trainees").find("input").prop('required',true);
        //   $("#repeat_yearly").find("input").prop('required',true);
        //   $("#training_absent").find("input").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#internship_accept,#repeat_yearly").css('display','block');
          $("#started_teaching,#trained_trainees,#current_accept,#training_absent,#absent_reason").css('display','none');
        //   $("input[name='training_absent']").prop('checked',false);
        //   $("#started_teaching").find("input").prop('required',false);
        //   $("#internship_accept").find("input").prop('required',false);
        //   $("#current_accept").find("input").prop('required',false);
        //   $("#trained_trainees").find("input").prop('required',false);
        //   $("#repeat_yearly").find("input").prop('required',false);
        //   $("#training_absent").find("input").prop('required',false);
        }
      });

    //   $("#selected_service_id").change(function(){
    //     console.log($(this));
    //     checkOtherService($(this));
    //   });

      $("#selected_service_id").on("select2:select select2:unselect", function (e) {

        var items= $(this).val();
        for (var i = 0; i <= items.length-1; i++) {
            if(items[i] == 10){
                $("#check_service_other").show();
            }
        }

      })

      $("input[name='cpa_reg_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='papp_reg_date']").flatpickr({
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

      $.ajax({
          url: BACKEND_URL + "/mentor/" + mentor_id,
          type: 'get',
          success: function (result) {
              // console.log(result);
            var mentor = result.data;
            console.log(mentor)
            document.getElementById('mentor_image').src=BASE_URL + mentor.image;
            document.getElementById('nrc_front').src=BASE_URL + mentor.nrc_front;
            document.getElementById('nrc_back').src=BASE_URL + mentor.nrc_back;
            // $('#email').val(student_info.mentor.email);             
            $('#name_mm').val(mentor.name_mm);
            $('#name_eng').val(mentor.name_eng);
            $('#nrc_state_region').val(mentor.nrc_state_region);
            $('#nrc_township').val(mentor.nrc_township);
            $('#nrc_citizen').val(mentor.nrc_citizen);
            $('#nrc_number').val(mentor.nrc_number);
            $('#father_name_mm').val(mentor.father_name_mm);
            $('#father_name_eng').val(mentor.father_name_eng);
            $('#race').val(mentor.race);
            $('#religion').val(mentor.religion);
            $('#date_of_birth').val(mentor.date_of_birth);
            $('#education').val(mentor.education);
            $('#ra_cpa_success_year').val(mentor.ra_cpa_success_year);
            $('#ra_cpa_personal_no').val(mentor.ra_cpa_personal_no);
            $('#cpa_reg_no').val(mentor.cpa_reg_no);
            $('#cpa_reg_date').val(mentor.cpa_reg_date);
            $('#papp_reg_no').val(mentor.papp_reg_no);
            $('#papp_reg_date').val(mentor.papp_reg_date);
            $('#address').val(mentor.address);
            $('#phone_no').val(mentor.phone_no);
            $('#fax_no').val(mentor.fax_no);
            $('#m_email').val(mentor.m_email);
            $('#audit_firm_name').val(mentor.audit_firm_name);
            $('#audit_started_date').val(mentor.audit_started_date);
            $('#audit_structure').val(mentor.audit_structure);
            $('#audit_staff_no').val(mentor.audit_staff_no);
            // console.log(mentor.experience)
            // mentor.experience=="1"? $('#experience_yes').attr('checked',true):$('#experience_no').attr('checked',true);
            if(mentor.experience == 1){
                $('#experience_yes').attr('checked',true);

                $('#started_teaching').css('display','block');
                $('#started_teaching_year').val(mentor.started_teaching_year);

                $('#internship_accept').css('display','block');
                $('#internship_accept_no').val(mentor.internship_accept_no);

                $('#current_accept').css('display','block');
                $('#current_accept_no').val(mentor.current_accept_no);

                $('#trained_trainees').css('display','block');
                $('#trained_trainees_no').val(mentor.trained_trainees_no);

                $('#repeat_yearly').css('display','block');
                // $('#repeat_yearly').val(mentor.repeat_yearly);
                if(mentor.repeat_yearly == 1){
                    $('#yes').attr('checked', true);
                }else{
                    $('#no').attr('checked', true);
                }

                $('#training_absent').css('display','block');
                // $('#training_absent').val(mentor.training_absent);
                if(mentor.training_absent == 1){
                    $('#training_absent_yes').attr('checked', true);
                    $('#absent_reason').css('display', 'block');
                    $('#training_absent_reason').val(mentor.training_absent_reason);
                }else{
                    $('#training_absent_no').attr('checked', true);  
                }
            }else{
                $('#experience_no').attr('checked',true);
                $('#internship_accept').css('display','block');
                $('#internship_accept_no').val(mentor.internship_accept_no);

                $('#repeat_yearly').css('display','block');
                if(mentor.repeat_yearly == 1){
                    $('#yes').attr('checked', true);
                }else{
                    $('#no').attr('checked', true);
                }
                $('#training_absent_no').attr('checked', true);
                $('#training_absent_reason').val(null);
            }

            $('.papp_attachment_old').append("<a href='" + BASE_URL + mentor.papp_attachment + "'  target='_blank'>View File</a><br/>");
            $('.attachment_file_old').append("<a href='" + BASE_URL + mentor.attachment_file + "'  target='_blank'>View File</a><br/>");
          }
      });

        get_student_info(student_id).then(data => {
          let student_info = data.data;
          // console.log(student_info)
          // let result;
          // if(data.data?.teacher){
          //   result = data.data.teacher;
          // }else if(data.data?.school){
          //   result = data.data.school;
          // }
          $('#student_info_id').val(student_info.id);
          $('#email').val(student_info.email);

      });

    });

    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }

    // function checkOtherService(option){
    //   var selected_id = $(option).val();
    //   if(selected_id == 9){
    //     $(".check-service-other").css('visibility','visible');
    //   }
    //   else{
    //     $(".check-service-other").css('visibility','hidden');
    //   }
    // }
    loadService();
    $.ajax({
        url: BACKEND_URL + '/check_service',
        type: 'GET',
        success: function(response) {
            console.log(response)
            var opt; //`<option value="" selected >Select</option>`;
            $.each(response.data, function(i, v) {
                opt += `<option value=${v.id} > ${v.name}</option>`;
            });
            $("#current_check_service_id").append(opt);
        }
    });
</script>
@endpush
