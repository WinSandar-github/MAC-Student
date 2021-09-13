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
                    <h2 class="title">AA Registration <span>Form</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form" style="margin-bottom: 10%;">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <form method="post" action="javascript:void();" id="aa_private_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" id="form_type" class="form-control">
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                  <div class="row">
                                    <div class="col-md-8">
                                      <div class="row">
                                          <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                          <label for="" class="col-md-3 col-form-label">Choose Mentor</label>
                                          <div class="col-md-8">
                                            <div class="form-group">
                                              <select class="form-control" name="mentor_id" id="selected_mentor_id" style="width: 100%;" required>
                                                  <option value="" disabled selected>Select Mentor</option>
                                              </select>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                          <label for="" class="col-md-3 col-form-label">Choose Register Type</label>
                                          <div class="col-md-8">
                                            <div class="form-group">
                                              <select class="form-control" name="current_check_service_id" id="selected_service_id" style="width: 100%;" required>
                                                  <option value="" disabled selected>Select Current Service</option>
                                              </select>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                          <label for="" class="col-md-3 col-form-label">Recommend Letter (jpg,pdf)</label>
                                          <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="file" id="recommend_file" class="form-control" placeholder="upload photo" name="recommend_file" required="">
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="col-md-7 pull-right">
                                          <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">

                                      </div>
                                    </div>
                                  </div>

                                    <div class="row mt-4">
                                        <div class="col-md-3 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100" id="private_submit">{{ __('Submit') }}</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                <!-- Form Wrapper End -->
                </div>
            </div>
        </div>
    </div>
      <!-- Modal Payment -->
<form method="post" class="needs-validation" action="javascript:createAAPrivateRegister();" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="privateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">AA (Private School) Form Fee - ****** MMK</h4>
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
                                        data-value="CASH" name="payment_method" id="cash_img_private">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="aa_private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                        </center>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>

    <!-- JavaScript Section -->
@endsection
@push('scripts')
<script>
    // $('#form_type').val(localStorage.getItem('course_id'));
    loadCheckServicePrivate();
    loadMentorSelfandPrivate();

    get_student_info(student_id).then(data => {
        if(data){
            var info = data.data;
            var job_history = data.data.student_job;
            if(info){
              $("#aa_private_form").find("input[name=name_mm]").val(info.name_mm);
              $("#aa_private_form").find("input[name=name_eng]").val(info.name_eng);
              $("#aa_private_form").find("input[name=nrc_state_region]").val(info.nrc_state_region);
              $("#aa_private_form").find("input[name=nrc_township]").val(info.nrc_township);
              $("#aa_private_form").find("input[name=nrc_citizen]").val(info.nrc_citizen);
              $("#aa_private_form").find("input[name=nrc_number]").val(info.nrc_number);
              $("#aa_private_form").find("input[name=father_name_mm]").val(info.father_name_mm);
              $("#aa_private_form").find("input[name=father_name_eng]").val(info.father_name_eng);
              $("#aa_private_form").find("input[name=race]").val(info.race);
              $("#aa_private_form").find("input[name=religion]").val(info.religion);
              $("#aa_private_form").find("input[name=date_of_birth]").val(info.date_of_birth);
              $("#aa_private_form").find("input[name=phone]").val(info.phone);
              $("#aa_private_form").find("input[name=address]").val(info.address);
              $("#aa_private_form").find("input[name=current_address]").val(info.current_address);
              document.getElementById('previewImg').src = BASE_URL + data.data.image;
            }

            if(job_history){
              $("#aa_private_form").find("input[name=name]").val(job_history.company_name);
              $("#aa_private_form").find("input[name=position]").val(job_history.position);
              $("#aa_private_form").find("input[name=department]").val(job_history.department);
              $("#aa_private_form").find("input[name=organization]").val(job_history.organization);
              //$(".da_to_cpa").find("input[name=address]").val(job_history.address);
              //$(".da_to_cpa").find("input[name=current_address]").val(job_history.current_address);
              $("#aa_private_form").find("input[name=company_name]").val(job_history.company_name);
              $("#aa_private_form").find("input[name=salary]").val(job_history.salary);
              $("#aa_private_form").find("input[name=office_address]").val(job_history.office_address);
            }
            // government staff OR not
            if(info.gov_staff == 1){
              $("#aa_private_form").find("input[name=gov_staff][value=1]").prop("checked",true);
            }
            else{
              $("#aa_private_form").find("input[name=gov_staff][value=0]").prop("checked",true);
            }
          }

          //$("#aa_mac_form").find("input").prop('disabled',true);
    })

</script>
<script>
    $( "#private_submit" ).click(function() {
        if(allFilled('#aa_private_form')){
            $('#privateModal').modal('show');
        }
        else{
        }
    });
    function allFilled(form_id) {
        var filled = true;
        $(form_id+' input').each(function() {
            if($(this).attr('id')=="current_check_services_other")
            {   }
            else if($(this).attr('id')=="form_type")
            {   }
            else{ if($(this).val() == ''  ) filled = false; }
        });
        return filled;
    }
    $('#aa_private_btn').click(function () {
        setTimeout(function () {
            $('#macModal').modal('hide');
        }, 1000);
    });

    $('#cash_img_private').click(function() {
        $('#aa_private_btn').prop('disabled', false);
    });

    $('#aa_private_btn').prop('disabled', true);
</script>
@endpush
