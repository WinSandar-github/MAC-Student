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
        <div class="overlay"></div>
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
                    <h2 class="title">DA Two Registration <span>Form</span></h2>
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
        <div class="section section-padding">
            <div class="container">
                <!-- <div class="status-reject" style="display:none">
                        <div class="card text-white bg-dark my-3">
                            
                            <div class="card-body">
                                status == 2 => reject
                                <p class="card-text reject">Your DA 2 Registration Form need to prepare.Please update your form  
                                 </p>
                            </div>
                        </div>
                    </div>
                    <div class="check_registration" style="display:none;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body">
                                <p class="card-text">Your DA 2 Registration Form is checking</p>
                            </div>
                        </div>
                    </div>
                    <div class="approve" style="display:none;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body">
                                <p class="card-text">You have the opportunity to attend the training  </p>
                                
                                
                            </div>
                        </div>
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body add_exam">
                                 
                            
                            </div>
                        </div>
                    </div> -->

                <div class="comment-form study" style="display:none;">
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="___class_+?36___">

                            <div class="row">
                                <!-- <div class="col-md-4">
                                        <div class="card text-center border-success text-success" onclick="selectedRegistration(3)" id="mac_card">
                                            <div class="card-body">
                                                <label  name="register_name"> Registration Mac</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card  text-center " onclick="selectedRegistration(1)" id="self_study_card">
                                            <div class="card-body ">
                                                <label name="register_name"> Registration Self Study</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-center" onclick="selectedRegistration(2)" id="private_card">
                                            <div class="card-body">
                                                <label  name="register_name"> Registration Private School</label>
                                            </div>
                                        </div>
                                    </div> -->

                            </div><br />
                            <div class="row" id="self_study_container">
                                {{-- <form id="self_study_form" method="post" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"> --}}
                                <form method="post" action="javascript:void();"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3">
                                        <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center my-1">
                                            ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                            မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br>
                                            (ကိုယ်ပိုင်လေ့လာသင်ယူမယ်သူများ)</h5>

                                        <div class="card-body">

                                            <br />
                                            <div class="col-md-12 p-3">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-8">

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Email</label>
                                                            <div class="col-md-6">
                                                                <input type="email" placeholder="Enter your Email address!" name="email"
                                                                    class="form-control" value="{{ old('email') }}" required="">
                                                                @if ($errors->has('email'))
                                                                    <span class="text-danger">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                                    class="form-control" required="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng"
                                                                    class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <br>

                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-7 pull-right">
                                                            <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                            <p class="mt-2">
                                                            <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                                value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                            </p>
                                                            <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>

                                                        </div>
                                                    </div>
                                                </div>                               


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label for=""
                                                        class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    <div class="col-md-8">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select class="form-control" name="nrc_state_region"
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
                                                                <select class="form-control" name="nrc_township" id="nrc_township"
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
                                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"
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
                                                                    id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                    oninput="this.value= en2mm(this.value);"
                                                                    maxlength="6" minlength="6" placeholder=""
                                                                    style="height: 38px" value="{{ old('nrc_number') }}"
                                                                    required>
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
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                        value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" required>
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                </div>                                                    
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                        value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" required>
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div><br> 

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm"
                                                                class="form-control" required="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                                                value="{{ old('race') }}" required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                                                class="form-control" value="{{ old('religion') }}" required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="date_of_birth" class="form-control"
                                                                placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                                class="form-control" value="{{ old('phone') }}" required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                                class="form-control" value="{{ old('address') }}" required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                        <div class="col-md-8">
                                                            <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                                class="form-control" value="{{ old('current_address') }}"
                                                                required="">
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row mb-3">

                                                        <div class="col-md-1 col-form-label">{{ __('၁၃။') }}</div>
                                                        <div class="col-md-3 col-form-label label_align_right">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" readonly
                                                                value="{{ $batch['name'] }}">

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">

                                                        <div class="col-md-1 col-form-label">{{ __('၁၄။') }}</div>
                                                        <div class="col-md-3 col-form-label label_align_right">
                                                            တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="student_regno"
                                                                readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(က)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="ယခုနှစ်တက်ရောက်ခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label class="form-check-label">ယခုနှစ်တက်ရောက်ခြင်း</label>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ခ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox"
                                                                value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label
                                                                class="form-check-label">သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ဂ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label class="form-check-label">သင်တန်းတက်ရောက်ချိန် ၆၀%
                                                                မပြည့်ခြင်း</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(ဃ)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9"><label>စာမေးပွဲကျရှုံးခြင်း</label></div>
                                                    </div><br />

                                                    <div class="row mb-4">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(င)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label>သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                                        <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                        <label
                                                            class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" name="student_regno" class="form-control"
                                                                placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                        <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                        <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" name="student_regno" class="form-control"
                                                                placeholder="အပိုင်း" id="part_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                        <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                        <label
                                                            class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" name="student_regno" class="form-control"
                                                                placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_self" readonly>

                                                        </div>
                                                    </div>


                                                    {{-- <div class="row">
                                                            <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                            <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                                            <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                        </div><br/>
                                                        <div class="row mb-3">
                                                            <label class="col-md-2 col-form-label"></label>
                                                            <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                        </div> --}}

                                                    <div class="row mb-3">
                                                        <div class="col-md-2 offset-md-5">
                                                            {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" form="self_study_form" id="submit_btn_ss" >{{ __('Submit') }}</button> --}}
                                                            <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal3">Submit
                                                            </button>
                                                        </div>
                                                    </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row" id="private_school_container">
                                {{-- <form method="post" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"> --}}
                                <form method="post" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-center my-1">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                            <h5 class="card-title text-center my-1">
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                                မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br> (ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5>
                                            <br />
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-8">

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Email</label>
                                                            <div class="col-md-6">
                                                                <input type="email" placeholder="Enter your Email address!" name="email"
                                                                    class="form-control" value="{{ old('email') }}" required="">
                                                                @if ($errors->has('email'))
                                                                    <span class="text-danger">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Password</label>
                                                            <div class="col-md-6">
                                                                <input type="password" placeholder="Enter your Password!" name="password"
                                                                    class="form-control" value="{{ old('password') }}" required="">
                                                            </div>

                                                        </div>
                                                        <br>


                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Confirm Password</label>
                                                            <div class="col-md-6">
                                                                <input type="password" placeholder="Enter your Password again!"
                                                                    name="confirm_password" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-7 pull-right">
                                                            <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                            <p class="mt-2">
                                                            <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                                value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                            </p>
                                                            <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            
            
                                            
                                            


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                            class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <br>


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label for=""
                                                        class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    <div class="col-md-8">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select class="form-control" name="nrc_state_region"
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
                                                                <select class="form-control" name="nrc_township" id="nrc_township"
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
                                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"
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
                                                                    id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                    oninput="this.value= en2mm(this.value);"
                                                                    maxlength="6" minlength="6" placeholder=""
                                                                    style="height: 38px" value="{{ old('nrc_number') }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                            value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" required>
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                    </div>                                                    
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                            value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" required>
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                        
                                                </div><br> 

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm"
                                                            class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                                            value="{{ old('race') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                                            class="form-control" value="{{ old('religion') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၂။') }}</div>
                                                    <div class="col-md-5 col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၃။') }}</div>
                                                    <div class="col-md-5 col-form-label">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)
                                                        စာမေးပွဲအောင်မြင်ခဲ့သည့်နှစ်/လ</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="exam_date"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_private" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="အပိုင်း" id="part_no_private" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_private" readonly>

                                                    </div>
                                                </div>

                                                {{-- <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                        <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_pp" onclick="ConfirmSubmitPP()"></div>
                                                        <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                        
                                                    </div><br/>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                        
                                                    </div><br/> --}}

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" >{{ __('Submit') }}</button> --}}
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal2">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <div class="row" id="mac_container">

                                {{-- <form method="post" action="javascript:createDaTwoMac();" enctype="multipart/form-data"> --}}
                                <form method="post" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" value="{{ $batch['id'] }}" />
                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                            <h5 class="card-title text-center">
                                                ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်
                                                မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Email</label>
                                                            <div class="col-md-6">
                                                                <input type="email" placeholder="Enter your Email address!" name="email"
                                                                    class="form-control" value="{{ old('email') }}" required="">
                                                                @if ($errors->has('email'))
                                                                    <span class="text-danger">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Password</label>
                                                            <div class="col-md-6">
                                                                <input type="password" placeholder="Enter your Password!" name="password"
                                                                    class="form-control" value="{{ old('password') }}" required="">
                                                            </div>

                                                        </div>
                                                        <br>


                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                            <label for="" class="col-md-5 col-form-label label_align_right">Confirm Password</label>
                                                            <div class="col-md-6">
                                                                <input type="password" placeholder="Enter your Password again!"
                                                                    name="confirm_password" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-7 pull-right">
                                                            <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                            <p class="mt-2">
                                                            <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                                value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                            </p>
                                                            <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            
            
                                            
                                            


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                            class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <br>


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label for=""
                                                        class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                    <div class="col-md-8">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select class="form-control" name="nrc_state_region"
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
                                                                <select class="form-control" name="nrc_township" id="nrc_township"
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
                                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"
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
                                                                    id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                    oninput="this.value= en2mm(this.value);"
                                                                    maxlength="6" minlength="6" placeholder=""
                                                                    style="height: 38px" value="{{ old('nrc_number') }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                            value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" required>
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                    </div>                                                    
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                            value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" required>
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                        
                                                </div><br> 

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm"
                                                            class="form-control" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                                            value="{{ old('race') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                                            class="form-control" value="{{ old('religion') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                            class="form-control" value="{{ old('address') }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၁။') }}</div>
                                                    <div class="col-md-5  col-form-label">တက်ရောက်မည့် သင်တန်းအမှတ်စဥ်
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label">{{ __('၂။') }}</div>
                                                    <div class="col-md-5  col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('အပိုင်း') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="အပိုင်း" id="part_no_mac" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label
                                                        class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="text" name="student_regno" class="form-control"
                                                            placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" readonly>

                                                    </div>
                                                </div>

                                                {{-- <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('၄။') }}</label>
                                                            </div>
                                                        </div>
                                                                                                              
                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ __('လျှောက်လွှာကြေး ၁၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၈၀၀၀ကျပ်၊သင်တန်းကြေး ၃၀၀၀၀ကျပ်၊စုစုပေါင်းသင့်ငွေ ၃၉၀၀၀ကို ပေးသွင်းပြီးသည့်ပြေစာအမှတ်') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="single-form">
                                                                <input type="text" name="" class="form-control" >
                                                            </div>
                                                        </div>  
                                                       
                                                    </div> --}}

                                                {{-- <div class="row">
                                                        <div class="col-md-1">  
                                                        </div>
                                                        
                                                    </div><br/> --}}

                                                {{-- <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                        <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_mac" onclick="ConfirmSubmitMac()"></div>
                                                        <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                    </div><br/>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>  
                                                    </div> --}}


                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac" >{{ __('Submit') }}</button> --}}
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal1">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Feedback Text -->
            <!-- <div class="exam_feedback" style="display:none; margin-left: 7%; margin-right: 7%;">
                        <div class="card text-white bg-primary my-3">
                            
                            <div class="card-body exam_text">
                                
                            </div>
                        </div>
                    </div> -->

            <!-- MAC -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoMac();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(MAC) Form Fee - ****** MMK</h4>
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
                                                 data-value="CASH" name="payment_method" id="cash_img_mac">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>

            <!-- PRIVATE -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Private School) Form Fee - ****** MMK</h4>
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
                                                 data-value="CASH" name="payment_method" id="cash_img_private">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>

            
            <!-- SELF -->
            <form method="post" class="needs-validation" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Self Study) Form Fee - ****** MMK</h4>
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
                                                 data-value="CASH" name="payment_method" id="cash_img_self">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>

        
        </div><br /></br />
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
    <script type="text/javascript">
        $('document').ready(function() {
            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);



            selectedRegistration(urlParams.get("study_type"))

        })

        loadCourse();
        reg_feedback();
        var exam_date = localStorage.getItem("exam_date");
        $("input[name='exam_date']").val(formatDate(exam_date));

        //MAC
        $('#mac_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal1').modal('hide');
            }, 1000);
        });

        $('#cash_img_mac').click(function() {
            $('#mac_btn').prop('disabled', false);
        });

        $('#btn_cbpay').prop('disabled', true);
        $('#btn_mpu').prop('disabled', true);
        $('#mac_btn').prop('disabled', true);

        //Self Study
        $('#self_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal3').modal('hide');
            }, 1000);
        });

        $('#cash_img_self').click(function() {
            $('#self_btn').prop('disabled', false);
        });

        $('#btn_cbpay').prop('disabled', true);
        $('#btn_mpu').prop('disabled', true);
        $('#self_btn').prop('disabled', true);

        //Private School
        $('#private_btn').click(function () {
            setTimeout(function () {
                $('#exampleModal2').modal('hide');
            }, 1000);
        });

        $('#cash_img_private').click(function() {
            $('#private_btn').prop('disabled', false);
        });

        $('#btn_cbpay').prop('disabled', true);
        $('#btn_mpu').prop('disabled', true);
        $('#private_btn').prop('disabled', true);
    </script>
@endpush
