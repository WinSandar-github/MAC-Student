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
                    <h2 class="title">PAPP <span>Detail</span></h2>
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
										<div class="card col-md-7 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Description</h4>
														<hr>
														<div class="info-list">
                                                            <div class="description-info">
                                                            
                                                            </div><br/>
															<!-- Requirement -->
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
																		<div class="pull-right mt-4">
																			<p class="info-btn col-md-2 mb-4 text-dark h6">
																				<a href="{{url('student_papp')}}" class="btn btn-success btn-hover-dark" >Register</a>
																			</p>
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

                <div class="card border-success mb-3" id="papp_renew_form" style="display:none;"><br/><!---->
            				<h5 class="card-title text-center">PAPP မှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားခြင်း</h5> <br/>
                    <form method="post" action="javascript:RenewPAPP();" enctype="multipart/form-data" id="papp_renew_form_submit">
                    	<div class="card-body">
						<div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="single-form">
                                                <label class="col-form-label">{{ __('၁။') }}</label>

                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="single-form">
                                                <label class="col-form-label" >{{ __('လျှော​က်ထားသူ၏ ကိုယ်ရေးအချက်အလက်') }}</label>

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
										<div class="col-md-1"></div>
                                        <label class="col-md-2 col-form-label" ></label>
                                        <div class="col-md-5 col-form-label">{{ __('CPA (FF) မှတ်ပုံတင် သက်တမ်း') }}</div>
                                        <div class="col-md-4 col-form-label">
                                            <lable id="cpa_age"></label>
                                        </div>
                                    </div>
									

                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-7 pull-right">
                                        <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                        <p class="mt-2">
                                        	<input type="file" class="custom-file-input form-control" id="profile_photo" name="profile_photo" accept="image/*" onchange="previewImageFile(this);" required>
											<span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
										</p>
                                    </div>
                                </div>
                            </div>
							<!-- <div class="row">
									<label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-1 col-form-label"></label>
                                    <div class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</div>
										<div class="col-md-7">
											<div class="row">
												<div class="col-md-4 col-form-label">
													<input type="checkbox" value="" id="cpa_check" onclick="CPA_Check()" >
													<label  class="col-form-label">CPA</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4"></div>
                                                <div class="col-md-1 view_cpa_file" style="display:none;"></div>
												<div class="col-md-6"  id="cpa_edu" style="display:none;">
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
												<div class="col-md-4"></div>
                                                <div class="col-md-1 view_ra_file" style="display:none;"></div>
												<div class="col-md-6"  id="ra_edu" style="display:none;">
													<input type="file" class="form-control" id="ra_file"  name="ra_file">
												</div>
											</div>

											<div class="row mb-2">
												<div class="col-md-12 col-form-label">
													<input type="checkbox" value=""  id="degree_check" onclick="Degree_Check()"  >
													<label  style="font-size:15px;">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
												</div>
											</div>
											<div  id="edu" style="display:none;">
												<div class="row mb-2" id="degree_name0">
													
													<div class="col-md-4 col-form-labe label">
														<label> ဘွဲ့အမည်</label>
													</div>
													<div class="col-md-1">
																			
                                    				</div>
													<div class="col-md-6 col-auto">
														<input type="text"  class="form-control" name="degree_name0" >
													</div>
												</div>
												<div class="row mb-2" id="degree_year0">
													
													<div class="col-md-4 col-form-labe label">
														<label > အောင်မြင်သည့်နှစ်/လ</label>
													</div>
													<div class="col-md-1">
																			
                                    				</div>
													<div class="col-md-6 col-auto">
														<input type="type"  class="form-control degree_pass_year" name="degree_pass_year0"  >
													</div>
												</div>

												<div class="row" id="edu0" >
													
													<div class="col-md-4 col-form-labe label">
														<label > Attached Certificate</label>
													</div>
													<div class="col-md-1 view_degree_file0">
																			
                                    				</div>
													<div class="col-md-6"  id="degree_edu" >
														<input type="hidden" id="hidden_degree_file0">
														<input type="file"  class="form-control" id="degree_file0"  name="degree_file0" >
													</div>
													<div class="col-md-1" id="add_div" >
														<button type="button" class="btn btn-primary" id="add_btn" onclick="Add()" >
															<i class="fa fa-plus"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
                                	</div> -->



                                

                                <br/>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="">{{ __('၂။') }}</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <label class="col-md-6"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်း လုပ်ကိုင်သူအဖြစ်</label>
                                            <div class="col-md-2">
                                                <input type="text" name="papp_date" class="form-control papp_date" disabled>
                                            </div>
                                            <label class="col-md-4"  style="font-size:15px;">ခုနှစ်အတွက်မှတ်ပုံတင်ပေးခဲ့ပီးဖြစ်ပါသည်။</label>
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
                                    <div class="col-md-1"><input type="checkbox" id="firm_check"  ></div>
                                    <div class="col-md-10">

                                        <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                    </div>
                                </div><br/>
                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="checkbox" id="used_firm_check" value=""></div>
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
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"><input type="checkbox" id="staff_firm_check" value=""></div>
                                    <div class="col-md-4">
                                        <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <div class="single-form"> -->
                                        <input type="text" class="form-control" name="staff_firm_name" ></div>
                                    <!-- </div> -->
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ __('၄။') }}</label>

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
                                            <label >လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_cpa_ff_file">
										<input type="hidden" id="hidden_cpa_ff_file">
                                        <!-- <input type="file" class="form-control"  id="cpa_ff_file"  name="cpa_ff_file"> -->
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ခ)</div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;"> မှတ်ပုံတင်မည့် ပြက္ခဒိန်နှစ်မတိုင်မီနှစ်တွင် မြန်မာနိုင်ငံ၌ ၁၈၃ ရက်ထက်မနည်း နေထိုင်သူဖြစ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_file_183">
										<input type="hidden" id="hidden_file_183">
                                            <!-- <input type="file" class="form-control" id="file_183" name="file_183"> -->
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဂ)</div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;"> အခြားလုပ်ငန်းအဖွဲ့အစည်းတစ်ရပ်ရပ်တွင် အချိန်ပြည့် တာဝန်ထမ်းတောင်နေသူ မဟုတ်ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_not_fulltime_file">
									<input type="hidden" id="hidden_not_fulltime_file">
                                            <!-- <input type="file" class="form-control" id="not_fulltime_file"  name="not_fulltime_file"> -->
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဃ)</div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;"> လျှောက်ထားသည့်နှစ်အတွက် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကို မိမိ၏ အဓိကအသက်မွေးဝမ်းကျောင်းလုပ်ငန်းအဖြစ် မြန်မာနိုင်ငံအတွင်းတွင် လုပ်ကိုင်မည်ဖြစ်​ကြောင်း ခံဝန်ချက်၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_work_in_mm_file">
									<input type="hidden" id="hidden_work_in_mm_file">
                                            <!-- <input type="file"  class="form-control" id="work_in_mm_file"  name="work_in_mm_file"> -->
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(င)</div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;"> လုပ်ငန်းဆောင်ရွက်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီ၏ ၉-၈-၂၀၁၈ ရက်စွဲပါအမိန့်ကြော်ငြာစာအမှတ် ၂၇/၂၀၁၈ ၏ နောက်ဆက်တွဲတွင် ဖော်ပြထားသည့်စည်းကမ်းချက်များနှင့် စပ်လျဥ်း၍ လိုက်နာခြင်း ရှိ/မရှိ၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_rule_conf_file">
										<input type="hidden" id="hidden_rule_conf_file">
                                            <!-- <input type="file" class="form-control" id="rule_conf_file" name="rule_conf_file" > -->
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(စ) </div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                    </div>
									
                                    <div class="col-md-4 view_cpd_record_file">
										<input type="hidden" id="hidden_cpd_record_file">
                                            <!-- <input type="file" class="form-control" id="cpd_record_file" name="cpd_record_file"> -->
                                    </div>
                                </div><br/>

                                <!-- <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                            <label style="font-size:15px;">စုစုပေါင်း နာရီ</label>
                                    </div>
									<div class="col-md-1 ">

                                    </div>
                                    <div class="col-md-3">
										<input type="text" class="form-control" id="total_hours" name="total_hours" >
                                    </div>
                                </div><br/> -->
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">(ဆ) </div>
                                    <div class="col-md-6 col-form-label ">ပြည်တွင်းအခွန်ဦးစီးဌာနသို့ပြက္ခဒိန်နှစ်အတွက် အခွန်ပေးဆောင်မှု အထောက်အထား (ရှိလျှင်) (သို့မဟုတ်) အခွန်ကင်းရှင်းကြောင်း ထောက်ခံချက်</div>
									<div class="col-md-4">
                                                <input type="text" name="tax_year" class="form-control tax_year" >
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-8" ></label>
                                    
                                    <div class="col-md-4 view_tax_free_file">
                                    <input type="hidden" id="hidden_tax_free_file">
                                            <!-- <input type="file" class="form-control" id="tax_free_file"  name="tax_free_file"> -->
                                    </div>
                                </div>
                                <br/>

													<div class="row">
														
																	<label class="col-md-1 col-form-label" >{{ __('') }}</label>
																	<label class="col-md-7 col-form-label label">{{ __('သင်တန်းဆရာမှတ်ပုံတင်အမှတ်') }}</label>
																	<div class="col-md-4">
																			<div class="form-group">
																				<input type="text" class="form-control" id="regno" readonly>
																			</div>
																	</div>
															</div>
															<div class="row">
																	<label class="col-md-1 col-form-label" >{{ __('') }}</label>
																	<label class="col-md-7 col-form-label label">{{ __('Applied Date') }}</label>
																	<div class="col-md-4">
																			<div class="form-group ">
																				<input type="text" class="form-control" id="register_date" readonly>
																			</div>
																	</div>
															</div>
															<div class="row">
																	<label class="col-md-1 col-form-label" >{{ __('') }}</label>
																	<label class="col-md-7 col-form-label label" >{{ __('Status') }}</label>
																	<div class="col-md-4">
																			<div class="form-group">
																				<input type="text" class="form-control" id="message" readonly="">
																			</div>
																	</div>
															</div>
														</div>
														<!-- <div class="col-md-3">
															<div class="col-md-8 pull-right mt-3">
																<img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
																<p class="mt-2">
																	<input type="file" value="" class="custom-file-input" id="audit_renew_profile" name="profile_photo" onchange="previewImageFile(this);" required>
																</p>
															</div>
														</div> -->
													
													
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
        loadDescription('papp');
        loadPAPP();
        // if(course_type[2]==1){
        //     // console.log("DA");
        //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>အသိအမှတ်ပြုတက္ကသိုလ်တစ်ခုခုမှ ဘွဲ့ရရှိသူများ လျှောက်ထားနိုင်ပါသည်။ </li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I  သင်တန်း (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၅၀၀ ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်း(၂)တန်း (MAC,SS,Private)(၃)မျိုးပေါင်း နှစ်စဉ် ၃၀၀  ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I သင်တန်းတွင် ဘာသာရပ် ၅ ခု၊ Module I တွင် ဘာသာရပ် ၃ ခု၊ Module II တွင် ဘာသာရပ် ၂ ခု ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်းတွင် ဘာသာရပ် ၆ ခုရှိပြီး ရှိပြီး Module တစ်ခုစီတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA I အောင်မြင်ပြီးသူ  ၈၇၄၃ ဦး၊ တက်ရောက်ဆဲ ၂၇၉ ဦး ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA II အောင်မြင်ပြီးသူ  ၄၆၀၉ ဦး ရှိပါသည်။</li>";
        //     $(".requirement_lists").append(li);
        // }else{
        //     // console.log("CPA");
        //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>BCom,BAct,BBA,DA,BBSc ,ACCA (Fundamental skill level),CIMA ဘွဲ့များကို အဆိုပါသင်တန်းသို့ တိုက်ရိုက် တက်ရောက်ခွင့်ပေးပြီး အခြားဘွဲ့များ ဝင်ခွင့်စာမေးပွဲ အောင်မြင်ပါက တက်ရောက်ခွင့်ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA I & II သင်တန်း(၂)တန်းဖွင့်လှစ်ပြီး (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၃၅၀၀ ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>သင်တန်းတစ်ခုတွင်ဘာသာရပ် ၆ ခုရှိပြီး Module တစ်ခုတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ CPA I အောင်မြင်ပြီးသူ  ၃၈၁၀ ဦး၊တက်ရောက်ဆဲ၂၇၄၁ ဦး တက်ရောက်ခွင့်ရရှိထားသူ ၁၅၀၀ ဦး ခန့်ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA II  အောင်မြင်ပြီးသူ ၂၆၂၈ ဦး ၊ CPA II တက်ရောက်ဆဲ    ၅၀၀ ဦး ရှိပါသည်။</li>";
        //     $(".requirement_lists").append(li);
        // }
    })
    //app_form_feedback();

</script>
@endpush
