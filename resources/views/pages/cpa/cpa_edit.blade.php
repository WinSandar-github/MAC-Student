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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Registration <span>Form</span></h2>
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
                <div class="comment-form">
                    <div class="form-wrapper">
                        <div class="row">
                        <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                            <div class="card-body">                                    
                                <div class="row mb-5">
                                    <h5 class="card-title text-center fw-bolder">
                                        ??????????????????????????????????????????????????????????????????????????????<br>
                                        ???????????????????????????????????????????????????????????????????????????(???????????????????????????)?????????????????????????????????????????????????????????????????????????????????????????????<br>
                                        (??????????????????????????????????????????????????????????????????????????????????????????)
                                    </h5>
                                    <div class="d-flex justify-content-between">
                                        <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                        <h6>???????????????????????? - <span id="batch_number"></span></h6>
                                    </div>
                                </div>


                         <form method="Post" id="cpa_update" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <!-- <form method="Post" action="javascript:void();" id="cpa_one_form" enctype="multipart/form-data"  novalidate> -->
                            @csrf
                            <input type="hidden" name="stu_id" id="stu_id">
                            <input type="hidden" name="batch_id" id="batch_id" />


                            <div class="col-md-12">
                                        
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                        <div class="col-md-3">
                                            <input type="text" name="name_mm" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="name_eng" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">??????</span><span style="color:red">*</span>??????????????????(??????????????????/???????????????????????????)</label>
                                        <div class="col-md-3">
                                            <input type="text" name="father_name_mm" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="father_name_eng" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                        
                                        <div class="col-md-6">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2">
                                                    <select class="form-control form-select" name="nrc_state_region" id="nrc_state_region" style="padding: 6px;line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_regions as $region)
                                                            <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control form-select" name="nrc_township" id="nrc_township" style="line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_townships as $township)
                                                            <option value="{{ $township['township_mm'] }}">
                                                                {{ $township['township_mm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen" style="line-height: 1.8">
                                                        <option value="" disabled selected>??????????????????</option>
                                                        @foreach($nrc_citizens as $citizen)
                                                            <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-4 ">
                                                    <input type="text" name="nrc_number" placeholder="??????????????????" id="nrc_number" class="form-control" maxlength="6" minlength="6" oninput="this.value = en2mm(this.value);" pattern=".{6,6}" style="line-height: 1.8">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    {{--User Photo--}}
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle shadow">
                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                    alt="Upload Photo" id="da_to_cpa_preview_img">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                        <div class="d-flex justify-content-center">
                                            <span class="btn btn-round btn-secondary btn-file">
                                            <span class="fileinput-new">?????????????????????</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" id="profile_photo" name="image" accept="image/*" required></span>
                                            <input type="hidden" name="old_image" id="old_image">
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
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo" id="nrc_front_update">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                            <span class="btn btn-secondary btn-round btn-file">
                                                <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(???????????????)</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="hidden" name="old_nrc_front" id="old_nrc_front">
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
                                            <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_back_update"
                                                    alt="Upload Photo">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                        <div>
                                                <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" name="old_nrc_back" id="old_nrc_back">
                                                    <input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" required>
                                                </span>
                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                    </div>
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
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????????????????" name="race" class="form-control"
                                            value="{{ old('race') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="????????????????????????????????????????????????" name="religion"
                                            class="form-control" value="{{ old('religion') }}"  >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" name="date_of_birth" class="form-control"
                                        placeholder="??????????????????????????????(DD-MMM-YYYY)"  >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????????????????????????????" name="phone"
                                        class="form-control" value="{{ old('phone') }}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????????????????????????????" name="address"
                                        class="form-control" value="{{ old('address') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????????????????????????????????????????????????????" name="current_address"
                                        class="form-control" value="{{ old('current_address') }}"
                                        >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="???????????????????????????????????????????????????" name="name"
                                        class="form-control" value="{{ old('name') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="???????????????" name="position" class="form-control"
                                        value="{{ old('position') }}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????" name="department" class="form-control"
                                        value="{{ old('department') }}" >
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="??????????????????????????????" name="organization"
                                            class="form-control" value="{{ old('organization') }}"  >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="?????????????????????????????????" name="company_name"
                                            class="form-control" value="{{ old('company_name') }}"  >
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="???????????????????????????????????????????????????" name="salary"
                                            class="form-control" value="{{ old('salary') }}" >
                                </div>
                            </div>
                               
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="??????????????????????????????" name="office_address"
                                        class="form-control" value="{{ old('office_address') }}" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                <div class="col-md-2 pt-2">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-4"><input  type="radio"
                                                                        class="form-check-input mr-3" id="yes_self"
                                                                        name="gov_staff" value="1"
                                                                        style="margin-left: 3%;"  onclick="selectStaff(1)">
                                            </div>
                                            <div class="col-md-8"><label class="form-check-label " for="yes">????????????</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 pt-2">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-4"><input  type="radio"
                                                                        class="form-check-input mr-3" id="no_self"
                                                                        name="gov_staff" value="0"
                                                                        style="margin-left: 3%;"  onclick="selectStaff()">
                                            </div>
                                            <div class="col-md-8"><label class="form-check-label " for="no">???????????????</label></div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="rec_letter" style="display:none" >
                                <div class="row mb-3 "  >
                                    <label class="col-md-5 col-form-label label">
                                        <span class="pull-center" style="padding-right:35px">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-md-2"  id="degree_edu" >
                                        <span class="recommend_letter"></span>
                                    </div>
                                    <div class="col-md-5"  id="degree_edu" >
                                        <input   type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                        <input type="hidden" name="old_rec_letter">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" >{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????-</label>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>????????????????????????</label>
                                <div class="col-md-4">
                                    <select name="degree_id" class="form-control degree_id">
                                        
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
                                    <input type="text" placeholder="???????????????????????????????????????" name="university_name"
                                            class="form-control" value=""
                                            >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>????????????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="????????????????????????" name="roll_number"
                                            class="form-control" value="" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>??????????????????</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="??????????????????(MMM-YYYY)" name="qualified_date"
                                            class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-3">                                
                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">(???)</span>Attached Certificate</label>
                                <div class="col-md-2"  id="degree_certificate" >
                                        <span class="certificate"></span>
                                    </div>
                                <div class="col-md-6" id="edu">
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
                            <input type="hidden" name="old_certificate" id="old_certificate">                           
                                       
                        
                            <!-- ???Acca Cima -->
                            <div class="acca_cima" style="display:none;">

                                <div class="row mb-3">                                            
                                    <label class="col-md-4 col-form-label mr-2"><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}
                                    </span>ACCA/CIMA ????????????????????????????????????<span style="color:red">*</span> -</label>
    
                            
                                                    
                                        <div class="col-md-2 form-check mt-2 mx-4  ">
                                            <input class="form-check-input" type="radio" id="acca" name="acca_cima" value='1'    >
                                            <label class="form-check-label" for="acca">
                                                <!-- <span class="form-check-sign"></span> -->
                                            ACCA
                                            </label>
                                            
                                        </div> 
                                        <div class="col-md-2  form-check mt-2 ">
                                            <input class="form-check-input" type="radio" id="cima" name="acca_cima" value='2'    >
                                            <label class="form-check-label" for="cima">
                                                <!-- <span class="form-check-sign"></span> -->
                                                CIMA
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-check-radio">
                                            <label class="form-check-label">
                                                <input type="button" value="Refresh" style="font-size:12px;" class="btn btn-success" onclick="uncheckACCA_CIMA()"/>
                                            </label>
                                        </div>
                                                     
                                        </div>
    
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>????????????????????????????????????????????????????????????<span style="color:red">*</span></label>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" placeholder="????????????????????????????????????????????????????????????" id="direct_degree" name="direct_degree" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>??????????????????/???<span style="color:red">*</span></label>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" placeholder="??? ??? ??????????????????(MMM-YYYY)" id="degree_date" name="degree_date" class="form-control year"  >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????<span style="color:red">*</span></label>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" placeholder="?????????????????????????????????????????????" id="degree_rank" name="degree_rank" class="form-control" value="{{ old('roll_number') }}" >
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>Attched Certificate<span style="color:red">*</span></label>
                                    <div class="col-md-2">
                                                <span class="pre_deg_certi"></span>
                                            </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input type="file" class="form-control" placeholder="upload photo" name="deg_certi_img"  value="{{ old('deg_certi_img') }}"   >
                                            <input type="hidden" name="old_deg_certi">
                                            
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <!-- end acca cpma -->

                            <!-- da_pass -->
                            <div class="da_pass" style="display:none;">
                                <div class="row mb-3">
                                    <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????(?????????????????????????????????)????????????????????????????????????????????????????????????????????????</label>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>??????????????????/???</label>                                            
                                    <div class="col-md-8">
                                        <div class="">
                                            <input type="text" placeholder="??????????????????" id="da_pass_date" name="da_pass_date" class="form-control year"  required="">
                                        </div>
                                    </div>                                            
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>                                                
                                    <div class="col-md-8">                                                    
                                            <input type="text" placeholder="?????????????????????????????????????????????" id="da_pass_roll_number" name="da_pass_roll_number" class="form-control  ">                                                
                                    </div>                                            
                                </div>
                                
                                <div class="row mb-3" id="da_certi">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>Attched Certificate</label>
                                    <div class="col-md-2">
                                            <span class="dapass_deg"></span>
                                        </div>
                                    <div class="col-md-6">
                                        
                                        <input type="hidden" name="old_da_pass_certificate">

                                        <input type="file" class="form-control" placeholder="upload photo" name="da_pass_certificate"   value="{{ old('da_pass_certificate') }}"  >
                                        
                                    </div>
                                </div>
                                           
                            </div>                                         
                            <!-- end da_pass -->
                                        <div class="row mb-3" >
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????????????????????????? <span style="color:red">*</span>-</label>

                                            <div class="col-md-8 mt-2">
                                                
                                                    <div class="row mb-3">
                                                        <div class="col-md-1">
                                                            <input type="radio" id="mac" class="form-check-input" value="2" name="attend_place" onclick="selectType()"    style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="mac">???????????????????????????????????????????????????????????????????????????????????????</label>
                                                        </div>
                                                    </div>

                                                    <div class="  col-md-12 mx-5" id="blk_mac" style="display:none">
                                                        <div class="mx-5 row  mb-3 ">
                                                            
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
                                             
                                                    <div class="row  mb-3">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="private" class="form-check-input" value="1" name="attend_place" onclick="selectType()"   style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="private">?????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <!-- <div class="invalid-feedback">????????????????????????????????????????????? ????????????/??????????????? ??????????????????????????????</div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        <input type="radio" id="self" class="form-check-input" value="0" name="attend_place" onclick="selectType()"   style="margin-left: 3%;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="form-check-label" for="self">??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <!-- <div class="invalid-feedback">????????????????????????????????????????????? ????????????/??????????????? ??????????????????????????????</div> -->
                                                        </div>
                                                    </div>
                                                    <label  class="error attend_place_error" style="display:none;" for="attend_place">Please select one</label>
                                            </div>  
                                        </div>     
                                        
                                             
                                        <div class="row mb-3 mt-3">
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
<script type="text/javascript">
    $(document).ready(function (e) {
        // cpa_edit();
        getDegree();
        $('.degree_id').select2({
            placeholder: "Select Degree"
        });

        if (localStorage.getItem("studentinfo") != null)
        {
              get_student_info(student_id).then(data => {
                  if(data){
                        var info = data.data;
                        var exam_register = info.exam_registers.slice(-1);
                        
                        if(info.da_pass_date){
                            $('#da_pass_date').val(info.da_pass_date);
                            $('#da_pass_roll_number').val(info.da_pass_roll_number);
                            if(exam_register[0]){
                                // console.log("is not certi");
                                $('#da_certi').hide();
                                $("input[name=old_da_pass_certificate]").val();
                                
                            }else{
                                // console.log("is certi");
                                $('#da_certi').show();
                                $("input[name=old_da_pass_certificate]").val(info.da_pass_certificate);

                                if(info.da_pass_certificate !=null){

                                    $(".dapass_deg").append("<a class='m-2' href='"+BASE_URL+info.da_pass_certificate+"'  target='_blank'>View File</a><br/>")
                                }
                            
                            }
                            $('.da_pass').show();

                        }else if(info.acca_cima){
                            $('.acca_cima').show();
                            $("input[name=direct_degree]").val(info.direct_degree);
                            $("input[name=degree_rank]").val(info.degree_rank);
                            $("input[name=degree_date]").val(info.degree_date);
                            $("input[name=old_deg_certi]").val(info.degree_certificate_image);
                            if(info.acca_cima == 1){
                            $("input[name=acca_cima][value=1]").prop("checked",true);                       
                            
                            }
                            else{
                                $("input[name=acca_cima][value=2]").prop("checked",true);
                            }



                            if(info.degree_certificate_image !=null){

                                $(".pre_deg_certi").append("<a class='m-2' href='"+BASE_URL+info.degree_certificate_image+"'  target='_blank'>View File</a><br/>")
                            }
                            

                        }
                      
                        var student_course = info.student_course_regs.slice(-1);
                        var job_history = data.data.student_job;
                        var education_history = data.data.student_education_histroy;
                      if(info){
                        $('#stu_id').val(info.id);

                        $("input[name=name_mm]").val(info.name_mm);
                        $("input[name=name_eng]").val(info.name_eng);
                        $("#nrc_state_region").val(info.nrc_state_region);
                        $("#nrc_township").val(info.nrc_township);
                        $("#nrc_citizen").val(info.nrc_citizen);
                        $("#nrc_number").val(info.nrc_number);
                        $("input[name=father_name_mm]").val(info.father_name_mm);
                        $("input[name=father_name_eng]").val(info.father_name_eng);
                        $("input[name=race]").val(info.race);
                        $("input[name=religion]").val(info.religion);
                        $("input[name=date_of_birth]").val(info.date_of_birth);
                        $("input[name=phone]").val(info.phone);
                        $("input[name=address]").val(info.address);
                        $("input[name=current_address]").val(info.current_address);
                      
                        
                        $("input[name=old_rec_letter]").val(info.recommend_letter);
                        $("input[name=old_image]").val(info.image);
                       

                        
 
 
                        document.getElementById('da_to_cpa_preview_img').src = BASE_URL + data.data.image;

                        document.getElementById('nrc_front_update').src = BASE_URL + info.nrc_front;
                        $("input[name=old_nrc_front]").val(info.nrc_front);

                        document.getElementById('nrc_back_update').src = BASE_URL + info.nrc_back;
                        $("input[name=old_nrc_back]").val(info.nrc_back); 

                      }

                       
                       
                      $.ajax({
                            type: "get",
                            url: BACKEND_URL + "/batch/" + student_course[0].batch_id,
                            contentType: false,
                            processData: false,
                            async:false,
                            success: function (res) {
                                $('#batch_id').val(res.data.id);
                                $('#batch_number').append(number2mm(res.data.number));
                            }
                        })
                      if(job_history){
                        $("input[name=name]").val(job_history.company_name);
                        $("input[name=position]").val(job_history.position);
                        $("input[name=department]").val(job_history.department);
                        $("input[name=organization]").val(job_history.organization);
                        //$("input[name=address]").val(job_history.address);
                        //$("input[name=current_address]").val(job_history.current_address);
                        $("input[name=company_name]").val(job_history.company_name);
                        $("input[name=salary]").val(job_history.salary);
                        $("input[name=office_address]").val(job_history.office_address);
                      }

                      if(education_history){
                        // $("input[name=degree_name]").val(education_history.degree_name);
                        $(".degree_id").select2().val(education_history.degree_id).trigger('change');
                        if(education_history.degree_id == 40){
                            $("input[name=degree_name]").val(education_history.degree_name);
                            $('#other_degree_name').show();
                        }
                        $("input[name=university_name]").val(education_history.university_name);
                        $("input[name=roll_number]").val(education_history.roll_number);
                        $("input[name=qualified_date]").val(education_history.qualified_date);
                        $("input[name=old_certificate]").val(JSON.parse(education_history.certificate));
                        // console.log('certificate',JSON.parse(education_history.certificate));

                        let certificate = JSON.parse(education_history.certificate);
                        // console.log('certificate',certificate);
                        $.each(certificate, function (fileCount, fileName) {

                            $(".certificate").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);

                        })
                      }
                      // government staff OR not
                      if(info.gov_staff == 1){
                          $("input[name=gov_staff][value=1]").prop("checked",true);
                          $("#rec_letter").css("display",'block');
                        //   console.log("recommend_letter",info.recommend_letter)
                          if(info.recommend_letter!= null){
                           

                                $(".recommend_letter").append("<a href='"+BASE_URL+info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                            }
                      }
                      else{
                        $("input[name=gov_staff][value=0]").prop("checked",true);
                      }

                      if(info.gender=="Male"){
                            $("#male").prop("checked",true);
                        }else{
                            $("#female").prop("checked",true);
                        }

                    

                      if(student_course[0].type == 0){
                        $("input[name=attend_place][value=0]").prop("checked",true);

                         
                      }
                      else if(student_course[0].type == 1){
                        $("input[name=attend_place][value=1]").prop("checked",true);
                      }else{
                        $("input[name=attend_place][value=2]").prop("checked",true);
                        selectType();
                        if(student_course[0].mac_type == 1){
                            $("input[name=mac_type][value=1]").prop("checked",true);

                            
                        }else{
                            $("input[name=mac_type][value=2]").prop("checked",true);
                            


                        }



                      }
                    }

                    //$("input").prop('',true);
              })
            }

        $("#degree_date").flatpickr({
                enableTime: false,
                 dateFormat: "M-Y",

        });
        $("#da_pass_date").flatpickr({
                enableTime: false,
                 dateFormat: "M-Y",

        });
        $(".month").flatpickr({
                enableTime: false,
                 dateFormat: "m",

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
                dateFormat: "d-m-Y",
        });
        $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
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

        
    function selectgovStaff(value) {
        if (value == 1) {
            $('#rec_letter').css('display', 'block');
        } else {
            $('#rec_letter').css('display', 'none');
        }
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
@endpush
