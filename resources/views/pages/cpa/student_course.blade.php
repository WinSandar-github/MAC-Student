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
                    <div class="form-wrapper">
                        <!-- <div class="status-reject">
                            <div class="card text-white bg-danger mb-3">
                                
                                <div class="card-body">
                                    <p class="card-text">Your Registration Form is rejected.Please next time register</p>
                                </div>
                            </div>
                        </div> -->
                             <div class="">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        Course List
                                    </div>
                                    <div class="card-body">
                                    
                                        <div class="list-group course-list"></div>
                                    </div>
                                </div>
                            </div>

 
                            <!-- <div class="row">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
		                                  <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">Registration Self Study</a>
                                    </li>
                                    <li class="nav-item">
		                                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">Registration Private Shool</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-space tab-content tab-no-active-fill-tab-content mt-4">
	                                <div class="tab-pane fade show active m-5" id="link1" aria-expanded="true">
                                        <div class="row">
                                            
                                        <form>
                                            <div class="card border-success mb-3">
                                                <div class="card-body ">
                                                    <div class="col-md-12">
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
                                                            <div class="col-md-4">
                                                                
                                                                <label class="form-check-label">(က)ယခုနှစ်</label>
                                                                
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="ယခုနှစ်တက်ရောက်ရရှိခြင်း">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-4 single-form">
                                                                <label>(၁)တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="single-form">
                                                                        
                                                                        <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            
                                                            <div class="col-md-4">
                                                                <label>(ခ)သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း</label>
                                                        
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="သင်တန်းတက်ရောက်ခဲ့ပြီးစာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-4">
                                                                <label>(ဂ)သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း</label>
                                                                
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-4">
                                                                <label>(ဃ)စာမေးပွဲကျရှုံးခြင်း</label>
                                                                
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="စာမေးပွဲကျရှုံးခြင်း">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-4">
                                                                <label>(င)သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း</label>
                                                                
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label class="col-md-8 col-form-label">{{ __('အပိုဒ် ၁၁ ပါ(ခ)/(ဂ)/(ဃ)/(င) အတွက်') }}</label>
                                                            
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
                                                            <label class="col-md-4 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                            
                                                        </div><br/>
                                                        <div class="row">
                                                            <label class="col-md-1 col-form-label"></label>
                                                            <label class="col-md-8 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                            
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
                                    <div class="tab-pane fade m-5" id="link2" aria-expanded="true">
                                        <div class="row">
                                        <form>
                                            <div class="card border-success mb-3">
                                                <div class="card-body ">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                                <div class="single-form">
                                                                    <label class="col-form-label">{{ __('၁။') }}</label>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-form">
                                                                    <label class="col-form-label">{{ __('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်') }}</label>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="single-form">
                                                                    <input type="text" name="" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            
                                                        </div><br/>
                                                       
                                                        <div class="row">
                                                            <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label class="col-md-4 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                            
                                                        </div><br/>
                                                        <div class="row">
                                                            <label class="col-md-1 col-form-label"></label>
                                                            <label class="col-md-8 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီကချမှတ်သည့်စည်းကမ်းများကို လိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျှက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                                            
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
                                
                                
                                            
                            </div> -->
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
    getCourse();
</script>
@endpush