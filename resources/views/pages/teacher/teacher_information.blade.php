@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')
<style>
    .form-group{
        margin-bottom: 1rem;
    }

</style>
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
                    <h2 class="title">Teacher <span>Detail</span></h2>
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
                <div class="check_registration" style="display:none; margin-left: 7%; margin-right: 7%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your Application Form is checking</p>
                        </div>
                    </div>
                </div>
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
                            <p class="card-text">Your Teacher Registeration Form is approved! You need to subscribe your teacher service with desire payment method!</p>
                        </div>
                    </div>
                    <!-- <center>
                        <button id="teacher_modal" value="submit" class="btn btn-success btn-hover-dark w-30"> Go to payment</button>
                    </center> -->
                </div><br/>
								{{--<div class="card-body" id="teacher_initial">
									<div class="row">
										<div class="col-md-12 widget-information">
											<div class="row border-bottom">
                                        <h2 class="col-md-6 card-title text-center text-success">Teacher</h2>
                                        <div class="col-md-3"></div>
                                            </div>
											<!-- Description -->
											<div class="row">
												<div class="col-md-7">
														<h5 class="mt-2"><strong>Description</strong></h5>
														<hr>
														<div class="info-list description-info">
                                                            
														</div>

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
																					        if($value['type'] == "TEACHER"){
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
																				<a href="{{url('teacher_register')}}" class="btn btn-primary btn-hover-dark" >Register</a>
																			</p>
																		</div>
																</ul>
														</div>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
                                 <!--Modal-->
    <form method="post" class="needs-validation" action="javascript:teacherPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="teacherpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Teacher Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="teacher_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

                                                         
								<div id="teacher_initial">
									<div class="row">
										<div class="card col-md-7 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Description</h4>
														<hr>
														<div class="info-list">
                                                            <div class="description-info">
                                                            
                                                            </div>
															<br/>
															
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
										<div class="card col-md-4 m-2">
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
                                                                        <li><i class="icofont-money"></i> <strong>Yearly Fee</strong><span class='yearly-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Renew Fee</strong><span class='renew-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Delay Fee</strong><span class='delay-fee'></li>
																		<div class="row register-btn">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="col-md-6">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn col-md-2 mb-4 text-dark h6">
                                                                                        <a href="{{url('teacher_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
                                                                                        <button id="teacher_modal" class="btn btn-success btn-hover-dark"> Go to payment</button>
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

                                <div class="row" id="teacher_renew" style="display:none;">
                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                            <div class="col-12">
                                            <h5 class="card-title text-center">သင်တန်းဆရာ မှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားခြင်း</h5> <br/><br/>
                                                <form enctype="multipart/form-data" action="javascript:renewTeacher();" id="teacher_renew_form">
                                                    <div class="row">
                                                        <div class="col-md-8">

                                                            <div class="row">
                                                                <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>

                                                                <label class="col-md-5 col-form-label label" >{{ __('အီးမေးလ်') }}</label>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                    <input type="email" name="email" class="form-control" autocomplete='off' disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="name_eng" class="form-control"autocomplete='off' disabled>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="row">
                                                                <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" autocomplete='off' disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="text" name="father_name_eng" class="form-control" autocomplete='off' disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-md-1 col-form-label ">{{ __('၄။') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                                                <div class="col-md-6">
                                                                    <div class="row" >
                                                                        <div class="col-md-2 col-5 px-1">
                                                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region" disabled>
                                                                                @foreach($nrc_regions as $region)
                                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3 col-7 px-1">
                                                                            <select class="form-control" name="nrc_township" id="nrc_township" disabled>
                                                                                @foreach($nrc_townships as $township)
                                                                                    <option value="{{ $township['township_mm'] }}">
                                                                                        {{ $township['township_mm'] }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2 col-5 px-1">
                                                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen" disabled>
                                                                                @foreach($nrc_citizens as $citizen)
                                                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-5 col-7 pl-1">
                                                                        <input type="text" name="nrc_number" id="nrc_number" disabled autocomplete='off'  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-7 pull-right">
                                                                <input type="hidden" id="hidden_profile">
                                                                <img class="col-md-3 profile-style" id="previewImg"  accept="image/png,image/jpeg" alt="">
                                                                <p class="mt-2">
                                                                    <input type="file" class="custom-file-input form-control" id="profile_photo" accept="image/*" name="profile_photo" onchange="previewImageFile(this);"  required>
                                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                </div><br/>
                                                
                                                <div class="row">
                                                    <label for="" class="col-md-4 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label ">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                </div><br>

                                                    <div class="row">
                                                        <label for="" class="col-md-4 col-form-label">{{ __('') }}</label>
                                                        
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="hidden" id="hidden_nrc_front">
                                                                    <div class="row">
                                                                            <img class="nrc-style" id="nrc_front_img"  accept="image/png,image/jpeg" alt="">
                                                                            <p class="mt-2">
                                                                            <input type="file" class="nrc-custom-file-input" name="nrc_front"  onchange="previewNRCFile('nrc_front','nrc_front_img');">
                                                                                <br/><span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                                                
                                                                            </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="hidden" id="hidden_nrc_back">
                                                                        <div class="row">
                                                                            <img class="nrc-style" id="nrc_back_img"  accept="image/png,image/jpeg" alt="">
                                                                            <p class="mt-2">
                                                                            <input type="file" name="nrc_back" class="nrc-custom-file-input" onchange="previewNRCFile('nrc_back','nrc_back_img');">
                                                                            <br/><span class="form-text text-danger">Allowed Jpeg and Png Image.</span>  
                                                                            </p>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်') }}</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                        <input type="text" name="phone_number" class="form-control" autocomplete='off'>
                                                        </div>
                                                    </div>

                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                    <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း (ရရှိထားသော တက္ကသိုလ်/ဘွဲ့/ဒီပလိုမာ)') }}</label>
                                                    <div class="col-md-8">
                                                        <table class="table tbl_degree table-bordered input-table" id="tbl_degree">
                                                            <thead >
                                                                <tr >
                                                                    <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                                    <th class="less-font-weight text-center"  width="80%">ပညာအရည်အချင်း</th>
                                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="tbl_degree_body" id="tbl_degree_body">

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
                                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                    <label class="col-md-3 col-form-label label">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <div class="form-check mt-2 form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee1" value="1">
                                                                <label class="form-check-label" for="yes-servant">{{ __('ဟုတ်') }}</label>
                                                            </div>
                                                            <div class="form-check mt-2 form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee2" value="0">
                                                                <label class="form-check-label" for="no-servant">{{ __('မဟုတ်') }}</label>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="invalid-feedback gov_employee text-danger">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးပါ</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></br>

                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                    <label class="col-md-4 col-form-label"><b>{{ __('သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ') }}</b></label>
                                                    <div class="col-md-6 pull-right" style="text-align:right;">
                                                        <label class="invalid-feedback col-form-label certificate text-danger">သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ ထည့်ပါ</label><br>
                                                    </div>

                                                </div>

                                                    </div>

                                                    <div class="row">
                                                        <label class="col-md-1 col-form-label" >{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label" >{{ __('လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း') }}</label>
                                                        <div class="col-md-8">
                                                            <table class="table tbl_certificate table-bordered input-table" id="tbl_certificate">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="less-font-weight text-center"  width="10%">စဉ်</th>
                                                                        <th class="less-font-weight text-center"  width="80%">လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း</th>
                                                                        <th  class="less-font-weight text-center"  width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSubject("tbl_certificate")'><li class="fa fa-plus"></li></button></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="tbl_certificate_body" id="tbl_certificate_body">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row" >
                                                        <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label " >{{ __('ဒီပလိုမာစာရင်းကိုင်သင်တန်း') }}</label>
                                                        <div class="col-md-8">
                                                            <table class="table tbl_diploma table-bordered input-table" id="tbl_diploma">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="less-font-weight text-center" width="10%">စဉ်</th>
                                                                        <th class="less-font-weight text-center" width="80%">ဒီပလိုမာစာရင်းကိုင်သင်တန်း</th>
                                                                        <th class="less-font-weight text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowDipSubject("tbl_diploma")'><li class="fa fa-plus"></li></button></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="tbl_diploma_body" id="tbl_diploma_body">

                                                                </tboddy>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                        <label class="col-md-3 col-form-label label">{{ __('သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <textarea class="form-control " name="exp_desc" rows="3" ></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                    <label class="col-md-3 col-form-label label">သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="regno" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                    <label class="col-md-3 col-form-label label">Applied Date</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                    <input type="text" class="form-control" id="register_date" readonly>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                    <label class="col-md-3 col-form-label label">Status</label>
                                                    <div class="col-md-8">
                                                            <div class="form-group">
                                                                    <input type="text" class="form-control" id="message" readonly="">
                                                            </div>
                                                    </div>
                                                </div><br/>
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
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
        teacher_reg_feedback();
        checkPaymentTeacher();
        loadDescription('teacher');
        
    })
    //app_form_feedback();

</script>
@endpush
