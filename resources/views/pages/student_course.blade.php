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
                    <h2 class="title">Course  <span>Detail</span></h2>
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
                <div class="course_detail">
                    <div class="row" >

                        @php $i=0; $date=Date('Y-m-d');

                        @endphp

                        @foreach($course as $c)




                         @php ++$i;
                          $course_req_arr = json_decode($c['requirement_id'],true);
                          $req_str_arr = explode(",",$course_req_arr[0])


                          @endphp



                        <input type="hidden" value="{{$c['id']}}" id="course_id{!! $i !!}"/>
                            <div class="card col-md-12 mb-3">
                                <!-- <div class="card-header">
                                    <h4 class="card-title text-center">{{ $c['name']}} </h4>
                                </div> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 widget-information" >
                                            <div class="row border-bottom">
                                                <h2 class="col-md-6 card-title text-center text-success">{{ $c['name']}} </h2>

                                                @if(!empty($c['active_batch']))

                                                    @foreach($c['active_batch'] as $b)
                                                        <div class="col-md-4 pl-4">
                                                            <!-- <div class="row">
                                                                <div class="col-md-8"><i class="icofont-calendar"></i> <strong>Accept Application Start Date</strong></div>
                                                                <div class="col-md-4"><span>{{$b['accept_application_start_date']}} </span></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-8"><i class="icofont-calendar"></i> <strong>Accept Application End Date</strong></div>
                                                                <div class="col-md-4"><span>{{$b['accept_application_end_date']}} </span></div>
                                                            </div>                                                             -->
                                                        </div>
                                                        <input type="hidden" value="{{$b['id']}}" id="batch_id{!! $i !!}"/>
                                                        <div class="info-btn mb-4 col-md-2 check_login{!! $i !!}">

                                                        <!-- $c['id'], 'da_register' -->
                                                        <!-- sucess da         -->
                                                        <!-- <a href="{{ url('cpa_register') }}" class="btn btn-primary btn-hover-dark d-none " >Enroll Now </a> -->

                                                        <!-- <a href="{{ url('login') }}" class="btn btn-primary btn-hover-dark  d-none  logined" >Enroll Now </a> -->


                                                        </div>
                                                        @break


                                                    @endforeach
                                                @else
                                                <div class="col-md-3"></div>
                                                <p class="info-btn col-md-2 mb-4 text-dark h6 ">Coming Soon...</p>

                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="mt-2">Description</h5>
                                                    <hr>

                                                    <ul class="requirement_lists">

                                                        <li><i class="icofont-man-in-glasses"></i> <strong>Requirement</strong> <span>
                                                             @foreach($requirements as $require)
                                                                @foreach($req_str_arr as $course_req)

                                                                @if($require['id'] == $course_req)
                                                                <p>{{$require['name']}} </p>
                                                                 @endif


                                                                 @endforeach
                                                              @endforeach



                                                         </span></li>


                                                    </ul>
                                                    <!-- <p style="height:150px;overflow:auto;">{{$c['description']}}</p> -->
                                                </div>
                                                <div class="col-md-5">
                                                    <!-- <div class="info-price">
                                                        <span class="price">{{$c['mac_registration_fee']}} Kyats</span>
                                                    </div> -->
                                                    <h5 class="mt-2">Course Fees</h5>
                                                    <hr>

                                                    <div class="info-list">
                                                        <!-- @foreach($c['active_batch'] as $b)
                                                            <span class="border ml-5">
                                                                <label for="" class="p-3">{{$b['accept_application_start_date']}}</label>
                                                            </span> -->
                                                            <!-- </div> -->

                                                            <!-- @break

                                                        @endforeach -->
                                                        <ul>
                                                            <li><i class="icofont-money"></i> <strong>Application Fee</strong> <span>{{$c['form_fee']}} Kyats</span></li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee for Self-Study</strong> <span>{{$c['selfstudy_registration_fee']}}Kyats</span></li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee for MAC</strong> <span>{{$c['privateschool_registration_fee']}}Kyats</span></li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee for Privat School</strong> <span>{{$c['mac_registration_fee']}}Kyats</span></li>
                                                            <li><i class="icofont-money"></i> <strong>Exam Fee</strong> <span>{{$c['exam_fee']}} Kyats</span></li>
                                                            <li><i class="icofont-money"></i> <strong>Tution Fee</strong> <span>{{$c['tution_fee']}} Kyats</span></li>
                                                            <li><i class="icofont-ui-note"></i> <strong>Description</strong> <span>{{$c['description']}}</span></li>
                                                            <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
<<<<<<< HEAD
                                                            @if(!empty($c['active_batch']))
                                                                @foreach($c['active_batch'] as $b)
                                                                <li><i class="icofont-calendar"></i> <strong>Accept Application Start Date</strong> 
                                                    
                                                                <span> {{ $b['accept_application_start_date'] }} </span></li>
                                                                <li><i class="icofont-calendar"></i> <strong>Accept Application End Date</strong>
                                                                <span>  {{ $b['accept_application_end_date']}} </span></li> 
                                                                @break
                                                        
                                                    
                                                            @endforeach
                                                            @else
                                                            <li><i class="icofont-calendar"></i> <strong>Accept Application Start Date</strong> 
                                                    
                                                                <span class="mr-3"> - </span></li>
                                                                <li><i class="icofont-calendar"></i> <strong>Accept Application End Date</strong>
                                                                <span class="mr-3">  - </span></li> 
                                                            @endif
=======
                                                            <li><i class="icofont-calendar"></i> <strong>Accept Application Start Date</strong>
                                                              <span>{{$b['accept_application_start_date']}} </span></li>
                                                            <li><i class="icofont-calendar"></i> <strong>Accept Application End Date</strong>
                                                                <span>{{$b['accept_application_end_date']}} </span></li>

>>>>>>> e77418365f87e753f7b1292d3d3d903722159d9b
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>



                                        <!-- </div>
                                        <div class="col-md-6 pr-2 widget-information"> -->


                                        </div>

                                    </div>




                                </div>
                            </div>




                        @endforeach
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
    app_form_feedback();

</script>
@endpush
