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
