
<div class="login main-wrapper">
    <!-- Page Banner Start -->
    <div class="section page-banner">
        <!-- <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape"> -->
        <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">
        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <!-- <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">User Profile</li>
                    </ul> -->
                <h2 class="title-hearder">User <span>Dashboard</span></h2>
            </div>
            <!-- Page Banner End -->

        </div>
        <!-- Shape Icon Box Start -->
        {{--
            <div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">
            </div>
        --}}
        <!-- Shape Icon Box End -->
        <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">
        <!-- <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape"> -->
    </div>

    <div class=" section section-padding mt-n10">
        <div class="container">
            <div class="card ">
                <div class="card-header title text-center text-dark h5" style="background-color:#E7F8EE;">
                </div>
                <div class="card-body">
                    <!-- Student  da cpa-->
                    <div class="da_cpa">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" id="image" style="height : 200px;width:auto;" />
                            </div>
                            <div class="col-md-6">
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

                            <div class="col-md-3">
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-10 offset-md-1 mb-2">
                                        <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100"
                                            data-bs-toggle="modal"
                                            data-bs-target="#showPwdModel">{{ __('Change Password') }}</button>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-10 offset-md-1 mb-2">
                                        <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100"
                                            id="edit_profile">{{ __('Update Profile') }}</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 current_course" style="display:none;">
                                <h5 class="text-center border-bottom  py-2 my-2"
                                    style="font-weight:bold; background-color:#E7F8EE;">
                                    လက်ရှိတက်ရောက်နေသော အတန်း
                                </h5>

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
                                        <p class="ml-2 text-bold" style="font-weight:bold">Batch Name</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="batch_name"></span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold regi_fee_txt" style="font-weight:bold"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="registration_date"></span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom self_study" style="display:none;">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold " style="font-weight:bold">Selfstudy Registration Date
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="selfstudy_date"></span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom private_school" style="display:none;">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold " style="font-weight:bold">Private School Registration
                                            Date</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="pschool_date"></span>
                                    </div>
                                </div>


                                {{-- 
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Exam Registration Date</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="exam_date"></span>
                                        </div>
                                    </div> 
                                --}}
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Next Action </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="next_course"></span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4 cpaff" style="display:none;">
                                <h5 class="text-center border-bottom  py-2 my-2"
                                    style="font-weight:bold; background-color:#E7F8EE;">
                                    ကနဦးမှတ်ပုံတင်ခြင်း
                                </h5>


                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">CPA(FF)လျှောက်လွှာကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>1000</span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">CPA(FF)မှတ်ပုံတင်ကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>10000</span>
                                    </div>
                                </div>



                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">PAPPလျှောက်လွှာကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>1000</span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">PAPP မှတ်ပုံတင်ကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>10000</span>
                                    </div>
                                </div>
                                <h5 class="text-center border-bottom  py-2 my-2"
                                    style="font-weight:bold; background-color:#E7F8EE;">
                                    သက်တမ်းတိုးခြင်း
                                </h5>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">CPA(FF) လျှောက်လွှာကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>1000</span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">CPA(FF)
                                            မှတ်ပုံတင်သက်တမ်းတိုးကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>10000</span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">PAPP လျှောက်လွှာကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>1000</span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">PAPP
                                            မှတ်ပုံတင်သက်တမ်းတိုးကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>10000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 ">
                                <h5 class="text-center border-bottom py-2 my-2"
                                    style="font-weight:bold;background-color:#E7F8EE;">Application Status</h5>
                                <div class="row m-2 mt-3 ">
                                    <!-- <span class="status"><x/span>  -->
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Submit Date</th>
                                                <th>Status Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="status">

                                        </tbody>
                                        <tfoot class="papp_btn">

                                        </tfoot>
                                    </table>

                                </div>

                            </div>
                            
                            <div id="article_row">
                                <div class="col-md-12 ">
                                    <h5 class="text-center border-bottom py-2 my-2"
                                        style="font-weight:bold;background-color:#E7F8EE;">Article Status</h5>
                                    <div class="row m-2 mt-3 ">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="article_status">

                                            </tbody>
                                            <tfoot class="article_btn">

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 ">
                                    <div class="col-md-4">
                                        <h5 class="text-center border-bottom pb-2" style="font-weight:bold; background-color:#E7F8EE;">
                                        Course History
                                        </h5>
                                        <div class="row">
                                            <table class="table table-border">
                                                <thead>
                                                    <th>Course Name</th>
                                                    <th>Batch Name</th>
                                                    <th>Success Year</th>
                                                </thead>
                                                <tbody class="course">
                                                </tbody>
                                            </table>
                                        </div>   
                                    </div>
                                <div class="col-md-8">
                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;"> Application Histroy</h5>
                                    <div class="row">
                                        <table class="table table-border ">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Submit Date</th>
                                                    <th>Status Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="status_history">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="acc_firm">
                        <div class="row">

                            <div class="col-md-8 offset-md-2">
                                <div class="row   mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Accountancy Firm
                                            Registration No</p>
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
                                <div class="row  mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">Head Office Address</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-start" id="head_office"></span>
                                    </div>
                                </div>

                                <div class="row  mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p style="font-weight:bold">Email</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-start email"></span>
                                    </div>
                                </div>
                                <div class="row mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">Phone</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-start phone"></span>
                                    </div>
                                </div>
                                <div id="info_for_audit" style="display:none;">
                                  <div class="row mt-3 border-bottom">
                                      <div class="col-md-6">
                                          <p class="ml-2" style="font-weight:bold">Name</p>
                                      </div>
                                      <div class="col-md-6">
                                          <span class="text-start name"></span>
                                      </div>
                                  </div>
                                  <div class="row mt-3 border-bottom">
                                      <div class="col-md-6">
                                          <p class="ml-2" style="font-weight:bold">Public Practice Reg No.</p>
                                      </div>
                                      <div class="col-md-6">
                                          <span class="text-start public_practice_reg_no"></span>
                                      </div>
                                  </div>
                                </div>
                                <div id="info_for_non_audit" style="display:none;">
                                  <div class="row mt-3 border-bottom">
                                      <div class="col-md-6">
                                          <p class="ml-2" style="font-weight:bold">Managing Director Name</p>
                                      </div>
                                      <div class="col-md-6">
                                          <span class="text-start managing_dir_name"></span>
                                      </div>
                                  </div>
                                  <div class="row mt-3 border-bottom">
                                      <div class="col-md-6">
                                          <p class="ml-2" style="font-weight:bold">Passport/CSC No.</p>
                                      </div>
                                      <div class="col-md-6">
                                          <span class="text-start passport_csc_no"></span>
                                      </div>
                                  </div>
                                </div>

                            </div>

                        </div>
                        <div class="row my-2">


                            <h5 class="text-center border-bottom pb-2"
                                style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>

                            <div class="text-center status_history">

                            </div>
                        </div>

                    </div>

                    <div class="school">
                        <div class="row">

                            <div class="col-md-8 offset-md-2">
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)
                                        </p>
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

                        <div class="row my-2">


                            <h5 class="text-center border-bottom pb-2"
                                style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>

                            <div class="text-center status_history">

                            </div>
                        </div>


                    </div>

                    <div class="teacher">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="teacher_name_eng"></span> / <span id="teacher_name_mm"></span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">NRC</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="teacher_nrc"></span>
                                    </div>
                                </div>

                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">Email</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="teacher_email"></span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">Phone</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="teacher_phone"></span>
                                    </div>
                                </div>
                                <div class="row m-2 mt-3 border-bottom period" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="ml-2" style="font-weight:bold">This certificate is
                                                valid for the period</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="period_time"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row my-2">


                            <h5 class="text-center border-bottom pb-2"
                                style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>

                            <div class="text-center status_history">

                            </div>

                        </div>
                        <div class="row payment-btn" style="display:none;">
                            <div class="col-md-6"></div>
                            <div class="">
                                    <div class=" pull-right mt-4">
                                <p class="info-btn text-dark h6">

                                    <a href="/teacher_information" class="btn btn-success btn-hover-dark"> Go to
                                        payment</a>
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class="row renew-btn" style="display:none;">
                        <div class="col-md-6"></div>
                        <div class="">
                                    <div class=" pull-right mt-4">
                            <p class="info-btn text-dark h6">

                                <a href="/teacher_information" class="btn btn-success btn-hover-dark"> Renew Form</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- cpaff other dashboard -->
            <div class="cpaff_other">
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <div class="row m-2 mt-3 border-bottom">
                            <div class="col-md-6">
                                <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)</p>
                            </div>
                            <div class="col-md-6">
                                <span id="cpaff_name_eng"></span> / <span id="cpaff_name_mm"></span>
                            </div>
                        </div>
                        <div class="row m-2 mt-3 border-bottom">
                            <div class="col-md-6">
                                <p class="ml-2" style="font-weight:bold">NRC</p>
                            </div>
                            <div class="col-md-6">
                                <span id="cpaff_nrc"></span>
                            </div>
                        </div>

                        <div class="row m-2 mt-3 border-bottom">
                            <div class="col-md-6">
                                <p class="ml-2" style="font-weight:bold">Email</p>
                            </div>
                            <div class="col-md-6">
                                <span id="cpaff_email"></span>
                            </div>
                        </div>
                        <div class="row m-2 mt-3 border-bottom">
                            <div class="col-md-6">
                                <p class="ml-2" style="font-weight:bold">Phone</p>
                            </div>
                            <div class="col-md-6">
                                <span id="cpaff_phone"></span>
                            </div>
                        </div>
                        <div class="row m-2 mt-3 border-bottom period" style="display:none;">
                            <div class="col-md-6">
                                <p class="ml-2" style="font-weight:bold">This certificate is valid for the
                                    period</p>
                            </div>
                            <div class="col-md-6">
                                <span id="period_time_cpaff"></span>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row my-2">


                    <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;">
                        Application Status</h5>

                    <div class="text-center status_history">

                    </div>
                    <div class="text-center status_papp">

                    </div>
                </div>


            </div>
            <!-- end cpaff other dashboard -->
        </div>
    </div>
