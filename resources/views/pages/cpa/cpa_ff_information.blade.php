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
                    <h2 class="title cpaff_initial" style="display:block;">CPA (Full-Fledged) Initial Registration  <span>Form</span></h2>
                    <h2 class="title cpaff_renew" style="display:none;">CPA (Full-Fledged) Renewal Registration  <span>Form</span></h2>
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
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> <!-- container-fluid p-4 -->
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark mb-3">

                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
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
                            <p class="card-text">Your CPAFF registration form is approved! You need to subscribe your teacher service with desire payment method!</p>
                        </div>
                    </div>
                    <!-- <center>
                        <button id="cpaff_modal" value="submit" class="btn btn-success btn-hover-dark w-30"> Go to payment</button>
                    </center> -->
                </div>


								<div id="cpa_initial">
									<div class="row">
										<div class="card col-md-7 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Description</h4>
														<hr>
														<div class="info-list">
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <div class="description-info"></div>
                                                                </div>
                                                            </div>
															<div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="col-md-12 card-title text-success">Requirement</h4>
                                                                    <hr>
                                                                    <div class="requirement-info">
                                                                
                                                                    </div>
                                                                </div>
                                                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card col-md-4 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Fees</h4>
														<hr>
														<div class="info-list">
															<div class="col-md-12">
																<ul>
																		<li><i class="icofont-money"></i> <strong>Application Fee</strong><span class='application-fee'> </li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee</strong><span class='registration-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Yearly Fee</strong><span class='yearly-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Renew Fee</strong><span class='renew-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Delay Fee</strong><span class='delay-fee'></li>
																		<div class="row register-btn">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="col-md-6">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn col-md-2 mb-4 text-dark h6">
                                                                                        <a href="{{url('cpa_ff_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
                                                                                        <button id="cpaff_modal" value="submit" class="btn btn-success btn-hover-dark"> Go to payment</button>
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--Modal-->
<form method="post" class="needs-validation" action="javascript:cpaffPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaffpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant(Full-fledged)-CPA(FF) Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="cpaff_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

            <div class="card border-success mb-3" id="cpaff_renew_form" style="display:none;"><br/><!---->
                <div class="row mb-5">
                    <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                        မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                        လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်ထားခြင်းကိုသက်တမ်းတိုးမြှင့်ရန်လျှောက်ထားခြင်း)
                    </h5>
                    {{--<div class="d-flex justify-content-between">
                        <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                        <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                    </div>--}}
                </div>
                <form method="post" action="javascript:RenewCPAFF();" enctype="multipart/form-data"  id="cpaff_renew_form_submit">

                    <div class="card-body">
	                    {{--<table width="100%">
	                        <tr>
	                            <td width="35%">
	                                <div class="single-form">
	                                    <label class="col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မီ)မှတ်ပုံတင်အမှတ်</label>
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
	                    </table>--}}
						<div class="row">
                            <div class="col-md-8">
                                <div class="row">                                    
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-8 col-form-label" >{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>                                
                                </div>  

                                <div class="row" style="padding-left: 90px;">
                                    <div class="col-md-2 col-form-label pt-4" >{{ __('(က)') }}</div>
                                    <div class="col-md-5 col-form-label pt-4">{{ __('အသက်') }}</div>
                                    <div class="col-md-4 col-form-label pt-4">
                                        <lable id="age"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-7 pull-right">
                                    <img class="col-md-3 profile-style" id="previewImg"  accept="image/png,image/jpeg" alt="">
                                    <p class="mt-2">
                                      <input type="file" class="custom-file-input form-control" id="profile_photo" name="profile_photo" accept="image/*" onchange="previewImageFile(this);" required>
                                      <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
						<!-- <div class="row">
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
                                                    <input type="file"  class="form-control" name="ra" >
                                                    
                                                </div>
                                            </div><br/>
                                        </div>
                                        
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <input type="radio" name="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-form-label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        

                                        <div  id="edu" style="display:none;">  
                                            <div class="row mb-2" id="degree_name0">  
                                                <div class="col-md-1"></div>                                                         
                                                <div class="col-md-4 col-form-label label">                                                              
                                                    <label > ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-1">
																			
                                    				</div>
                                                <div class="col-md-6 col-auto">                                                              
                                                    <input type="text"  class="form-control" name="degree_name0" >
                                                </div>                                                           
                                            </div>
                                            <div class="row mb-2" id="degree_year0">  
                                                <div class="col-md-1"></div>                                                         
                                                <div class="col-md-4 col-form-label label">                                                              
                                                    <label > အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-1">
																			
                                    				</div>
                                                <div class="col-md-6 col-auto">                                                              
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year0" >
                                                </div>                                                           
                                            </div>
                                            
                                            <div class="row mb-4" id="edu0" > 
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-form-label label">                                                              
                                                    <label > Attached Certificate</label>
                                                </div> 
                                                <div class="col-md-1 view_degree_file0">
																			
                                    			</div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="hidden" id="hidden_degree_file0">
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file0" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="AddCPAFFDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>     
                        </div><br/> -->
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
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="cpa_part_2_check" value=""  onClick="CheckPartTwo()" disabled>
                                    </div>
									<label class="col-md-10 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကို အောင်မြင်ပါသည်။</label>
                                </div><br/> 
								<div class="pass_batch_two" style="display:none">
                                    <div class="row mb-3">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4 col-form-label label">အောင်မြင်သည့် သင်တန်းအမှတ်စဉ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="pass_batch_no" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 " >
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4 col-form-label label">ကိုယ်ပိုင်အမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="pass_personal_no" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
								<div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 mt-2">
                                        <input type="radio" name="pass_type" id="qt_pass_check" value=""  onClick="CheckQTPass()" disabled>                                    
                                    </div>    
                                    <label class="col-md-10 col-form-label">အဖွဲ့အစည်းက ပေးအပ်သည့် စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီး မြန်မာနိုင်ငံစာရင်းကောင်စီကကျင်းပခဲ့သည့် အရည်အချင်းစစ်စာမေးပွဲကို အောင်မြင်ခဲ့ပါသည်။</label> 
								</div><br/> 
								<div class="qt_pass" style="display:none">
                                    <div class="row mb-3">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4 col-form-label label">အောင်မြင်သည့် ခုနှစ်/လ</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control qt_pass_date" name="qt_pass_date" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 " >
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label for="" class="col-md-4 col-form-label label">ခုံအမှတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control qt_pass_seat_no" name="qt_pass_seat_no" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                           

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                                </div><br/>
                                    
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                                </div><br/>

                                <div class="row">
                                    
                                    <div class="col-md-6 col-form-label label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်စာမေးပွဲအောင်လက်မှတ်</div>
                                    
                                    <div class="col-md-6 view_cpa_certificate">
                                        <input type="hidden" id="hidden_cpa_certificate">
                                        <!-- <input type="file"  class="form-control" name="cpa_certificate" > -->
                                    </div>
                                </div><br/>

                                <div class="row">
                                   
                                    <div class="col-md-6 col-form-label label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား </div>
                                    <div class="col-md-1 view_mpa_mem_card">

                                    </div>
                                    <div class="col-md-5">
                                    <input type="hidden" id="hidden_mpa_mem_card">
                                                <!-- <input type="file"  class="form-control" name="mpa_mem_card"> -->
                                    </div>                                
                                </div><br/>
								<div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                            </div>
                                            <div class="row">
                                            <input type="hidden" id="hidden_nrc_front">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                    <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                    value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                    <br><span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </p>
                                                                                                       
                                            </div>                                                    
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                            </div>
                                            <div class="row">
                                            <input type="hidden" id="hidden_nrc_back">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCBackImg"  accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                    value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                    <br><span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </p>
                                                                                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                        
                              </div><br> 
							  <div class="row">
                                    <label class="col-md-6 col-form-label label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</label>
                                    
                                    <div class="col-md-6 view_cpd_record">         
                                                                 
                                        <!-- <input type="file"  class="form-control" name="cpd_record" > -->
                                        <input type="hidden" id="hidden_cpd_record">
                                    </div>
                                </div><br/>
								<!-- <div class="row">
                                    <label class="col-md-6 col-form-label label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                                    <div class="col-md-1 ">

                                    </div>
                                    <div class="col-md-5">                                        
                                        <input type="text"  class="form-control" name="total_hours"  >
                                        
                                    </div>
                                </div><br/> -->

                                <div class="row">
                                    <div class="col-md-6 col-form-label label">ပတ်စပို့အရွယ်ဓာတ်ပုံ</div>
                                    
                                    <div class="col-md-6 view_passport_image">
                                        <input type="hidden" id="hidden_passport_image">
                                                <!-- <input type="file"  class="form-control" name="passport_image"  > -->
                                        
                                    </div>
                                </div><br/>

                                
													{{--<div class="row">
												
															<label class="col-md-6 col-form-label label" >{{ __('လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မီ)မှတ်ပုံတင်အမှတ်') }}</label>
                                                            <div class="col-md-1 "> </div>
															<div class="col-md-5">
																	<div class="form-group">
																		<input type="text" class="form-control" id="regno" readonly>
																	</div>
															</div>
													</div>
													<div class="row">
															<label class="col-md-6 col-form-label label" >{{ __('Applied Date') }}</label>
                                                            <div class="col-md-1 "> </div>
															<div class="col-md-5">
																	<div class="form-group ">
																		<input type="text" class="form-control" id="register_date" readonly>
																	</div>
															</div>
													</div>
													<div class="row">
															<label class="col-md-6 col-form-label label">{{ __('Status') }}</label>
                                                            <div class="col-md-1 "></div>
															<div class="col-md-5">
																	<div class="form-group ">
																		<input type="text" class="form-control" id="message" readonly="">
																	</div>
															</div>
													</div>--}}
												<div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                                    <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                                </div><br/>
												<!-- <div class="col-md-3">
													<div class="col-md-8 pull-right">
														<img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
														<p class="mt-2">
															<input type="file" value="" class="custom-file-input" id="" name="profile_photo" onchange="previewImageFile(this);" required>
														</p>
													</div>
												</div> -->
											
											<br/>
                      <div class="row ">
                          <div class="col-md-2 offset-md-5">
                              <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                          </div>
                      </div>
                    </div>
                </form>
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
<script type="text/javascript">
    $('document').ready(function(){
        var course_type = location.pathname.split('/');
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
        $('#profile').on('click', function(e) {
    $('#file').click();
});
$('#file').change(function(e) {

    var input = e.target;
    if (input.files && input.files[0]) {
    var file = input.files[0];

    var reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = function(e) {
        $('.dashes-label').css('color','transparent');
        $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
    }
    }
})
        
        form_feedback();
        loadDescription('CPA (Full Fluged)');
        checkPaymentCpaff();
    })
    //app_form_feedback();

</script>
@endpush
