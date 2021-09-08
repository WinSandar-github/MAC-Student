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
                         <li><a href="#">Home</a> </li>
                        <li class="active">Register 
                    </ul>
                    <h2 class="title"> {{request()->segment(count(request()->segments())) == 1 ? 
                        "Diploma In Accountancy" : "Certified Public Accountant" }}  <p class="col-md-5">Information </p></h2>
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
            <div class="container-fluid p-5"> <!-- container-fluid p-4 -->
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
                        <div class="card col-md-5 m-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12  ">
                                        <h4 class="col-md-12 card-title  text-success ">
                                            Diploma In Accountancy
                                        </h4>
                                        <hr>
                                       
                                            @php  
                                            $description = explode(',',$course[0]['course_type']['course_description']);
                                            @endphp
                                            @foreach($description as $des)
                                                <p class="mb-4 p_font text-justify" >{{$des}}</p>
                                            @endforeach

                                            
            
                                    </div>
                                </div>
                            </div>        

                        </div>
                        @foreach($course as $key => $c)
                      
                            <?php
                           
                                // $course_req_arr = json_decode($c['requirement_id'],true);
                                $req_str_arr = explode(",",$c['requirement_id']);
                                
                            ?>
   
                            <input type="hidden" class="code{!! $key !!}" value="{{$c['code']}}">
                            <input type="hidden" value="{{$c['id']}}" id="course_id{!! $key !!}"/>
                            
                            <div class="card col-md-3 m-2 ">
                            <!-- <div class="card-header">
                                    <h4 class="card-title text-center">{{ $c['name']}} </h4>
                                </div> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 widget-information">
                                            <div class="row  ">
                                                <h6 class="col-md-12 card-title  text-success ">{{ $c['name']}}</h6>
                                                {{-- @if(!empty($c['active_batch']))    --}}
                                                {{-- @foreach($c['active_batch'] as $b) --}}
                                                {{-- @break                             --}}
                                                {{-- @endforeach                        --}}
                                                {{-- @else                              --}}
                                                {{-- @endif                             --}}
                                            </div>
                                            <div class="row">
                                                {{-- <div class="col-md-7">
                                                    <h5 class="mt-2">Description</h5>
                                                    <hr>
                                                    <p style="height: 200px;">{{$c['description']}}</p>
                                                </div> --}}

                                                <div class="col-md-12">
                                                    <h6 class="mt-2">Course Fees</h6>
                                                    <hr>
                                                    <div class="info-list">
                                                        <dl class="row d_font ">
                                                                <dt class="col-sm-6 text-end">Application Fee</dt>
                                                                <dd class="col-sm-6 my-1">{{ number_format($c['form_fee']) }} Kyats</dd>
                                                                <dt class="col-sm-6 text-end my-1">Registration Fee for MAC Class</dt>
                                                                <dd class="col-sm-6 my-1">{{  number_format($c['mac_registration_fee']) }} Kyats</dd>
                                                                <dt class="col-sm-6 text-end my-1">Registration Fee for Self-Study Class</dt>
                                                                <dd class="col-sm-6 my-1">{{  number_format($c['selfstudy_registration_fee']) }} Kyats </dd>
                                                                <dt class="col-sm-6 text-end my-1">Registration Fee for Private School Class</dt>
                                                                <dd class="col-sm-6 my-1">{{  number_format($c['privateschool_registration_fee']) }} Kyats</dd>
                                                                <dt class="col-sm-6 text-end my-1">Exam Fee</dt>
                                                                <dd class="col-sm-6 my-1">{{  number_format($c['exam_fee'] ) }} Kyats</dd>
                                                                <dt class="col-sm-6 text-end my-1">Course Fee for MAC Class</dt>
                                                                <dd class="col-sm-6 my-1">{{  number_format($c['tution_fee']) }} Kyats</dd>
                                                                <dt class="col-sm-6 text-end my-1">Requirement</dt>
                                                                <dd class="col-sm-6 my-1"><button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{!! $key !!}">
                                                        View Detail
                                                        </button></dd>

                                                        </dl>
                                                        
                                                        <!-- Button trigger modal -->
                                                        

