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


    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Page Banner Start -->
    <div class="section page-banner h-auto">

        {{--<img class="shape-1 animation-round" src="{{ asset('assets') }}/images/shape/shape-8.png" alt="Shape">--}}

        <img class="shape-2" src="{{ asset('assets') }}/images/shape/shape-23.png" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                {{--<ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Reconnect</li>
                </ul>
                <h2 class="title">Contact <span>US</span></h2>--}}
            </div>
            <!-- Page Banner End -->
        </div>


        <img class="shape-3" src="{{ asset('assets') }}/images/shape/shape-24.png" alt="Shape">

        {{--<img class="shape-author" src="{{ asset('assets') }}/images/author/author-11.jpg" alt="Shape">--}}

        </div>
        <!-- Page Banner End -->



        <div class="section section-padding-02 " style="margin-bottom: 50px;" >
            <div class="container">

                <!-- All Courses Tabs Menu Start -->
                <div class="courses-tabs-menu">
                    <div class="swiper-container">

                        <ul class="swiper-wrapper nav my-2" style="justify-content: space-evenly;">
                        
                            <li>
                                    <button value="course_list" onclick="location.href =`${FRONTEND_URL}/da_one_existing_reg_form`"> Diploma In Accountancy Part One Registration</button>
                            </li>                            
                        </ul>
                        <ul class="swiper-wrapper nav my-2" style="justify-content: space-evenly;">
                        
                            <li>
                                    <button value="course_list" onclick="location.href =`${FRONTEND_URL}/da_two_existing_reg_form`"> Diploma In Accountancy Part Two Registration</button>
                            </li>
                            <li>
                                    <button class="course_list" onclick="location.href =`${FRONTEND_URL}/cpa_two_reg_cpaone_pass`"> Certified Public Accountant Part Two Registration</button>
                            </li>
                        </ul>
                        <ul class="swiper-wrapper nav my-2" style="justify-content: space-evenly;">
                       
                            <li>
                                  <button value="exam" onclick="location.href =`${FRONTEND_URL}/cpaff_reconnect`">Certificate of Certified Public Accountant (Full-Fledged)</button>
                            </li>
                            <li>
                                 <button class="course_list" onclick="location.href =`${FRONTEND_URL}/reconnect_papp`"> Certificate of Professional Accountant in Public Practice (PAPP) </button>
                            </li>
                            
                        </ul>   
                        <ul class="swiper-wrapper nav my-2" style="justify-content: space-evenly;">
                       
                            <li>
                                  <button value="exam" onclick="location.href =`${FRONTEND_URL}/audit_initial_renew_reconnect`">Audit Firm</button>
                            </li>
                            <li>
                                 <button class="course_list" onclick="location.href =`${FRONTEND_URL}/non_audit_initial_renew_reconnect`">Non-Audit Firm</button>
                            </li>
                            
                            <li>
                                 <button class="course_list" onclick="location.href =`${FRONTEND_URL}/school_register_reconnected`"> School </button>
                            </li>
                        </ul>       
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Download App Start -->
        
                <!-- Download App Wrapper End -->

            
        <!-- Download App End -->

        

<!--Back To Start-->
<a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

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
    let ls_course_type = localStorage.getItem('course_type');
    let batch_id = localStorage.getItem('batch_id');

    async function getCurrentBatch(){
        const response =    await fetch(BACKEND_URL+"/publish_batch/1");
        const result   = await response.json();
    
        const course = result.course.filter(function(res) {
            return    res.code == 'da_1'
        }
        );
       
       if(course[0].active_batch[0] !== undefined){
           batch_id =  course[0].active_batch[0].id;
           $('.route_reg').append(`You dont have account  <a href={{url('/da_one_form/${batch_id}')}}>Register</a>`)

       }else{
        $('.route_reg').append(`You dont have account  <a href="javascript:void(0)" onclick='alert("The class is not currently ‌available")'>Register</a>`)
       }       
     } 
    if(batch_id == null ){
        getCurrentBatch();
    }else{
    
        if(ls_course_type == 2){

            // $('.route_reg').append(`You dont have account  <a href={{url('${FRONTEND_URL}/cpa_register/${batch_id}')}}>Register</a>`)
            $('.route_reg').append(`You dont have account  <a href={{url('/cpa_one_form/${batch_id}')}}>Register</a>`)
        }else{
            // $('.route_reg').append(`You dont have account  <a href="{{url('${FRONTEND_URL}/da_register/${batch_id}')}}">Register</a>`)
            $('.route_reg').append(`You dont have account  <a href={{url('/da_one_form/${batch_id}')}}>Register</a>`)
        }
    }
})
</script>
@endpush