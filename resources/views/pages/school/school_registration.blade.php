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
        .form-group {
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
                    <h2 class="title">School Registration <span>Form</span></h2>
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

        <div class="container" style="overflow: hidden;">
            

            <div class="row mt-5">
                <div id="school_form" class="card border-success mb-3">
                    <div class="card-body">

                    {{--<form id="school_register_form" enctype="multipart/form-data" action="javascript:createSchoolRegister();" class="needs-validation" autocomplete="off" novalidate>--}}
                    <form id="school_register_form" enctype="multipart/form-data" action="javascript:void();" class="needs-validation" autocomplete="off" novalidate>
                            <div class="row">
                                <h5 class="p-4">လျှောက်ထားသူ၏အချက်အလက်များ</h5>
                            </div>

                            {{--User Photo--}}
                            <div class="row">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                             alt="Upload Photo">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div>
                                        <span class="btn btn-round btn-secondary btn-file">
                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            {{--User Photo--}}

                            <!-- Email -->
                            <div class="row">
                                {{-- <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>--}}
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၁။') }}</span>{{ __('အီးမေးလ်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" autocomplete='off'
                                               required placeholder="အီးမေးလ်လိပ်စာထည့်ပါ။">
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->

                            <!-- Password -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၂။') }}</span>{{ __('လျို့ဝှက်နံပါတ်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                               autocomplete='off' required
                                               placeholder="လျို့ဝှက်နံပါတ် ထည့်ပါ။">
                                    </div>
                                </div>
                            </div>
                            <!-- Password -->

                            <!-- Confirm Password -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၃။') }}</span>{{ __('လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" class="form-control"
                                               autocomplete='off' required
                                               placeholder="လျို့ဝှက်နံပါတ်ကို နောက်တစ်ကြိမ်ထပ်မံထည့်ပါ။">
                                    </div>
                                </div>
                            </div>
                            <!-- Confirm Password -->

                            <!-- Name -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၄။') }}</span>{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name_mm" id="name_mm" class="form-control"
                                                   autocomplete='off' placeholder="အမည်(မြန်မာ)" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name_eng" class="form-control"
                                                   placeholder="အမည်(အင်္ဂလိပ်)" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Name -->

                            <!-- NRC -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၅။') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region"
                                                    required="">
                                                <option value="" disabled selected>ရွေးပါ</option>
                                                @foreach($nrc_regions as $region)
                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" name="nrc_township" id="nrc_township"
                                                    required="">
                                                <option value="" disabled selected>ရွေးပါ</option>
                                                @foreach($nrc_townships as $township)
                                                    <option value="{{ $township['township_mm'] }}">
                                                        {{ $township['township_mm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                    required="">
                                                <option value="" disabled selected>ရွေးပါ</option>
                                                @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <input type="text" name="nrc_number" id="nrc_number"
                                                   placeholder="ဥပမာ။ ။၁၂၃၄၅၆" pattern=".{6,6}" class="form-control"
                                                   oninput="this.value=this.value.replace(/[^၀-၉]/g,'');" maxlength="6"
                                                   minlength="6" placeholder="" style="height: 38px" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- NRC -->

                            <!-- NRC Image -->
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail shadow">
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}"
                                                 alt="Upload Photo">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                         <span class="btn btn-secondary btn-round btn-file">
                                         <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အရှေ့)</span>
                                         <span class="fileinput-exists">Change</span>
                                         <input type="hidden" value=""><input type="file" id="nrc_front"
                                                                              name="nrc_front"
                                                                              value="{{ old('nrc_front') }}"
                                                                              accept="image/*" required>
                                         </span>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail shadow">
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}"
                                                 alt="Upload Photo">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                         <span class="btn btn-secondary btn-round btn-file">
                                         <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                         <span class="fileinput-exists">Change</span>
                                         <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back"
                                                                              value="{{ old('nrc_back') }}"
                                                                              accept="image/*" required>
                                         </span>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="row">

                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား
                                                    (အရှေ့)</label>
                                            </div>
                                            <div class="row nrc">
                                                <img class="nrc-image-style" id="previewNRCFrontImg"
                                                     src="/assets/images/blank-profile-picture-1.png"
                                                     accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                    <input type="file" class="nrc-custom-file-input form-control"
                                                           id="nrc_front" name="nrc_front"
                                                           value="{{ old('nrc_front') }}" accept="image/*"
                                                           onchange="previewNRCFrontImageFile(this);" required>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား
                                                    (အနောက်)</label>
                                            </div>
                                            <div class="row nrc">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCBackImg"
                                                     src="/assets/images/blank-profile-picture-1.png"
                                                     accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                    <input type="file" class="nrc-custom-file-input form-control"
                                                           id="nrc_back" name="nrc_back"
                                                           value="{{ old('nrc_back') }}" accept="image/*"
                                                           onchange="previewNRCBackImageFile(this);" required>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                            <!-- NRC Image -->

                            <!-- Father Name -->
                            <div class="row">
                                <label class="col-md-3 col-form-label text-end"><span
                                            class="pull-left">{{ __('၆။') }}</span>{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="father_name_mm" id="father_name_mm"
                                                       placeholder="အဘအမည်(မြန်မာ)" class="form-control"
                                                       autocomplete='off'
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="father_name_eng" class="form-control"
                                                       placeholder="အဘအမည်(အင်္ဂလိပ်)" autocomplete='off' required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Father Name -->

                            <!-- DOB -->
                            <div class="row">
                                <label class="col-md-3 col-form-label text-end"><span
                                            class="pull-left">{{ __('၇။') }}</span>{{ __('မွေးသက္ကရာဇ်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" id="dob" name="dob" placeholder="ရက်၊လ၊နှစ် (DD-MMM-YYYY)"
                                               class="form-control" autocomplete='off' required>
                                    </div>
                                </div>
                            </div>
                            <!-- DOB -->

                            <!-- Education -->
                            <div class="row">
                                <label class="col-md-3 col-form-label text-end"><span
                                            class="pull-left">{{ __('၈။') }}</span>{{ __('ပညာအရည်အချင်း') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="degree" class="form-control"
                                               placeholder="ပညာအရည်အချင်း" autocomplete='off' required>
                                    </div>
                                </div>
                            </div>
                            <!-- Education -->

                            <!-- လုပ်ငန်းဖွဲ့စည်းမှုပုံစံ -->
                            <div class="row mb-4">
                                <label class="col-md-3 col-form-label text-end">
                                    <span class="pull-left">{{ __('၉။') }}</span>
                                    {{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }}
                                </label>

                                <div class="col-sm-9 checkbox-radios">
                                    <div class="form-check px-0">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="school_type[]"
                                                   value='တစ်ဦးတည်းပိုင်လုပ်ငန်း' >
                                            <span class="form-check-sign"></span>
                                            တစ်ဦးတည်းပိုင်လုပ်ငန်း
                                        </label>
                                    </div>
                                    <div class="form-check px-0">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="school_type[]"
                                                   value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' >
                                            <span class="form-check-sign"></span>
                                            နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း
                                        </label>
                                    </div>
                                    <div class="form-check px-0">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="school_type[]"
                                                   value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောကုမ္ပဏီလီမိတက်' >
                                            <span class="form-check-sign"></span>
                                            တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောကုမ္ပဏီလီမိတက်
                                        </label>
                                    </div>
                                    <div class="form-check px-0">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="school_type[]"
                                                   value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း' >
                                            <span class="form-check-sign"></span>
                                            တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- လုပ်ငန်းဖွဲ့စည်းမှုပုံစံ -->

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-4"></div>--}}
                            {{--                                <div class="col-md-8 form-check">--}}
                            {{--                                    <input class="" type="checkbox" name="school_type[]" value='တစ်ဦးတည်းပိုင်လုပ်ငန်း'>--}}
                            {{--                                    <label class="">တစ်ဦးတည်းပိုင်လုပ်ငန်း </label>--}}
                            {{--                                    <label class="form-check-label type text-danger" style='display:none;float:right;'>ဆိုင်ရာတွင်အမှန်ခြစ်--}}
                            {{--                                        ခြစ်ပေးပါ</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-4"></div>--}}
                            {{--                                <div class="col-md-8 form-check">--}}
                            {{--                                    <input class="" type="checkbox" name="school_type[]"--}}
                            {{--                                           value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း'>--}}
                            {{--                                    <label class="">နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-4"></div>--}}
                            {{--                                <div class="col-md-8 form-check">--}}
                            {{--                                    <input type="checkbox" class="" name="school_type[]"--}}
                            {{--                                           value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ'>--}}
                            {{--                                    <label class="">တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-4"></div>--}}
                            {{--                                <div class="col-md-8 form-check">--}}
                            {{--                                    <input type="checkbox" class="" name="school_type[]"--}}
                            {{--                                           value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်'>--}}
                            {{--                                    <label class="">တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{-- လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း --}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၁၀။') }}</span>{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="attachment" name="attachment" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>
                            {{--လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း--}}

                            {{--ဆက်သွယ်ရန်လိပ်စာ--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၁၁။') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" name="address" style="resize:none;" class="form-control"
                                                  autocomplete='off' required></textarea>
                                    </div>
                                </div>
                            </div>
                            {{--ဆက်သွယ်ရန်လိပ်စာ--}}

                            {{--ဖုန်းနံပါတ်--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">{{ __('၁၂။') }}</span>{{ __('ဖုန်းနံပါတ်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="ဖုန်းနံပါတ်"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>
                            {{--ဖုန်းနံပါတ်--}}

                            <div class="row">
                                <h5 class="p-4">{{ __('သင်တန်းကျောင်းအချက်အလက်များ') }}</h5>
                            </div>

                            {{--ကျောင်းအမည်--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁။</span>{{ __('ကျောင်းအမည်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="school_name" class="form-control" autocomplete='off'
                                               required>
                                    </div>
                                </div>
                            </div>
                            {{--ကျောင်းအမည်--}}

                            {{--သင်ကြားမည့်သင်တန်း--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၂။</span>{{ __('သင်ကြားမည့်သင်တန်း') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <select name="attend_course[]" id="attend_course"
                                                class="form-control multiple-attend-course" multiple="multiple" required
                                                style="width:100%">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{--သင်ကြားမည့်သင်တန်း--}}

                            {{--ကျောင်းတည်နေရာလိပ်စာ--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၃။</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" style="resize:none;" name="school_address"
                                                  class="form-control" autocomplete='off' required></textarea>
                                    </div>
                                </div>
                            </div>
                            {{--ကျောင်းတည်နေရာလိပ်စာ--}}

                            {{--ပိုင်ဆိုင်မှုပုံစံ--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၄။</span>{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>

                                <div class="col-md-9">
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="private"
                                                   value="private" required>
                                            ကိုယ်ပိုင်
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="rent"
                                                   value="rent" required>
                                            အငှား
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type"
                                                   id="use_sharing" value="use_sharing" required>
                                            တွဲဖက်သုံး
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </div>

                                {{--<div class="col-md-9">
                                    <div class="form-group">
                                        <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="private"
                                                   value="private" required>
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="rent"
                                                   value="rent" required>
                                            <label class="form-check-label" for="">အငှား</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type"
                                                   id="use_sharing" value="use_sharing" required>
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                            {{--ပိုင်ဆိုင်မှုပုံစံ--}}

                            {{--ကျောင်းခွဲတည်နေရာလိပ်စာ--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၅။</span>{{ __('ကျောင်းခွဲတည်နေရာလိပ်စာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" style="resize:none;" name="branch_school_address"
                                                  class="form-control" autocomplete='off' required></textarea>
                                    </div>
                                </div>
                            </div>
                            {{--ကျောင်းခွဲတည်နေရာလိပ်စာ--}}

                            {{--ပိုင်ဆိုင်မှုပုံစံ--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၆။</span>{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>

                                <!-- <div class="col-md-9">
                                    <div class="form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                   id="private" value="private">
                                            ကိုယ်ပိုင်
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                   id="rent" value="rent">
                                            အငှား
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                   id="use_sharing" value="use_sharing">
                                            တွဲဖက်သုံး
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </div> -->

                                <div class="col-md-9">
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="private"
                                                   value="private" required>
                                            ကိုယ်ပိုင်
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="rent"
                                                   value="rent" required>
                                            အငှား
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                   id="use_sharing" value="use_sharing" required>
                                            တွဲဖက်သုံး
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{--ပိုင်ဆိုင်မှုပုံစံ--}}

                            <div class="row">
                                <h5 class="p-4">ပူးတွဲတင်ပြသည့်အထောက်အထားများ</h5>
                                {{--<label class="col-md-1 col-form-label"></label>
                                <label class="col-md-10 col-form-label"><b>{{ __('ပူးတွဲတင်ပြသည့်အထောက်အထားများ') }}</b></label>--}}
                            </div>

                            {{--လုပ်ငန်းလိုင်စင်--}}
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(က)</span>{{ __('လုပ်ငန်းလိုင်စင်') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="business_license" name="business_license"
                                               class="form-control" accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>
                            {{--လုပ်ငန်းလိုင်စင်--}}

                            {{--ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်--}}
                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ခ)</span>{{ __('ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="company_reg" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>
                            {{--ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်--}}

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဂ)</span>{{ __('အဖွဲ့အစည်း၏မှတ်ပုံတင်လက်မှတ်မူရင်းနှင့်မိတ္တူ') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="org_reg_origin_and_copy" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဃ)</span>{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="estiblisher_list_and_bio" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(င)</span>{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="governer_list_and_bio" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(စ)</span>{{ __('အဖွဲ့အစည်းဖြစ်ပါက သက်ဆိုင်ရာအဖွဲ့အစည်း၏ အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၃)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="org_member_list_and_bio" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဆ)</span>{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၄)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="teacher_list_and_bio" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဇ)</span>{{ __('ကောင်စီရုံးကထုတ်ပေးထားသည့်သင်တန်းဆရာမှတ်ပုံတင်မိတ္တူများ') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="teacher_reg_copy" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဈ)</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ(ပုံစံ-၅)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="school_location_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ည)</span>{{ __('ကျောင်းအဆောက်အဦ(ပုံစံ-၅)') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="school_building_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဋ)</span>{{ __('စာသင်ခန်း(ပုံစံ-၅)') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="classroom_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဌ)</span>{{ __('သန့်စင်ခန်း(ပုံစံ-၅)') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="toilet_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဍ)</span>{{ __('စီမံရုံးခန်း(ပုံစံ-၅)') }}</label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="manage_room_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဎ)</span>{{ __('အထောက်အကူအခင်းအကျင်းများကိုဓါတ်ပုံနှင့်တကွဖော်ပြချက်') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="supporting_structure_photo" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">(ဏ)</span>{{ __('အဆောက်အဦအခင်းအကျင်းများအားရယူသုံးစွဲပုံ') }}
                                </label>
                                
                                <div class="col-md-9">
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="using_type" id="private"
                                                   value="private" required>
                                            ကိုယ်ပိုင်
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check  form-check-inline">
                                            <input class="form-check-input" type="radio" name="using_type" id="rent"
                                                   value="rent" required>
                                            အငှား
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="using_type"
                                                   id="use_sharing" value="use_sharing" required>
                                            တွဲဖက်သုံး
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 label col-form-label"><span
                                            class="pull-left">(န)</span>{{ __('သက်ဆိုင်သည့်အထောက်အထားများ၊စာချုပ်စာတမ်းများ') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="relevant_evidence_contracts" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label"><span
                                            class="pull-left">(ပ)</span>{{ __('ကျောင်းတည်ထောင်ခြင်းအတွက်ရွေးချယ်ထားသည့်လုပ်ငန်းဖွဲ့စည်းမှုပုံစံအရပူးတွဲတင်ပြရမည့်အထောက်အထားများ(အစုအစပ်သဘောတူညီချက်/သင်းဖွဲ့စည်းမျဉ်း/သင်းဖွဲ့မှတ်တမ်း၊ဉပဒေနှင့်အညီရေးဆွဲပြုစုထားသောအခြားစာချုပ်စာတမ်းများ)') }}
                                </label>
                                <div class="col-md-9">
                                    <div class="mb-3 col-auto">
                                        <input type="file" id="" name="sch_establish_notes_attach" class="form-control"
                                               accept="application/pdf" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h5 class="p-4">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)နှင့်ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်') }}</h5>
                            </div>

                            <div id="sch_establish_error" style="display:none;">
                                <div class="row">
                                    <label class="text-danger col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)') }}</label>
                                <div class="tbl-responsive">
                                    <table class="table tbl_sch_established_persons table-bordered input-table">
                                        <thead>
                                        <tr>
                                            <th class="less-font-weight text-center">စဉ်</th>
                                            <th class="less-font-weight text-center">အမည်</th>
                                            <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                            <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                            <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                            <th class="less-font-weight text-center">ဆက်သွယ်ရန်လိပ်စာ</th>
                                            <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                            <th class="less-font-weight text-center">အီးမေးလ်</th>
                                            <th class="text-center">
                                                <button type="button" class="btn btn-success btn-sm btn-plus"
                                                        onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'>
                                                    <li class="fa fa-plus"></li>
                                                </button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbl_sch_established_persons_body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{--  <div class="row">
                                  <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                  <div class="col-md-10">
                                      <div class="tbl-responsive">
                                          <table class="table tbl_sch_established_persons table-bordered input-table">
                                              <thead>
                                              <tr>
                                                  <th class="less-font-weight text-center">စဉ်</th>
                                                  <th class="less-font-weight text-center">အမည်</th>
                                                  <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                  <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                                  <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                                  <th class="less-font-weight text-center">ဆက်သွယ်ရန်လိပ်စာ</th>
                                                  <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                                  <th class="less-font-weight text-center">အီးမေးလ်</th>
                                                  <th class="text-center">
                                                      <button type="button" class="btn btn-success btn-sm btn-plus"
                                                              onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'>
                                                          <li class="fa fa-plus"></li>
                                                      </button>
                                                  </th>
                                              </tr>
                                              </thead>
                                              <tbody class="tbl_sch_established_persons_body">

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>--}}

                            <div id="sch_governs_error" style="display:none;">
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ') }}</label>
                                <div class="tbl-responsive">
                                    <table class="table tbl_sch_governs table-bordered input-table">
                                        <thead>
                                        <tr>
                                            <th class="less-font-weight text-center">စဉ်</th>
                                            <th class="less-font-weight text-center">အမည်</th>
                                            <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                            <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                            <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                            <th class="less-font-weight text-center">တာဝန်</th>
                                            <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                            <th class="less-font-weight text-center">အီးမေးလ်</th>
                                            <th class="text-center">
                                                <button type="button" class="btn btn-success btn-sm btn-plus"
                                                        onclick='addRowSchGoverns("tbl_sch_governs")'>
                                                    <li class="fa fa-plus"></li>
                                                </button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbl_sch_governs_body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{--  <div class="row">
                                  <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                  <div class="col-md-10">
                                      <div class="tbl-responsive">
                                          <table class="table tbl_sch_governs table-bordered input-table">
                                              <thead>
                                              <tr>
                                                  <th class="less-font-weight text-center">စဉ်</th>
                                                  <th class="less-font-weight text-center">အမည်</th>
                                                  <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                  <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                                  <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                                  <th class="less-font-weight text-center">တာဝန်</th>
                                                  <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                                  <th class="less-font-weight text-center">အီးမေးလ်</th>
                                                  <th class="text-center">
                                                      <button type="button" class="btn btn-success btn-sm btn-plus"
                                                              onclick='addRowSchGoverns("tbl_sch_governs")'>
                                                          <li class="fa fa-plus"></li>
                                                      </button>
                                                  </th>
                                              </tr>
                                              </thead>
                                              <tbody class="tbl_sch_governs_body">

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>--}}

                            <div id="member_list_biography_error" style="display:none;">
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label">{{ __('အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                <div class="tbl-responsive">
                                    <table class="table tbl_member_list_biography table-bordered input-table">
                                        <thead>
                                        <tr>
                                            <th class="less-font-weight text-center">စဉ်</th>
                                            <th class="less-font-weight text-center">အမည်</th>
                                            <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                            <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                            <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                            <th class="less-font-weight text-center">တာဝန်</th>
                                            <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                            <th class="less-font-weight text-center">အီးမေးလ်</th>
                                            <th class="text-center">
                                                <button type="button" class="btn btn-success btn-sm btn-plus"
                                                        onclick='addRowMembershipBio("tbl_member_list_biography")'>
                                                    <li class="fa fa-plus"></li>
                                                </button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbl_member_list_biography_body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{--<div class="row">
                                <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                <div class="col-md-10">
                                    <div class="tbl-responsive">
                                        <table class="table tbl_member_list_biography table-bordered input-table">
                                            <thead>
                                            <tr>
                                                <th class="less-font-weight text-center">စဉ်</th>
                                                <th class="less-font-weight text-center">အမည်</th>
                                                <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                                <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                                <th class="less-font-weight text-center">တာဝန်</th>
                                                <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                                <th class="less-font-weight text-center">အီးမေးလ်</th>
                                                <th class="text-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-plus"
                                                            onclick='addRowMembershipBio("tbl_member_list_biography")'>
                                                        <li class="fa fa-plus"></li>
                                                    </button>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="tbl_member_list_biography_body">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>--}}

                            <div id="teacher_list_bio_error" style="display:none;">
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                <div class="tbl-responsive">
                                    <table class="table tbl_teacher_list_biography table-bordered input-table">
                                        <thead>
                                        <tr>
                                            <th class="less-font-weight text-center">စဉ်</th>
                                            <th class="less-font-weight text-center">အမည်</th>
                                            <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                            <th class="less-font-weight text-center">သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                            <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                            <th class="less-font-weight text-center">သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                            <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                            <th class="less-font-weight text-center">အီးမေးလ်</th>
                                            <th class="text-center">
                                                <button type="button" class="btn btn-success btn-sm btn-plus"
                                                        onclick='addRowTeacherBio("tbl_teacher_list_biography")'>
                                                    <li class="fa fa-plus"></li>
                                                </button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbl_teacher_list_biography_body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{--<div class="row">
                                <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                <div class="col-md-10">
                                    <div class="tbl-responsive">
                                        <table class="table tbl_teacher_list_biography table-bordered input-table">
                                            <thead>
                                            <tr>
                                                <th class="less-font-weight text-center">စဉ်</th>
                                                <th class="less-font-weight text-center">အမည်</th>
                                                <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                <th class="less-font-weight text-center">သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                                <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                                <th class="less-font-weight text-center">သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                                <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                                <th class="less-font-weight text-center">အီးမေးလ်</th>
                                                <th class="text-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-plus"
                                                            onclick='addRowTeacherBio("tbl_teacher_list_biography")'>
                                                        <li class="fa fa-plus"></li>
                                                    </button>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="tbl_teacher_list_biography_body">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="row">
                                <h5 class="p-4">{{ __('ကျောင်းတည်ရာလိပ်စာ၊ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</h5>
                                {{--<label class="col-form-label"><b>{{ __('ကျောင်းတည်ရာလိပ်စာ၊ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</b></label>--}}
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁။</span>{{ __('ကျောင်းတည်ရာလိပ်စာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" name="school_location" style="resize:none;"
                                                  class="form-control" autocomplete='off' required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၂။</span>{{ __('ကျောင်းခွဲတည်ရာလိပ်စာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" style="resize:none;" name="branch_school_location"
                                                  class="form-control" autocomplete='off' required></textarea>
                                    </div>
                                </div>
                            </div>

                        <!-- <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းအဆောက်အဦး(အဆောက်အဦအမျိုးအစား/အတိုင်းအတာ/အထပ်အရေအတွက်)') }}</b></label>
                                </div> -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၃။</span>{{ __('အဆောက်အဦးအမျိုးအစား') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="bulding_type" class="form-control" autocomplete='off'
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၄။</span>{{ __('အတိုင်းအတာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="building_measurement" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၅။</span>{{ __('အထပ်အရေအတွက်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="floor_numbers" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                        <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စာသင်ခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ/ဝင်ဆံ့သင်တန်းသား/လေအေးပေးစက်)') }}</label>
                                </div> -->

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၆။</span>{{ __('အခန်းအရေအတွက်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="classroom_number" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၇။</span>{{ __('အတိုင်းအတာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="classroom_measurement" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၈။</span>{{ __('ဝင်ဆံ့သင်တန်းသား') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="student_num_limit" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၉။</span>{{ __('လေအေးပေးစက်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="air_con" class="form-control" autocomplete='off'
                                               required>
                                    </div>
                                </div>
                            </div>

                        <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('သန့်စင်ခန်း(အမျိုးအစား/အရေအတွက်)') }}</label>
                                </div> -->

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁၀။</span>{{ __('အမျိုးအစား') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="toilet_type" class="form-control" autocomplete='off'
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁၁။</span>{{ __('အရေအတွက်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="toilet_number" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                        <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စီမံရုံးခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ)') }}</label>
                                </div> -->
                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁၂။</span>{{ __('အခန်းအရေအတွက်') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="manage_room_numbers" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label label"><span
                                            class="pull-left">၁၃။</span>{{ __('အတိုင်းအတာ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="manage_room_measurement" class="form-control"
                                               autocomplete='off' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label text-dark">{{ __('မှတ်ချက်။လျှောက်လွှာကြေး ၁၀၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၅၀၀,၀၀၀ကျပ်၊နှစ်စဥ်ကြေး ၃၀၀,၀၀၀ကျပ်') }}</label>
                            </div>

                            <div class="row m-4">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" id="school_submit"
                                            class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <form method="post" class="needs-validation" action="javascript:schoolPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="schoolpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">School Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="school_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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
        <div class="modal fade" id="schoolModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Verificatoin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                            <label>We have been sent verification code on your email.Please check your email.</label>
                        </div>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label style="margin-bottom: 2%;">Enter your verification code</label>
                            <center><input type="text" class="form-control w-50" name="verify_code"
                                           placeholder="Code must have 6 digits (eg. 1234)"></center>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn1" onclick="check_email_school()"
                                class="btn btn-success btn-hover-dark w-30">Send Verification Code
                        </button>
                    </center>
                    <br>
                    <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>
    <!-- JavaScript Section -->

    <style>
        .btn-round {
            border-width: 1px;
            border-radius: 30px;
            padding-right: 23px;
            padding-left: 23px
        }
    </style>

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

            $("#school_register_form").submit(function (event) {
                var tbl_establish = $('.tbl_sch_established_persons_body tr').length;
                var tbl_governs = $('.tbl_sch_governs_body tr').length;
                var tbl_member_list_bio = $('.tbl_member_list_biography_body tr').length;
                var tbl_teacher_list_bio = $('.tbl_teacher_list_biography_body tr').length;

                if (!tbl_establish) {
                    $("#sch_establish_error").css('display', 'block');
                    event.preventDefault();
                }
                if (!tbl_governs) {
                    $("#sch_governs_error").css('display', 'block');
                    event.preventDefault();
                }
                if (!tbl_member_list_bio) {
                    $("#member_list_biography_error").css('display', 'block');
                    event.preventDefault();
                }
                if (!tbl_teacher_list_bio) {
                    $("#teacher_list_bio_error").css('display', 'block');
                    event.preventDefault();
                }

                //validate school_type checkbox
                var checkedNum = $('input[name="school_type[]"]:checked').length;
                if (!checkedNum) {
                    $(".type").show();
                } else {
                    $(".type").hide();
                }
            });

            $('.multiple-attend-course').select2({
                placeholder: "Select Requirement"
            });

            $('input[type=checkbox][name="school_type[]"]').change(function () {
                var checkedNum = $('input[name="school_type[]"]:checked').length;
                if (!checkedNum) {
                    $(".type").show();
                } else {
                    $(".type").hide();
                }
            });

            $("input[name='dob']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
            });

            $("input[id*='name_mm'], text[id*='name_mm']").on('keyup', function (e) {
                myanmarLetterOnly($(this));
            });
            $(document).on('keydown', '#name_mm', function () {
                myanmarLetterOnly($(this));
            });
            $("input[id*='father_name_mm'], text[id*='father_name_mm']").on('keyup', function (e) {
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

            school_reg_feedback();
            checkPaymentSchool();
        });

        getCourses();

    </script>
@endpush
