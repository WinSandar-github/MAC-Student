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
                    <h2 class="title">Non-Audit Firm <span>Detail</span></h2>
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
											<h6 class="mt-2"><b>(၁)ကနဦးမှတ်ပုံတင်ခြင်း</b></h6>
											<h6 class="mt-2"><b>(က)လျှောက်ထားနိုင်သူများ</b></h6>
											<div class="col-md-12">
													<ul>
															<li>
																<i class="icofont-book"></i>
																-Non-Audit Service လုပ်ကိုင်သည့် နိုင်ငံသား/ နိုင်ငံခြားသား
															</li>
													</ul>
											</div>
											<h6 class="mt-2"><b>(ခ)လျှောက်ထားခြင်း</b></h6>
											<div class="col-md-12">
													<ul>
															<li>
															၁။	အောက်ပါ အထောက်အထား များအပြည့်အစုံဖြင့် လျှောက်ထားနိုင်ပါသည်-
															</li>
													</ul>
											</div>
											<h6 class="mt-2 col-md-10 offset-md-1"><b>တစ်ဦးတည်းပိုင်လုပ်ငန်း</b></h6>
											<div class="col-md-12">
													<ul class="col-md-11 offset-md-1">
															<li>
																<i class="icofont-book"></i>
																(က)	Copy of letterhead seal to be used
															</li>
															<li>
																<i class="icofont-book"></i>
																(ခ)	1 Passport size photo
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဂ)	Profile of the owner
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဃ)	Copy of Education Certificate
															</li>
															<li>
																<i class="icofont-book"></i>
																(င)	Letter outlining past work experience
															</li>
															<li>
																<i class="icofont-book"></i>
																(စ)	Copy of owner’s NRC Card/ Passport
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဆ)	Copy of Tax clearance from Internal Revenue Department
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဇ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
															</li>
													</ul>
											</div>
											<h6 class="mt-2 col-md-10 offset-md-1"><b>အစုစပ်လုပ်ငန်း</b></h6>
											<div class="col-md-12">
													<ul class="col-md-11 offset-md-1">
															<li>
																<i class="icofont-book"></i>
																(က)	Copy of Certificate or Registration, if any
															</li>
															<li>
																<i class="icofont-book"></i>
																(ခ)	Copy of signed Partnership Deeds/ Memorandum of Agreement
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဂ)	Copy of letterhead to be used
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဃ)	Passport size photos of the all partners
															</li>
															<li>
																<i class="icofont-book"></i>
																(င)	Profiles of the all partners
															</li>
															<li>
																<i class="icofont-book"></i>
																(စ)	Copy of Education Certificates of the all partners
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဆ)	Letter outlining past work experiences of the all partners
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဇ)	Copy of Partners’ NRC Card/ Passport
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဇ)	Copy of Partners’ NRC Card/ Passport
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဈ)	Copy of Tax clearance from Internal Revenue Department
															</li>
															<li>
																<i class="icofont-book"></i>
																(ည)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
															</li>
													</ul>
											</div>
											<h6 class="mt-2 col-md-10 offset-md-1"><b>ကုမ္ပဏီ</b></h6>
											<div class="col-md-12">
													<ul class="col-md-11 offset-md-1">
															<li>
																<i class="icofont-book"></i>
																(က)	Copy of Certificate of Incorporation (company incorporated in Myanmar)/ Certificate of Registration (branch office registered in Myanmar)
															</li>
															<li>
																<i class="icofont-book"></i>
																(ခ)	Copy of Permit under Section 27A of Myanmar Companies Act (Foreign Company များအတွက်သာ)
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဂ)	Copy of recent audited financial statements
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဃ)	Copy of commercial tax registration certificate
															</li>
															<li>
																<i class="icofont-book"></i>
																(င)	Copy of letterhead to be used
															</li>
															<li>
																<i class="icofont-book"></i>
																(စ)	Copy of Education Certificates of the professional staff
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဆ)	Letter outlining past work experiences of the professional staff
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဇ)	Copy of shareholder’s and directors’ NRC Card/ Passport
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဈ)	Copy of Tax clearance from Internal Revenue Department
															</li>
															<li>
																<i class="icofont-book"></i>
																(ည)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
															</li>
													</ul>
											</div>
											<div class="col-md-12">
													<ul>
															<li>
																၂။ တင်ပြရမည့် အထောက်အထားများ ပြည့်စုံပါက-
															</li>
													</ul>
											</div>
											<div class="col-md-12">
													<ul class="col-md-11 offset-md-1">
															<li>
																<i class="icofont-book"></i>
																(က)	စာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်မှတ်ပုံတင်လက်မှတ်စိစစ်ရေးကော်မတီသို့ သဘောထား မှတ်ချက်တောင်းခံ၊
															</li>
															<li>
																<i class="icofont-book"></i>
																(ခ)	ကော်မတီဝင်များထံမှ သဘောတူကြောင်း ပြန်ကြားချက်ရရှိပါက ကနဦးမှတ်ပုံတင် ကြေး ပေးသွင်းရန် လျှောက်ထားသူများထံသို့အကြောင်းကြား၊
															</li>
															<li>
																<i class="icofont-book"></i>
																(ဂ)	မှတ်ပုံတင်ကြေးပေးသွင်းပြီးနောက် မှတ်ပုံတင်လက်မှတ်ထုတ်ပေး။
															</li>
													</ul>
											</div>
											<div class="col-md-12">
													<ul>
															<li>
																၃။ မှတ်ပုံတင်သက်တမ်းကာလမှာ ပြက္ခဒိန်နှစ်တစ်နှစ် (နှစ်စဉ် ဇန်နဝါရီလ မှ ဒီဇင်ဘာလထိ) ဖြစ်သည်။
															</li>
													</ul>
											</div>
											<div class="col-md-12">
												<h6 class="mt-2"><b>(၂)မှတ်ပုံတင်သက်တမ်းတိုးခြင်း</b></h6>
												<h6 class="mt-2"><b>(က) လျှောက်ထားခြင်း</b></h6>
												<div class="col-md-12">
														<ul>
																<li>
																၁။	အောက်ပါအထောက် အထားများ အပြည့်အစုံဖြင့် လျှောက်ထားနိုင်ပါသည်-
																</li>
														</ul>
												</div>
												<h6 class="mt-2 col-md-10 offset-md-1"><b>တစ်ဦးတည်းပိုင်လုပ်ငန်း</b></h6>
												<div class="col-md-12">
														<ul class="col-md-11 offset-md-1">
																<li>
																	<i class="icofont-book"></i>
																	(က)	Copy of letterhead seal to be used
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ခ)	1 Passport size photo
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဂ)	Profile of the owner
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဃ)	Copy of Education Certificate
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(င)	Letter outlining past work experience
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(စ)	Copy of owner’s NRC Card/ Passport
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဆ)	Copy of Tax clearance from Internal Revenue Department
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဇ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ည)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																</li>
														</ul>
												</div>
												<h6 class="mt-2 col-md-10 offset-md-1"><b>အစုစပ်လုပ်ငန်း</b></h6>
												<div class="col-md-12">
														<ul class="col-md-11 offset-md-1">
																<li>
																	<i class="icofont-book"></i>
																	(က)	Copy of Certificate or Registration, if any
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ခ)	Copy of signed Partnership Deeds/ Memorandum of Agreement
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဂ)	Copy of letterhead to be used
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဃ)	Passport size photos of the all partners
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(င)	Profiles of the all partners
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(စ)	Copy of Education Certificates of the all partners
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဆ)	Letter outlining past work experiences of the all partners
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဇ)	Copy of Partners’ NRC Card/ Passport
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဈ)	Copy of Tax clearance from Internal Revenue Department
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ည)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဋ)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																</li>
														</ul>
												</div>
												<h6 class="mt-2 col-md-10 offset-md-1"><b>ကုမ္ပဏီ</b></h6>
												<div class="col-md-12">
														<ul class="col-md-11 offset-md-1">
																<li>
																	<i class="icofont-book"></i>
																	(က)	Copy of Certificate of Incorporation (company incorporated in Myanmar)/ Certificate of Registration (branch office registered in Myanmar)
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ခ)	Copy of Permit under Section 27A of Myanmar Companies Act (Foreign Company များအတွက်သာ)
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဂ)	Copy of recent audited financial statements
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဃ)	Copy of commercial tax registration certificate
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(င)	Copy of letterhead to be used
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(စ)	Copy of Education Certificates of the professional staff
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဆ)	Letter outlining past work experiences of the professional staff
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဇ)	Copy of shareholder’s and directors’ NRC Card/ Passport
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဈ)	Copy of Tax clearance from Internal Revenue Department
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ည)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																</li>
																<li>
																	<i class="icofont-book"></i>
																	(ဋ)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																</li>
														</ul>
												</div>
												<div class="col-md-12">
														<ul>
																<li>
																၂။	သက်တမ်းတိုးလျှောက်ထားရာတွင် လုပ်ငန်းအမျိုးအစား ပြောင်းလဲလျှောက်ထားခြင်း (ဥပမာ - တစ်ဦးတည်းပိုင်မှ ကုမ္ပဏီသို့)၊ ပြင်ဆင်ပြောင်းလဲသည့် အချက်လက်များတွင် သတ်မှတ် ချက်နှင့် မကိုက်ညီမှုများ၊ ထူးခြားချက်များ ရှိပါက ကော်မတီသို့ လှည့်လည်စာဖြင့်တင်ပြ၍ သဘော တူခွင့်ပြုပါက လျှောက်ထားသူထံ မှတ်ပုံတင်ကြေးပေသွင်းရန်အကြောင်းကြား၊ ထို့နောက် မှတ်ပုံတင် ကြေး ပေးသွင်းပြီးပါက မှတ်ပုံတင်လက်မှတ်ထုတ်ပေး။
																</li>
														</ul>
												</div>


											</div>
											<h6 class="mt-2"><b>(၃)ယာယီရပ်နားခြင်း၊ </b></h6>
											<div class="col-md-12">
													<ul>
															<li>
																<i class="icofont-book"></i>
																၁။	ယာယီရပ်နားလိုပါက ရပ်နားလိုသည့်အကြောင်းရင်းဖော်ပြချက်ပါရှိသည့် ကိုယ်တိုင်ရေး လျှောက်လွှာဖြင့် ကိုယ်တိုင်လာရောက်တင်ပြရမည်။
															</li>
															<li>
																<i class="icofont-book"></i>
																၂။	 မှတ်ပုံတင်စာရင်းစာအုပ်တွင် မှတ်တမ်းတင်ရေးသားထားရမည်။
															</li>
													</ul>
											</div>
											<h6 class="mt-2"><b>(၄) ရပ်စဲ/ဖျက်သိမ်းခြင်း</b></h6>
											<div class="col-md-12">
													<ul>
															<li>
																<i class="icofont-book"></i>
																၁။	ရပ်စဲ/ဖျက်သိမ်း လိုပါက ရပ်စဲ/ဖျက်သိမ်း လိုသည့်အကြောင်းရင်းဖော်ပြချက်ပါရှိသည့် ကိုယ်တိုင်ရေး လျှောက်လွှာဖြင့် ကိုယ်တိုင်လာရောက်တင်ပြရမည်။
															</li>
															<li>
																<i class="icofont-book"></i>
																၂။	 မှတ်ပုံတင်စာရင်းစာအုပ်တွင် မှတ်တမ်းတင်ရေးသားထားရမည်။
															</li>
													</ul>
											</div>
											<h6 class="mt-2"><b>(၅) အမိန့်ကြော်ငြာစာများထုတ်ပြန်ခြင်း (မှတ်ပုံတင်စာရင်း၊ ရပ်နားစာရင်း၊ ဖျက်သိမ်းစာရင်း)း</b></h6>
											<div class="col-md-12">
													<ul>
															<li>
																၁။	အမိန့်ကြော်ငြာစာများထုတ်ပြန်ရာတွင် အောက်ပါအချက်အလက်များပါဝင်ပါသည်-
															</li>
															<li class="col-md-11 offset-md-1">
																<i class="icofont-book"></i>
																-	လုပ်ငန်းမှတ်ပုံတင်အမှတ်
															</li>
															<li class="col-md-11 offset-md-1">
																<i class="icofont-book"></i>
																-	လုပ်ငန်းအမည်
															</li>
															<li class="col-md-11 offset-md-1">
																<i class="icofont-book"></i>
																-	တာဝန်ခံအမည်နှင့်မှတ်ပုံတင်/Passport နံပါတ်
															</li>
															<li class="col-md-11 offset-md-1">
																<i class="icofont-book"></i>
																-	-	လိပ်စာ
															</li>
													</ul>
											</div>
											<!-- Requirement -->
											<div class="col-md-12">
												<h4 class="col-md-12 card-title text-success">Requirement</h4>
												<hr>
												<ul>
													<?php
														if (is_array($requirements) || is_object($requirements))
															{
																	foreach ($requirements as $value)
																	{
																			if($value['type'] == "NON_AUDIT_FIRM"){
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
														<li><i class="icofont-money"></i> <strong>Application Fee</strong> </li>
														<li><i class="icofont-money"></i> <strong>Registration Fee</strong></li>
														<div class="pull-right mt-4">
															<p class="info-btn col-md-2 mb-4 text-dark h6">
																<a href="{{url('non_audit_firm_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
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
