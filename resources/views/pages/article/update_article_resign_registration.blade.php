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
    li{
        display: inline;
    }
    ul{
        padding-left: 0px !important;
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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Article Resign Registration  <span>Form</span></h2>
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
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                    <div class="comment-form">
                        <!-- Form Wrapper Start -->
                        <div class="form-wrapper">

                            <form method="post" id="update_article_resign_register_form"  action="javascript:javascript:createArticleResignRegister();"
                                    enctype="multipart/form-data" novalidate>
                                @csrf
                                <!-- <input type="hidden" id="offline_user"> -->
                                <div class="row">
                                    <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                        <div class="row mb-3">
                                            <h5 class="card-title text-center fw-bolder">
                                                ???????????????????????????????????????????????????????????????????????????????????????????????????<br><br>
                                                ???????????????????????????????????????????????????????????????????????????????????????<br><br>
                                                ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                            </h5>
                                            <div>
                                                <h6 align="right">?????????????????? - {{ date('d-M-Y') }}</h6>
                                                <!-- <h6>???????????????????????? - {{ __("____") }}</h6> -->
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label>????????????</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-1"></div>
                                            <label class="col-md-3 col-form-label">???????????????????????????????????????</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-1"></div>
                                            <label class="col-md-3 col-form-label">??????????????????????????????????????????????????????????????????????????????</label>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-7 col-form-label label"><span class="pull-left">????????????????????????????????????</span>????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? ??????????????????????????????????????????</label>
                                        </div>

                                        <div class="row mb-5">
                                            <label class="col-md-1 col-form-label label"><span class="pull-left" id="request_label">{{__('??????')}}</span></label>
                                            <div class="col-md-11">
                                                ????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-8">

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="????????????(??????????????????)" name="name_mm" id="name_mm" class="form-control" value="{{ old('name_mm') }}" readonly >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="????????????(???????????????????????????)" name="name_eng" id="name_eng" class="form-control" value="{{ old('name_eng') }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????????????????????????????????????????" name="personal_no" id="personal_no" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2 col-5 pr-1">
                                                                <select class="form-control" name="nrc_state_region"
                                                                        id="nrc_state_region"
                                                                        style="margin-top: 0px; margin-bottom: 0px;"readonly>
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
                                                                        style="margin-top: 0px; margin-bottom: 0px;"readonly>
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
                                                                        style="margin-top: 0px; margin-bottom: 0px;"readonly>
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
                                                                        style="height: 38px" value="{{ old('nrc_number') }}"readonly>
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

                                        <div id="firm_education" style="display:none;">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="education" id="education" class="form-control" placeholder="???????????????????????????????????????" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="qt_education" style="display:none;">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                                <div class="col-md-9  pt-2">
                                                    <span id="add_qt_education"></span>
                                                </div>
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
                                        <div class="row mb-3 degree" style="display:none">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>

                                            <div class="col-md-9">
                                                <table class="table tbl_degree table-bordered input-table">
                                                    <thead>
                                                        <tr >
                                                            <th class="less-font-weight text-center" width="10%">?????????</th>
                                                            <th class="less-font-weight text-center"  width="40%">???????????????????????????/????????????/????????????????????????</th>
                                                            <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                            <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree")'><li class="fa fa-plus"></li></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_degree_body">

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????/????????????????????????????????????????????????</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="?????????????????????" name="race" id="race" class="form-control" value="{{ old('race') }}" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="????????????????????????????????????????????????" name="religion" id="religion" class="form-control" value="{{ old('religion') }}" readonly >
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                            <div class="col-md-9">
                                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="??????????????????????????????(DD-MMM-YYYY)" value="{{ old('date_of_birth') }}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="??????????????????????????????(DD-MMM-YYYY)" name="resign_date" id="resign_date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <textarea placeholder="??????????????????????????????????????????????????????????????????????????????" name="resign_reason" id="resign_reason" class="form-control" rows="3" style="resize:none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="address_label">{{ __('??????') }}</span>????????????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="????????????????????????????????????????????????" name="address" id="address" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="m_email_label">{{ __('?????????') }}</span>??????????????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="email" placeholder="??????????????????????????????????????????" name="m_email" id="m_email" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left" id="phone_label">{{ __('?????????') }}</span>?????????????????????????????????<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="?????????????????????????????????">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????????????????(???????????????????????????)Firm<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="recent_org" id="recent_org" class="form-control" placeholder="???????????????????????????????????????????????????????????????????????????????????????(???????????????????????????)Firm">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label label"><span class="pull-left">{{ __('') }}</span>Firm ???????????? ????????????????????????????????????????????????????????????????????? ?????????????????????????????? PAPP ??????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-2 resign_approve_attach_old"></div>
                                            <div class="col-md-7">
                                                <input type="file" name="resign_approve_attach"  class="form-control">
                                            </div>
                                        </div>

                                        <input type="hidden" id="student_info_id" name="student_info_id" >
                                        <input type="hidden" id="article_form_type" name="article_form_type" >
                                        <input type="hidden" id="offline_user" name="offline_user" >
                                        <input type="hidden" id="article_id" name="article_id" >

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="know_policy" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * ???????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????? ???????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????<br>
                                                    </p>
                                                </label><br>
                                                <label  class="error attend_place_error" style="display:none;" for="know_policy">Please check one</label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="confirm_142" onchange="validateSubmitClick()">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * <a href="https://demo.aggademo.me/MAC/public/storage/article/126.pdf" target="_blank">???????????????????????????????????????????????? (?????????) </a> ?????????????????????????????????????????????????????????????????????<br>
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
                                                        * ?????????????????? ??????????????????????????????????????? ?????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????<br>
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
<script src="{{ asset("js/form_validation/article_resign_validation.js") }}"></script>
<script type="text/javascript">
    $('document').ready(function(){

        $("#article_form_type").val("resign");

        get_student_info(student_id).then(data => {
            let student_info = data.data
            // let student_reg = data.data.student_register
            // let lastest_row = student_reg.length - 1;
            // let course = student_reg[lastest_row].course.code;  // cpa1/cpa2
            // let exam_result = student_reg[lastest_row].status;  // pass/fail
            // let module = student_reg[lastest_row].module;  // module 1/2/all
            // let type = student_reg[lastest_row].type;  //  0-self_study / 1-private / 2-mac
            let latest_gov_article = data.data.gov_article.slice(-1);
            let latest_article = data.data.article.slice(-1);
            let qualified_test = data.data.qualified_test;
            $("#article_id").val(latest_article[0].id);

            if(latest_article[0]){
                $("#student_info_id").val(latest_article[0].student_info_id);
                $("#recent_org").val("Firm");
                $('#offline_user').val(latest_article[0].offline_user);
            }else{
                $("#student_info_id").val(latest_gov_article[0].student_info_id);
                $("#recent_org").val("Government");
                $("#offline_user").val(0);
            }

            $('#name_mm').val(student_info.name_mm);
            $("#name_eng").val(student_info.name_eng);
            $("#personal_no").val(student_info.cpersonal_no);
            $("#nrc_state_region").val(student_info.nrc_state_region);
            $("#nrc_township").val(student_info.nrc_township);
            $("#nrc_citizen").val(student_info.nrc_citizen);
            $("#nrc_number").val(student_info.nrc_number);
            $("#father_name_mm").val(student_info.father_name_mm);
            $("#father_name_eng").val(student_info.father_name_eng);
            $("#race").val(student_info.race);
            $("#religion").val(student_info.religion);
            $("#date_of_birth").val(student_info.date_of_birth);

            if(qualified_test != null){
                $("#firm_education").hide();
                $("#qt_education").show();
                let lcl = JSON.parse(qualified_test.local_education);
                lcl.map(lcl_edu => $('#add_qt_education').append(`<p>${lcl_edu}</p>`));

                let certificate = JSON.parse(qualified_test.local_education_certificate);
                $.each(certificate,function(fileCount,fileName){
                     $(".stu_certificate").append(`<a href='${BASE_URL+fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                })
            }else{
                $("#education").val(student_info.student_education_histroy.degree_name);
                //var education=student_info.student_education_histroy;
                if(student_info.student_education_histroy){
                    $('.degree').show();
                    loadEductaionHistory(student_info.id,'tbl_degree');
                }else{
                    $('#firm_education').hide();
                    let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                    $.each(certificate,function(fileCount,fileName){

                        $(".stu_certificate").append(`<a href='${BASE_URL+fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                    })
                }

                // if(latest_article[0]?.offline_user == 1){
                //     $(".stu_certificate").append(`<a href='${BASE_URL+student_info.student_education_histroy.certificate}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'  align="center">View Attach File</a>`);
                // }else{
                //     let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                //     $.each(certificate,function(fileCount,fileName){

                //         $(".stu_certificate").append(`<a href='${BASE_URL+fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                //     })
                // }
            }

            $("#address").val(student_info.address);
            $("#phone_no").val(student_info.phone);

            $("#m_email").val(latest_article[0].m_email);

            $("#resign_date").val(latest_article[0].resign_date);
            $("#resign_reason").val(latest_article[0].resign_reason);
            $("#recent_org").val(latest_article[0].recent_org);

            if (latest_article[0].resign_approve_file == "") {
                $(".resign_approve_attach_old").append(``);
            } else {
                $(".resign_approve_attach_old").append(`<a href = '${BASE_URL + latest_article[0].resign_approve_file}' style = 'display:block; font-size:16px;text-decoration: none;' target = '_blank' align = "center" > View Photo</a > `);
            }

            if(student_info.article[0]){
                student_info.article[0] == undefined ? $("#m_email").val() : $("#m_email").val(student_info.article[student_info.article.length-1].m_email);
            }else{
                student_info.gov_article[0] == undefined ? $("#m_email").val() : $("#m_email").val(student_info.gov_article[student_info.gov_article.length-1].m_email);
            }

            document.getElementById('previewImg').src = BASE_URL + student_info.image;
            document.getElementById('previewNRCFrontImg').src = BASE_URL + student_info.nrc_front;
            document.getElementById('previewNRCBackImg').src = BASE_URL + student_info.nrc_back;
        });
    })

    $(document).ready(function (e) {

        $("input[name='resign_date']").flatpickr({
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
      var check_know_policy = $("input[name=know_policy]").prop('checked');
      var check_confirm_142 = $("input[name=confirm_142]").prop('checked');
      var check_mentor_declare = $("input[name=mentor_declare]").prop('checked');

      if(check_know_policy == true && check_confirm_142 == true && check_mentor_declare == true){
        $("#submit_btn").prop('disabled',false);
      }
      else if(check_know_policy == false || check_confirm_142 == false || check_mentor_declare == false){
        $("#submit_btn").prop('disabled',true);
      }
    }
    function loadEductaionHistory(id,table){

        $.ajax({
            type : 'POST',
            url : BACKEND_URL+"/getEducationHistory",
            data: 'student_info_id='+id,
            success: function(result){
                $.each(result.data, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_degrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                    tr += '<td><input type="text" name="old_degrees[]" class="form-control" value="'+value.degree_name+'" readonly/></td>';
                    tr += '<td><input type="hidden" name="old_degrees_certificates_h[]" class="form-control" value='+value.certificate+'><a href='+BASE_URL+value.certificate+' style="margin-top:0.5px;" target="_blank" class="btn btn-success btn-md">View File</a></td>';//<input type="file" name="old_degrees_certificates[]" class="form-control">
                    tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("`+table+`")><li class="fa fa-times"></li></button></td>`;
                    tr += "</tr>";
                    $("table."+table).append(tr);
                });
            }
        });


    }
</script>
@endpush
