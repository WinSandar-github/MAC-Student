@extends('layouts.app')

@section('content')
         <!-- Overlay Start -->
         <div class="overlay"></div>
     <!-- Overlay End -->

     <!-- Slider Start -->
     <div class="non_login section slider-section">

         <!-- Slider Shape Start -->
         <div class="slider-shape">
             <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
         </div>
         <!-- Slider Shape End -->

         {{-- <div class="container">
             <!-- Slider Content Start -->
             <div class="slider-content">
                 <h4 class="sub-title">Start your favourite course</h4>
                 <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                 <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                 <a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>
             </div>
             <!-- Slider Content End -->
         </div> --}}

         <!-- Call to Action Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Call to Action Wrapper Start -->
                <div class="call-to-action-wrapper">

                    <img class="cat-shape-01 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">
                    <img class="cat-shape-02" src="assets/images/shape/shape-13.svg" alt="Shape">
                    <img class="cat-shape-03 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">

                    <div class="row align-items-center">
                        <div class="col-md-6">

                            <!-- Section Title Start -->
                            <div class="section-title shape-02">
                                <h5 class="sub-title">Become A Instructor</h5>
                                <h2 class="main-title">You can join with Edule as <span>a instructor?</span></h2>
                            </div>
                            <!-- Section Title End -->

                        </div>
                        <div class="col-md-6">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to Action Wrapper End -->

            </div>
        </div>
        <!-- Call to Action End -->
     </div>

     <div class="login main-wrapper">
        <!-- Page Banner Start -->
        <div class="section page-banner">
            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <!-- <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">User Profile</li>
                    </ul> -->
                    <h2 class="title-hearder">User  <span>Dashboard</span></h2>
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
        <div class=" section section-padding mt-n10">
            <div class="container">
            <div class="card text-center">
                <div class="card-header title text-dark h5" style="background-color:#E7F8EE;">
                </div>
                <div class="card-body">
                    <!-- Student  da cpa-->
                    <div class="da_cpa">
                        <div class="row">
                            <div class="col-md-3">
                                <img  class="img-fluid" 
                                id="image"
                                style="height : 200px;width:auto;"
                                />
                            </div>
                            <div class="col-md-9">
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="name_eng"></span> / <span id="name_mm"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">NRC</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="nrc"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Date of Birth</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="date_of_birth"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Email</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="email"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Phone</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="phone"></span>
                                        </div>
                                    </div>
                                

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="border-bottom mt-3 pb-2" style="font-weight:bold">
                                Course You're Success 
                                </h5>
                                <div class="row">
                                    <div class="course">
                                    </div>

                                </div>

                            </div>

                    
                            <div class="col-md-6">
                                <h5 class="border-bottom mt-3 pb-2" style="font-weight:bold">
                                လက်ရှိတက်ရောက်နေသော အတန်း
                                </h5>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Batch Name</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="batch_name"></span> 
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Course Name</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="course_name"></span> 
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Exam Date</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="exam_date"></span> 
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="acc_firm">
                        <div class="row">
                            
                            <div class="col-md-12">
                                    <div class="row m-2  mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Accountancy Firm Registration No</p>
                                        </div>
                                        <div class="col-md-6">
                                             <span class="text-start" id="acc_firm_reg_no"></span>
                                        </div>
                                    </div>
                                    <div class="row  mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Accountancy Firm Name</p>
                                        </div>
                                        <div class="col-md-6">
                                             <span class="text-start text-bold" id="acc_firm_name"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Head Office Address</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="text-start" id="head_office"></span>
                                        </div>
                                    </div>
                                  
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p  style="font-weight:bold">Email</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="text-start email"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Phone</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="text-start phone"></span>
                                        </div>
                                    </div>
                                

                            </div>

                        </div>

                    </div>

                    <div class="school">
                        <div class="row">
                             
                            <div class="col-md-12">
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="sch_name_eng"></span> / <span id="sch_name_mm"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">NRC</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="sch_nrc"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Date of Birth</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="sch_date_of_birth"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Email</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="sch_email"></span>
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">Phone</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="sch_phone"></span>
                                        </div>
                                    </div>
                                

                            </div>

                        </div>

                        
                    </div>


 


                    <h5 class="border-bottom pb-2" style="font-weight:bold">Announcement</h5>
                    <div class="row m-2 mt-3 ">
 
                               
                                    <span id="status"></span> 
                                
                            </div>
                    
                   

                  
                </div>
               
                </div>
                
            </div>
        </div>


    </div>





        <!-- Call to Action End -->
@endsection

@push('scripts')
<script type="text/javascript">
    $('document').ready(function(){
        user_profile();
         
    })
 
</script>
@endpush