<!--Course Requirement Modal -->
                                                        <div class="modal fade" id="exampleModal{!! $key !!}" tabindex="-1" aria-labelledby="exampleModalLabe" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Requirement</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                @foreach($requirements as $require)
                                                                        @foreach($req_str_arr as $course_req)
                                                                    
                                                                            @if($require['id'] == $course_req)

                                                                           
                                                                                <p>{{$require['requirement_name']}} </p>
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                   
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                              <!-- <p class="col-md-5">Application Fee</p>-  <p class="col-md-5">{{$c['form_fee']}} Kyats </p>  -->
                                                              <!-- <p class="col-md-5">Registration Fee for MAC Class</p>-  <p class="col-md-5">{{$c['mac_registration_fee']}}Kyats </p>  -->
                                                              <!-- <p class="col-md-5">Registration Fee for Self-Study Class</p>-  <p class="col-md-5">{{$c['selfstudy_registration_fee']}}Kyats </p>  -->
                                                              <!-- <p class="col-md-5">Registration Fee for Private School Class</p>-  <p class="col-md-5">{{$c['privateschool_registration_fee']}}Kyats </p>                                                              -->
                                                            <!--   <p class="col-md-5">Exam Fee</p>-  <p class="col-md-5">{{$c['exam_fee']}} Kyats </p>  -->
                                                              <!-- <p class="col-md-5">Course Fee for MAC Class</p>-  <p class="col-md-5">{{$c['tution_fee']}} Kyats </p>  -->
                                                    </div> 
                                                </div>  
                                              {{--  
                                                <div class="col-md-12">
                                                    <h5 class="mt-2">Requirement</h5>
                                                    <hr>
                                                    @foreach($requirements as $require)
                                                        @foreach($req_str_arr as $course_req)
                                                            @if($require['id'] == $course_req)
                                                                <p>{{$require['name']}} </p>
                                                            @endif
                                                        @endforeach
                                                    @endforeach

                                                </div>  --}}
                                                    <div class="col-md-12 mt-2">

                                                    
                                                    
                                                    @if(!empty($c['active_batch']))
                                                        @foreach($c['active_batch'] as $b)
                                                            <h6>  {{$b['name']}} </h6>
                                                            <hr>
                                                            <div class="d_font">
                                                                    <input type="hidden" value="{{$b['id']}}"
                                                                       class="batch_id{!! $key !!}"/>
                                                             
                                                                    <div class="application">
                                                                       
                                                                        <div class="row">

                                                                                <dt class="col-sm-6 text-end my-1">
                                                                                    Batch Start Date
                                                                                </dt>
                                                                                <dd class="col-md-6" >  {{ date('d F Y',strtotime($b['start_date'])) }} </dd>
                                                                          
                                                                                <dt class="col-md-6 text-end my-1">Batch End
                                                                                Date</dt>
                                                                                <dd class="col-md-6 my-1">  {{  date('d F Y',strtotime($b['end_date']))}}  </dd>
                                                                                <dt class="col-md-6 text-end my-1 ">Accept
                                                                                    Application Start
                                                                                    Date</dt>
                                                                                    <dd class="col-md-6 my-1"> 
                                                                                        {{  date('d F Y',strtotime($b['accept_application_start_date'])) }}  </dd>
                                                                                <dt class="col-md-6 text-end my-1">Accept
                                                                                    Application End
                                                                                    Date</dt>
                                                                                <dd class="col-md-6 my-1">  
                                                                                    {{ date('d F Y',strtotime($b['accept_application_end_date']))}}  </dd>
                                                                        
                                                                         </div>
                                                                    </div>

                                                                    
                                                                    
                                                                    <div class="registration">
                                                                        <div class="row">
                                                                            <dt class="col-md-6 text-end my-1">Registration in MAC Class Start Date</dt>
                                                                            <dd class="col-md-6 my-1">{{ date('d F Y',strtotime( $b['mac_reg_start_date'] ))}}  </dd> 

                                                                            <dt class="col-md-6 text-end my-1">Registration in MAC Class End Date</dt>
                                                                            <dd class="col-md-6 my-1 reg"> 
                                                                                 {{ date('d F Y',strtotime($b['mac_reg_end_date'] )) }}  </dd>  

                                                                            <div class="d-flex mt-2 justify-content-center  mac_btn{!! $key !!}">

                                                                            </div>

                                                                                <dt class="col-md-6 text-end my-1">Registration in Self-Study Class Start Date</dt>
                                                                                <dd class="col-md-6 my-1"> 
                                                                                  {{ date('d F Y',strtotime( $b['self_reg_start_date'] )) }}  </dd> 

                                                                                <dt class="col-md-6 text-end my-1">Registration in Self-Study Class End Date</dt>
                                                                                <dd class="col-md-6 my-1">  
                                                                                  {{ date('d F Y',strtotime( $b['self_reg_end_date'])) }}  </dd>  

                                                                                <div class="d-flex mt-2 justify-content-center self_btn{!! $key !!}">

                                                                                </div>

                                                                                <dt class="col-md-6 my-1 text-end"> Registration in Private School Class Start Date</dt>
                                                                                <dd class="col-md-6 my-1 "> {{ date('d F Y',strtotime($b['private_reg_start_date'])) }}  </dd> 

                                                                                <dt class="col-md-6 text-end my-1">Registration in Private School Class End Date</dt>
                                                                                <dd class="col-md-6 my-1">  {{ date('d F Y',strtotime( $b['private_reg_end_date'])) }}  </dd>  

                                                                                <div class="d-flex mt-2 justify-content-center private_btn{!! $key !!}">
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="exam">
                                                                        <div class="row">
                                                                            <dt class="col-md-6 my-1 text-end">Exam
                                                                                    Registration Start
                                                                                    Date</dt> 
                                                                                    <dd class="col-md-6 my-1"> {{  date('d F Y',strtotime($b['exam_start_date'] ))}}  </dd>
                                                                            
                                                                            <dt class="col-md-6 my-1 text-end">Exam
                                                                                Registration End Date</dt><dd
                                                                                    class="col-md-6 reg my-1">  {{ date('d F Y',strtotime( $b['exam_end_date'] )) }}  </dd>
                                                                         
                                                                        </div> 

                                                                    </div>

                                                              


                                                                <!-- <input type="hidden" value="{{$b['id']}}"
                                                                       id="batch_id{!! $key !!}"/> -->
                                                                <div class="d-flex   flex-column mt-2    info-btn mb-4   check_login{!! $key !!}">

                                                                </div>
                                                                
                                                     
                                                             
                                                                <!-- <input type="hidden" value="{{$b['id']}}" id="batch_id{!! $i !!}"/> -->
                                                                <!-- <div class="d-flex  flex-column     info-btn mb-4   check_login{!! $i !!}"> -->
                                                                <!-- <div class=" info-btn mb-4   check_login{!! $i !!}"> -->
                                                                
                                                                <!-- $c['id'], 'da_register' -->
                                                                <!-- sucess da         -->
                                                                <!-- <a href="{{ url('cpa_register') }}" class="btn btn-primary btn-hover-dark d-none " >Enroll Now </a> -->
        
                                                                <!-- <a href="{{ url('login') }}" class="btn btn-primary btn-hover-dark  d-none  logined" >Enroll Now </a> -->
        
        
                                                                <!-- </div> -->
                                                                @break
                                                                @endforeach
                                                                @else
                                                                    <div class="row">
                                                                     {{-- <dt class="col-md-6 text-end my-1">Accept
                                                                            Application Start Date</dt>

                                                                        <dd class="col-md-6 my-1"> -  </dd> 
                                                                      <dt class="col-md-6 text-end my-1">Accept
                                                                            Application End Date</dt>
                                                                        <dd class="col-md-6 my-1">  -  </dd> 
                                                                    --}}
                                                                    <div class="col-md-12">
                                                                    <p class="btn btn-info btn-lg d-flex justify-content-center mb-4 text-dark h6">Coming Soon...</p>
                                                                    </div>
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
@prepend('styles')
    
