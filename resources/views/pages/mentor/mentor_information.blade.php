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
                    <h2 class="title">Mentor <span>Detail</span></h2>
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
								{{--<div class="card-body " id="mentor">
									<div class="row">
										<div class="col-md-12 widget-information">
											<div class="row border-bottom">
	                      <h2 class="col-md-6 card-title text-center text-success">Mentor</h2>
                        <div class="col-md-3"></div>
              				</div>
											<!-- Description -->
											<div class="row">
												<div class="col-md-7">
														<h5 class="mt-2"><strong>Description</strong></h5>
														<hr>
														<ul id="mentor_description_lists">
																<li>
																	<span>
																		<!-- <i class="icofont-file-document"></i> -->
																		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
																 </span>
															 </li>
														</ul>

												</div>


                        <!-- Requirement -->
                        <div class="col-md-5">
													<h5 class="mt-2"><strong>Requirement</strong></h5>
													<hr>
													<div class="info-list">
														<ul>
															<?php
																if (is_array($requirements) || is_object($requirements))
																	{
																	    foreach ($requirements as $value)
																	    {
																	        if($value['type'] == "MENTOR"){
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
														<div class="pull-right mt-4">
															<p class="info-btn col-md-2 mb-4 text-dark h6">
																<a href="{{url('mentor_register')}}" class="btn btn-primary btn-hover-dark" >Register</a>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>--}}

								<div id="mentor">
									<div class="row">
										<div class="card col-md-6 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Mentor</h4>
														<h6 class="mt-2">Description</h6>
														<hr>
														<div class="info-list">
															<div class="col-md-12">
																	<ul id="teacher_description_lists">
																			<li>
																				<i class="icofont-book"></i>
																				အလုပ်သင်ကြားပေးသူအဖြစ် အောက်ပါသတ်မှတ်ချက်များနှင့် ကိုက်ညီသည့် PAPP များ လျှောက် ထားနိုင်ပါသည်
																				<div class="row">
																					<div class="col-md-12">
																						<div class="offset-md-1 col-md-11">
																							(၁)  PAPP အဖြစ်မှတ်ပုံတင်ထားပြီး ယင်းလုပ်ငန်းကို ၃ နှစ်တစ်ဆက်တည်းလုပ်ကိုင်ခဲ့သူ (မှတ်ပုံတင်သက်တမ်းပြတ်တောက်နေသူများကို ခွင့်မပြုပါ)
																						</div>
																						<div class="offset-md-1 col-md-11">
																							(၂)  Limited Company ၅ ခုထက်မနည်း နှစ်စဉ် (၃ နှစ်တစ်ဆက်တည်း) တာဝန်ယူ စစ်ဆေးခဲ့သူ
																						</div>
																					</div>
																				</div>
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				သတ်မှတ်လျှောက်လွှာပုံစံဖြင့်လျှောက်ထားရမည်၊ (လျှောက်လွှာကြေးမကောက်ခံပါ)
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				သတ်မှတ်ချက်များနှင့်ကိုက်ညီပါက အလုပ်သင်ကြားပေးနိုင်သည့် PAPP အမည်စာရင်း ထုတ် ပြန်ပါသည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				သတ်မှတ်ချက်များနှင့်ကိုက်ညီပါက အလုပ်သင်ကြားပေးနိုင်သည့် PAPP အမည်စာရင်း ထုတ် ပြန်ပါသည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				အလုပ်သင်တစ်ဉီးချင်းအလိုက် နေ့စဉ် ရုံးတက်/ရုံးဆင်းမှတ်တမ်းများ၊ နေ့စဉ်မှတ်တမ်းများ ၊ ခွင့် အမျိုးအစား နှင့် ခွင့်ကာလတို့ကိုလည်းကောင်း၊ ခွင့်ခံစားခြင်းမရှိပါကလည်း မရှိစာရင်းကို လစဉ် လဆန်း ၅ ရက် ထက် နောက်မကျဘဲ MAC ရုံးသို့ပေးပို့ရ။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				ရပ်နားတင်/သေ ပါက အလုပ်သင်များကို အခြား Firm သို့ပြောင်းပေးရ။
																			</li>
																	</ul>
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
														<h4 class="col-md-12 card-title text-success">Mentor</h4>
														<h6 class="mt-2">Requirement</h6>
														<hr>
														<div class="info-list">
															<div class="col-md-12">
																<ul>
																	<?php
																		if (is_array($requirements) || is_object($requirements))
																			{
																					foreach ($requirements as $value)
																					{
																							if($value['type'] == "MENTOR"){
																	?>
																					<li>
																						<i class="icofont-man-in-glasses"></i>
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
														<div class="info-list">
															<div class="pull-right mt-4">
																<p class="info-btn col-md-2 mb-4 text-dark h6">
																	<a href="{{url('mentor_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>



                <div class="card border-success mb-3" id="mentor_renew_form" style="display:none;"><br/><!---->
                    <h5 class="card-title text-center">mentorမှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားလွှာ</h5> <br/>
                    <form method="post" action="javascript:renewMentor();" enctype="multipart/form-data"  id="mentor_renew_form_submit">

                        <div class="card-body">
                                        
										<div class="row">
                                <div class="col-md-8">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-5 col-form-label label">{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" id="name_mm" name="name_mm" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="name_eng" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-5 col-form-label label">{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" id="father_name_mm" name="father_name_mm" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="father_name_eng" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                      <label class="col-md-5 col-form-label label">{{ __('လူမျိူး/ကိုးကွယ်သည့်ဘာသာ') }}</label>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" name="race" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" name="religion" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                  </div>                                  
                                </div>

                                <div class="col-md-4">
                                  <div class="col-md-7 pull-right">
                                    <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                    <p class="mt-2">
                                      <input type="file" class="custom-file-input form-control" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                      <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </p>
									
                                  </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                <div class="col-md-8">
                                    <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                        <div class="col-md-3  pr-1">
                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region" style="margin-top: 0px !important; margin-bottom: 0px;">
                                              <option value="" disabled selected>Select</option>
                                                @foreach($nrc_regions as $region)
                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3  px-1">
                                            <select class="form-control" name="nrc_township" id="nrc_township" style="margin-top: 0px; margin-bottom: 0px;">
                                              <option value="" disabled selected>Select</option>
                                                @foreach($nrc_townships as $township)
                                                    <option value="{{ $township['township_mm'] }}">
                                                        {{ $township['township_mm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </select>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen" style="margin-top: 0px; margin-bottom: 0px;">
                                              <option value="" disabled selected>Select</option>
                                                @foreach($nrc_citizens as $citizen)
                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-3 px-1">
                                            <input type="text" name="nrc_number" id="nrc_number" autocomplete="off" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" value="{{ old('nrc_number') }}" >
                                        </div>
                                    </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                            </div>
                                            <div class="row nrc">
												<input type="hidden" id="hidden_nrc_front">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg"  accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                <input type="file" class="nrc-custom-file-input form-control" id="nrc_front"  name="nrc_front"
                                                    value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
													<span class="form-text text-danger">Allowed Jpeg and Png Image.</span>     
												</p>
                                                                                                        
                                            </div>                                                    
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                            </div>
                                            <div class="row nrc">
												<input type="hidden" id="hidden_nrc_back">
                                                <img class="col-md-12 nrc-image-style" id="previewNRCBackImg"  accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                <input type="file" class="nrc-custom-file-input form-control" id="nrc_back"  name="nrc_back"
                                                    value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
													<span class="form-text text-danger">Allowed Jpeg and Png Image.</span>     
												</p>
                                                                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>                                        
                              </div><br> 
							  <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('မွေးသက္ကရာဇ်') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                      <input type="text" name="date_of_birth" autocomplete="off" class="form-control" >
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း') }}</label>
                                  <div class="col-md-8">
                                      
                                      <div class="form-group">
                                          <input type="text" name="education" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                              </div>
                              <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                  <div class="col-md-11 pull-right">
                                      <label class="invalid-feedback degree text-right text-danger">ပညာအရည်အချင်း ထည့်ပါ</label>
                                  </div>

                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('RA/CPA အောင်မြင်သောနှစ်/ကိုယ်ပိုင်အမှတ်') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ra_cpa_success_year" id="ra_cpa_success_year" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ra_cpa_personal_no" id="ra_cpa_personal_no" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                              </div>

                              <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('CPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="cpa_reg_no" id="cpa_reg_no" class="form-control"autocomplete="off">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      
                                      <div class="form-group">
                                          <input type="text" id="cpa_reg_date" name="cpa_reg_date"  class="form-control" autocomplete='off'>
                                      </div>
                                  </div>
                              </div></br>

                              <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('PPA မှတ်ပုံတင်အမှတ်/ရက်စွဲ') }}</label>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ppa_reg_no" id="ppa_reg_no" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="ppa_reg_date" id="ppa_reg_date" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                              </div></br>
							  <div class="row" style="clear:both;">
                                  <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <textarea class="form-control" name="address" id="" rows="3" style="resize:none;" autocomplete="off"></textarea>
                                    </div>
                                  </div>
                              </div></br>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Phone Number/Fax Number') }}</label>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="phone_no" id="phone_no" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <input type="text" name="fax_no" id="fax_no" class="form-control" autocomplete="off">
                                  </div>
                                </div>

                              </div>
                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Contact Email') }}</label>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="email" name="m_email" id="m_email" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label ">{{ __('၁၁။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('Audit Firm အမည်') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="audit_firm_name" id="audit_firm_name" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label ">{{ __('၁၂။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('စတင်တည်ထောင်သည့်နေ့') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="audit_started_date" id="audit_started_date" class="form-control" autocomplete="off">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('Audit Firm ၏ဖွဲ့စည်းပုံနှင့်ဝန်ထမ်းအင်အား') }}</label>
                                <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="number" name="audit_structure" class="form-control" autocomplete="off">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" name="audit_staff_no" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('လက်ရှိလက်ခံဆောင်ရွက်စစ်ဆေးပေးရသည့်လုပ်ငန်းများ') }}</label>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <select class="form-control form-select" name="current_check_service_id" id="selected_service_id" style="width:57%;margin-right:3px;" >
                                          <option value="" disabled selected>Select Current Service</option>
                                      </select>
                                      <div class="col-md-5 check-service-other" style="visibility:hidden;">
                                        <div class="form-group">
                                            <input type="text" id="other_service" name="current_check_services_other" class="form-control"autocomplete="off" >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="row mb-3">
                                <label class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                <label class="col-md-3 col-form-label label">{{ __('ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ') }}</label>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <div class="form-check mt-2 form-check-inline">
                                      <input type="radio" class="form-check-input" value="1" name="experience" id="experience1">
                                      <label class="form-check-label" for="">ရှိ</label>
                                    </div>
                                    <div class="form-check mt-2 form-check-inline">
                                        <input type="radio" class="form-check-input" value="0" name="experience" id="experience0">
                                        <label class="form-check-label" for="">မရှိ</label>
                                        <div class="invalid-feedback">ယခင်အလုပ်သင်ကြားပေးမှုအတွေ့အကြုံ ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="started_teaching" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('စာရင်းကိုင်အလုပ်သင်များအား အလုပ်သင်ကြားပေးမှု စတင်ခဲ့သည့်ခုနှစ်') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="text" name="started_teaching_year" class="form-control" autocomplete="off" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="internship_accept" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('အလုပ်သင်ဦးရေလက်ခံနိုင်သည့်အရေအတွက်') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="number" name="internship_accept_no" class="form-control" autocomplete="off" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="current_accept" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('လက်ရှိလက်ခံသင်ကြားပေးသော အလုပ်သင်ဦးရေ') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="number" name="current_accept_no" class="form-control" autocomplete="off" >
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="trained_trainees" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('မွေးထုတ်ပေးခဲ့သည့် အလုပ်သင်ဦးရေ') }}</label>
                                  <div class="col-md-4">
                                  <div class="form-group">
                                    <input type="number" name="trained_trainees_no" class="form-control" autocomplete="off" >
                                  </div>
                                  </div>
                                </div>
                              </div>

                              <div id="repeat_yearly" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('နှစ်စဥ်ဆက်တိုက်အလုပ်သင်ကြားနိုင်ခြင်း ရှိ/မရှိ') }}</label>
                                  <div class="col-md-2 form-check pt-2">
                                    <!-- <input type="radio"  value="1" name="repeat_yearly" @if(old('repeat_yearly')) checked @endif> ရှိ -->

                                    <input type="radio" class="form-check-input" value="1" name="repeat_yearly" id="repeat_yearly1">
                                    <label class="form-check-label" for="">ရှိ</label>
                                  </div>
                                  <div class="col-md-3 form-check pt-2">
                                    <!-- <input type="radio" value="0" name="repeat_yearly" @if(!old('repeat_yearly')) checked @endif> မရှိ -->

                                  <input type="radio" class="form-check-input" value="0" name="repeat_yearly" id="repeat_yearly0">
                                  <label class="form-check-label" for="">မရှိ</label>
                                  <div class="invalid-feedback">နှစ်စဥ်ဆက်တိုက်အလုပ်သင်ကြားနိုင်ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                  </div>
                                </div>
                              </div>

                              <div id="training_absent" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-6 col-form-label">{{ __('အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ') }}</label>
                                  <div class="col-md-2 form-check pt-2">
                                    <input type="radio" class="form-check-input" value="1" name="training_absent" id="training_absent1">
                                    <label class="form-check-label" for="">ရှိ</label>
                                  </div>
                                  <div class="col-md-2 form-check pt-2">
                                    <input type="radio" class="form-check-input" value="0" name="training_absent" id="training_absent0">
                                    <label class="form-check-label" for="">မရှိ</label>
                                    <div class="invalid-feedback">အလုပ်သင်ကြားမှုပြတ်တောက်ခဲ့ခြင်း ရှိ/မရှိ ရွေးချယ်ပါ</div>
                                  </div>
                                </div>
                              </div>
							  <div id="absent_reason" style="display:none;">
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label"></label>
                                  <label class="col-md-6 col-form-label">{{ __('ရှိပါက ပြတ်တောက်ခဲ့ရသည့် အကြောင်းအရင်း') }}</label>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                    <textarea class="form-control" name="training_absent_reason" id="exampleFormControlTextarea1" rows="3" style="resize:none;"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                              <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >

										<div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">ကျောင်းမှတ်ပုံတင်အမှတ်</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="regno" readonly>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">Applied Date</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                    <input type="text" class="form-control" id="register_date" readonly>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
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
        if(student.approve_reject_status == 1){
                loadRenewMentor(localStorage.getItem("mentor_id"));
            }
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
