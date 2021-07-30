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
        <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
        <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ul>
                <h2 class="title">Registration  <span>Form</span></h2>
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
                
                <div class="comment-form">
                <input type="hidden" name="form_type" value="da two">
                    <div class="form-wrapper">
                        <div class="">
                            
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-success text-center text-success" onclick="selectedRegistration(1)" id="self_study_card">
                                        <div class="card-body ">
                                            <label name="register_name"> Registration Self Study</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center" onclick="selectedRegistration(2)" id="private_card">
                                        <div class="card-body">
                                            <label  name="register_name"> Registration Private Shool</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center" onclick="selectedRegistration(3)" id="mac_card">
                                        <div class="card-body">
                                            <label  name="register_name"> Registration Mac</label>
                                        </div>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="row" id="self_study_container">
                                <form id="self_study_form" method="post" action="javascript:createSelfStudy();" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card border-success mb-3">
                                        <div class="card-body text-success">
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
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၁။') }}</label>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း{အမှန်ခြစ်အမှတ်အသားပြုရန်}') }}</label>
                                                            
                                                        </div>
                                                    </div>  
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <label class="form-check-label">(က)ယခုနှစ်</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="ယခုနှစ်တက်ရောက်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-5 ">
                                                        <div class="single-form">
                                                            <label class="col-form-label">(၁)တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="student_regno" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <label class="form-check-label">(ခ)သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" name="reg_reason[]">
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <label class="form-check-label">(ဂ)သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <label>(ဃ)စာမေးပွဲကျရှုံးခြင်း</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" name="reg_reason[]">
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <label>(င)သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" name="reg_reason[]">
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-8 col-form-label">{{ __('အပိုဒ် ၁ ပါ(ခ)/(ဂ)/(ဃ)/(င) အတွက်') }}</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('တက်ရောက်ခွင့်ရရှိသည့်သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" name="" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-11 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label"></label>
                                                    <label class="col-md-11 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11 d-md-flex justify-content-md-end single-form">
                                                        <button type="submit" class="btn btn-primary btn-hover-dark" form="self_study_form">{{ __('Save') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row" id="private_school_container">
                                <form method="post" action="javascript:createPrivateSchool();" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card border-success mb-3">
                                        <div class="card-body text-success">
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
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class=" col-form-label">{{ __('၁။') }}</label> 
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="student_regno" readonly>
                                                        </div>
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class=" col-form-label">{{ __('၂။') }}</label> 
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="col-form-label">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်နှစ်/လ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-11 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                    
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label"></label>
                                                    <label class="col-md-11 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                    
                                                </div>
                                                <div class="row">
                                                <div class="col-md-11 d-md-flex justify-content-md-end single-form">
                                                    <button type="submit" class="btn btn-primary btn-hover-dark">{{ __('Save') }}</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>            
                            </div>
                            <div class="row" id="mac_container">
                                <form method="post" action="javascript:createMac();" enctype="multipart/form-data">
                                    <div class="card border-success mb-3">
                                        <div class="card-body text-success">
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
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၁။') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="single-form">
                                                            <label class="col-form-label">တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="student_regno" readonly>
                                                        </div>
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၂။') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('လျှောက်လွှာကြေး ၁၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၈၀၀၀ကျပ်၊သင်တန်းကြေး ၃၀၀၀၀ကျပ်၊စုစုပေါင်းသင့်ငွေ ၃၉၀၀၀ကို ပေးသွင်းပြီးသည့်ပြေစာအမှတ်') }}</label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">  
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="single-form">
                                                            <input type="text" name="" class="form-control" >
                                                        </div>
                                                    </div>  
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <label class="col-md-11 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label"></label>
                                                    <label class="col-md-11 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>  
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11 d-md-flex justify-content-md-end single-form">
                                                        <button type="submit" class="btn btn-primary btn-hover-dark">{{ __('Save') }}</button>
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
    </div><br/></br/>    
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
    loadCourse();
    var exam_date=localStorage.getItem("exam_date");
    $("input[name='exam_date']").val(formatDate(exam_date));
</script>
@endpush