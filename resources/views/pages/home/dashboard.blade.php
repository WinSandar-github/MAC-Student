
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
                <h2 class="title-hearder"><span class="dashboard_name"></span><span>Dashboard</span></h2>
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
        <div class="container" style="margin-top: 0px!important">
            <div class="card da-card shadow-lg"><!-- when school and teacher dashboard use da-card hide  -->
                <div class="card-header title text-center text-dark h5 p-3" style="background-color:#E7F8EE;">
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
                                        <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100 edit_profile">{{ __('Update Profile') }}</button>
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



                                    <!-- <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Exam Registration Date</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="exam_date"></span>
                                        </div>
                                    </div>  -->

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
                                        <p class="ml-2 text-bold" style="font-weight:bold">
                                            CPA(FF)နောက်ကျကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>50000</span>
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
                                <div class="row m-2 mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2 text-bold" style="font-weight:bold">
                                            PAPP နောက်ကျကြေး</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>50000</span>
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
                                                    <th>Module</th>
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
                                        <p class="ml-2" style="font-weight:bold">Head Office Address(English)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-start" id="head_office"></span>
                                    </div>
                                </div>
                                <div class="row  mt-3 border-bottom">
                                    <div class="col-md-6">
                                        <p class="ml-2" style="font-weight:bold">Head Office Address(Myanmar)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-start" id="head_office_mm"></span>
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
                                  <div class="row">
                                      <table class="table table-border pub_pra_reg_no_and_name_tbl">
                                          <thead>
                                              <th>Name</th>
                                              <th>Public Practice Reg No.</th>
                                          </thead>
                                          <tbody class="pub_pra_reg_no_and_name_tbody">

                                          </tbody>
                                      </table>
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
                            <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>
                            <div class="text-center fw-bolder status_history">
                            </div>
                            <div class="text-center fw-bolder" id="message">

                            </div>
                            {{--<input type="text" class="form-control" id="message" readonly="">--}}
                        </div>
                        {{--renew buttons--}}
                        <div class="row" id="check_renew" style="display:none;text-align: center; margin-top: 2%;">
                            <div class="form-group">
                                <center>
                                    <a href="{{ url('/audit_firm_information') }}" class="btn btn-success btn-hover-dark">Audit Firm Renew Form</a>
                                </center>
                            </div>
                        </div>

                        <div class="row" id="check_renew_nonaudit" style="display:none;text-align: center; margin-top: 2%;">
                            <div class="form-group">
                                <center>
                                    <a href="{{ url('/non_audit_firm_information') }}" class="btn btn-success btn-hover-dark">Non-Audit Firm Renew Form</a>
                                </center>
                            </div>
                        </div>
                        {{--payment buttons--}}
                        <div class="row payment-btn" style="display:none;">
                            <div class="col-md-6"></div>
                            <div class="">
                                <div class="mt-4" align="center">
                                    <p class="info-btn text-dark h6">
                                        <button id="audit_payment_btn" class="btn btn-success btn-hover-dark"> Go to payment</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row nonaudit-payment-btn" style="display:none;">
                            <div class="col-md-6"></div>
                            <div class="">
                                <div class="mt-4" align="center">
                                    <p class="info-btn text-dark h6">
                                        <button id="non_audit_payment_btn" class="btn btn-success btn-hover-dark"> Go to payment</button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{--reject register buttons--}}
                        <div id="reject_register_btn_audit" style="display:none;">
                          <div class="row" >
                              <div class="col-md-12">
                                  <div align="center">
                                      <p class="info-btn col-md-2 mb-4 text-dark h6">
                                          <a href="{{url('audit_firm_reject_register')}}" class="btn btn-success btn-hover-dark" >Update Register</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div id="reject_register_btn_non_audit" style="display:none;">
                          <div class="row" >
                              <div class="col-md-12">
                                  <div align="center">
                                      <p class="info-btn col-md-2 mb-4 text-dark h6">
                                          <a href="" class="btn btn-success btn-hover-dark" >Update Register</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div id="reject_remark_box" style="display:none;">
                          <div class="row my-2">
                            <h5 class="text-center border-bottom pb-2"
                                style="font-weight:bold ;background-color:#E7F8EE;">Reject Remark</h5>
                            <div class="text-center text-danger reject_remark">

                            </div>
                          </div>
                        </div>

                    </div>
                     <!-- cpaff other dashboard -->
                    {{--<div class="cpaff_other">
                        <div class="row">

                            
                            
                            
                            </div>--}}
                            <div class="qualified_test">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-fluid" id="qt_image" style="height : 200px;width:auto;" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row m-2 mt-3 border-bottom">
                                            <div class="col-md-6">
                                                <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng)/ Name(Myanmar)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span id="qt_name_eng"></span> / <span id="qt_name_mm"></span>
                                            </div>
                                        </div>
                                        <div class="row m-2 mt-3 border-bottom">
                                            <div class="col-md-6">
                                                <p class="ml-2" style="font-weight:bold">NRC</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span id="qt_nrc"></span>
                                            </div>
                                        </div>
        
                                        <div class="row m-2 mt-3 border-bottom">
                                            <div class="col-md-6">
                                                <p class="ml-2" style="font-weight:bold">Email</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span id="qt_email"></span>
                                            </div>
                                        </div>
                                        <div class="row m-2 mt-3 border-bottom">
                                            <div class="col-md-6">
                                                <p class="ml-2" style="font-weight:bold">Phone</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span id="qt_phone"></span>
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
                                                <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100 edit_profile">{{ __('Update Profile') }}</button>
                                            </div>
                                        </div>
                                    </div>
        
        
                                </div>
        
                                <div class="row my-2">
        
                                    <div class="offset-md-3 col-md-9">
        
                                        <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;">
                                        Application Status</h5>
        
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
                                        </table>
                                    </div>
                                    
                                </div>
        
        
                            </div>
                <div class="card-body cpaff_other">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" id="cpaff_image" style="height : 200px;width:auto;"/>
                            </div>
                            <div class="col-md-6">
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
                                            onclick="Cpaff_profile_update()">{{ __('Update Profile') }}</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row my-2">
                            <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;">
                                    Application Status</h5>
                            <div class="text-center status_history"></div>
                            <div class="text-center status_papp"> </div>
                        </div>
                    </div>
            </div>

            <!-- cpaff other dashboard -->
            {{--<div class="cpaff_other">
                <div class="card">
                    <div class="card-header cpaff_other_title text-center text-dark h5" style="background-color:#E7F8EE;"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" id="cpaff_image" style="height : 200px;width:auto;"/>
                            </div>
                            <div class="col-md-8">
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
                            <div class="text-center status_history"></div>
                            <div class="text-center status_papp"> </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!-- end cpaff other dashboard -->
            <!-- school dashboard-->
            <div class="school" style="display:none;">
                        <div class="card">
                            <div class="card-header school-title text-center text-dark h5" style="background-color:#E7F8EE;"></div>
                            <div class="card-body">
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
                                        <div class="row m-2 mt-3 border-bottom sch_period" style="display:none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="ml-2" style="font-weight:bold">This certificate is
                                                        valid for the period</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <span id="sch_period_time"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row my-2 sch_status">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>

                                    <div class="text-center sch_status_history">

                                    </div>

                                </div>
                                <div class="row my-2 sch_reject-btn" style="display:none;">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Reject Reason</h5>


                                    <div class="text-center sch_reject-reason">

                                    </div>
                                </div>
                                <div class="row my-2 sch_cessation-btn" style="display:none;">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Cessation Reason</h5>


                                    <div class="text-center sch_cessation-reason">

                                    </div>
                                </div>
                                <div class="row my-2 sch_payment-status" style="display:none;">
                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Payment Status</h5>

                                    <div class="text-center sch_payment_status">

                                    </div>

                                </div>
                                <div class="row sch_reject-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div>

                                            <div class=" pull-right mt-4">
                                                <p class="info-btn text-dark h6 sch-reject-p">

                                                </p>
                                            </div>
                                    </div>
                                </div>
                                <div class="row sch_payment-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div>

                                            <div class=" pull-right mt-4">
                                                <p class="info-btn text-dark h6 sch_payment-p">

                                                    <!-- <a href="/school_information" class="btn btn-success btn-hover-dark"> Go to
                                                        payment</a> -->
                                                </p>
                                            </div>
                                    </div>
                                </div>
                                <div class="row sch_renew-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div class="">
                                                <div class=" pull-right mt-4">
                                                    <p class="info-btn text-dark h6 sch_renew-p">

                                                        <!-- <a href="/school_information" class="btn btn-success btn-hover-dark"> Renew Form</a> -->
                                                    </p>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
            <!--end school dashboard-->
            <!-- teacher dashboard-->
            <div class="teacher" style="display:none;">
                        <div class="card">
                            <div class="card-header teacher-title text-center text-dark h5" style="background-color:#E7F8EE;"></div>
                            <div class="card-body">
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
                                        <div class="row m-2 mt-3 border-bottom teacher_period" style="display:none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="ml-2" style="font-weight:bold">This certificate is
                                                        valid for the period</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <span id="teacher_period_time"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row my-2">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>

                                    <div class="text-center teacher_status_history">

                                    </div>

                                </div>
                                <div class="row my-2 teacher_reject-btn" style="display:none;">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Reject Reason</h5>


                                    <div class="text-center teacher_reject-reason">

                                    </div>
                                </div>
                                <div class="row my-2 teacher_cessation-btn" style="display:none;">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Cessation Reason</h5>


                                    <div class="text-center teacher_cessation-reason">

                                    </div>
                                </div>
                                <div class="row my-2 teacher_payment-status" style="display:none;">


                                    <h5 class="text-center border-bottom pb-2"
                                        style="font-weight:bold ;background-color:#E7F8EE;">Payment Status</h5>

                                    <div class="text-center teacher_payment_status">

                                    </div>

                                </div>
                                <div class="row teacher_reject-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div>

                                            <div class=" pull-right mt-4">
                                                <p class="info-btn text-dark h6 teacher_reject-p">
                                                    <!--https://demo.aggademo.me/MAC_Student/public/index.php-->
                                                    <!-- <a href="/teacher_register" class="btn btn-success btn-hover-dark"> Update</a> -->
                                                </p>
                                            </div>
                                    </div>
                                </div>
                                <div class="row teacher_payment-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div>

                                            <div class=" pull-right mt-4">
                                                <p class="info-btn text-dark h6 teacher_payment-p">

                                                    <!-- <a href="/teacher_information" class="btn btn-success btn-hover-dark"> Go to
                                                        payment</a> -->
                                                </p>
                                            </div>
                                    </div>
                                </div>
                                <div class="row teacher_renew-btn" style="display:none;">
                                    <div class="col-md-6"></div>
                                    <div class="">
                                                <div class=" pull-right mt-4">
                                                    <p class="info-btn text-dark h6 teacher_renew-p">

                                                        <!-- <a href="/teacher_information" class="btn btn-success btn-hover-dark"> Renew Form</a> -->
                                                    </p>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!--end teacher dashboard-->
          
            
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
                                        <input type="email" readonly placeholder="Enter your Email address!" name="email"
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

{{--Audit Payment Modal--}}
<form method="post" class="needs-validation" action="javascript:auditPaymentSubmit();" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="modal fade" id="auditpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Audit Firm Registration Form Fee - ****** MMK</h4>
                        </center>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                     data-value="CBPAY" name="payment_method" id="cb_img">
                            </center>
                            <br>
                        </div>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                     data-value="MPU" name="payment_method" id="mpu_img">
                            </center>
                            <br>
                        </div>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                     data-value="CASH" name="payment_method" id="cash_img">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="audit_pay_now_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                        </center>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>

{{--Non-Audit Payment Modal--}}
<form method="post" class="needs-validation" action="javascript:nonAuditPaymentSubmit();" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="modal fade" id="nonAuditpaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Non-Audit Firm Registration Form Fee - ****** MMK</h4>
                        </center>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                     data-value="CBPAY" name="payment_method" id="cb_img">
                            </center>
                            <br>
                        </div>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                     data-value="MPU" name="payment_method" id="mpu_img">
                            </center>
                            <br>
                        </div>
                        <div class="col-sm-3 col-5">
                            <center>
                                <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                     data-value="CASH" name="payment_method" id="cash_img">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="non_audit_pay_now_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                        </center>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script type="text/javascript">
    $('document').ready(function(){
        // dateQuery();
        // verifyStatus();
        //checkPaymentAudit();
        // audit_reg_feedback();
        // firmDashboardData();
    })
    //app_form_feedback();

</script>
@endpush
