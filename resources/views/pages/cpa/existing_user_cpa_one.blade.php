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
                        <li><a href="/">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Existing Registration For CPA Part One<span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}"
                     alt="Shape">

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
            <div class="blog-details-comment">
                <div class="comment-form">
                    <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        {{--<form method="post" class="needs-validation" action="javascript:createDARegister();" enctype="multipart/form-data" novalidate>--}}
                        <form method="post" id="existing_user_cpa_one_form" action="javascript:void(0);" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                    <div class="row mb-5">
                                        <h5 class="card-title text-center fw-bolder">
                                            ??????????????????????????????????????????????????????????????????????????????<br>
                                            ??????????????????????????????????????????????????????????????????????????????(???????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????
                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                            <h6>???????????????????????? - <span id="batch_number"></span></h6> 
                                        </div>

                                        <input type="hidden" class="batch_number" value="{{$batch['number']}}">
                                        <input type="hidden" id="active_batch_id" value="{{$batch['id']}}">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row mb-5">
                                                <label class="col-md-5 col-form-label label"><span class="pull-left">??????</span>????????????????????????<span style="color:red">*</span></label>
                                                <div class="col-md-7" style="padding-left:35px;">
                                                    <input type="email" placeholder="????????????????????????????????????????????????????????????" name="email" class="form-control" id="email">
                                                </div>
                                            </div>

                                            <div class="row mb-5">
                                                <label class="col-md-5 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                                <div class="col-md-7" style="padding-left:35px;">
                                                    <input type="password" placeholder="??????????????????????????????????????????????????????????????????" name="password" class="form-control" id="password" minlength="8">
                                                </div>
                                            </div>

                                            <div class="row mb-5">
                                                <label class="col-md-5 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                                <div class="col-md-7" style="padding-left:35px;">
                                                    <input type="password" placeholder="????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????" name="confirm_password" class="form-control" id="confirm_password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 text-center">

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
                                                    <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                                    <br>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                            {{--User Photo--}}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>????????????(??????????????????/???????????????????????????)<span style="color:red">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="????????????(??????????????????)-???????????????????????????????????????" name="name_mm" class="form-control" id="name_mm">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="????????????(???????????????????????????)-???????????????????????????????????????" name="name_eng" class="form-control" id="name_eng">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>??????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2 col-5 pr-1">
                                                    <select class="form-control form-select" name="nrc_state_region" id="nrc_state_region" style="line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-7 px-1">
                                                    <select class="form-control form-select" name="nrc_township" id="nrc_township" style="line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_townships as $township)
                                                            <option value="{{ $township['township_mm'] }}">
                                                                {{ $township['township_mm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-5 px-1">
                                                    <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen" style="line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-5 col-7 pl-1">
                                                    <input type="text" name="nrc_number" placeholder="??????????????????" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}" style="line-height: 1.8">
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
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>??????????????????(??????????????????/???????????????????????????)<span style="color:red">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="??????????????????(??????????????????)" name="father_name_mm" class="form-control" required="">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="??????????????????(???????????????????????????)" name="father_name_eng" class="form-control" required="">
                                        </div>
                                    </div>

                                    

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)<span style="color:red">*</span></label>
                                        <div class="row col-md-8 py-2">
                                            <div class="col-md-3 form-check-radio mx-2">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="male"
                                                            name="gender" value="Male" required>
                                                    <span class="form-check-sign"></span>
                                                    ????????????
                                                </label>
                                            </div>
                                            <div class="col-md-3 form-check-radio mx-2">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id='female'
                                                            name="gender" value='Female' required>
                                                    <span class="form-check-sign"></span>
                                                    ???
                                                </label>
                                            </div>
                                            
                                            <label  class="error attend_place_error" style="display:none;" for="gender">Please select one</label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>?????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="?????????????????????" name="race" class="form-control" value="{{ old('race') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="????????????????????????????????????????????????" name="religion" class="form-control" value="{{ old('religion') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" name="date_of_birth" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="?????????????????????????????????" name="phone" class="form-control" value="{{ old('phone') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="??????????????????????????????????????????????????????" name="current_address" class="form-control" value="{{ old('address') }}" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="?????????????????????????????????????????????????????????" name="address" class="form-control" value="{{ old('current_address') }}" required="">
                                        </div>
                                    </div>

                                    <input type="hidden" name="registration_no" value="0">

                                    <input type="hidden" name="approve_reject_status">

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="???????????????????????????????????????????????????" name="current_job" class="form-control" value="{{ old('name') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="???????????????" name="position" class="form-control" value="{{ old('position') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="?????????" name="department" class="form-control" value="{{ old('department') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="??????????????????????????????" name="organization" class="form-control" value="{{ old('organization') }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="?????????????????????????????????" name="company_name" class="form-control" value="{{ old('company_name') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="???????????????????????????????????????????????????" name="salary" class="form-control" value="{{ old('salary') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>??????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="??????????????????????????????" name="office_address" class="form-control" value="{{ old('office_address') }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????/???????????????<span style="color:red">*</span></label>
                                        <div class="col-md-4 pt-2">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" id="yes" name="gov_staff" value="1" >
                                                <label class="form-check-label">????????????</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" id="no" name="gov_staff" value="0" >
                                                <label class="form-check-label">???????????????</label>
                                            </div>
                                            <label  class="error attend_place_error" style="display:none;" for="gov_staff">Please select one</label>

                                        </div>

                                        
                                    </div>

                                    {{-- <div id="rec_letter" style="display:none">
                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">(???)</span>?????????????????????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-8" id="degree_edu">
                                                <input type="file" class="form-control" id="recommend_letter" name="recommend_letter">
                                                <!-- <input type="file"  class="form-control" id="certificate0"  name="certificates[]" required=""> -->
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>

                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">(???)</span>????????????????????????</label>
                                            <div class="col-md-4">
                                                <select name="degree_id"  class="form-control degree_id" >
                                                    
                                                </select>
                                            <label  class="error degree_id_error" style="display:none;" for="degree_id">Please select one</label>

                                            </div>
                                            <div class="col-md-4" id="other_degree_name" style="display:none;">
                                                <input type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name" required >
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">(???)</span>???????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????" name="university_name" class="form-control" value="{{ old('university_name') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">(???)</span>????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????" name="roll_number" class="form-control" value="{{ old('roll_number') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">(???)</span>??????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????(MMM-YYYY)" name="qualified_date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 80px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">(???)</span>Attached Certificate</label>
                                            <div class="col-md-8" id="edu">
                                                <div class="row mb-3" id="edu0">
                                                    <div class="col-md-11" id="degree_edu">
                                                        <input type="file" class="form-control" id="certificate0" name="certificate[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary btn-success" style="padding-left:5px;" id="add_btn" onclick="AddDAEdu()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    
                                    <div class="row mb-3">
                                        <label class="col-md-8 col-form-label"><span class="pull-left" style="padding-right: 30px;">?????????</span>??????????????????????????????????????????????????????????????????????????????(???????????????????????????)????????????????????? ???????????????????????????????????????/?????????????????????????????????????????????</label>
                                    </div>

                                    {{--<div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????<span style="color:red">*</span></label>                                            
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select class="form-control form-select" name="selected_batch_name" id="selected_batch_id" required>
                                                    <option value="" disabled selected>????????????????????????????????????????????? ??????????????????????????????</option>
                                                </select>
                                            </div>
                                        </div>                                            
                                    </div>--}}
                                    <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????<span style="color:red">*</span></label>                                            
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select class="form-control form-select" name="selected_passed_batch_name" id="selected_passed_batch_id" >
                                                    <option value="" disabled selected>????????????????????????????????????????????? ??????????????????????????????</option>
                                                </select>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label_align_right"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????????????????????????????????????? Module </label>
                                        <div class="row col-md-8 py-2" style="padding-left:24px">
                                            <div class="row">
                                                <div class="col-md-3 form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input module_one is_full_module" type="radio" id="module_1"
                                                                name="is_full_module" value="1" >
                                                        <span class="form-check-sign"></span>
                                                        Module 1
                                                    </label>
                                                </div>
                                                <div class="col-md-3 form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input module_two is_full_module" type="radio" id="module_2"
                                                                name="is_full_module" value='2' >
                                                        <span class="form-check-sign"></span>
                                                        Module 2
                                                    </label>
                                                </div>

                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-3 form-check-radio" style="padding-left: 0px;">
                                                            <label class="form-check-label">
                                                                <input type="button" value="Refresh" style="font-size:12px;" class="btn btn-success" onclick="uncheckRadioButton()"/>
                                                            </label>
                                                        </div>
                                                        <label class=" col-md-9 form-check-label text-danger">
                                                            <span style="color:red">(Module 1 ??????????????? Module 2 ???????????????????????????????????????????????? ??????????????????????????????????????????)</span>
                                                                                                                
                                                        </label>
                                                    </div>   
                                                </div>                                        
                                                
                                                <label  class="error attend_place_error" style="display:none;" for="is_full_module">Please select one</label>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>??????????????????/???</label>                                            
                                        <div class="col-md-8">
                                            <div class="">
                                            <input type="text" class="form-control" name="cpa_one_pass_exam_date"  placeholder="????????????????????????(MM-YYYY)">
                                            </div>
                                        </div>                                            
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????</label>                                            
                                        <div class="col-md-8">
                                            <div class="">
                                                <input type="text" placeholder="???????????????" id="cpa_one_pass_level" name="cpa_one_pass_level" class="form-control ">
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>?????????????????????????????????????????????</label>
                                        <div class="col-md-8">
                                            <input type="text" name="cpa_one_pass_personal_no" class="form-control cpa_one_pass_personal_no"
                                                placeholder="?????????????????????????????????????????????" id="cpa_one_pass_personal_no">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>??????????????????????????????????????????????????????????????????????????????</label>
                                        <div class="col-sm-8 col-md-8 checkbox-radios   py-2">
                                            <div class="form-check-radio px-0">
                                                <label class="form-check-label" for="main_mac">
                                                <input class="form-check-input " type="radio" id="main_mac" name="attend_place" value='2'  onclick="selectType()">
                                                    <span class="form-check-sign"></span>
                                                    ???????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="col-md-12" id="blk_mac" style="display:none">
                                                <div class="mx-5 row  ">

                                                    <div class="col-md-5 form-check-radio px-0  ">
                                                        <label class="form-check-label" for="sub_mac">
                                                        <input class="form-check-input" type="radio" id="sub_mac" name="mac_type" value='1'    >
                                                            <span class="form-check-sign"></span>
                                                            ???????????????????????????????????????????????????????????????
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="mx-5 row  ">
                                                    <div class="col-md-5  form-check-radio px-0  ">
                                                        <label class="form-check-label" for="sub_mac2">
                                                        <input class="form-check-input" type="radio" id="sub_mac2" name="mac_type" value='2'    >
                                                            <span class="form-check-sign"></span>
                                                            ????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="mac_type">Please select one</label>

                                                </div>

                                            </div>

                                            <div class="form-check-radio px-0">
                                                <label class="form-check-label" for="private">

                                                    <input class="form-check-input" type="radio" id="private" name="attend_place" value='1' onclick="selectType()">
                                                    <span class="form-check-sign" ></span>
                                                    ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="form-check-radio px-0">
                                                <label class="form-check-label" for="self">
                                                    <input class="form-check-input" id="self" type="radio" name="attend_place" value='0' onclick="selectType()">
                                                    <span class="form-check-sign" ></span>
                                                    ??????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="col-md-3 form-check-radio">
                                                <label class="form-check-label">
                                                    <input type="button" value="Refresh" style="font-size:12px;" class="btn btn-success" onclick="uncheckAttendPlace()"/>
                                                </label>
                                            </div>
                                            <div class="form-check-radio px-0">
                                                <label  class="error attend_place_error" style="display:none;" for="attend_place">Please select one</label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" id="passed_course_id" value="3">
                                    <input type="hidden" id="current_course_id" value="3">
                                    <input type="hidden" id="cpa_type" value="cpa_1">

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span> ?????????????????????????????? (????????????) ????????????????????????<span style="color:red">*</span></label>                                       
                                        <div class="row col-md-8 py-2" style="padding-left:24px">
                                            <div class="col-md-6 form-check-radio ">
                                                <label class="form-check-label">
                                                    <input class="form-check-input direct_access_no" type="radio" id="direct_access_no"
                                                            name="qt_entry" value="0"  onclick="$('#direct_access_no_row').show();$('#entry_success_no_row').hide();"
                                                            >
                                                    <span class="form-check-sign"></span>
                                                    ????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>

                                            <div class="col-md-6 form-check-radio ">
                                                <label class="form-check-label">
                                                    <input class="form-check-input entry_success_no" type="radio" id="entry_success_no"
                                                            name="qt_entry" value="1"  onclick="$('#entry_success_no_row').show();$('#direct_access_no_row').hide()">
                                                    <span class="form-check-sign"></span>
                                                    ???????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <label  class="error attend_place_error" style="display:none;" for="qt_entry">Please select one</label>
                                        </div>
                                        
                                    </div>

                                    <div id="direct_access_no_row" style="display:none">
                                        <div class="row mb-3" >
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>????????????????????????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8" >
                                                <input type="text" class="form-control direct_access_no" name="direct_access_no"  placeholder="????????????????????????????????????????????????????????????????????????????????????????????????????????????" >
                                            </div>
                                        </div>
                                    </div>
                                    <div id="entry_success_no_row" style="display:none">
                                        <div class="row mb-3" >
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8" >
                                                <input type="text" class="form-control entry_success_no" name="entry_success_no"  placeholder="???????????????????????????????????????????????????????????????????????????????????????????????????????????????" >
                                            </div>
                                        </div>
                                        <div class="row mb-3" >
                                            <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-8" >
                                                <input type="text" class="form-control entry_success_roll_no" name="entry_success_roll_no"  placeholder="????????????????????????" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">                                        
                                        <label class="col-md-4 col-form-label label"><span class="pull-left">?????????</span>?????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        <div class="col-sm-8 col-md-8 checkbox-radios   py-2">
                                            <div class="form-check-radio px-0">
                                                <label class="form-check-label" for="cpa_one_active_main_mac">
                                                <input class="form-check-input " type="radio" id="cpa_one_active_main_mac" name="cpa_one_active_attend_place" value='2'  onclick="$('#current_active_blk_mac').css('display','inline-block')">
                                                    <span class="form-check-sign"></span>
                                                    ???????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="col-md-12" id="current_active_blk_mac" style="display:none">
                                                <div class="mx-5 row  ">

                                                    <div class="col-md-5 form-check-radio px-0  ">
                                                        <label class="form-check-label" for="cpa_one_active_sub_mac">
                                                        <input class="form-check-input" type="radio" id="cpa_one_active_sub_mac" name="cpa_one_active_mac_type" value='1'>
                                                            <span class="form-check-sign"></span>
                                                            ???????????????????????????????????????????????????????????????
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="mx-5 row  ">
                                                <div class="col-md-5  form-check-radio px-0  ">
                                                    <label class="form-check-label" for="cpa_one_active_sub_mac2">
                                                    <input class="form-check-input" type="radio" id="cpa_one_active_sub_mac2" name="cpa_one_active_mac_type" value='2'>
                                                        <span class="form-check-sign"></span>
                                                        ????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                                <label  class="error attend_place_error" style="display:none;" for="cpa_one_active_mac_type">Please select one</label>

                                            </div>

                                            </div>

                                            <div class="form-check-radio px-0">
                                                <!-- <input class="form-check-input" type="radio" name="type" value='1'  onclick="selectType()"> -->
                                                <label class="form-check-label" for="cpa_one_active_private">

                                                    <input class="form-check-input" type="radio" id="cpa_one_active_private" name="cpa_one_active_attend_place" value='1' onclick="$('#current_active_blk_mac').css('display','none')">
                                                    <span class="form-check-sign" ></span>
                                                    ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="form-check-radio px-0">
                                                <!-- <input class="form-check-input " type="radio" name="type" value='0'  onclick="selectType()"> -->
                                                <label class="form-check-label" for="cpa_one_active_self">
                                                    <!-- <span class="form-check-sign"></span> -->
                                                    <input class="form-check-input" id="cpa_one_active_self" type="radio" name="cpa_one_active_attend_place" value='0' onclick="$('#current_active_blk_mac').css('display','none')">
                                                    <span class="form-check-sign" ></span>
                                                    ??????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                            <div class="form-check-radio px-0">
                                                <label  class="error attend_place_error" style="display:none;" for="cpa_one_active_attend_place">Please select one</label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="da_one_declare" onchange="$('#da_submit').prop('disabled', !this.checked)">
                                                <span class="form-check-sign"></span>
                                                <p class="fw-bolder">
                                                    * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                    * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                </p>
                                            </label>

                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <button id="da_submit" value="submit" class="btn btn-success btn-hover-dark w-25" disabled>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <form method="post" id="form1" class="needs-validation" action="javascript:void(0);" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="CPATwoRegEmailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Verificatoin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <center><img class="fit-image" src="{{asset('img/email.png')}}" width="15%"></center>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label><h4>VERIFICATION CODE ON YOUR EMAIL</h4></label><br>
                            <label>We have been sent verification code on your email.Please check your email.</label>
                        </div>
                        <br>
                        <div class="mb-3" style="text-align:center;">
                            <label style="margin-bottom: 2%;">Enter your verification code</label>
                            <center><input type="text" class="form-control w-50" name="verify_code"
                                           placeholder="Enter Verification Code"></center>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="btn1" onclick="check_cpa_two_reg_email()"
                                class="btn btn-success btn-hover-dark w-30">Verify
                        </button>
                    </center>
                    <br>
                    <div class="col-md-12" style="text-align:center;">
                        <p>Didn't get code?</p>&nbsp;&nbsp;<a href="#" onclick="send_email()">RESEND CODE</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal 2 -->
    
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
    <script src="{{ asset('js/form_validation/existing_user_cpa_one_validation.js') }}"></script>
    <script type="text/javascript">

        // to clear data when user click browser back button
        $(window).bind('pageshow', function (){
            $("#existing_user_cpa_one_form").get(0).reset();
        });

        $(document).ready(function (e) {
            localStorage.removeItem('course_type');
            $('.degree_id').select2({
                placeholder: "Select Degree"
            });            
 
            getDegree();

            $("#batch_number").append(number2mm($(".batch_number").val()));
            $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
            });
            $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
            });
            $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });
            $("input[name='cpa_one_pass_exam_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });

            // $("input[id*='nrc_number'], text[id*='nrc_number']").change(function (e) {
            //     myanmarLetterOnly($(this));
            // });

            // $(document).on('keydown', '#nrc_number', function () {
            //     myanmarLetterOnly($(this));
            // });

            $("input[id*='name_mm'], text[id*='name_mm']").change(function (e) {
                myanmarLetterOnly($(this));
            });

            $(document).on('keydown', '#name_mm', function () {
                myanmarLetterOnly($(this));
            });

            $("input[id*='father_name_mm'], text[id*='father_name_mm']").change(function (e) {
                myanmarLetterOnly($(this));
            });

            $(document).on('keydown', '#father_name_mm', function () {
                myanmarLetterOnly($(this));
            });

            function myanmarLetterOnly(self) {
                val = self.val();
                if (/[a-zA-Z0-9]+$/.test(val)) {
                    self.val(val.replace(/[a-zA-Z0-9]+$/, ''));
                }
            }
            
            $(document).on('keydown', '#cpa_one_pass_personal_no', function () {
                engLetterOnly($(this));
            });            

            function engLetterOnly(self) {
                val = self.val(); 
                self.val(val.replace(/[^A-Za-z0-9? _@.,''/#&+-]*$/, ''));               
            }

            $('#btn_cash').click(function () {
                setTimeout(function () {
                    $('#exampleModal1').modal('hide');
                }, 1000);
            });

            $('#cash_img').click(function () {
                $('#btn_cash').prop('disabled', false);
            });

            $('#cb_img').click(function () {
                $('#btn_cash').prop('disabled', true);
            });

            $('#mpu_img').click(function () {
                $('#btn_cash').prop('disabled', true);
            });
            $('#btn_cash').prop('disabled', true);

            $("input.direct_access_no").keypress(function(event) {
                return /\d/.test(String.fromCharCode(event.keyCode));
            });

            $("input.entry_success_no").keypress(function(event) {
                return /\d/.test(String.fromCharCode(event.keyCode));
            });

            $("input.entry_success_roll_no").keypress(function(event) {
                return /\d/.test(String.fromCharCode(event.keyCode));
            });

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

            // $(document).on('keydown', '#cpa_one_pass_personal_no', function () {
            //     EngLetterOnly($(this));
            // });
            // function EngLetterOnly(self) {
            //     val = self.val();                
            //     val.replace( /[^A-Za-z0-9? _@.,''/#&+-]*$/, '');
                
            // }
        });
        loadPassedBatchList();
        // loadCurrentBatchList();
    </script>
@endpush
