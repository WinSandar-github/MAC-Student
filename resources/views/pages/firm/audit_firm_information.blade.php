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
                    <h2 class="title">Audit Firm <span>Detail</span></h2>
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


								<div id="audit_initial">
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
																				- MAC တွင်မှတ်ပုံတင်ထားသည့် PAPP များ
																			</li>
																	</ul>
															</div>
															<h6 class="mt-2"><b>(ခ)လျှောက်ထားခြင်း</b></h6>
															<div class="col-md-12">
																	<ul>
																			<li>
																			၁။	လျှောက်လွှာနှင့်အတူ အောက်ပါအထောက်အထားများအပြည့်အစုံဖြင့် လျှောက်ထားနိုင်ပါ သည်-
																			</li>
																	</ul>
															</div>
															<h6 class="mt-2 col-md-10 offset-md-1"><b>တစ်ဦးတည်းပိုင်လုပ်ငန်း</b></h6>
															<div class="col-md-12">
																	<ul class="col-md-11 offset-md-1">
																			<li>
																				<i class="icofont-book"></i>
																				(က)	Copy of valid Public Practice Accountant Certificate
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ခ)	Copy of stationery/ letterhead to be used in signing of auditor’s report
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဂ)	Copy of Tax clearance from Internal Revenue Department
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဃ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																			</li>
																	</ul>
															</div>
															<h6 class="mt-2 col-md-10 offset-md-1"><b>အစုစပ်လုပ်ငန်း</b></h6>
															<div class="col-md-12">
																	<ul class="col-md-11 offset-md-1">
																			<li>
																				<i class="icofont-book"></i>
																				(က)	Copy of valid Public Practice Accountant Certificate of all partners
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ခ)	Copy of Certificate or Registration, if any
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဂ)	Copy of signed Partnership Deeds/ Memorandum of Agreement
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဃ)	Copy of stationery/ letterhead to be used in signing of auditor’s report
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(င)	Copy of Tax clearance from Internal Revenue Department
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(စ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																			</li>
																	</ul>
															</div>
															<h6 class="mt-2 col-md-10 offset-md-1"><b>ကုမ္ပဏီ</b></h6>
															<div class="col-md-12">
																	<ul class="col-md-11 offset-md-1">
																			<li>
																				<i class="icofont-book"></i>
																				(က)	Copy of valid Public Practice Accountant Certificate of all shareholders
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ခ)	Copy of Certificate of Incorporation
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဂ)	Copy of signed Memorandum of Associations and Articles of Associations or constitution
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဃ)	Copy of commercial tax registration certificate
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(င)	Copy of stationery/ letterhead to be used in signing of auditor’s report
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(စ)	Copy of Tax clearance from Internal Revenue Department
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဆ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
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
																				(က)	စာရင်းလုပ်ငန်းလုပ်ကိုင်ခွင့်မှတ်ပုံတင်လက်မှတ်စိစစ်ရေးကော်မတီသို့ သဘောထား မှတ်ချက်တောင်းခံ
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ခ)	ကော်မတီဝင်များထံမှ သဘောတူကြောင်း ပြန်ကြားချက်ရရှိပါက ကနဦးမှတ်ပုံတင် ကြေးပေးသွင်းရန် လျှောက်ထားသူများသို့အကြောင်းကြား၊
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဂ) မှတ်ပုံတင်ကြေးပေးသွင်းပြီးပါက မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးမည်ဖြစ်ပါသည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				(ဃ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
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
																				၁။	လျှောက်လွှာနှင့်အတူ အောက်ပါအထောက်အထားများ အပြည့်အစုံဖြင့် လျှောက်ထားနိုင် ပါသည်-
																				</li>
																		</ul>
																</div>
																<h6 class="mt-2 col-md-10 offset-md-1"><b>တစ်ဦးတည်းပိုင်လုပ်ငန်း</b></h6>
																<div class="col-md-12">
																		<ul class="col-md-11 offset-md-1">
																				<li>
																					<i class="icofont-book"></i>
																					(က)	Copy of valid Public Practice Accountant Certificate
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ခ)	Copy of Tax clearance from Internal Revenue Department
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဂ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဃ)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(င)	ကနဦးမှတ်ပုံတင်လျှောက်ထားစဉ်က တင်ပြခဲ့သည့်အချက်အလက်များတွင် ပြင်ဆင်ပြောင်းလဲမှုရှိပါက ယင်းပြင်ဆင်ပြောင်းလဲသည့်အချက်အလက်များ
																				</li>
																		</ul>
																</div>
																<h6 class="mt-2 col-md-10 offset-md-1"><b>အစုစပ်လုပ်ငန်း</b></h6>
																<div class="col-md-12">
																		<ul class="col-md-11 offset-md-1">
																				<li>
																					<i class="icofont-book"></i>
																					(က)	Copy of valid Public Practice Accountant Certificate of all partners
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ခ)	Copy of Tax clearance from Internal Revenue Department
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဂ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဃ)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(င)	ကနဦးမှတ်ပုံတင်လျှောက်ထားစဉ်က တင်ပြခဲ့သည့်အချက်အလက်များတွင် ပြင်ဆင်ပြောင်းလဲမှုရှိပါက ယင်းပြင်ဆင်ပြောင်းလဲသည့်အချက်အလက်များ
																				</li>
																		</ul>
																</div>
																<h6 class="mt-2 col-md-10 offset-md-1"><b>ကုမ္ပဏီ</b></h6>
																<div class="col-md-12">
																		<ul class="col-md-11 offset-md-1">
																				<li>
																					<i class="icofont-book"></i>
																					(က)	Copy of valid Public Practice Accountant Certificate of all shareholders
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ခ)	Copy of commercial tax registration certificate
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဂ)	Copy of Tax clearance from Internal Revenue Department
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(ဃ)	ကိုယ်တိုင်လျှောက်ထားခြင်းမဟုတ်ပါကကိုယ်စားလှယ်လွှဲစာ နှင့် နိုင်ငံသားစိစစ်ရေး ကတ်ပြား (မိတ္တူ)
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(င)	ကောင်စီက အခါအားလျော်စွာ တောင်းခံသည့် စာရွက်စာတမ်းအချက်အလက်များ
																				</li>
																				<li>
																					<i class="icofont-book"></i>
																					(စ)	ကနဦးမှတ်ပုံတင်လျှောက်ထားစဉ်က တင်ပြခဲ့သည့်အချက်အလက်များတွင် ပြင်ဆင်ပြောင်းလဲမှုရှိပါက ယင်းပြင်ဆင်ပြောင်းလဲသည့်အချက်အလက်များ
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
															<h6 class="mt-2"><b>(၂)ယာယီရပ်နားခြင်း၊ </b></h6>
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
															<h6 class="mt-2"><b>(၃)ရပ်စဲ/ဖျက်သိမ်းခြင်း </b></h6>
															<div class="col-md-12">
																	<ul>
																			<li>
																				<i class="icofont-book"></i>
																				၁။	ရပ်စဲ/ဖျက်သိမ်း လိုပါက ရပ်စဲ/ဖျက်သိမ်း လိုသည့်အကြောင်းရင်းဖော်ပြချက်ပါရှိသည့် ကိုယ်တိုင်ရေး လျှောက်လွှာဖြင့် ကိုယ်တိုင်လာရောက်တင်ပြရမည်။
																			</li>
																			<li>
																				<i class="icofont-book"></i>
																				မှတ်ပုံတင်စာရင်းစာအုပ်တွင် မှတ်တမ်းတင်ရေးသားထားရမည်။
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
																							if($value['type'] == "AUDIT_FIRM"){
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
																				<a href="{{url('audit_firm')}}" class="btn btn-success btn-hover-dark" >Register</a>
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
