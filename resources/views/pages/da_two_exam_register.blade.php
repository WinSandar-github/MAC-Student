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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA Exam Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">

            </div>--}}
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">

            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">--}}

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                    <!-- Form Wrapper Start -->
                    <div class="form-wrapper">

                        @csrf
                        <div class="row">
                            <div class="card border-success mb-3"  style="padding:3% 5% 3% 5%;">
                                <!-- <form> -->
                                <div class="card-body ">
                                    <div class="col-md-12">
                                        {{-- <form  method="post" action="javascript:createDAExamRegister();" enctype="multipart/form-data"> --}}
                                        <form method="post" id="da2_exam" action="javascript:void();" enctype="multipart/form-data" novalidate>
                                            <!-- <fieldset id="fieldset" disabled> -->
                                            <input type="hidden" id="form_type" class="form-control" id="form_type">
                                            <input type="hidden" name="is_private" id="is_private" class="form-control">
                                                <h5 class="card-title text-center fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ<br/>
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းစာမေးပွဲဖြေဆိုခွင့်လျှောက်လွှာ</h5><br/>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                                    <h6>စာမေးပွဲဖြေဆိုမည့် လ/ခုနှစ် - <span name="exam_date" id="exam_date"></span></h6>
                                                    <h6>အမှတ်စဥ် - <span id="batch_number"></span></h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 mt-3">

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">၁။</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">၂။</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">၃။</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control nrc_state_region" name="nrc_state_region"  style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;" readonly>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">၄။</span>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4 text-center">
                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>

                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၅။</span>ကျား / မ (Gender)</label>
                                                    <div class="row col-md-8 py-2">
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id="male"
                                                                        name="gender" value="Male" required>
                                                                <span class="form-check-sign"></span>
                                                                ကျား
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id='female'
                                                                        name="gender" value='Female' required>
                                                                <span class="form-check-sign"></span>
                                                                မ
                                                            </label>
                                                        </div>
                                                        
                                                        <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၆။</span>မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၇။</span>ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                            class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၈။</span>လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၉။</span>ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၀။</span>ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၁။</span>ရုံးစိုက်ရာဒေသ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၂။</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၃။</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၄။</span>ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">၁၅။</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_self"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_self"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="selectStaff()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_self" style="display:none" >
                                                    <div class="row mb-3"  >
                                                            <label class="col-md-4 col-form-label label">
                                                                <span class="pull-left"></span>
                                                                <span class="pull-center" style="padding-right:75px">(က)</span>အထက်လူကြီး၏ထောက်ခံစာ
                                                            </label>
                                                            <div class="col-md-1"  id="degree_edu" >
                                                                <span class="recommend_letter"></span>
                                                            </div>
                                                            <div class="col-md-7"  id="degree_edu" >
                                                                <input  disabled type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                            </div>
                                                        </div>
                                                </div>

                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" id="da2_label1">၁၆။</span>ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="private_school_name" id="selected_school_id"
                                                                class="form-control" value="{{ old('private_school_name') }}" readonly="">
                                                            <!-- <div class="form-group">
                                                                <select class="form-control form-select"
                                                                    name="private_school_name" id="selected_school_id"
                                                                    style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-4 col-form-label label" id=""><span class="pull-left" id="da2_label2">၁၆။</span>စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်
                                                    </div>
                                                </div>

                                            <div class="row mb-3">
                                                <label class="col-md-1 col-form-label label">
                                                    
                                                </label>
                                                <label class="col-md-3 col-form-label label">
                                                    <span class="pull-left">(က)</span>နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="လ၊နှစ်(MMM-YYYY)" name="date" id="date" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-1 col-form-label label"></label>
                                                <label class="col-md-3 col-form-label label">
                                                  <span  class="pull-left">(ခ)</span>  အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့် Module ရှိပါကဆိုင်ရာအကွက်တွင်(√ )အမှတ်အသားပြုရန်
                                                </label>
                                                <div class="col-md-6 offset-md-0" >
                                                  <div class="row mt-2">
                                                      <div class="col-md-3">
                                                          <label class="checkbox-inline">
                                                              <input type="checkbox" name="last_ans_module[]" id="lst_m1"  value="Module 1" > Module 1
                                                          </label>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <label class="checkbox-inline">
                                                              <input type="checkbox" name="last_ans_module[]" id="lst_m2"  value="Module 2" > Module 2
                                                          </label>
                                                      </div>
                                                      <label  class="error attend_place_error" name="attend_place_error" style="display:none;" for="last_ans_module[]">Please select Module.</label>
                                                  </div>
                                                  
                                                </div>
                                                
                                            </div>

                                            {{--<div class="row">
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left" ></span>
                                                    <span class="pull-left" style="padding-left: 53px;">(ခ)</span>ယခုဖြေဆိုမည့် Module
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="radio" id="0" name="is_full_module" value="1" checked>
                                                            <label for="0">Module 1</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="radio" id="1" name="is_full_module" value="2"
                                                                style="margin-left: 3%;">
                                                            <label for="1">Module 2</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="radio" id="2" name="is_full_module" value="3"
                                                                style="margin-left: 3%;">
                                                            <label for="2">All Modules</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br />--}}

                                            <div class="row">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" id="da2_label3">၁၇။</span>ဖြေဆိုမည့်စာဖြေဌာန</label>
                                                <div class="col-md-8">
                                                  <div class="form-group">
                                                    <select class="form-control form-select" name="exam_department" id="exam_department" >
                                                        <option value="" disabled selected>ဖြေဆိုမည့်စာဖြေဌာန ရွေးချယ်ပါ</option>
                                                    </select>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span class="pull-left" id="da2_label4">၁၈။</span>သင်တန်းတက်ရောက်သည့်နေရာ </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="class_address" id="class_address" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" id="da2_label5">၁၉။</span>သင်တန်းသားကိုယ်ပိုင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="" name="personal_no" id="personal_no"  class="form-control" value="" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                        <label for="" class="col-md-4 label_align_right"><span class="pull-left" id="da2_label6">၂၀။</span>ယခုဖြေဆိုမည့် Module</label>
                                        <div class="col-md-8">
                                            <div class="row" disabled>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-check-inline">
                                                            <input type="radio" id="0" class="form-check-input module_one" name="is_full_module" value="1" disabled required>
                                                            Module 1
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-check-inline">
                                                            <input type="radio" id="1" class="form-check-input module_two" name="is_full_module" value="2" disabled required>
                                                            Module 2
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check-inline">
                                                            <input type="radio" id="2" class="form-check-input module_full"  name="is_full_module" value="3" disabled required>
                                                            All Modules
                                                        </div>
                                                    </div>
                                                </div>
                                                <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one.</label>
                                            </div>
                                        </div>
                                    </div>

                                            <div class="row">
                                                {{-- <div class="col-md-1 col-form-label"></div>
                                                    <label class="col-md-1 col-form-label">(ဂ)</label>
                                                    <label class="col-md-3 col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်</label> --}}
                                                <div class="col-md-7">
                                                    <input type="hidden" id="invoice_image" class="form-control"
                                                        placeholder="upload photo" name="invoice_image"
                                                        value="invoice_image">
                                                </div>
                                            </div>

                                            <div class="row" style="display:none;">
                                                <div class="col-md-1 col-form-label"></div>
                                                <label class="col-md-1 col-form-label">(ဂ)</label>
                                                <label class="col-md-3 col-form-label">ရက်စွဲ</label>
                                                <div class="col-md-7 single-form">
                                                    <input type="text" name="invoice_date" class="form-control"
                                                        placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>


                                            <div class="row mb-4 mt-3">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="da_two_exam_reg_declare" onchange="$('#da2submit').prop('disabled', !this.checked)">
                                                            <span class="form-check-sign"></span>
                                                            <p class="fw-bolder">
                                                                * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊
                                                            </p>
                                                        </label>
                                                    </div>
                                                    {{--<h6 class="">ရက်စွဲ - {{ date('d-M-Y') }}</h6>--}}
                                                </div>
                                            </div> 

                                            <div class="row justify-content-center mb-4">
                                                    <button type="submit" id="da2submit" value="submit" class="btn btn-success btn-hover-dark w-25" disabled>Submit</button>
                                                
                                            </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>

                    </div>
                    <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>

    <!-- Modal -->
     {{--<form method="post" class="needs-validation" action="javascript:createDAExamRegister();" enctype="multipart/form-data"
           novalidate>
         @csrf
         <div class="modal fade" id="da2examModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Exam Registeration Form Fee - ****** MMK</h4>
                             </center>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                          data-value="CBPAY" name="payment_method" id="cb_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                          data-value="MPU" name="payment_method" id="mpu_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                          data-value="CASH" name="payment_method" id="cash_img">
                                 </center>
                                 <br>
                             </div>
                             <input type="hidden" name="payment_method" value="CASH">
                             <center>
                                 <button type="submit" id="da2exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                             </center>
                         </div>
                     </div>
                     <br>
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
<script src="{{ asset('js/form_validation/da_two_exam_validation.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {

            get_student_info(student_id).then(data => {
            
                let student_info = data.data
                console.log('student_info',student_info);
                let student_reg = data.data.student_register
                let current_stu_course = data.data.student_course_regs.slice(-1);
                let last_exam = data.data.exam_registers.slice(-1);

                let current_stu_reg=data.data.student_register.slice(-1);
                // let last_exam = data.data.exam_registers.slice(-1);
                console.log('current_stu_course',current_stu_course);
                $("#batch_number").append(current_stu_course[0].batch.number);
                $('#exam_date').append(formatDateMY(current_stu_course[0].batch.exam_start_date));
                //console.log("student_reg >>>>",student_reg.personal_no);
                if(data){
                    // console.log(data.data,"student_reg");
                    if(current_stu_reg[0].module=="1"){
                         $("#0").prop("checked", true);
                    }
                    else if(current_stu_reg[0].module=="2"){
                        $("#1").prop("checked", true);
                    }
                    else if(current_stu_reg[0].module=="3"){
                        $("#2").prop("checked", true);
                    }
                    // let current_stu_course = data.data.student_course_regs.slice(-1);
                    // console.log('current_stu_course',current_stu_course)

                    // $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                    // $('.course_name').val(current_stu_course[0].batch.course.name);
                    // $('.batch_no').val(current_stu_course[0].batch.number);

                    $(".profile_image").attr("src",BASE_URL+student_info.image);
                    $("input[name='email']").val(student_info.email);
                    $("input[name='name_mm']").val(student_info.name_mm);
                    $("input[name='name_eng']").val(student_info.name_eng);

                    $(".nrc_state_region").val(student_info.nrc_state_region);
                    $(".nrc_township").val(student_info.nrc_township);
                    $(".nrc_citizen").val(student_info.nrc_citizen);
                    $(".nrc_number").val(student_info.nrc_number);
                    $(".nrc_front_image").attr("src",BASE_URL+student_info.nrc_front);
                    $(".nrc_back_image").attr("src",BASE_URL+student_info.nrc_back);

                    $("input[name='father_name_mm']").val(student_info.father_name_mm);
                    $("input[name='father_name_eng']").val(student_info.father_name_eng);
                    $("input[name='race']").val(student_info.race);
                    $("input[name='religion']").val(student_info.religion);
                    $("input[name='date_of_birth']").val(student_info.date_of_birth);
                    $("input[name='personal_no']").val(student_info.personal_no);
                    $("input[name='private_school_name']").val(current_stu_reg[0].private_school_name);
                    let batch_id = localStorage.getItem('batch_id');
                    // let last_exam = data.data.exam_registers.slice(-1);
                    if(last_exam.length!=0)
                    {
                        if(last_exam[0].course.code == 'da_2') {
                            // $("input[name='date']").val(formatDate(last_exam[0].created_at));

                            if(last_exam[0].is_full_module == "1")
                            {
                                
                                $(".module_two").prop("checked", true);
                                
                                $(':radio:not(:checked)').attr('disabled', true);

                            }
                            else if(last_exam[0].is_full_module=="2"){
                                $(".module_one").prop("checked", true);
                                $(':radio:not(:checked)').attr('disabled', true);

                            }
                            else if(last_exam[0].is_full_module=="3"){
                                $(".module_full").prop("checked", true);

                            $(':radio:not(:checked)').attr('disabled', true);
                                
                            }

                            // if(last_exam[0].is_full_module == "1"){
                                
                            //     $("#lst_m1").prop("checked", true);
                            //     $("#lst_m2").attr("disabled", "disabled");  
                            // }
                            // else if(last_exam[0].is_full_module=="2"){
                            //     $("#lst_m2").prop("checked", true);
                            //     $("#lst_m1").attr("disabled", "disabled"); 
                            // }
                        }
                    }else{
                         if(current_stu_reg[0].module=="1"){
                            $(".module_one").prop("checked", true);
                            $(':radio:not(:checked)').attr('disabled', true);

                        }
                        else if(current_stu_reg[0].module=="2"){
                            $(".module_two").prop("checked", true);
                        $(':radio:not(:checked)').attr('disabled', true);

                        }
                        else if(current_stu_reg[0].module=="3"){
                            $(".module_full").prop("checked", true);
                            $(':radio:not(:checked)').attr('disabled', true);

                        }
                    }

                    let education = student_info.student_education_histroy;
                    $("input[name='degree_name']").val(education.degree_name);

                    let job = student_info.student_job;
                    $("input[name='job_name']").val(job.name);
                    $("input[name='position']").val(job.position);
                    $("input[name='department']").val(job.department);
                    // $("input[name='organization']").val(job.phone);
                    // $("input[name='company_name']").val(job.company_name);
                    // $("input[name='salary']").val(job.salary);
                    $("input[name='office_address']").val(job.office_address);

                    if(student_info.gov_staff==0){
                        $("#no_mac").prop("checked",true);
                        $("#no_self").prop("checked",true);
                        $("#no_private").prop("checked",true);

                    }else{
                        $("#yes_mac").prop("checked",true);
                        $("#rec_letter_mac").css("display",'block');
                        $("#yes_self").prop("checked",true);
                        $("#rec_letter_self").css("display",'block');
                        $("#yes_private").prop("checked",true);
                        $("#rec_letter_private").css("display",'block');

                        $(".recommend_letter").append("<a href='"+BASE_URL+student_info.recommend_letter+"'  target='_blank'>View File</a><br/>")

                    }

                    if (student_info.gender == "Male") {
                        $("#male").prop("checked", true);
                    } else {
                        $("#female").prop("checked", true);
                    }

                    $("input[name='phone']").val(student_info.phone);
                    $("input[name='address']").val(student_info.address);
                    $("input[name='current_address']").val(student_info.current_address);

                    $(".personal_no_self").val(student_info.registration_no);
                    if(data.data.student_register[0].type == 0){
                        $("input[name='class_address']").val("ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူ");
                    }else if(data.data.student_register[0].type == 1){
                        $("input[name='class_address']").val("ကိုယ်ပိုင်သင်တန်းကျောင်း");
                    }else{

                        var mac_name = data.data.student_course_regs[0].mac_type == 2 ?   "စာရင်းကောင်စီ(နေပြည်တော်သင်တန်းကျောင်း)" : "စာရင်းကောင်စီ(ရန်ကုန်သင်တန်းကျောင်း)";


                        $("input[name='class_address']").val(mac_name);
                    }
                }

            });


            $('#form_type').val(localStorage.getItem('course_id'));
            $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });
            $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
            });

            var boo = localStorage.getItem("isPrivateSchool");
            $('#is_private').val(boo);
            if (boo == "true") {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'block';
                    document.getElementById('da2_label1').innerHTML = "၁၆။";
                    document.getElementById('da2_label2').innerHTML = "၁၇။";
                    document.getElementById('da2_label3').innerHTML = "၁၈။";
                    document.getElementById('da2_label4').innerHTML = "၁၉။";
                    document.getElementById('da2_label5').innerHTML = "၂၀။";
                    document.getElementById('da2_label6').innerHTML = "၂၁။";
                    
                }
            } else {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'none';
                    document.getElementById('da2_label2').innerHTML = "၁၆။";
                }
            }
        });
        // loadSchoolList();
        loadExamDepartment();
    </script>
@endpush
