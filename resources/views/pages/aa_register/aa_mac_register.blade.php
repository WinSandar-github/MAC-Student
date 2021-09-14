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
                        <form method="post" action="javascript:void();" id="aa_mac_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" id="form_type" class="form-control">
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-5 col-form-label label_align_right">Choose Mentor</label>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <select class="form-control" name="mentor_id" id="selected_mentor_id" style="width: 100%;" required>
                                                      <option value="" disabled selected>Select Mentor</option>
                                                  </select>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-5 col-form-label label_align_right">Choose Register Type</label>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <select class="form-control" name="current_check_service_id" id="selected_service_id" style="width: 100%;" required>
                                                      <option value="" disabled selected>Select Current Service</option>
                                                  </select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label label_align_right">Recommend Letter (jpg,pdf)</label>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <input type="file" id="recommend_file" class="form-control" placeholder="upload photo" name="recommend_file" required="">
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="col-md-7 pull-right">
                                              <img class="col-md-3 profile-style" id="previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">

                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အမည်(မြန်မာ)" id="name_mm" name="name_mm"
                                                   class="form-control" required="" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" id="name_eng" name="name_eng"
                                                   class="form-control" required="" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label for=""
                                               class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        <div class="col-md-8">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2 col-5 pr-1">
                                                    <input type="text" placeholder="" id="nrc_state_region" name="nrc_state_region"
                                                           class="form-control" disabled>
                                                </div>
                                                <div class="col-md-3 col-7 px-1">
                                                  <input type="text" placeholder="" id="nrc_township" name="nrc_township"
                                                         class="form-control" disabled>
                                                </div>
                                                <div class="col-md-2 col-5 px-1">
                                                  <input type="text" placeholder="" id="nrc_citizen" name="nrc_citizen"
                                                         class="form-control" disabled>
                                                </div>

                                                <div class="col-md-5 col-7 pl-1">
                                                  <input type="text" placeholder="" id="nrc_number" name="nrc_number"
                                                         class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-10">
                                          {{--<div class="row">
                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                          value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" required>
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                          value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" required>
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>
                                          </div>--}}
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" id="father_name_mm" name="father_name_mm"
                                                   class="form-control" required="" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" id="father_name_eng" name="father_name_eng"
                                                   class="form-control" required="" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right" >လူမျိုး</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လူမျိုး" id="race" name="race" class="form-control"
                                                   value="{{ old('race') }}" required="" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" id="religion" name="religion"
                                                   class="form-control" value="{{ old('religion') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                        <div class="col-md-8">
                                            <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                   placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" disabled required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ဖုန်းနံပါတ်" id="phone" name="phone"
                                                   class="form-control" value="{{ old('phone') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="နေရပ်လိပ်စာ" id="address" name="address"
                                                   class="form-control" value="{{ old('address') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" id="current_address" name="current_address"
                                                   class="form-control" disabled value="{{ old('current_address') }}"
                                                   required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" id="name" name="name"
                                                   class="form-control" value="{{ old('name') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ရာထူး" id="position" disabled name="position" class="form-control"
                                                   value="{{ old('position') }}" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ဌာန" id="department" name="department" class="form-control"
                                                   value="{{ old('department') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">အဖွဲ့အစည်း</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="အဖွဲ့အစည်း" id="organization" name="organization"
                                                   class="form-control" value="{{ old('organization') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ကုမ္ပဏီအမည်" id="company_name" name="company_name"
                                                   class="form-control" value="{{ old('company_name') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လစာနှင့်လစာနှုန်း" id="salary" name="salary"
                                                   class="form-control" value="{{ old('salary') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                         <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ရုံးလိပ်စာ" id="office_address" name="office_address"
                                                   class="form-control" value="{{ old('office_address') }}" disabled required="">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label">{{ __('၁၇။') }}</label>
                                        <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                        <div class="col-md-2 pt-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio"
                                                                                 class="form-check-input mr-3" id="yes"
                                                                                 name="gov_staff" value="1"
                                                                                 style="margin-left: 3%;" disabled required onclick="selectStaff()">
                                                    </div>
                                                    <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pt-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio"
                                                                                 class="form-check-input mr-3" id="no"
                                                                                 name="gov_staff" disabled value="0"
                                                                                 style="margin-left: 3%;" required onclick="selectStaff()">
                                                    </div>
                                                    <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                        <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                            ရွေးချယ်ပါ
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row mt-4">
                                        <div class="col-md-3 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100" id="mac_submit">{{ __('Submit') }}</button>
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
<form method="post" class="needs-validation" action="javascript:createAAMacRegister();" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="macModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">AA (MAC) Form Fee - ****** MMK</h4>
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
                                        data-value="CASH" name="payment_method" id="cash_img_mac">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="aa_mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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
    loadCheckServiceMAC();
    loadMentorMAC();

    get_student_info(student_id).then(data => {
        if(data){
            var info = data.data;
            var job_history = data.data.student_job;
            if(info){
              $("#aa_mac_form").find("input[name=name_mm]").val(info.name_mm);
              $("#aa_mac_form").find("input[name=name_eng]").val(info.name_eng);
              $("#aa_mac_form").find("input[name=nrc_state_region]").val(info.nrc_state_region);
              $("#aa_mac_form").find("input[name=nrc_township]").val(info.nrc_township);
              $("#aa_mac_form").find("input[name=nrc_citizen]").val(info.nrc_citizen);
              $("#aa_mac_form").find("input[name=nrc_number]").val(info.nrc_number);
              $("#aa_mac_form").find("input[name=father_name_mm]").val(info.father_name_mm);
              $("#aa_mac_form").find("input[name=father_name_eng]").val(info.father_name_eng);
              $("#aa_mac_form").find("input[name=race]").val(info.race);
              $("#aa_mac_form").find("input[name=religion]").val(info.religion);
              $("#aa_mac_form").find("input[name=date_of_birth]").val(info.date_of_birth);
              $("#aa_mac_form").find("input[name=phone]").val(info.phone);
              $("#aa_mac_form").find("input[name=address]").val(info.address);
              $("#aa_mac_form").find("input[name=current_address]").val(info.current_address);
              document.getElementById('previewImg').src = BASE_URL + data.data.image;
            }

            if(job_history){
              $("#aa_mac_form").find("input[name=name]").val(job_history.company_name);
              $("#aa_mac_form").find("input[name=position]").val(job_history.position);
              $("#aa_mac_form").find("input[name=department]").val(job_history.department);
              $("#aa_mac_form").find("input[name=organization]").val(job_history.organization);
              //$(".da_to_cpa").find("input[name=address]").val(job_history.address);
              //$(".da_to_cpa").find("input[name=current_address]").val(job_history.current_address);
              $("#aa_mac_form").find("input[name=company_name]").val(job_history.company_name);
              $("#aa_mac_form").find("input[name=salary]").val(job_history.salary);
              $("#aa_mac_form").find("input[name=office_address]").val(job_history.office_address);
            }
            // government staff OR not
            if(info.gov_staff == 1){
              $("#aa_mac_form").find("input[name=gov_staff][value=1]").prop("checked",true);
            }
            else{
              $("#aa_mac_form").find("input[name=gov_staff][value=0]").prop("checked",true);
            }
          }

          //$("#aa_mac_form").find("input").prop('disabled',true);
    })

</script>
<script>
    $( "#mac_submit" ).click(function() {
        if(allFilled('#aa_mac_form')){
            $('#macModal').modal('show');
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
    $('#aa_mac_btn').click(function () {
        setTimeout(function () {
            $('#macModal').modal('hide');
        }, 1000);
    });

    $('#cash_img_mac').click(function() {
        $('#aa_mac_btn').prop('disabled', false);
    });

    $('#aa_mac_btn').prop('disabled', true);
</script>
@endpush
