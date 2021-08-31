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
                <div class="card ">
                    <div class="card-header title text-center text-dark h5" style="background-color:#E7F8EE;">
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
                                                <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100" disabled>{{ __('Change Password') }}</button>
                                            </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-10 offset-md-1 mb-2">
                                                <button type="submit" class="btn btn-success btn-sm btn-hover-dark w-100" disabled>{{ __('Update Profile') }}</button>
                                            </div> 
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4 current_course" style="display:none;">
                                    <h5 class="text-center border-bottom  py-2 my-2" style="font-weight:bold; background-color:#E7F8EE;">
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
                                            <span id="registration_fee"></span> 
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom self_study" style="display:none;">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold " style="font-weight:bold">Selfstudy Registration Fees</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="selfstudy_fee"></span> 
                                        </div>
                                    </div>
                                    <div class="row m-2 mt-3 border-bottom private_school" style="display:none;">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold " style="font-weight:bold">Private School Registration Fees</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="pschool_fee"></span> 
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">Exam Registration Date</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span id="exam_date"></span> 
                                        </div>
                                    </div>
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
                                <h5 class="text-center border-bottom  py-2 my-2" style="font-weight:bold; background-color:#E7F8EE;">
                                    ကနဦးမှတ်ပုံတင်ခြင်း
                                    </h5>
                                    
                                   
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold" >CPA(FF)လျှောက်လွှာကြေး</p>
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
                                            <p class="ml-2 text-bold" style="font-weight:bold" >PAPPလျှောက်လွှာကြေး</p>
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
                                    <h5 class="text-center border-bottom  py-2 my-2" style="font-weight:bold; background-color:#E7F8EE;">
                                    သက်တမ်းတိုးခြင်း
                                    </h5>
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold" >CPA(FF) လျှောက်လွှာကြေး</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span>1000</span> 
                                        </div>
                                    </div>

                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">CPA(FF) မှတ်ပုံတင်သက်တမ်းတိုးကြေး</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span>10000</span> 
                                        </div>
                                    </div>
                                  
                                    
                                   
                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold" >PAPP လျှောက်လွှာကြေး</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span>1000</span> 
                                        </div>
                                    </div>

                                    <div class="row m-2 mt-3 border-bottom">
                                        <div class="col-md-6">
                                            <p class="ml-2 text-bold" style="font-weight:bold">PAPP မှတ်ပုံတင်သက်တမ်းတိုးကြေး</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span>10000</span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <h5 class="text-center border-bottom py-2 my-2" style="font-weight:bold;background-color:#E7F8EE;">Application Status</h5>
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
                                        </table>    
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row mt-3 ">
                                <div class="col-md-4">
                                    <h5 class="text-center border-bottom pb-2" style="font-weight:bold; background-color:#E7F8EE;">
                                    Course Histroy
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
                                <div class="col-md-8 ml-1">
                                    <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;"> Application Histroy</h5>
                                    <div class="row ">
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
                                                <p  style="font-weight:bold">Email</p>
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
                                    

                                </div>

                            </div>
                            <div class="row my-2">
                              
                                
                                    <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>
                                    
                                        <div class="text-center status_history">

                                        </div>
                                        
                                    
                        
                                
                            </div>

                        </div>

                        <div class="school">
                            <div class="row">
                                
                                <div class="col-md-8 offset-md-2">
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

                            <div class="row my-2">
                              
                                
                              <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>
                              
                                  <div class="text-center status_history">

                                  </div>
                            </div>

                            
                        </div>

                        <div class="teacher">
                            <div class="row">
                                
                                <div class="col-md-8 offset-md-2">
                                        <div class="row m-2 mt-3 border-bottom">
                                            <div class="col-md-6">
                                                <p class="ml-2 text-bold" style="font-weight:bold">Name(Eng) / Name(Myanmar)</p>
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
                                    

                                </div>

                            </div>

                            <div class="row my-2">
                              
                                
                              <h5 class="text-center border-bottom pb-2" style="font-weight:bold ;background-color:#E7F8EE;"> Application Status</h5>
                              
                                  <div class="text-center status_history">

                                  </div>
                            </div>

                            
                        </div>


                        

                        
                    </div>
               
                </div>
                
            </div>
        </div>


    </div>

<!-- update profile -->
<div class="modal fade" id="profileModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>    