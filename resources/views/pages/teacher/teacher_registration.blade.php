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
                    <h2 class="title">Teacher Registration  <span>Form</span></h2>
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
            <div id="teacher_pending" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your Teacher Registeration Form is checking</p>
                    </div>
                </div>
            </div>
            <div id="teacher_approve" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your Teacher Registeration Form is approved!</p>
                    </div>
                </div>
            </div><br/>
            <div class="row" id="teacher_renew" style="display:none;">
                    <div class="card border-success mb-3">
                        <div class="card-body">
                            <div class="col-md-12">
                            <h5 class="card-title text-center">သင်တန်းဆရာ မှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားခြင်း</h5> <br/>
                                <form enctype="multipart/form-data" action="javascript:renewTeacher();">

                                    <table width="100%">
                                        <tr>
                                            <td width="20%">
                                                <div class="single-form">
                                                    <label class="col-form-label">သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</label>
                                                </div>
                                            </td>
                                            <td width="75%">
                                                <div class="single-form">
                                                    <input type="text" class="form-control" id="regno" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%">
                                                <div class="single-form">
                                                    <label class="col-form-label">Applied Date</label>
                                                </div>
                                            </td>
                                            <td width="75%">
                                                <div class="single-form">
                                                    <input type="text" class="form-control" id="register_date" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%">
                                                <div class="single-form">
                                                    <label class="col-form-label">Status</label>
                                                </div>
                                            </td>
                                            <td width="75%">
                                                <div class="single-form">
                                                    <input type="text" class="form-control" id="message" readonly="">
                                                </div>
                                            </td>
                                        </tr>
                                    </table><br/>
                                    <div class="row ">
                                        <div class="col-md-2 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-5">


                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <div id="teacher_form" class="card border-success mb-3">
                        <div class="card-body">
                            <form id="teacher_register_form" enctype="multipart/form-data" action="javascript:createTeacherRegister();" class="needs-validation" autocomplete="off" novalidate>
                                <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label class="col-md-3 col-form-label">{{ __('အီးမေးလ်') }}</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="အီးမေးလ်လိပ်စာထည့်ပါ။" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label class="col-md-3 col-form-label">{{ __('လျို့ဝှက်နံပါတ်') }}</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="လျို့ဝှက်နံပါတ် ထည့်ပါ။" autocomplete='off' required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label class="col-md-3 col-form-label">{{ __('လျို့ဝှက်နံပါတ်အတည်ပြုခြင်း') }}</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="password" name="confirm_password" class="form-control" placeholder="လျို့ဝှက်နံပါတ်ကို နောက်တစ်ကြိမ်ထပ်မံထည့်ပါ။" autocomplete='off' required>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="name_mm" id="name_mm" class="form-control"  placeholder="အမည်(မြန်မာ)"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="name_eng" class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" placeholder="အဘအမည် (မြန်မာ)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_eng" class="form-control" placeholder="အဘအမည် (အင်္ဂလိပ်)" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('၆။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
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
                                            <input type="text" name="nrc_number" id="nrc_number" placeholder="ဥပမာ။ ။၁၂၃၄၅၆" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" required>
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
                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('တယ်လီဖုန်းနံပါတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" placeholder="တယ်လီဖုန်းနံပါတ်" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း (ရရှိထားသော တက္ကသိုလ်/ဘွဲ့/ဒီပလိုမာ)') }}</label>
                                    <div class="col-md-8">
                                        <table class="table tbl_degree table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">ပညာအရည်အချင်း</th>
                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_degree_body">

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                    <div class="col-md-11 pull-right">
                                        <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                    </div>

                                </div>
                                <div class="row" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="form-check col-md-4">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee" value="1">
                                                <label class="form-check-label" for="yes-servant">{{ __('ဟုတ်') }}</label>
                                            </div>
                                            <div class="form-check col-md-4">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee" value="0">
                                                <label class="form-check-label" for="no-servant">{{ __('မဟုတ်') }}</label>

                                            </div>
                                            <div class="col-md-4">
                                                <label class="invalid-feedback gov_employee text-danger">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးပါ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div></br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ') }}</label>
                                    <div class="col-md-6 pull-right" style="text-align:right;">
                                        <label class="invalid-feedback col-form-label certificate text-danger">သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ ထည့်ပါ</label><br>
                                    </div>

                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label" >{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label" >{{ __('(က)လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း') }}</label>
                                    <div class="col-md-8">
                                        <table class="table tbl_certificate table-bordered input-table">
                                            <thead>
                                                <tr>
                                                    <th class="less-font-weight text-center"  width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center"  width="80%">လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း</th>
                                                    <th  class="less-font-weight text-center"  width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSubject("tbl_certificate")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_certificate_body">

                                            </tboddy>
                                        </table>
                                    </div>
                                </div>

                                <div class="row" >
                                    <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label" >{{ __('(ခ)ဒီပလိုမာစာရင်းကိုင်သင်တန်း') }}</label>
                                    <div class="col-md-8">
                                        <table class="table tbl_diploma table-bordered input-table">
                                            <thead>
                                                <tr>
                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                    <th class="less-font-weight text-center" width="80%">ဒီပလိုမာစာရင်းကိုင်သင်တန်း</th>
                                                    <th class="less-font-weight text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowDipSubject("tbl_diploma")'><li class="fa fa-plus"></li></button></td>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_diploma_body">

                                            </tboddy>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                    <label class="col-md-3 col-form-label">{{ __('သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control " name="exp_desc" rows="3" placeholder="သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ" required></textarea>
                                        </div>
                                    </div>
                                </div><br/>


                                {{--<div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label mt-1"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></label>
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>
                                </div>--}}


                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label ">{{ __('မှတ်ချက်။') }}</label>
                                    <label class="col-md-11 col-form-label" >{{ __('နိုင်ငံသားစိစစ်ရေးကတ်၊ ဘွဲ့လက်မှတ် မိတ္တူများနှင့် သင်ကြားမှုနှင့် အခြားလုပ်ငန်းအတွေ့အကြုံများအတွက် အထောက်အထားများ ဓာတ်ပုံအပို (၂) ပုံ တင်ပြရမည်။') }}</label>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" >{{ __('Submit') }}</button>
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
<script src="{{asset('assets/js/teacher_register.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $( "#teacher_register_form" ).submit(function( event ) {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            var tbl_degree = $('.tbl_degree_body tr').length;
            var tbl_certificate = $('.tbl_certificate_body tr').length;
            var tbl_diploma = $('.tbl_diploma_body tr').length;
            if (!checkedNum) {
                $(".gov_employee").show();
                event.preventDefault();
            }
            if(!tbl_degree){
                $(".degree").show();
                event.preventDefault();
            }
            if(!tbl_certificate){
                $(".certificate").show();
                event.preventDefault();
            }
            if(!tbl_diploma){
                $(".certificate").show();
                event.preventDefault();
            }
        });
        $('input[type=radio][name="gov_employee"]').change(function() {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            if (!checkedNum) {
                $(".gov_employee").show();
            }
            else {
                $(".gov_employee").hide();
            }
        });
        $("input[id*='name_mm'], text[id*='name_mm']").on('keyup', function(e) {
            myanmarLetterOnly($(this));
        });
        $(document).on('keydown', '#name_mm', function () {
            myanmarLetterOnly($(this));
        });
        $("input[id*='father_name_mm'], text[id*='father_name_mm']").on('keyup', function(e) {
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
        teacher_reg_feedback();
    });

</script>
@endpush