</div>


<!-- update profile -->
<div class="modal fade" id="profileModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="update_profile" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7">

                                <div class="row">

                                    <label for="" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" placeholder="Enter your Email address!" name="email"
                                            class="form-control" id="update_email"="">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                {{-- 
                                    <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                            <label for="" class="col-md-3 col-form-label">အမည်(မြန်မာ)</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm"
                                                        class="form-control" ="" id="name_mm">
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <label for="" class="col-md-3 col-form-label">အမည်(အင်္ဂလိပ်)</label>

                                            <div class="col-md-8">
                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" id="name_eng"
                                                        class="form-control" ="">
                                            </div>
                                        </div>
                                    <br> 
                                --}}
                                <div class="row">

                                    <label for="" class="col-md-3 col-form-label">မွေးသက္ကရာဇ်</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" class="form-control date_of_birth"
                                            placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)">
                                    </div>
                                </div>
                                <br>
                                <div class="row">

                                    <label for="" class="col-md-3 col-form-label">ဖုန်းနံပါတ်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" id="update_phone"
                                            class="form-control"="">
                                    </div>
                                </div>
                                <br>

                                <div class="row">

                                    <label for="" class="col-md-3 col-form-label">နေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="နေရပ်လိပ်စာ" name="address" id="update_address"
                                            class="form-control"="">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-5">
                                <div class="align-content-end  pull-right">
                                    <img class="col-md-3 profile-style" id="previewImg"
                                        src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg"
                                        alt="">
                                    <p class="mt-2 " style="margin-right: 10px;">
                                        <input type="file" class="custom-file-input" id="profile_photo" name="image"
                                            accept="image/*" onchange="previewImageFile(this);">
                                    </p>
                                    <div class="form-text mb-2">Allowed Jpeg Image.</div>
                                    <input type="hidden" name="old_image" id="old_image">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-hover-dark">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="showPwdModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 600px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="changePwd" enctype="multipart/form-data" action="javascript:void(0);">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <label for="" class="col-md-4 col-form-label">Enter Your Old Password</label>
                            <div class="col-md-8">
                                <input type="password" placeholder="Enter your old Password!" name="old_password"
                                    class="form-control" id="old_pwd" value="{{ old('password') }}" required="">
                                <p id="old_err_meg" class="mt-2 text-danger "></p>
                            </div>

                        </div>

                        <div class="row">

                            <label for="" class="col-md-4 col-form-label">Password</label>
                            <div class="col-md-8">
                                <input type="password" placeholder="Enter your new Password!" name="password"
                                    class="form-control" value="{{ old('password') }}" required="">
                            </div>

                        </div>
                        <br>


                        <div class="row">

                            <label for="" class="col-md-4 col-form-label">Confirm Password</label>
                            <div class="col-md-8">
                                <input type="password" placeholder="Enter your new Password again!"
                                    name="confirm_password" class=" form-control" required="">
                                <p class="text-center mt-3  text-danger" id="err_message"></p>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-hover-dark">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
