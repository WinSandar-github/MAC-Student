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
                            <form id="teacher_register_form" enctype="multipart/form-data" action="" class="needs-validation" autocomplete="off" novalidate>
                            <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('အမည်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"  placeholder="အမည်"  required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၂။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('နိုင်ငံသားစီစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="row" >
                                            <div class="col-md-2 col-5 pr-1">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region" >
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <select class="form-control" name="nrc_township" id="nrc_township" >
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                            <input type="text" name="nrc_number" id="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၃။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('အဘအမည်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="father_name" id="father_name" class="form-control" placeholder="အဘအမည် (အင်္ဂလိပ်)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-8">
                                        <table class="table tbl_education table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">ပညာအရည်အချင်း</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_education")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_education_body">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                    <div class="col-md-11 pull-right">
                                        <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('RA/CPA အောင်မြင်သောနှစ်/ကိုယ်ပိုင်အမှတ်') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="ra_cpa_passed_yr" id="ra_cpa_passed_yr" class="form-control" placeholder="RA/CPA အောင်မြင်သောနှစ်" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="own_number" id="own_number" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('CPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="cpa_register_no" id="cpa_register_no" class="form-control" placeholder="CPA မှတ်ပုံတင်အမှတ်" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="cpa_date" id="cpa_date" class="form-control" placeholder="ရက်စွဲ" required>
                                        </div>
                                    </div>
                                </div></br>

                                <div class="row" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('PPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="ppa_register_no" id="ppa_register_no" class="form-control" placeholder="PPA မှတ်ပုံတင်အမှတ်" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="ppa_date" id="ppa_date" class="form-control" placeholder="ရက်စွဲ" required>
                                        </div>
                                    </div>
                                </div></br>

                                <div class="row" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                      <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none;"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-md-2 offset-md-4">
                                        <div class="form-group">
                                            <input type="text" name="ph_number" id="ph_number" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="fax_no" id="fax_no" class="form-control" placeholder="FAX Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div></br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၉။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('Audit Firm အမည်') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" name="audit_firm_name" id="audit_firm_name" class="form-control" placeholder="Audit Firm အမည်" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၁၀။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('စတင်တည်ထောင်သည့်နေ့') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" name="established_date" id="established_date" class="form-control" placeholder="စတင်တည်ထောင်သည့်နေ့" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၁၁။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('Audit Firm ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" name="structure_staff" id="structure_staff" class="form-control" placeholder="Audit Firm ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                    <label class="col-md-11 col-form-label" style="font-weight:bold;">{{ __('လက်ရှိလက်ခံဆောင်ရွက်စစ်ဆေးပေးရသည့်လုပ်ငန်းများ') }}</label>
                                    <label class="col-md-3 col-form-label offset-md-1 mt-1">{{ __('အများပိုင်ကုမ္ပဏီ') }}</label>
                                    <div class="col-md-7 mt-1">
                                        <div class="form-group">
                                            <input type="text" name="public_company" id="public_company" class="form-control" placeholder="အများပိုင်ကုမ္ပဏီ" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('လူနည်းစုကုမ္ပဏီ') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" name="minority_company" id="minority_company" class="form-control" placeholder="လူနည်းစုကုမ္ပဏီ" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('တစ်ဦးတည်းပိုင်နှင့်အစုအစပ်လုပ်ငန်း') }}</label>
                                    <div class="col-md-7">
                                        <table class="table tbl_private_share_business table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">လုပ်ငန်းများ</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowPrivateShareBusiness("tbl_private_share_business")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_private_share_business_body">

                                            </tbody>
                                        </table>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('အစိုးရ၏အရင်းအနှီးပါဝင်သည့်ဖက်စပ်လုပ်ငန်းများ') }}</label>
                                    <div class="col-md-7">
                                        <table class="table tbl_government_business table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">လုပ်ငန်းများ</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowGovBusiness("tbl_government_business")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_government_business_body">

                                            </tbody>
                                        </table>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('ပုဂ္ဂလိကဘဏ်နှင့်အာမခံလုပ်ငန်းများ') }}</label>
                                    <div class="col-md-7">
                                        <table class="table tbl_private_bank_insurance_business table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">လုပ်ငန်းများ</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowPrivateBandInsurBusiness("tbl_private_bank_insurance_business")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_private_bank_insurance_business_body">

                                            </tbody>
                                        </table>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('Non Government Organization') }}</label>
                                    <div class="col-md-7">
                                        <table class="table tbl_non_government_org table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">Organizations</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowNonGovOrg("tbl_non_government_org")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_non_government_org_body">

                                            </tbody>
                                        </table>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('Non Statutory Audit') }}</label>
                                    <div class="col-md-7">
                                      <div class="form-group">
                                          <input type="text" name="non_statutory_audit" id="non_statutory_audit" class="form-control" placeholder="Non Statutory Audit" required>
                                      </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('အခြား') }}</label>
                                    <div class="col-md-7">
                                      <div class="form-group">
                                          <input type="text" name="others" id="others" class="form-control" placeholder="အခြား" required>
                                      </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                    <label class="col-md-11 col-form-label" style="font-weight:bold;">{{ __('ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံရှိ/မရှိ') }}</label>

                                    <label class="col-md-3 col-form-label offset-md-1 mt-1">{{ __('စာရင်းကိုင်အလုပ်သင်များအားအလုပ်သင်ကြားပေးမှုစတင်ခဲ့သည့်နှစ်') }}</label>
                                    <div class="col-md-7 mt-1">
                                        <div class="form-group">
                                            <input type="text" name="accountant_ojt_year" id="accountant_ojt_year" class="form-control" placeholder="စာရင်းကိုင်အလုပ်သင်များအားအလုပ်သင်ကြားပေးမှုစတင်ခဲ့သည့်နှစ်" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်') }}</label>
                                    <div class="col-md-7 mt-1">
                                        <div class="form-group">
                                            <input type="text" name="accept_internship_amt" id="accept_internship_amt" class="form-control" placeholder="အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('လက်ရှိလက်ခံသင်ကြားပေးသောအလုပ်သင်ဦးရေ') }}</label>
                                    <div class="col-md-7 mt-1">
                                        <div class="form-group">
                                            <input type="text" name="current_internship_amt" id="current_internship_amt" class="form-control" placeholder="လက်ရှိလက်ခံသင်ကြားပေးသောအလုပ်သင်ဦးရေ" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('မွေးထုတ်ပေးခဲ့သည့်အလုပ်သင်ဦးရေ') }}</label>
                                    <div class="col-md-7 mt-1">
                                        <div class="form-group">
                                            <input type="text" name="produced_internship_amt" id="produced_internship_amt" class="form-control" placeholder="မွေးထုတ်ပေးခဲ့သည့်အလုပ်သင်ဦးရေ" required>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('နှစ်စဉ်ဆက်တိုက်သင်ကြားနိုင်ခြင်းရှိ/မရှိ') }}</label>
                                    <div class="col-md-7 mt-1">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="can_learn_yearly" id="can_learn" value="can_learn">
                                        <label class="form-check-label" for="can_learn">ရှိ</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="can_learn_yearly" id="cannot_learn" value="cannot_learn">
                                        <label class="form-check-label" for="cannot_learn">မရှိ</label>
                                      </div>
                                    </div>

                                    <label class="col-md-3 col-form-label offset-md-1">{{ __('အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်းရှိ/မရှိ') }}</label>
                                    <div class="col-md-7 mt-1">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="‌absent_internship" id="absent" value="absent">
                                        <label class="form-check-label" for="can_learn">ရှိ</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="‌absent_internship" id="not_absent" value="not_absent">
                                        <label class="form-check-label" for="cannot_learn">မရှိ</label>
                                      </div>
                                    </div>

                                    <label class="col-md-3 col-form-label offset-md-1 absent-reason-show" style="display:none;">{{ __('အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ရသည့်အကြောင်းရင်း') }}</label>
                                    <div class="col-md-7 mt-1 absent-reason-show" style="display:none;">
                                        <div class="form-group">
                                            <input type="text" name="absent_reason" id="absent_reason" class="form-control" placeholder="အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ရသည့်အကြောင်းရင်း" required>
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="row">
                                    <!-- <label class="col-md-1 col-form-label">{{ __('၉။') }}</label> -->
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>
                                </div>--}}


                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('မှတ်ချက်။') }}</label>
                                    <label class="col-md-11 col-form-label" >{{ __('နိုင်ငံသားစိစစ်ရေးကတ်၊ ဘွဲ့လက်မှတ် မိတ္တူများနှင့် သင်ကြားမှုနှင့် အခြားလုပ်ငန်းအတွေ့အကြုံများအတွက် အထောက်အထားများ ဓာတ်ပုံအပို (၂) ပုံ တင်ပြရမည်။') }}</label>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit Now') }}</button>
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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/mentor_register.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
      $("input[name=‌absent_internship]").on("click", function(evt) {
        var checkedValue = $("input[name='‌absent_internship']:checked").val();
        if(checkedValue == 'absent'){
          $(".absent-reason-show").css('display','block');
        }
        else if(checkedValue == 'not_absent'){
          $(".absent-reason-show").css('display','none');
        }
      });
    });

</script>
@endpush
