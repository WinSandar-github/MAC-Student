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
                            <p class="card-text">Your Application Form is checking</p>
                        </div>
                    </div>
                </div>
                <div class="course_detail">
                    <div class="row" >
                       
                        @php $i=0; $date=Date('Y-m-d');
                        
                        @endphp
                       
                        @foreach($course as $c)
                        
                        
                     
                         @php ++$i;  @endphp
                        <input type="hidden" value="{{$c['id']}}" id="course_id{!! $i !!}"/>
                            <div class="card col-md-5 col-lg-5 offset-md-1 ">
                                <div class="card-header">
                                    <h4 class="card-title text-center">{{ $c['name']}} </h4>
                                </div>
                                <div class="card-body">
                                <div class="mt-2 widget-information mb-2">
                                            <div class="info-price">
                                                <span class="price">{{$c['registration_fee']}} Kyats</span>
                                            </div>
                                            <div class="info-list">
                                                <ul>
                                                    <li><i class="icofont-man-in-glasses"></i> <strong>Registration Fee</strong> <span>{{$c['registration_fee']}} Kyats</span></li>
                                                    
                                                    <li><i class="icofont-man-in-glasses"></i> <strong>Form Fee</strong> <span>{{$c['form_fee']}} Kyats</span></li>
                                                    <li><i class="icofont-man-in-glasses"></i> <strong>Exam Fee</strong> <span>{{$c['exam_fee']}} Kyats</span></li>
                                                    <li><i class="icofont-man-in-glasses"></i> <strong>Tution Fee</strong> <span>{{$c['tution_fee']}} Kyats</span></li>

                                                    <li><i class="icofont-clock-time"></i> <strong>Registration End</strong> <span>{{$c['registration_end_date']}}</span></li>
                                                    
                                                    <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
                                                </ul>
                                            </div>
                                        
                                    </div>
                                    <div class=" widget-information" >
                                        
                                        <h6>Description</h6>
                                        <hr>

                                    
                                        <p style="height:150px;overflow:auto;">{{$c['description']}}</p>

                                    </div>
                                    @if(!empty($c['active_batch']))
                                     @foreach($c['active_batch'] as $b)
                                        <input type="hidden" value="{{$b['id']}}" id="batch_id{!! $i !!}"/>
                                      <div class="info-btn mt-2 text-center check_login{!! $i !!}">
                                          
                                        <!-- $c['id'], 'da_register' -->
                                       <!-- sucess da         -->
                                        <!-- <a href="{{ url('cpa_register') }}" class="btn btn-primary btn-hover-dark d-none " >Enroll Now </a> -->
                                       
                                        <!-- <a href="{{ url('login') }}" class="btn btn-primary btn-hover-dark  d-none  logined" >Enroll Now </a> -->

                                    
                                        </div>
                                    
                                     @endforeach
                                    @else
                                    <p class="text-center text-dark mt-2 h6 ">Coming Soon</p>

                                    @endif
                                
                                    
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
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
    })
    app_form_feedback();

</script>
@endpush