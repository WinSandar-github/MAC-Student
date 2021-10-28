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
            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title initial_text" style="display:block;">PAPP Initial Registration <span>Form</span></h2>
                    <h2 class="title renew_text" style="display:none;">PAPP Renewal Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->

            </div>
            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
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
                            <p class="card-text reject">Your PAPP registration form is rejected. Please update your information.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="pending" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your PAPP registration form is being checked.</p>
                        </div>
                    </div>
                </div>
                <div id="approved" style="display:none;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body">
                                <p class="card-text">Your PAPP registration form is approved! You need to subscribe your service with desire payment method!</p>
                            </div>
                        </div>

                </div>
								{{--<div class="card-body" id="papp_initial">
									<div class="row">
										<div class="col-md-12 widget-information">
											<div class="row border-bottom">
	                      <h2 class="col-md-6 card-title text-center text-success">PAPP</h2>
                        <div class="col-md-3"></div>
              				</div>
											<!-- Description -->
											<div class="row">
												<div class="col-md-7">
														<h5 class="mt-2"><strong>Description</strong></h5>
														<hr>
														<ul id="papp_description_lists">
																<li>
																	<span>
																		<!-- <i class="icofont-file-document"></i> -->
																		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
																 </span>
															 </li>
														</ul>

														<!-- Requirement -->
														<div class="row">
															<div class="col-md-12">
																	<h5 class="mt-2"><strong>Requirement</strong></h5>
																	<hr>
																	<div class="info-list">
																		<ul>
																			<?php
																				if (is_array($requirements) || is_object($requirements))
																					{
																					    foreach ($requirements as $value)
																					    {
																					        if($value['type'] == "PAPP"){
																			?>
																							<li>
																								<!-- <i class="icofont-man-in-glasses"></i> -->
																								<?php echo $value['name'] ?>
																							</li>
																			<?php
																								}
																					    }
																					}
																			?>
																		</ul>
																	</div>
															</div>
														</div>
												</div>
												<div class="col-md-5">
														<h5 class="mt-2"><strong>Course Fees</strong></h5>
														<hr>
														<div class="info-list">
																<ul>
                                                                        <li><i class="icofont-money"></i> <strong>Application Fee</strong> </li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee for MAC Class</strong></li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee for Self-Study Class</strong> <span></li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee for Private School Class</strong></li>
																		<!-- <li><i class="icofont-money"></i> <strong>Exam Fee</strong></li> -->
																		<li><i class="icofont-money"></i> <strong>Course Fee for MAC Class</strong></li>
																		<li><i class="icofont-ui-note"></i> <strong>Description</strong></li>
																		<li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong></li>
																		<div class="pull-right mt-4">
																			<p class="info-btn col-md-2 mb-4 text-dark h6">
																				<a href="{{url('student_papp')}}" class="btn btn-primary btn-hover-dark" >Register</a>
																			</p>
																		</div>
																</ul>
														</div>
												</div>
											</div>
										</div>
									</div>
								</div>--}}

								<div id="papp_initial">
									<div class="row">
										<div class="card col-md-6 m-2">
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
										<div class="card col-md-5 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Fees</h4>
														<hr>
														<div class="info-list">
															<div class="col-md-12">
																<ul>
																		<li><i class="icofont-money"></i> <strong>Application Fee</strong> <span class='application-fee'></li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee</strong><span class='registration-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Reconnect Fee(per year) From 2015</strong><span class='reconnected-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Reconnect Fee(per year) Before 2015</strong><span class='reconnected-fee-before-2015'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Renewal Fee</strong><span class='renew-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Delay Fee(Within January)</strong><span class='delay-fee'></li>
																		<li><i class="icofont-money"></i> <strong>Delay Fee(From February to April)</strong><span class='late-feb-fee'></li>
                                                                        <div class="row register-btn"  style="display:none">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="col-md-6">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn col-md-2 mb-4 text-dark h6">
                                                                                        <a href="{{url('student_papp')}}" class="btn btn-success btn-hover-dark">Register</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
                                                                                        <button id="papp_modal" value="submit" class="btn btn-success btn-hover-dark"> Go to payment</button>
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
    <form method="post" class="needs-validation" action="javascript:pappPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="pappPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">PAPP Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="papp_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>
    {{-- Renew PAPP --}}
                <div class="card border-success mb-3" id="papp_renew_form" style="display:none;"><br/><!---->
                    <div class="row mb-5">
                        <div style="text-align: right;margin-top:1%;">
                            <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၄)</h6>
                        </div>
                        <h5 class="card-title text-center fw-bolder">
                            မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                            အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် သက်တမ်းတိုးရန်လျှောက်ထားခြင်း
                        </h5>
                        {{--<div class="d-flex justify-content-between">
                            <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                            <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                        </div>--}}
                    </div>
                    <form method="post" action="javascript:selfConfession();" enctype="multipart/form-data" id="papp_renew_form_submit">
                    	<div class="card-body">
						<div class="row">
                                <div class="col-md-9">
                                <div class="row mb-3">
                                    <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>

                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>{{ __('အမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_mm" id="name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_eng" id="name_eng">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-2 col-5 pr-1">
                                                <input type="text" name="nrc_state_region" class="form-control" id="nrc_state_region" readonly="">
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <input type="text" name="nrc_township" class="form-control" id="nrc_township" readonly="">
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <input type="text" name="nrc_citizen" class="form-control" id="nrc_citizen" readonly="">
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                                <input type="text" name="nrc_number" class="form-control" id="nrc_number" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_mm" id="father_name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_eng" id="father_name_eng">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
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
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required=""></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                                {{--User Photo--}}
                            </div>
                                 
                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဃ)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
                                    {{--<div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value="" id="cpa_check" onclick="CPA_Check()" >
                                                <label  class="col-form-label">CPA</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10"  id="cpa_edu" style="display:none;">
                                                <input type="file"  class="form-control" id="cpa_file" name="cpa_file">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value=""  id="ra_check" onclick="RA_Check()" >
                                                <label class="col-form-label">RA</label>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10"  id="ra_edu" style="display:none;">
                                                <input type="file" class="form-control" id="ra_file"  name="ra_file">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-4 col-form-label">
                                                <input type="checkbox" value=""  id="degree_check" onclick="Degree_Check()"  >
                                                <label  style="font-size:15px;">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                        </div>
                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-2" id="degree0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-6 col-auto">
                                                    <input type="type"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="နှစ်၊လ(MMM-YYYY)">
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 col-auto">
                                                    <label for="" class="col-form-labe"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="foreign_degree[]" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary" id="add_btn" onclick="Add()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>--}}

                                <div class="col-md-8">
                                    <div class="row mb-2">
                                        <div class="col-md-7">
                                            <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                            <label class="col-form-label" style="padding-left:5%;">CPA</label>
                                        </div>
                                    </div>
                                    <div id="cpa">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2 cpa_file"></div>
                                            <div class="col-md-8">
                                                <input type="file"  class="form-control" name="cpa" style="display:none">
                                            </div>
                                        </div><br/>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-7">
                                            <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                            <label class="col-form-label" style="padding-left:5%;">RA</label>
                                        </div>
                                    </div>
                                    <div id="ra">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2 ra_file" id="ra_file"></div>
                                            <div class="col-md-8">
                                                <!-- <div class="single-form"> -->
                                                    <input type="file"  class="form-control" name="ra" style="display:none">
                                                <!-- </div> -->
                                            </div>
                                        </div><br/>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-7">
                                            <input type="radio" name="education" id="education" value="3" onclick="getCPAEducation()">
                                            <label class="col-md-5 col-form-label label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                        </div>
                                    </div>
                                    <div  id="edu" style="display:none;">
                                        <div class="row mb-1" id="degree0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 col-auto">
                                                <label for="" class="col-form-label"> ဘွဲ့အမည်</label>
                                            </div>
                                            <div class="col-md-7 col-auto">
                                                <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-2" id="degree_year0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 col-auto">
                                                <label for="" class="col-form-label"> အောင်မြင်သည့်နှစ်/လ</label>
                                            </div>
                                            <div class="col-md-7 col-auto">
                                                <input type="type" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-4" id="edu0" >
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 col-auto">
                                                <label for="" class="col-form-label"> Attached Certificate</label>
                                            </div>
                                            <div class="col-md-2 foreign_degree_file">
                                            </div>
                                            <div class="col-md-5"  id="degree_edu" style="padding-left:5px; display: none;">
                                                <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                            </div>
                                            <div class="col-md-1" id="add_div" >
                                                <button type="button" class="btn btn-primary"  style="padding-left:5px; display: none;" id="add_btn" onclick="AddCPAFFDegree()" >
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpa_batch_no" id="cpa_batch_no">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(စ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="address" id="address">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="contact_mail" id="contact_mail">
                                    </div>
                                </div>
                                {{--<div class="row mb-3" style="padding-left: 15px;">
                                    <div class="col-md-3 col-form-label label">{{ __('CPA(FF) Registeraion No.') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="reg_no" id="reg_no" required="">
                                    </div>
                                </div>--}}
                            </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-12"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်
                                                <input type="text" style="display:inline; width:100px;" name="papp_date" id="papp_date" placeholder="နှစ်(YYYY)" class="form-control" autocomplete="off">ခုနှစ်အတွက်
                                                <input type="text" style="display:inline; width:100px;" name="papp_reg_date" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" class="form-control papp_reg_date" autocomplete="off">ရက်စွဲပါ မှတ်ပုံတင်အမှတ်
                                                <input type="text" class="form-control" name="reg_no" style="display: inline;width: 100px;" placeholder="မှတ်ပုံတင်အမှတ်" required="" autocomplete="off"> ဖြင့်မှတ်ပုံတင်ပေးခဲ့ပီးဖြစ်ပါသည်။
                                                <input type="text" style="display:inline; width:100px;" name="papp_renew_year" id="papp_renew_year" placeholder="နှစ်(YYYY)" class="form-control papp_renew_year" autocomplete="off">ခုနှစ်အတွက် မှတ်ပုံတင်သက်တမ်းတိုးပေးရန် လျှောက်ထားပါသည်။
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၃။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('ကျွန်ုပ်သည် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ရာတွင်') }}</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" id="firm_check" name="work_name" onclick="getPappFirm()"></div>
                                    <div class="col-md-10">

                                        <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                    </div>
                                </div><br/>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="used_firm_check" value="" onclick="getPappFirm()"></div>
                                    <div class="col-md-10">
                                        <label style="font-size:15px;"> အသုံးပြုမည့်လုပ်ငန်းအမည် Firm Name, လုပ်ငန်းအမျိုးစားနှင့် မိမိ၏ အဆင့်မှာ အောက်ပါအတိုင်းဖြစ်ပါသည်-</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမည်</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control"  name="used_firm_name" >
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <!-- <div class="single-form"> -->
                                            <label class="col-form-label">- လုပ်ငန်းအမျိုးအစား (တစ်ဦးတည်းပိုင်/ အစုစပ်/ ကုမ္ပဏီ စသည်)</label>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="single-form"> -->
                                            <input type="text" class="form-control" value="" name="used_firm_type" >
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                    <!-- <div class="single-form"> -->
                                        <label class="col-form-label">-အဆင့်(Principal/ Managing Partner/ Partner စသည်)</label>
                                    <!-- </div> -->
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" value="" name="used_firm_level" ></div>
                                    <!-- </div> -->
                                </div><br>

                                <div class="row mb-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="radio" name="work_name" id="staff_firm_check" value="" onclick="getPappFirm()"></div>
                                    <div class="col-md-4">
                                        <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" name="staff_firm_name" ></div>
                                    <!-- </div> -->
                                </div><br><br><br>

                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၄။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-11"  style="font-size:15px;"><?php echo date("Y") ?> ပြက္ခဒိန်နှစ်အတွင်း အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကိုဦးစီးပိုင်ရှင်/ ဦးဆောင်အဖွဲ့ဝင်/ သာမန်အစုဝင်/ အဖွဲ့ခေါင်းဆောင်အနေဖြင့် ကျွန်ုပ်လက်ခံဆောင်ရွက်ခဲ့သည့် Statutory Audit Work စုစုပေါင်း (<input type="text" style="display:inline; width:50px;" name="total_audit" class="form-control" required="">) ခုရှိပါသည်။ အဆိုပါ Statutory Audit Work အပြည့်အစုံကို အောက်ပါဇယားအတွင်းထုတ်ဖော်ကြေညာပါသည်-</label>
                                        </div><br>



                                    </div>
                                </div><br><br>

                                <div class="row">
                                    <div class="col-md-1">
                                            <label class=""></label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <table class="table tbl_papp table-bordered input-table">
                                                    <thead>
                                                        <tr >
                                                            <th class="less-font-weight text-center" width="8%">စဉ်</th>
                                                            <th class="less-font-weight text-center"  width="37%">လုပ်ငန်းအပ်နှံသည့်ပုဂ္ဂိုလ်/ကုမ္ပဏီ/စီးပွားရေးအဖွဲ့အစည်း/လူမှုရေးအဖွဲ့အစည်း*</th>
                                                            <th class="less-font-weight text-center"  width="15%">စာရင်းကာလ**</th>
                                                            <th class="less-font-weight text-center"  width="40%">တာဝန်ယူဆောင်ရွက်သည့် Principal/Managing Partner/အမှုထမ်းPPA၏အမည်***</th>
                                                            <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowPapp("tbl_papp")'><li class="fa fa-plus"></li></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_papp_body">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">*</div>
                                    <div class="col-md-10">
                                        <p>နှစ်အတွင်း လက်ခံ/ရရှိ Statutory Audit Work လုပ်ငန်းအားလုံးကိုထည့်သွင်းရန်ဖြစ်ပါသည်။</p>
                                        <p>လုပ်ငန်းအပ်နှံသည့် ပုဂ္ဂိုလ်/ကုမ္ပဏီ/စီးပွားရေးအဖွဲ့အစည်း/လူမှုရေးအဖွဲ့အစည်း၏ မှတ်ပုံတင်အမှတ်ကိုပါ ဖော်ပြရန်လိုအပ်ပါသည်။ နှစ်အတွင်းလုပ်ငန်းမရှိလျှင် မရှိကြောင်းဖော်ပြရန်ဖြစ်သည်။</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">**</div>
                                    <div class="col-md-10">
                                        <p>ဆောင်ရွက်ပေးသည့်လုပ်ငန်း၏ စာရင်းကာလဖော်ပြရန်ဖြစ်ပါသည်။</p>                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 fw-bolder">***</div>
                                    <div class="col-md-10">
                                        <p>ထို Statutory Audit Work ကို ဦးဆောင်တာဝန်ယူဆောင်ရွက်သူ (Team Leader) PPA အမည်ကိုဖော်ပြရန်ဖြစ်ပါသည်။</p>                                        
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၅။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('လျှောက်ထားသူ၏ဝန်ခံချက်-') }}</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(က)</div>
                                    <div class="col-md-10">
                                            <label >နှစ်အတွင်းလက်ခံဆောင်ရွက်ခဲ့သည့်လုပ်ငန်းများစာရင်းကို အပြည့်အစုံမှန်ကန်စွာ ဖော်ပြထားသည်။</label>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-10">
                                            <label >လက်ခံဆောင်ရွက်ပေးသည့် လုပ်ငန်းအားလုံးအတွက် နှစ်အလိုက် Register ဖြင့်မှတ်တမ်းတင်ထားရှိပါသည်။MAC မှလိုအပ်၍ တောင်းခံလျှင် တင်ပြနိုင်ပါသည်။</label>
                                    </div>
                                </div><br/>

                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၆။') }}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျက် လျှောက်ထားပါသည်-') }}</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(က)</div>
                                    <div class="col-md-6">
                                        <label >PAPP မှတ်ပုံတင်ကတ်ပြား၊</label>
                                    </div>
									<div class="col-md-4">
                                        <input type="file" class="form-control"  id="papp_file"  name="papp_file" required="" accept="image/*">
                                    </div>
                                    {{--<div class="col-md-4 view_cpa_ff_file">
										<input type="hidden" id="hidden_cpa_ff_file">
                                        <!-- <input type="file" class="form-control"  id="cpa_ff_file"  name="cpa_ff_file"> -->
                                    </div>--}}
                                </div><br/><br>
                                
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ) </div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
									<div class="col-md-4">
                                        <input type="file" class="form-control" id="cpd_record_file" name="cpd_record_file" required="">
                                    </div>
                                </div><br/><br>

                                <div class="row mt-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
                                    <div class="col-md-4">
                                            <input type="text" class="form-control" id="total_hours" name="total_hours" placeholder="စုစုပေါင်း နာရီ" required="" >
                                    </div>
                                </div><br/>
                                
                                <br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                    <div class="col-md-4">
                                                <input type="file"  class="form-control" name="mpa_mem_card_front" id="mpa_mem_card_front" required="" accept="image/*">
                                    </div>
                                </div><br/><br>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                    <div class="col-md-4">
                                        <input type="file" class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back" required="" accept="image/*">
                                    </div>
                                </div>

                               <br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                    <div class="col-md-6 col-form-label">CPA(Full-Fledged) Registeration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="reg_no" id="cpaff_reg_no">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                    <div class="col-md-6 col-form-label">PAPP Registeration No.</div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="papp_reg_no" placeholder="Enter PAPP Registeration No.">
                                    </div>
                                </div><br/><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" onclick="ConfirmSubmitSS()"></div>
                                    <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                </div><br/>
								</div><br>
                              <div class="row ">
                                  <div class="col-md-2 offset-md-5">
                                      <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                                  </div>
                              </div><br/>
                        </div>
                    </form>
              	</div>
            </div>
        </div>
    </div>
    {{-- <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#pappRenewModal">Open modal</button> --}}
    <div id="pappRenewModal" class="multi-step" style="width: 100%;height : 100vh">
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
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
            localStorage.setItem('course_type',course_type[2]);
            $('.register-btn').css('display','none');
        }
        loadDescription('PAPP');
        Papp_feedback();
        checkPaymentPapp();
        // loadCpaffData();
        // loadPappData();
        // loadCpaffInitialData();
    });
    $("#papp_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $("#papp_renew_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $(".papp_reg_date").flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    $("#tax_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    $(document).ready(function() {
        $('#pappRenewModal').MultiStep({
            title:'ဝန်ခံချက်',
            data:[
                {
                    content:`<iframe src="{{ asset('assets/images/TMS requirment(23-9-2021).pdf') }}"  style="overflow:scroll;height:70vh;width:100%" height="100vh" width="70vh"></iframe>
                                <div class="pull-right mt-1">
                                <h6 class="pull-left me-4 fw-bold">အထက်ဖော်ပြပါအချက်များအား</h6>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="self_confession_PAPP" id="accept" value="1">
                                <label class="fw-bold">လက်ခံသည်</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="self_confession_PAPP" id="not-accept" value="2">
                                <label class="fw-bold">လက်မခံပါ</label>
                                </div>
                                <div class="text-danger" id="valid_self_confession_PAPP" style="display : none">
                                </div>
                            </div>`,
                    label   :'ကိုယ်တိုင်ဝန်ခံချက်'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                (၁) မိမိ၏စာရင်းလုပ်ငန်းအတွက် အများသိရှိစေရန်ကြော်ငြာရာတွင် မိမိကိုယ်တိုင်တာဝန်ခံဆောင်ရွက် ပေးနိုင်သည်ထက် သို့မဟုတ် မိမိတွင်ရှိသောအရည်အချင်း သို့မဟုတ် အတွေ့အကြုံထက်ပိုမိုထုတ် ဖော်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio"   name="check1" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check1" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၂) အခြားစာရင်းလုပ်ငန်းလုပ်ကိုင်သူအား ထိခိုက်နစ်နာစေသည့် အချက်အလက်ဖြင့် မိမိလုပ် ငန်းကို ကြော်ငြာခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check2" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check2" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၃) Global network/Association name အသုံးပြု၍ စာရင်းစစ်လုပ်ငန်းအမည်ဖြင့်ကြော်ငြာခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check3" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check3" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၄) မိမိဝန်ဆောင်မှုမပေးသည့်အခြား Client များ၏ အမည်စာရင်းများအား ထည့်သွင်းကြော်ငြာ ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check4" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check4" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၅) လုပ်ငန်းအပ်နှံသူ၏ အမြတ်/ ဝင်ငွေပေါ်တွင် အခြေတည်၍ လုပ်ခငွေ/ အခကြေးငွေတောင်းယူခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check5" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check5" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 1'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                (၆) ကောင်စီကလိုအပ်၍ တောင်းဆိုသည့် စာရင်းများနှင့်စပ်လျဥ်းသည့် အချက်အလက်များကို တင်ပြ ပေးရန်ပျက်ကွက်ခြင်း။
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check6" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check6" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၇) မိမိတစ်ဦးတည်းသာ သိရှိစေသော အကြောင်းအချက်များကို အလုပ်ရှင်၏ ခွင့်ပြုချက်မရဘဲ သို့မဟုတ် တည်ဆဲဥပဒေတစ်ရပ်အရ မဟုတ်ဘဲ အခြားသူထံထုတ်ဖော်အသိပေးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check7" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check7" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၈) မိမိအားပေးအပ်သည့် စာရင်းပညာဆိုင်ရာ အလုပ်ဝတ္တရားများကို ဆောင်ရွက်ရာတွင် ထိုက်သင့် သော သတိပြုခြင်းမရှိဘဲ ဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check8" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check8" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၉) မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၂ (ဍ) ပါ သတ်မှတ်ပြဋ္ဌာန်းထားသည့် စာရင်းလုပ်ငန်း များ၊ Statutory Audit (including component auditor performance),Forensic Audit, Review Engagement , Assurance Engagement  ,Agreed upon Audit Procedures (including Independent Internal Audit) စာရင်းလုပ်ငန်းများနှင့် မြန်မာနိုင်ငံစာရင်းကောင်စီက အခါအားလျော်စွာ သတ်မှတ်သည့်လုပ်ငန်းများကို အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူမဟုတ်သူများနှင့် တွဲဖက်ဖွဲ့စည်းဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check9" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check9" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၀) စာရင်းဖော်ပြချက်၊ ကြေညာချက်၊ လုပ်ငန်းအလားအလာညွှန်းတမ်း၊ ရှင်းတမ်း၊ အစီရင်ခံစာ ငွေစာရင်းစာအုပ်၊ လက်မှတ် သို့မဟုတ် ပုံစံတွင် ပြင်ပစာရင်းစစ်အဖြစ် ထောက်ခံလက်မှတ် ရေးထိုးခြင်းများ၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check10" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check10" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 2'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                (၁၁) စဉ် (၉) နှင့် (၁၀) ပါ စာရင်းလုပ်ငန်းအမျိုးအစားများအား သက်တမ်းရှိသည့် အများပြည်သူသို့စာရင်း ဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်မရှိဘဲလုပ်ကိုင်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check11" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check11" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၂) စာရင်းစစ်လုပ်ငန်းအမည်ဖြင့် မှတ်ပုံတင်ထားသည့် စာရင်းစစ်လုပ်ငန်းအဖွဲ့ဝင်ဖြစ်သူသည် အခြား စာရင်းစစ်လုပ်ငန်းတစ်ခု၌ အဖွဲ့ဝင်အဖြစ်သော်လည်းကောင်း၊ မိမိကိုယ်ပိုင်စာရင်းစစ် လုပ်ငန်းအဖြစ် သော်လည်းကောင်း ဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check12" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check12" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၃) စာရင်းစစ်အစီရင်ခံစာတွင်လက်မှတ်ရေးထိုးရာ၌ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူတစ်ဦးသည် အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်  စာရင်းလုပ်ငန်း အဖွဲ့တစ်ခုထက်ပိုမို၍ လက်မှတ်ထိုးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check13" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check13" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၄) အကျိုးစီးပွားပါဝင်ပတ်သက်မှု၊ အကျိုးစီးပွားချင်း ပဋိပက္ခဖြစ်မှု၊ ဆန့်ကျင်ဖက်ဖြစ်မှု၊ လွတ်လပ်မှုကို ထိခိုက်စေမှု ဖြစ်စေသော လုပ်ငန်းများကို လက်ခံဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check14" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check14" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၅) ယခင်စာရင်းစစ်အဖြစ်ဆောင်ရွက်ခဲ့သူနှင့် ဆက်သွယ်ဆောင်ရွက်ခြင်းမပြုဘဲ ထိုစာရင်းစစ် ရာထူးကို လက်ခံခြင်း သို့မဟုတ် အခြားသူတစ်ဦးဆောင်ရွက်နေသည့် စာရင်းလုပ်ငန်းကို မိမိအတွက် တောင်းယူခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check15" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check15" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 3'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                (၁၆) စာရင်းစစ်များခန့်ထားခြင်းကိစ္စနှင့်စပ်လျဥ်း၍ မြန်မာနိုင်ငံကုမ္ပဏီများအက်ဥပဒေ သို့မဟုတ် သက်ဆိုင်ရာအခြားဥပ‌ဒေပါပြဋ္ဌာန်းချက်များနှင့် ကိုက်ညီခြင်းမရှိသည့်ခန့်ထားမှုများကို လက်ခံဆောင်ရွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check16" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check16" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၇) ကုမ္ပဏီညွှန်းတမ်းတွင်သော်လည်းကောင်း၊ အခြားတစ်နည်းနည်းဖြင့်သော်လည်းကောင်း ပုံနှိပ် ထုတ်ဝေရန် အနာဂတ်အမြတ်ငွေကို ခန့်မှန်းတွက်ချက်အတည်ပြုပေးခြင်း သို့မဟုတ် တစ်နှစ်စီ အတွက် အရှုံးအမြတ်များကို သီးခြားဖော်ပြခြင်းမပြုဘဲ တစ်နှစ်ထက်ပိုသောနှစ်များအတွက် ပျမ်းမျှ အမြတ်ငွေရှင်းတမ်းများကို ပုံနှိပ်ထုတ်ဝေရန်အတည်ပြုပေးခြင်း၊ သို့ရာတွင် လုပ်ငန်းလိုအပ်ချက်အရ ရေးဆွဲတင်ပြမည့် ကိစ္စရပ်များနှင့်သက်ဆိုင်ခြင်း မရှိစေရ၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check17" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check17" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၈) လုပ်ငန်းရှင်ကယုံမှတ်အပ်နှံထားသည့် ငွေကြေးများကို ကိုင်တွယ်ခန့်ခွဲရပါက ယင်းငွေကြေးများကို စနစ်တကျ သုံးစွဲခန့်ခွဲကြောင်း သိသာပေါ်လွင်စေ‌‌ရေးအတွက် လိုအပ်သော စာရင်းမှတ်တမ်းများ သီးခြား ဘဏ်စာရင်းများ ဖွင့်လှစ်ထိန်းသိမ်းရန်ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check18" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check18" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၁၉) လုပ်ငန်း၏ အမြတ် သို့မဟုတ် အရှုံးကို မမှန်မကန်ဖော်ပြထားခြင်းကိုသိလျှက်နှင့် ထုတ်ဖော် တင်ပြရန် ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check19" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check19" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၂၀) စာရင်းပညာရှင်ဆိုင်ရာ ကျင့်ဝတ်သိက္ခာနှင့် စာရင်းလုပ်ငန်းဆိုင်ရာကျင့်ဝတ်စည်းကမ်းများ၊ စံများကို လိုက်နာကျင့်သုံးမှုမရှိခြင်း
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check20" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check20" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 4'
                },
                {
                    content:`<ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item">
                                (၂၁) စာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်ကို ကာလသတ်မှတ်၍ ရုပ်သိမ်းခြင်းခံရသူ သို့မဟုတ် ပယ်ဖျက် ခြင်းခံရသူသည် စည်းကမ်းထိန်းသိမ်းရေးကော်မတီက ဆုံးဖြတ်ချက်ချသည့်နေ့မှ ရက်ပေါင်း ၃၀ အတွင်းစာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်လက်မှတ်ကိုကောင်စီထံပြန်လည်အပ်နှံရန်ပျက်ကွက်ခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check21" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check21" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                             </li>
                            <li class="list-group-item">
                                (၂၂) မည်သည့်စာရင်းဖော်ပြချက်၊ ကြေညာချက်၊ ရှင်းတမ်း၊ အစီရင်ခံစာ၊ ငွေစာရင်းစာအုပ်၊ လက်မှတ် သို့မဟုတ် ပုံစံတွင်မဆို မဟုတ်မမှန်သည့်အချက်ကို သိလျှက်နှင့်ထည့်သွင်းဖော်ပြခြင်း သို့မဟုတ် ထောက်ခံလက်မှတ်ရေးထိုးခြင်း၊မည်သ
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check22" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check22" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၂၃) မိမိကိုယ်တိုင်သော်လည်းကောင်း၊ မိမိလုပ်ငန်း၏ အစုဝင်ကသော်လည်းကောင်း၊ မိမိ၏ ဝန်ထမ်းက သော်လည်းကောင်း၊ ကြီးကြပ်ကွပ်ကဲ၍ ပြည့်စုံစွာ စစ်ဆေးထားခြင်းမရှိသော လက်ကျန် ရှင်းတမ်း၊ အရှုံး/အမြတ်စာရင်း သို့မဟုတ် မည်သည့်စာရင်းဇယားကိုမဆို အတည်ပြုပေးခြင်း သို့မဟုတ် မိမိကိုယ်စား လက်မှတ်ရေးထိုးစေခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check23" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check23" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၂၄) စာရင်းစစ်လုပ်ငန်းအမည်တွင် နိုင်ငံခြားအဖွဲ့အစည်း၏အမည်ကို တိုက်ရိုက်သော်လည်းကောင်း၊ ဆင်တူရိုးမှားသော်လည်းကောင်း၊  တစ်စိတ်တစ်ဒေသသော်လည်းကောင်းသုံးစွဲခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check24" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check24" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                            <li class="list-group-item">
                                (၂၅) မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့်အညီ မြန်မာနိုင်ငံစာရင်းကောင်စီက ထုတ်ပြန်ထားသော အမိန့် ကြော်ငြာစာများအရ နိုင်ငံခြားသားများလုပ်ကိုင်ခွင့်မရှိသော စာရင်းလုပ်ငန်းများကို မိမိအမည်ခံ၍ နိုင်ငံခြားသားများအတွက် ဆောင်ရွက်ပေးခြင်း၊
                                <div class="mt-1">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input accept_PAPP" type="radio" name="check25" value="1">
                                <label class="fw-bold">ရှိ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input not_accept_PAPP" type="radio" name="check25" value="2">
                                <label class="fw-bold">မရှိ</label>
                                </div>
                                <div class="text-danger" id="" style="display : none"></div>
                            </li>
                        </ul>`,
                    label   :'Step 5'
                },
            ],
            final:`
            <ul class="list-group list-group-flush fw-bold">
                <li class="list-group-item">
                    (၂၆) လက်မှတ်ရပြည်သူ့စာရင်းကိုင် မဟုတ်သူအတွက် သို့မဟုတ် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် မဟုတ် သူနှင့် ပူးပေါင်းလုပ်ကိုင်၍ စာရင်းစစ်အနေဖြင့် ဘဏ္ဍာရေးရှင်းတမ်းများအား လက်မှတ်ရေး ထိုးပေးခြင်း၊
                    <div class="mt-1">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input accept_PAPP" type="radio" name="check26" value="1">
                    <label class="fw-bold">ရှိ</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input not_accept_PAPP" type="radio" name="check26" value="2">
                    <label class="fw-bold">မရှိ</label>
                    </div>
                    <div class="text-danger" id="" style="display : none"></div>
                </li>
                <li class="list-group-item">
                    (၂၇) ငွေကြေးခဝါချမှု၊ အကြမ်းဖက်မှုအား ငွေကြေးထောက်ပံ့မှု၊ ပြစ်မှုတစ်ရပ်ရပ်နှင့်စပ်ဆိုင်နိုင်သည်ဟု သံသယဖြစ်ရမှု ဥပဒေတစ်ရပ်ရပ်ကို ချိုးဖောက်ရာရောက်သည်ဟု မှတ်ယူရမှု (Suspicious and unusual transaction/ events) စသည်တို့ကို တွေ့ရှိရပါက တရား မဝင်နည်းလမ်းဖြင့် ရရှိသည့်ငွေကြေးနှင့်ပစ္စည်းများ ဗဟိုထိန်းချုပ်ရေးအဖွဲ့ထံသို့ချက်ချင်း လျှို့ဝှက်သတင်းပေးပို့ရန် ပျက်ကွက် ခြင်း၊
                    <div class="mt-1">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input accept_PAPP" type="radio" name="check27" value="1">
                    <label class="fw-bold">ရှိ</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input not_accept_PAPP" type="radio" name="check27" value="2">
                    <label class="fw-bold">မရှိ</label>
                    </div>
                    <div class="text-danger" id="" style="display : none"></div>
                </li>
                <li class="list-group-item">
                    (၂၈) Public Listed Companies နှင့် Public Interest ပါဝင်သော Companies ( ဥပမာ - Banking, Insurance Company, Real Estate Developer) များတွင် စာရင်းစစ်အဖြစ် ဆောင်ရွက်ပေး သူများသည်    ယင်းလုပ်ငန်းများနှင့်သက်ဆိုင်သော အခြားဝန်ဆောင်မှုများ ကိုဆောင်ရွက်ခြင်း၊
                    <div class="mt-1">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input accept_PAPP" type="radio" name="check28" value="1">
                    <label class="fw-bold">ရှိ</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input not_accept_PAPP" type="radio" name="check28" value="2">
                    <label class="fw-bold">မရှိ</label>
                    </div>
                    <div class="text-danger" id="" style="display : none"></div>
                </li>
                <li class="list-group-item">
                    (၂၉) မြန်မာနိုင်ငံစာရင်းစစ်စံ/ နိုင်ငံတကာစာရင်းစစ်စံပြဋ္ဌာန်းချက်များနှင့် မညီညွတ်သောကိစ္စရပ် များ ဆောင်ရွက်ခြင်း၊
                    <div class="mt-1">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input accept_PAPP" type="radio" name="check29" value="1">
                    <label class="fw-bold">ရှိ</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input not_accept_PAPP" type="radio" name="check29" value="2">
                    <label class="fw-bold">မရှိ</label>
                    </div>
                    <div class="text-danger" id="" style="display : none"></div>
                </li>
            </ul>
            <button class="btn btn-primary pull-right">Submit</button>
            `,
            finishText:'',
            modalSize:'lg',
        });
    });
</script>
@endpush
