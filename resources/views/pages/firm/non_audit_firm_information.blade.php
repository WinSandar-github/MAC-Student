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
                    <h2 class="title">Non-Audit Firm <span>Detail</span></h2>
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
                <div id="non_audit_form_pending" class="non-audit-pending-style">
					<div class="card text-white bg-primary my-3" role="alert">
						<div class="card-body">
						Your Non-Audit Form is checking. !!!
						</div>
					</div>
				</div>
				<div id="non_audit_approve" class="non-audit-pending-style">
					<div class="card text-white bg-primary my-3" role="alert">
						<div class="card-body">
						Your Non-Audit Form is is approved! You need to subscribe your non audit service with desire payment method!
						</div>
					</div>
				</div>
				<div class="row" id="non_audit_container" style="display:none; margin-top:5%;">
					<form method="post" action="javascript:void();" enctype="multipart/form-data">
						<div class="card border-success mb-3">
							<div class="card-body text-success">
								<div class="col-md-12">
									{{--<div class="row">
										<center><h4>Audit Firm Data</h4></center><br><br>
										<table class="table table-bordered input-table border-success" width="100%" style="text-align:center;">
											<tr>
												<th>Accountancy Firm Name</th>
												<th>Applied Date</th>
												<th>Status</th>
											</tr>
											<tr>
												<td><span id="accountancy_firm_name"></span></td>
												<td><span id="register_date"></span></td>
												<td><span id="message"></span></td>
											</tr>
										</table>
										<div class="row" id="check_renew" style="display:none;">
											<div class="form-group">
												<a href="{{ url('/audit_firm_renew') }}" class="btn btn-sm btn-block btn-info pull-right">Audit Firm Renew Form</a>
											</div>
										</div>
									</div>
									<div class="row" id="check_status" style="display:none;">
										<div class="form-group">
											<a href="#" class="btn btn-sm btn-block btn-info pull-right">Choose Payment</a>
										</div>
									</div>--}}
									<table width="100%">
										<tr>
											<td width="15%">
												<div class="single-form">
													<label class="col-form-label">Accountancy Firm Name</label>
												</div>
											</td>
											<td width="85%">
												<div class="single-form">
													<input type="text" class="form-control" id="accountancy_firm_name" readonly="">
												</div>
											</td>
										</tr>
										<tr>
											<td width="15%">
												<div class="single-form">
													<label class="col-form-label">Applied Date</label>
												</div>
											</td>
											<td width="85%">
												<div class="single-form">
													<input type="text" class="form-control" id="register_date" readonly="">
												</div>
											</td>
										</tr>
										<tr>
											<td width="15%">
												<div class="single-form">
													<label class="col-form-label">Status</label>
												</div>
											</td>
											<td width="85%">
												<div class="single-form">
													<input type="text" class="form-control" id="message" readonly="">
												</div>
											</td>
										</tr>
									</table>
																	<br>
									
									<div class="row" id="check_non_audit_renew" style="display:none;text-align: center; margin-top: 2%;">
										<div class="form-group">
											<center>
												<a href="{{ url('/non_audit_firm_renew') }}" class="btn btn-success btn-hover-dark">Non-Audit Firm Renew Form</a>
											</center>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
            </div>
				{{--<div class="card-body">
					<div class="row">
						<div class="col-md-12 widget-information">
							<div class="row border-bottom">
								<h2 class="col-md-6 card-title text-center text-success">Non-Audit Firm</h2>
								<div class="col-md-3"></div>
							</div>
							<!-- Description -->
							<div class="row">
								<div class="col-md-7">
										<h5 class="mt-2"><strong>Description</strong></h5>
										<hr>
										<ul id="audit_firm_description_lists">
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
																	if($value['type'] == "NON_AUDIT_FIRM"){
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
																<a href="{{url('non_audit_firm_register')}}" class="btn btn-primary btn-hover-dark" >Register</a>
															</p>
														</div>
												</ul>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>--}}

				<div id="non_audit_initial">
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
                                                    <div class="requirement-info"></div>
                                                </div>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Fees -->
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
                                                                                        <a href="{{url('non_audit_firm_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
                                                                                        
                                                                                    </p>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row payment-btn" style="display:none;">
                                                                            <div class="col-md-6"></div>
                                                                            <div class="">
                                                                                <div class="pull-right mt-4">
                                                                                    <p class="info-btn text-dark h6">
                                                                                        
																						<button id="non_audit_payment_btn" value="" class="btn btn-success btn-hover-dark w-30"> Go to payment</button>
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
				<!-- Payment Modal -->
	<form method="post" class="needs-validation" action="javascript:nonAuditPaymentSubmit();" enctype="multipart/form-data"
				novalidate>
			@csrf
			<div class="modal fade" id="nonAuditpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
							<div class="modal-content">
									<div class="modal-header">
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<br>
									<div class="modal-body">
											<div class="row justify-content-center">
													<center>
															<h4 style="margin-bottom:5%;">Non-Audit Firm Registration Form Fee - ****** MMK</h4>
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
															<button type="submit" id="non_audit_pay_now_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
													</center>
											</div>
									</div>
									<br>
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
    $('document').ready(function(){
        var course_type = location.pathname.split('/');
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
		loadDescription('Non-Audit');
		nonAuditRegFeedback();
        nonAuditFirmDateQuery();
		nonAuditVerifyStatus();
		checkPaymentNonAudit();
		nonAuditData();
    })
    //app_form_feedback();

</script>
@endpush
