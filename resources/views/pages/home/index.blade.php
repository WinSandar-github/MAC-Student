
<div class="non_login">
    
    <div class="section slider-section">
        <div class="slider-images">
            <div class="images text-center" style="width : 100%">
                <img src="assets/images/mac_images/MAC_HomePage.jpg" style="width: 30000px" alt="Slider">
            </div>
        </div>
        <!-- Slider Shape Start -->
            {{--
                <div class="slider-shape">
                    <img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">
                </div>
            --}}
        <!-- Slider Shape End -->

            {{--
                <div class="container">

                    <!-- Slider Content Start -->
                    <div class="slider-content">
                        <h4 class="sub-title">Start your favourite course</h4>
                        <h2 class="main-title mb-5">Now learning from anywhere, and build your <span>bright career.</span></h2>
                        <li>It has survived not only five centuries but also the leap into electronic typesetting.</li>
                        <a class="btn btn-lg btn-success btn-hover-dark" href="#">Start A Course</a>
                    </div>
                    <!-- Slider Content End -->

                </div>
            --}}

        <!-- Slider Courses Box Start -->
        {{--
            <div class="slider-courses-box">

                <img class="shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-open-book"></i>
                        <span class="count">1,235</span>
                        <li>courses</li>
                    </div>
                </div>

                <img class="shape-2" src="assets/images/shape/shape-6.png" alt="Shape">

            </div>
        --}}
        <!-- Slider Courses Box End -->

        <!-- Slider Rating Box Start -->
        {{--
            <div class="slider-rating-box">

                <div class="box-rating">
                    <div class="box-wrapper">
                        <span class="count">4.8 <i class="flaticon-star"></i></span>
                        <li>Rating (86K)</li>
                    </div>
                </div>

                <img class="shape animation-up" src="assets/images/shape/shape-7.png" alt="Shape">

            </div>
        --}}
        <!-- Slider Rating Box End -->

        <!-- Slider Images Start -->
        {{--
            <div class="slider-images">
                <div class="images">
                    <img src="assets/images/mac_images/macschoolimg.png" alt="Slider">
                </div>
            </div>
        --}}
        <!-- Slider Images End -->

        <!-- Slider Video Start -->
        <div class="slider-video">
            {{-- <img class="shape-1" src="assets/images/shape/shape-9.png" alt="Shape"> --}}

            <div class="video-play">
                {{-- <img src="assets/images/shape/shape-10.png" alt="Shape"> --}}
                <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
            </div>
        </div>
        <!-- Slider Video End -->

    </div>

        <div class="section section-padding-02 " style="margin-bottom: 50px;padding-top : 0px" >
            <div class="container">

                <!-- All Courses Tabs Menu Start -->
                <div class="courses-tabs-menu">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper nav" style="justify-content: space-between">
                            {{-- 
                                <li class="swiper-slide">
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#tabs1">UI/UX Design</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs2">Development</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs3">Data Science</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs4">Business</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs5">Financial</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs6">Marketing</button>
                                </li>
                                <li class="swiper-slide">
                                    <button data-bs-toggle="tab" data-bs-target="#tabs7">Design</button>
                                </li> 
                            --}}
                            <li>
                                {{-- <button class="course_list" data-bs-toggle="tab" value="app">??????????????????????????????????????????????????????????????????????????????</button> --}}
                                <button class="course_list" value="app">??????????????????????????????????????????????????????????????????????????????</button>
                            </li>
                            <li>
                                {{-- <button class="course_list" data-bs-toggle="tab" value="reg">??????????????????????????????????????????????????????????????????????????????</button> --}}
                                <button class="course_list" value="reg">???????????????????????????????????????????????????????????????????????????????????????</button>
                            </li>
                            <li>
                                {{-- <button class="course_list" data-bs-toggle="tab" value="exam">????????????????????????????????????????????????????????????????????????????????????????????????</button> --}}
                                <button class="course_list" value="exam">????????????????????????????????????????????????????????????????????????????????????????????????</button>
                            </li>
                            <li>
                                {{-- <button class="course_list" data-bs-toggle="tab" value="result">???????????????????????????????????????????????????????????????????????????????????????</button> --}}
                                <button class="course_list" value="result">???????????????????????????????????????????????????????????????????????????????????????</button>
                            </li>

                            
                            
                        </ul>

                        <ul class="swiper-wrapper nav my-2" style="justify-content: space-evenly;">
                       
                            <li>
                                  <button value="exam" onclick=" window.open(`${FRONTEND_URL}/entry_exam_list`,'_blank')">CPA One ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</button>
                            </li>
                            <li>
                                 <button class="course_list" onclick=" window.open(`${FRONTEND_URL}/qualified_test_list`,'_blank')">??????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????</button>
                            </li>
                        </ul>
                        
                    </div>

                    <!-- Add Pagination -->
                    {{-- <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div> --}}
                    {{-- <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div> --}}
                </div>
                <!-- All Courses Tabs Menu End -->

                <!-- All Courses Wrapper Start -->
                <div class="courses-wrapper ">
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block">Diploma in Accountancy (DA)</h4> 
                                <a href="{{ url('student_course/1') }}" class="btn btn-success" style="float:right !important">Course Details</a>
                                <hr>
                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="da-description"></div>
                                        </div>
                                </div>                               
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block">Certified Public Accountant (CPA)</h4> 
                                <a href="{{ url('student_course/2') }}" class="btn btn-success" style="float:right !important">Course Details</a>
                                <hr>

                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="cpa-description"></div>
                                        </div>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block"> Certificate of Certified Public Accountant (Full-Fledged) </h4> 
                                <a href="{{ url('cpa_ff_information') }}" class="btn btn-success" style="float:right !important">  Read More</a>
                                <hr>

                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="cpaff-description"></div>
                                        </div>
                                </div>
                                {{--<ul style="line-height:180%; font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                    <li> ???????????? ?????? ????????????????????????????????????????????? </li>
                                    <li>  CPA Part-2 ????????????????????????????????????????????????????????? (???????????????????????????) ????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
                                    <li>  ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
                                    <li> ?????????????????????????????????????????????????????? ????????????????????????????????? ?????? ????????????????????? ????????????????????? CPD ?????? ???????????? ???????????????????????????
                                    <li>  MICPA ???????????????????????? </li>
                                    <li> . . .</li>
                                </ul>--}}


                                
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block"> Certificate of Professional Accountant in Public Practice (PAPP) </h4> 
                                <a href="{{ url('student_papp_information') }}" class="btn btn-success" style="float:right !important">  Read More</a>
                                <hr>
                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="papp-description"></div>
                                        </div>
                                </div>
                                
                                {{--<ul style="line-height:180%; font-family: Arial, Helvetica, sans-serif; text-align: justify;">   
                                    <li> CPA(FF) ??????????????????????????????????????????????????? ??? ???????????? ???????????????????????????????????????????????????</li>
                                    <li> ?????????????????????????????????????????????????????? ????????????????????????????????? ?????? ????????????????????? ????????????????????? CPD ?????? ???????????? ???????????????????????????</li>
                                    <li> . . .</li>
                            </ul>--}}


                                
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block">School </h4> 
                                <a href="{{ url('school_information') }}" class="btn btn-success" style="float:right !important">  Read More</a>
                                <hr>
                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="school-description"></div>
                                        </div>
                                </div>
                                
                                    

                                
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block">Teacher </h4> 
                                <a href="{{ url('teacher_information') }}" class="btn btn-success" style="float:right !important">  Read More</a>
                                <hr>
                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="teacher-description"></div>
                                        </div>
                                </div>
                                
                                   
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                
                                <h4 class="d-inline-block">Mentor </h4> 
                                <a href="{{ url('mentor_information') }}" class="btn btn-success" style="float:right !important">  Read More</a>
                                <hr>
                                <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="mentor-description-test"></div>
                                        </div>
                                </div>
                                
                                    <!-- <ul style="line-height:180%; font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                        <li>????????????????????????????????????????????? ???????????? ???????????????????????????????????????????????? ????????????????????????????????? (????????????????????????-???) ??????????????? ?????????????????????????????? ??????????????? (?????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????)</li>
                                            <ul>
                                                <li>- PAPP ?????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ??? ???????????????????????????????????????????????????????????????????????????????????? (??????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????)</li>
                                                <li>- Limited Company ??? ?????????????????????????????? ????????????????????? (??? ??????????????????????????????????????????) ????????????????????? ?????????????????????????????????</li>
                                            </ul>
                                        <li>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? (???????????????????????????????????????????????????????????????????????????)</li>
                                        <li>?????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????? PAPP ?????????????????????????????? ???????????? ??????????????????????????????</li>
                                        <li>. . .</li>
                                    </ul> -->
                            </div>
                            <!-- Single Courses End -->
                        </div>
                            
                             
                    </div>


                </div>
                <!-- All Courses Wrapper End -->
            </div>
        </div>

        
            
</div>

<div class="modal fade" id="showCourseList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" style="max-width: 600px !important">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Course List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body course d-flex flex-column mx-auto ">
          
         
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div> -->
    </div>
  </div>
</div>
    
        

@push('scripts')
<script type="text/javascript">
    loadDescription('School','school-description');
    loadDescription('Teacher','teacher-description');
    loadDescription('PAPP','papp-description');
    loadDescription('CPAFF','cpaff-description');
    loadDescription('Mentor','mentor-description-test');
    loadDescription('DA','da-description');
    loadDescription('CPA','cpa-description');
</script>
@endpush