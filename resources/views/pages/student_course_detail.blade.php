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
        <div class="section section-padding mt-n10">
            <div class="container">
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark mb-3">
                        
                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please upate your form  
                             </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none;">
                    <div class="card text-white bg-primary mb-3">
                        
                        <div class="card-body">
                            <p class="card-text">Your Registration Form is checking</p>
                        </div>
                    </div>
                </div>
                @foreach($batch as $b)
                <div class="row gx-10 course_detail" >
                    <div class="col-lg-8">
                        <!-- Courses Details Start -->
                        <div class="courses-details">

                            <h2 class="title">Diploma in Accountancy ({{$b[0]['name']}})</h2>
                       
                           

                            <!-- Courses Details Tab Start -->
                            <div class="courses-details-tab">

                                <!-- Details Tab Menu Start -->
                                <div class="details-tab-menu">
                                    <ul class="nav justify-content-center">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                                    </ul>
                                </div>
                                <!-- Details Tab Menu End -->

                                <!-- Details Tab Content Start -->
                                <div class="details-tab-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="description">

                                            <!-- Tab Description Start -->
                                            <div class="tab-description">
                                                <div class="description-wrapper">
                                                    <p>{{$b[0]['course']['description']}}</p>
                                                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                                                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p> -->
                                                </div>
                                            </div>
                                            <!-- Tab Description End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Details Tab Content End -->

                            </div>
                            <!-- Courses Details Tab End -->

                        </div>
                        <!-- Courses Details End -->

                    </div>
                    <div class="col-lg-4">
                        <!-- Courses Details Sidebar Start -->
                        <div class="sidebar">

                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-price">
                                    <span class="price">{{$b[0]['course']['registration_fee']}} Kyats</span>
                                </div>
                                <div class="info-list">
                                    <ul>
                                        <li><i class="icofont-man-in-glasses"></i> <strong>Form Fee</strong> <span>{{$b[0]['course']['form_fee']}} Kyats</span></li>
                                        <li><i class="icofont-clock-time"></i> <strong>Registration End</strong> <span>{{$b[0]['course']['registration_end_date']}}</span></li>
                                        <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
                                    </ul>
                                </div>
                                <div class="info-btn">
                                <a href="{{url('da')}}" class="btn btn-primary btn-hover-dark">Enroll Now </a>
                                <!-- @if($b[0]['course']['registration_start_date'] < date('Y-m-d') && $b[0]['course']['registration_end_date'] > date('Y-m-d') ) -->
                                <!-- @endif -->
                                </div>
                            </div>
                            <!-- Sidebar Widget Information End -->

                        </div>
                        <!-- Courses Details Sidebar End -->
                    </div>
                </div>
                @endforeach

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
    getStudentInfo();

</script>
@endpush