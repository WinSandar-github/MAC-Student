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
<div class="section page-banner">

    <img class="shape-1 animation-round" src="{{ asset('assets') }}/images/shape/shape-8.png" alt="Shape">

    <img class="shape-2" src="{{ asset('assets') }}/images/shape/shape-23.png" alt="Shape">

    <div class="container">
        <!-- Page Banner Start -->
        <div class="page-banner-content">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
            </ul>
            <h2 class="title">Contact <span>US</span></h2>
        </div>
        <!-- Page Banner End -->
    </div>

    <!-- Shape Icon Box Start -->
    <div class="shape-icon-box">

        <img class="icon-shape-1 animation-left" src="{{ asset('assets') }}/images/shape/shape-5.png" alt="Shape">

        <div class="box-content">
            <div class="box-wrapper">
                <i class="flaticon-badge"></i>
            </div>
        </div>

        <img class="icon-shape-2" src="{{ asset('assets') }}/images/shape/shape-6.png" alt="Shape">

    </div>
    <!-- Shape Icon Box End -->

    <img class="shape-3" src="{{ asset('assets') }}/images/shape/shape-24.png" alt="Shape">

    <img class="shape-author" src="{{ asset('assets') }}/images/author/author-11.jpg" alt="Shape">

</div>
<!-- Page Banner End -->

<div class="section ">
            <div class="container">

               

            </div>
        </div>

        <div class="section m-5">
            <div class="container">

                <!-- Contact Wrapper Start -->
                <div class="contact-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                            <!-- Contact Info Start -->
                            <div class="contact-info">

                                

                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Phone No.</h6>
                                        <p><a href="#" class="text-decoration-none">(+95) 9123456789</a></p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Email Address.</h6>
                                        <p><a href="#" class="text-decoration-none">example123@gmail.com</a></p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Office Address.</h6>
                                        <p>Yangon,Myanmar</p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                            </div>
                            <!-- Contact Info End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <h3 class="title">Get in Touch <span>With Us</span></h3>

                                <div class="form-wrapper">
                                    <form id="contact-form" action="https://htmlmail.hasthemes.com/humayun/edule-contact.php" method="POST">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                        <p class="form-message"></p>
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button class="btn btn-success btn-hover-dark w-100"><label class="pb-2">Send Message </label><i class="flaticon-right"></i></button>
                                        </div>
                                        <!-- Single Form End -->
                                    </form>
                                </div>
                            </div>
                            <!-- Contact Form End -->

                        </div>
                    </div>
                </div>
                <!-- Contact Wrapper End -->

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