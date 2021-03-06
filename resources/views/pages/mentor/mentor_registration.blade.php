@php
    $nrc_language = config('myanmarnrc.language');
    $nrc_regions = config('myanmarnrc.regions_states');
    $nrc_townships = config('myanmarnrc.townships');
    $nrc_citizens = config('myanmarnrc.citizens');
    $nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')
@section('content')
<style>
    .form-group{
        margin-bottom: 1rem;
    }
    .list {
        max-height: 350px;
        overflow-y: auto !important;
    }
</style>
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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Mentor Registration  <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">

            </div>--}}
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">

            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">--}}

        </div>
        <div class="container" style="overflow: hidden;">

          <div class="blog-details-comment">
              <div class="comment-form">
                  <!-- Form Wrapper Start -->
                  <div class="form-wrapper">

                      <form method="post" id="mentor_register_form"  action="javascript:void();"
                            enctype="multipart/form-data" novalidate>
                          @csrf
                          <div class="row">
                              <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                  <div class="row mb-5">
                                      <h5 class="card-title text-center fw-bolder">
                                          ??????????????????????????????????????????????????????????????????????????????<br><br>
                                          ?????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????<br><br>
                                          (Professional Accountant in Public Practice - PAPP)??????????????????????????????????????????
                                      </h5>
                                      {{--<div class="d-flex justify-content-between">
                                          <h6>?????????????????? - {{ __("dd-mm-yyyy") }}</h6>
                                          <h6>???????????????????????? - {{ __("____") }}</h6>
                                      </div>--}}
                                  </div>

                                  <div class="row">

                                    <div class="col-md-8">
                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <input type="email" placeholder="????????????????????????????????????????????????????????????" name="email" class="form-control" id="email">
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <input type="password" placeholder="??????????????????????????????????????????????????????????????????" name="password" class="form-control" id="password">
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <input type="password" placeholder="????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????" name="confirm_password" class="form-control" id="confirm_password">
                                            </div>
                                        </div>
                                    </div>

                                      <div class="col-md-4 text-center">
                                          {{--User Photo--}}
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail img-circle shadow">
                                                  <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="previewImg"
                                                        alt="Upload Photo">
                                              </div>
                                              <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                              <div class="d-flex justify-content-center">
                                                  <span class="btn btn-round btn-secondary btn-file">
                                                  <span class="fileinput-new">?????????????????????</span>
                                                  <span class="fileinput-exists">Change</span>
                                                  <input type="file" id="profile_photo" name="profile_photo" accept="image/*"></span>
                                                  <br>
                                                  <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                              </div>
                                          </div>
                                          {{--User Photo--}}
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" placeholder="????????????(??????????????????)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" placeholder="????????????(???????????????????????????)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" placeholder="??????????????????(??????????????????)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" placeholder="??????????????????(???????????????????????????)" name="father_name_eng" id="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????/????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" placeholder="?????????????????????" name="race" id="race" class="form-control" value="{{ old('race') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" placeholder="????????????????????????????????????????????????" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                              <div class="col-md-2 col-5 pr-1">
                                                  <select class="form-control" name="nrc_state_region"
                                                          id="nrc_state_region"
                                                          style="margin-top: 0px; margin-bottom: 0px;">
                                                      <option value="" disabled selected>??????????????????</option>
                                                      @foreach($nrc_regions as $region)
                                                          <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                              {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                          </option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                              <div class="col-md-3 col-7 px-1">
                                                  <select class="form-control" name="nrc_township" id="nrc_township"
                                                          style="margin-top: 0px; margin-bottom: 0px;">
                                                      <option value="" disabled selected>??????????????????</option>
                                                      @foreach($nrc_townships as $township)
                                                          <option value="{{ $township['township_mm'] }}">
                                                              {{ $township['township_mm'] }}
                                                          </option>
                                                      @endforeach
                                                  </select>
                                                  </select>
                                              </div>
                                              <div class="col-md-2 col-5 px-1">
                                                  <select class="form-control" name="nrc_citizen" id="nrc_citizen"
                                                          style="margin-top: 0px; margin-bottom: 0px;">
                                                      <option value="" disabled selected>??????????????????</option>
                                                      @foreach($nrc_citizens as $citizen)
                                                          <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                              {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                          </option>
                                                      @endforeach
                                                  </select>
                                              </div>

                                              <div class="col-md-5 col-7 pl-1">
                                                  <input type="text" name="nrc_number" placeholder="??????????????????"
                                                          id="nrc_number" pattern=".{6,6}" class="form-control"
                                                          oninput="this.value= en2mm(this.value);"
                                                          maxlength="6" minlength="6" placeholder=""
                                                          style="height: 38px" value="{{ old('nrc_number') }}">
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <div class="col-md-6 text-center">
                                          <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail shadow">
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCFrontImg" alt="Upload Photo">
                                              </div>
                                              <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                              <div>
                                                  <span class="btn btn-secondary btn-round btn-file">
                                                      <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(???????????????)</span>
                                                      <span class="fileinput-exists">Change</span>
                                                      <input type="hidden" value="">
                                                      <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*">
                                                  </span>
                                                  <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                              </div>
                                              <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                          </div>
                                      </div>

                                      <div class="col-md-6 text-center">
                                          <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail shadow">
                                                  <img src="{{ asset('assets/images/image_placeholder.png') }}" id="previewNRCBackImg"
                                                        alt="Upload Photo">
                                              </div>
                                              <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                              <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                        <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*">
                                                    </span>
                                                  <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                              </div>
                                              <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" name="education" id="education" class="form-control" placeholder="???????????????????????????????????????">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>RA/CPA ????????????????????????????????????????????????/?????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_success_year" id="ra_cpa_success_year" class="form-control" placeholder="RA/CPA ????????????????????????????????????????????????">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="ra_cpa_personal_no" id="ra_cpa_personal_no" class="form-control" placeholder="?????????????????????????????????????????????">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>CPA ?????????????????????????????????????????????/??????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_no" id="cpa_reg_no" class="form-control" placeholder="CPA ?????????????????????????????????????????????">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="cpa_reg_date" id="cpa_reg_date" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)" autocomplete='off'>
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>PAPP ?????????????????????????????????????????????/??????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="papp_reg_no" id="papp_reg_no" class="form-control" placeholder="PAPP ?????????????????????????????????????????????">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="papp_reg_date" id="papp_reg_date" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                      <div class="col-md-9">
                                        <input type="file" class="form-control" id="papp_attachment" name="papp_attachment">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <textarea placeholder="????????????????????????????????????????????????" name="address" id="address" class="form-control" rows="3" style="resize:none;" ></textarea>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Phone Number/Fax Number</label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone Number">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="fax_no" id="fax_no" class="form-control" placeholder="FAX Number">
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Contact Email<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="email" placeholder="Contact Email" name="m_email" id="m_email" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>Audit Firm ????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="Audit Firm ????????????" name="audit_firm_name" id="audit_firm_name" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                          <input type="text" placeholder="??????????????????????????????(DD-MMM-YYYY)" name="audit_started_date" id="audit_started_date" class="form-control" >
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>Audit Firm ??????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="number" name="audit_structure" id="audit_structure" class="form-control"  placeholder="0" value="{{ old('audit_structure') }}" >
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="audit_staff_no" id="audit_staff_no" class="form-control" placeholder="0" value="{{ old('audit_staff_no') }}" >
                                          </div>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                      <div class="col-md-9">
                                        <div class="form-group">
                                            <select name="current_check_service_id[]" id="selected_service_id"
                                                class="form-control form-select" multiple="multiple"
                                                style="width:100%">
                                            </select>
                                        </div>
                                      </div>
                                  </div>
                                  
                                  <div id="check_service_other" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" id="other_service" name="current_check_services_other" class="form-control" placeholder="other" >
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>(Pdf file ????????????????????????)</label>
                                      <div class="col-md-9">
                                        <input type="file" class="form-control" id="attachment_file" name="attachment_file">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????? ?????????/????????????<span style="color:red">*</span></label>
                                      <div class="col-md-4">
                                          <div class="form-check">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="1" id="experience_yes" name="experience" >
                                                      <label class="form-check-label " for="">?????????</label>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <input type="radio" class="form-check-input mr-3" value="0" id="experience_no" name="experience" >
                                                      <label class="form-check-label " for="">????????????</label>
                                                  </div>
                                                  <label  class="error attend_place_error" style="display:none;" for="experience">Please select one</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div id="started_teaching" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>?????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? ???????????????????????????????????????????????????</label>
                                      <div class="col-md-9">
                                          <input type="text"  name="started_teaching_year" placeholder="??????????????????????????????(DD-MMM-YYYY)" class="form-control" value="{{ old('started_teaching_year') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="internship_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                      <div class="col-md-9">
                                          <input type="number" name="internship_accept_no" class="form-control" placeholder="0" value="{{ old('internship_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="current_accept" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>???????????????????????????????????????????????????????????????????????? ????????????????????????????????????</label>
                                      <div class="col-md-9">
                                          <input type="number" name="current_accept_no" class="form-control" placeholder="0" value="{{ old('current_accept_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="trained_trainees" style="display:none;">
                                    <div class="row mb-3">
                                      <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>?????????????????????????????????????????????????????? ????????????????????????????????????</label>
                                      <div class="col-md-9">
                                          <input type="number" name="trained_trainees_no" class="form-control" placeholder="0" value="{{ old('trained_trainees_no') }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div id="repeat_yearly" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????/????????????</label>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="yes" value="1" name="repeat_yearly" >
                                                        <label class="form-check-label " for="">?????????</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="no" value="0" name="repeat_yearly" >
                                                        <label class="form-check-label " for="">????????????</label>
                                                        <!-- <div class="invalid-feedback">???????????????????????????????????????????????????????????????????????????????????????????????? ?????????/???????????? ??????????????????????????????</div> -->
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="repeat_yearly">Please select one</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div id="training_absent" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????? ?????????/????????????</label>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="training_absent_yes" value="1" name="training_absent" >
                                                        <label class="form-check-label " for="">?????????</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="form-check-input mr-3" id="training_absent_no" value="0" name="training_absent" >
                                                        <label class="form-check-label " for="">????????????</label>
                                                        <!-- <div class="invalid-feedback">???????????????????????????????????????????????????????????????????????????????????????????????? ?????????/???????????? ??????????????????????????????</div> -->
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="training_absent">Please select one</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div id="absent_reason" style="display:none;">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>?????????????????? ??????????????????????????????????????????????????? ???????????????????????????????????????</label>
                                        <div class="col-md-9">
                                          <textarea class="form-control" name="training_absent_reason" id="exampleFormControlTextarea1" rows="3" style="resize:none;"></textarea>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                      <div class="form-check">
                                          <label class="form-check-label">
                                              <input class="form-check-input" type="checkbox" name="confirm_129">
                                              <span class="form-check-sign"></span>
                                              <p class="fw-bolder">
                                                  * <a href="https://demo.aggademo.me/MAC/public/storage/article/129.pdf" target="_blank">???????????????????????????????????????????????? (?????????) </a> ?????????????????????????????????????????????????????????????????????<br>
                                              </p>
                                          </label><br>
                                          <label  class="error attend_place_error" style="display:none;" for="confirm_129">Please check one</label>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="mentor_declare" onchange="$('#submit_btn').prop('disabled', !this.checked)">
                                            <span class="form-check-sign"></span>
                                            <p class="fw-bolder">
                                                * ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                            </p>
                                        </label>

                                    </div>
                                  </div>

                                  <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                                  <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >
                                  <input type="hidden" id="student_info_id" name="student_info_id">

                                  <div class="row justify-content-center">
                                    <button type="submit" id="submit_btn" class="btn btn-success btn-hover-dark w-25" disabled>
                                        Submit
                                    </button>
                                  </div>

                                </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <!-- Form Wrapper End -->
              </div>
              <br><br>
          </div>
<!-- Modal -->
<form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="modal fade" id="mentorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Email Verificatoin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center><br>
                                <div class="mb-3" style="text-align:center;">
                                    <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                                    <label>We have been sent verification code on your email.Please check your email.</label>
                                </div><br>
                                <div class="mb-3" style="text-align:center;">
                                    <label style="margin-bottom: 2%;">Enter your verification code</label>
                                    <center><input type="text" class="form-control w-50" name="verify_code" placeholder="Enter Verification Code"></center>
                                </div>
                            </div>
                            <center>
                                <button type="submit" id="btn1" onclick="check_email_mentor()" class="btn btn-success btn-hover-dark w-30">Verify
                                </button>
                            </center><br>
                            <div class="col-md-12" style="text-align:center;">
                                <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                            </div><br><br>
                        </div>
                    </div>
                </div>
            </form>
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
<script>
    //loadService();
</script>
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/mentor_register.js')}}"></script>
<!-- <script src="{{asset('assets/js/profile_photo.js')}}"></script> -->
<script src="{{ asset("js/form_validation/mentor_validation.js") }}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
      $('#selected_service_id').select2({
        placeholder: "Select Current Service"
      });

      $("input[name=training_absent]").on("click", function(evt) {
        var checkedValue = $("input[name='training_absent']:checked").val();
        if(checkedValue == '1'){
          $("#absent_reason").css('display','block');
        //   $("#absent_reason").find("textarea").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#absent_reason").css('display','none');
        //   $("#absent_reason").find("textarea").prop('required',false);
        }
      });

      $("input[name=experience]").on("click", function(evt) {
        var checkedValue = $("input[name='experience']:checked").val();
        if(checkedValue == '1'){
          $("#started_teaching,#internship_accept,#current_accept,#trained_trainees,#repeat_yearly,#training_absent").css('display','block');
        //   $("#started_teaching").find("input").prop('required',true);
        //   $("#internship_accept").find("input").prop('required',true);
        //   $("#current_accept").find("input").prop('required',true);
        //   $("#trained_trainees").find("input").prop('required',true);
        //   $("#repeat_yearly").find("input").prop('required',true);
        //   $("#training_absent").find("input").prop('required',true);
        }
        else if(checkedValue == '0'){
          $("#internship_accept,#repeat_yearly").css('display','block');
          $("#started_teaching,#trained_trainees,#current_accept,#training_absent,#absent_reason").css('display','none');
        //   $("input[name='training_absent']").prop('checked',false);
        //   $("#started_teaching").find("input").prop('required',false);
        //   $("#internship_accept").find("input").prop('required',false);
        //   $("#current_accept").find("input").prop('required',false);
        //   $("#trained_trainees").find("input").prop('required',false);
        //   $("#repeat_yearly").find("input").prop('required',false);
        //   $("#training_absent").find("input").prop('required',false);
        }
      });

    //   $("#selected_service_id").change(function(){
    //     console.log($(this));
    //     checkOtherService($(this));
    //   });

      $("#selected_service_id").on("select2:select select2:unselect", function (e) {

        var items= $(this).val();
        for (var i = 0; i <= items.length-1; i++) {
            if(items[i] == 10){
                $("#check_service_other").show();
            }
        }

      })

      $("input[name='cpa_reg_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='papp_reg_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='audit_started_date']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });
      $("input[name='started_teaching_year']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });

      $("input[name='date_of_birth']").flatpickr({
              enableTime: false,
              dateFormat: "d-M-Y",
              allowInput: true
      });

      $("input[id*='nrc_number'], text[id*='nrc_number']").change(function(e) {
          myanmarLetterOnly($(this));
      });

      $(document).on('keydown', '#nrc_number', function () {
          myanmarLetterOnly($(this));
      });

      $("input[id*='name_mm'], text[id*='name_mm']").change(function(e) {
          myanmarLetterOnly($(this));
      });

      $(document).on('keydown', '#name_mm', function () {
          myanmarLetterOnly($(this));
      });

      $("input[id*='father_name_mm'], text[id*='father_name_mm']").change(function(e) {
          myanmarLetterOnly($(this));
      });

      $(document).on('keydown', '#father_name_mm', function () {
          myanmarLetterOnly($(this));
      });

      //same email 
      get_student_info(student_id).then(data => {
        let student_info = data.data;
        let result;
        if(data.data?.teacher){
          result = data.data.teacher;
        }else if(data.data?.school){
          result = data.data.school;
        }
        if(result!=null){
          $('#student_info_id').val(student_info.id);
          $('#email').val(result.email);
          $('#name_mm').val(result.name_mm);
          $("#name_eng").val(result.name_eng);
          $("#nrc_state_region").val(result.nrc_state_region);
          $("#nrc_township").val(result.nrc_township);
          $("#nrc_citizen").val(result.nrc_citizen);
          $("#nrc_number").val(result.nrc_number);
          $("#father_name_mm").val(result.father_name_mm);
          $("#father_name_eng").val(result.father_name_eng);
          $("#race").val(result.race);
          $("#religion").val(result.religion);
          $("#date_of_birth").val(result.date_of_birth);
          $("#education").val(student_info.student_education_histroy.degree_name);
          $("#address").val(result.address);
          $("#phone_no").val(result.phone);
        }
          
        
        // $('#email').prop('readonly', true);
        // $('#password').prop('readonly', true);
        // //$('#confirm_password').prop('readonly', true);
        // $('#name_mm').prop('readonly', true);
        // $('#name_eng').prop('readonly', true);
        // $('#father_name_mm').prop('readonly', true);
        // $('#father_name_eng').prop('readonly', true);
        // $('#race').prop('readonly', true);
        // $('#religion').prop('readonly', true);
        // $('#nrc_state_region').prop('readonly', true);
        // $('#nrc_township').prop('readonly', true);
        // $('#nrc_citizen').prop('readonly', true);
        // $('#nrc_number').prop('readonly', true);
        // $('#date_of_birth').prop('readonly', true);
        // $('#education').prop('readonly', true);

        // document.getElementById('previewImg').src = BASE_URL + result.image;
        // document.getElementById('previewNRCFrontImg').src = BASE_URL + result.nrc_front;
        // document.getElementById('previewNRCBackImg').src = BASE_URL + result.nrc_back;

    });

    });

    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }

    // function checkOtherService(option){
    //   var selected_id = $(option).val();
    //   if(selected_id == 9){
    //     $(".check-service-other").css('visibility','visible');
    //   }
    //   else{
    //     $(".check-service-other").css('visibility','hidden');
    //   }
    // }
    loadService();
</script>
@endpush
