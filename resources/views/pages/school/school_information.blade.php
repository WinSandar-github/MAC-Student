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
                    <h2 class="title">School <span>Detail</span></h2>
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
                    <div class="card text-danger bg-warning mb-3">

                        <div class="card-body">
                            <p class='reject-reason'></p>
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div id="school_pending" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your School Registeration Form is checking</p>
                    </div>
                </div>
            </div>

            <div id="school_approve" style="display:none; margin-top:5%; margin-left: 5%; margin-right:7%;">
                <div class="card text-white bg-primary my-3">
                    <div class="card-body">
                        <p class="card-text">Your School Registeration Form is approved! You need to subscribe your teacher service with desire payment method!</p>
                    </div>
                </div>
            </div>

								<div id="school_detail">
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
																		<li><i class="icofont-money"></i> <strong>Application Fees</strong><span class='application-fee'></span> </li>
																		<li><i class="icofont-money"></i> <strong>Initial Registration Fees</strong><span class='registration-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Yearly Fees</strong><span class='yearly-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Renew Registration Fees</strong><span class='renew-registration-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Renew Yearly Fees</strong><span class='renew-yearly-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Delay Fees</strong><span class='delay-fee'></li>
                                                                        <li><i class="icofont-money"></i> <strong>Reconnected Fees(per year)</strong><span class='reconnected-fee'></li>
																		<div class="row register-btn">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="col-md-6">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn col-md-2 mb-4 text-dark h6">
                                                                                        <a href="{{url('school_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row update-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        <a href="{{url('school_edit')}}" class="btn btn-success btn-hover-dark" >Update</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
                                                                                        <button id="school_modal" class="btn btn-success btn-hover-dark"> Go to payment</button>
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row renew_payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
                                                                                        <button id="renew_school_modal" class="btn btn-success btn-hover-dark"> Go to payment</button>
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
<form method="post" class="needs-validation" action="javascript:schoolPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="schoolpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">School Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="school_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>
    <!--renew Modal-->
