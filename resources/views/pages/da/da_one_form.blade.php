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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA One Application <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}"
                     alt="Shape">

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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                    <!-- Form Wrapper Start -->
                    <div class="form-wrapper">

                        {{--<form method="post" class="needs-validation" action="javascript:createDARegister();" enctype="multipart/form-data" novalidate>--}}
                        <form method="post" id="da_one_app_form" class="needs-validation" action="javascript:void();"
                              enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">
                                        ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                    <br/>
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

                                    <input type="hidden" name="registration_no" value="1">

                                    <input type="hidden" name="approve_reject_status">

                                    {{-- <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                        <label for="" class="col-md-3 col-form-label ">Upload Photo</label>
                                        <div class="col-md-8">
                                            <input type="file" id="image" class="form-control" name="image"
                                                   value="{{ old('image') }}" accept="image/*" required="">
                                        </div>
                                    </div> --}}
                                    <br>  
                                    
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name"
                                                   class="form-control" value="{{ old('name') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ရာထူး" name="position" class="form-control"
                                                   value="{{ old('position') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                   value="{{ old('department') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">အဖွဲ့အစည်း</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="အဖွဲ့အစည်း" name="organization"
                                                   class="form-control" value="{{ old('organization') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name"
                                                   class="form-control" value="{{ old('company_name') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary"
                                                   class="form-control" value="{{ old('salary') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၉။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                   class="form-control" value="{{ old('office_address') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label">{{ __('၂၀။') }}</label>
                                        <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                        <div class="col-md-2 pt-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio"
                                                                                 class="form-check-input mr-3" id="yes"
                                                                                 name="gov_staff" value="1"
                                                                                 style="margin-left: 3%;" required onclick="selectStaff()">
                                                    </div>
                                                    <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-2 pt-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio"
                                                                                 class="form-check-input mr-3" id="no"
                                                                                 name="gov_staff" value="0"
                                                                                 style="margin-left: 3%;" required onclick="selectStaff()">
                                                    </div>
                                                    <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                        <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                            ရွေးချယ်ပါ
                                                        </div>
                                                    </div>
                                                    

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="rec_letter" style="display:none" >
                                        <div class="row  "  >
                                                <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>                                                            
                                                <label for="" class="col-md-2 col-form-labe mt-1 label_align_right"> အထက်လူကြီး၏ထောက်ခံစာ</label>
                                                
                                                <div class="col-md-7"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                    <!-- <input type="file"  class="form-control" id="certificate0"  name="certificates[]" required=""> -->
                                                </div>
                                            </div>  
                                        </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၂၁။') }}</label>
                                        <label for="" class="col-md-11 col-form-label">တက္ကသိုလ်တစ်ခုခုမှ
                                            အောင်မြင်ပြီးခဲ့သော</label>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဘွဲ့အမည်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name"
                                                   class="form-control" value="{{ old('degree_name') }}" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">တက္ကသိုလ်အမည်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name"
                                                   class="form-control" value="{{ old('university_name') }}"
                                                   required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ခုံအမှတ်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ခုံအမှတ်" name="roll_number"
                                                   class="form-control" value="{{ old('roll_number') }}" required="">
                                        </div>
                                    </div>
                                    <br>


                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">နှစ်၊လ</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date"
                                                   class="form-control" required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div id="edu">
                                        <div class="row mb-3" id="edu0">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                            <label for="" class="col-md-3 col-form-labe mt-1 label_align_right"> Attached
                                                Certificate</label>

                                            <div class="col-md-6" id="degree_edu">
                                                <input type="file" class="form-control" id="certificate0"
                                                       name="certificate[]" autocomplete="off" required="">
                                            </div>
                                            <div class="col-md-1" id="add_div">
                                                <button type="button" class="btn btn-primary" id="add_btn"
                                                        onclick="AddDAEdu()">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="row m-4">
                                        <div class="col-md-2 offset-md-5">
                                        {{--<button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>--}}
                                        <!-- Button trigger modal -->
                                            <button id="da_submit" value="submit" 
                                                    class="btn btn-success btn-hover-dark w-100">
                                                Submit
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

    <!-- Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Code must have 6 digits (eg. 123456)"></center>
                          </div>
                      </div>
                      <center>
                          <button type="submit" id="btn1" onclick="check_email()" class="btn btn-success btn-hover-dark w-30">Send Verification Code
                          </button>
                      </center><br>
                      <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                      </div><br><br>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal 2 -->
    <form method="post" class="needs-validation" action="javascript:createDARegister();" enctype="multipart/form-data"
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
                                <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Application Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="btn_cash" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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
        $(document).ready(function (e) {
            localStorage.removeItem('course_type');

            $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
            });
            $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
            });
            $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });

            $("input[id*='nrc_number'], text[id*='nrc_number']").change(function (e) {
                myanmarLetterOnly($(this));
            });

            $(document).on('keydown', '#nrc_number', function () {
                myanmarLetterOnly($(this));
            });

            $("input[id*='name_mm'], text[id*='name_mm']").change(function (e) {
                myanmarLetterOnly($(this));
            });

            $(document).on('keydown', '#name_mm', function () {
                myanmarLetterOnly($(this));
            });

            $("input[id*='father_name_mm'], text[id*='father_name_mm']").change(function (e) {
                myanmarLetterOnly($(this));
            });

            $(document).on('keydown', '#father_name_mm', function () {
                myanmarLetterOnly($(this));
            });

            function myanmarLetterOnly(self) {
                val = self.val();
                if (/[a-zA-Z0-9]+$/.test(val)) {
                    self.val(val.replace(/[a-zA-Z0-9]+$/, ''));
                }
            }

            $('#btn_cash').click(function () {
                setTimeout(function () {
                    $('#exampleModal1').modal('hide');
                }, 1000);
            });

            $('#cash_img').click(function() {
                $('#btn_cash').prop('disabled', false);
            });

            $('#cb_img').click(function() {
                $('#btn_cash').prop('disabled', true);
            });

            $('#mpu_img').click(function() {
                $('#btn_cash').prop('disabled', true);
            });
            $('#btn_cash').prop('disabled', true);

        });

    </script>
@endpush
