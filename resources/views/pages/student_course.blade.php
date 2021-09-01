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
                    <h2 class="title"> {{request()->segment(count(request()->segments())) == 1 ? 
                        "Diploma In Accountancy" : "Certified Public Accountant" }} <span>Information</span></h2>
                </div>
                <!-- Page Banner End -->

            </div>
            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">"
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}"
                     alt="Shape">
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
                <!-- <div class="status-reject" >
                    <div class="card text-white bg-dark mb-3">

                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style= "margin-left: 7%; margin-right: 7%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your Application Form is checking</p>
                        </div>
                    </div>
                </div> -->
                <div class="course_detail">
                    <div class="row">
                        @php
                            $i=0; $date=Date('Y-m-d');
                        @endphp
                        <input type="hidden" id="course_length" value={{sizeof($course)}}>
                        @foreach($course as $key => $c)
                            {{ $course_req_arr = json_decode($c['requirement_id'],true) }}
                            {{ $req_str_arr = explode(",",$course_req_arr[0]) }}

                            <input type="hidden" class="code{!! $i !!}" value="{{$c['code']}}">
                            <input type="hidden" value="{{$c['id']}}" id="course_id{!! ++$key !!}"/>
                            <div class="card col-md-12 mb-3">
                            <!-- <div class="card-header">
                                    <h4 class="card-title text-center">{{ $c['name']}} </h4>
                                </div> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 widget-information">
                                            <div class="row border-bottom">
                                                <h2 class="col-md-8 card-title text-success">{{ $c['name']}}</h2>
                                                {{-- @if(!empty($c['active_batch']))    --}}
                                                {{-- @foreach($c['active_batch'] as $b) --}}
                                                {{-- @break                             --}}
                                                {{-- @endforeach                        --}}
                                                {{-- @else                              --}}
                                                {{-- @endif                             --}}
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="mt-2">Description</h5>
                                                    <hr>
                                                    <p style="height: 200px;">{{$c['description']}}</p>
                                                </div>

                                                <div class="col-md-5">
                                                    <h5 class="mt-2">Course Fees</h5>
                                                    <hr>
                                                    <div class="info-list">
                                                        <ul>
                                                            <li><i class="icofont-money"></i> <strong>Application
                                                                    Fee</strong> <span>{{$c['form_fee']}} Kyats</span>
                                                            </li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee
                                                                    for Self-Study</strong> <span>{{$c['selfstudy_registration_fee']}}Kyats</span>
                                                            </li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee
                                                                    for MAC</strong> <span>{{$c['privateschool_registration_fee']}}Kyats</span>
                                                            </li>
                                                            <li><i class="icofont-money"></i> <strong>Registration Fee
                                                                    for Privat School</strong> <span>{{$c['mac_registration_fee']}}Kyats</span>
                                                            </li>
                                                            <li><i class="icofont-money"></i> <strong>Exam
                                                                    Fee</strong><span>{{$c['exam_fee']}} Kyats</span>
                                                            </li>
                                                            <li><i class="icofont-money"></i> <strong>Course
                                                                    Fee</strong> <span>{{$c['tution_fee']}} Kyats</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-md-7">
                                                    <h5 class="mt-2">Requirement</h5>
                                                    <hr>
                                                    @foreach($requirements as $require)
                                                        @foreach($req_str_arr as $course_req)
                                                            @if($require['id'] == $course_req)
                                                                <p>{{$require['name']}} </p>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                                <div class="col-md-5">
                                                    @if(!empty($c['active_batch']))
                                                        @foreach($c['active_batch'] as $b)
                                                            <h5>  {{$b['name']}} </h5>
                                                            <hr>
                                                            <div class="info-list">
                                                                <input type="hidden" value="{{$b['id']}}"
                                                                       class="batch_id{!! $key !!}"/>
                                                                <ul>
                                                                    <div class="application">
                                                                        <li><i class="icofont-calendar"></i> <strong>Accept
                                                                                Application Start
                                                                                Date</strong><span> {{ $b['accept_application_start_date'] }} </span>
                                                                        </li>
                                                                        <li><i class="icofont-calendar"></i> <strong>Accept
                                                                                Application End
                                                                                Date</strong><span>  {{ $b['accept_application_end_date']}} </span>
                                                                        </li>
                                                                    </div>

                                                                    <div class="registration">
                                                                        <li><i class="icofont-calendar"></i> <strong>MAC
                                                                                Registration Start
                                                                                Date</strong><span> {{ $b['mac_reg_start_date'] }} </span>
                                                                        </li>
                                                                        <li><i class="icofont-calendar"></i> <strong>MAC
                                                                                Registration End Date</strong><span
                                                                                    class="reg">  {{ $b['mac_reg_end_date']}} </span>
                                                                        </li>
                                                                        <div class="d-flex mt-2 justify-content-center  mac_btn{!! $key !!}">

                                                                        </div>
                                                                        <li><i class="icofont-calendar"></i> <strong>SelfStudy
                                                                                Registration Start
                                                                                Date</strong><span> {{ $b['self_reg_start_date'] }} </span>
                                                                        </li>
                                                                        <li><i class="icofont-calendar"></i> <strong>SelfStudy
                                                                                Registration End
                                                                                Date</strong><span>  {{ $b['self_reg_end_date']}} </span>
                                                                        </li>
                                                                        <div class="d-flex mt-2 justify-content-center self_btn{!! $key !!}">

                                                                        </div>
                                                                        <li><i class="icofont-calendar"></i> <strong>
                                                                                Private School Registration Start
                                                                                Date</strong>

                                                                            <span> {{ $b['private_reg_start_date'] }} </span>
                                                                        </li>
                                                                        <li><i class="icofont-calendar"></i> <strong>Privater
                                                                                Schoo Registration End Date</strong>
                                                                            <span>  {{ $b['private_reg_end_date']}} </span>
                                                                        </li>
                                                                        <div class="d-flex mt-2 justify-content-center private_btn{!! $key !!}">

                                                                        </div>

                                                                    </div>

                                                                    <div class="exam">
                                                                        <li><i class="icofont-calendar"></i> <strong>Exam
                                                                                Registration Start Date</strong>

                                                                            <span> {{ $b['exam_start_date'] }} </span>
                                                                        </li>
                                                                        <li><i class="icofont-calendar"></i> <strong>Exam
                                                                                Registration End Date</strong>
                                                                            <span>  {{ $b['exam_end_date']}} </span>
                                                                        </li>

                                                                    </div>

                                                                </ul>


                                                                <input type="hidden" value="{{$b['id']}}"
                                                                       id="batch_id{!! $key !!}"/>
                                                                <div class="d-flex   flex-column     info-btn mb-4   check_login{!! $key !!}">

                                                                </div>
                                                                @break
                                                                @endforeach
                                                                @else
                                                                    <li><i class="icofont-calendar"></i> <strong>Accept
                                                                            Application Start Date</strong>

                                                                        <span class="mr-3"> - </span></li>
                                                                    <li><i class="icofont-calendar"></i> <strong>Accept
                                                                            Application End Date</strong>
                                                                        <span class="mr-3">  - </span></li>
                                                                    </ul>
                                                                    <div class="col-md-3"></div>
                                                                    <p class="btn btn-info d-flex justify-content-center mb-4 text-dark h6 ">
                                                                        Coming Soon...</p>
                                                                @endif

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
        $('document').ready(function () {
            var course_type = location.pathname.split('/');
            // console.log('course_type',course_type[2]);
            var student = JSON.parse(localStorage.getItem('studentinfo'));
            if (!student) {
                localStorage.setItem('course_type', course_type[2])
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
