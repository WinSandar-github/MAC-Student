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
                    <h2 class="title">Non-Audit   <span>Service</span></h2>
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
			<div id="non_audit_form_pending" class="non-audit-pending-style">
				<div class="alert alert-info" role="alert">
					Your Non-Audit Form is checking. !!!
				</div>
            </div>
			<div id="non_audit_reject" style="display: none;margin-top:5%;">
				<div class="card text-white bg-dark mb-3">

					<div class="card-body">
						{{--<p class="card-text reject">Your Audit Firm Registration Form need to prepare.Please update your form
						</p>--}}
						<p class="card-text reject">Your need to resubmit your audit firm registration form. Please fill your form again.
						</p>
					</div>
				</div>
            </div>

			<div class="row" id="non_audit_container" style="display:none; margin-top:5%;">
				<form method="post" enctype="multipart/form-data">
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
                                <div class="row" id="check_non_audit_renew" style="display:none;text-align: center; margin-top: 2%;">
                                    <div class="form-group">
                                        <center>
                                            <a href="{{ url('/non_audit_firm_renew') }}" class="btn btn-sm btn-block btn-info">Non-Audit Firm Renew Form</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

			<div id="non_audit_app_form" style="display:block;">
				<form id="non-audit-form" class="needs-validation" method="post" action="javascript:createNonAuditFirm();" enctype="multipart/form-data" novalidate>
					<input type="hidden" value="2" name="audit_firm_type_id">
		            <input type="hidden" value="1" name="local_foreign_type">
	            	<div class="row mt-5">
						<div class="card border-success card-stats mb-3">
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-3">
										<select class="nice-select" id="choose_firm_type" aria-label="">
											<option value="0" selected>Choose Firm Type</option>
											<option value="1">Local</option>
											<option value="2">Foreign</option>
										</select>
									</div>
								</div>
							</div><br>
							
							<div class="card-header text-center" style="" id="local_header">
							<h4>Local Firm Information</h4>
							</div>
							<div class="card-header text-center" style="display:none;" id="foreign_header">
							<h4>Foreign Firm Information</h4>
							</div>
							<div class="card-body">

								<div class="row">
									<div class="col-md-7">

										<div class="row">
											<label class="col-md-1 col-form-label">{{ __('1.') }}</label>
											<label class="col-md-4 col-form-label" style="padding-left: 50px;">{{ __('Email') }}</label>
											<div class="col-md-7">
												<div class="form-group">
														<input type="email" placeholder="Enter your Email address!" name="email" class="form-control" value="{{ old('email') }}" required="">
												</div>
											</div>
										</div><br>										

										<div class="row">
											<label class="col-md-1 col-form-label">{{ __('2.') }}</label>
											<label class="col-md-4 col-form-label" style="padding-left: 50px;">{{ __('Password') }}</label>
											<div class="col-md-7">
												<div class="form-group">
														<input type="password" placeholder="Enter your Password!" name="password" class="form-control" value="{{ old('password') }}" required="">
												</div>
											</div>
										</div><br>							

										<div class="row">
											<label class="col-md-1 col-form-label">{{ __('3.') }}</label>
											<label class="col-md-4 col-form-label" style="padding-left: 50px;">{{ __('Confirm Password') }}</label>
											<div class="col-md-7">
												<div class="form-group">
														<input type="password" placeholder="Enter your Password again!" name="confirm_password" class="form-control"  required="">
												</div>
											</div>
										</div><br>

										{{--<div class="row">
											<label class="col-md-1 col-form-label">{{ __('4') }}</label>
											<label class="col-md-3 col-form-label">{{ __('Firm Registration Number') }}</label>
											<div class="col-md-8">
												<div class="form-group">
													<input type="text" name="accountancy_firm_reg_no" class="form-control" placeholder="Firm Registration No" autocomplete="off" required>
												</div>
											</div>
										</div><br>--}}
										
										<div class="row">
											<label class="col-md-1 col-form-label">{{ __('4.') }}</label>
											<label class="col-md-4 col-form-label" style="padding-left: 50px;">{{ __('Firm Name') }}</label>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" name="accountancy_firm_name"  class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Firm Name!" autofocus autocomplete="off" required>
												</div>
											</div>
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div><br>	
									</div>

									<div class="col-md-5">
										<div class="col-md-5 pull-right">
											<img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
											<p class="mt-2">
											<input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
											</p>
										</div>
									</div>
								</div>

														

								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('5.') }}</label>
									<label class="col-md-3 col-form-label">{{ __('Address Of Practice(Head Office)') }}</label>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" name="township" class="form-control" placeholder="Township" autocomplete="off" required>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" name="post_code" class="form-control" placeholder="Post Code" autocomplete="off" required>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" name="city" class="form-control" placeholder="City" autocomplete="off" required>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" name="state" class="form-control" placeholder="State / Region" autocomplete="off" required>
										</div>
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-4"></div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" name="phone_no" class="form-control" placeholder="Telephone" autocomplete="off" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="h_email" class="form-control" placeholder="Email Address" autocomplete="off" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="website" class="form-control" placeholder="Website Address" autocomplete="off" required>
										</div>
									</div>
								</div><br>
							

								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('6.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Branch Office') }}</label>

								</div>
								<div class="row">
									<label class="col-md-1 col-form-label"></label>
									<div class="col-md-11">
										<div class="card">
											<div class="card-body">
												<table class="table branch_non_audit table-bordered input-table">
													<thead>
														<tr>
															<th class="less-font-weight">Name</th>
															<th class="less-font-weight">Township</th>
															<th class="less-font-weight">Post Code</th>
															<th class="less-font-weight">City</th>
															<th class="less-font-weight">State/Region</th>
															<th class="less-font-weight">Telephone</th>
															<th class="less-font-weight">Email</th>
															<th class="less-font-weight">Website</th>
															<th >
																<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addRowBranch("branch_non_audit")'>
																	<i class="fa fa-plus"></i>
																</button>
															</th>
														</tr>
													<thead>
													<tbody>
														<tr>
															<td><input type="text" name="bo_branch_name[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_township[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_post_code[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_city[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_state_region[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_phone[]" class="form-control" autocomplete="off" required></td>
															{{--<td>
																<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputTele("branch_non_audit")'>
																	<i class="fa fa-plus"></i>
																</button>
															</td>--}}
															<td><input type="text" name="bo_email[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" name="bo_website[]" class="form-control" autocomplete="off" required></td>
															<td>
																<button class="delete btn btn-danger btn-sm" type="button" onclick='delRowBranch("branch_non_audit")'><i class="fa fa-trash"></i></button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br>

								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('7.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Sole Proprietor/Partners/Shareholders') }}</label>

								</div>

								<div class="row">
									<div class="col-md-1 col-form-label"></div>
									<div class="col-md-11">
										<div class="card">
											<div class="card-body">
												<table id="myTable" class="table non_partner table-bordered input-table">
													<thead>
														<tr>
															<th class="less-font-weight" rowspan="2">Sr</th>
															<th class="less-font-weight" rowspan="2">Name</th>
															<th class="less-font-weight" rowspan="2">Passport / CSC No. / Incorporation Certificate</th>
															<th >
																<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addRowPartnerByNonAudit("non_partner")'>
																	<i class="fa fa-plus"></i>
																</button>
															</th>
														</tr>

													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td><input type="text" value="" name="fona_name[]" class="form-control" autocomplete="off" required></td>
															<td>
																<input type="text" value="" name="fona_pass_csc_inco[]" class="form-control" autocomplete="off" required>
															</td>
															<td>
																<button class="delete btn btn-danger btn-sm" type="button" onclick='delRowPartnerByNonAudit("non_partner")'><i class="fa fa-trash"></i></button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('8.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Director(s)/Officer(s)') }}</label>

								</div>
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="card">
											<div class="card-body">
												<table id="myTable" class="table non_director table-bordered">
													<thead>
														<tr>
															<th class="less-font-weight">Sr</th>
															<th class="less-font-weight">Name</th>
															<th class="less-font-weight">Position</th>
															<th class="less-font-weight" >Passport / CSC No.</th>
															<!-- <th class="less-font-weight" >CSC No.</th> -->
															<th >
																<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addRowDirectorByNonAudit("non_director")'>
																	<i class="fa fa-plus"></i>
																</button>
															</th>
														</tr>

													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td><input type="text" value="" name="dona_name[]" class="form-control" autocomplete="off" required></td>
															<td><input type="text" value="" name="dona_position[]" class="form-control" autocomplete="off" required></td>
															<td>
																<input type="text" value="" name="dona_passport[]" class="form-control" autocomplete="off" required>

															</td>
															<!-- <td><input type="text" value="" name="dona_csc_no[]" class="form-control" autocomplete="off" required></td> -->
															<td>
																<button class="delete btn btn-danger btn-sm" type="button" onclick='delRowDirectorByNonAudit("non_director")'><i class="fa fa-trash"></i></button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('9.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Organization Structure') }}</label>
								</div>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('') }}</label>
									<!-- <label class="col-md-1 col-form-label">{{ __('') }}</label> -->
									<div class="col-md-8" id="org_validate" style="display:none;">
											<label class="text-danger">Organization Structure ရွေးချယ်ပါ</label>
									</div>
								</div><br>

								<div class='row organization_data'></div><br>							

								<div id="sole-proprietorship">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<div class="card">
												<div class="card-body" id="sole_proprietorship_box">
													<div class="row">
														<label class="col-md-12 col-form-label"><b>For Sole Proprietorship</b></label>
													</div>
													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(a) Copy of letterhead seal to be used</label>
														</div>
													</div>
													<div class="controls1">
														<div class="entry1">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="letterheads[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls1","entry1")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(b) Passport size photo</label>
														</div>
													</div>
													<div class="controls2">
														<div class="entry2">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="pass_photos[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls2","entry2")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(c) Profile of the owner</label>
														</div>
													</div>
													<div class="controls3">
														<div class="entry3">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="owner_profiles[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls3","entry3")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(d) Copy of Education Certificate</label>
														</div>
													</div>
													<div class="controls4">
														<div class="entry4">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="edu_certs[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls4","entry4")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(e) Letter outlining past work experience</label>
														</div>
													</div>
													<div class="controls5">
														<div class="entry5">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="work_exps[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls5","entry5")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(f) Copy of owner’s NRC Card/ Passport</label>
														</div>
													</div>

													<div class="controls6">
														<div class="entry6">
															<div class="row mb-3">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Front)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_front[]" >
																</div>
																<!-- <div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls6","entry6")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div> -->
															</div>

															<div class="row mb-5">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Back)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_back[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls6","entry6")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(g) Copy of Tax clearance from Internal Revenue Department</label>
														</div>
													</div>
													<div class="controls7">
														<div class="entry7">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="tax_clearances[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls7","entry7")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													{{--<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(h) Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
														</div>
													</div>
													<div class="controls8">
														<div class="entry8">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="representatives[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls8","entry8")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>--}}
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="partnership">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<div class="card" id="partnership_box">
												<div class="card-body">
													<div class="row">
														<label class="col-md-12 col-form-label"><b>For Partnership</b></label>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(a) Copy of Certificate or Registration, if any</label>
														</div>
													</div>
													<div class="controls9">
														<div class="entry9">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="certi_or_regs[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls9","entry9")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(b) Copy of signed Partnership Deeds/ Memorandum of Agreement</label>
														</div>
													</div>
													<div class="controls10">
														<div class="entry10">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="deeds_memos[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls10","entry10")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(c) Copy of letterhead to be used</label>
														</div>
													</div>
													<div class="controls11">
														<div class="entry11">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="letterheads[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls11","entry11")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(d) Passport size photos of the all partners</label>
														</div>
													</div>
													<div class="controls12">
														<div class="entry12">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="pass_photos[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls12","entry12")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(e) Profiles of the all partners</label>
														</div>
													</div>
													<div class="controls13">
														<div class="entry13">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="owner_profiles[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls13","entry13")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(f) Copy of Education Certificates of the all partners</label>
														</div>
													</div>
													<div class="controls14">
														<div class="entry14">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="edu_certs[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls14","entry14")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(g) Letter outlining past work experiences of the all partners</label>
														</div>
													</div>
													<div class="controls15">
														<div class="entry15">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="work_exps[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls15","entry15")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(h) Copy of Partners’ NRC Card/ Passport</label>
														</div>
													</div>
													<div class="controls16">
														<div class="entry16">
															<div class="row mb-3">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Front)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_front[]" >
																</div>
																<!-- <div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls6","entry6")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div> -->
															</div>

															<div class="row mb-5">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Back)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_back[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls16","entry16")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(i) Copy of Tax clearance from Internal Revenue Department</label>
														</div>
													</div>
													<div class="controls17">
														<div class="entry17">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="tax_clearances[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls17","entry17")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													{{--<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(j)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
														</div>
													</div>
													<div class="controls18">
														<div class="entry18">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="representatives[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls18","entry18")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>--}}

												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="company">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<div class="card" id="company_box">
												<div class="card-body">
													<div class="row">
														<label class="col-md-12 col-form-label"><b>For Company Incorporated</b></label>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(a) Copy of Certificate of Incorporation (company incorporated in Myanmar)/ Certificate of Registration (branch office registered in Myanmar)</label>
														</div>
													</div>
													<div class="controls19">
														<div class="entry19">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="certificate_incors[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls19","entry19")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>


													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(b) Copy of Permit under Section 27A of Myanmar Companies Act (For Only Foreign Company)</label>
														</div>
													</div>
													<div class="controls20">
														<div class="entry20">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="permit_foreigns[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls20","entry20")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(c) Copy of recent audited financial statements</label>
														</div>
													</div>
													<div class="controls21">
														<div class="entry21">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="financial_statements[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls21","entry21")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(d) Copy of commercial tax registration certificate</label>
														</div>
													</div>
													<div class="controls22">
														<div class="entry22">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="tax_reg_certificate[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls22","entry22")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(e) Copy of letterhead to be used</label>
														</div>
													</div>
													<div class="controls23">
														<div class="entry23">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="letterheads[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls23","entry23")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(f) Copy of Education Certificates of the professional staff</label>
														</div>
													</div>
													<div class="controls24">
														<div class="entry24">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="edu_certs[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls24","entry24")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(g) Letter outlining past work experiences of the professional staff</label>
														</div>
													</div>
													<div class="controls25">
														<div class="entry25">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="work_exps[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls25","entry25")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(h) Copy of shareholder’s and directors’ NRC Card/ Passport</label>
														</div>
													</div>
													<div class="controls26">
														<div class="entry26">
															<div class="row mb-3">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Front)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_front[]" >
																</div>
																<!-- <div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls6","entry6")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div> -->
															</div>

															<div class="row mb-5">
																<div class="col-md-1"></div>
																<label class="col-md-3 form-label">NRC Card/ Passport(Back)</label>
																<div class="col-md-7 col-auto">
																	<input type="file" class="form-control" name="nrc_passports_back[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls26","entry26")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(i) Copy of Tax clearance from Internal Revenue Department</label>
														</div>
													</div>
													<div class="controls27">
														<div class="entry27">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="tax_clearances[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls27","entry27")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>

													{{--<div class="row mb-3">
														<div class="form-group">
															<label class="form-label">(j)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
														</div>
													</div>
													<div class="controls28">
														<div class="entry28">
															<div class="row mb-3">
																<div class="col-md-11 col-auto">
																	<input type="file" class="form-control" name="representatives[]" >
																</div>
																<div class="col-md-1 col-auto">
																	<button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls28","entry28")'>
																		<i class="fa fa-plus"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>--}}
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('10.') }}</label>
									<label class="col-md-3 col-form-label">{{ __('Name Of Managing Director') }}</label>
									<div class="col-md-8 col-form-label">
										<div class="form-group">
											<input type="text" name="name_sole_proprietor"  class="form-control" placeholder="Enter Name Of Managing Director!" autofocus autocomplete="off" required>
										</div>
									</div>

								</div>
								
								<br>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('11.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Total Staff') }}</label>

								</div>

								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="card">
											<div class="card-body">
												<table id="tbl_non_audit_number" class="table">
													<thead>
														<tr>
															<th class="less-font-weight" ></th>
															<th class="less-font-weight" rowspan="2">Number</th>
														</tr>

													</thead>
													<tbody id="tbl_non_audit_number_body">

													</tbody>

													<tfoot id="tbl_non_audit_number_foot">
														<tr>
															<td>Total</td>
															<td><input  type='number' disabled value='0' name='total_non_audit_staff[]' class='form-control' id="total_non_audit_staff" ></td>														
														</tr>
													</tfoot>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('12.') }}</label>
									<label class="col-md-11 col-form-label">{{ __('Types Of Service Provided') }}</label>

								</div>
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="card type-service-card">
											<div class="card-body">
												<table id="tbl_type_service" class="table">
													<thead>
														<tr>
															<th class="less-font-weight" rowspan="2">Accountancy Services(Non-Audit)</th>
														</tr>

													</thead>
													<tbody id="tbl_type_service_body">

													</tbody>
													<tfoot id="tbl_type_service_foot">
														<tr style='display:none' id='tr_other'>
															<td style="width:1000px;"><input type="text" class="form-control" name="other" id="other"></td>
														</tr>
													</tfoot>
													
												</table>
											</div>
										</div>
									</div>
								</div><br>

								<div class="row">
									<label class="col-md-1 col-form-label">{{ __('') }}</label>
									<label class="col-md-2 col-form-label">{{ __('') }}</label>
									<div class="col-md-8" id="type_service_validate" style="display:none;">
											<label class="text-danger">Service Provided အမျိုးအစားရွေးချယ်ပါ</label>
									</div>
								</div>

								{{--<table width="100%">
									<tr>
										<td width="8%">14</td>
										<td width="17%"><label class="col-form-label">လျှောက်လွှာကြေး(၁၀၀၀ ကျပ်)</label>
										</td>
										<td width="73%">
												<div class="form-group">
														<!-- <a href="{{ url('payment') }}" class="btn btn-sm btn-block btn-info">Choose Payment</a> -->
														<p class="col-md-9 text-primary">Payment System Coming Soon</p>
														<input type="hidden" value="1000" name="form_fee">
												</div>
										</td>
									</tr>
								</table><br>--}}
								{{--<table width="100%">
									<tr>
										<td width="8%">15</td>
										<td width="17%"><label class="col-form-label">မှတ်ပုံတင်ကြေး Audit Report တွင်လက်မှတ်ရေးထိုးမည့်သူတစ်ဦးလျှင်(၁၀၀,၀၀၀ ကျပ်)</label>
										</td>
										<td width="73%">
											<div class="form-group">
												<div class="form-group">
													<!-- <a href="{{ url('payment') }}" class="btn btn-sm btn-block btn-info">Choose Payment</a> -->
													<p class="col-md-9 text-primary">Payment System Coming Soon</p>
													<input type="hidden" value="100000" name="nrc_fee">
												</div>
											</div>
										</td>
									</tr>
								</table><br>--}}

								<div id="director_staffmembers" style="display:none;">
									<div class="row">
										<label class="col-md-1 col-form-label" id="label1">13.</label>
										<label class="col-md-11 col-form-label">{{ __('Particulars Of Directors/ Staff Members Who Is A Myanmar CPA') }}</label>

									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<div class="card">
												<div class="card-body">
													<table id="myTable" class="table director_cpa_initial table-bordered">
														<thead>
															<tr>
																<th class="less-font-weight" rowspan="2">Sr</th>
																<th class="less-font-weight" rowspan="2">Name</th>
																<th class="less-font-weight" rowspan="2">Position</th>
																<th class="less-font-weight" rowspan="2">CPA(Passed Reg.No)</th>
																<th class="less-font-weight" rowspan="2">CPA (Full-Fledged) Reg.No</th>
																<th class="less-font-weight" rowspan="2">Public Practice Reg.No</th>
																<th class="less-font-weight" style="text-align: right;">
																	<button class="btn btn-primary btn-sm" type="button" onclick='addRowDirectorCPA("director_cpa_initial")'>
																		<i class="fa fa-plus"></i>
																	</button>

																</th>
															</tr>

														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td><input type="text" value="" name="mf_name[]" class="form-control" autocomplete="off"></td>
																<td><input type="text" value="" name="mf_position[]" class="form-control" autocomplete="off"></td>
																<td><input type="text" value="" name="mf_cpa_passed_reg_no[]" class="form-control" autocomplete="off"></td>
																<td><input type="text" value="" name="mf_cpa_full_reg_no[]" class="form-control" autocomplete="off"></td>
																<td><input type="text" value="" name="mf_pub_pra_reg_no[]" class="form-control" autocomplete="off"></td>
																<td>
																	<button class="delete btn btn-danger btn-sm" type="button" onclick='delRowDirectorCPA("director_cpa_initial")'><i class="fa fa-trash"></i></button>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><br>		                  

								<!-- Declaration  -->
								<div class="row">
									<label class="col-md-1 col-form-label" id="label2">13.</label>
									<label class="col-md-1 col-form-label" id="label3" style="display:none" >14.</label>
									<label class="col-md-2 col-form-label">{{ __('Declaration') }}</label>
									<label class="col-form-label" style="display:contents;">{{ __('I') }}</label>
									<div class="col-md-4">
										<div class="form-group">
												<input type="text" name="declaration" class=" @error('date_of_birth') is-invalid @enderror form-control" autocomplete="off" value="{{ old('declaration') }}" placeholder="(sole proprietor/ managing partner)" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
												(sole proprietor/ managing partner)  
										</div>
									</div>
								</div>

								<div class="row  mb-3">
									<label class="col-md-3 col-form-label">{{ __('') }}</label>								
									<div class="col-md-9">
										<div class="form-group">
										representing all the members of the firm, confirm that the particulars stated in this form, attached supporting documents are correct.
										</div>
									</div>
								</div>

								
								
								{{--<div class="row mb-3">
										<div class="col-md-1"></div>
										<label class="col-md-1 col-form-label mt-1"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></label>
										<label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>
										<input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
										<input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >
								</div>--}}

								<div class="row mb-3">
									<div class="col-md-2 offset-md-5">
										<button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" form="non-audit-form" >{{ __('Submit') }}</button>
									</div>
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
<script src="{{asset('assets/js/non_audit_firm.js')}}"></script>
<script>

$(document).ready(function(){
	$("#non-audit-form").submit(function( event ) {
		// organization_structure radio button required validation
		if($("input[name='org_stru_id']:checked").length == 0){
			$('#org_validate').css('display','block');
		}
		else{
			$('#org_validate').css('display','none');
		}

		// Types Of Service Provided radio button required validation
		if($("input[name='t_s_p_id']:checked").length == 0){
			$('#type_service_validate').css('display','block');
			$(".type-service-card").css('border','1px solid red');
		}
		else{
			$('#type_service_validate').css('display','none');
			$(".type-service-card").css('border','1px solid rgba(0,0,0,.125)');
		}
	});

});


loadNonAuditStaff();
loadNonAuditOrganization();
loadNonAuditTypeOfService();
nonAuditRegFeedback();
nonAuditData();
// pendingStatus();
nonAuditFirmDateQuery();
nonAuditVerifyStatus();

</script>

@endpush
