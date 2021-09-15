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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">

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
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">

            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                    <!-- Form Wrapper Start -->
                    <div class="form-wrapper">

                        @csrf
                        <div class="row">
                            <div class="card border-success mb-3">
                                <!-- <form> -->
                                <div class="card-body ">
                                    <div class="col-md-12">
                                        {{-- <form  method="post" action="javascript:createDAExamRegister();" enctype="multipart/form-data"> --}}
                                        <form method="post" id="da2_exam" action="javascript:void();" class="needs-validation" enctype="multipart/form-data" novalidate>
                                            <!-- <fieldset id="fieldset" disabled> -->
                                            <input type="hidden" id="form_type" class="form-control" id="form_type">
                                            <input type="hidden" name="is_private" id="is_private" class="form-control">
                                            <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>

                                            <h5 class="card-title text-center my-1">
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်း
                                                စာမေးပွဲဖြေဆိုခွင့်လျှောက်လွှာ</br></h5>
                                            <br />

                                                <div class="row">
                                                    <div class="col-md-8 mt-3">

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Email</label>
                                                            <div class="col-md-6">
                                                                <input type="email" placeholder="Enter your Email address!" name="email" class="form-control" readonly="">
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">အမည်(မြန်မာ)</label>
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                                    class="form-control" readonly="">
                                                            </div>
                                                        </div> <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">အမည်(အင်္ဂလိပ်)</label>

                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng"
                                                                    class="form-control" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="col-md-7 pull-right">
                                                            <img class="col-md-3 profile-style profile_image" id="previewImg" src="{{ asset('assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                            <p class="mt-2">
                                                            <input disabled type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                                value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" >
                                                            </p>
                                                            <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label for=""
                                                        class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    <div class="col-md-8">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select disabled class="form-control nrc_state_region" name="nrc_state_region"
                                                                        id="nrc_state_region"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    @foreach($nrc_regions as $region)
                                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 col-7 px-1">
                                                                <select disabled class="form-control nrc_township" name="nrc_township" id="nrc_township"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    @foreach($nrc_townships as $township)
                                                                        <option value="{{ $township['township_mm'] }}">
                                                                            {{ $township['township_mm'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 col-5 px-1">
                                                                <select disabled class="form-control nrc_citizen" name="nrc_citizen" id="nrc_citizen"
                                                                        style="margin-top: 0px; margin-bottom: 0px;">
                                                                    @foreach($nrc_citizens as $citizen)
                                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-5 col-7 pl-1">
                                                                <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                    id="nrc_number" pattern=".{6,6}" class="form-control nrc_number"
                                                                    oninput="this.value= en2mm(this.value);"
                                                                    maxlength="6" minlength="6" placeholder=""
                                                                    style="height: 38px" value="{{ old('nrc_number') }}"
                                                                    readonly="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style nrc_front_image" id="previewNRCFrontImg" src="{{ asset('assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input disabled type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                        value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style nrc_back_image" id="previewNRCBackImg" src="{{ asset('assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input disabled type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                        value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm"
                                                            class="form-control" readonly="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng"
                                                            class="form-control" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                                            value="{{ old('race') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                                            class="form-control" value="{{ old('religion') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                    <!-- <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label> -->
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ပညာအရည်အချင်း</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                            class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဆက်သွယ်ရန်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label class="col-sm-1 col-form-label">{{ __('၁၆။') }}</label>
                                                    <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
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
                                                <br>

                                                <div id="rec_letter_self" style="display:none" >
                                                    <div class="row  "  >
                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                            <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                            <label for="" class="col-md-2 col-form-labe mt-1 label_align_right"> အထက်လူကြီး၏ထောက်ခံစာ</label>
                                                            <div class="col-md-1"  id="degree_edu" >
                                                                <span class="recommend_letter"></span>
                                                            </div>
                                                            <div class="col-md-7"  id="degree_edu" >
                                                                <input  disabled type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <br>
                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"
                                                            id="da2_label1">{{ __('၁၇။') }}</label>
                                                        <label
                                                            class="col-md-4 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <select class="form-control form-select"
                                                                    name="private_school_name" id="selected_school_id"
                                                                    style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />

                                                <div class="row mb-3">
                                                    <div class="col-md-4 col-form-label" id="">{{ __('စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်') }}
                                                    </div>

                                                </div><br />

                                            <div class="row mb-3">
                                                <div class="col-md-1 col-form-label" id="da2_label2">{{ __('၁၈။') }}
                                                </div>
                                                <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                <label
                                                    class="col-md-3 col-form-label label_align_right">{{ __('နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" placeholder="လ၊နှစ်(MMM-YYYY)" name="last_exam_date" id="last_exam_date" class="form-control" value="" required="">
                                                </div>
                                            </div><br />

                                            <div class="row">
                                                <div class="col-md-1 col-form-label">{{ __('') }}</div>
                                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                <label
                                                    class="col-md-3 col-form-label label_align_right">{{ __('ယခုဖြေဆိုမည့် Module') }}</label>
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
                                            </div><br />

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၉။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">ဖြေဆိုမည့်စာဖြေဌာန</label>
                                                <div class="col-md-8">
                                                  <div class="form-group">
                                                    <select class="form-control form-select" name="exam_department" id="exam_department" style="width:57%;margin-right:3px;" required>
                                                        <option value="" disabled selected>ဖြေဆိုမည့်စာဖြေဌာန ရွေးချယ်ပါ</option>
                                                    </select>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                {{-- <div class="col-md-1 col-form-label">{{ __('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်') }}</label> --}}
                                                <div class="col-md-7">
                                                    <input type="hidden" id="invoice_image" class="form-control"
                                                        placeholder="upload photo" name="invoice_image"
                                                        value="invoice_image">
                                                </div>
                                            </div><br />

                                            <div class="row" style="display:none;">
                                                <div class="col-md-1 col-form-label">{{ __('') }}</div>
                                                <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                <label class="col-md-3 col-form-label">{{ __('ရက်စွဲ') }}</label>
                                                <div class="col-md-7 single-form">
                                                    <input type="text" name="invoice_date" class="form-control"
                                                        placeholder="dd/mm/yyyy">
                                                </div>
                                            </div><br />

                                            <div class="row">
                                                <div class="col-md-2 offset-md-5">
                                                    {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                                    <button type="submit" id="da2submit" value="submit" class="btn btn-success btn-hover-dark w-100">Submit
                                                    </button>
                                                </div>
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
     <form method="post" class="needs-validation" action="javascript:createDAExamRegister();" enctype="multipart/form-data"
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
     </form>


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
        $(document).ready(function(e) {

            get_student_info(student_id).then(data => {

                let student_info = data.data
                if(data){
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

                    $("input[name='phone']").val(student_info.phone);
                    $("input[name='address']").val(student_info.address);
                    $("input[name='current_address']").val(student_info.current_address);

                    $(".personal_no_self").val(student_info.registration_no);
                }

            });


            $('#form_type').val(localStorage.getItem('course_id'));
            $("input[name='last_exam_date']").flatpickr({
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
                    document.getElementById('da2_label1').innerHTML = "၁၇။";
                    document.getElementById('da2_label2').innerHTML = "၁၈။";
                }
            } else {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'none';
                    document.getElementById('da2_label2').innerHTML = "၁၇။";
                }
            }
        });
        loadSchoolList();
        loadExamDepartment();
    </script>
@endpush
