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

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA Application <span>Form</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment dir_cpa_app_form">
                <div class="comment-form">
                    <div class="form-wrapper">
                        <div class="row">
                        <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                            <div class="card-body">                                    
                                <div class="row mb-5">
                                    <h5 class="card-title text-center fw-bolder">
                                        ??????????????????????????????????????????????????????????????????????????????<br>
                                        ???????????????????????????????????????????????????????????????????????????(???????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????
                                    </h5>
                                    <div class="d-flex justify-content-between">
                                        <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                        <h6>???????????????????????? - <span class="batch_id"></span></h6>
                                    </div>
                                </div>


                                {{--<form method="Post" id="cpa_register" enctype="multipart/form-data" class="needs-validation" novalidate>--}}
                                <form method="Post" action="javascript:void();" id="cpa_one_form" enctype="multipart/form-data"  novalidate>
                                    @csrf
                                    <input type="hidden" id="entry_type" value="da_pass">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <div class="row mb-4">                                                    
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????<span style="color:red">*</span></label>
                                                    <div class="col-md-6">
                                                        <div class="">
                                                            <input type="email" placeholder="???????????????????????????????????????????????????????????????" name="email" class="form-control" value="{{ old('email') }}" required="">
                                                        </div>
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <input type="password" placeholder="?????????????????????????????????????????????????????????????????????" name="password" id="password" class="form-control" value="{{ old('password') }}" required="" minlength="8">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <input type="password" placeholder="????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????" name="confirm_password" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 text-center">
                                                {{--User Photo--}}
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-circle shadow">
                                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                    <div class="d-flex justify-content-center">
                                                        <span class="btn btn-round btn-secondary btn-file">
                                                        <span class="fileinput-new">?????????????????????</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" id="profile_photo" name="image" accept="image/*" required></span>
                                                        <br>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </div>
                                                {{--User Photo--}}
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)<span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="????????????(??????????????????)-???????????????????????????????????????" name="name_mm" class="form-control" id="name_mm" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="????????????(???????????????????????????)-???????????????????????????????????????" name="name_eng" class="form-control" value="{{ old('name_eng') }}" id="name_eng" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">                                            
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <div class="row mb-3">

                                                        <div class="col-md-2">
                                                          <div class="">
                                                            <select class="form-control form-select" name="nrc_state_region"
                                                                    id="nrc_state_region"
                                                                    style="margin-top: 0px; margin-bottom: 0px;line-height: 1.8">
                                                                <option value="" disabled selected>??????????????????</option>
                                                                @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                          <div class="">
                                                            <select class="form-control form-select" name="nrc_township" id="nrc_township"
                                                                    style="margin-top: 0px; margin-bottom: 0px;line-height: 1.8">
                                                                <option value="" disabled selected>??????????????????</option>
                                                                @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                        {{ $township['township_mm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                          <div class="">
                                                            <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen"
                                                                    style="margin-top: 0px; margin-bottom: 0px;line-height: 1.8">
                                                                <option value="" disabled selected>??????????????????</option>
                                                                @foreach($nrc_citizens as $citizen)
                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-5">
                                                          <div class="">
                                                            <input type="text" name="nrc_number" placeholder="??????????????????"
                                                                   id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                   oninput="this.value= en2mm(this.value);"
                                                                   maxlength="6" minlength="6" placeholder=""
                                                                   style="height: 38px;line-height: 1.8" value="{{ old('nrc_number') }}"
                                                                   required>
                                                          </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">                                            
                                            <div class="col-md-6 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                        <span class="btn btn-secondary btn-round btn-file">
                                                            <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(???????????????)</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="hidden" value="">
                                                            <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*" required>
                                                        </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 text-center">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img src="{{ asset('assets/images/image_placeholder.png') }}"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                        <span class="btn btn-secondary btn-round btn-file">
                                                            <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" required>
                                                        </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)<span style="color:red">*</span><span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="??????????????????(??????????????????)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="??????????????????(???????????????????????????)" name="father_name_eng" class="form-control" id="father_name_eng" value="{{ old('father_name_eng') }}" required="">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)<span style="color:red">*</span></label>
                                            <div class="row col-md-8 py-2">
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" id="male"
                                                                name="gender" value="Male" >
                                                        <span class="form-check-sign"></span>
                                                        ????????????
                                                    </label>
                                                </div>
                                                <div class="col-md-3 form-check-radio mx-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" id='female'
                                                                name="gender" value='Female' >
                                                        <span class="form-check-sign"></span>
                                                        ???
                                                    </label>
                                                </div>
                                                
                                                <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="?????????????????????" name="race" class="form-control" value="{{ old('race') }}"  id="race">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="???????????????????????????????????? ????????????" name="religion" class="form-control" value="{{ old('religion') }}"  id="religion">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" name="date_of_birth" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)"  id="date_of_birth"  >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="?????????????????????????????????" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">                                            
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="????????????????????????????????????????????????" name="address" class="form-control" value="{{ old('address') }}"  id="address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="?????????????????????????????????????????????????????????" name="current_address" class="form-control" value="{{ old('current_address') }}"  id="current_address">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="registration_no" value="1">

                                        <input type="hidden" name="approve_reject_status">                                    

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="???????????????????????????????????????????????????" name="name" class="form-control" value="{{ old('name') }}"  id="name">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="???????????????" name="position" id="position" class="form-control" value="{{ old('position') }}" >
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="?????????" name="department" id="department" class="form-control" value="{{ old('department') }}" >
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="??????????????????????????????" id="organization" name="organization" class="form-control" value="{{ old('organization') }}" >
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="?????????????????????????????????" id="company_name" name="company_name" class="form-control" value="{{ old('company_name') }}">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="???????????????????????????????????????????????????" name="salary" id="salary" class="form-control" value="{{ old('salary') }}">
                                                </div>
                                            </div>
                                         </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" placeholder="??????????????????????????????" name="office_address" id="office_address" class="form-control" value="{{ old('office_address') }}" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????? ????????????/???????????????<span style="color:red">*</span></label>
                                            <div class="col-md-2 form-check pt-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" id="yes" class="form-check-input" value="1" name="gov_staff" onclick="selectStaff(1)"  style="margin-left: 3%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-check-label" for="">????????????</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 form-check pt-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" id="no" class="form-check-input" value="0" name="gov_staff" onclick="selectStaff(0)"  style="margin-left: 3%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-check-label" for="">???????????????</label>
                                                        <div class="invalid-feedback">????????????????????????????????????????????? ????????????/??????????????? ??????????????????????????????</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label  class="error attend_place_error" style="display:none; padding-left:332px; " for="gov_staff">Please select one</label>

                                        <div id="rec_letter" style="display:none" >
                                            <div class="row mb-3"  >
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                                <div class="col-md-8"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" >{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????-</label>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>????????????????????????</label>
                                            <div class="col-md-4">
                                                <select name="degree_id"  class="form-control degree_id" >
                                                    
                                                </select>
                                            <label  class="error degree_id_error" style="display:none;" for="degree_id">Please select one</label>

                                            </div>
                                            <div class="col-md-4" id="other_degree_name" style="display:none;">
                                                <input type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name" required >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>???????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????" name="university_name" class="form-control" value="{{ old('university_name') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????" name="roll_number" class="form-control" value="{{ old('roll_number') }}" >
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>??????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????(MMM-YYYY)" name="qualified_date" class="form-control"  >
                                            </div>
                                        </div>

                                        <div  id="edu" >
                                            <div class="row mb-3" id="edu0" >
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>Attached Certificate</label>
                                                <div class="col-md-7"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="certificate0"  name="certificate[]" >
                                                </div>
                                                <div class="col-md-1 text-left mt-1" id="add_div" >
                                                    <button type="button" class="btn btn-sm btn-success" id="add_btn" onclick="AddCPAEdu()" >
                                                        <i class="fa fa-plus" style="padding-right: 5px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????(?????????????????????????????????)???????????????????????????????????????????????????????????????????????? -<span style="color:red">*</span></label>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>??????????????????/???<span style="color:red">*</span></label>                                            
                                            <div class="col-md-8">
                                                <div class="">
                                                    <input type="text" placeholder="??????????????????" id="da_pass_date" name="da_pass_date" class="form-control year"  >
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????<span style="color:red">*</span></label>                                                
                                            <div class="col-md-8">                                                    
                                                    <input type="text" placeholder="?????????????????????????????????????????????" id="da_pass_roll_number" name="da_pass_roll_number" class="form-control  ">                                                
                                            </div>                                            
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>Attched Certificate<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="file" class="form-control" placeholder="upload photo" name="da_pass_certificate"   value="{{ old('da_pass_certificate') }}"  >
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" >?????????</span>?????????????????????????????????????????????????????????????????????????????? - <span style="color:red">*</span></label>

                                            <div class="col-md-8 mt-2">
                                                
                                                    <div class="row mb-3">
                                                        <div class="col-md-1">
                                                            <input type="radio" id="mac" class="form-check-input" value="2" name="attend_place" onclick="selectType()"   required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="mac">???????????????????????????????????????????????????????????????????????????????????????</label>
                                                        </div>
                                                    </div>

                                                    <div class="  col-md-12 mx-5" id="blk_mac" style="display:none">
                                                        <div class="mx-5 row  mb-3">
                                                            
                                                            <div class="col-md-6 form-check   ">
                                                                <input class="form-check-input" type="radio" id="sub_mac" name="mac_type" value='1'    >
                                                                <label class="form-check-label" for="sub_mac">
                                                                    <!-- <span class="form-check-sign"></span> -->
                                                                    ???????????????????????????????????????????????????????????????
                                                                </label>
                                                                
                                                            </div> 
                                                            <div class="col-md-6  form-check  ">
                                                                <input class="form-check-input" type="radio" id="sub_mac2" name="mac_type" value='2'    >
                                                                <label class="form-check-label" for="sub_mac2">
                                                                    <!-- <span class="form-check-sign"></span> -->
                                                                    ????????????????????????????????????????????????????????????????????????
                                                                </label>
                                                            </div>
                                                            <label  class="error attend_place_error" style="display:none;" for="mac_type">Please select one</label>

                                                        </div>
                                                
                                                    </div>
                                             
                                                    <div class="row mb-3">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="private" class="form-check-input" value="1" name="attend_place" onclick="selectType()"  required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="private">?????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <!-- <div class="invalid-feedback">????????????????????????????????????????????? ????????????/??????????????? ??????????????????????????????</div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="self" class="form-check-input" value="0" name="attend_place" onclick="selectType()"  required style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="self">??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <!-- <div class="invalid-feedback">????????????????????????????????????????????? ????????????/??????????????? ??????????????????????????????</div> -->
                                                        </div>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none; " for="attend_place">Please select one</label>
                                            </div>
                                        </div>       
                                        
                                             
                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" onchange="$('#cpa_one_submit').prop('disabled', !this.checked)">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                        * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                       
                                        <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-25" id="cpa_one_submit" disabled>{{ __('Submit') }}</button>
                                        </div>

                                        </div>

                                        
                                    </div>
                                </form>
                            </div>

                        </div>

                        </div>

                    </div>
                <!-- Form Wrapper Start -->

                <!-- Form Wrapper End -->
                </div><br><br>
            </div>


            



        </div>
    </div>
       <!-- Modal Payment -->
{{--<form id="payment_submit"  method="post"  class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div><br>
        <div class="modal-body">
            <div class="row justify-content-center mb-4 radio-group">
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" name="payment_method">
                    </div><br>
                    <h5>CBPay</h5>
                </div>
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" name="payment_method">
                    </div><br>
                    <h5>MPU</h5>
                </div>
                <div class="col-sm-3 col-5">
                    <div class='radio mx-auto'>
                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" name="payment_method">
                    </div><br>
                    <h5>CASH</h5>
                </div>
                <input type="hidden" name="payment_method" value="CASH">
            </div>
        </div><br>
        <div class="modal-footer">
            <center>
                <button type="submit" id="btn2" class="btn btn-success btn-hover-dark w-100" data-bs-toggle="modal">Submit
            </center>
        </div>
        </div>
    </div>
    </div>
</form>--}}
    <form method="post" class="needs-validation" id="store_da_two_form" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Exam Registeration Form Fee - ****** MMK</h4>
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
                                 <button type="submit" id="da1exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                             </center>
                         </div>
                     </div>
                     <br>
                 </div>
             </div>
         </div>
    </form>
    <!-- Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaEmailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <button type="submit" id="btn1" onclick="check_email_cpa()" class="btn btn-success btn-hover-dark w-30">Verify
                          </button>
                      </center><br>
                      <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                      </div><br><br>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal 2 -->
    <form method="post" class="needs-validation" id="cpa_register" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="cpaPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Application Form Fee - ****** MMK</h4>
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
                                         data-value="CASH" name="payment_method" id="cash_img_app">
                                </center>
                                <br>
                            </div>
                            <input type="hidden" name="payment_method" value="CASH">
                            <center>
                                <button type="submit" id="btn_cash" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>
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
<script src="{{ asset("js/form_validation/cpa_one_dapass_validation.js") }}"></script>

<script type="text/javascript">

    $(document).ready(function (e) {
        check_entry_pass()
        localStorage.removeItem('course_type');
        localStorage.removeItem('batch_id');
        direct_or_da();

        $('.degree_id').select2({
                placeholder: "Select Degree"
            });            
 
            getDegree();

        $("input[name='da_pass_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
        });
        $("input[name='degree_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
        });
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
        });
        $(".month").flatpickr({
                enableTime: false,
                 dateFormat: "M",

        });
        // $("input[name='year']").flatpickr({
        //         enableTime: false,
        //          dateFormat: "Y",

        // });

        // $("input[name='month']").flatpickr({
        //         enableTime: false,
        //          dateFormat: "m",

        // });
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput:true
        });
        $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput:true,
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

        function myanmarLetterOnly( self )
        {
            val = self.val();
            if ( /[a-zA-Z0-9]+$/.test( val ) ) {
              self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
            }
        }

            // $('#btn2').click(function () {
            //     setTimeout(function () {
            //         $('#paymentModal1').modal('hide');
            //     }, 1000);
            // });

            // $(document).on('click', '#channel', function () {
            //     setTimeout(function() {$('#paymentModal').modal('hide');}, 1000);
            //     $('#paymentModal1').modal('show');
            //     return true;
            // });

            const queryString = location.search;
            const urlParams = new URLSearchParams(queryString);

            selectedRegistration(urlParams.get("study_type"));

            if (localStorage.getItem("studentinfo") != null){
              get_student_info(student_id).then(data => {
                  if(data){
                      var info = data.data;
                    //   console.log("info >>>",info);
                      var job_history = data.data.student_job;
                      var education_history = data.data.student_education_histroy;
                      if(info){
                        $(".da_to_cpa").find("input[name=name_mm]").val(info.name_mm);
                        $(".da_to_cpa").find("input[name=name_eng]").val(info.name_eng);
                        $(".da_to_cpa").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                        $(".da_to_cpa").find("input[name=nrc_township]").val(info.nrc_township);
                        $(".da_to_cpa").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                        $(".da_to_cpa").find("input[name=nrc_number]").val(info.nrc_number);
                        $(".da_to_cpa").find("input[name=father_name_mm]").val(info.father_name_mm);
                        $(".da_to_cpa").find("input[name=father_name_eng]").val(info.father_name_eng);
                        $(".da_to_cpa").find("input[name=race]").val(info.race);
                        $(".da_to_cpa").find("input[name=religion]").val(info.religion);
                        $(".da_to_cpa").find("input[name=date_of_birth]").val(info.date_of_birth);
                        $(".da_to_cpa").find("input[name=phone]").val(info.phone);
                        $(".da_to_cpa").find("input[name=address]").val(info.address);
                        $(".da_to_cpa").find("input[name=current_address]").val(info.current_address);
                        document.getElementById('da_to_cpa_preview_img').src = BASE_URL + data.data.image;
                      }

                      if(job_history){
                        $(".da_to_cpa").find("input[name=name]").val(job_history.company_name);
                        $(".da_to_cpa").find("input[name=position]").val(job_history.position);
                        $(".da_to_cpa").find("input[name=department]").val(job_history.department);
                        $(".da_to_cpa").find("input[name=organization]").val(job_history.organization);
                        //$(".da_to_cpa").find("input[name=address]").val(job_history.address);
                        //$(".da_to_cpa").find("input[name=current_address]").val(job_history.current_address);
                        $(".da_to_cpa").find("input[name=company_name]").val(job_history.company_name);
                        $(".da_to_cpa").find("input[name=salary]").val(job_history.salary);
                        $(".da_to_cpa").find("input[name=office_address]").val(job_history.office_address);
                      }

                      if(education_history){
                        $(".da_to_cpa").find("input[name=degree_name]").val(education_history.degree_name);
                        $(".da_to_cpa").find("input[name=university_name]").val(education_history.university_name);
                        $(".da_to_cpa").find("input[name=roll_number]").val(education_history.roll_number);
                        $(".da_to_cpa").find("input[name=qualified_date]").val(education_history.qualified_date);
                      }
                      // government staff OR not
                      if(info.gov_staff == 1){
                        $(".da_to_cpa").find("input[name=gov_staff][value=1]").prop("checked",true);
                      }
                      else{
                        $(".da_to_cpa").find("input[name=gov_staff][value=0]").prop("checked",true);
                      }
                    }

                    //$(".da_to_cpa").find("input").prop('disabled',true);
              })
            }

            $('.degree_id').change(function(){
                var selectedDegree = $(this).val();
                if(selectedDegree == 40){ 
                    $('#other_degree_name').show()
                    $('#degree_name').prop('required',true)
                
                }
                else{
                    $('#other_degree_name').hide()
                    $('#degree_name').prop('required',false)

                };
                
            })


    });

</script>
<script>
    //  $( "#cpa_one_submit" ).click(function() {
    //     if(allFilled('#cpa_one_form')){
    //         $('#cpaEmailModal').modal('show');
    //         send_email();
    //     }
    //     else{
    //     }
    // });
    // function allFilled(form_id) {
    //     var filled = true;

    //     $(form_id+' input').each(function() {
    //         if($(this).attr('id')=="batch_id")
    //         {   }
    //         else if( $(this).attr('id')=="registration_no")
    //         {   }
    //         else if( $(this).attr('id')=="approve_reject_status")
    //         {   }
    //         else{
    //             if($(this).val() == ''  ) filled = false;
    //         }
    //         //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
    //     });
    //     return filled;
    // }

        $('#btn_cash').click(function () {
            setTimeout(function () {
                $('#cpaPaymentModal').modal('hide');
            }, 1000);
        });

        $('#cash_img_app').click(function() {
            $('#btn_cash').prop('disabled', false);
        });

        $('#cb_img').click(function() {
            $('#btn_cash').prop('disabled', true);
        });

        $('#mpu_img').click(function() {
            $('#btn_cash').prop('disabled', true);
        });

        $('#btn_cash').prop('disabled', true);

</script>
@endpush
