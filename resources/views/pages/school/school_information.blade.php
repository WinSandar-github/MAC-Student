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
                    <form method="post" action="javascript:renewSchool();" enctype="multipart/form-data">

                        <div class="card-body">
                                        <table width="100%">
                                            <tr>
                                                <td width="15%">
                                                    <div class="single-form">
                                                        <label class="col-form-label">ကျောင်းမှတ်ပုံတင်အမှတ်</label>
                                                    </div>
                                                </td>
                                                <td width="85%">
                                                    <div class="single-form">
                                                        <input type="text" class="form-control" id="regno" readonly>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="20%">
                                                    <div class="single-form">
                                                        <label class="col-form-label">Applied Date</label>
                                                    </div>
                                                </td>
                                                <td width="75%">
                                                    <div class="single-form">
                                                        <input type="text" class="form-control" id="register_date" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="20%">
                                                    <div class="single-form">
                                                        <label class="col-form-label">Status</label>
                                                    </div>
                                                </td>
                                                <td width="75%">
                                                    <div class="single-form">
                                                        <input type="text" class="form-control" id="message" readonly="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table><br/>
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
        if(student.approve_reject_status==1){
                loadRenewSchool(localStorage.getItem("school_id"));
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
