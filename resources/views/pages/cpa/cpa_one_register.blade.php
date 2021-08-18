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

        <!-- Header Section Start -->
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

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
                    <h2 class="title">CPA Registration  <span>Form</span></h2>
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
        <div class="section section-padding">
            <div class="container">
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">
                        
                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your CPA 1 Registration Form need to prepare.Please update your form  
                                </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body">
                            <p class="card-text">Your CPA 1 Registration Form is checking</p>
                        </div>
                    </div>
                </div>
                <div class="approve" style="display:none;">
                    <table width="100%">
                        <tr>
                            <td width="80%">
                                <div class="card text-white bg-primary my-3">
                                    
                                    <div class="card-body">
                                        <p class="card-text">You have the opportunity to attend the training  </p>
                                        
                                        
                                    </div>
                                </div>
                            </td>
                            <td width="20%">
                                <div class="card text-white bg-primary my-3" id="aa_form" style="display:none;">
                                    
                                    <div class="card-body">
                                        <p class="card_text aa" style="text-align:center;"></p>
                                        
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body add_exam">
                             
                        
                        </div>
                    </div>
                </div>
            
                <div class="comment-form study" style="display:none;">
                                            
                
                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                    <div class="card border-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                            <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{url('cpa_one_self_study')}}">
                                        <div class="card border-success mb-3" >
                                            <div class="card-body"  style="height:100px;">
                                                <h6 class="card-title text-center">ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ</h6>                                      
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('cpa_one_mac')}}">
                                    <div class="card border-success mb-3">
                                        <div class="card-body col-md-12"  style="height:100px;">
                                            <h6 class="card-title text-center">MAC</h6> 
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                <a href="{{url('cpa_one_private_school')}}">
                                    <div class="card border-success mb-3">
                                        <div class="card-body" style="height:100px;">
                                            <h6 class="card-title text-center">Private School</h6>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Exam Feedback Text -->
                <div class="exam_feedback" style="display:none;">
                    <div class="card text-white bg-primary my-3">
                        
                        <div class="card-body exam_text">
                            
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
reg_feedback();
var exam_date=localStorage.getItem("exam_date");
console.log(exam_date)
</script>
@endpush