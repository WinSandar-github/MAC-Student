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
                    <h2 class="title">Government Article Registration  <span>Form</span></h2>
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

                            <form method="post" id="update_article_gov_register_form"  action="javascript:javascript:createArticleGovRegister();"
                                    enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                        <div class="row mb-5">
                                            <h5 class="card-title text-center fw-bolder">
                                                ???????????????????????????????????????????????????????????????????????????????????????????????????<br><br>
                                                ???????????????????????????????????????????????????????????????????????????????????????<br><br>
                                                ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                                            </h5>
                                            <div>
                                                <h6 align="right">?????????????????? - {{ date('d-M-Y') }}</h6>
                                                <!-- <h6>???????????????????????? - {{ __("____") }}</h6> -->
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-8">
                                                {{--<div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="email" placeholder="????????????????????????????????????????????????????????????" name="email" class="form-control" id="email">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="???????????????????????????????????????????????????????????????" name="password" class="form-control" id="password">
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="password" placeholder="?????????????????????????????????????????????????????????????????????????????????" name="confirm_password" class="form-control" id="confirm_password">
                                                    </div>
                                                </div>--}}

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="????????????(??????????????????)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}"  readonly>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="????????????(???????????????????????????)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}"  readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????/????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="?????????????????????" name="race" id="race" class="form-control" value="{{ old('race') }}" readonly >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="????????????????????????????????????????????????" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" readonly >
                                                        </div>
                                                        </div>
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
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                            <div class="col-md-9">
                                                <input type="text" name="education" id="education" class="form-control" placeholder="???????????????????????????????????????" readonly>
                                            </div>
                                        </div>

                                        <div id="certificate_row">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p class="ml-2" style="font-weight:bold" align="left">?????????????????????????????????????????????????????????</p>
                                                        </div>
                                                        <div class="col-md-3 stu_certificate">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span></label>
                                            <div class="col-md-9" id="edu">
                                                <div class="row mb-3" id="edu0">
                                                    <div class="col-md-11" id="degree_edu">
                                                        <input type="file" class="form-control" id="certificate0" name="certificate[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary" id="add_btn" onclick="AddDAEdu()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->



                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-9">
                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                    <div class="col-md-2 col-5 pr-1">
                                                        <select class="form-control" name="nrc_state_region"
                                                                id="nrc_state_region"
                                                                style="margin-top: 0px; margin-bottom: 0px;" readonly>
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
                                                                style="margin-top: 0px; margin-bottom: 0px;" readonly>
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
                                                                style="margin-top: 0px; margin-bottom: 0px;" readonly>
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
                                                                style="height: 38px" value="{{ old('nrc_number') }}" readonly>
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
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="????????????????????????????????????????????????????????????????????????" name="labor_registration_no" id="labor_registration_no" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>??????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-1 labor_old"></div>
                                            <div class="col-md-8" id="labor">
                                                <div class="row mb-3" id="labor0">
                                                    <div class="col-md-11" id="labor_attach">
                                                        <input type="file" class="form-control" id="labor_registration_attach" name="labor_registration_attach[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary"  style="padding-left:5px;" id="add_btn" onclick="AddLabor()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="??????????????????(??????????????????)" name="father_name_mm" id="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}"  readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="??????????????????(???????????????????????????)" name="father_name_eng" id="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" readonly >
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="?????????????????????????????????" name="father_job" id="father_job" class="form-control" >
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="?????????????????????????????????" name="father_address" id="father_address" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????? ?????????/????????????<span style="color:red">*</span></label>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="1" id="married_yes" name="married" >
                                                            <label class="form-check-label " for="">?????????</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="radio" class="form-check-input mr-3" value="0" id="married_no" name="married" >
                                                            <label class="form-check-label " for="">????????????</label>
                                                        </div>
                                                        <label  class="error attend_place_error" style="display:none;" for="married">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="married_row" style="display:none;">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>????????????/???????????????????????????????????????????????????????????????????????????????????????</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="????????????" name="married_name" id="married_name" class="form-control" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="?????????????????????????????????" name="married_job" id="married_job" class="form-control">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="home_address" name="home_address" class="form-control" placeholder="????????????????????????????????????">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="current_address" name="current_address" class="form-control" placeholder="?????????????????????????????????????????????????????????">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????(??????????????????????????????)<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <textarea name="address" id="address" class="form-control" placeholder="?????????????????????????????????" rows="3" style="resize:none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(???)') }}</span>???????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tempory_address" name="tempory_address" class="form-control" placeholder="???????????????">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(???)') }}</span>????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="permanent_address" name="permanent_address" class="form-control" placeholder="????????????????????????">
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(???)') }}</span>?????????????????????????????????/e-mail<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="?????????????????????????????????" name="phone_no" id="phone_no" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="e-mail" name="m_email" id="m_email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????(???????????????????????????????????????)???????????????????????????????????????????????????<span style="color:red">*</span></label>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                            <!-- <div class="col-md-9">
                                                <input type="file" name="recommend_attach" class="form-control">
                                            </div> -->
                                            <div class="col-md-2 recommend_old"></div>
                                            <div class="col-md-7" id="recommend">
                                                <div class="row mb-3" id="recommend0">
                                                    <div class="col-md-10" id="recommend_attach">
                                                        <input type="file" class="form-control" id="recommend_attach" name="recommend_attach[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary"  style="padding-left:5px;" id="add_btn" onclick="AddRecommend()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="margin-left: 100px">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(???)') }}</span>????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????</label>
                                            <!-- <div class="col-md-9">
                                                <input type="file" name="police_attach" class="form-control">
                                            </div> -->
                                            <div class="col-md-2 police_old"></div>
                                            <div class="col-md-7" id="police">
                                                <div class="row mb-3" id="police0">
                                                    <div class="col-md-10" id="police_attach">
                                                        <input type="file" class="form-control" id="police_attach" name="police_attach[]" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-1 text-center" id="add_div">
                                                        <button type="button" class="btn btn-primary"  style="padding-left:5px;" id="add_btn" onclick="AddPolice()">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="student_info_id" name="student_info_id" >
                                        <input type="hidden" id="article_id" name="article_id" >

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="confirm_142" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * <a href="https://demo.aggademo.me/MAC/public/storage/article/142.pdf" target="_blank">???????????????????????????????????????????????? (?????????) </a> ?????????????????????????????????????????????????????????????????????<br>
                                                    </p>
                                                </label><br>
                                                <label  class="error attend_place_error" style="display:none;" for="confirm_142">Please check one</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="mentor_declare" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                    </p>
                                                </label>

                                            </div>
                                        </div>

                                        <input type="hidden" name="type" value="Student" class="form-control" placeholder="" autocomplete="off" >
                                        <input type="hidden" name="status" value="0" class="form-control" placeholder="" autocomplete="off" >

                                        <div class="row justify-content-center">
                                            <button type="submit" id="submit_btn" class="btn btn-success btn-hover-dark w-25" disabled>
                                                Update
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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/article_register.js')}}"></script>
<script src="{{ asset("js/form_validation/article_gov_validation.js") }}"></script>
<script type="text/javascript">

    $('document').ready(function(){

        get_student_info(student_id).then(data => {
            let student_info = data.data
            let student_reg = data.data.student_register
            let lastest_row = student_reg.length - 1;
            let course = student_reg[lastest_row].course.code;  // cpa1/cpa2
            let exam_result = student_reg[lastest_row].status;  // pass/fail
            let module = student_reg[lastest_row].module;  // module 1/2/all
            let type = student_reg[lastest_row].type;  //  0-self_study / 1-private / 2-mac

            $("#student_info_id").val(student_reg[lastest_row].student_info_id);

            let latest_gov_article = data.data.gov_article.slice(-1);
            $("#article_id").val(latest_gov_article[0].id);
            $("#m_email").val(latest_gov_article[0].m_email);

            if (latest_gov_article[0].married == 1) {
                $('input:radio[name=married][value=1]').attr('checked', true);
                $('#married_row').css('display', 'block');
                $("#married_name").val(latest_gov_article[0].married_name);
                $("#married_job").val(latest_gov_article[0].married_job);
            }
            else {
                $('input:radio[name=married][value=0]').attr('checked', true);
                $('#married_row').css('display', 'none');
            }
            $("#permanent_address").val(latest_gov_article[0].permanent_address);
            $("#tempory_address").val(latest_gov_article[0].tempory_address);
            $("#current_address").val(latest_gov_article[0].current_address);
            $("#home_address").val(latest_gov_article[0].home_address);
            $("#father_address").val(latest_gov_article[0].father_address);
            $("#father_job").val(latest_gov_article[0].father_job);
            $("#labor_registration_no").val(latest_gov_article[0].labor_registration_no);

            let labor_registration_attach = JSON.parse(latest_gov_article[0].labor_registration_attach);
            $.each(labor_registration_attach, function (fileCount, fileName) {
                $(".labor_old").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);

            })

            let recommend_attach = JSON.parse(latest_gov_article[0].recommend_attach);
            $.each(recommend_attach, function (fileCount, fileName) {
                $(".recommend_old").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);

            })

            let police_attach = JSON.parse(latest_gov_article[0].police_attach);
            $.each(police_attach, function (fileCount, fileName) {
                $(".police_old").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);

            })

            $('#name_mm').val(student_info.name_mm);
            $("#name_eng").val(student_info.name_eng);
            $("#date_of_birth").val(student_info.date_of_birth);
            $("#race").val(student_info.race);
            $("#religion").val(student_info.religion);
            $("#education").val(student_info.student_education_histroy.degree_name);
            $("#nrc_state_region").val(student_info.nrc_state_region);
            $("#nrc_township").val(student_info.nrc_township);
            $("#nrc_citizen").val(student_info.nrc_citizen);
            $("#nrc_number").val(student_info.nrc_number);
            $("#father_name_mm").val(student_info.father_name_mm);
            $("#father_name_eng").val(student_info.father_name_eng);
            $("#address").val(student_info.address);
            $("#phone_no").val(student_info.phone);

            document.getElementById('previewImg').src = BASE_URL + student_info.image;
            document.getElementById('previewNRCFrontImg').src = BASE_URL + student_info.nrc_front;
            document.getElementById('previewNRCBackImg').src = BASE_URL + student_info.nrc_back;

            let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                $.each(certificate,function(fileCount,fileName){

                     $(".stu_certificate").append(`<a href='${BASE_URL+fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                })

        });
    })

    $(document).ready(function (e) {
        $("input[name=married]").on("click", function(evt) {
            var checkedValue = $("input[name='married']:checked").val();
            if(checkedValue == '1'){
                $("#married_row").css('display','block');
            }
            else if(checkedValue == '0'){
                $("#married_row").css('display','none');
            }
        });

        $("input[name='job_started_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true
        });

        // $("input[name='date_of_birth']").flatpickr({
        //         enableTime: false,
        //         dateFormat: "d-M-Y",
        //         allowInput: true
        // });

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



    });

    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }

    function validateSubmitClick(){
      var check_confirm_142 = $("input[name=confirm_142]").prop('checked');
      var check_mentor_declare = $("input[name=mentor_declare]").prop('checked');

      if(check_confirm_142 == true && check_mentor_declare == true){
        $("#submit_btn").prop('disabled',false);
      }
      else if(check_confirm_142 == false || check_mentor_declare == false){
        $("#submit_btn").prop('disabled',true);
      }
    }

</script>
@endpush
