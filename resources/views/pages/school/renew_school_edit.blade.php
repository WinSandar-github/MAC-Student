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
        .error-border{
            border: 1px solid red;
        }
    </style>
@section('content')
    <div class="main-wrapper">
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
                    <h2 class="title">School Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}"
                     alt="Shape">

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
            <div class="row mt-5">
                <div class="card border-success mb-3" id="school_renew_form" >
                    <div class="card-body p-4">
                            <div class="row mb-3">
                                <h5 class="card-title text-center fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                <h5 class="card-title text-center fw-bolder">ကျောင်းမှတ်ပုံတင်သက်တမ်းတိုးလျှောက်လွှာ</h5>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-10"></div>
                                <label class="col-md-2 col-form-label fw-bolder">ကျောင်းပုံစံ-၆</label>
                                                                
                            </div>
                            <form method="post" action="javascript:renewUpdateSchool();" enctype="multipart/form-data" id="school_renew_form_data">
                            <div class="row mb-3">
                                <div class="col-md-8">

                                    <div class="row mb-5">
                                        <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('အီးမေးလ်') }}</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' readonly>
                                                </div> 
                                                <div class="col-md-6">
                                                    <input type="text" name="name_eng" class="form-control"autocomplete='off' readonly>
                                                                            
                                                </div>
                                            </div>                  
                                        </div>
                                        
                                    </div>
                                    <!-- Father Name -->
                                    <div class="row mb-3">
                                        <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="father_name_mm" id="father_name_mm"
                                                    readonly class="form-control"
                                                            autocomplete='off'
                                                            >

                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="father_name_eng" class="form-control"
                                                    readonly autocomplete='off' >

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Father Name -->
                                    
                                </div>
                                <div class="col-md-4 text-center">
                                        <div class="col-md-8 pull-right">
                                            
                                            {{--User Photo--}}
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" 
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
                                                        <p >
                                                            <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                        </p>
                                                    </div>
                                            {{--User Photo--}}
                                        </div>
                                  
                                </div> 
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span
                                            class="pull-left">{{ __('၄။') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}
                                </label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                <div class="col-md-2">
                                                        <input type='text' class="form-control" name="nrc_state_region" id="nrc_state_region" readonly>
                                                        <!-- @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach -->
                                                        
                                                </div>
                                                <div class="col-md-3">
                                                        <input type='text' class="form-control" name="nrc_township" id="nrc_township" readonly>
                                                            <!-- @foreach($nrc_townships as $township)
                                                                <option value="{{ $township['township_mm'] }}">
                                                                    {{ $township['township_mm'] }}
                                                                </option>
                                                            @endforeach -->
                                                        
                                                </div>
                                                <div class="col-md-2 ">
                                                    <input type='text' class="form-control" name="nrc_citizen" id="nrc_citizen"  readonly>
                                                        <!-- @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach -->
                                                    
                                                </div>
                                                <div class="col-md-5 ">
                                                    <input type="text" name="nrc_number" id="nrc_number"  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" readonly style="height: 38px" autocomplete='off'>
                                                </div>
                                                </div>
                                            </div>
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">{{ __('') }}</label>
                                    <input type="hidden" id="hidden_nrc_front">
                                    <input type="hidden" id="hidden_nrc_back">
                                    <input type="hidden" id="school_id">
                                    <input type="hidden" id="student_info_id">
                                    <input type="hidden" id="branch_own_type_h">
                                    <input type="hidden" id="hinitial_status">
                                    <input type="hidden" id="type">
                                    <input type="hidden" id="from_valid_date">
                                    <input type="hidden" id="initial_reject" value="This user is rejecter but this user is updated">
                                    <div class="col-md-8">
                                        
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_front_img" src="{{ asset('assets/images/image_placeholder.png') }}"
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
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_back_img" src="{{ asset('assets/images/image_placeholder.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back"
                                                                                        value="{{ old('nrc_back') }}"
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <!-- <div class="row mb-3">
                                    
                                    <label class="col-md-4 col-form-label text-end"><span class="pull-left">{{ __('၅။') }}</span>{{ __('မွေးသက္ကရာဇ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob"  class="form-control" autocomplete='off' readonly>
                                        </div>
                                    </div>
                            </div> -->

                            
                                      
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span
                                            class="pull-left">{{ __('၅။') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ(မြန်မာ)') }}</label>
                                <div class="col-md-8">
                                    <textarea type="text" name="address" style="resize:none;" class="form-control"
                                                  autocomplete='off' ></textarea>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span
                                            class="pull-left">{{ __('၆။') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ(အင်္ဂလိပ်)') }}</label>
                                <div class="col-md-8">
                                    <textarea type="text" name="eng_address" style="resize:none;" class="form-control"
                                                  autocomplete='off' ></textarea>

                                </div>
                            </div>

                            <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('၇။') }}</span>{{ __('ဖုန်းနံပါတ်') }}</label>
                                        <div class="col-md-8">
                                            <input type="text" name="phone" class="form-control"  autocomplete='off'>
                                        </div>
                                    
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">၈။</span>ကျောင်းမှတ်ပုံတင်အမှတ်</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="regno" readonly>
                                        
                                    </div>
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">၉။</span>ကျောင်းမှတ်ပုံတင်ကတ်ပြား</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" id="school_card" name="school_card" >
                                        
                                    </div>
                            </div>
                            <div class="row mb-3">
                                        <label class="col-md-4"></label>
                                        <div class="col-md-8 school_card_letter">
                                            <input type="hidden" class="form-control" id="hschool_card" >
                                            
                                        </div>
                            </div>
                                <!-- <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">၉။</span>Applied Date</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="register_date" readonly>
                                        
                                    </div>
                                </div> -->
                                <!-- <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">၉။</span>Status</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="message" readonly>
                                       
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label class="col-md-8 col-form-label label"><span
                                                class="pull-left">၁၀။</span>{{ __('ယခင်မှတ်ပုံတင်ထားသည့်အချက်အလက်များမှပြောင်းလဲလိုသည့်အချက်အလက်များ') }}</label>

                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        
                                        <div class="form-group">
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_one" onclick="formType(this)"> ကျောင်းပုံစံ-၁
                                                
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_two" onclick="formType(this)" > ကျောင်းပုံစံ-၂
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_three" onclick="formType(this)" > ကျောင်းပုံစံ-၃
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_four" onclick="formType(this)" > ကျောင်းပုံစံ-၄
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_five" onclick="formType(this)" > ကျောင်းပုံစံ-၅
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_one" style="display:none;">
                                    <div class="row mb-3">
                                        
                                        <label class="col-md-4 col-form-label text-end"><span class="pull-left">{{ __('၁။') }}</span>{{ __('ပညာအရည်အချင်း') }}</label>
                                        <div class="col-md-8">
                                            <table class="table tbl_degree table-bordered input-table">
                                                <thead>
                                                    <tr >
                                                        <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                        <th class="less-font-weight text-center"  width="40%">တက္ကသိုလ်/ဘွဲ့/ဒီပလိုမာ</th>
                                                        <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                        <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbl_degree_body">

                                                </tbody>
                                            </table>

                                        </div>
                                </div>

                                <div class="row mb-4">
                                        <label class="col-md-4 col-form-label text-end">
                                            <span class="pull-left">{{ __('၂။') }}</span>
                                            {{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }}
                                        </label>

                                        <input type="hidden" id="hidden_school_type">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type1"
                                                            value='PCS' onclick="origanzationCheck(this)"> တစ်ဦးတည်းပိုင်လုပ်ငန်း
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type2"
                                                            value='PCP' onclick="origanzationCheck(this)"> နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type3"
                                                            value='PCC' onclick="origanzationCheck(this)"> တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောကုမ္ပဏီလီမိတက်
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type4"
                                                            value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း' onclick="origanzationCheck(this)"> တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">{{ __('၃။') }}</span>{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}
                                    </label>
                                    <div class="col-md-8">

                                        <div class="controls1">
                                            <div class="entry1">
                                                <div class="row mb-3">
                                                    <div class="col-md-11 col-auto">
                                                        <input type="file" class="form-control" id="attachment" name="attachment[]" accept="image/*,.pdf" >

                                                    </div>
                                                    <div class="col-md-1 col-auto">
                                                        <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls1","entry1")'>
                                                            <li class="fa fa-plus"></li>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"></div>
                                    <input type="hidden" id="hidden_attachment">
                                    <div class="col-md-8 view_attachment"></div>
                                </div>
                                    <div class="row ">
                                        <h5 class="p-4 fw-bolder">{{ __('သင်တန်းကျောင်းအချက်အလက်များ') }}</h5>
                                    </div>
                                    <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">၁။</span>{{ __('ကျောင်းအမည်') }}</label>
                                            <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="school_name" class="form-control" autocomplete='off' >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">၂။</span>{{ __('သင်ကြားမည့်သင်တန်း') }}</label>
                                            <div class="col-md-8">
                                                <select name="attend_course[]" id="attend_course"
                                                        class="form-control multiple-attend-course" multiple="multiple" 
                                                        style="width:100%">
                                                </select>
                                            </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၃။</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ(မြန်မာ)') }}</label>
                                        <div class="col-md-8">
                                            <textarea type="text" style="resize:none;" name="school_address"
                                                        class="form-control" autocomplete='off' ></textarea>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၄။</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ(အင်္ဂလိပ်)') }}</label>
                                        <div class="col-md-8">
                                            <textarea type="text" style="resize:none;" name="eng_school_address"
                                                        class="form-control" autocomplete='off' ></textarea>

                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <label class="col-md-4 col-form-label label">ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</label>
                                        <div class="col-md-8">
                                            <div class="mb-3 col-auto">
                                                <input type="file" id="" name="school_location_attach" class="form-control"
                                                    accept="image/*,.pdf" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"></div>
                                        <input type="hidden" id="hidden_school_location_attach">
                                        <div class="col-md-8 view_school_location_attach">

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">၅။</span>{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>

                                        <div class="col-md-8">
                                            
                                            <div class="form-group">
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type" id="private"
                                                        value="private" onclick="ownTypeForm()"> ကိုယ်ပိုင်
                                                    
                                                </div>
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type" id="rent"
                                                        value="rent" onclick="ownTypeForm()" > အငှား
                                                </div>
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type"
                                                        id="use_sharing" value="use_sharing" onclick="ownTypeForm()" > တွဲဖက်သုံး
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ownType_letter">
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-labe mt-1 label_align_right"> သက်ဆိုင်သည့် အထောက်အထား စာချုပ်စာတမ်းများ</label>

                                                    <div class="col-md-8">
                                                        
                                                        

                                                            <div class="controls3">
                                                                <div class="entry3">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" id="own_type_letter" name="own_type_letter[]" accept="image/*,.pdf" >

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls3","entry3")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="row mb-3">
                                            <div class="col-md-4"></div>
                                            <input type="hidden" id="hidden_own_type_letter">
                                            <div class="col-md-8 view_ownType_letter">

                                            </div>
                                    </div>
                                        
                                        <div class="row mb-3">

                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">၆။</span>{{ __('ကျောင်းခွဲတည်နေရာလိပ်စာ') }}</label>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-12" style="width: 100%;overflow-x: scroll;">
                                                    <table class="table tbl_branch_school table-bordered text-nowrap" id="tbl_branch_school">
                                                        <thead class="text-nowrap">
                                                            <tr>
                                                                <th class="less-font-weight text-center"  >စဉ်</th>
                                                                <th class="less-font-weight text-center" >ကျောင်းခွဲတည်နေရာလိပ်စာ</th>
                                                                <th class="less-font-weight text-center"  >ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</th>
                                                                <th class="less-font-weight text-center"  >ပိုင်ဆိုင်မှုပုံစံ</th>
                                                                <th class="less-font-weight text-center" >သက်ဆိုင်သည့် အထောက်အထား စာချုပ်စာတမ်းများ</th>
                                                                <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowBranchSchool("tbl_branch_school")'><li class="fa fa-plus"></li></button></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbl_branch_school_body">

                                                        </tboddy>
                                                    </table>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('ပူးတွဲတင်ပြသည့်အထောက်အထားများ') }}</h5>
                                    </div>
                                    {{--လုပ်ငန်းလိုင်စင်--}}
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">(က)</span>{{ __('လုပ်ငန်းလိုင်စင်/ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်/အဖွဲ့အစည်း၏မှတ်ပုံတင်လက်မှတ်မူရင်းနှင့်မိတ္တူ') }}</label>
                                        <div class="col-md-8">

                                            <div class="controls2">
                                                <div class="entry2">
                                                    <div class="row mb-3">
                                                        <div class="col-md-11 col-auto">
                                                            <input type="file" class="form-control" id="business_license" name="business_license[]" accept="image/*,.pdf" >

                                                        </div>
                                                        <div class="col-md-1 col-auto">
                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls2","entry2")'>
                                                                <li class="fa fa-plus"></li>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                            <div class="col-md-4"></div>
                                            <input type="hidden" id="hidden_business_license">
                                            <div class="col-md-8 view_business_license">

                                            </div>
                                    </div>
                                    {{--လုပ်ငန်းလိုင်စင်--}}
                                    <div class="row">
                                        <label class="col-md-4 col-form-label"><span
                                                    class="pull-left">(ခ)</span>{{ __('ကျောင်းတည်ထောင်ခြင်းအတွက်ရွေးချယ်ထားသည့်လုပ်ငန်းဖွဲ့စည်းမှုပုံစံအရပူးတွဲတင်ပြရမည့်အထောက်အထားများ(အစုအစပ်သဘောတူညီချက်/သင်းဖွဲ့စည်းမျဉ်း/သင်းဖွဲ့မှတ်တမ်း၊ဉပဒေနှင့်အညီရေးဆွဲပြုစုထားသောအခြားစာချုပ်စာတမ်းများ)') }}
                                        </label>
                                        <div class="col-md-8">

                                            <div class="controls7">
                                                <div class="entry7">
                                                    <div class="row mb-3">
                                                        <div class="col-md-11 col-auto">
                                                            <input type="file" class="form-control" id="sch_establish_notes_attach" name="sch_establish_notes_attach[]" accept="image/*,.pdf" >

                                                        </div>
                                                        <div class="col-md-1 col-auto">
                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls7","entry7")'>
                                                                <li class="fa fa-plus"></li>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4"></div>
                                        <input type="hidden" id="hidden_sch_establish_notes_attach">
                                        <div class="col-md-8 view_sch_establish_notes_attach"></div>
                                    </div>
                                </div>
                                <div class="form_type_two" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <label class="col-md-2 col-form-label fw-bolder">ကျောင်းပုံစံ-၂</label>
                                                        
                                    </div>

                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)နှင့်ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်') }}</h5>
                                    </div>
                                    
                                    <div class="row mb-3">
                                            <label class="col-form-label fw-bolder">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)') }}</label>
                                            <div class="tbl-responsive">
                                                    <table class="table tbl_sch_established_persons table-bordered input-table">
                                                        <thead>
                                                            <tr >
                                                                <th class="less-font-weight text-center"  >စဉ်</th>
                                                                <th class="less-font-weight text-center"  >အမည်</th>
                                                                <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                                <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                                <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                                <th class="less-font-weight text-center"  >ဆက်သွယ်ရန်လိပ်စာ</th>
                                                                <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                                <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                                <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'><li class="fa fa-plus"></li></button></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbl_sch_established_persons_body">

                                                        </tbody>
                                                    </table>
                                                
                                            </div>
                                    </div>
                                    
                                    <div class="row mb-5">
                                        <label class="col-form-label fw-bolder">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ') }}</label>
                                        <div class="tbl-responsive">
                                            <table class="table tbl_sch_governs table-bordered input-table">
                                                <thead>
                                                    <tr >
                                                        <th class="less-font-weight text-center"  >စဉ်</th>
                                                        <th class="less-font-weight text-center"  >အမည်</th>
                                                        <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                        <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                        <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                        <th class="less-font-weight text-center"  >တာဝန်</th>
                                                        <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                        <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                        <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchGoverns("tbl_sch_governs")'><li class="fa fa-plus"></li></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbl_sch_governs_body">

                                                </tbody>
                                            </table>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_three" style="display:none;">
                                    <div class="row">
                                            <div class="col-md-10"></div>
                                            <label class="col-md-2 col-form-label fw-bolder">ကျောင်းပုံစံ-၃</label>
                                                            
                                    </div>
                                    <div id="member_list_biography_error" style="display:none;">
                                        <div class="row">
                                            <label class="col-md-1 col-form-label"></label>
                                            <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-form-label fw-bolder">{{ __('အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
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
                                </div>
                                <div class="form_type_four" style="display:none;">
                                    <div class="row">
                                            <div class="col-md-10"></div>
                                            <label class="col-md-2 col-form-label fw-bolder">ကျောင်းပုံစံ-၄</label>
                                                            
                                    </div>
                                    
                                    <input type="hidden" id="student_info_id" >
                                    <div class="row mb-1">
                                        <label class="col-form-label fw-bolder">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                        <div class="col-md-12" style="width: 100%;overflow-x: scroll;">
                                            <table class="table tbl_teacher_list_biography table-bordered input-table">
                                                <thead class="text-nowrap">
                                                <tr>
                                                    <th class="less-font-weight text-center">စဉ်</th>
                                                    <th class="less-font-weight text-center">သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                                    <th class="less-font-weight text-center">သင်တန်းဆရာအမည်</th>
                                                    <th class="less-font-weight text-center">နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center">ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center">သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                                    <th class="less-font-weight text-center">ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center">အီးမေးလ်</th>
                                                    <th class="less-font-weight text-center">သင်တန်းဆရာမှတ်ပုံတင်မိတ္တူများ</th>
                                                    <th class="text-center">
                                                        <button type="button" class="btn btn-success btn-sm btn-plus"
                                                                onclick='addRowTeacherBio("tbl_teacher_list_biography")'>
                                                            <li class="fa fa-plus"></li>
                                                        </button>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="tbl_teacher_list_biography_body" id="tbl_teacher_list_biography_body">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_five" style="display:none">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <label class="col-md-2 col-form-label fw-bolder">ကျောင်းပုံစံ-၅</label>
                                                        
                                    </div>
                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</h5>
                                    </div>
                                    <div class="row">
                                    <label class="col-md-12 col-form-label fw-bolder"><span
                                            class="pull-left">၁။</span>{{ __('ကျောင်းအဆောက်အဦ(အဆောက်အဦအမျိုးအစား၊အတိုင်းအတာ၊အထပ်အရေအတွက် စသည်)') }}</label>
                                    </div>
                                    <div class="row mb-3">
                                        
                                                <table class="table tbl_bulding_type table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >စဉ်</th>
                                                            <th class="less-font-weight text-center" >အဆောက်အဦအမျိုးအစား</th>
                                                            <th class="less-font-weight text-center" >အတိုင်းအတာ</th>
                                                            <th class="less-font-weight text-center"  >အထပ်အရေအတွက်</th>
                                                            <th class="less-font-weight text-center"  >ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</th>
                                                            <th  class="less-font-weight text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowBuldingType("tbl_bulding_type")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_bulding_type_body">

                                                    </tboddy>
                                                </table>
                                        
                                    </div>

                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">၂။</span>{{ __('စာသင်ခန်း(အခန်းအရေအတွက်၊အတိုင်းအတာ၊ဝင်ဆံ့သင်တန်းသား၊လေအေးပေးစက်)') }}</label>
                                    </div>

                                    <div class="row mb-3">
                                        
                                                <table class="table tbl_classroom table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >စဉ်</th>
                                                            <th class="less-font-weight text-center"  >အခန်းအရေအတွက်</th>
                                                            <th class="less-font-weight text-center"  >အတိုင်းအတာ</th>
                                                            <th class="less-font-weight text-center"  >ဝင်ဆံ့သင်တန်းသား</th>
                                                            <th class="less-font-weight text-center" >လေအေးပေးစက်</th>
                                                            <th class="less-font-weight text-center"  >ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowClassroom("tbl_classroom")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_classroom_body">

                                                    </tboddy>
                                                </table>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">၃။</span>{{ __('သန့်စင်ခန်း(အမျိုးအစား၊အရေအတွက်)') }}</label>
                                    </div>

                                    <div class="row mb-3">
                                    
                                    
                                                <table class="table tbl_toilet_type table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center"  >စဉ်</th>
                                                            <th class="less-font-weight text-center"  >အမျိုးအစား</th>
                                                            <th class="less-font-weight text-center"  >အရေအတွက်</th>
                                                            <th class="less-font-weight text-center"  >ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowToiletType("tbl_toilet_type")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_toilet_type_body">

                                                    </tboddy>
                                                </table>
                                    
                                    </div>

                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">၄။</span>{{ __('စီမံရုံးခန်း(အခန်းအရေအတွက်၊အတိုင်းအတာ)') }}</label>
                                    </div>
                                    <div class="row mb-3">
                                        
                                            <table class="table tbl_manage_room_numbers table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >စဉ်</th>
                                                            <th class="less-font-weight text-center"  >အခန်းအရေအတွက်</th>
                                                            <th class="less-font-weight text-center"  >အတိုင်းအတာ</th>
                                                            <th class="less-font-weight text-center"  >ဓါတ်ပုံနှင့်တကွဖော်ပြချက်</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowManageRoomNumber("tbl_manage_room_numbers")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_manage_room_numbers_body">

                                                    </tboddy>
                                            </table>
                                    
                                    </div>
                                </div>

                                
                                <div class="row mb-3">
                                    <label class="col-md-10 col-form-label fw-bolder">
                                        <input type="checkbox" id="submit_confirm" onclick="ConfirmSubmitTeacher()">
                                        {{ __('အထက်ဖော်ပြပါ အချက်အလက်များ မှန်ကန်ကြောင်း ကိုယ်တိုင်ကတိပြုဝန်ခံပါသည်။') }}
                                    </label>
                                </div>
                                        <div class="row mb-3">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit submit_btn" disabled>{{ __('Submit') }}</button>
                                            </div>
                                        </div>
                            </form>

                        </div>
                </div>
            </div>
        </div>
    </div>



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
                                           placeholder="Enter Verification Code"></center>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn1" onclick="check_email_school()"
                                class="btn btn-success btn-hover-dark w-30">Verify
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
    <script src="{{ asset('js/form_validation/school_validation.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function (e) {
            $('.js-example-basic-multiple').select2();
            // $('.select2').select2({
            //     placeholder: "Select"
            // });
            $("#school_register_form").submit(function (event) {
                var tbl_establish = $('.tbl_sch_established_persons_body tr').length;
                var tbl_governs = $('.tbl_sch_governs_body tr').length;
                var tbl_member_list_bio = $('.tbl_member_list_biography_body tr').length;
                var tbl_teacher_list_bio = $('.tbl_teacher_list_biography_body tr').length;
                var own_type = $('input[name="own_type"]:checked').length;
                var branch_sch_own_type = $('input[name="branch_sch_own_type"]:checked').length;
                var tbl_degree = $('.tbl_degree_body tr').length;
                var tbl_branch_school = $('.tbl_branch_school_body tr').length;
                var tbl_bulding_type = $('.tbl_bulding_type_body tr').length;
                var tbl_classroom = $('.tbl_classroom_body tr').length;
                var tbl_toilet_type = $('.tbl_toilet_type_body tr').length;
                var tbl_manage_room_numbers = $('.tbl_manage_room_numbers_body tr').length;
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
                if(!own_type){
                    $(".own_type").show();
                    event.preventDefault();
                }
                if(!branch_sch_own_type){
                    $(".branch_sch_own_type").show();
                    event.preventDefault();
                }
                if(!tbl_degree){
                    $(".degree").show();
                    event.preventDefault();

                }
                // if(!tbl_branch_school){
                //     $(".branch_school").show();
                //     event.preventDefault();
                // }
                if (!tbl_bulding_type) {
                    $(".tbl_bulding_type_error").show();
                    event.preventDefault();
                }
                if (!tbl_classroom) {
                    $(".tbl_bulding_type_error").show();
                    event.preventDefault();
                }
                if (!tbl_toilet_type) {
                    $(".tbl_toilet_type_error").show();
                    event.preventDefault();
                }
                if (!tbl_manage_room_numbers) {
                    $(".tbl_manage_room_numbers_error").show();
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
            $('input[type=radio][name="own_type"]').change(function () {
                var own_type = $('input[name="own_type"]:checked').length;
                if (!own_type) {
                    $(".own_type").show();
                } else {
                    $(".own_type").hide();
                }
            });
            $('input[type=radio][name="branch_sch_own_type"]').change(function () {
                var branch_sch_own_type = $('input[name="branch_sch_own_type"]:checked').length;
                if (!branch_sch_own_type) {
                    $(".branch_sch_own_type").show();
                } else {
                    $(".branch_sch_own_type").hide();
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
            
            

        });
        school_reg_feedback();
        getCourses();

    </script>
@endpush
