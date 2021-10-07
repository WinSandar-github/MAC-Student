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
            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA One Registration <span>Form</span></h2>
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
        <div class="container approve_request" style="overflow: hidden;">
            {{--
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">

                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">
                                Your DA 1 Registration Form need to prepare.Please update your form
                            </p>
                        </div>
                    </div>
                </div>

                <div class="check_registration" style="display:none; margin-top: 5%;">
                    <div class="card text-white bg-primary my-3">
                        <div class="card-body">
                            <p class="card-text">Your DA 1 Registration Form is checking</p>
                        </div>
                    </div>
                </div>

                <div class="approve" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        <div class="card-body">
                            <p class="card-text">You have the opportunity to attend the training </p>
                        </div>
                    </div>

                    <div class="card text-white bg-primary my-3">
                        <div class="card-body add_exam">
                        </div>
                    </div>
                </div>
            --}}
            <div class="comment-form study">
                <input type="hidden" name="form_type" id="form_type">
                <input type="hidden" name="remain_module" id="remain_module">

                <div class="form-wrapper">
                    <div class="">
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <div disabled class="card text-center border-success text-success" onclick="selectedRegistration(3)" id="mac_card">
                                    <div class="card-body">
                                        <label  name="register_name"> Registration Mac</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center " onclick="selectedRegistration(1)" id="self_study_card">
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
                            </div>

                        </div><br/> -->

                        <!-- DA One Register (MAC) -->
                        <div class="row" id="mac_container" style="margin-bottom:2%;">
                            <form method="post" action="javascript:void(0);" id="da_mac_form"
                                  enctype="multipart/form-data">
                                <div class="card border-success mb-3 p-5">
                                    <div class="row">
                                        <h5 class="card-title text-center fw-bolder">
                                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<span id="mac_type_name"></span>
                                            <br/>
                                            ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ
                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                            <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-md-12">

                                            <div class="row mb-3">
                                                <div class="col-md-4 single-form">
                                                    <label class="coursename col-form-label"></label>
                                                </div>
                                                <div class="col-md-6 single-form"></div>
                                                <div class="col-md-2 single-form">
                                                    <label class="batchname col-form-label"></label>
                                                </div>
                                            </div>

                                            {{--<table style="width:100%;margin-bottom: 2%;">
                                                <tr>
                                                    <td style="width:20%">
                                                        <label for="" class="col-form-label">အမှတ်စဉ် - Batch One</label>
                                                    </td>
                                                    <td style="float: right;">
                                                        <label for="" class="col-form-label">ပညာသင်နှစ် - 2021</label>
                                                    </td>
                                                </tr>
                                            </table>--}}
                                            <input type="hidden" name="batch_id" class="batch_id">
                                            <div class="row mb-3">
                                                <div class="col-md-9">
                                                    <div class="row mb-4 mt-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၁။</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_mm" class="form-control"
                                                                   readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_eng" class="form-control"
                                                                   readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၂။</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                <div class="col-md-2 col-5 pr-1">
                                                                    <input type="text" name="nrc_state_region" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_state_region"
                                                                                id="nrc_state_region"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                            </option>
                                                                    @endforeach
                                                                                                                                            </select> -->
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-3 col-7 px-1">
                                                                                                                                        <input type="text" name="nrc_township" style="padding:6px"
                                                                                                                                            class="form-control" readonly>
                                                                                                                                    <!-- <select class="form-control" name="nrc_township" id="nrc_township"
                                                                                                                                                    style="margin-top: 0px; margin-bottom: 0px;">
                                                                                                                                                @foreach($nrc_townships as $township)
                                                                                                                                        <option value="{{ $township['township_mm'] }}">
                                                                                                                                                        {{ $township['township_mm'] }}
                                                                                                                                                </option>
                                                                    @endforeach
                                                                                                                                            </select>
                                                                                                                                            </select> -->
                                                                </div>
                                                                <div class="col-md-2 col-5 px-1">
                                                                    <input type="text" name="nrc_citizen"
                                                                           class="form-control" readonly style="padding:6px">
                                                                <!-- <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
                                                            @endforeach
                                                                        </select> -->
                                                                </div>

                                                                <div class="col-md-5 col-7 pl-1">
                                                                    <input type="text" name="nrc_number"
                                                                           placeholder="၁၂၃၄၅၆"
                                                                           id="nrc_number" pattern=".{6,6}"
                                                                           class="form-control"
                                                                           oninput="this.value= en2mm(this.value);"
                                                                           maxlength="6" minlength="6" placeholder=""
                                                                           style="height: 38px"
                                                                           value="{{ old('nrc_number') }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၃။</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_mm"
                                                                   class="form-control" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_eng"
                                                                   class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                                <div class="col-md-3" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style" name="previewImg"
                                                                 id="previewImgMac"
                                                                 src="{{asset('/assets/images/blank-profile-picture-1.png')}}"
                                                                 accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                            <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" id="profile_photo_mac" name="profile_photo_mac" accept="image/*" ></span>
                                                            <br>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၄။</span>လူမျိုး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="race" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၅။</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="religion" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၆။</span>မွေးသက္ကရာဇ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၇။</span>ပညာအရည်အချင်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="education" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၈။</span>ရာထူး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="position" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၉။</span>ဌာန</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="department" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၀။</span>ရုံးစိုက်ရာဒေသ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="office_address" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၁။</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                </label>
                                                <div class="col-md-4 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <input type="radio" class="form-check-input mr-3"
                                                                       id="yes_mac" name="gov_staff"
                                                                       style="margin-left: 3%;" onclick="$('#rec_letter_mac').show()">
                                                                <label class="form-check-label " for="yes">ဟုတ်</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="radio" class="form-check-input mr-3"
                                                                       id="no_mac" name="gov_staff"
                                                                       style="margin-left: 3%;" onclick="$('#rec_letter_mac').hide()">
                                                                <label class="form-check-label " for="no">မဟုတ်</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                {{--<div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio" class="form-check-input mr-3" id="no_mac" name="gov_staff" style="margin-left: 3%;"  onclick="$('#rec_letter_mac').show()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                                    ရွေးချယ်ပါ
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>--}}
                                            </div>
                                            <div id="rec_letter_mac" style="display:none" >
                                                <div class="row mb-3 "  >
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-center" style="padding-right:8px">(က)</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                    </label>
                                                    <div class="col-md-2 text-center"  id="degree_edu" >
                                                        <span class="recommend_letter"></span>
                                                    </div>
                                                    <div class="col-md-6"  id="degree_edu" >
                                                        <input type="file"  class="form-control" id="recommend_letter_mac"  name="recommend_letter_mac">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၂။</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="current_address" class="form-control"> {{--Users should update their address. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၃။</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="address" class="form-control">{{--Users should update their address. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၄။</span>ဖုန်းနံပါတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="phone" class="form-control">{{--Users should update their phone number. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၅။</span>တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control sr_no" name="student_regno"
                                                           readonly>

                                                </div>
                                            </div>

                                            {{--<div class="row mb-3">
                                                <div class="col-md-1">
                                                    <div class="single-form">
                                                        <label class="col-form-label">၂။</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <label class="col-form-label">လျှောက်လွှာကြေး ၁၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၈၀၀၀ကျပ်၊သင်တန်းကြေး ၃၀၀၀၀ကျပ်၊စုစုပေါင်းသင့်ငွေ ၃၉၀၀၀ကို ပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="single-form">
                                                        <input type="text" name="" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right"><span
                                                            class="pull-left">၁၆။</span>(က)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">တက်ရောက်မည့်သင်တန်း</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="part_no_mac" id="part_no_mac"
                                                           class="form-control course_name" disabled
                                                           placeholder="အပိုင်း" id="" required>
                                                </div>

                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right"><span
                                                            class="pull-left"></span>(ခ)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">သင်တန်းအမှတ်စဥ်</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="batch_no_mac" id="batch_no_mac"
                                                           class="form-control batch_no" disabled
                                                           placeholder="သင်တန်းအမှတ်စဥ်" id="">

                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right"><span
                                                            class="pull-left"></span>(ဂ)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">ကိုယ်ပိုင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="personal_no_mac" id="personal_no_mac"
                                                           class="form-control personal_no" placeholder="ကိုယ်ပိုင်အမှတ်"> {{-- ကိုယ်ပိုင်နံပါတ် not sure to get in this state --}}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">၁၆။</span>ယခုဖြေဆိုမည့် Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required>
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_full" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">၁၇။</span>သင်တန်းတက်ရောက်မည့်နေရာ<span style="color:red">*</span>-</label>
                                                <div class="row  col-md-8 checkbox-radios   py-2">
                                                    
                                                

                                                    <div class="col-md-5 form-check-radio">
                                                        <label class="form-check-label" for="sub_mac">
                                                        <input class="form-check-input" type="radio" id="sub_mac" name="mac_type" value='1'    >
                                                            <span class="form-check-sign"></span>
                                                            ရန်ကုန်သင်တန်းကျောင်း
                                                        </label>

                                                    </div>
                                            
                                                    <div class="col-md-6  form-check-radio">
                                                        <label class="form-check-label" for="sub_mac2">
                                                        <input class="form-check-input" type="radio" id="sub_mac2" name="mac_type" value='2'    >
                                                            <span class="form-check-sign"></span>
                                                            နေပြည်တော်သင်တန်းကျောင်း
                                                        </label>
                                                    </div>
                                                
        
                                               
                                                        <label  class="error attend_mac_error" style="display:none;" for="attend_place">Please select one</label>
                                                   
                                                </div>
                                            </div>
                                            {{--<div class="row">
                                                <div class="col-md-1 mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                           name="submit_confirm" id="submit_confirm_mac">
                                                </div>
                                                <label class="col-md-11 col-form-label fw-bolder">အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11 ">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="col-md-9 col-form-label fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီ ဥပဒေနှင့်နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။</label>
                                                        <h6 class="col-md-3 col-form-label" style="padding-left:60px;">
                                                            ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="row mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="submit_confirm_ss"
                                                               onchange="$('#submit_btn_mac').prop('disabled', !this.checked)">
                                                        <span class="form-check-sign"></span>
                                                        <p class="fw-bolder">
                                                            * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                            * မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်းကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-25"
                                                        id="submit_btn_mac" disabled>
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- DA One Register (Private School) -->
                        <div class="row" id="private_school_container">
                            <form method="post" action="javascript:void(0);" id="da_private_school_form"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                    <h5 class="card-title text-center fw-bolder mb-3">
                                        မြန်မာနိုင်ငံစာရင်းကောင်စီ<br/>
                                        ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ<br/>
                                        (ကိုယ်ပိုင်သင်တန်းကျောင်းတွင်တက်ရောက်မည့်အသစ်တက်ခွင့်ရသူများ)
                                    </h5>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                        <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                    </div>

                                    <div class="card-body">
                                        <div class="col-md-12">
                                        
                                            <div class="row mb-3">
                                                <div class="col-md-9">

                                                    <div class="row mb-3">
                                                        <label class="col-md-6 col-form-label label">ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းအမည်</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control form-select"
                                                                        name="private_school_name" id="selected_school_id"
                                                                        style="width: 100%;">
                                                                    <option disabled selected>Select School</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="batch_id" class="batch_id">
                                                    <div class="row mb-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၁။</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_mm" class="form-control"
                                                                   readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_eng" class="form-control"
                                                                   readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၂။</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                <div class="col-md-2 col-5 pr-1">
                                                                    <input type="text" name="nrc_state_region" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_state_region"
                                                                                id="nrc_state_region"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                            </option>
                                                                            @endforeach
                                                                        </select> -->
                                                                </div>
                                                                <div class="col-md-3 col-7 px-1">
                                                                    <input type="text" name="nrc_township" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_township" id="nrc_township"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                                    {{ $township['township_mm'] }}
                                                                            </option>
                                                            @endforeach
                                                                        </select>
                                                                        </select> -->
                                                                </div>
                                                                <div class="col-md-2 col-5 px-1">
                                                                    <input type="text" name="nrc_citizen" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                            <!-- <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
                                                                        @endforeach
                                                                        </select> -->
                                                                </div>

                                                                <div class="col-md-5 col-7 pl-1">
                                                                    <input type="text" name="nrc_number"
                                                                           placeholder="၁၂၃၄၅၆"
                                                                           id="nrc_number" pattern=".{6,6}"
                                                                           class="form-control"
                                                                           oninput="this.value= en2mm(this.value);"
                                                                           maxlength="6" minlength="6" placeholder=""
                                                                           style="height: 38px"
                                                                           value="{{ old('nrc_number') }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၃။</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_mm"
                                                                   class="form-control" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_eng"
                                                                   class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                                <div class="col-md-3" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style" name="previewImg"
                                                                 id="previewImgPrivate"
                                                                 src="{{asset('/assets/images/blank-profile-picture-1.png')}}"
                                                                 accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                            <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" id="profile_photo_private" name="profile_photo_private" accept="image/*"></span>
                                                            <br>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                            </div>


                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၄။</span>လူမျိုး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="race" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၅။</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="religion" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၆။</span>မွေးသက္ကရာဇ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth" class="form-control"
                                                           disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၇။</span>ပညာအရည်အချင်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="education" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၈။</span>ရာထူး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="position" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၉။</span>ဌာန</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="department" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၀။</span>ရုံးစိုက်ရာဒေသ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="office_address" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၁။</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                </label>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3"
                                                                                         id="yes_private"
                                                                                         name="gov_staff"
                                                                                         style="margin-left: 3%;" onclick="$('#rec_letter_private').show()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                                         for="yes">ဟုတ်</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3"
                                                                                         id="no_private"
                                                                                         name="gov_staff"
                                                                                         style="margin-left: 3%;" onclick="$('#rec_letter_private').hide()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                                         for="no">မဟုတ်</label>
                                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                                    ရွေးချယ်ပါ
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rec_letter_private" style="display:none" >
                                                <div class="row mb-3 "  >
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-center" style="padding-right:8px">(က)</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                    </label>
                                                    <div class="col-md-2 text-center"  id="degree_edu" >
                                                        <span class="recommend_letter"></span>
                                                    </div>
                                                    <div class="col-md-6"  id="degree_edu" >
                                                        <input type="file"  class="form-control" id="recommend_letter_private"  name="recommend_letter_private">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၂။</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="current_address" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၃။</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="address" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၄။</span>ဖုန်းနံပါတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="phone" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၅။</span>တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control sr_no" name="student_regno"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display:none">
                                                <label class="col-md-1 col-form-label">၁၆။</label>
                                                <label class="col-md-1 col-form-label">(က)</label>

                                                <label class="col-md-2 col-form-label label_align_right">တက်ရောက်မည့်သင်တန်း</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="part_no_private" id="part_no_private"
                                                           class="form-control course_name" disabled
                                                           placeholder="အပိုင်း" id="" required>

                                                </div>
                                            </div>

                                            <div class="row mb-3"  style="display:none">
                                                <label class="col-md-1 col-form-label"></label>
                                                <label class="col-md-1 col-form-label">(ခ)</label>
                                                <label class="col-md-2 col-form-label label_align_right">သင်တန်းအမှတ်စဥ်</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="batch_no_private"
                                                           class="form-control batch_no" disabled>

                                                </div>
                                            </div>


                                            <div class="row mb-3"  style="display:none">
                                                <label class="col-md-1 col-form-label"></label>
                                                <label class="col-md-1 col-form-label">(ဂ)</label>
                                                <label class="col-md-2 col-form-label label_align_right">ကိုယ်ပိုင်အမှတ်</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="personal_no_private" class="form-control personal_no"
                                                           placeholder="ကိုယ်ပိုင်အမှတ်" id="">

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">၁၆။</span>ယခုဖြေဆိုမည့် Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required >
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_full" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>
                                            {{--<div class="row">
                                                <div class="col-md-1 mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                           name="submit_confirm" id="submit_confirm_mac">
                                                </div>
                                                <label class="col-md-11 col-form-label fw-bolder">အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။</label>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11 ">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="col-md-9 col-form-label fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။</label>
                                                        <h6 class="col-md-3 col-form-label" style="padding-left:60px;">
                                                            ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="row mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="submit_confirm_ss"
                                                               onchange="$('#submit_btn_pp').prop('disabled', !this.checked)">
                                                        <span class="form-check-sign"></span>
                                                        <p class="fw-bolder">
                                                            * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                            * မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-25" id="submit_btn_pp" disabled>
                                                    Submit
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- DA One Register (Self Study) -->
                        <div class="row" id="self_study_container">
                            <form id="self_study_form" method="post" action="javascript:void(0);"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                    <h5 class="card-title text-center fw-bolder">
                                        မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                        ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်နှင့်မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</br>
                                        (ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)
                                    </h5>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h6>ရက်စွဲ - {{ date('d-M-Y') }}</h6>
                                        <h6>အမှတ်စဥ် - <span class="batch_number"></span></h6>
                                    </div>

                                    <div class="card-body">
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

                                            {{--<table style="width:100%;margin-bottom: 2%;">
                                                <tr>
                                                    <td style="width:20%">
                                                        <label for=""
                                                               class="col-form-label">အမှတ်စဉ် - Batch One</label>
                                                    </td>
                                                </tr>
                                            </table>--}}

                                            {{--<div class="row">
                                                <div class="col-md-1">
                                                    <div class="single-form">
                                                        <label class="col-form-label">၁။</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="single-form">
                                                        <label class="col-form-label">မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း</label>

                                                    </div>
                                                </div>
                                            </div><br/>--}}
                                            <input type="hidden" name="batch_id" class="batch_id">
                                            <div class="row">
                                                <div class="col-md-9">

                                                    <div class="row mb-4 mt-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၁။</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_mm" class="form-control"
                                                                   readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_eng" class="form-control"
                                                                   readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၂။</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                <div class="col-md-2 col-5 pr-1">
                                                                    <input type="text" name="nrc_state_region" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_state_region"
                                                                                id="nrc_state_region"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                            </option>
@endforeach
                                                                        </select> -->
                                                                </div>
                                                                <div class="col-md-3 col-7 px-1">
                                                                    <input type="text" name="nrc_township" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_township" id="nrc_township"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                                    {{ $township['township_mm'] }}
                                                                            </option>
@endforeach
                                                                        </select>
                                                                        </select> -->
                                                                </div>
                                                                <div class="col-md-2 col-5 px-1">
                                                                    <input type="text" name="nrc_citizen" style="padding:6px"
                                                                           class="form-control" readonly>
                                                                <!-- <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                                                style="margin-top: 0px; margin-bottom: 0px;">
                                                                            @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                            </option>
@endforeach
                                                                        </select> -->
                                                                </div>

                                                                <div class="col-md-5 col-7 pl-1">
                                                                    <input type="text" name="nrc_number"
                                                                           placeholder="၁၂၃၄၅၆"
                                                                           id="nrc_number" pattern=".{6,6}"
                                                                           class="form-control"
                                                                           oninput="this.value= en2mm(this.value);"
                                                                           maxlength="6" minlength="6" placeholder=""
                                                                           style="height: 38px"
                                                                           value="{{ old('nrc_number') }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <label for="" class="col-md-6 col-form-label label_align_right"><span
                                                                    class="pull-left">၃။</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_mm"
                                                                   class="form-control" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_eng"
                                                                   class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--User Photo--}}
                                                <div class="col-md-3" align="center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img class="col-md-3 profile-style" name="previewImg"
                                                                 id="previewImgSelf"
                                                                 src="{{asset('/assets/images/blank-profile-picture-1.png')}}"
                                                                 accept="image/png,image/jpeg" alt="">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                            <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" id="profile_photo_self" name="profile_photo_self" accept="image/*"></span>
                                                            <br>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                {{--User Photo--}}
                                            </div>


                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၄။</span>လူမျိုး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="race" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၅။</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="religion" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၆။</span>မွေးသက္ကရာဇ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၇။</span>ပညာအရည်အချင်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="education" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၈။</span>ရာထူး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="position" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၉။</span>ဌာန</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="department" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၀။</span>ရုံးစိုက်ရာဒေသ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="office_address" class="form-control"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၁။</span>နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                </label>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3"
                                                                                         id="yes_self" name="gov_staff"
                                                                                         style="margin-left: 3%;" onclick="$('#rec_letter_self').show()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                                         for="yes">ဟုတ်</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3"
                                                                                         id="no_self" name="gov_staff"
                                                                                         style="margin-left: 3%;" onclick="$('#rec_letter_self').hide()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label "
                                                                                         for="no">မဟုတ်</label>
                                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                                    ရွေးချယ်ပါ
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rec_letter_self" style="display:none" >
                                                <div class="row mb-3 "  >
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-center" style="padding-right:8px">(က)</span>သက်ဆိုင်ရာဌာနအကြီးအကဲ၏ထောက်ခံစာ
                                                    </label>
                                                    <div class="col-md-2 text-center"  id="degree_edu" >
                                                        <span class="recommend_letter"></span>
                                                    </div>
                                                    <div class="col-md-6"  id="degree_edu" >
                                                        <input type="file"  class="form-control" id="recommend_letter_self"  name="recommend_letter_self">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၂။</span>အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="current_address" class="form-control"> {{--Users should update their address. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၃။</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="address" class="form-control"> {{--Users should update their address. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="" class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၄။</span>ဖုန်းနံပါတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="phone" class="form-control"> {{--Users should update their phone number. so remove readonly attribute--}}
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၅။</span>တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control sr_no" name="student_regno"
                                                           readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span
                                                            class="pull-left">၁၆။</span>မှတ်ပုံတင်ရသည့်အကြောင်းရင်း
                                                    - </label>
                                                <div class="row col-md-8 py-2">

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label" required>
                                                            <input class="form-check-input mt-1" type="radio"
                                                                   name="reg_reason[]" required value="ယခုနှစ်တက်ရောက်ခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (က) ယခုနှစ်တက်ရောက်ခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="reg_reason[]" required value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ခ) သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="reg_reason[]" required value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ဂ) သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="reg_reason[]" required value="စာမေးပွဲကျရှုံးခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (ဃ) စာမေးပွဲကျရှုံးခြင်း
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="reg_reason[]" required value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း">
                                                            <span class="form-check-sign"></span>
                                                            (င) သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="reg_reason[]">Please select registration reason.</label>
                                                </div>
                                            </div>

                                            {{--<div class="row mb-3" style="margin-left:100px;">
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

                                            <div class="row mb-3" style="margin-left:100px;">
                                                <div class="col-md-1">
                                                    <label class="form-check-label">(ခ)</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox"
                                                           value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း"
                                                           name="reg_reason[]">
                                                </div>
                                                <div class="col-md-9">
                                                    <label>သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                </div>

                                            </div>

                                            <div class="row mb-3" style="margin-left:100px;">
                                                <div class="col-md-1">
                                                    <label class="form-check-label">(ဂ)</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း"
                                                           name="reg_reason[]">
                                                </div>
                                                <div class="col-md-9">
                                                    <label>သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                </div>

                                            </div>

                                            <div class="row mb-3" style="margin-left:100px;">
                                                <div class="col-md-1">
                                                    <label class="form-check-label">(ဃ)</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း"
                                                           name="reg_reason[]">
                                                </div>
                                                <div class="col-md-9">
                                                    <label>စာမေးပွဲကျရှုံးခြင်း</label>
                                                </div>

                                            </div>

                                            <div class="row mb-3" style="margin-left:100px;">
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
                                            </div>--}}

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">၁၇။</span>ယခုဖြေဆိုမည့် Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required>
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_full" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>

                                        <!-- <div class="row">
                                                    <label class="col-md-1 col-form-label">၂။</label>
                                                    <label class="col-md-8 col-form-label">အပိုဒ် ၁ ပါ(ခ)/(ဂ)/(ဃ)/(င) အတွက်</label>
                                                </div> -->

                                            <div class="row mb-3"  style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right">
                                                    <span class="pull-left">၁၈။</span>(က)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">တက်ရောက်မည့်သင်တန်း</label>

                                                <div class="col-md-8">
                                                    <input type="text" name="part_no_self" class="form-control course_name"  placeholder="အပိုင်း" disabled>

                                                </div>

                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right">
                                                    <span class="pull-left"></span>(ခ)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">သင်တန်းအမှတ်စဥ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="batch_no_self" class="form-control batch_no" disabled placeholder="သင်တန်းအမှတ်စဥ်">
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-2 col-form-label label_align_right">
                                                    <span class="pull-left"></span>(ဂ)
                                                </label>
                                                <label class="col-md-2 col-form-label label_align_right">ကိုယ်ပိုင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="personal_no_self" class="form-control _no" placeholder="ကိုယ်ပိုင်အမှတ်">
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display:none;">
                                                <label class="col-md-4 col-form-label label_align_right">
                                                    <span class="pull-left">၁၈။</span>
                                                    နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့်ခုနှစ်/လ
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date" id="date" class="form-control"
                                                           placeholder="လ၊ခုနှစ်(MMM-YYYY)">
                                                </div>
                                            </div>

                                            {{--<div class="row">
                                                <div class="col-md-1 mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                           name="submit_confirm" id="submit_confirm_mac">
                                                </div>
                                                <label class="col-md-11 col-form-label fw-bolder">အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11 ">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="col-md-9 col-form-label fw-bolder">မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။</label>
                                                        <h6 class="col-md-3 col-form-label" style="padding-left:60px;">
                                                            ရက်စွဲ - {{ date("d-m-Y")  }}</h6>
                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="row mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="submit_confirm_ss" onchange="$('#submit_btn_ss').prop('disabled', !this.checked)">
                                                        <span class="form-check-sign"></span>
                                                        <p class="fw-bolder">
                                                            * အထက်ဖော်ပြပါအချက်အလက်များအားလုံးမှန်ကန်ပါသည်။၊<br>
                                                            * မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်နည်းဥပဒေများအတိုင်းကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံလျှက်လျှောက်ထားအပ်ပါသည်။
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-25" id="submit_btn_ss" disabled>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam form Feedback  -->
            <div class="status-reject" style="display:none">
                <div class="card text-white bg-dark my-3">

                    <div class="card-body">
                        <!-- status == 2 => reject -->
                        <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                        </p>
                    </div>
                </div>
            </div>
            <div class="exam_feedback" style="display:none; margin-top:5%;">
                <div class="card text-white bg-primary my-3">
                    <div class="card-body exam_text">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAC -->
    {{--<form method="post" class="needs-validation" action="javascript:createMac();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="macModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(MAC) Form
                                    Fee - ****** MMK</h4>
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
                                <button type="submit" id="mac_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now
                                </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>--}}

    <!-- PRIVATE -->
    {{--<form method="post" class="needs-validation" action="javascript:createPrivateSchool();"
          enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="privateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(Private
                                    School) Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="private_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now
                                </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>--}}

    <!-- SELF -->
    {{--<form method="post" class="needs-validation" action="javascript:createSelfStudy();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="selfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Registeration(Self Study)
                                    Form Fee - ****** MMK</h4>
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
                                    <img class="fit-image w-50 h-50" src="{{asset('img/cash.png')}}" data-value="CASH" name="payment_method" id="cash_img_self">
                                </center>
                                <br>
                            </div>
                            <input type="hidden" name="payment_method" value="CASH">
                            <center>
                                <button type="submit" id="self_btn" class="btn btn-success btn-hover-dark w-30"
                                        data-bs-toggle="modal">Pay Now
                                </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>--}}

    <style>
        .profile-style {
            width: 170px !important;
            height: 190px;
        }
    </style>
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
<script src="{{ asset("js/form_validation/da_one_reg_validation.js") }}"></script>
    <script type="text/javascript">
        $('document').ready(function () {
            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);
            $('#form_type').val(localStorage.getItem("course_id"));

            selectedRegistration(urlParams.get("study_type"));

            get_student_info(student_id).then(data => {
                // console.log(data,'data');
                if (data) {
                     let current_stu_course = data.data.student_course_regs.slice(-1);
                    let last_exam = data.data.exam_registers.slice(-1);
                     

                    
                    var mac_name = current_stu_course[0].mac_type == 2 ?   "(နေပြည်တော်သင်တန်းကျောင်း)" : "(ရန်ကုန်သင်တန်းကျောင်း)";
                    $('#mac_type_name').text(mac_name)
                    $(".batch_number").append(current_stu_course[0].batch.number);
                    $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                    $('.course_name').val(current_stu_course[0].batch.course.name);
                    // console.log(data.data.citizen)
                    if(last_exam[0]){
                    if(last_exam[0].grade == 1){
                         let batch_id = localStorage.getItem('batch_id');
                         $('.batch_id').val(batch_id);
                        $.ajax({
                        type: "get",
                        url: BACKEND_URL+"/batch/"+batch_id,
                        contentType: false,
                        processData: false,
                        async:false,
                        success: function (res) {
                             console.log('res',res)
                            $('#batch_name').text(res.data.name);
                            $('.batch_number').text(res.data.number);
                            
                            $('.batch_no').val(res.data.number);
                            $('.personal_no').val(data.data.personal_no);
                            $('#remain_module').val(last_exam[0].is_full_module)

                            if(last_exam[0].is_full_module == "1"){
                                 $(".module_two").prop("checked", true);
                              
                                $('.module_one').attr('disabled', true);
                                $('.module_full').attr('disabled', true);


                            }
                            else if(last_exam[0].is_full_module=="2"){
                                $(".module_one").prop("checked", true);
                                $('.module_two').attr('disabled', true);
                                $('.module_full').attr('disabled', true);


 
                            }
                            else if(last_exam[0].is_full_module=="3"){
                                $(".module_full").prop("checked", true);
                                 $('.module_two').attr('disabled', true);
                                $('.module_full').attr('disabled', true);
                                

                                  
                            }

                            
                           

                            }
                        })   
                        
                        
                    }
                     }else{
                         $('.batch_no').val(current_stu_course[0]?.batch?.number);
                    }
                    
                    // $('.batch_no').val(current_stu_course[0]?.batch?.number);
                    $("#da_batch_no").append(current_stu_course[0].batch.number);
                    document.getElementById('previewImgSelf').src = BASE_URL + data.data.image;
                    document.getElementById('previewImgPrivate').src = BASE_URL + data.data.image;
                    document.getElementById('previewImgMac').src = BASE_URL + data.data.image;
                    $("input[name='name_mm']").val(data.data.name_mm);
                    $("input[name='name_eng']").val(data.data.name_eng);
                    $("input[name='nrc_state_region']").val(data.data.nrc_state_region);
                    $("input[name='nrc_township']").val(data.data.nrc_township);
                    $("input[name='nrc_citizen']").val(data.data.nrc_citizen);
                    $("input[name='nrc_number']").val(data.data.nrc_number);
                    $("input[name='father_name_mm']").val(data.data.father_name_mm);
                    $("input[name='father_name_eng']").val(data.data.father_name_eng);
                    $("input[name='race']").val(data.data.race);
                    $("input[name='religion']").val(data.data.religion);
                    $("input[name='date_of_birth']").val(data.data.date_of_birth);
                    $("input[name='education']").val(data.data.student_education_histroy.degree_name);
                    $("input[name='position']").val(data.data.student_job.position);
                    $("input[name='department']").val(data.data.student_job.department);
                    $("input[name='office_address']").val(data.data.student_job.office_address);
                    $("input[name='current_address']").val(data.data.current_address);
                    $("input[name='address']").val(data.data.address);
                    $("input[name='phone']").val(data.data.phone);
                    $('.batch_id').val(current_stu_course[0]?.batch?.id);
                    if (data.data.gov_staff == 0) {
                        $("#no_self").prop("checked", true);
                        $("#no_private").prop("checked", true);
                        $("#no_mac").prop("checked", true);
                    } else {
                        $("#yes_mac").prop("checked",true);
                        $("#rec_letter_mac").css("display",'block');
                        $("#yes_self").prop("checked",true);
                        $("#rec_letter_self").css("display",'block');
                        $("#yes_private").prop("checked",true);
                        $("#rec_letter_private").css("display",'block');
                        if(data.data.recommend_letter!=null){
                            $(".recommend_letter").append("<a href='"+BASE_URL+data.data.recommend_letter+"'  target='_blank'>View File</a><br/>")
                        }
                    }
                    if(data.data.exam_registers.length!=0){
                        $("input[name='office_address']").prop('readonly', false);
                        $("input[name='current_address']").prop('readonly', false);
                        $("input[name='address']").prop('readonly', false);
                        $("input[name='phone']").prop('readonly', false);
                        $("input[name='profile_photo_mac']").show();
                        $("input[name='profile_photo_self']").show();
                        $("input[name='profile_photo_private']").show();
                        $("input[name='recommend_letter_mac']").prop('disabled', false);
                        $("input[name='recommend_letter_self']").prop('disabled', false);
                        $("input[name='recommend_letter_private']").prop('disabled', false);
                        $("input[name='gov_staff']").prop('disabled', false);
                    }
                    else{
                        $("input[name='office_address']").prop('readonly', true);
                        $("input[name='current_address']").prop('readonly', true);
                        $("input[name='address']").prop('readonly', true);
                        $("input[name='phone']").prop('readonly', true);
                        $("input[name='profile_photo_mac']").hide();
                        $("input[name='profile_photo_self']").hide();
                        $("input[name='profile_photo_private']").hide();
                        $("input[name='recommend_letter_mac']").prop('disabled', true);
                        $("input[name='recommend_letter_self']").prop('disabled', true);
                        $("input[name='recommend_letter_private']").prop('disabled', true);
                        $("input[name='gov_staff']").prop('disabled', true);
                    }
                }
            });
        });
 
        loadCourse();
         
        // loadExam();
         reg_feedback();
 

        loadSchoolList();
 

        $("input[name='date']").flatpickr({
            enableTime: false,
            dateFormat: "d-m-Y",
        });

    </script>
    <script>

        // $("#submit_btn_mac").click(function () {
        //     $('#macModal').modal('show');
        // });

        // $("#submit_btn_ss").click(function () {
        //     console.log($('input[name="is_full_module"]:checked').length);
        //     if($('input[name="reg_reason[]"]:checked').length > 0 && $('input[name="is_full_module"]:checked').length > 0 && 
        //     $("input[name=date]").val()!=""){
        //         $('#selfModal').modal('show');
        //     }
        // });
        // $("#submit_btn_pp").click(function () {
        //     if (allFilled('#da_private_school_form')) {
        //         $('#privateModal').modal('show');
        //     }
        // });

        // function allFilled(form_id) {
        //     var filled = true;
        //     $(form_id + ' input').each(function () {
        //         if ($(this).val() == '') filled = false;
        //         //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
        //     });
        //     return filled;
        // }

        //MAC
        // $('#mac_btn').click(function () {
        //     setTimeout(function () {
        //         $('#macModal').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_mac').click(function () {
        //     $('#mac_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function () {
        //     $('#mac_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function () {
        //     $('#mac_btn').prop('disabled', true);
        // });
        // $('#mac_btn').prop('disabled', true);

        // //Private School
        // $('#private_btn').click(function () {
        //     setTimeout(function () {
        //         $('#privateModal').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_private').click(function () {
        //     $('#private_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function () {
        //     $('#private_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function () {
        //     $('#private_btn').prop('disabled', true);
        // });
        // $('#private_btn').prop('disabled', true);

        //Self Study
        // $('#self_btn').click(function () {
        //     setTimeout(function () {
        //         $('#selfModal').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_self').click(function () {
        //     $('#self_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function () {
        //     $('#self_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function () {
        //     $('#self_btn').prop('disabled', true);
        // });
        // $('#self_btn').prop('disabled', true);
    </script>

@endpush
