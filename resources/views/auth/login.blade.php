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

        <!-- <img class="shape-1 animation-round" src="{{ asset('assets') }}/images/shape/shape-8.png" alt="Shape"> -->

        <!-- <img class="shape-2" src="{{ asset('assets') }}/images/shape/shape-23.png" alt="Shape"> -->

        {{--<div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Login</li>
                </ul>
                <h2 class="title">Login <span>Form</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>--}}

        <!-- Shape Icon Box Start -->
        <!-- <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ asset('assets') }}/images/shape/shape-5.png" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ asset('assets') }}/images/shape/shape-6.png" alt="Shape">

        </div> -->
        <!-- Shape Icon Box End -->

        <!-- <img class="shape-3" src="{{ asset('assets') }}/images/shape/shape-24.png" alt="Shape">

        <img class="shape-author" src="{{ asset('assets') }}/images/author/author-11.jpg" alt="Shape">

    </div> -->
    <!-- Page Banner End -->

<!-- Register & Login Start -->
    <div class="section">
        <div class="container mb-5">

            <!-- Register & Login Wrapper Start -->
            <div class="register-login-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <!-- Register & Login Images Start -->
                        <div class="register-login-images mt-0">
                            <div class="shape-1">
                                <img src="{{ asset('assets') }}/images/shape/shape-26.png" alt="Shape">
                            </div>


                            <div class="images">
                                <img src="{{ asset('assets') }}/images/register-login.png" alt="Register Login">
                            </div>
                        </div>
                        <!-- Register & Login Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Register & Login Form Start -->
                        <div class="register-login-form mt-0">
                            <h3 class="title">Login <span>Now</span></h3>

                            <div class="form-wrapper">
                                <form >
                                    @csrf
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email" autocomplete="off" id="email">
                                        <span id="err"></span>
                                    </div>
                                    <div id="err_msg" class="m-1 text-danger"></div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="password" name="password" placeholder="Password" autocomplete="off" id="password">
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button type="button" onclick="studentLogin();" class="btn btn-success btn-hover-dark w-100">Login</button>
                                        
                                    </div>
                                    <!-- <div class="single-form route_reg"> -->
                                        
                                    </div>
                                    <!-- Single Form End -->
                                </form>
                            </div>
                        </div>
                        <!-- Register & Login Form End -->

                    </div>
                </div>
            </div>
            <!-- Register & Login Wrapper End -->

        </div>
    </div>
</div>
<!-- Register & Login End -->


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