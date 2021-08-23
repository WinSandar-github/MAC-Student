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
                <h2 class="title">DA One Registration  <span>Form</span></h2>
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
    <div class="container approve_request" style="overflow: hidden;">
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">
                        
                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your DA 1 Registration Form need to prepare.Please update your form  
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
                            <p class="card-text">You have the opportunity to attend the training  </p>
                            
                            
                        </div>
                    </div>
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body add_exam">
                             
                            
                        </div>
                    </div>
                </div>
                <div class="comment-form study" style="display:none;">
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-center border-success text-success" onclick="selectedRegistration(3)" id="mac_card">
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
                                                             
                            </div><br/>

                            <div class="row" id="mac_container">
                                <form method="post" action="javascript:createMac();" enctype="multipart/form-data">
                                    <div class="card border-success mb-3">
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
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="student_regno" readonly>
                                                        </div>
                                                    </div>
                                                </div><br/>
                                                {{--<div class="row mb-3">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၂။') }}</label>
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
                                                </div>--}}
                                                <!-- <div class="row">
                                                    <div class="col-md-1">  
                                                    </div>
                                                    
                                                </div><br/> -->
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၂။') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" name="" class="form-control" placeholder="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">                                                    
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_mac" onclick="ConfirmSubmitMac()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>  
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac" disabled>{{ __('Submit') }}</button>
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
                                                    <div class="col-md-5">
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
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" name="" class="form-control" placeholder="" id="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_pp" onclick="ConfirmSubmitPP()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                    
                                                </div><br/>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" disabled>Submit</button>
                                                    </div>                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>            
                            </div>
                            <div class="row" id="self_study_container">
                                <form id="self_study_form" method="post" action="javascript:createSelfStudy();" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card border-success mb-3">
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
                                                {{--<div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၁။') }}</label>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                            
                                                        </div>
                                                    </div>  
                                                </div><br/>--}}

                                                <div class="row mb-3">
                                                    <div class="col-md-1"><label class="form-check-label">၁။</label></div>                                                    
                                                    <div class="col-md-6 single-form">
                                                        <label>တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text"  class="form-control" name="student_regno" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(က)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="ယခုနှစ်တက်ရောက်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label class="form-check-label">ယခုနှစ်တက်ရောက်ခြင်း</label>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ခ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ဂ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(ဃ)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>စာမေးပွဲကျရှုံးခြင်း</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                        <label class="form-check-label">(င)</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" name="reg_reason[]">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label>သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                    </div>                                                    
                                                </div>

                                                <!-- <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                    <label class="col-md-8 col-form-label">{{ __('အပိုဒ် ၁ ပါ(ခ)/(ဂ)/(ဃ)/(င) အတွက်') }}</label>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('၂။') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="col-form-label">{{ __('သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" name="" class="form-control" placeholder="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" form="self_study_form" id="submit_btn_ss" disabled>{{ __('Submit') }}</button>
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
    
    <br/></br/>    
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
    loadExam();
    reg_feedback();
    $("input[name='mac_date']").flatpickr({
        enableTime: false,
        dateFormat: "d-m-Y",
    });

</script>

@endpush