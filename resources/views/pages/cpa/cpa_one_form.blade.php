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
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA Application <span>Form</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment dir_cpa_app_form">
                <div class="comment-form">
                    <div class="form-wrapper">
                        <div class="row">
                        <div class="card border-success mb-3">
                            <div class="card-body">
                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                    <h5 class="card-title text-center">(တိုက်ရိုက်တက်ရောက်ခွင့်ရသူများ)</h5>

                                    <br/>
                                    <br/>


                                {{--<form method="Post" id="cpa_register" enctype="multipart/form-data" class="needs-validation" novalidate>--}}
                                <form method="Post" action="javascript:void();" id="cpa_one_form" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="">
                                                            <label>{{ __('၁။') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 label_align_right">
                                                            <label>Email</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="">
                                                            <input type="email" placeholder="Enter your Email address!" name="email" class="form-control" value="{{ old('email') }}" required="">
                                                        </div>
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div><br>
                                                <!-- </div> -->
                                                <div class="row">
                                                    <div class="col-md-1">
                                                            <label>{{ __('၂။') }}</label>
                                                    </div>

                                                    <div class="col-md-5 label_align_right">
                                                            <label>Password</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <input type="password" placeholder="Enter your Password!" name="password" class="form-control" value="{{ old('password') }}" required="">
                                                        </div>
                                                    </div>
                                                </div><br>


                                                <!-- </div> -->
                                                <div class="row">
                                                    <div class="col-md-1">
                                                            <label>{{ __('၃။') }}</label>
                                                    </div>

                                                    <div class="col-md-5 label_align_right">
                                                            <label>Confirm Password</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <input type="password" placeholder="Enter your  Password again!" name="confirm_password" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-7 pull-right">
                                                    <img class="col-md-3 profile-style" id="previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                    <p class="mt-2">
                                                    <input type="file" class="custom-file-input" id="profile_photo"  name="image"
                                                        value="{{ old('image') }}" accept="image/*"  onchange="previewImageFile(this);" required>
                                                    </p>
                                                    <div class="form-text mb-2">Allowed Jpeg and Png Image.</div>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၄။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" class="form-control" id="name_mm" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" class="form-control" value="{{ old('name_eng') }}" id="name_eng" required="">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၅။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div>
                                                    <div class="row">

                                                        <div class="col-md-2">
                                                          <div class="">
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
                                                        </div>

                                                        <div class="col-md-3">
                                                          <div class="">
                                                            <select class="form-control" name="nrc_township" id="nrc_township"
                                                                    style="margin-top: 0px; margin-bottom: 0px;">
                                                                @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                        {{ $township['township_mm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                          <div class="">
                                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                                    style="margin-top: 0px; margin-bottom: 0px;">
                                                                @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-5">
                                                          <div class="">
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
                                            </div>
                                        </div><br>

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
                                                            <div class="form-text mb-2">Allowed Jpeg and Png Image.</div>
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
                                                            <div class="form-text mb-2">Allowed Jpeg and Png Image.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>


                                        <!-- <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                            <div class="col-md-8">
                                                <input type="file" name="nrc_front" class="form-control">
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                            <div class="col-md-8">
                                                <input type="file" name="nrc_back" class="form-control">
                                            </div>
                                        </div><br> -->

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၆။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control" id="father_name_eng" value="{{ old('father_name_eng') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၇။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>လူမျိူး</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="လူမျိူး" name="race" class="form-control" value="{{ old('race') }}" required="" id="race">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၈။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>ကိုးကွယ်သည့် ဘာသာ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ကိုးကွယ်သည့် ဘာသာ" name="religion" class="form-control" value="{{ old('religion') }}" required="" id="religion">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __(' ၉။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>မွေးသက္ကရာဇ်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  id="date_of_birth"  required>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၀။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>ဖုန်းနံပါတ်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required="">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၁။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>နေရပ်လိပ်စာ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="နေရပ်လိပ်စာ" name="address" class="form-control" value="{{ old('address') }}" required="" id="address">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၂။') }}</label>
                                                </div>
                                            </div>


                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control" value="{{ old('current_address') }}" required="" id="current_address">
                                                </div>
                                            </div>
                                        </div><br>

                                        <input type="hidden" name="registration_no" value="1">

                                        <input type="hidden" name="approve_reject_status">
                                    {{--
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၅။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div>
                                                    <label>Upload Photo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input class="form-control" type="file" placeholder="upload photo"  name="image" value="{{ old('image') }}" required=""  accept="image/*"  >
                                                </div>
                                            </div>
                                         </div><br>

                                    --}}

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၃။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>လက်ရှိအလုပ်အကိုင်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name" class="form-control" value="{{ old('name') }}" required="" id="name">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၄။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label> ရာထူး</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ရာထူး" name="position" id="position" class="form-control" value="{{ old('position') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၅။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label> ဌာန</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ဌာန" name="department" id="department" class="form-control" value="{{ old('department') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၆။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label> အဖွဲ့အစည်း</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="အဖွဲ့အစည်း" id="organization" name="organization" class="form-control" value="{{ old('organization') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၇။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label> ကုမ္ပဏီအမည်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ကုမ္ပဏီအမည်" id="company_name" name="company_name" class="form-control" value="{{ old('company_name') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၈။') }}</label>
                                                </div>
                                            </div>


                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>လစာနှင့်လစာနှုန်း</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary" class="form-control" value="{{ old('salary') }}" required="">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၉။') }}</label>
                                                </div>
                                            </div>


                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label> ရုံးလိပ်စာ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control" value="{{ old('office_address') }}" required="">
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၀။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 label_align_right">
                                                <div>
                                                    <label>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                </div>
                                            </div>

                                            <div class="col-md-2 form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" id="yes" class="form-check-input" value="1" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-check-label" for="">ဟုတ်</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <input type="radio" id="no" class="form-check-input" value="0" name="gov_staff" onclick="selectStaff()" required style="margin-left: 3%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-check-label" for="">မဟုတ်</label>
                                                        <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br/>

                                        <div id="rec_letter" style="display:none" >
                                        <div class="row mb-3"  >
                                                <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                <label for="" class="col-md-3 col-form-labe mt-1 label_align_right"> အထက်လူကြီး၏ထောက်ခံစာ</label>

                                                <div class="col-md-7"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                    <!-- <input type="file"  class="form-control" id="certificate0"  name="certificates[]" required=""> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၁။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11 ">
                                                <div>
                                                    <label>တက္ကသိုလ်တစ်ခုခုမှအောင်မြင်ပြီးခဲ့သော -</label>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <label for="" class="col-md-2 col-form-label label_align_right">ဘွဲ့အမည်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" class="form-control" value="{{ old('degree_name') }}" required="">
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label label_align_right">တက္ကသိုလ်အမည်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name" class="form-control" value="{{ old('university_name') }}" required="">
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label label_align_right">ခုံအမှတ်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="ခုံအမှတ်" name="roll_number" class="form-control" value="{{ old('roll_number') }}" required="">
                                            </div>
                                        </div><br>


                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label label_align_right">နှစ်၊လ</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date" class="form-control"  required="">
                                            </div>
                                        </div><br>

                                        <div  id="edu" >
                                            <div class="row mb-3" id="edu0" >
                                                <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label for="" class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                                <label for="" class="col-md-2 col-form-labe mt-1 label_align_right"> Attached Certificate</label>

                                                <div class="col-md-7"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="certificate0"  name="certificate[]" required="">
                                                    <!-- <input type="file"  class="form-control" id="certificate0"  name="certificates[]" required=""> -->
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAEdu()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><br>


                                        {{--
                                            <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <label> ဝင်ခွင့်ပုံစံ ရွေးပါ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                        <input type="radio" class="form-check-input" value="1" name="selected_name" onclick="selectEntry()" required>
                                                        <label class="form-check-label" for="yes">Direct</label>
                                                </div>
                                            </div>

                                             <div class="col-md-2 pt-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" value="2" name="selected_name" onclick="selectEntry()" required>
                                                                <label class="form-check-label" for="yes">Entry Pass</label>
                                                                <div class="invalid-feedback">ဝင်ခွင့်ပုံစံ ရွေးချယ်ပါ</div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                        --}}
                                                                                    
                                            <!-- Direct or DA Pass -->
                                            <!-- <div class="row" id="direct">
                                                <div class="col-md-12"> -->
                                                    <!-- <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="">
                                                                <label>{{ __('') }}</label>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-2">
                                                            <div class="">
                                                                <label>Attched Certificate</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="">
                                                                <input type="file" placeholder="upload photo" name="certificates[]" multiple value="{{ old('document') }}"  style="padding: 2%;">
                                                            </div>
                                                        </div>

                                            </div> -->
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="">
                                                    <label>{{ __('၂၂') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div>
                                                    <label>ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည် -</label>
                                                </div>

                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                                
                                            <label class="offset-md-1 col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <label class="col-md-2 label_align_right col-form-label">ခုနှစ်/လ</label>
                                            
                                            <div class="col-md-8">
                                                <div class="">
                                                    <input type="text" placeholder="ခုနှစ်" id="da_pass_date" name="da_pass_date" class="form-control year"  required="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                                
                                            <label class="offset-md-1 col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                            
                                            <label  class="col-md-2 label_align_right col-form-label">ခုံအမှတ်</label>
                                                
                                            <div class="col-md-8">
                                                    
                                                    <input type="text" placeholder="ခုံအမှတ်" id="da_pass_roll_number" name="da_pass_roll_number" class="form-control  ">
                                                
                                            </div>
                                            
                                        </div>

                                        <br>
                                        
                                        <div class="row">
                                                
                                                    
                                            <label class="offset-md-1 col-md-1  col-form-label">{{ __('(ဂ)') }} </label>
                                                    
                                            <label class="col-md-2 col-form-label">Attched Certificate</label>
                                                
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="file" class="form-control" placeholder="upload photo" name="da_pass_certificate"   value="{{ old('da_pass_certificate') }}"  >
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ‌Acca Cima -->
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၃') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div>
                                                    <label>ACCA/CIMA တက်ရောက်နေသူ -</label>
                                                </div>

                                            </div>
                                        </div>
                                                                                        <br>
                                        <div class="row">
                                            <label class=" col-md-1 col-form-label">{{ __('') }}</label>
                                            <label class="col-md-1  col-md-1 col-form-label">(က)</label>
                                            <label class="col-md-2  col-md-1 col-form-label label_align_right">အောင်မြင်ထားသည်အဆင့် </label>
                                                
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="အောင်မြင်ထားသည်အဆင့်" id="direct_degree" name="direct_degree" class="form-control"  >
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            
                                            <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                            <label class="col-md-1 col-form-label">(ခ)</label>
                                            <label class="col-md-2 col-form-label label_align_right"> ခုနှစ်/လ</label>
                                                
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="လ ၊ ခုနှစ်(MMM-YYYY)" id="degree_date" name="degree_date" class="form-control year"  >
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="">
                                                    <input type="year" placeholder="လ" id="acca_cima_exam_month" name="acca_cima_exam_month" class="form-control month" value="{{ old('roll_number') }}" required="">
                                                </div>
                                            </div> -->
                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            <label class="  col-md-1 col-form-label  ">{{ __('') }}</label>
                                            <label class="  col-md-1 col-form-label  ">(ဂ)</label>
                                            <label class="col-md-2  col-form-label label_align_right">သင်တန်းသားမှတ်ပုံတင်အမှတ်</label>
                                                
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="သင်တန်းသားမှတ်ပုံတင်အမှတ်" id="degree_rank" name="degree_rank" class="form-control" value="{{ old('roll_number') }}" >
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                                
                                            <label class="col-md-1 col-form-label "> </label>
                                            <label class="col-md-1 col-form-label  ">(ဃ)</label>
                                            <label class="col-md-2  col-form-label label_align_right">Attched Certificate</label>
                                                
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="file" class="form-control" placeholder="upload photo" name="deg_certi_img"  value="{{ old('document') }}"   required>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၄') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 ">
                                                <div>
                                                    <label>သင်တန်းတက်ရောက်လိုသည်နေရာ-</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <input type="radio" id="mac" class="form-check-input" value="2" name="type"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="mac">ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး၊ ရန်ကုန်သင်တန်းကျောင်း</label>
                                                        </div>
                                                    </div>
                                             
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="private" class="form-check-input" value="1" name="type"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="private">ကိုင်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်း</label>
                                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="self" class="form-check-input" value="0" name="type"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="self">ကိုင်ပိုင်လေ့လာသင်ယူမယ်သူများ</label>
                                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                                        </div>
                                                    </div>
                                               
                                                
                                        </div>

                                      
                                        <br/>

                                                        <!-- </div>


                                                        </div> -->
                                                    {{-- <div class="row" id="entry_pass">
                                                            <div class="col-md-12  " >
                                                            
                                                                <div id="active_entrance">
                                                                    <div class="row">
                                                                        <div class="col-md-1">
                                                                            <div>
                                                                                <label>{{ __('') }}</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-2">
                                                                            <div>
                                                                                <label>ဝင်ခွင့်စာမေးပွဲ ဖြေဆိုမယ်</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 mt-4" >
                                                                            <input type="checkbox" name="qt_entry"  id="qt_entry" value="1"  >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 offset-md-1 mt-1 " id="non_active">
                                                                    <p class="">ဝင်ခွင့်စာမေးပွဲ မရှိသေးပါ</p>
                                                                </div>



                                                            </div>
                                                        </div> 
                                                    --}}
                                       
                                        <div class="row m-4">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100" id="cpa_one_submit">{{ __('Submit') }}</button>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        </div>

                    </div>
                <!-- Form Wrapper Start -->

                <!-- Form Wrapper End -->
                </div><br><br>
            </div>


            <div class="comment-form da_to_cpa container">
                <div class="form-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="needs-validation" action="javascript:void();" method="post" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="card border-success">
                                    <div class="card-body m-3">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                        <br/>

                                        <input type="hidden" name="batch_id" id="batch_id" />

                                        <div class="row">
                                          <div class="col-md-8">
                                            <div class="row">
                                                <div class=col-md-3>
                                                    <div class="single-form">

                                                        <label >Batch Name</label>
                                                    </div>

                                                </div>
                                                <div class=col-md-9>
                                                    <div class="single-form">
                                                        <p id="batch_name" > </p>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <br>
                                            <div class="row">
                                                <div class=col-md-3>
                                                    <div>
                                                        <label>Payment</label>
                                                    </div>
                                                </div>
                                                <div class=col-md-9>
                                                    <div>
                                                        <p class="text-primary">Payment System Coming Soon...</p>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="col-md-7 pull-right">
                                                <img class="col-md-3 profile-style" id="da_to_cpa_preview_img" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">

                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        {{--<div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <label>ACCA/CIMA တက်ရောက်နေသူ -</label>
                                                </div>
                                            </div>
                                        </div>
                                                                                    <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('(က)') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div>
                                                        <label> အောင်မြင်ထားသည့်အဆင့် </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="">
                                                        <input type="text" placeholder="အောင်မြင်ထားသည့်အဆင့်" id="direct_degree" name="direct_degree" class="form-control"  required>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <br>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="">
                                                        <label>{{ __('(ခ)') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="">
                                                        <label> အောင်မြင်သည့် ခုနှစ်/လ</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="">
                                                        <input type="text" placeholder="လ၊နှစ်(MMM-YYYY)" id="degree_date" name="degree_date" class="form-control year" required >
                                                    </div>
                                                </div>

                                            </div>
                                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="">
                                                    <label>{{ __('(ဂ)') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="">
                                                        <label> သင်တန်သားမှတ်ပုံတင်အမှတ်</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="">
                                                        <input type="text" placeholder="သင်တန်သားမှတ်ပုံတင်အမှတ်" id="degree_rank" name="degree_rank" class="form-control" value="{{ old('roll_number') }}" required>
                                                    </div>
                                                </div>
                                            </div><br/>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="">
                                                        <label>{{ __('(ဃ)') }}</label>
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="">
                                                        <label> Attched Certificate</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-2">
                                                    <div class="">
                                                        <input type="file" class="form-control"placeholder="upload photo" name="deg_certi_img"  value="{{ old('document') }}" required>
                                                    </div>
                                                </div>

                                            </div>
                                         --}}                                                   <br>

                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                               <div class="col-md-4">
                                                   <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                          class="form-control" required="" disabled>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng"
                                                          class="form-control" required="" disabled>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                               <label for=""
                                                      class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                               <div class="col-md-8">
                                                   <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                       <div class="col-md-2 col-5 pr-1">
                                                           <input type="text" placeholder="" name="nrc_state_region"
                                                                  class="form-control" required="" disabled>
                                                       </div>
                                                       <div class="col-md-3 col-7 px-1">
                                                           <input type="text" placeholder="" name="nrc_township"
                                                                  class="form-control" required="" disabled>
                                                       </div>
                                                       <div class="col-md-2 col-5 px-1">
                                                         <input type="text" placeholder="" name="nrc_citizen"
                                                                class="form-control" required="" disabled>
                                                       </div>

                                                       <div class="col-md-5 col-7 pl-1">
                                                         <input type="text" placeholder="" name="nrc_number"
                                                                class="form-control" required="" disabled>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <br>
                                           {{--<div class="row">
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
                                           </div>--}}
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                               <div class="col-md-4">
                                                   <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm"
                                                          class="form-control" required="" disabled>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng"
                                                          class="form-control" required="" disabled>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">လူမျိုး</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="လူမျိုး" name="race" class="form-control"
                                                          value="{{ old('race') }}" required="" disabled>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion"
                                                          class="form-control" value="{{ old('religion') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                               <div class="col-md-8">
                                                   <input type="text" name="date_of_birth" class="form-control"
                                                          placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" disabled required>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone"
                                                          class="form-control" value="{{ old('phone') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="နေရပ်လိပ်စာ" name="address"
                                                          class="form-control" value="{{ old('address') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address"
                                                          class="form-control" value="{{ old('current_address') }}"
                                                          disabled
                                                          required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name" disabled
                                                          class="form-control" value="{{ old('name') }}" required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ရာထူး" name="position" disabled class="form-control"
                                                          value="{{ old('position') }}" required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ဌာန" name="department" class="form-control"
                                                          value="{{ old('department') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">အဖွဲ့အစည်း</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="အဖွဲ့အစည်း" name="organization"
                                                          class="form-control" value="{{ old('organization') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name"
                                                          class="form-control" value="{{ old('company_name') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary"
                                                          class="form-control" value="{{ old('salary') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>

                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                               <div class="col-md-8">
                                                   <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address"
                                                          class="form-control" value="{{ old('office_address') }}" disabled required="">
                                               </div>
                                           </div>
                                           <br>

                                           <div class="row">
                                               <label class="col-sm-1 col-form-label">{{ __('၁၇။') }}</label>
                                               <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                               <div class="col-md-2 pt-2">
                                                   <div class="form-check">
                                                       <div class="row">
                                                           <div class="col-md-4"><input type="radio"
                                                                                        class="form-check-input mr-3" id="yes"
                                                                                        name="gov_staff" value="1"
                                                                                        style="margin-left: 3%;" disabled required onclick="selectStaff()">
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
                                                                                        style="margin-left: 3%;" disabled required onclick="selectStaff()">
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
                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
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
                                                          class="form-control" value="" disabled>
                                               </div>
                                           </div>
                                           <br>

                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                               <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">တက္ကသိုလ်အမည်</label>
                                               <div class="col-md-7">
                                                   <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name"
                                                          class="form-control" value=""
                                                          disabled>
                                               </div>
                                           </div>
                                           <br>

                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                               <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">ခုံအမှတ်</label>
                                               <div class="col-md-7">
                                                   <input type="text" placeholder="ခုံအမှတ်" name="roll_number"
                                                          class="form-control" value="" disabled>
                                               </div>
                                           </div>
                                           <br>


                                           <div class="row">
                                               <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                               <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                               <label for="" class="col-md-3 col-form-label label_align_right">နှစ်၊လ</label>
                                               <div class="col-md-7">
                                                   <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date"
                                                          class="form-control" disabled>
                                               </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                            <div class="col-md-1">
                                                <div class="">
                                                    <label>{{ __('၁၉။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div>
                                                    <label>ဒီပလိုမာစာရင်းကိုင်(ဒုတိယပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည် -</label>
                                                </div>

                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                                
                                            <label class="offset-md-1 col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <label class="col-md-2 label_align_right col-form-label">ခုနှစ်/လ</label>
                                            
                                            <div class="col-md-8">
                                                <div class="">
                                                    <input type="text" readonly value="12-Aug-2020" placeholder="ခုနှစ်" id="da_pass_date" name="da_pass_date" class="form-control year"  required="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                                
                                            <label class="offset-md-1 col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                            
                                            <label  class="col-md-2 label_align_right col-form-label">ခုံအမှတ်</label>
                                                
                                            <div class="col-md-8">
                                                    
                                                    <input type="text" readonly value="15"  placeholder="ခုံအမှတ်" id="da_pass_roll_number" name="da_pass_roll_number" class="form-control  ">
                                                
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၂၀။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 ">
                                                <div>
                                                    <label>သင်တန်းတက်ရောက်လိုသည်နေရာ-</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <input type="radio" id="dmac" class="form-check-input" value="2" name="dtype"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="dmac">ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး၊ ရန်ကုန်သင်တန်းကျောင်း</label>
                                                        </div>
                                                    </div>
                                             
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="dprivate" class="form-check-input" value="1" name="dtype"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="dprivate">ကိုင်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်း</label>
                                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="dself" class="form-check-input" value="0" name="dtype"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="dself">ကိုင်ပိုင်လေ့လာသင်ယူမယ်သူများ</label>
                                                            <!-- <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div> -->
                                                        </div>
                                                    </div>
                                               
                                                
                                        </div>

                                      
                                        <br/>
                                           <div class="row m-4">
                                              <div class="col-md-2 offset-md-5">
                                                  <button type="submit" class="btn btn-success btn-hover-dark w-100"    data-bs-toggle="modal" data-bs-target="#paymentModal">{{ __('Submit') }}</button>
                                              </div>
                                           </div>
                                    </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div><br><br>



        </div>
    </div>
       <!-- Modal Payment -->
{{--<form id="payment_submit"  method="post"  class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div><br>
        <div class="modal-body">
            <div class="row justify-content-center mb-4 radio-group">
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" name="payment_method">
                    </div><br>
                    <h5>CBPay</h5>
                </div>
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" name="payment_method">
                    </div><br>
                    <h5>MPU</h5>
                </div>
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" name="payment_method">
                    </div><br>
                    <h5>CASH</h5>
                </div>
                <input type="hidden" name="payment_method" value="CASH">
            </div>
        </div><br>
        <div class="modal-footer">
            <center>
                <button type="submit" id="btn2" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal">Submit
            </center>
        </div>
        </div>
    </div>
    </div>
</form>--}}
<form method="post" class="needs-validation" id="store_da_two_form" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Exam Registeration Form Fee - ****** MMK</h4>
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
                                 <button type="submit" id="da1exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                             </center>
                         </div>
                     </div>
                     <br>
                 </div>
             </div>
         </div>
    </form>
    <!-- Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaEmailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <button type="submit" id="btn1" onclick="check_email_cpa()" class="btn btn-success btn-hover-dark w-30">Verify
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
    <form method="post" class="needs-validation" id="cpa_register" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                         data-value="CASH" name="payment_method" id="cash_img_app">
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
        check_entry_pass()
        localStorage.removeItem('course_type');
        localStorage.removeItem('batch_id');
        direct_or_da();

        $("input[name='degree_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
        });
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
        });
        $(".month").flatpickr({
                enableTime: false,
                 dateFormat: "m",

        });
        // $("input[name='year']").flatpickr({
        //         enableTime: false,
        //          dateFormat: "Y",

        // });

        // $("input[name='month']").flatpickr({
        //         enableTime: false,
        //          dateFormat: "m",

        // });
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput:true
        });
        $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput:true,
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

        function myanmarLetterOnly( self )
        {
            val = self.val();
            if ( /[a-zA-Z0-9]+$/.test( val ) ) {
              self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
            }
        }

            // $('#btn2').click(function () {
            //     setTimeout(function () {
            //         $('#paymentModal1').modal('hide');
            //     }, 1000);
            // });

            // $(document).on('click', '#channel', function () {
            //     setTimeout(function() {$('#paymentModal').modal('hide');}, 1000);
            //     $('#paymentModal1').modal('show');
            //     return true;
            // });

            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);

            selectedRegistration(urlParams.get("study_type"));

            if (localStorage.getItem("studentinfo") != null){
              get_student_info(student_id).then(data => {
                  if(data){
                      var info = data.data;
                      console.log("info >>>",info);
                      var job_history = data.data.student_job;
                      var education_history = data.data.student_education_histroy;
                      if(info){
                        $(".da_to_cpa").find("input[name=name_mm]").val(info.name_mm);
                        $(".da_to_cpa").find("input[name=name_eng]").val(info.name_eng);
                        $(".da_to_cpa").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                        $(".da_to_cpa").find("input[name=nrc_township]").val(info.nrc_township);
                        $(".da_to_cpa").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                        $(".da_to_cpa").find("input[name=nrc_number]").val(info.nrc_number);
                        $(".da_to_cpa").find("input[name=father_name_mm]").val(info.father_name_mm);
                        $(".da_to_cpa").find("input[name=father_name_eng]").val(info.father_name_eng);
                        $(".da_to_cpa").find("input[name=race]").val(info.race);
                        $(".da_to_cpa").find("input[name=religion]").val(info.religion);
                        $(".da_to_cpa").find("input[name=date_of_birth]").val(info.date_of_birth);
                        $(".da_to_cpa").find("input[name=phone]").val(info.phone);
                        $(".da_to_cpa").find("input[name=address]").val(info.address);
                        $(".da_to_cpa").find("input[name=current_address]").val(info.current_address);
                        document.getElementById('da_to_cpa_preview_img').src = BASE_URL + data.data.image;
                      }

                      if(job_history){
                        $(".da_to_cpa").find("input[name=name]").val(job_history.company_name);
                        $(".da_to_cpa").find("input[name=position]").val(job_history.position);
                        $(".da_to_cpa").find("input[name=department]").val(job_history.department);
                        $(".da_to_cpa").find("input[name=organization]").val(job_history.organization);
                        //$(".da_to_cpa").find("input[name=address]").val(job_history.address);
                        //$(".da_to_cpa").find("input[name=current_address]").val(job_history.current_address);
                        $(".da_to_cpa").find("input[name=company_name]").val(job_history.company_name);
                        $(".da_to_cpa").find("input[name=salary]").val(job_history.salary);
                        $(".da_to_cpa").find("input[name=office_address]").val(job_history.office_address);
                      }

                      if(education_history){
                        $(".da_to_cpa").find("input[name=degree_name]").val(education_history.degree_name);
                        $(".da_to_cpa").find("input[name=university_name]").val(education_history.university_name);
                        $(".da_to_cpa").find("input[name=roll_number]").val(education_history.roll_number);
                        $(".da_to_cpa").find("input[name=qualified_date]").val(education_history.qualified_date);
                      }
                      // government staff OR not
                      if(info.gov_staff == 1){
                        $(".da_to_cpa").find("input[name=gov_staff][value=1]").prop("checked",true);
                      }
                      else{
                        $(".da_to_cpa").find("input[name=gov_staff][value=0]").prop("checked",true);
                      }
                    }

                    //$(".da_to_cpa").find("input").prop('disabled',true);
              })
            }


    });

</script>
<script>
    //  $( "#cpa_one_submit" ).click(function() {
    //     if(allFilled('#cpa_one_form')){
    //         $('#cpaEmailModal').modal('show');
    //         send_email();
    //     }
    //     else{
    //     }
    // });
    // function allFilled(form_id) {
    //     var filled = true;

    //     $(form_id+' input').each(function() {
    //         if($(this).attr('id')=="batch_id")
    //         {   }
    //         else if( $(this).attr('id')=="registration_no")
    //         {   }
    //         else if( $(this).attr('id')=="approve_reject_status")
    //         {   }
    //         else{
    //             if($(this).val() == ''  ) filled = false;
    //         }
    //         //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
    //     });
    //     return filled;
    // }
        $('#btn_cash').click(function () {
            setTimeout(function () {
                $('#cpaPaymentModal').modal('hide');
            }, 1000);
        });

        $('#cash_img_app').click(function() {
            $('#btn_cash').prop('disabled', false);
        });

        $('#cb_img').click(function() {
            $('#btn_cash').prop('disabled', true);
        });

        $('#mpu_img').click(function() {
            $('#btn_cash').prop('disabled', true);
        });

        $('#btn_cash').prop('disabled', true);

</script>
@endpush