<form method="post" class="needs-validation" action="javascript:renewSchoolPaymentSubmit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="renewSchoolpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">School Registeration Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="school_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>
                <div class="card border-success mb-3" id="school_renew_form" style="display:none;">
                    <div class="card-body p-4">
                            <div class="row mb-3">
                                <h5 class="card-title text-center fw-bolder">??????????????????????????????????????????????????????????????????????????????</h5>
                                <h5 class="card-title text-center fw-bolder">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h5>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-10"></div>
                                <label class="col-md-2 col-form-label fw-bolder">????????????????????????????????????-???</label>
                                                                
                            </div>
                            <form method="post" action="javascript:renewSchool();" enctype="multipart/form-data" id="school_renew_form_data">
                            <div class="row mb-3">
                                <div class="col-md-8">

                                    <div class="row mb-5">
                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('????????????????????????') }}</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('????????????(??????????????????/???????????????????????????)') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' readonly>
                                                </div> 
                                                <div class="col-md-6">
                                                    <input type="text" name="name_eng" class="form-control"autocomplete='off' readonly>
                                                                            
                                                </div>
                                            </div>                  
                                        </div>
                                        
                                    </div>
                                    <!-- Father Name -->
                                    <div class="row mb-3">
                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('??????????????????(??????????????????/???????????????????????????)') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="father_name_mm" id="father_name_mm"
                                                    readonly class="form-control"
                                                            autocomplete='off'
                                                            >

                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="father_name_eng" class="form-control"
                                                    readonly autocomplete='off' >

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Father Name -->
                                    
                                </div>
                                <div class="col-md-4 text-center">
                                        <div class="col-md-8 pull-right">
                                            
                                            {{--User Photo--}}
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow">
                                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" 
                                                                alt="Upload Photo">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                        <div class="d-flex justify-content-center">
                                                            <span class="btn btn-round btn-secondary btn-file">
                                                            <span class="fileinput-new">?????????????????????</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                                            <br>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                        <p >
                                                            <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                        </p>
                                                    </div>
                                            {{--User Photo--}}
                                        </div>
                                  
                                </div> 
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span
                                            class="pull-left">{{ __('??????') }}</span>{{ __('??????????????????????????????????????????????????????????????????????????????????????????') }}
                                </label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                <div class="col-md-2">
                                                        <input type='text' class="form-control" name="nrc_state_region" id="nrc_state_region" readonly>
                                                        <!-- @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach -->
                                                        
                                                </div>
                                                <div class="col-md-3">
                                                        <input type='text' class="form-control" name="nrc_township" id="nrc_township" readonly>
                                                            <!-- @foreach($nrc_townships as $township)
                                                                <option value="{{ $township['township_mm'] }}">
                                                                    {{ $township['township_mm'] }}
                                                                </option>
                                                            @endforeach -->
                                                        
                                                </div>
                                                <div class="col-md-2 ">
                                                    <input type='text' class="form-control" name="nrc_citizen" id="nrc_citizen"  readonly>
                                                        <!-- @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach -->
                                                    
                                                </div>
                                                <div class="col-md-5 ">
                                                    <input type="text" name="nrc_number" id="nrc_number"  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^???-???]/g,'');"  maxlength="6" minlength="6" readonly style="height: 38px" autocomplete='off'>
                                                </div>
                                                </div>
                                            </div>
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">{{ __('') }}</label>
                                    <input type="hidden" id="hidden_nrc_front">
                                    <input type="hidden" id="hidden_nrc_back">
                                    <input type="hidden" id="school_id">
                                    <input type="hidden" id="student_info_id">
                                    <input type="hidden" id="branch_own_type_h">
                                    <input type="hidden" id="hinitial_status">
                                    <input type="hidden" id="type">
                                    <input type="hidden" id="school_name">
                                    <input type="hidden" id="school_address">
                                    <input type="hidden" id="hcourse">
                                    <input type="hidden" id="regno">
                                    <input type="hidden" id="offline_user">
                                    <input type="hidden" id="last_registration_fee_year">
                                    <input type="hidden" id="request_for_temporary_stop">
                                    <input type="hidden" id="from_request_stop_date">
                                    <input type="hidden" id="to_request_stop_date">
                                    <input type="hidden" id="from_valid_date">
                                    <div class="col-md-8">
                                        
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_front_img" src="{{ asset('assets/images/image_placeholder.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(???????????????)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value=""><input type="file" id="nrc_front"
                                                                                        name="nrc_front"
                                                                                        value="{{ old('nrc_front') }}"
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_back_img" src="{{ asset('assets/images/image_placeholder.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back"
                                                                                        value="{{ old('nrc_back') }}"
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="row mb-3">
                                    
                                    <label class="col-md-4 col-form-label text-end"><span class="pull-left">{{ __('??????') }}</span>{{ __('????????????????????????????????????') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob"  class="form-control" autocomplete='off' readonly>
                                        </div>
                                    </div>
                            </div>

                            
                                      
                            <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('??????') }}</span>{{ __('????????????????????????????????????????????????(??????????????????)') }}</label>
                                        <div class="col-md-8">
                                            <textarea type="text" name="address" style="resize:none;" class="form-control" autocomplete='off' ></textarea>
                                        
                                        </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span
                                            class="pull-left">{{ __('??????') }}</span>{{ __('????????????????????????????????????????????????(???????????????????????????)') }}</label>
                                <div class="col-md-8">
                                    <textarea type="text" name="eng_address" style="resize:none;" class="form-control"
                                                  autocomplete='off' ></textarea>

                                </div>
                            </div>
                            <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">{{ __('??????') }}</span>{{ __('?????????????????????????????????') }}</label>
                                        <div class="col-md-8">
                                            <input type="text" name="phone" class="form-control"  autocomplete='off'>
                                        </div>
                                    
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">??????</span>??????????????????????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="s_code" name="s_code" readonly>
                                        
                                    </div>
                            </div>
                            <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">?????????</span>????????????????????????????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" id="school_card" name="school_card" required>
                                        
                                    </div>
                            </div>
                                <div class="row mb-3 renew_date_class" >
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">?????????</span>????????????????????????????????????????????????????????????????????????????????? ??????????????????</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="renew_date" readonly>
                                        
                                    </div>
                                </div>
                                <input type="hidden" id="hrenew_date">
                                <div class="row mb-3 ">
                                    <label class="col-md-4 col-form-label label "><span
                                                class="pull-left status">?????????</span>Status</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="message" readonly>
                                       
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <label class="col-md-8 col-form-label label "><span
                                                class="pull-left info">?????????</span>{{ __('???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>

                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        
                                        <div class="form-group">
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_one" onclick="formType(this)"> ????????????????????????????????????-???
                                                
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_two" onclick="formType(this)" > ????????????????????????????????????-???
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_three" onclick="formType(this)" > ????????????????????????????????????-???
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_four" onclick="formType(this)" > ????????????????????????????????????-???
                                            </div>
                                            <div class="form-check mt-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="form_type" value="form_type_five" onclick="formType(this)" > ????????????????????????????????????-???
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_one" style="display:none;">
                                    <div class="row mb-3">
                                        
                                        <label class="col-md-4 col-form-label text-end"><span class="pull-left">{{ __('??????') }}</span>{{ __('???????????????????????????????????????') }}</label>
                                        <div class="col-md-8">
                                            <table class="table tbl_degree table-bordered input-table">
                                                <thead>
                                                    <tr >
                                                        <th class="less-font-weight text-center" width="10%">?????????</th>
                                                        <th class="less-font-weight text-center"  width="40%">???????????????????????????/????????????/????????????????????????</th>
                                                        <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                        <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbl_degree_body">

                                                </tbody>
                                            </table>

                                        </div>
                                </div>

                                <div class="row mb-4">
                                        <label class="col-md-4 col-form-label text-end">
                                            <span class="pull-left">{{ __('??????') }}</span>
                                            {{ __('?????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????(???????????????????????????????????????????????????????????? ?????????????????????)') }}
                                        </label>

                                        <input type="hidden" id="hidden_school_type">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type1"
                                                            value='PCS' onclick="origanzationCheck(this)"> ??????????????????????????????????????????????????????????????????
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type2"
                                                            value='PCP' onclick="origanzationCheck(this)"> ???????????????????????????????????????????????????????????????????????????????????????????????????
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type3"
                                                            value='PCC' onclick="origanzationCheck(this)"> ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check mt-2 form-check-inline">
                                                        <input class="form-check-input" type="radio" name="school_type" id="school_type4"
                                                            value='???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????' onclick="origanzationCheck(this)"> ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span
                                                class="pull-left">{{ __('??????') }}</span>{{ __('????????????????????????????????????/???????????????????????????????????????????????????????????????????????????(?????????????????????????????????????????????????????????????????????????????????)') }}
                                    </label>
                                    <div class="col-md-8">

                                        <div class="controls1">
                                            <div class="entry1">
                                                <div class="row mb-3">
                                                    <div class="col-md-11 col-auto">
                                                        <input type="file" class="form-control" id="attachment" name="attachment[]" accept="image/*,.pdf" >

                                                    </div>
                                                    <div class="col-md-1 col-auto">
                                                        <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls1","entry1")'>
                                                            <li class="fa fa-plus"></li>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"></div>
                                    <input type="hidden" id="hidden_attachment">
                                    <div class="col-md-8 view_attachment"></div>
                                </div>
                                    <div class="row ">
                                        <h5 class="p-4 fw-bolder">{{ __('?????????????????????????????????????????????????????????????????????????????????') }}</h5>
                                    </div>
                                    <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">??????</span>{{ __('?????????????????????????????????') }}</label>
                                            <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="school_name" class="form-control" autocomplete='off' >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">??????</span>{{ __('??????????????????????????????????????????????????????') }}</label>
                                            <div class="col-md-8">
                                                <select name="attend_course[]" id="attend_course"
                                                        class="form-control multiple-attend-course" multiple="multiple" 
                                                        style="width:100%">
                                                </select>
                                            </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">??????</span>{{ __('????????????????????????????????????????????????????????????(??????????????????)') }}</label>
                                        <div class="col-md-8">
                                            <textarea type="text" style="resize:none;" name="school_address"
                                                        class="form-control" autocomplete='off' ></textarea>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">??????</span>{{ __('????????????????????????????????????????????????????????????(???????????????????????????)') }}</label>
                                        <div class="col-md-8">
                                            <textarea type="text" style="resize:none;" name="eng_school_address"
                                                        class="form-control" autocomplete='off' ></textarea>

                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <label class="col-md-4 col-form-label label">???????????????????????????????????????????????????????????????????????????</label>
                                        <div class="col-md-8">
                                            <div class="mb-3 col-auto">
                                                <input type="file" id="" name="school_location_attach" class="form-control"
                                                    accept="image/*,.pdf" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4"></div>
                                        <input type="hidden" id="hidden_school_location_attach">
                                        <div class="col-md-8 view_school_location_attach">

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">??????</span>{{ __('??????????????????????????????????????????????????????') }}</label>

                                        <div class="col-md-8">
                                            
                                            <div class="form-group">
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type" id="private"
                                                        value="private" onclick="ownTypeForm()"> ??????????????????????????????
                                                    
                                                </div>
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type" id="rent"
                                                        value="rent" onclick="ownTypeForm()" > ???????????????
                                                </div>
                                                <div class="form-check mt-2 form-check-inline">
                                                    <input class="form-check-input" type="radio" name="own_type"
                                                        id="use_sharing" value="use_sharing" onclick="ownTypeForm()" > ??????????????????????????????
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ownType_letter">
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-labe mt-1 label_align_right"> ???????????????????????????????????? ?????????????????????????????? ???????????????????????????????????????????????????</label>

                                                    <div class="col-md-8">
                                                        
                                                        

                                                            <div class="controls3">
                                                                <div class="entry3">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" id="own_type_letter" name="own_type_letter[]" accept="image/*,.pdf" >

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls3","entry3")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="row mb-3">
                                            <div class="col-md-4"></div>
                                            <input type="hidden" id="hidden_own_type_letter">
                                            <div class="col-md-8 view_ownType_letter">

                                            </div>
                                    </div>
                                        
                                        <div class="row mb-3">

                                            <label class="col-md-4 col-form-label label"><span
                                                        class="pull-left">??????</span>{{ __('?????????????????????????????????????????????????????????????????????') }}</label>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-12" style="width: 100%;overflow-x: scroll;">
                                                    <table class="table tbl_branch_school table-bordered text-nowrap" id="tbl_branch_school">
                                                        <thead class="text-nowrap">
                                                            <tr>
                                                                <th class="less-font-weight text-center"  >?????????</th>
                                                                <th class="less-font-weight text-center" >?????????????????????????????????????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >???????????????????????????????????????????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >??????????????????????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center" >???????????????????????????????????? ?????????????????????????????? ???????????????????????????????????????????????????</th>
                                                                <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowBranchSchool("tbl_branch_school")'><li class="fa fa-plus"></li></button></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbl_branch_school_body">

                                                        </tboddy>
                                                    </table>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('???????????????????????????????????????????????????????????????????????????????????????') }}</h5>
                                    </div>
                                    {{--????????????????????????????????????????????????--}}
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span
                                                    class="pull-left">(???)</span>{{ __('????????????????????????????????????????????????/????????????????????????????????????????????????????????????????????????/???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                        <div class="col-md-8">

                                            <div class="controls2">
                                                <div class="entry2">
                                                    <div class="row mb-3">
                                                        <div class="col-md-11 col-auto">
                                                            <input type="file" class="form-control" id="business_license" name="business_license[]" accept="image/*,.pdf" >

                                                        </div>
                                                        <div class="col-md-1 col-auto">
                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls2","entry2")'>
                                                                <li class="fa fa-plus"></li>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                            <div class="col-md-4"></div>
                                            <input type="hidden" id="hidden_business_license">
                                            <div class="col-md-8 view_business_license">

                                            </div>
                                    </div>
                                    {{--????????????????????????????????????????????????--}}
                                    <div class="row">
                                        <label class="col-md-4 col-form-label"><span
                                                    class="pull-left">(???)</span>{{ __('????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????(?????????????????????????????????????????????????????????/???????????????????????????????????????????????????/????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????)') }}
                                        </label>
                                        <div class="col-md-8">

                                            <div class="controls7">
                                                <div class="entry7">
                                                    <div class="row mb-3">
                                                        <div class="col-md-11 col-auto">
                                                            <input type="file" class="form-control" id="sch_establish_notes_attach" name="sch_establish_notes_attach[]" accept="image/*,.pdf" >

                                                        </div>
                                                        <div class="col-md-1 col-auto">
                                                            <button class="btn btn-success btn-sm btn-plus btn-add" type="button" onclick='addInputFile("controls7","entry7")'>
                                                                <li class="fa fa-plus"></li>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4"></div>
                                        <input type="hidden" id="hidden_sch_establish_notes_attach">
                                        <div class="col-md-8 view_sch_establish_notes_attach"></div>
                                    </div>
                                </div>
                                <div class="form_type_two" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <label class="col-md-2 col-form-label fw-bolder">????????????????????????????????????-???</label>
                                                        
                                    </div>

                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('??????????????????????????????????????????????????????????????????????????????(????????????)????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</h5>
                                    </div>
                                    
                                    <div class="row mb-3">
                                            <label class="col-form-label fw-bolder">{{ __('??????????????????????????????????????????????????????????????????????????????(????????????)') }}</label>
                                            <div class="tbl-responsive">
                                                    <table class="table tbl_sch_established_persons table-bordered input-table">
                                                        <thead>
                                                            <tr >
                                                                <th class="less-font-weight text-center"  >?????????</th>
                                                                <th class="less-font-weight text-center"  >????????????</th>
                                                                <th class="less-font-weight text-center"  >??????????????????????????????????????????????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                                <th class="less-font-weight text-center"  >???????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >????????????????????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >?????????????????????????????????</th>
                                                                <th class="less-font-weight text-center"  >????????????????????????</th>
                                                                <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'><li class="fa fa-plus"></li></button></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="tbl_sch_established_persons_body">

                                                        </tbody>
                                                    </table>
                                                
                                            </div>
                                    </div>
                                    
                                    <div class="row mb-5">
                                        <label class="col-form-label fw-bolder">{{ __('??????????????????????????????????????????????????????????????????????????????') }}</label>
                                        <div class="tbl-responsive">
                                            <table class="table tbl_sch_governs table-bordered input-table">
                                                <thead>
                                                    <tr >
                                                        <th class="less-font-weight text-center"  >?????????</th>
                                                        <th class="less-font-weight text-center"  >????????????</th>
                                                        <th class="less-font-weight text-center"  >??????????????????????????????????????????????????????????????????????????????</th>
                                                        <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                        <th class="less-font-weight text-center"  >???????????????????????????????????????</th>
                                                        <th class="less-font-weight text-center"  >???????????????</th>
                                                        <th class="less-font-weight text-center"  >?????????????????????????????????</th>
                                                        <th class="less-font-weight text-center"  >????????????????????????</th>
                                                        <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchGoverns("tbl_sch_governs")'><li class="fa fa-plus"></li></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbl_sch_governs_body">

                                                </tbody>
                                            </table>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_three" style="display:none;">
                                    <div class="row">
                                            <div class="col-md-10"></div>
                                            <label class="col-md-2 col-form-label fw-bolder">????????????????????????????????????-???</label>
                                                            
                                    </div>
                                    <div id="member_list_biography_error" style="display:none;">
                                        <div class="row">
                                            <label class="col-md-1 col-form-label"></label>
                                            <label class="text-danger col-md-5 col-form-label font-weight-bold">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-form-label fw-bolder">{{ __('??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                        <div class="tbl-responsive">
                                            <table class="table tbl_member_list_biography table-bordered input-table">
                                                <thead>
                                                <tr>
                                                    <th class="less-font-weight text-center">?????????</th>
                                                    <th class="less-font-weight text-center">????????????</th>
                                                    <th class="less-font-weight text-center">??????????????????????????????????????????????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center">???????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">???????????????</th>
                                                    <th class="less-font-weight text-center">?????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">????????????????????????</th>
                                                    <th class="text-center">
                                                        <button type="button" class="btn btn-success btn-sm btn-plus"
                                                                onclick='addRowMembershipBio("tbl_member_list_biography")'>
                                                            <li class="fa fa-plus"></li>
                                                        </button>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="tbl_member_list_biography_body">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_four" style="display:none;">
                                    <div class="row">
                                            <div class="col-md-10"></div>
                                            <label class="col-md-2 col-form-label fw-bolder">????????????????????????????????????-???</label>
                                                            
                                    </div>
                                    
                                    <input type="hidden" id="student_info_id" >
                                    <div class="row mb-1">
                                        <label class="col-form-label fw-bolder">{{ __('?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                        <div class="col-md-12" style="width: 100%;overflow-x: scroll;">
                                            <table class="table tbl_teacher_list_biography table-bordered input-table">
                                                <thead class="text-nowrap">
                                                <tr>
                                                    <th class="less-font-weight text-center">?????????</th>
                                                    <th class="less-font-weight text-center">???????????????????????????????????????????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">??????????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">??????????????????????????????????????????????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">???????????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">??????????????????????????????????????????????????????(????????????)</th>
                                                    <th class="less-font-weight text-center">?????????????????????????????????</th>
                                                    <th class="less-font-weight text-center">????????????????????????</th>
                                                    <th class="less-font-weight text-center">??????????????????????????????????????????????????????????????????????????????????????????</th>
                                                    <th class="text-center">
                                                        <button type="button" class="btn btn-success btn-sm btn-plus"
                                                                onclick='addRowTeacherBio("tbl_teacher_list_biography")'>
                                                            <li class="fa fa-plus"></li>
                                                        </button>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="tbl_teacher_list_biography_body" id="tbl_teacher_list_biography_body">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_type_five" style="display:none">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <label class="col-md-2 col-form-label fw-bolder">????????????????????????????????????-???</label>
                                                        
                                    </div>
                                    <div class="row">
                                        <h5 class="p-4 fw-bolder">{{ __('?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</h5>
                                    </div>
                                    <div class="row">
                                    <label class="col-md-12 col-form-label fw-bolder"><span
                                            class="pull-left">??????</span>{{ __('?????????????????????????????????????????????(?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????)') }}</label>
                                    </div>
                                    <div class="row mb-3">
                                        
                                                <table class="table tbl_bulding_type table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >?????????</th>
                                                            <th class="less-font-weight text-center" >??????????????????????????????????????????????????????</th>
                                                            <th class="less-font-weight text-center" >??????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >????????????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????????????????????????????????????????</th>
                                                            <th  class="less-font-weight text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowBuldingType("tbl_bulding_type")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_bulding_type_body">

                                                    </tboddy>
                                                </table>
                                        
                                    </div>

                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">??????</span>{{ __('???????????????????????????(???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????)') }}</label>
                                    </div>

                                    <div class="row mb-3">
                                        
                                                <table class="table tbl_classroom table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >?????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >??????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >????????????????????????????????????????????????</th>
                                                            <th class="less-font-weight text-center" >?????????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????????????????????????????????????????</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowClassroom("tbl_classroom")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_classroom_body">

                                                    </tboddy>
                                                </table>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">??????</span>{{ __('?????????????????????????????????(?????????????????????????????????????????????????????????)') }}</label>
                                    </div>

                                    <div class="row mb-3">
                                    
                                    
                                                <table class="table tbl_toilet_type table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center"  >?????????</th>
                                                            <th class="less-font-weight text-center"  >??????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????????????????????????????????????????</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowToiletType("tbl_toilet_type")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_toilet_type_body">

                                                    </tboddy>
                                                </table>
                                    
                                    </div>

                                    <div class="row">
                                        <label class="col-md-12 col-form-label fw-bolder"><span
                                                    class="pull-left">??????</span>{{ __('????????????????????????????????????(????????????????????????????????????????????????????????????????????????)') }}</label>
                                    </div>
                                    <div class="row mb-3">
                                        
                                            <table class="table tbl_manage_room_numbers table-bordered input-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="less-font-weight text-center" >?????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >??????????????????????????????</th>
                                                            <th class="less-font-weight text-center"  >???????????????????????????????????????????????????????????????????????????</th>
                                                            <th  class="less-font-weight text-center"  ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowManageRoomNumber("tbl_manage_room_numbers")'><li class="fa fa-plus"></li></button></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_manage_room_numbers_body">

                                                    </tboddy>
                                            </table>
                                    
                                    </div>
                                </div>

                                
                                <div class="row mb-3">
                                    <label class="col-md-10 col-form-label fw-bolder">
                                        <input type="checkbox" id="submit_confirm" onclick="ConfirmSubmitTeacher()">
                                        {{ __('???????????????????????????????????? ??????????????????????????????????????? ?????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????') }}
                                    </label>
                                </div>
                                        <div class="row mb-3">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit submit_btn">{{ __('Submit') }}</button>
                                            </div>
                                        </div>
                            </form>

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
<script src="{{ asset('assets/js/school.js') }}"></script>
<script type="text/javascript">
    $('document').ready(function(){
        $('.multiple-attend-course').select2({
            placeholder: "Select Requirement"
        });
        var course_type = location.pathname.split('/');
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));


        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
        loadDescription('School');
        getCourses();
        school_reg_feedback();
        //checkPaymentSchool();
    })
    //app_form_feedback();
    
</script>
@endpush
