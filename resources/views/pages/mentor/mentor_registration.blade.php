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

            <div class="row mt-5">


                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <div class="card border-success mb-3">
                        <div class="card-body">
                            <form id="mentor_register_form" enctype="multipart/form-data" action="javascript:createMentorRegister();" class="needs-validation" autocomplete="off" novalidate>
                              {{--<div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="email" name="email" class="form-control" placeholder="Email" value="" required="">
                                      </div>
                                  </div>
                              </div>--}}
                              {{--<div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('Password') }}</label>
                                  <div class="col-md-7">
                                      <div class="form-group">
                                          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" >
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('Confirm Password') }}</label>
                                  <div class="col-md-7">
                                      <div class="form-group">
                                          <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required >
                                      </div>
                                  </div>
                              </div>--}}

                              <div class="row">
                                <div class="col-md-8">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-5 col-form-label label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" id="name_mm" name="name_mm" class="form-control" placeholder="အမည်(မြန်မာ)" value="{{ old('name_mm') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="name_eng" class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" value="{{ old('name_eng') }}" required="">
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-5 col-form-label label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                    <div class="col-md-6">
                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                            <div class="col-md-3  pr-1">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region" style="margin-top: 0px !important; margin-bottom: 0px;">
                                                  <option value="" disabled selected>Select</option>
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3  px-1">
                                                <select class="form-control" name="nrc_township" id="nrc_township" style="margin-top: 0px; margin-bottom: 0px;">
                                                  <option value="" disabled selected>Select</option>
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                </select>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" style="margin-top: 0px; margin-bottom: 0px;">
                                                  <option value="" disabled selected>Select</option>
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-3 px-1">
                                                <input type="text" name="nrc_number" id="nrc_number" placeholder="၁၂၃၄၅၆" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" value="{{ old('nrc_number') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                  </div><br>

                                  <div class="row">
                                      <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                      <label for="" class="col-md-5 col-form-label label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                      <div class="col-md-6">
                                          <input type="file" name="nrc_front" class="form-control">
                                      </div>
                                  </div><br>

                                  <div class="row">
                                      <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                      <label for="" class="col-md-5 col-form-label label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                      <div class="col-md-6">
                                          <input type="file" name="nrc_back" class="form-control">
                                      </div>
                                  </div><br>
                                </div>
                                <div class="col-md-4">
                                  <div class="col-md-5 pull-right">
                                    <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                    <p class="mt-2">
                                      <input type="file" class="custom-file-input " id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                    </p>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" id="father_name_mm" name="father_name_mm" class="form-control" placeholder="အဘအမည်(မြန်မာ)" value="{{ old('father_name_mm') }}" required="">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="father_name_eng" class="form-control" placeholder="အဘအမည်(အင်္ဂလိပ်)" value="{{ old('father_name_eng') }}" required="">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('လူမျိူး/ကိုးကွယ်သည့်ဘာသာ') }}</label>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                              <input type="text" name="race" class="form-control" placeholder="လူမျိုး" value="{{ old('race') }}" required="">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <input type="text" name="religion" class="form-control" placeholder="ကိုးကွယ်သည့်ဘာသာ" value="{{ old('religion') }}" required="">
                                          </div>
                                      </div>
                              </div>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('မွေးသက္ကရာဇ်') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                      <input type="text" name="date_of_birth" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control" value="{{ old('date_of_birth') }}" required="">
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း') }}</label>
                                  <div class="col-md-8">
                                      {{--<table class="table tbl_education table-bordered input-table">
                                          <thead>
                                              <tr >
                                                  <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                  <th class="less-font-weight text-center"  width="80%">ပညာအရည်အချင်း</th>
                                                  <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_education")'><li class="fa fa-plus"></li></button></td>
                                              </tr>
                                          </thead>
                                          <tbody class="tbl_education_body">

                                          </tbody>
                                      </table>--}}
                                      <div class="form-group">
                                          <input type="text" name="education" class="form-control" placeholder="ပညာအရည်အချင်း" value="{{ old('father_name_eng') }}" required="">
                                      </div>
                                  </div>
                              </div>
                              <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                  <div class="col-md-11 pull-right">
                                      <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                  </div>

                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('RA/CPA အောင်မြင်သောနှစ်/ကိုယ်ပိုင်အမှတ်') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ra_cpa_success_year" id="ra_cpa_success_year" class="form-control" placeholder="RA/CPA အောင်မြင်သောနှစ်" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ra_cpa_personal_no" id="ra_cpa_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" required>
                                      </div>
                                  </div>
                              </div>

                              <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('CPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="cpa_reg_no" id="cpa_reg_no" class="form-control" placeholder="CPA မှတ်ပုံတင်အမှတ်" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <!-- <div class="form-group">
                                          <input type="text" name="cpa_reg_date" id="cpa_reg_date" class="form-control" placeholder="dd-mm-yyyy" required>
                                      </div> -->
                                      <div class="form-group">
                                          <input type="text" id="cpa_reg_date" name="cpa_reg_date" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control" autocomplete='off' required>
                                      </div>
                                  </div>
                              </div></br>

                              <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('PPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ppa_reg_no" id="ppa_reg_no" class="form-control" placeholder="PPA မှတ်ပုံတင်အမှတ်" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ppa_reg_date" id="ppa_reg_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                      </div>
                                  </div>
                              </div></br>

                              <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <textarea class="form-control" name="address" id="" rows="3" style="resize:none;" required></textarea>
                                    </div>
                                  </div>
                              </div></br>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Phone Number/Fax Number') }}</label>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <input type="text" name="fax_no" id="fax_no" class="form-control" placeholder="FAX Number" required>
                                  </div>
                                </div>

                              </div>
                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Contact Email') }}</label>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="email" name="m_email" id="m_email" class="form-control" placeholder="Contact Email" required>
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label ">{{ __('၁၁။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('Audit Firm အမည်') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="audit_firm_name" id="audit_firm_name" class="form-control" placeholder="Audit Firm အမည်" required>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label ">{{ __('၁၂။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('စတင်တည်ထောင်သည့်နေ့') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="audit_started_date" id="audit_started_date" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Audit Firm ၏ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား') }}</label>
                                <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="number" name="audit_structure" class="form-control" placeholder="0" value="{{ old('audit_structure') }}" required="">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" name="audit_staff_no" class="form-control" placeholder="0" value="{{ old('audit_staff_no') }}" required="">
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('လက်ရှိလက်ခံဆောင်ရွက်စစ်ဆေးပေးရသည့်လုပ်ငန်းများ') }}</label>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <select class="form-control form-select" name="current_check_service_id" id="selected_service_id" style="width:57%;margin-right:3px;" required>
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
                                <label class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ') }}</label>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <div class="form-check mt-2 form-check-inline">
                                      <input type="radio" class="form-check-input" value="1" name="experience" required>
                                      <label class="form-check-label" for="">ရှိ</label>
                                    </div>
                                    <div class="form-check mt-2 form-check-inline">
                                        <input type="radio" class="form-check-input" value="0" name="experience" required>
                                        <label class="form-check-label" for="">မရှိ</label>
                                        <div class="invalid-feedback">ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="started_teaching" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('စာရင်းကိုင်အလုပ်သင်များအား အလုပ်သင်ကြားပေးမှု စတင်ခဲ့သည့်ခုနှစ်') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="text" name="started_teaching_year" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control" value="{{ old('started_teaching_year') }}" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="internship_accept" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="number" name="internship_accept_no" class="form-control" placeholder="0" value="{{ old('internship_accept_no') }}" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="current_accept" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('လက်ရှိလက်ခံသင်ကြားပေးသော အလုပ်သင်ဦးရေ') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="number" name="current_accept_no" class="form-control" placeholder="0" value="{{ old('current_accept_no') }}" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="trained_trainees" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('မွေးထုတ်ပေးခဲ့သည့် အလုပ်သင်ဦးရေ') }}</label>
                                  <div class="col-md-4">
                                  <div class="form-group">
                                    <input type="number" name="trained_trainees_no" class="form-control" placeholder="0" value="{{ old('trained_trainees_no') }}" >
                                  </div>
                                  </div>
                                </div>
                              </div>

                              <div id="repeat_yearly" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('နှစ်စဥ်ဆက်တိုက်အလုပ်သင်ကြားနိုင်ခြင်း ရှိ/မရှိ') }}</label>
                                  <div class="col-md-2 form-check pt-2">
                                    <!-- <input type="radio"  value="1" name="repeat_yearly" @if(old('repeat_yearly')) checked @endif> ရှိ -->

                                    <input type="radio" class="form-check-input" value="1" name="repeat_yearly" >
                                    <label class="form-check-label" for="">ရှိ</label>
                                  </div>
                                  <div class="col-md-3 form-check pt-2">
                                    <!-- <input type="radio" value="0" name="repeat_yearly" @if(!old('repeat_yearly')) checked @endif> မရှိ -->

                                  <input type="radio" class="form-check-input" value="0" name="repeat_yearly" >
                                  <label class="form-check-label" for="">မရှိ</label>
                                  <div class="invalid-feedback">နှစ်စဥ်ဆက်တိုက်အလုပ်သင်ကြားနိုင်ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                  </div>
                                </div>
                              </div>

                              <div id="training_absent" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ') }}</label>
                                  <div class="col-md-2 form-check pt-2">
                                    <input type="radio" class="form-check-input" value="1" name="training_absent" >
                                    <label class="form-check-label" for="">ရှိ</label>
                                  </div>
                                  <div class="col-md-2 form-check pt-2">
                                    <input type="radio" class="form-check-input" value="0" name="training_absent" >
                                    <label class="form-check-label" for="">မရှိ</label>
                                    <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                  </div>
                                </div>
                              </div>

                              {{--<div id="traing_absent" >
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ') }}</label>
                                  <div class="col-md-2">
                                    <!-- <input type="radio" id="yes"  name="training_absent" value="1" > ရှိ -->
                                    <div class="form-check pt-2">
                                      <input type="radio" class="form-check-input" id="yes" value="1" name="training_absent" >
                                      <label class="form-check-label" for="">ရှိ</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <!-- <input type="radio" id="no"  name="training_absent" value="0" > မရှိ -->
                                    <div class="form-check pt-2">
                                      <input type="radio" class="form-check-input" value="0" id="no" name="training_absent" >
                                      <label class="form-check-label" for="">မရှိ</label>
                                      <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                    </div>
                                  </div>
                                </div>
                              </div>--}}

                              <div id="absent_reason" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label"></label>
                                  <label class="col-md-6 col-form-label">{{ __('ရှိပါက ပြတ်တောက်ခဲ့ရသည့် အကြောင်းအရင်း') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                    <textarea class="form-control" name="training_absent_reason" id="exampleFormControlTextarea1" rows="3" style="resize:none;"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                              <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >

                              {{--<div class="row">
                                  <div class="col-md-1 col-form-label"></div>
                                    <div class="col-md-1 col-form-label mt-2"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></div>
                                  <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>

                              </div>--}}

                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" >{{ __('Submit') }}</button>
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
