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
                    <h2 class="title">CPAFF Registration  <span>Form</span></h2>
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
                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="check_age" id="check_age">
                    <label class="col-md-12 col-form-label">{{ __('အသက် ၂၁ မပြည့်​သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>
                            
                    <br/>  
                    <br/>  
                    <br/>  
                </div>          
                <div class="col-md-12 text-center" style="display:none;font-weight:bold;font-size:20px;" name="pass_cpa_two" id="pass_cpa_two">
                    <label class="col-md-12 col-form-label">{{ __('CPA 2 မအောင်မြင်သေးပါသဖြင့် ဤ Form အား ဖြည့်စွက်၍ မရနိုင်ပါ။') }}</label>
                            
                    <br/>  
                    <br/>  
                    <br/>  
                </div>       
                <div id="rejected" style="display:none">
                    <div class="card text-white bg-dark my-3">                            
                        <div class="card-body">
                            <p class="card-text reject">Your CPAFF registration form is rejected. Please update your information. 
                            </p>
                        </div>
                    </div>
                </div>
                <div id="pending" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body">
                            <p class="card-text">Your CPAFF registration form is being checked.</p>
                        </div>
                    </div>
                </div>
                <div id="approved" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body">
                            <p class="card-text">Your CPAFF registration form is approved.</p>
                        </div>
                    </div>
                    
                </div>
                <div id="expiry_card" style="display:none;">
                    <div class="card border-danger my-3" style="height:60px;">
                        <div class="card-body">
                            <p  class="card-text" id="expire"></p>
                        </div>
                    </div>
                </div>
                <div class="card border-success mb-3" id="cpaff_from" style="display:none;">
                    <div class="card-body">
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                            <label class="col-md-8 col-form-label">{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>                                
                        </div>              

                        {{--<div class="row">
                            <div class="col-md-1 col-form-label"></div>
                            <div class="col-md-1 col-form-label pt-4">{{ __('(က)') }}</div>
                            <div class="col-md-3 col-form-label pt-4">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                            <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2  px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_township" id="nrc_township">
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 px-1">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3 pl-1">
                                            <div class="single-form">
                                            <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"   maxlength="6">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="single-form">
                                                <button type="submit" onclick="SearchStudentID()"  class="btn btn-primary btn-hover-dark">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div> <br/>     --}}
                        <div class="row">
                            <div class="col-md-1 col-form-label"></div>
                            <div class="col-md-1 col-form-label pt-4">{{ __('(က)') }}</div>
                            <div class="col-md-3 col-form-label pt-4">{{ __('အသက်') }}</div>
                            <div class="col-md-7 col-form-label pt-4">
                                <lable id="age"></label>
                            </div>
                        </div>

                        <form method="post" action="javascript:createCPAFFRegister();" enctype="multipart/form-data">
                            <fieldset id="fieldset" disabled>
                            <!-- <fieldset id="fieldset" > -->
                                <input type="hidden" name="status">
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-7">
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                                <label class="col-form-label">CPA</label>
                                            </div>
                                        </div>
                                        <div id="cpa">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <input type="file"  class="form-control" name="cpa" >
                                                </div>
                                            </div><br/>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                                <label class="col-form-label">RA</label>
                                            </div>
                                        </div>
                                        <div id="ra">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <!-- <div class="single-form"> -->
                                                        <input type="file"  class="form-control" name="ra" >
                                                    <!-- </div> -->
                                                </div>
                                            </div><br/>
                                        </div>
                                        
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-form-label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        <div id="accredited_foreign_degree">
                                            <div class="file1">
                                                <div class="fileupload1">
                                                    <div class="row mb-2">  
                                                        <div class="col-md-1"></div>                                                         
                                                        <div class="col-md-4 col-auto">                                                              
                                                            <label for="" class="col-form-labe"> ဘွဲ့အမည်</label>
                                                        </div>
                                                        <div class="col-md-6 col-auto">                                                              
                                                            <input type="text"  class="form-control" name="degree_name" placeholder="ဘွဲ့အမည်">
                                                        </div>                                                           
                                                    </div>
                                                    <div class="row mb-2">  
                                                        <div class="col-md-1"></div>                                                         
                                                        <div class="col-md-4 col-auto">                                                              
                                                            <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                        </div>
                                                        <div class="col-md-6 col-auto">                                                              
                                                            <input type="type"  class="form-control" name="degree_pass_year" placeholder="DD-MMM-YYYY">
                                                        </div>                                                           
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-4 col-auto">                                                              
                                                            <label for="" class="col-form-labe"> Attached Certificate</label>
                                                        </div>
                                                        <div class="col-md-6 col-auto">
                                                            <!-- <div class="single-form"> -->
                                                                <input type="file"  class="form-control" name="foreign_degree[]" >
                                                            <!-- </div> -->
                                                        </div>
                                                        <div class="col-md-1 col-auto">
                                                            <button class="btn btn-primary btn-add" type="button" onclick='addInputFile("file1","fileupload1")'>
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>     
                                </div><br/>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label pt-4">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-3 col-form-label pt-4">{{ __('CPAအပတ်စဥ် /ကိုယ်ပိုင်အမှတ်') }}</label>
                                    <div class="col-md-7">
                                        <div class="single-form">
                                            <input type="text" name="cpa_no" class="form-control" id="cpa_no">
                                        </div>
                                    </div>
                                </div></br> -->

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လျှောက်ထားသူ၏ပညာအရည်အချင်းဆိုင်ကြေညာချက်(ဆိုင်ရာအကွက်တွင်အမှန်ခြစ်အမှတ်အသားပြု၍ဖြည့်ပေးပါ)') }}</label>                                
                                </div><br/>

                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားတော်၏နိုင်ငံသားဖြစ်ပြီး ') }}</label>
                                    
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <input type="radio" name="pass_type" id="cpa_part_2_check" value="" required="">
                                    </div>
                                    <!-- <div class="col-md-10">  
                                        <div class="row">
                                            <label class="col-md-5 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="lyear" placeholder="ခုနှစ်">
                                            </div>
                                            <label class="col-md-3 col-form-label">ခုနှစ် တွင် ကိုယ်ပိုင်အမှတ် </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="personal_no" placeholder="ကိုယ်ပိုင်အမှတ်">
                                            </div>
                                            <label class="col-form-label">ဖြင့် အောင်မြင်ပါသည်။</label>
                                        </div>  
                                    </div> -->
                                    <label class="col-md-10 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို အောင်မြင်ပါသည်။</label>
                                </div><br/>                       

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <input type="radio" name="pass_type" id="qt_pass_check" value="" required="">                                    
                                    </div>    
                                    <label class="col-md-10 col-form-label">အဖွဲ့အစည်းက ပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီး မြန်မာနိုင်ငံစာရင်းကောင်စီကကျင်းပခဲ့သည့် အရည်အချင်းစစ်စာမေးပွဲကို အောင်မြင်ခဲ့ပါသည်။</label> 
                                    <!-- <div class="col-md-10">
                                        <div class="row mb-1">
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="country" placeholder="နိုင်ငံ">
                                            </div>
                                            <label class="col-md-1 col-form-label">နိုင်ငံ</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="organization" placeholder="အဖွဲ့အစည်း">
                                            </div>
                                            <label class="col-md-7 col-form-label">အဖွဲ့အစည်းက ပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီး</label>
                                        </div>   
                                        <div class="row mb-1">
                                            <label class="col-md-3 col-form-label">မြန်မာနိုင်ငံစာရင်းကောင်စီက </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="fyear" placeholder="ခုနှစ်">
                                            </div>
                                            <label class="col-md-1 col-form-label">ခုနှစ်</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="month" placeholder="လ">
                                            </div>
                                            <label class="col-md-4 col-form-label">လတွင် ကျင်းပခဲ့သည့် အရည်အချင်းစစ် </label>
                                        </div> 
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">စာမေးပွဲကို ခုံအမှတ်</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="seat_num" placeholder="ခုံအမှတ်">
                                            </div>
                                            <label class="col-md-7 col-form-label">ဖြင့် အောင်မြင်ခဲ့ပါသည်။</label>
                                            
                                        </div> 
                                    </div> -->
                                    
                                </div><br/>                           

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                                </div><br/>
                                    
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်စာမေးပွဲအောင်လက်မှတ်</div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="cpa_certificate" required="">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား </div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="mpa_mem_card" required="" >
                                    </div>                                
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-6 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</div>

                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="nrc_front" required="" >
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-6 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</div>

                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="nrc_back" required="" >
                                        
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <label class="col-md-6 col-form-label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</label>
                                    <div class="col-md-4">
                                        
                                                <input type="file"  class="form-control" name="cpd_record" required="" >
                                        
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    
                                    <div class="col-md-6 col-form-label">ပတ်စပို့အရွယ်ဓာတ်ပုံ</div>
                                    <div class="col-md-4">
                                        
                                                <input type="file"  class="form-control" name="passport_image" required="" >
                                        
                                    </div>
                                </div><br/>
                                    
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label mt-1"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></label>
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>
                                    
                                </div>                           
                            
                            
                                <div class="row">
                                    <div class="col-md-3 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" disabled>{{ __('Submit') }}</button>
                                    </div>
                                </div>	
                            </fieldset>
                        </form>
                    </div>
                </div>
            <div>
            <div class="card border-success mb-3" id="cpaff_renew_form" style="display:none;"><br/>
                <h5 class="card-title text-center">CPA (Full-Fledged) မှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားခြင်း</h5> <br/>                   
                <form method="post" action="javascript:RenewCPAFF();" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                            <div class="col-md-7 col-form-label">သက်တမ်းတိုးလျှောက်လွှာ</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_file" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                            <div class="col-md-7 col-form-label"> MICPA membership ကတ် ( သက်ဆိုင်ရာ ပြက္ခဒိန်နှစ်အတွပ် သက်တမ်းတိုးပြီး ဖြစ်ရပါမည်။)</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_micpa" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                            <div class="col-md-7 col-form-label"> CPD နာရီ မှတ်တမ်းအထောက်အထားများ ( သက်တမ်းတိုးမည့် ပြက္ခဒိန်နှစ်မတိုင်မီ ကပ်လျက်ရှိသော နှစ်၏ နိုင်ဝင်ဘာလမတိုင်မီ (၁၂) လအတွင်း CPD နာရီ အနည်းဆုံး ၂၀ နာရီ ပြည့်မီရမည်ဖြစ်ပြီး တစ်ဆက်တည်းသုံးနှစ်တွင် စုစုပေါင်းနာရီ ၁၂၀ ပြည့်မီရမည်ဖြစ်ပါသည်။)</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_cpd" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                            <div class="col-md-7 col-form-label"> CPA (full-fledged) မှတ်ပုံတင်ကတ်</div>
                            <div class="col-md-4">
                                <div class="">
                                        <input type="file"  class="form-control" name="renew_cpaff_reg" required="">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-2 offset-md-5">
                                <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                            </div>
                        </div>	
                    </div>
                </form>
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
<script type="text/javascript">
    isLoginCPAFF();
    form_feedback();
    $("input[name='degree_pass_year']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
        });
</script>
@endpush