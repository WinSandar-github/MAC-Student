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
                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                    <br/>


                                <form method="Post" id="cpa_register" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="">
                                                    <label>{{ __('၁။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="">
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
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
                                                <div>
                                                    <label>{{ __('၂။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div>
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="password" placeholder="Enter your Password!" name="password" class="form-control" value="{{ old('password') }}" required="">
                                                </div>
                                            </div>
                                        </div><br>


                                        <!-- </div> -->
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၃။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div>
                                                    <label>Confirm Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="password" placeholder="Enter your  Password again!" name="confirm_password" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၄။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
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
                                                    <label>{{ __('၆။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div>
                                                    <label>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div>
                                                    <div class="row">

                                                        <div class="col-md-2">
                                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                                @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <select class="form-control" name="nrc_township" id="nrc_township">
                                                                @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                        {{ $township['township_mm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                                @foreach($nrc_citizens as $citizen)
                                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-md-5">
                                                            <div>
                                                                <input type="text" name="nrc_number" id="nrc_number" class="form-control" placeholder="ဥပမာ။ ။ ၁၂၃၄၅၆" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');" required="" maxlength="6">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
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
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၇။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
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
                                                    <label>{{ __('၉။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
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
                                                    <label>{{ __('၁၀။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
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
                                                    <label>{{ __(' ၁၁။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div>
                                                    <label>မွေးသက္ကရာဇ်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)"  id="date_of_birth"  required>
                                                </div>
                                            </div>
                                        </div>
																				<br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၂။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
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
                                                    <label>{{ __('၁၃။') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
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
                                                    <label>{{ __('၁၄။') }}</label>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
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
                                                    <input class="form-control" type="file" placeholder="upload photo" accept="image/*" name="image" value="{{ old('image') }}" required=""  accept="image/*"  >
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၆။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(က) ') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <label>လက်ရှိအလုပ်အကိုင်</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="job_name" class="form-control" value="{{ old('name') }}" required="" id="name">
                                                </div>
                                            </div>
                                         </div><br>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(ခ)') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
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
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(ဂ)') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
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
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(ဃ)') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
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
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(င)') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
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
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(စ)') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
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
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('(ဆ)') }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
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
                                                    <label>{{ __('၁၇။') }}</label>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div>
                                                    <label>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်</label>
                                                </div>
                                            </div>

											<div class="col-md-2 form-check">
                                                <input type="radio" id="yes" class="form-check-input" value="0" name="gov_staff" required>
                                                <label class="form-check-label" for="">ဟုတ်</label>
                                            </div>

											<div class="col-md-2 form-check">
                                                <input type="radio" id="no" class="form-check-input" value="0" name="gov_staff" required>
                                                <label class="form-check-label" for="">မဟုတ်</label>
                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div>
                                            </div>
                                        </div><br/>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၈။') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div>
                                                    <label>တက္ကသိုလ်တစ်ခုခုမှအောင်မြင်ပြီးခဲ့သော -</label>
                                                </div>
                                            </div>
                                        </div>
										<br>
                                       <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div>
                                                    <label>(က)</label>
                                                </div>
                                            </div>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                            <label for="" class="col-md-2 col-form-label">ဘွဲ့အမည်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" class="form-control" value="{{ old('degree_name') }}" required="">
                                            </div>                                                
                                        </div><br>  

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label">တက္ကသိုလ်အမည်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name" class="form-control" value="{{ old('university_name') }}" required="">
                                            </div>                                                
                                        </div><br>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label">ခုံအမှတ်</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="ခုံအမှတ်" name="roll_number" class="form-control" value="{{ old('roll_number') }}" required="">
                                            </div>                                                
                                        </div><br>                                   
                                    

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                            <label for="" class="col-md-2 col-form-label">နှစ်၊လ</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date" class="form-control"  required="">
                                            </div>                                                
                                        </div><br>

                                        <div  id="edu" > 
                                            <div class="row mb-3" id="edu0" >
                                                <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                <label for="" class="col-md-1 col-form-label">{{ __('(င)') }}</label>                                                            
                                                <label for="" class="col-md-2 col-form-labe mt-1"> Attached Certificate</label>
                                                
                                                <div class="col-md-7"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="certificate0"  name="certificate0" required="">
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAEdu()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><br>

                                        </div>
										<br>
                                        {{--<div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="10%"></td>
                                                        <td width="90%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table id="myTable" class="table university_list table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight" rowspan="2">Sr</th>
                                                                                <th class="less-font-weight" rowspan="2">ဘွဲ့အမည်</th>
                                                                                <th class="less-font-weight" rowspan="2">တက္ကသိုလ်အမည်</th>
                                                                                <th class="less-font-weight" rowspan="2">ခုံအမှတ်</th>
                                                                                <th class="less-font-weight" rowspan="2">Certificate</th>
                                                                                <th class="less-font-weight" rowspan="2" style="text-align: right;">
                                                                                    <button class="btn btn-primary btn-sm" type="button" onclick='addRowUniversity("university_list")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td><input type="text" value="" name="uni_degree_name[]" class="form-control" autocomplete="off" required></td>
                                                                                <td><input type="text" value="" name="uni_name[]" class="form-control" autocomplete="off" required></td>
                                                                                <td><input type="text" value="" name="uni_roll_no[]" id="foa_pub_pri_reg_no" class="form-control" autocomplete="off" required></td>
                                                                                <td>
                                                                                    <div>
                                                                                        <input type="file" class="form-control" placeholder="upload photo" name="uni_certificate[]"  value="{{ old('document') }}"  style="padding: 2%;" required>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <button class="delete btn btn-danger btn-sm" type="button" onclick='delRowUniversity("university_list")'><i class="fa fa-trash"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>--}}
                                        {{--<div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <label>{{ __('၁၉။') }}</label>
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
                                        </div>--}}
																				<br>
                                        <!-- Direct or DA Pass -->
                                        <div class="row" id="direct">
                                            <div class="col-md-12">
                                                <!-- <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label>{{ __('') }}</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="single-form">
                                                            <label>Attched Certificate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <input type="file" placeholder="upload photo" name="certificates[]" multiple value="{{ old('document') }}"  style="padding: 2%;">
                                                        </div>
                                                    </div>

                                                </div> -->
                                                 <!-- ‌Acca Cima -->
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('') }}</label>
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
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>(က)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <label>အောင်မြင်ထားသည်အဆင့် </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div>
                                                            <input type="text" placeholder="အောင်မြင်ထားသည်အဆင့်" id="direct_degree" name="direct_degree" class="form-control"  >
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>(ခ)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <label>ခုနှစ်/လ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div>
                                                            <input type="text" placeholder="လ ၊ ခုနှစ်(MMM-YYYY)" id="degree_date" name="degree_date" class="form-control year"  >
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-4">
                                                        <div class="single-form">
                                                            <input type="year" placeholder="လ" id="acca_cima_exam_month" name="acca_cima_exam_month" class="form-control month" value="{{ old('roll_number') }}" required="">
                                                        </div>
                                                    </div> -->
                                                </div>
																								<br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>{{ __('') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>(ဂ)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <label>သင်တန်းသားမှတ်ပုံတင်အမှတ်</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div>
                                                            <input type="text" placeholder="သင်တန်းသားမှတ်ပုံတင်အမှတ်" id="degree_rank" name="degree_rank" class="form-control" value="{{ old('roll_number') }}" >
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div>
                                                            <label> </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div>
                                                            <label>(ဃ)</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div>
                                                            <label>Attched Certificate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div>
                                                            <input type="file" class="form-control" placeholder="upload photo" name="deg_certi_img"  value="{{ old('document') }}"   required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                         </div>
                                        <div class="row" id="entry_pass">
                                            <div class="col-md-12  " >
                                                 <!--
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label>{{ __('') }}</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="single-form">
                                                            <label>ခုနှစ်/လ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="single-form">
                                                            <input type="text" placeholder="ခုနှစ်" id="year" name="da_pass_year" class="form-control year"  required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="single-form">
                                                            <input type="text" placeholder="လ" id="month" name="da_pass_month" class="form-control month" value="{{ old('roll_number') }}" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label> </label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="single-form">
                                                            <label>Attched Certificate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <input type="file" placeholder="upload photo" name="certificates[]" multiple value="{{ old('document') }}"  style="padding: 2%;">
                                                        </div>
                                                    </div>

                                                </div> -->
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
                                        <div class="row m-4">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
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
                            <form class="needs-validation" id="store_da_two_form" method="post" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="card border-success">
                                    <div class="card-body m-3">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                        <br/>

                                        <input type="hidden" name="batch_id" id="batch_id" />
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
                                                                                    <br>
                                        <div class="row">
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
                                                    <div>
                                                        <input type="text" placeholder="အောင်မြင်ထားသည့်အဆင့်" id="direct_degree" name="direct_degree" class="form-control"  required>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <br>

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('(ခ)') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div>
                                                        <label> အောင်မြင်သည့် ခုနှစ်/လ</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <input type="text" placeholder="လ၊နှစ်(MMM-YYYY)" id="degree_date" name="degree_date" class="form-control year" required >
                                                    </div>
                                                </div>

                                            </div>
                                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                    <label>{{ __('(ဂ)') }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div>
                                                        <label> သင်တန်သားမှတ်ပုံတင်အမှတ်</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <input type="text" placeholder="သင်တန်သားမှတ်ပုံတင်အမှတ်" id="degree_rank" name="degree_rank" class="form-control" value="{{ old('roll_number') }}" required>
                                                    </div>
                                                </div>
                                            </div><br/>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label>{{ __('(ဃ)') }}</label>
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div>
                                                        <label> Attched Certificate</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-2">
                                                    <div class="">
                                                        <input type="file" class="form-control"placeholder="upload photo" name="deg_certi_img"  value="{{ old('document') }}" required>
                                                    </div>
                                                </div>

                                            </div>
                                                                                            <br>
                                            <div class="row m-4">
                                                <div class="col-md-2 offset-md-5">
                                                    <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                                </div>
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




    });

</script>
@endpush