<style>

    .d_font{
        font-size:13px;

    }
    .p_font{
        font-size:18px !important;
    }
</style>
@endprepend

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
            //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>အသိအမှတ်ပြုတက္ကသိုလ်တစ်ခုခုမှ ဘွဲ့ရရှိသူများ လျှောက်ထားနိုင်ပါသည်။  ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I  သင်တန်း (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၅၀၀ ဦးခန့်ရှိ။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်း(၂)တန်း (MAC,SS,Private)(၃)မျိုးပေါင်း နှစ်စဉ် ၃၀၀  ဦးခန့်ရှိ။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I သင်တန်းတွင် ဘာသာရပ် ၅ ခု၊ Module I တွင် ဘာသာရပ် ၃ ခု၊ Module II တွင် ဘာသာရပ် ၂ ခု ရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်းတွင် ဘာသာရပ် ၆ ခုရှိပြီး ရှိပြီး Module တစ်ခုစီတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA I အောင်မြင်ပြီးသူ  ၈၇၄၃ ဦး၊ တက်ရောက်ဆဲ ၂၇၉ ဦး ရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA II အောင်မြင်ပြီးသူ  ၄၆၀၉ ဦး ရှိပါသည်။ ";
            //     $(".requirement_lists").append(li);
            // }else{
            //     // console.log("CPA");
            //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>BCom,BAct,BBA,DA,BBSc ,ACCA (Fundamental skill level),CIMA ဘွဲ့များကို အဆိုပါသင်တန်းသို့ တိုက်ရိုက် တက်ရောက်ခွင့်ပေးပြီး အခြားဘွဲ့များ ဝင်ခွင့်စာမေးပွဲ အောင်မြင်ပါက တက်ရောက်ခွင့်ရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA I & II သင်တန်း(၂)တန်းဖွင့်လှစ်ပြီး (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၃၅၀၀ ဦးခန့်ရှိ။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>သင်တန်းတစ်ခုတွင်ဘာသာရပ် ၆ ခုရှိပြီး Module တစ်ခုတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ CPA I အောင်မြင်ပြီးသူ  ၃၈၁၀ ဦး၊တက်ရောက်ဆဲ၂၇၄၁ ဦး တက်ရောက်ခွင့်ရရှိထားသူ ၁၅၀၀ ဦး ခန့်ရှိပါသည်။ ";
            //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA II  အောင်မြင်ပြီးသူ ၂၆၂၈ ဦး ၊ CPA II တက်ရောက်ဆဲ    ၅၀၀ ဦး ရှိပါသည်။ ";
            //     $(".requirement_lists").append(li);
            // }
        })
        app_form_feedback();

    </script>
@endpush
