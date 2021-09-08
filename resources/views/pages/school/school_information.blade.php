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
                    <h2 class="title">School <span>Detail</span></h2>
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

								<div id="school_detail">
									<div class="row">
										<div class="card col-md-7 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Description</h4>
														<hr>
														<div class="info-list">
															<h6 class="mt-2"><b>ကနဦးလျှောက်ထားခြင်း</b></h6>
															<div class="col-md-12">
																	<ul id="school_description_lists">
	                                    <li>
																				<i class="icofont-book"></i>
																				လျှောက်လွှာကြေး ကျပ်၁,၀၀၀ ပေးသွင်းပြီး လျှောက်လွှာ(ကျောင်းပုံစံ-၁)မှ(ကျောင်းပုံစံ-၅) ထိဖြင့် လျှောက်ထားရမည်။ (ပူးတွဲတင်ပြရမည့်အထောက်အထားများအပါအဝင်)
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				လျှောက်လွှာပါအချက်များ ပြည့်စုံပါက လျှောက်လွှာလက်ခံယူထားကြောင်း အထောက် အထားစာကို ထုတ်ပေးရသည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				ကော်မတီသို့တင်ပြ၍ သဘောတူခွင့်ပြုပါက မှတ်ပုံတင်ကြေး ကျပ် ၅ သိန်း နှင့် နှစ်စဉ်ကြေး ကျပ် ၃ သိန်းကို အကြောင်းကြားစာရရှိသည့်နေ့မှ (၁၀)ရက်အတွင်း ပေးသွင်းရန် အကြောင်းကြားပါ သည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				သတ်မှတ်ကြေးများပေးသွင်းသည့်နေ့မှ ၃၀ ရက် အတွင်း မှတ်ပုံတင်လက်မှတ်ထုတ်ပေး ပါသည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				မှတ်ပုံတင်သက်တမ်းကာလမှာ ပထမဆုံးမှတ်ပုံတင်ကြေးပေးသွင်းသည့်နေ့၏ ပြက္ခဒိန်လ အပါအဝင် ၃၆ လ (၃ နှစ်တာကာလ) ဖြစ်ပါသည်။
																			</li>
																	</ul>
															</div>
															<h6 class="mt-2"><b>သက်တမ်းတိုးလျှောက်ထားခြင်း</b></h6>
															<div class="col-md-12">
																<ul id="school_renew_des_lists">
																		<li>
																			<i class="icofont-book"></i>
																			သက်တမ်းတိုးမည့်ရက်မတိုင်မီ ကပ်လျက်ရှိသောရှေ့ (၂)လအတွင်း သက်တမ်းတိုး လျှောက် ထားရမည်။
																		</li>
																		<li>
																			<i class="icofont-book"></i>
																			လျှောက်လွှာကြေး ကျပ် ၁,၀၀၀ ပေးသွင်းပြီး လျှောက်လွှာ (ကျောင်းပုံစံ-၆) ဖြင့် လျှောက်ထားရမည်။ (ပူးတွဲတင်ပြရမည့်အထောက်အထားများအပါအဝင်)
																		</li>
																		<li>
																			<i class="icofont-book"></i>
																			လျှောက်လွှာပါအချက်များ ပြည့်စုံပါက ကော်မတီသို့တင်ပြ၍ သဘောတူခွင့်ပြုပါက သက်တမ်းတိုး မှတ်ပုံတင်ကြေး ကျပ် ၅ သိန်း နှင့် နှစ်စဉ်ကြေး ကျပ် ၃ သိန်း ပေးသွင်းရန် အကြောင်း ကြားပါသည်။
																		</li>
																		<li>
																			<i class="icofont-book"></i>
																			သတ်မှတ်ကြေးများပေးသွင်းသည့်နေ့မှ ၃၀ ရက် အတွင်း မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပါ သည်။
																		</li>
																</ul>
															</div>
															<h6 class="mt-2"><b>နောက်ကျသက်တမ်းတိုးခြင်း</b></h6>
															<div class="col-md-12">
																<ul>
																		<li>
																			<i class="icofont-book"></i>
																			သက်တမ်းတိုးမည့်ရက်မတိုင်မီ ကပ်လျက်ရှိသော ရှေ့ (၂)လအတွင်း သက်တမ်းတိုး လျှောက်ထားခြင်း မပြုနိုင်ပါက သတ်မှတ်ကာလ၏ တစ်ဆက်တည်းဖြစ်သောနောက်တစ်လအတွင်း လျှောက်လွှာကြေး ကျပ် ၁,၀၀၀ + သက်တမ်းတိုးမှတ်ပုံတင်ကြေး ကျပ် ၅ သိန်း + နှစ်စဉ်ကြေး ကျပ် ၃ သိန်း + နောက်ကျဒဏ်ကြေး ကျပ် ၈ သိန်း = ကျပ် ၁၆,၀၁,၀၀၀ ပေးသွင်းလျှောက်ထားရမည်။
																		</li>
																</ul>
															</div>
															<h6 class="mt-2"><b>သက်တမ်းပြတ်ခြင်း</b></h6>
															<div class="col-md-12">
																<ul>
																		<li>
																			<i class="icofont-book"></i>
																			သတ်မှတ်ကာလထက်နောက်ကျ၍ သက်တမ်းတိုးရန် လျှောက်ထားခြင်းကို ခွင့်မပြု၊ သက်တမ်းပြတ်ဟု သတ်မှတ်ပြီး ပြန်လျှောက်ချိန်တွင် လျှောက်လွှာကြေး ကျပ် ၁,၀၀၀ + သက်တမ်းတိုးမှတ်ပုံတင်ကြေး ကျပ် ၅ သိန်း + နှစ်စဉ်ကြေး ကျပ် ၃ သိန်း + သက်တမ်းပြတ်ကြေး (၁ နှစ်လျှင်)၁ သိန်း ပေးသွင်းရမည်။
																		</li>
																</ul>
															</div>
															<h6 class="mt-2"><b>ရပ်နားခြင်း</b></h6>
															<div class="col-md-12">
																<ul>
																		<li>
																			<i class="icofont-book"></i>
																			ရပ်နားလိုကြောင်း အကြောင်းကြားစာနှင့်အတူ မှတ်ပုံတင်လက်မှတ်မူရင်းကို ပြန်လည် အပ် နှံရမည်။ ထိုသို့အပ်နှံထားသူများကို ပြန်လည်မှတ်ပုံတင်ချိန်တွင် သက်တမ်းပြတ်ကြေး မကောက်ခံရ။
																		</li>
																</ul>
															</div>
															<div class="col-md-12">
																<h4 class="col-md-12 card-title text-success">Description</h4>
																<hr>
																<ul>
																	<?php
																		if (is_array($requirements) || is_object($requirements))
																			{
																					foreach ($requirements as $value)
																					{
																							if($value['type'] == "SCHOOL"){
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
																		<li><i class="icofont-money"></i> <strong>Application Fee</strong> </li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee</strong></li>
																		<div class="pull-right mt-4">
																			<p class="info-btn col-md-2 mb-4 text-dark h6">
																				<a href="{{url('school_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
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

                <div class="card border-success mb-3" id="school_renew_form" style="display:none;"><br/>
                    <h5 class="card-title text-center">ကျောင်းမှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားလွှာ</h5> <br/>

                    <div class="card-body">
                            <form method="post" action="javascript:renewSchool();" enctype="multipart/form-data" id="school_renew_form_data">
                                

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
                                                <input type="text" name="name_eng" class="form-control"  autocomplete='off' disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label class="col-md-5 col-form-label label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <div class="col-md-2  px-1">
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
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"  disabled>
                                                    @foreach($nrc_citizens as $citizen)
                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5 col-7 pl-1">
                                                <input type="text" name="nrc_number" id="nrc_number"  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" disabled style="height: 38px" autocomplete='off'>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="col-md-7 pull-right">
                                      <img class="col-md-3 profile-style" id="previewImg"  accept="image/png,image/jpeg" alt="">
                                      <p class="mt-2">
                                        <input type="file" class="custom-file-input form-control" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                      </p>
                                    </div>
                                    
                                  </div>
                                </div>
                                <br>
                                

                                
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">{{ __('') }}</label>
                                    <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label for="" class="col-md-3 col-form-label ">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                </div>
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
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_mm" id="father_name_mm"  class="form-control" autocomplete='off' disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="father_name_eng" class="form-control"  autocomplete='off' disabled>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('မွေးသက္ကရာဇ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob"  class="form-control" autocomplete='off' disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control"  autocomplete='off' disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }} </label>

                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" id='schoolတစ်ဦးတည်းပိုင်လုပ်ငန်း' value='တစ်ဦးတည်းပိုင်လုပ်ငန်း' >
                                        <label class="">တစ်ဦးတည်းပိုင်လုပ်ငန်း </label>
                                        <label class="form-check-label type text-danger" style='display:none;float:right;'>ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ပေးပါ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" id='schoolနိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' >
                                        <label class="">နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" id='schoolတည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ' value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ' >
                                        <label class="">တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" id='schoolတည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်' value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း' >
                                        <label class="">တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း</label>
                                    </div>
                                </div><br>


                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label class="col-md-6 col-form-label label">{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}</label>
                                    <div class="col-md-1 view_attachment">

                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 col-auto">
                                            <input type="hidden" id="hidden_attachment">
                                            <input type="file" id="attachment" name="attachment" class="form-control" accept="application/pdf"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" name="address" style="resize:none;" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ဖုန်းနံပါတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control"  autocomplete='off'>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('သင်တန်းကျောင်းအချက်အလက်များ') }}</b></label>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">{{ __('ကျောင်းအမည်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="school_name" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">{{ __('သင်ကြားမည့်သင်တန်း') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group col-md-5">
                                           
                                            <select name="attend_course[]" id="attend_course" class="form-control multiple-attend-course" multiple="multiple" style="width:100%" >
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">{{ __('ကျောင်းတည်နေရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="school_address" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="private" value="private" >
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="rent" value="rent" >
                                            <label class="form-check-label" for="">အငှား</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="own_type" id="use_sharing" value="use_sharing" >
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label">{{ __('ကျောင်းခွဲတည်နေရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_address" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_private" value="private" >
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_rent" value="rent" >
                                            <label class="form-check-label" for="">အငှား</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_use_sharing" value="use_sharing" >
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ပူးတွဲတင်ပြသည့်အထောက်အထားများ') }}</b></label>
                                </div>
                                <div class="row">


                                    <label class="col-md-6 col-form-label label">{{ __('လုပ်ငန်းလိုင်စင်') }}</label>
                                    <div class="col-md-1 view_business_license">

                                    </div>
                                    <div class="col-md-5">
                                      <div class="mb-3 col-auto">
                                            <input type="hidden" id="hidden_business_license">
                                          <input type="file" id="business_license" name="business_license" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>
                                <div class="row">


                                    <label class="col-md-6 col-form-label label">{{ __('ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်') }}</label>
                                    <div class="col-md-1 view_company_reg">

                                    </div>
                                    <div class="col-md-5">
                                      <div class="mb-3 col-auto">
                                      <input type="hidden" id="hidden_company_reg">
                                          <input type="file" id="" name="company_reg" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>
                                <div class="row">


                                    <label class="col-md-6 col-form-label label">{{ __('အဖွဲ့အစည်း၏မှတ်ပုံတင်လက်မှတ်မူရင်းနှင့်မိတ္တူ') }}</label>
                                    <div class="col-md-1 view_org_reg_origin">

                                    </div>
                                    <div class="col-md-5">
                                      <div class="mb-3 col-auto">
                                      <input type="hidden" id="hidden_org_reg_origin_and_copy">
                                          <input type="file" id="" name="org_reg_origin_and_copy" class="form-control" accept="application/pdf"   />
                                      </div>
                                    </div>
                                </div>

                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}</label>
                                  <div class="col-md-1 view_estiblisher_list">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_estiblisher_list_and_bio">
                                        <input type="file" id="" name="estiblisher_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}</label>
                                  <div class="col-md-1 view_governer">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_governer_list_and_bio">
                                        <input type="file" id="" name="governer_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('အဖွဲ့အစည်းဖြစ်ပါက သက်ဆိုင်ရာအဖွဲ့အစည်း၏ အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၃)') }}</label>
                                  <div class="col-md-1 view_org_member_list_and_bio">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_nrc_back">
                                        <input type="file" id="" name="org_member_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၄)') }}</label>
                                  <div class="col-md-1 view_teacher_list">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_teacher_list_and_bio">
                                        <input type="file" id="" name="teacher_list_and_bio" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('ကောင်စီရုံးကထုတ်ပေးထားသည့်သင်တန်းဆရာမှတ်ပုံတင်မိတ္တူများ') }}</label>
                                  <div class="col-md-1 view_teacher_reg">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_teacher_reg_copy">
                                        <input type="file" id="" name="teacher_reg_copy" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းတည်နေရာလိပ်စာ(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-1 view_school_location">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_location_attach">
                                        <input type="file" id="" name="school_location_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">


                                  <label class="col-md-6 col-form-label label">{{ __('ကျောင်းအဆောက်အဦ(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-1 view_school_building">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_school_building_attach">
                                        <input type="file" id="" name="school_building_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('စာသင်ခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-1 view_classroom">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_classroom_attach">
                                        <input type="file" id="" name="classroom_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('သန့်စင်ခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-1 view_toilet_attach">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_toilet_attach">
                                        <input type="file" id="" name="toilet_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('စီမံရုံးခန်း(ပုံစံ-၅)') }}</label>
                                  <div class="col-md-1 view_manage_room">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_manage_room_attach">
                                        <input type="file" id="" name="manage_room_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('အထောက်အကူအခင်းအကျင်းများကိုဓါတ်ပုံနှင့်တကွဖော်ပြချက်') }}</label>
                                  <div class="col-md-1 view_supporting">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_supporting_structure_photo">
                                        <input type="file" id="" name="supporting_structure_photo" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('အဆောက်အဦအခင်းအကျင်းများအားရယူသုံးစွဲပုံ') }}</label>
                                  <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5">
                                      <div class="form-group">
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="using_type_private" value="private" >
                                          <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="using_type_rent" value="rent" >
                                          <label class="form-check-label" for="">အငှား</label>
                                        </div>
                                        <div class="form-check mt-2 form-check-inline">
                                          <input class="form-check-input" type="radio" name="using_type" id="using_type_use_sharing" value="use_sharing" >
                                          <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <label class="col-md-6 col-form-label label">{{ __('သက်ဆိုင်သည့်အထောက်အထားများ၊စာချုပ်စာတမ်းများ') }}</label>
                                  <div class="col-md-1 view_relevant_evidence_contracts">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_relevant_evidence_contracts">
                                        <input type="file" id="" name="relevant_evidence_contracts" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-9 col-form-label">{{ __('ကျောင်းတည်ထောင်ခြင်းအတွက်ရွေးချယ်ထားသည့် လုပ်ငန်းဖွဲ့စည်းမှုပုံစံအရပူးတွဲတင်ပြရမည့်အထောက်အထားများ(အစုအစပ်သဘောတူညီချက်/သင်းဖွဲ့စည်းမျဉ်း/သင်းဖွဲ့မှတ်တမ်း၊ဉပဒေနှင့်အညီရေးဆွဲပြုစုထားသော အခြားစာချုပ်စာတမ်းများ)') }}</label>

                                </div>
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                  <label class="col-md-5 col-form-label">{{ __('') }}</label>
                                  <div class="col-md-1 view_sch_establish_notes_attach">

                                    </div>
                                    <div class="col-md-5">
                                    <div class="mb-3 col-auto">
                                    <input type="hidden" id="hidden_sch_establish_notes_attach">
                                        <input type="file" id="" name="sch_establish_notes_attach" class="form-control" accept="application/pdf"   />
                                    </div>
                                  </div>
                                </div>


                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)နှင့်ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်') }}</b></label>
                                </div>

                                <div id="sch_establish_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_sch_established_persons table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >ဆက်သွယ်ရန်လိပ်စာ</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_sch_established_persons_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="sch_governs_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_sch_governs table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchGoverns("tbl_sch_governs")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_sch_governs_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="member_list_biography_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>

                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_member_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowMembershipBio("tbl_member_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_member_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div id="teacher_list_bio_error" style="display:none;">
                                  <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="text-danger col-md-5 col-form-label font-weight-bold">အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များထည့်ပါ</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-10">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_teacher_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowTeacherBio("tbl_teacher_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_teacher_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းတည်ရာလိပ်စာ၊ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</b></label>
                                </div>

                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" name="school_location" style="resize:none;" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('ကျောင်းခွဲတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_location" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းအဆောက်အဦး(အဆောက်အဦအမျိုးအစား/အတိုင်းအတာ/အထပ်အရေအတွက်)') }}</b></label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အဆောက်အဦးအမျိုးအစား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="bulding_type" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="building_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အထပ်အရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="floor_numbers" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('စာသင်ခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ/ဝင်ဆံ့သင်တန်းသား/လေအေးပေးစက်)') }}</b></label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="classroom_number" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="classroom_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('ဝင်ဆံ့သင်တန်းသား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="student_num_limit" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('လေအေးပေးစက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="air_con" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('သန့်စင်ခန်း(အမျိုးအစား/အရေအတွက်)') }}</label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အမျိုးအစား') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="toilet_type" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="toilet_number" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စီမံရုံးခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ)') }}</label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="number" name="manage_room_numbers" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-4 col-form-label label">{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="manage_room_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">၁၂။</label>
                                    <label class="col-md-3 col-form-label label">ကျောင်းမှတ်ပုံတင်အမှတ်</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="regno" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">၁၃။</label>
                                    <label class="col-md-3 col-form-label label">Applied Date</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                                <input type="text" class="form-control" id="register_date" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">၁၄။</label>
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
        $('.multiple-attend-course').select2({
            placeholder: "Select Requirement"
        });
        var course_type = location.pathname.split('/');
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));


        if(!student){
        localStorage.setItem('course_type',course_type[2])

        }
        if(student.approve_reject_status==1){
            loadRenewSchool(localStorage.getItem("school_id"));
        }
        getCourses();
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
