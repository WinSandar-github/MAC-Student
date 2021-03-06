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
        <div class="overlay"></div>
        <div class="section page-banner">
            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">--}}
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA Two Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>
            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">
            </div>--}}
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">
            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">--}}
        </div>
        <div class="section">
            <div class="container">
                

                <div class="comment-form study">
                    <input type="hidden" name="form_type" id="form_type">
                    <div class="form-wrapper">
                        <div class="___class_+?36___">                            

                            <div class="row" id="self_study_container">
                                {{-- <form id="self_study_form" method="post" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"> --}}
                                <form method="post" id="da_two_selfstudy_form" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" class="batch_id" value="{{ $batch['id'] }}" />

                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                        <h5 class="card-title text-center my-1 fw-bolder">??????????????????????????????????????????????????????????????????????????????<br>
                                            ?????????????????????????????????????????????????????????(?????????????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</br>
                                            (??????????????????????????????????????????????????????????????????????????????????????????)</h5>

                                        <div class="card-body">

                                            <br />
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>

                                                <div class="row mt-0">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                        <h6>???????????????????????? - <span class="batch_name"></span></h6>
                                                        
                                                    </div>
                                                    <input type="hidden" class="batch_number" value="{{$batch['number']}}">
                                                    {{--<label class="col-md-3 col-form-label">???????????????????????? - ({{ $batch['id'] }})</label>
                                                    
                                                    <label class="col-md-7 col-form-label label">??????????????????????????????</label>
                                                    <div class="col-md-2">
                                                        <input type="text" name="mac_semester" id="self_academic_year" class="form-control" placeholder="??????????????????(YYYY)" autocomplete="off" >
                                                        <select class="form-control form-select"  name="mac_semester" id="self_academic_year"  placeholder="??????????????????(YYYY)" required>                                
                                                            <option value="" selected disabled>??????????????????????????????</option>    
                                                        <option value="0" selected>Student Application</option>
                                                            <option value="1">Student Registration</option>
                                                            <option value="2">Exam Registration</option>
                                                        </select>
                                                    </div>--}}
                                                </div>
                                                
                                                <div class="row mt-3">
                                                    <div class="col-md-8">
                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;" readonly >
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>?????????????????????/????????????????????????????????????????????????</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                            <div class="d-flex justify-content-center">
                                                                <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">?????????????????????</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_self" name="profile_photo_self" accept="image/*"></span>
                                                                <br>
                                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)</label>
                                                    <div class="row col-md-8 py-2">
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id="male_self"
                                                                        name="gender" value="Male" required>
                                                                <span class="form-check-sign"></span>
                                                                ????????????
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id='female_self'
                                                                        name="gender" value='Female' required>
                                                                <span class="form-check-sign"></span>
                                                                ???
                                                            </label>
                                                        </div>
                                                        
                                                        <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????</label>
                                                    <div class="col-md-4">
                                                        <select disabled name="degree_id"  class="form-control degree_id" >
                                                            
                                                        </select>    
                                                    </div>
                                                    <div class="col-md-4 other_degree_name" style="display:none;">
                                                        <input readonly type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????????????????????????????????????????" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="??????????????????????????????" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????????????????????????????" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_self"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="$('#rec_letter_self').show()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">????????????</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_self"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"   onclick="$('#rec_letter_self').hide()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">???????????????</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_self" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-center" style="padding-right:8px">(???)</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                        <div class="col-md-2 text-center"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-6"  id="degree_edu" >
                                                            <input type="file"  class="form-control" id="recommend_letter_self"  name="recommend_letter_self">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????? ?????????????????????????????????????????????</label>                                                        
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno"readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-8 col-form-label"><span class="pull-left" style="padding-right: 30px;">?????????</span>?????????????????????????????????????????????????????????(???????????????????????????)????????????????????????????????????????????????????????????????????????</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>??????????????????/???</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????<span style="color:red">*</span></label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="???????????????" id="da_one_pass_level_self" name="da_one_pass_level" class="form-control ">
                                                        </div>
                                                    </div>                                            
                                                </div>
                                                <div class="row mb-4">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????????????????????????????????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="personal_no_self" class="form-control personal_no_self"
                                                                placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_self">

                                                        </div>
                                                    </div>        
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label_align_right">
                                                        <span class="pull-left">?????????</span>?????????????????????????????????????????????????????????????????????????????????- </label>

                                                    <div class="row col-md-8 py-2">

                                                        <div class="form-check-radio">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    name="reg_reason[]" required="" value="????????????????????????????????????????????????????????????">
                                                                <span class="form-check-sign"></span>
                                                                (???) ????????????????????????????????????????????????????????????
                                                            </label>
                                                        </div>

                                                        <div class="form-check-radio">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    name="reg_reason[]" required="" value="??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????">
                                                                <span class="form-check-sign"></span>
                                                                (???) ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </label>
                                                        </div>

                                                        <div class="form-check-radio">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    name="reg_reason[]" required="" value="???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????">
                                                                <span class="form-check-sign"></span>
                                                                (???) ???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????
                                                            </label>
                                                        </div>

                                                        <div class="form-check-radio">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    name="reg_reason[]" required="" value="????????????????????????????????????????????????????????????">
                                                                <span class="form-check-sign"></span>
                                                                (???) ????????????????????????????????????????????????????????????
                                                            </label>
                                                        </div>

                                                        <div class="form-check-radio">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    name="reg_reason[]" required="" value="???????????????????????????????????????????????????????????????????????????">
                                                                <span class="form-check-sign"></span>
                                                                (???) ???????????????????????????????????????????????????????????????????????????
                                                            </label>
                                                        </div>
                                                        <label  class="error attend_place_error" name="attend_place_error" style="display:none;" for="reg_reason[]">Please select registration reason.</label>

                                                    </div>
                                                </div>

                                                {{--<div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????????????????????????????????????????</label>
                                                </div>

                                                    <div class="row">
                                                      <div class="col-md-1"></div>
                                                      <div class="col-md-1">
                                                          <label class="form-check-label">(???)</label>
                                                      </div>
                                                      <div class="col-md-1">
                                                          <input type="checkbox" value="????????????????????????????????????????????????????????????"
                                                              name="reg_reason[]">
                                                      </div>
                                                      <div class="col-md-9">
                                                          <label class="form-check-label">????????????????????????????????????????????????????????????</label>
                                                      </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(???)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox"
                                                                value="??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label
                                                                class="form-check-label">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(???)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label class="form-check-label">???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????</label>
                                                        </div>
                                                    </div><br />

                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(???)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="????????????????????????????????????????????????????????????"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9"><label>????????????????????????????????????????????????????????????</label></div>
                                                    </div><br />

                                                    <div class="row mb-4">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-1">
                                                            <label class="form-check-label">(???)</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="checkbox" value="???????????????????????????????????????????????????????????????????????????"
                                                                name="reg_reason[]">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label>???????????????????????????????????????????????????????????????????????????</label>
                                                        </div>
                                                    </div>--}}

                                                    <div class="row mb-3" style="display:none;">
                                                        <label class="col-md-1 col-form-label label">
                                                            <span class="pull-left">?????????</span>
                                                        </label>
                                                        <label class="col-md-3 col-form-label label">
                                                            <span class="pull-center" style="padding-right: 35px;">(???)</span>?????????????????????????????????????????????????????????
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="course_name" class="form-control course_name"
                                                                placeholder="?????????????????????" id="part_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" style="display:none;">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="batch_no" class="form-control batch_no"
                                                                placeholder="?????????????????????????????????????????????" value="{{ $batch['number'] }}" id="batch_no_self" readonly>

                                                        </div>
                                                    </div>

                                                    {{--<div class="row mb-4" style="display:none;">
                                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="personal_no_self" class="form-control personal_no_self"
                                                                placeholder="?????????????????????????????????????????????" id="personal_no_self">

                                                        </div>
                                                    </div>--}}                                                 

                                                <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">?????????</span>??????????????????????????????????????? Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required>
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio module_full">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>
                                                    <div class="row mb-5">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="da_two_self_reg_declare" onchange="$('#submit_btn_self').prop('disabled', !this.checked)">
                                                                    <span class="form-check-sign"></span>
                                                                    <p class="fw-bolder">
                                                                        * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                                        * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                                    </p>
                                                                </label>
                                                            </div>
                                                            {{--<h6 class="mt-4 pt-1">?????????????????? - {{ date('d-M-Y') }}</h6>--}}
                                                        </div>
                                                    </div>    

                                                    <div class="row justify-content-center">                                                      
                                                            <button  type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="submit_btn_self" >Submit</button>
                                                        </div>
                                                    </div>

                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>

                            <div class="row" id="private_school_container">
                                {{-- <form method="post" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"> --}}
                                <form method="post" id="da_two_private_form" action="javascript:void();" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="batch_id" class="batch_id" value="{{ $batch['id'] }}">

                                    <div class="card border-success mb-3"  style="padding:3% 5% 3% 5%;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center my-1 fw-bolder">?????????????????????????????????????????????????????????????????????????????? <br>
                                                ?????????????????????????????????????????????????????????(?????????????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</br> 
                                                (???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????)</h5>
                                            <br />
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 single-form">
                                                        <label class="coursename col-form-label"></label>
                                                    </div>
                                                    <div class="col-md-6 single-form"></div>
                                                    <div class="col-md-2 single-form">
                                                        <label class="batchname col-form-label"></label>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                        <h6>???????????????????????? - <span class="batch_name"></span></h6>
                                                    </div>
                                                    <input type="hidden" class="batch_number" value="{{$batch['number']}}">
                                                    {{--<label class="col-md-3 col-form-label"></label>
                                                    
                                                    <label class="col-md-7 col-form-label label">??????????????????????????????</label>
                                                    <div class="col-md-2">
                                                    <input type="text" placeholder="??????????????????(YYYY)" id="academic_year" name="academic_year" class="form-control" >
                                                    <select class="form-control form-select"  id="academic_year" name="academic_year" placeholder="??????????????????(YYYY)"  required>                                
                                                            <option value="" selected disabled>??????????????????????????????</option>
                                                            <option value="1">Student Registration</option>
                                                            <option value="2">Exam Registration</option>
                                                        </select>
                                                    </div>--}}
                                                </div>
                                                  <div class="row mt-2">
                                                        <div class="col-md-8">
                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left"></span>????????????????????????????????????????????????????????????????????????????????????</label>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control form-select"
                                                                            name="private_school_name" id="selected_school_id"
                                                                            style="width: 100%;">
                                                                            <option value="" disabled selected>Select School</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{--<div class="row mb-4">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left"></span>??????????????????????????????</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="??????????????????(YYYY)" id="academic_year" name="academic_year" class="form-control" >
                                                                </div>
                                                            </div>--}}
                                                            
                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>????????????(??????????????????/???????????????????????????)</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_mm" class="form-control" readonly="">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_eng" class="form-control" readonly="">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                                <div class="col-md-6">
                                                                    <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                        <div class="col-md-2">
                                                                            <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;" readonly>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                            <div class="d-flex justify-content-center">
                                                                <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">?????????????????????</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_private" name="profile_photo_private" accept="image/*"></span>
                                                                <br>
                                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                            </div>
                                                            
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)</label>
                                                    <div class="row col-md-8 py-2">
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id="male_private"
                                                                        name="gender" value="Male" required>
                                                                <span class="form-check-sign"></span>
                                                                ????????????
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id='female_private'
                                                                        name="gender" value='Female' required>
                                                                <span class="form-check-sign"></span>
                                                                ???
                                                            </label>
                                                        </div>
                                                        
                                                        <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                                    </div>
                                                </div>

                                                <div class="row  mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>?????????????????????/????????????????????????????????????????????????</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????</label>
                                                    <div class="col-md-4">
                                                        <select disabled name="degree_id"  class="form-control degree_id" >
                                                            
                                                        </select>    
                                                    </div>
                                                    <div class="col-md-4 other_degree_name" style="display:none;">
                                                        <input readonly type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????????????????????????????????????????" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="??????????????????????????????" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????????????????????????????" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_private"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;"  onclick="$('#rec_letter_private').show()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">????????????</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_private"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="$('#rec_letter_private').hide()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">???????????????</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_private" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-left"></span>
                                                            <span class="pull-center" style="padding-right:75px">(???)</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                        <div class="col-md-1"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-7"  id="degree_edu" >
                                                            <input type="file"  class="form-control" id="recommend_letter_private"  name="recommend_letter_private">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????? ?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-8 col-form-label"><span class="pull-left" style="padding-right: 30px;">?????????</span>?????????????????????????????????????????????????????????(???????????????????????????)????????????????????????????????????????????????????????????????????????</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>??????????????????/???</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????<span style="color:red">*</span></label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="???????????????" id="da_one_pass_level_private" name="da_one_pass_level" class="form-control year">
                                                        </div>
                                                    </div>                                            
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">(???)</span>???????????????????????????????????????????????????????????????????????????
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_private" class="form-control personal_no_private"
                                                            placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_private">
                                                    </div>
                                                </div>

                                                <div class="row mb-3"  style="display:none">
                                                <label class="col-md-1 col-form-label label">
                                                    <span class="pull-left">?????????</span>
                                                </label>
                                                <label class="col-md-3 col-form-label label">
                                                    <span class="pull-center" style="padding-right: 35px;">(???)</span>?????????????????????????????????????????????????????????
                                                </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="course_name" class="form-control course_name"
                                                            placeholder="?????????????????????" id="part_no_private" readonly>

                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">(???)</span>?????????????????????????????????????????????
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="batch_no_private" class="form-control batch_no"
                                                            placeholder="?????????????????????????????????????????????" id="batch_no_private" value="{{ $batch['number'] }}" readonly>
                                                    </div>
                                                </div>

                                                {{--<div class="row mb-4" style="display:none">
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">(???)</span>?????????????????????????????????????????????
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_private" class="form-control personal_no_private"
                                                            placeholder="?????????????????????????????????????????????" id="personal_no_private">
                                                    </div>
                                                </div>--}}
                                                <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">?????????</span>??????????????????????????????????????? Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required>
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_full" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>
                                                <div class="row mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" name="da_two_private_reg_declare" type="checkbox" onchange="$('#da_two_private_submit').prop('disabled', !this.checked)">
                                                                <span class="form-check-sign"></span>
                                                                <p class="fw-bolder">
                                                                    * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                                    * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                                </p>
                                                            </label>
                                                        </div>
                                                        {{--<h6 class="mt-4 pt-1">?????????????????? - {{ date('d-M-Y') }}</h6>--}}
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">                                                       
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="da_two_private_submit" >Submit
                                                        </button>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="row" id="mac_container">

                                <form method="post" id="da_two_mac_form" action="javascript:void();" enctype="multipart/form-data">
                                    <input type="hidden" name="batch_id" class="batch_id" value="{{ $batch['id'] }}" />
                                    <div class="card border-success mb-3 " style="padding:3% 5% 3% 5%;">
                                        <div class="card-body">
                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder"> ??????????????????????????????????????????????????????????????????????????????<br>
                                                ?????????????????????????????????????????????????????????(?????????????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h5>                                                
                                            
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row mt-3">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                        <h6>???????????????????????? - <span class="batch_name"></span></h6>
                                                    </div>
                                                    <input type="hidden" class="batch_number" value="{{$batch['number']}}">
                                                    {{--<label class="col-md-3 col-form-label">???????????????????????? - ({{ $batch['id'] }})</label>
                                                    
                                                    <label class="col-md-7 col-form-label label">??????????????????????????????</label>
                                                    <div class="col-md-2">
                                                        <!-- <select name="mac_semester" id="mac_academic_year" class="form-control" placeholder="??????????????????(YYYY)" autocomplete="off" required> -->
                                                        
                                                        <select class="form-control form-select" name="mac_semester" id="mac_academic_year" required>                                
                                                            <option value="" selected disabled>??????????????????????????????</option>    
                                                            <option value="0" selected>Student Application</option>
                                                            <option value="1">Student Registration</option>
                                                            <option value="2">Exam Registration</option>
                                                        </select>
                                                    </div>--}}
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-8">
                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;" readonly>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="row  mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span>?????????????????????/????????????????????????????????????????????????</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 text-center">

                                                        {{--User Photo--}}
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                                <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                    alt="Upload Photo" class="profile_image">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                            <div class="d-flex justify-content-center">
                                                                <span class="btn btn-round btn-secondary btn-file">
                                                                <span class="fileinput-new">?????????????????????</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" id="profile_photo_mac" name="profile_photo_mac" accept="image/*"></span>
                                                                <br>
                                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                        {{--User Photo--}}
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)</label>
                                                    <div class="row col-md-8 py-2">
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id="male_mac"
                                                                        name="gender" value="Male" required>
                                                                <span class="form-check-sign"></span>
                                                                ????????????
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3 form-check-radio mx-2">
                                                            <label class="form-check-label">
                                                                <input disabled class="form-check-input" type="radio" id='female_mac'
                                                                        name="gender" value='Female' required>
                                                                <span class="form-check-sign"></span>
                                                                ???
                                                            </label>
                                                        </div>
                                                        
                                                        <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" class="form-control"
                                                            placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????</label>
                                                    <div class="col-md-4">
                                                        <select disabled name="degree_id"  class="form-control degree_id" >
                                                            
                                                        </select>    
                                                    </div>
                                                    <div class="col-md-4 other_degree_name" style="display:none;">
                                                        <input readonly type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????????????????????????????????????????" name="job_name"
                                                            class="form-control" value="{{ old('name') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????" name="position" class="form-control"
                                                            value="{{ old('position') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????" name="department" class="form-control"
                                                            value="{{ old('department') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="??????????????????????????????" name="office_address"
                                                            class="form-control" value="{{ old('office_address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????????????????????????????" name="current_address"
                                                            class="form-control" value="{{ old('current_address') }}"
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="address"
                                                            class="form-control" value="{{ old('address') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????" name="phone"
                                                            class="form-control" value="{{ old('phone') }}" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="yes_mac"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;" onclick="$('#rec_letter_mac').show()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">????????????</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input disabled type="radio"
                                                                                            class="form-check-input mr-3" id="no_mac"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;"  onclick="$('#rec_letter_mac').hide()">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">???????????????</label></div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="rec_letter_mac" style="display:none" >
                                                    <div class="row mb-3 "  >
                                                        <label class="col-md-4 col-form-label label">
                                                            <span class="pull-center" style="padding-right:8px">(???)</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                        <div class="col-md-2 text-center"  id="degree_edu" >
                                                            <span class="recommend_letter"></span>
                                                        </div>
                                                        <div class="col-md-6"  id="degree_edu" >
                                                            <input type="file"  class="form-control" id="recommend_letter_mac"  name="recommend_letter_mac">
                                                        </div>
                                                    </div>
                                                </div>
                                                    

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????? ?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" readonly
                                                            value="{{ $batch['name'] }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control sr_no" name="student_regno"
                                                            readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-8 col-form-label"><span class="pull-left" style="padding-right: 30px;">?????????</span>?????????????????????????????????????????????????????????(???????????????????????????)????????????????????????????????????????????????????????????????????????</label>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>??????????????????/???</label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                        <input type="text" class="form-control" name="exam_date" readonly>
                                                        </div>
                                                    </div>                                            
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????<span style="color:red">*</span></label>                                            
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <input type="text" placeholder="???????????????" id="da_one_pass_level_mac" name="da_one_pass_level" class="form-control year">
                                                        </div>
                                                    </div>                                            
                                                </div>
                                                <div class="row mb-4">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_mac" class="form-control personal_no_mac"
                                                            placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_mac">
                                                    </div>
                                                </div>
                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-1 col-form-label label">
                                                        <span class="pull-left">?????????</span> 
                                                    </label>
                                                    <label class="col-md-3 col-form-label label">
                                                        <span class="pull-center" style="padding-right: 35px;">(???)</span>?????????????????????????????????????????????????????????
                                                    </label>

                                                    <div class="col-md-8">
                                                        <input type="text" name="course_name" class="form-control course_name"
                                                            placeholder="?????????????????????????????????????????????????????????" id="part_no_mac" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="batch_no_mac" class="form-control batch_no"
                                                            placeholder="?????????????????????????????????????????????" value="{{ $batch['number'] }}" id="batch_no_mac" readonly>
                                                    </div>
                                                </div>

                                                {{--<div class="row mb-4" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no_mac" class="form-control personal_no_mac"
                                                            placeholder="?????????????????????????????????????????????" id="personal_no_mac">
                                                    </div>
                                                </div>--}}
                                                <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">?????????</span>??????????????????????????????????????? Module -</label>
                                                <div class="row col-md-8 py-2">
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_one" type="radio" id="0"
                                                                   name="is_full_module" value="1" required>
                                                            <span class="form-check-sign"></span>
                                                            Module 1
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_two" type="radio"
                                                                   name="is_full_module" value='2' required>
                                                            <span class="form-check-sign"></span>
                                                            Module 2
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input module_full" type="radio"
                                                                   name="is_full_module" value='3' required>
                                                            <span class="form-check-sign"></span>
                                                            All Modules
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                                </div>
                                            </div>

                                            <div class="row mb-3" id="mac_school" style="display:none">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????????????????<span style="color:red">*</span>-</label>
                                                <div class="row  col-md-8 checkbox-radios   py-2">
                                                    
                                                    <div class="col-md-5 form-check-radio">
                                                        <label class="form-check-label" for="sub_mac">
                                                        <input class="form-check-input" type="radio" id="sub_mac" name="mac_type" value='1'    >
                                                            <span class="form-check-sign"></span>
                                                            ???????????????????????????????????????????????????????????????
                                                        </label>

                                                    </div>
                                            
                                                    <div class="col-md-6  form-check-radio">
                                                        <label class="form-check-label" for="sub_mac2">
                                                        <input class="form-check-input" type="radio" id="sub_mac2" name="mac_type" value='2'    >
                                                            <span class="form-check-sign"></span>
                                                            ????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>
                                                    
                                                    <label  class="error attend_mac_error" style="display:none;" for="attend_place">Please select one</label>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="da_two_mac_reg_declare" onchange="$('#submit_btn_mac').prop('disabled', !this.checked)">
                                                            <span class="form-check-sign"></span>
                                                            <p class="fw-bolder">
                                                                * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                                * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </p>
                                                        </label>
                                                    </div>
                                                    {{--<h6 class="mt-4 pt-1">?????????????????? - {{ date('d-M-Y') }}</h6>--}}
                                                </div>
                                            </div>    

                                            <div class="row justify-content-center">                                                      
                                                    <button  type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="submit_btn_mac">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Feedback Text -->
            <!-- <div class="exam_feedback" style="display:none; margin-left: 7%; margin-right: 7%;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body exam_text">

                            </div>
                        </div>
                    </div> -->

            <!-- MAC -->
            {{--<form method="post" class="needs-validation" action="javascript:createDaTwoMac();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(MAC) Form Fee - ****** MMK</h4>
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
                                        <button type="submit" id="mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>--}}

            <!-- PRIVATE -->
            {{--<form method="post" class="needs-validation" action="javascript:createDaTwoPrivateSchool();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Private School) Form Fee - ****** MMK</h4>
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
                                        <button type="submit" id="private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>--}}


            <!-- SELF -->
        {{--<form method="post" class="needs-validation" action="javascript:createDaTwoSelfStudy();" enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <br>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <center>
                                        <h4 style="margin-bottom:5%;">Diploma in Accountancy Part Two Registeration(Self Study) Form Fee - ****** MMK</h4>
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
                                                 data-value="CASH" name="payment_method" id="cash_img_self">
                                        </center>
                                        <br>
                                    </div>
                                    <input type="hidden" name="payment_method" value="CASH">
                                    <center>
                                        <button type="submit" id="self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                                    </center>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </form>--}}


        </div><br /></br />
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
<script src="{{ asset('js/form_validation/da_two_reg_validation.js') }}"></script>
    <script type="text/javascript">
        $('document').ready(function() {
            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);
            $('#form_type').val(localStorage.getItem("course_id"));
            getDegree();
            selectedRegistration(urlParams.get("study_type"));

            $(".batch_name").append(number2mm($(".batch_number").val()));

            get_student_info(student_id).then(data => {

                let student_info = data.data;
                console.log("student_info",student_info)
                
                if(data)
                {
                    let current_stu_course = data.data.student_course_regs.slice(-1);
                    let last_exam = data.data.exam_registers.slice(-1);

                    // var mac_name = current_stu_course[0].mac_type == 2 ?   "(????????????????????????????????????????????????????????????????????????)" : "(???????????????????????????????????????????????????????????????)";
                    // $('#mac_type_name').text(mac_name);

                    $('input[type=radio][name=mac_type]').map((k, v) => {
                        return $(v).val() == current_stu_course[0].mac_type ? $(v).attr('checked', 'true') : '';
                    });

                    $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : 1);
                    $('.course_name').val("Diploma In Accountancy Part Two");
                    var reg_srno = current_stu_course[0].batch.number;
                    // $('#reg_srno').append(reg_srno+1)

                    $(".profile_image").attr("src",BASE_URL+student_info.image);
                    $("input[name='email']").val(student_info.email);
                    $("input[name='name_mm']").val(student_info.name_mm);
                    $("input[name='name_eng']").val(student_info.name_eng);

                    $(".nrc_state_region").val(student_info.nrc_state_region);
                    $(".nrc_township").val(student_info.nrc_township);
                    $(".nrc_citizen").val(student_info.nrc_citizen);
                    $(".nrc_number").val(student_info.nrc_number);
                    $(".nrc_front_image").attr("src",BASE_URL+student_info.nrc_front);
                    $(".nrc_back_image").attr("src",BASE_URL+student_info.nrc_back);

                    $("input[name='father_name_mm']").val(student_info.father_name_mm);
                    $("input[name='father_name_eng']").val(student_info.father_name_eng);
                    $("input[name='race']").val(student_info.race);
                    $("input[name='religion']").val(student_info.religion);
                    $("input[name='date_of_birth']").val(student_info.date_of_birth);

                    if(current_stu_course[0].mac_type == 1){
                        $("#sub_mac").prop("checked",true);
                    }else{
                        // console.log("Hello")
                        $("#sub_mac2").prop("checked",true);
                    }


                    let batch_id = localStorage.getItem('batch_id');
                    if( last_exam[0] && (( last_exam[0].batch_id == current_stu_course[0].batch_id )||(last_exam[0].batch_id != current_stu_course[0].batch_id && current_stu_course[0].offline_user==1)) && last_exam[0].pass_module !== 3 && last_exam[0].course.code=="da_2"){
                       
                        $.ajax({
                        type: "get",
                        url: BACKEND_URL+"/batch/"+batch_id,
                        contentType: false,
                        processData: false,
                        async:false,
                        success: function (res) {
                            // console.log('res',res)
                            $('#batch_name').text(res.data.name);
                            
                            $('.batch_no').val(res.data.number);
                            $('.batch_id').val(res.data.id);
                            $('.personal_no').val(data.data.personal_no);
                            $('#remain_module').val(last_exam[0].pass_module)

                            if(last_exam[0].pass_module == "1"){
                                 $(".module_two").prop("checked", true);
                              
                                $('.module_one').attr('disabled', true);
                                $('.module_full').attr('disabled', true);


                            }
                            else if(last_exam[0].pass_module == "2"){
                                $(".module_one").prop("checked", true);
                                $('.module_two').attr('disabled', true);
                                $('.module_full').attr('disabled', true);


 
                            }
                            else if(last_exam[0].pass_module == "3"){
                                $(".module_full").prop("checked", true);
                                 $('.module_two').attr('disabled', true);
                                $('.module_one').attr('disabled', true);                            

                                  
                            }else{
                                $(".module_one").prop("checked", false);
                                $('.module_two').attr('checked', false);
                                $('.module_full').attr('checked', false);

                                $(".module_one").prop("disabled", false);
                                $('.module_two').attr('disabled', false);
                                $('.module_full').attr('disabled', false);                                                    
                            }     

                            $("#da_one_pass_level_self").val(last_exam[0].passed_level);
                            $("#da_one_pass_level_private").val(last_exam[0].passed_level);
                            $("#da_one_pass_level_mac").val(last_exam[0].passed_level);

                            
                           

                            }
                        })   
                        
                        
                    }else{
                         $('.batch_no').val();                         
                         $('.batch_id').val();
                         $("#da_one_pass_level_self").val(last_exam[0].passed_level);
                         $("#da_one_pass_level_private").val(last_exam[0].passed_level);
                         $("#da_one_pass_level_mac").val(last_exam[0].passed_level);
                    }

                    let education = student_info.student_education_histroy;
                    // $("input[name='degree_name']").val(education.degree_name);
                    $(".degree_id").val(education.degree_id);
                    if(education.degree_id == 40){
                            
                        $("input[name=degree_name]").val(education.degree_name);
                        $('.other_degree_name').show();
                    }
                    let job = student_info.student_job;
                    $("input[name='job_name']").val(job.name);
                    $("input[name='position']").val(job.position);
                    $("input[name='department']").val(job.department);
                    // $("input[name='organization']").val(job.phone);
                    // $("input[name='company_name']").val(job.company_name);
                    // $("input[name='salary']").val(job.salary);
                    $("input[name='office_address']").val(job.office_address);
                    
                    if(student_info.gov_staff==0){
                        $("#no_mac").prop("checked",true);
                        $("#no_self").prop("checked",true);
                        $("#no_private").prop("checked",true);

                    }else{
                        $("#yes_mac").prop("checked",true);
                        $("#rec_letter_mac").css("display",'block');
                        $("#yes_self").prop("checked",true);
                        $("#rec_letter_self").css("display",'block');
                        $("#yes_private").prop("checked",true);
                        $("#rec_letter_private").css("display",'block');
                        if(student_info.recommend_letter!=null){
                            $(".recommend_letter").append("<a href='"+BASE_URL+student_info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                        }
                        

                    }

                    if (student_info.gender == "Male") {
                        $("#male_self").prop("checked", true);
                        $("#male_private").prop("checked", true);
                        $("#male_mac").prop("checked", true);
                    } else {
                        $("#female_self").prop("checked", true);
                        $("#female_private").prop("checked", true);
                        $("#female_mac").prop("checked", true);
                    }

                    $("input[name='phone']").val(student_info.phone);
                    $("input[name='address']").val(student_info.address);
                    $("input[name='current_address']").val(student_info.current_address);

                    $(".personal_no_self").val(student_info.personal_no);
                    $(".personal_no_private").val(student_info.personal_no);
                    $(".personal_no_mac").val(student_info.personal_no);
                    $("input[name='exam_date']").val(formatDate(data.data.exam_registers[0].updated_at));


                    if(data.data.exam_registers.length!=0){
                        $("input[name='office_address']").prop('readonly', false);
                        $("input[name='current_address']").prop('readonly', false);
                        $("input[name='address']").prop('readonly', false);
                        $("input[name='phone']").prop('readonly', false);
                        $("input[name='profile_photo_mac']").show();
                        $("input[name='profile_photo_self']").show();
                        $("input[name='profile_photo_private']").show();
                        $("input[name='recommend_letter_mac']").prop('disabled', false);
                        $("input[name='recommend_letter_self']").prop('disabled', false);
                        $("input[name='recommend_letter_private']").prop('disabled', false);
                        $("input[name='gov_staff']").prop('disabled', false);
                        $("#mac_school").show();
                        $("input[name='mac_type']").prop('disabled', false);
                    }
                    else{
                        $("input[name='office_address']").prop('readonly', true);
                        $("input[name='current_address']").prop('readonly', true);
                        $("input[name='address']").prop('readonly', true);
                        $("input[name='phone']").prop('readonly', true);
                        $("input[name='profile_photo_mac']").hide();
                        $("input[name='profile_photo_self']").hide();
                        $("input[name='profile_photo_private']").hide();
                        $("input[name='recommend_letter_mac']").prop('disabled', true);
                        $("input[name='recommend_letter_self']").prop('disabled', true);
                        $("input[name='recommend_letter_private']").prop('disabled', true);
                        $("input[name='gov_staff']").prop('disabled', true);
                        $("#mac_school").hide();
                        $("input[name='mac_type']").prop('disabled', true);
                    }
                }

            });

        })

        loadCourse();
        // reg_feedback();
        loadPrivateSchoolList();

        // var exam_date = localStorage.getItem("exam_date");
        // console.log(exam_date,"aa")
        // $("input[name='exam_date']").val(formatDate(exam_date));


        //MAC
        // $('#mac_btn').click(function () {
        //     setTimeout(function () {
        //         $('#exampleModal1').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_mac').click(function() {
        //     $('#mac_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function() {
        //     $('#mac_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function() {
        //     $('#mac_btn').prop('disabled', true);
        // });
        // $('#mac_btn').prop('disabled', true);

        // //Self Study
        // $('#self_btn').click(function () {
        //     setTimeout(function () {
        //         $('#exampleModal3').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_self').click(function() {
        //     $('#self_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function() {
        //     $('#self_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function() {
        //     $('#self_btn').prop('disabled', true);
        // });
        // $('#self_btn').prop('disabled', true);

        // //Private School
        // $('#private_btn').click(function () {
        //     setTimeout(function () {
        //         $('#exampleModal2').modal('hide');
        //     }, 1000);
        // });

        // $('#cash_img_private').click(function() {
        //     $('#private_btn').prop('disabled', false);
        // });

        // $('#cb_img').click(function() {
        //     $('#private_btn').prop('disabled', true);
        // });

        // $('#mpu_img').click(function() {
        //     $('#private_btn').prop('disabled', true);
        // });
        // $('#private_btn').prop('disabled', true);  
           
    </script>
    <script>
           
    var select_mac = document.getElementById("mac_academic_year");
    var year_mac=2010;
    var current_year_mac=new Date().getFullYear();
    var year_diff_mac=current_year_mac-year_mac;
    // for (let index = 0; index <= year_diff_mac; index++) {
    //     var option_mac = document.createElement('option');
    //     option_mac.text = year_mac+index;
    //     option_mac.value = year_mac+index;   
    //     select_mac.add(option_mac, 0);
    // }   
    
    var select_self = document.getElementById("self_academic_year");
    var year_self=2010;
    var current_year_self=new Date().getFullYear();
    var year_diff_self=current_year_self-year_self;
    // for (let index = 0; index <= year_diff_self; index++) {
    //     var option_self = document.createElement('option');
    //     option_self.text = year_self+index;
    //     option_self.value = year_self+index;    
    //     select_self.add(option_self, 0);
    // }   

    var select_private = document.getElementById("academic_year");
    var year_private=2010;
    var current_year_private=new Date().getFullYear();
    var year_diff_private=current_year_private-year_private;
    // for (let index = 0; index <= year_diff_private; index++) {
    //     var option_private = document.createElement('option');
    //     option_private.text = year_private+index;
    //     option_private.value = year_private+index;    
    //     select_private.add(option_private, 0);
    // }   
    </script>
@endpush
