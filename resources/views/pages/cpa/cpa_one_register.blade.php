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
                    <h2 class="title">CPA Registration  <span>Form</span></h2>
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
        <div class="section section-padding">
            <div class="container">
                    {{-- <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">

                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your CPA 1 Registration Form need to prepare.Please update your form
                                </p>
                        </div>
                    </div>
                    </div>
                    <div class="check_registration" style="display:none;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body">
                                <p class="card-text">Your CPA 1 Registration Form is checking</p>
                            </div>
                        </div>
                    </div>
                    <div class="approve" style="display:none;">
                        <table width="100%">
                            <tr>
                                <td width="75%">
                                    <div class="card text-white bg-primary my-3">

                                        <div class="card-body">
                                            <p class="card-text">You have the opportunity to attend the training  </p>


                                        </div>
                                    </div>
                                </td>
                                <td width="25%">
                                    <div class="card text-white bg-primary my-3" id="aa_form" style="display:none;">

                                        <div class="card-body">
                                            <p id="aa" style="text-align:center;"></p>


                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="card text-white bg-primary my-3">

                            <div class="card-body add_exam">


                            </div>
                        </div>
                    </div> --}}

                <div class="comment-form study" >     
                        <input type="hidden" name="remain_module" id="remain_module">


                        <div class="row" id="private_school_container">
                            <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder">
                                                    ??????????????????????????????????????????????????????????????????????????????<br>
                                                    ??????????????????????????????????????????????????????????????????????????????(???????????????????????????) ??????????????????????????????????????????????????????????????????????????????<br>
                                                    (????????????????????????????????????????????????????????????????????????)
                                                </h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                    <h6>???????????????????????? - <span class="batch_number"></span></h6>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                    <form id="cpa_pp_form" method="post" action="javascript:void();" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" name="batch_id" class="batch_id">
                                    <input type="hidden" name="sr_no" class="sr_no">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row mb-3 mt-4">
                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="name_mm" class="form-control" readonly="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="name_eng" class="form-control" readonly="">
                                                </div>
                                            </div>
                                            <div class="row mb-3 mt-4">
                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                <div class="col-md-6">
                                                    <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                </div>
                                            </div>
                                        </div>

                                            {{--<br>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">??????????????????????????????????????????????????????????????????????????? (???????????????)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                        value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">??????????????????????????????????????????????????????????????????????????? (??????????????????)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                        value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <br>--}}

                                        <div class="col-md-4 text-center">
                                            {{--User Photo--}}
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                    <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                        alt="Upload Photo" class="profile_image" id="private_preview_img">
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
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)<span style="color:red">*</span></label>
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

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????" name="race" id="race" class="form-control"
                                                    value="{{ old('race') }}"  readonly="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????????????????????????????" id="religion" name="religion"
                                                    class="form-control" value="{{ old('religion') }}" readonly="" >
                                            </div>
                                        </div> 

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                    placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="" >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                            <div class="col-md-4">        
                                                <select disabled name="degree_id" class="form-control degree_id">
                                                
                                                </select>

                                            </div>
                                            <div class="col-md-4 other_degree_name" style="display:none;">
                                                <input disabled type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????" id="phone" name="phone"
                                                    class="form-control" value="{{ old('phone') }}" readonly >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????????????????????????????" id="address" name="address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                
                                        <div class=" row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????????????????????????????" id="current_address" name="current_address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????????????????" id="name" name="name"
                                                    class="form-control" value="{{ old('name') }}" disabled >
                                            </div>
                                        </div>
                                    
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????" disabled id="position" name="position" class="form-control"
                                                    value="{{ old('position') }}" >
                                            </div>
                                        </div>
                               
                                        <div class="row  mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????" id="department" name="department" class="form-control"
                                                    value="{{ old('department') }}" disabled >
                                            </div>
                                        </div>
                                
                                        {{--<div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label label_align_right">??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????????????????" name="organization" id="organization"
                                                    class="form-control" value="{{ old('organization') }}" disabled >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????" name="company_name" id="company_name"
                                                    class="form-control" value="{{ old('company_name') }}" disabled >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label label_align_right">???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????????????????" name="salary" id="salary"
                                                    class="form-control" value="{{ old('salary') }}" disabled >
                                            </div>
                                        </div>
                                        <br> --}}

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????????????????????????????" name="office_address" id="office_address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                                    class="form-check-input mr-3" id="yes_private"
                                                                                    name="gov_staff" value="1"
                                                                                    style="margin-left: 3%;"  onclick="$('#rec_letter_private').show()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label " for="yes_private">????????????</label>
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
                                                        <div class="col-md-8"><label class="form-check-label " for="no_private">???????????????</label></div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="rec_letter_private" style="display:none" >
                                            <div class="row mb-3 "  >
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left" style="padding-left:85px">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                                <div class="col-md-2 text-center"  id="degree_edu" >
                                                    <span class="recommend_letter"></span>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="recommend_letter_private"  name="recommend_letter_private">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <select class="form-control" name="private_school_name" id="selected_school_id" style="width: 100%;">
                                                        <option value="" disabled selected>Select School</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" id="academic_year_private" name="academic_year_private" class="form-control" value=""  placeholder="??????????????????????????????">
                                                </div>
                                            </div>
                                        </div>--}}

                                        <div class="row mb-3" id="direct_access_no_private_div">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????????????? ????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" id="direct_access_no_private" name="direct_access_no_private" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????? ????????????????????????" >
                                                </div>
                                            </div>
                                        </div> 

                                         <div class="row" id="entry_success_no_private_div">                                             
                                            <label class="col-md-4 col-form-label label">
                                                <span class="pull-left">{{ __('?????????') }}</span>
                                                <span class="pull-left" style="padding-left: 70px;">{{ __('(???)') }}</span>
                                                ???????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" id="entry_success_no_private" name="entry_success_no_private" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????????????????????????????????" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" id="entry_success_roll_no_private_div">
                                            <label class="col-md-4 col-form-label label">
                                                <span class="pull-left" style="padding-left: 95px;">{{ __('(???)') }}</span>
                                                ????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" id="entry_success_roll_no_private" name="entry_success_roll_no_private" class="form-control" value="" placeholder="????????????????????????" >
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <br/>

                                <div class="row mb-3" style="display: none;">
                                    <label class="col-md-4 col-form-label label">
                                        <span class="pull-left">{{ __('?????????') }}</span>
                                        <span class="pull-left" style="padding-left: 90px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                            <input type="text" name="batch_no" class="form-control batch_no"  placeholder="?????????????????????????????????????????????" id="batch_no_private" readonly>

                                    </div>
                                </div>

                                <div class="row mb-3" style="display: none;">
                                    <label class="col-md-4 col-form-label label">
                                        <span class="pull-left" style="padding-left: 113px;">{{ __('(???)') }}</span>?????????????????????</label>
                                    <div class="col-md-8">
                                            <input type="text" name="batch_part_no" class="form-control course_name" placeholder="?????????????????????" id="part_no_private" readonly>

                                    </div>
                                </div>

                                <div class="row mb-4" >
                                    <label class="col-md-4 col-form-label label">
                                        <span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????</label>
                                        {{-- <span class="pull-left" style="padding-left: 113px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label> --}}
                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_private" >

                                    </div>
                                </div>
                                <div class="row mb-3">
                                                <label class="col-md-4 col-form-label "><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}</span>?????????????????????????????? Module</label>
                                                <div class="col-md-7">
                                                    <div class="row" style="padding-left:10px;">
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_one" type="radio"  name="module" value="1" id="module1" >
                                                            <label class="form-check-label">{{ __('Module-1') }}</label>
                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_two" type="radio" name="module" value="2" id="module2" >
                                                            <label class="form-check-label">{{ __('Module-2') }}</label>

                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_full" type="radio" name="module" value="3" id="allmodule" >
                                                            <label class="form-check-label">{{ __('All Module') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-radio px-0">
                                                        <label  class="error attend_place_error" style="display:none;" for="module">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="row mb-3 mt-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" onchange="$('#submit_btn_pp').prop('disabled', !this.checked)">
                                            <span class="form-check-sign"></span>
                                            <p class="fw-bolder">
                                                * ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                            </p>
                                        </label>
                                    </div>
                                </div>

                                    <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-25" disabled id="submit_btn_pp" >Submit</button>
                                        
                                    </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                        <div class="row" id="self_study_container">
                            <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder">
                                                    ??????????????????????????????????????????????????????????????????????????????<br>
                                                    ??????????????????????????????????????????????????????????????????????????????(???????????????????????????) ??????????????????????????????????????????????????????????????????????????????<br>
                                                    (??????????????????????????????????????????????????????????????????????????????????????????)
                                                </h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                    <h6>???????????????????????? - <span class="batch_number"></span></h6>
                                                </div>
                                                
                                            </div>
                                        </div>                                        
                                    </div>

                                    <form id="cpa_ss_form" method="post" action="javascript:void();" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" name="batch_id" class="batch_id">
                                    <input type="hidden" name="sr_no" class="sr_no">
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <div class="row mb-3 mt-4">
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                    <div class="col-md-3">
                                                        <input type="text" name="name_mm" class="form-control" readonly="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="name_eng" class="form-control" readonly="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3 mt-4">
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-6">
                                                        <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                {{--<div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">??????????????????????????????????????????????????????????????????????????? (???????????????)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                        value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="" class="col-form-label">??????????????????????????????????????????????????????????????????????????? (??????????????????)</label>
                                                                </div>
                                                                <div class="row">
                                                                    <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                    <p class="mt-2">
                                                                    <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                        value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                                    </p>
                                                                    <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>--}}

                                                <div class="row mb-3">
                                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                    <div class="col-md-3">
                                                        <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                        

                                            <div class="col-md-4 text-center">
                                                {{--User Photo--}}
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                            alt="Upload Photo" class="profile_image" id="self_study_preview_img">
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
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)<span style="color:red">*</span></label>
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
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????" name="race" id="race" class="form-control"
                                                    value="{{ old('race') }}"  readonly="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????????????????????????????" id="religion" name="religion"
                                                    class="form-control" value="{{ old('religion') }}" readonly="" >
                                            </div>
                                        </div> 

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                    placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="" >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                            <div class="col-md-4">        
                                                <select disabled name="degree_id" class="form-control degree_id">
                                                
                                                </select>

                                            </div>
                                            <div class="col-md-4 other_degree_name" style="display:none;">
                                                <input disabled type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????" id="phone" name="phone"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="????????????????????????????????????????????????" id="address" name="address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                
                                        <div class=" row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????????????????????????????" id="current_address" name="current_address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>
                                
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????????????????" id="name" name="name"
                                                    class="form-control" value="{{ old('name') }}" disabled >
                                            </div>
                                        </div>
                                    
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????" disabled id="position" name="position" class="form-control"
                                                    value="{{ old('position') }}" >
                                            </div>
                                        </div>
                               
                                        <div class="row  mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????" id="department" name="department" class="form-control"
                                                    value="{{ old('department') }}" disabled >
                                            </div>
                                        </div>
                                
                                        {{--<div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label">??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????????????????" name="organization" id="organization"
                                                    class="form-control" value="{{ old('organization') }}" disabled >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="?????????????????????????????????" name="company_name" id="company_name"
                                                    class="form-control" value="{{ old('company_name') }}" disabled >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                            <label for="" class="col-md-3 col-form-label label_align_right">???????????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="???????????????????????????????????????????????????" name="salary" id="salary"
                                                    class="form-control" value="{{ old('salary') }}" disabled >
                                            </div>
                                        </div>
                                        <br> --}}

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="??????????????????????????????????????????" name="office_address" id="office_address"
                                                    class="form-control" readonly >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                            <div class="col-md-2 pt-2">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-md-4"><input disabled type="radio"
                                                                                    class="form-check-input mr-3" id="yes_self"
                                                                                    name="gov_staff" value="1"
                                                                                    style="margin-left: 3%;"  onclick="$('#rec_letter_self').show()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label " for="yes_self">????????????</label>
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
                                                                                    style="margin-left: 3%;"  onclick="$('#rec_letter_self').hide()">
                                                        </div>
                                                        <div class="col-md-8"><label class="form-check-label " for="no_self">???????????????</label></div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="rec_letter_self" style="display:none" >
                                            <div class="row mb-3 "  >
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left" style="padding-left:85px">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                </label>
                                                <div class="col-md-2 text-center"  id="degree_edu" >
                                                    <span class="recommend_letter"></span>
                                                </div>
                                                <div class="col-md-6"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="recommend_letter_self"  name="recommend_letter_self">
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                            <div class="col-md-8">
                                                <div>
                                                    <input type="text" id="academic_year_self" name="academic_year_self" class="form-control" value=""  placeholder="??????????????????????????????">
                                                </div>
                                            </div>
                                        </div>--}}

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>{{ __('????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                            <div class="row col-md-8 py-2">
                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" value="???????????????????????????????????????????????????????????????????????????????????????" id="cpa_check" name="reg_reason[]" onclick="$('#current_year_attendance').show()" required>
                                                            <span class="form-check-sign"></span>
                                                            (???) ???????????????????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>

                                                    <div id="current_year_attendance" style="display:none">
                                                        <div class="row mb-3" id="direct_access_no_self_div">
                                                            <label class="col-md-7 col-form-label label"><span class="pull-left" style="padding-left:85px">{{ __('') }}</span>????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-5">
                                                                <input type="text" id="direct_access_no_self" name="direct_access_no_self" class="form-control" value="" placeholder="????????????????????????????????????????????????????????????????????????????????????????????????????????????">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3" id="entry_success_no_self_div" >
                                                            
                                                                <label class="col-md-7 col-form-label label"><span class="pull-left" style="padding-left:85px">{{ __('') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                                <div class="col-md-5">
                                                                        <input type="text" id="entry_success_no_self" name="entry_success_no_self" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????????????????????????????????">
                                                                </div>
                                                        </div>
                                                        <div class="row  mb-3" id="entry_success_roll_no_self_div" >
                                                            <label class="col-md-7 col-form-label label">
                                                                <span class="pull-left" style="padding-left:85px">{{ __('') }}</span>
                                                                ????????????????????????</label>
                                                            <div class="col-md-5">
                                                                <div>
                                                                    <input type="text" id="entry_success_roll_no_self" name="entry_success_roll_no_self" class="form-control" value="" placeholder="????????????????????????" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" id="enrol_no_exam" 
                                                                    name="reg_reason[]" value="??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????"  onclick="$('#current_year_attendance').hide()" required>
                                                            <span class="form-check-sign"></span>
                                                            (???) ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" id="attendance" 
                                                                   name="reg_reason[]" value="???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????" onclick="$('#current_year_attendance').hide()" required>
                                                            <span class="form-check-sign"></span>
                                                            (???) ???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" id="fail_exam"
                                                                   name="reg_reason[]" value="????????????????????????????????????????????????????????????" onclick="$('#current_year_attendance').hide()" required>
                                                            <span class="form-check-sign"></span>
                                                            (???) ????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>

                                                    <div class="form-check-radio">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" id="resigned" 
                                                                    name="reg_reason[]" value="???????????????????????????????????????????????????????????????????????????" onclick="$('#current_year_attendance').hide()" required>
                                                            <span class="form-check-sign"></span>
                                                            (???) ???????????????????????????????????????????????????????????????????????????
                                                        </label>
                                                    </div>

                                                    <label  class="error attend_place_error" name="attend_place_error" style="display:none;" for="reg_reason[]">Please select registration reason.</label>

                                                    <div class="row">
                                                        <label class="col-md-12 col-form-label"><span class="pull-left" style="    padding-left: 30px;">{{ __('(???)') }}</span>??????????????????????????????????????? Module -</label>
                                                    </div>
                                                    <div class="row mb-3" style="padding-left: 120px;">
                                                        <!-- <label class="col-md-4 col-form-label label_align_right"><span class="pull-left">{{ __('(???)') }}</span>??????????????????????????????????????? Module -</label> -->
                                                        <div class="row col-md-12 py-2">
                                                            <div class="col-md-4 form-check-radio">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input module_one" type="radio" 
                                                                            name="module" value="1" id="module1"  >
                                                                    <span class="form-check-sign"></span>
                                                                    Module 1
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 form-check-radio">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input module_two" type="radio"
                                                                            name="module" value="2" id="module2" >
                                                                    <span class="form-check-sign"></span>
                                                                    Module 2
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 form-check-radio">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input module_full" type="radio"
                                                                            name="module" value="3" id="allmodule" >
                                                                    <span class="form-check-sign"></span>
                                                                    All Modules
                                                                </label>
                                                            </div>
                                                            <label  class="error attend_place_error" style="display:none;" for="module">Please select one</label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        {{-- <div class="row mb-3">
                                            <div class="col-md-1">
                                                <div>
                                                    <label class="col-form-label">{{ __('?????????') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div>
                                                    <label class="col-form-label">{{ __('????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(???)</div>
                                            <div class="col-md-9 " style="padding-top:10px">
                                                <input type="checkbox" class="form-check-input" value="???????????????????????????????????????????????????????????????????????????????????????" id="cpa_check" name="reg_reason[]" >
                                                                                        <label class="">{{ __('???????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-3"></div>

                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ __('(???) ????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" id="direct_access_no_self" class="form-control" value="" placeholder="????????????????????????????????????????????????????????????????????????????????????????????????????????????">
                                            </div>
                                        </div><br/>

                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <label class="col-form-label">{{ __('(???) ???????????????????????????????????????????????????????????????????????????????????????????????????????????????') }}</label>

                                            </div>
                                            <div class="col-md-5">
                                                    <input type="text" id="entry_success_no_self" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????????????????????????????????">
                                            </div>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(???)</div>
                                            <div class="col-md-9 " style="padding-top:10px">
                                                                                    <input type="checkbox" class="form-check-input " value="?????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????" id="enrol_no_exam" name="reg_reason[]" >
                                                                                    <label class="">{{ __(' ?????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(???)</div>
                                            <div class="col-md-4 " style="padding-top:10px">
                                                                                    <input type="checkbox" class="form-check-input col-form-label" value="???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????" id="attendance" name="reg_reason[]" >
                                                                                    <label class="">{{ __(' ???????????????????????????????????????????????????????????? ??????% ?????????????????????????????????') }}</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(???)</div>
                                            <div class="col-md-4 " style="padding-top:10px">
                                                <input type="checkbox" class="form-check-input" value="????????????????????????????????????????????????????????????" id="fail_exam" name="reg_reason[]" >
                                                                                        <label class="">{{ __(' ????????????????????????????????????????????????????????????') }}</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1 col-form-label">(???) </div>
                                            <div class="col-md-4 " style="padding-top:10px">
                                                <input type="checkbox" class="form-check-input " value="???????????????????????????????????????????????????????????????????????????" id="resigned" name="reg_reason[]" >
                                                                                        <label class="">{{ __('???????????????????????????????????????????????????????????????????????????') }}</label>
                                            </div>
                                        </div> --}}


                                        {{--<div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2 col-form-label">(???)</div>
                                            <div class="col-md-4">
                                                    <label class="col-form-label">{{ __('?????????????????????????????? Module') }}</label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input module_one" name="module" value="1" id="module1" >
                                                        <label class="form-check-label">{{ __('Module-1') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input module_two" name="module" value="2" id="module2" >
                                                        <label class="form-check-label">{{ __('Module-2') }}</label>
                                                    </div>
                                                    <div class="col-md-4 form-check">
                                                        <input type="radio" class="form-check-input module_full" name="module" value="3" id="allmodule" >
                                                        <label class="form-check-label">{{ __('All Module') }}</label>
                                                                                                        <div class="invalid-feedback mt-3">?????????????????????????????? Module ??????????????????????????????</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br/>--}}

                                        <div class="row mb-3" style="display:none">
                                            <label class="col-md-4 col-form-label label">
                                                <span class="pull-left">{{ __('?????????') }}</span>
                                                <span class="pull-left" style="padding-left: 90px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>
                                            <div class="col-md-8">
                                                    <input type="text" name="batch_no" class="form-control batch_no"  placeholder="?????????????????????????????????????????????" id="batch_no_self" readonly>

                                            </div>
                                        </div>

                                        <div class="row mb-3" style="display:none">
                                            <label class="col-md-4 col-form-label label">
                                                <span class="pull-left" style="padding-left: 113px;">{{ __('(???)') }}</span>?????????????????????</label>
                                            <div class="col-md-8">
                                                    <input type="text" name="batch_part_no" class="form-control course_name" placeholder="?????????????????????" id="part_no_self" readonly>

                                            </div>
                                        </div>

                                        <div class="row mb-4" >
                                            <label class="col-md-4 col-form-label label">
                                                <span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????</label>
                                                        {{-- <span class="pull-left" style="padding-left: 113px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label> --}}
                                            <div class="col-md-8">
                                                <input type="text" name="batch_personal_no" class="form-control personal_no_self" placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_self"  >

                                            </div>
                                        </div>

                                        <div class="row mb-3 mt-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" onchange="$('#submit_btn_ss').prop('disabled', !this.checked)">
                                                    <span class="form-check-sign"></span>
                                                    <p class="fw-bolder">
                                                        * ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                        * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                    </p>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3 justify-content-center">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-25 " disabled id="submit_btn_ss">{{ __('Submit') }}</button>
                                        
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="row" id="mac_container">
                            <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">                                           

                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder">
                                                    ??????????????????????????????????????????????????????????????????????????????<span id="mac_type_name"></span><br>
                                                    ??????????????????????????????????????????????????????????????????????????????(???????????????????????????)??????????????????????????????????????????????????????????????????????????????
                                                </h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                                    <h6>???????????????????????? - <span class="batch_number"></span></h6>
                                                </div>
                                            </div>
                                        </div>

                                    <div>
                                    <form  method="post" id="cpa_mac_form" action="javascript:void();" enctype="multipart/form-data" novalidate>

                                    <input type="hidden" name="batch_id" class="batch_id">
                                    <input type="hidden" name="sr_no" class="sr_no">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_mm" class="form-control" readonly="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_eng" class="form-control" readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 mt-4">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                        <div class="col-md-6">
                                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control nrc_township" name="nrc_township" style="padding: 6px;" readonly>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control nrc_citizen" name="nrc_citizen" style="padding: 6px;"readonly>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="row mb-3">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    {{--User Photo--}}
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                alt="Upload Photo" class="profile_image" id="mac_preview_img">
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
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">??????</span>???????????? / ??? (Gender)<span style="color:red">*</span></label>
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

                                            <div class="row  mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="race" id="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                </div>
                                            </div>

                                            <div class="row  mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="religion" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                        placeholder="??????????????????????????????(DD-MMM-YYYY)" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????</label>
                                                <div class="col-md-4">        
                                                    <select disabled name="degree_id" class="form-control degree_id">
                                                    
                                                    </select>
    
                                                </div>
                                                <div class="col-md-4 other_degree_name" style="display:none;">
                                                    <input disabled type="text" placeholder="????????????????????????" name="degree_name" class="form-control" value="{{ old('degree_name') }}" id="degree_name"   >
                                                </div>
                                            </div>                                            
                                            
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="?????????????????????????????????" id="phone" name="phone"
                                                           class="form-control" readonly >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="????????????????????????????????????????????????" id="address" name="address"
                                                           class="form-control" value="{{ old('address') }}" readonly >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="?????????????????????????????????????????????????????????" id="current_address" name="current_address"
                                                           class="form-control" readonly >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                 <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="???????????????????????????????????????????????????" id="name" name="name"
                                                           class="form-control" value="{{ old('name') }}" disabled >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                 <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>???????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="???????????????" disabled id="position" name="position" class="form-control"
                                                           value="{{ old('position') }}" >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                 <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="?????????" id="department" name="department" class="form-control"
                                                           value="{{ old('department') }}" disabled >
                                                </div>
                                            </div>
                                            
                                            {{--<div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                 <label for="" class="col-md-3 col-form-label">??????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="??????????????????????????????" name="organization" id="organization"
                                                           class="form-control" value="{{ old('organization') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="?????????????????????????????????" name="company_name" id="company_name"
                                                           class="form-control" value="{{ old('company_name') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">???????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="???????????????????????????????????????????????????" name="salary" id="salary"
                                                           class="form-control" value="{{ old('salary') }}" disabled >
                                                </div>
                                            </div>
                                            <br> --}}

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="??????????????????????????????????????????" name="office_address" id="office_address"
                                                        class="form-control" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????? ????????????/???????????????</label>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input disabled type="radio"
                                                                                        class="form-check-input mr-3" id="yes_mac"
                                                                                        name="gov_staff" value="1"
                                                                                        style="margin-left: 3%;"  onclick="$('#rec_letter_mac').show()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label " for="yes_mac">????????????</label>
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
                                                            <div class="col-md-8"><label class="form-check-label " for="no_mac">???????????????</label></div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div id="rec_letter_mac" style="display:none" >
                                                <div class="row mb-3 "  >
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" style="padding-left:85px">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                    <div class="col-md-2 text-center"  id="degree_edu" >
                                                        <span class="recommend_letter"></span>
                                                    </div>
                                                    <div class="col-md-6"  id="degree_edu" >
                                                        <input type="file"  class="form-control" id="recommend_letter_mac"  name="recommend_letter_mac">
                                                    </div>
                                                </div>
                                            </div>

                                            {{--<div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>??????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="academic_year_mac" name="academic_year_mac" class="form-control" value="" placeholder="??????????????????????????????"  >
                                                </div>
                                            </div>--}}

                                            
                                            
                                            <div class="row mb-3">
                                                <label class="col-md-6 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}</span>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? - </label>
                                                
                                            </div>

                                            
                                            <div class="row mb-3">
                                                <label class="col-md-7 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>???????????????????????????????????????????????? ?????????????????????????????????????????? ????????????????????????????????????????????????????????????-</label>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-12 col-form-label">
                                                    <span class="pull-left" style="padding-left: 170px;">{{ __('(???)') }}</span>
                                                    <span class="pull-left" style="padding-left: 65px; padding-right: 45px;"><input type="radio" class="form-check-input" name="internship" value="?????????????????? ?????????????????????" id="gov_department"  onclick="$('#gov_department_file').show()"></span>
                                                    ?????????????????? ?????????????????????</label>
                                            </div>

                                            <div id="gov_department_file" style="display:none">
                                                <div class="row mb-3">
                                                    <label class="col-md-12 col-form-label label">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????? ????????????????????????????????????????????????</label>
                                                </div>

                                    
                                                <div class="row mb-3">
                                                    <label class="col-md-8 col-form-label label"><span class="pull-left" style="padding-left: 310px;">{{ __('(???)') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-4">
                                                            <input type="file" id="good_morale_file" name ="good_morale_file" class="form-control" value="" >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-8 col-form-label label"><span class="pull-left" style="padding-left: 310px;">{{ __('(???)') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-4" >
                                                        <input type="file" class="form-control" value="" id="no_crime_file" name="no_crime_file" >
                                                    </div>
                                                </div>

                                            </div>
                                            

                                            <div class="row mb-3">
                                                <label class="col-md-12 col-form-label">
                                                    <span class="pull-left" style="padding-left: 170px;">{{ __('(???)') }}</span>
                                                    <span class="pull-left" style="padding-left: 65px; padding-right: 45px;"><input type="radio" class="form-check-input" name="internship"  value="????????????????????????????????????????????????????????????????????????????????????????????????" id="personal_acc_training" onclick="$('#gov_department_file').hide()"></span>
                                                    ???????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-12 col-form-label">
                                                    <span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>
                                                    <span class="pull-left" style="padding-left: 148px;padding-right: 45px;"><input type="radio" class="form-check-input" value="??????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????"  name="internship"  id="after_second_exam" onclick="$('#gov_department_file').hide()" ></span>
                                                    ?????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????</label>
                                            </div>
                                            <div class="form-check-radio px-0">
                                                    <label  class="error attend_place_error" style="display:none; padding-left:45px" for="internship">Please select one</label>
                                                </div>
                                            

                                            {{--<div class="row mb-3">
                                                <label class="col-md-10 col-form-label"><span class="pull-left" style="padding-right: 30px;">{{ __('?????????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????? ????????????????????????????????????????????????</label>
                                            </div>

                                
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                        <input type="file" id="good_morale_file" class="form-control" value="" >
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                <div class="col-md-8" >
                                                    <input type="file" class="form-control" value="" id="no_crime_file" >
                                                </div>
                                            </div>--}}

                                            {{--<div class="row mb-3">
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left" style="padding-right: 61px;">{{ __('?????????') }}</span>
                                                    <span class="pull-left">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                        <input type="text" name="batch_no" class="form-control batch_no"  placeholder="?????????????????????????????????????????????" id="batch_no_mac"  readonly>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????</label>
                                                <div class="col-md-8">
                                                        <input type="text" name="batch_part_no" class="form-control course_name" placeholder="?????????????????????" id="part_no_mac"  readonly>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 85px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="batch_personal_no" class="form-control " placeholder="?????????????????????????????????????????????" id="personal_no_mac" >

                                                </div>
                                            </div>--}}

                                            <div class="row mb-4" >
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left">{{ __('?????????') }}</span>???????????????????????????????????????????????????????????????????????????</label>
                                                            {{-- <span class="pull-left" style="padding-left: 113px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label> --}}
                                                <div class="col-md-8">
                                                    <input type="text" name="batch_personal_no" class="form-control personal_no_mac" placeholder="???????????????????????????????????????????????????????????????????????????" id="personal_no_mac"  >
    
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????? Module</label>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_one" type="radio"  name="module" value="1" id="module1" >
                                                            <label class="form-check-label">{{ __('Module-1') }}</label>
                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_two" type="radio" name="module" value="2" id="module2" >
                                                            <label class="form-check-label">{{ __('Module-2') }}</label>

                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <input class="form-check-input module_full" type="radio" name="module" value="3" id="allmodule" >
                                                            <label class="form-check-label">{{ __('All Module') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-radio px-0">
                                                        <label  class="error attend_place_error" style="display:none;" for="module">Please select one</label>
                                                    </div>
                                                </div>
                                            </div>

                                              

                                            <div class="row mb-3" id="direct_access_no_mac_div">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="direct_access_no_mac" name="direct_access_no_mac" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????? ????????????????????????" >
                                                </div>
                                            </div>

                                            <div class="row mb-3" id="entry_success_no_mac_div">
                                                
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left">{{ __('?????????') }}</span>
                                                        <span class="pull-left" style="padding-left: 75px;">{{ __('(???)') }}</span>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                    <input type="text" id="entry_success_no_mac" name="entry_success_no_mac" class="form-control" value="" placeholder="???????????????????????????????????????????????????????????????????????????????????????????????????????????????" >
                                                    </div>
                                            </div>

                                            <div class="row mb-3" id="entry_success_roll_no_mac_div">
                                                <label class="col-md-4 col-form-label label">
                                                    <span class="pull-left" style="padding-left: 100px;">{{ __('(???)') }}</span>????????????????????????</label>
                                                <div class="col-md-8">
                                                <input type="text" id="entry_success_roll_no_mac" name="entry_success_roll_no_mac" class="form-control" value="" placeholder="????????????????????????" >
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
                                            

                                            <div class="row mb-3 mt-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" onchange="$('#submit_btn_mac').prop('disabled', !this.checked)">
                                                        <span class="form-check-sign"></span>
                                                        <p class="fw-bolder">
                                                            * ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                            * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                    <button type="submit" disabled class="btn btn-success btn-hover-dark w-25" id="submit_btn_mac">{{ __('Submit') }}</button>
                                                
                                            </div>
                                        </form>
                                </div>
                            </div>

                        </div>

                <!-- Exam Feedback Text -->
                <div class="exam_feedback" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body exam_text">

                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!-- MAC -->
    <form method="post" class="needs-validation" action="javascript:Mac_Submit();" enctype="multipart/form-data"
          novalidate>
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
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(MAC) Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="cpa1mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

    <!-- private -->
    <form method="post" class="needs-validation" action="javascript:Private_School_Submit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="privateSchoolModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(Private School) Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="cpa1private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>


    <!-- self -->
    <form method="post" class="needs-validation" action="javascript:Self_Study_Submit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="selfStudyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(Self Study) Form Fee - ****** MMK</h4>
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
                                <button type="submit" id="cpa1self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

@endsection
@push('scripts')
<script src="{{ asset('js/form_validation/cpa_one_reg_validation.js') }}"></script>
<script type="text/javascript">


        $('document').ready(function(){

                $("input[name='academic_year_self']").flatpickr({
                        enableTime: false,
                        dateFormat: "Y",
                        allowInput: true,
                });

                const queryString = location.search;
                const urlParams = new URLSearchParams(queryString);
                getDegree();
                selectedRegistration(urlParams.get("study_type"))

                get_student_info(student_id).then(data => {
                    if(data){
                        // console.log('data',data);
                        let current_stu_course = data.data.student_course_regs.slice(-1);
                        let student_course_regs = data.data.student_course_regs;
                        let last_exam = data.data.exam_registers.slice(-1);
                        // console.log('current_stu_course',current_stu_course); 
                        // console.log('last_exam',last_exam);  
                        
                        if(current_stu_course[0].mac_type == 1){
                            $("#sub_mac").prop("checked",true);
                        }else{
                            // console.log("Hello111")
                            $("#sub_mac2").prop("checked",true);
                        }


                            $('.sr_no').val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                            $('.course_name').val(current_stu_course[0].batch.course.name);
                            $(".batch_no").val(current_stu_course[0].batch.number);
                            $(".batch_id").val(current_stu_course[0].batch.id);
                            if(last_exam.length!=0){
                                // console.log(last_exam[0].grade == 1 && last_exam[0].course.code == 'cpa_1')
                                // check last exam and show current data
                                if(last_exam[0].grade == 1 && last_exam[0].course.code == 'cpa_1'){
                                    let batch_id = localStorage.getItem('batch_id');
                                    // console.log("natch-id",batch_id);
                                    // $('.batch_id').val(batch_id);
                                    $.ajax({
                                        type: "get",
                                        url: BACKEND_URL+"/batch/"+batch_id,
                                        contentType: false,
                                        processData: false,
                                        async:false,
                                        success: function (res) {
                                            // console.log('res',res)
                                            $('.batch_no').val(res.data.number);                                            
                                            $('.batch_id').val(res.data.id);
                                            $('.batch_number').append(number2mm(res.data.number))
                                            // $('.personal_no').val(data.data.cpersonal_no);
                                            $('#remain_module').val(last_exam[0].pass_module)                                            

                                                if(last_exam[0].pass_module == "1"){
                                                    $(".module_two").prop("checked", true);
                                                
                                                    $('.module_one').attr('disabled', true);
                                                    $('.module_full').attr('disabled', true);

                                                }
                                                else if(last_exam[0].pass_module ==  "2"){
                                                    $(".module_one").prop("checked", true);
                                                    $('.module_two').attr('disabled', true);
                                                    $('.module_full').attr('disabled', true);

                                                }
                                                else if(last_exam[0].pass_module =="3"){
                                                    $(".module_full").prop("checked", true);
                                                    $('.module_two').attr('disabled', true);
                                                    $('.module_one').attr('disabled', true);
                                                }
                                                else{
                                                    $(".module_one").prop("checked", false);
                                                    $('.module_two').attr('checked', false);
                                                    $('.module_full').attr('checked', false);

                                                    $(".module_one").prop("disabled", false);
                                                    $('.module_two').attr('disabled', false);
                                                    $('.module_full').attr('disabled', false);                                                    
                                                }                                    
                                               
                                        }
                                    })   
                                }
                                else{
                                    let batch_id = localStorage.getItem('batch_id');
                                    $('.batch_id').val(batch_id);
                                    $(".batch_number").append(number2mm(current_stu_course[0].batch.number));
                                    $('#remain_module').val("fail");
                                } 
                            }
                            else{
                                $('.batch_no').val(current_stu_course[0]?.batch?.number);
                                $(".batch_number").append(number2mm(current_stu_course[0].batch.number));
                                $('.batch_id').val(current_stu_course[0].batch.id);
                            }                    // $('.batch_no').val(current_stu_course[0].batch.number);
                            

                        var info = data.data;   
                                         
                        var student_register = info.student_register.slice(-1)
                        

                        //show or hide direct_access_no and entry_success
                        if(last_exam.length==0 || info.da_pass_roll_number || student_register[0]?.direct_access_no || student_course_regs[1].qt_entry != 1){
                            // alert("for direct");
                            $("#direct_access_no_self_div").show();
                            $("#entry_success_no_self_div").hide();
                            $("#entry_success_roll_no_self_div").hide();

                            $("#direct_access_no_private_div").show();
                            $("#entry_success_no_private_div").hide();
                            $("#entry_success_roll_no_private_div").hide();

                            $("#direct_access_no_mac_div").show();
                            $("#entry_success_no_mac_div").hide();
                            $("#entry_success_roll_no_mac_div").hide();

                            $("#direct_access_no_self").val(current_stu_course[0].batch.number);
                            $("#direct_access_no_private").val(current_stu_course[0].batch.number);
                            $("#direct_access_no_mac").val(current_stu_course[0].batch.number);
                        }
                        else if(student_register[0]?.entry_success_no || last_exam[0].exam_type_id == 3 || last_exam[0].exam_type_id == 2){   
                            console.log("for entry1");                        
                            $("#direct_access_no_self_div").hide();
                            $("#entry_success_no_self_div").show();
                            $("#entry_success_roll_no_self_div").show();

                            $("#direct_access_no_private_div").hide();
                            $("#entry_success_no_private_div").show();
                            $("#entry_success_roll_no_private_div").show();

                            $("#direct_access_no_mac_div").hide();
                            $("#entry_success_no_mac_div").show();
                            $("#entry_success_roll_no_mac_div").show();

                            $("#entry_success_no_self").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : "");                            
                            $("#entry_success_no_private").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : "");
                            $("#entry_success_no_mac").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : "");

                            $("#entry_success_roll_no_self").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                            $("#entry_success_roll_no_private").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                            $("#entry_success_roll_no_mac").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                        }else{
                            console.log("for entry2");
                            $("#direct_access_no_self_div").hide();
                            $("#entry_success_no_self_div").show();
                            $("#entry_success_roll_no_self_div").show();

                            $("#direct_access_no_private_div").hide();
                            $("#entry_success_no_private_div").show();
                            $("#entry_success_roll_no_private_div").show();

                            $("#direct_access_no_mac_div").hide();
                            $("#entry_success_no_mac_div").show();
                            $("#entry_success_roll_no_mac_div").show();

                            $("#entry_success_no_self").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : 1);
                            $("#entry_success_no_private").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : 1);
                            $("#entry_success_no_mac").val(last_exam[0].sr_no != null ? last_exam[0].sr_no : 1);

                            $("#entry_success_roll_no_self").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                            $("#entry_success_roll_no_private").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                            $("#entry_success_roll_no_mac").val(current_stu_course[0].sr_no != null ? current_stu_course[0].sr_no : "");
                        }
                        

                        var job_history = data.data.student_job;
                        var education_history = data.data.student_education_histroy;
                        // var mac_name = current_stu_course[0].mac_type == 2 ?   "(????????????????????????????????????????????????????????????????????????)" : "(???????????????????????????????????????????????????????????????)";
                        //     $('#mac_type').text(mac_name)
                        if(info){
                        $("#mac_container").find("input[name=name_mm]").val(info.name_mm);
                        $("#mac_container").find("input[name=name_eng]").val(info.name_eng);
                        $("#mac_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                        $("#mac_container").find("input[name=nrc_township]").val(info.nrc_township);
                        $("#mac_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                        $("#mac_container").find("input[name=nrc_number]").val(info.nrc_number);
                        $("#mac_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                        $("#mac_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                        $("#mac_container").find("input[name=race]").val(info.race);
                        $("#mac_container").find("input[name=religion]").val(info.religion);
                        $("#mac_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                        $("#mac_container").find("input[name=phone]").val(info.phone);
                        $("#mac_container").find("input[name=address]").val(info.address);
                        $("#mac_container").find("input[name=current_address]").val(info.current_address);
                        $("#mac_container").find("input[id=personal_no_mac]").val(info.cpersonal_no);
                        // $("#mac_container").find("input[name=degree_name]").val(education_history.degree_name);
                        $("#mac_container").find(".degree_id").val(education_history.degree_id);
                        if(education_history.degree_id == 40){
                                
                            $("#mac_container").find("input[name=degree_name]").val(education_history.degree_name);
                            $("#mac_container").find('.other_degree_name').show();
                        }
                        $("#mac_container").find("input[name=name]").val(job_history.company_name);
                        $("#mac_container").find("input[name=position]").val(job_history.position);
                        $("#mac_container").find("input[name=department]").val(job_history.department);
                        $("#mac_container").find("input[name=organization]").val(job_history.organization);
                        //$("#mac_container").find("input[name=address]").val(job_history.address);
                        //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                        $("#mac_container").find("input[name=company_name]").val(job_history.company_name);
                        $("#mac_container").find("input[name=salary]").val(job_history.salary);
                        $("#mac_container").find("input[name=office_address]").val(job_history.office_address);
                        document.getElementById('mac_preview_img').src = BASE_URL + data.data.image;
                        //$("#mac_container").find("previewImg").attr('src',BASE_URL + data.data.image);
                        
                        $("#self_study_container").find("input[name=name_mm]").val(info.name_mm);
                        $("#self_study_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                        $("#self_study_container").find("input[name=name_eng]").val(info.name_eng);
                        $("#self_study_container").find("input[name=nrc_township]").val(info.nrc_township);
                        $("#self_study_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                        $("#self_study_container").find("input[name=nrc_number]").val(info.nrc_number);
                        $("#self_study_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                        $("#self_study_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                        $("#self_study_container").find("input[name=race]").val(info.race);
                        $("#self_study_container").find("input[name=religion]").val(info.religion);
                        $("#self_study_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                        $("#self_study_container").find("input[name=phone]").val(info.phone);
                        $("#self_study_container").find("input[name=address]").val(info.address);
                        $("#self_study_container").find("input[name=current_address]").val(info.current_address);
                        $("#self_study_container").find("input[id=personal_no_self]").val(info.cpersonal_no);

                        // $("#self_study_container").find("input[name=degree_name]").val(education_history.degree_name);
                        $("#self_study_container").find(".degree_id").val(education_history.degree_id);
                        if(education_history.degree_id == 40){
                                
                            $("#self_study_container").find("input[name=degree_name]").val(education_history.degree_name);
                            $("#self_study_container").find('.other_degree_name').show();
                        }
                        $("#self_study_container").find("input[name=name]").val(job_history.company_name);
                        $("#self_study_container").find("input[name=position]").val(job_history.position);
                        $("#self_study_container").find("input[name=department]").val(job_history.department);
                        $("#self_study_container").find("input[name=organization]").val(job_history.organization);
                        //$("#mac_container").find("input[name=address]").val(job_history.address);
                        //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                        $("#self_study_container").find("input[name=company_name]").val(job_history.company_name);
                        $("#self_study_container").find("input[name=salary]").val(job_history.salary);
                        $("#self_study_container").find("input[name=office_address]").val(job_history.office_address);
                        
                        document.getElementById('self_study_preview_img').src = BASE_URL + data.data.image;

                        $("#private_school_container").find("input[name=name_mm]").val(info.name_mm);
                        $("#private_school_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                        $("#private_school_container").find("input[name=name_eng]").val(info.name_eng);
                        $("#private_school_container").find("input[name=nrc_township]").val(info.nrc_township);
                        $("#private_school_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                        $("#private_school_container").find("input[name=nrc_number]").val(info.nrc_number);
                        $("#private_school_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                        $("#private_school_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                        $("#private_school_container").find("input[name=race]").val(info.race);
                        $("#private_school_container").find("input[name=religion]").val(info.religion);
                        $("#private_school_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                        $("#private_school_container").find("input[name=phone]").val(info.phone);
                        $("#private_school_container").find("input[name=address]").val(info.address);
                        $("#private_school_container").find("input[name=current_address]").val(info.current_address);
                        $("#private_school_container").find("input[id=personal_no_private]").val(info.cpersonal_no);

                        // $("#private_school_container").find("input[name=degree_name]").val(education_history.degree_name);
                        $("#private_school_container").find(".degree_id").val(education_history.degree_id);
                        if(education_history.degree_id == 40){
                                
                            $("#private_school_container").find("input[name=degree_name]").val(education_history.degree_name);
                            $("#private_school_container").find('.other_degree_name').show();
                        }
                        $("#private_school_container").find("input[name=name]").val(job_history.company_name);
                        $("#private_school_container").find("input[name=position]").val(job_history.position);
                        $("#private_school_container").find("input[name=department]").val(job_history.department);
                        $("#private_school_container").find("input[name=organization]").val(job_history.organization);
                        //$("#mac_container").find("input[name=address]").val(job_history.address);
                        //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                        $("#private_school_container").find("input[name=company_name]").val(job_history.company_name);
                        $("#private_school_container").find("input[name=salary]").val(job_history.salary);
                        $("#private_school_container").find("input[name=office_address]").val(job_history.office_address);
                        document.getElementById('private_preview_img').src = BASE_URL + data.data.image;                  
                        }

                        // government staff OR not 

                        if(info.gov_staff == 1){
                            $("#mac_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                            $("#self_study_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                            $("#private_school_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                            $("#rec_letter_mac").css("display",'block');
                            $("#rec_letter_private").css("display",'block');
                            $("#rec_letter_self").css("display",'block');
                            if(info.recommend_letter!=null){
                                    $(".recommend_letter").append("<a href='"+BASE_URL+info.recommend_letter+"'  target='_blank'>View File</a><br/>")
                                }
                        }
                        else{
                            $("#mac_container").find("input[name=gov_staff][value=0]").prop("checked",true);
                            $("#self_study_container").find("input[name=gov_staff][value=0]").prop("checked",true);
                            $("#private_school_container").find("input[name=gov_staff][value=0]").prop("checked",true);
                        }

                        //gender
                        if (info.gender == "Male") {
                            $("#male_self").prop("checked", true);
                            $("#male_private").prop("checked", true);
                            $("#male_mac").prop("checked", true);
                        } else {
                            $("#female_self").prop("checked", true);
                            $("#female_private").prop("checked", true);
                            $("#female_mac").prop("checked", true);
                        }

                        // console.log("Hello",data.data)
                        if(data.data.exam_registers.length!=0){
                            // alert("Hello")
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
                            if(current_stu_course[0].offline_user==1){
                                $("input[name='mac_type']").prop('disabled', true);
                            }else{
                                $("input[name='mac_type']").prop('disabled', false);
                            }
                            
                        }
                        else{
                            // console.log("Hellowww")
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

                })

                $("#cpa_one_self_study_form").submit(function( event ) {
                    var fields = $("input[name='reg_reason[]']").serializeArray();
                    if (fields.length === 0)
                    {
                        //alert('nothing selected');
                                $("input[name='reg_reason[]']").siblings("label").css('color','red');
                        return false;
                    }
                    else
                    {
                            $("input[name='reg_reason[]']").siblings("label").css('color','#212529');
                        //alert(fields.length + " items selected");
                    }

                });

                $("input[name='reg_reason[]']").change(function(){
                    $("input[name='reg_reason[]']").siblings("label").css('color','#212529');
                });
            });


reg_feedback();
var exam_date=localStorage.getItem("exam_date");
loadSchoolList();
</script>
<script>
    // $( "#submit_btn_mac" ).click(function() {
    //   console.log("*****",allFilled('#cpa_mac_form'));
    //     if(allFilled('#cpa_mac_form')){
    //         $('#macModal').modal('show');
    //     }
    //     else{
    //     }
    // });
    // $( "#submit_btn_ss" ).click(function() {
    //     if(allFilled('#cpa_ss_form')){
    //         $('#selfStudyModal').modal('show');
    //     }
    //     else{
    //     }
    // });
    // $( "#submit_btn_pp" ).click(function() {
    //     if(allFilled('#cpa_pp_form')){
    //         $('#privateSchoolModal').modal('show');
    //     }
    //     else{
    //     }
    // });

    // function allFilled(form_id) {
    //     var filled = true;

    //     $(form_id+' input').each(function() {
    //         // if($(this).attr('id')=="direct_access_no_mac")
    //         // {   }
    //         // else if( $(this).attr('id')=="entry_success_no_mac")
    //         // {   }
    //         // else{
    //         //     if($(this).val() == ''  ) filled = false;
    //         // }
    //         console.log($(this).attr('id'));
    //         if($('input[type=text]') && $(this).val() == ''  ) filled = false;
    //         //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
    //     });
    //     return filled;
    // }


    // function allFilled(form_id) {???
    //     var filled = true;
    //     $(form_id+' input').each(function() {???
    //     console.log($(this).attr('id'));
    //     if($('input[type=text]') && $(this).val() == ''  ) filled = false;
    //             }???);
    //     return filled;
    // }???






    // mac
    $('#cash_img_mac').click(function() {
        $('#cpa1mac_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1mac_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1mac_btn').prop('disabled', true);
    });
    $('#cpa1mac_btn').prop('disabled', true);

    $('#cpa1mac_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal3').modal('hide');
        }, 1000);
    });

    // private
    $('#cash_img_private').click(function() {
        $('#cpa1private_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1private_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1private_btn').prop('disabled', true);
    });
    $('#cpa1private_btn').prop('disabled', true);

    $('#cpa1private_btn').click(function () {
        setTimeout(function () {
            $('#privateSchoolModal').modal('hide');
        }, 1000);
    });

    // self
    $('#cash_img_self').click(function() {
        $('#cpa1self_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1self_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1self_btn').prop('disabled', true);
    });
    $('#cpa1self_btn').prop('disabled', true);

    $('#cpa1self_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal2').modal('hide');
        }, 1000);
    });

    // $(document).on('click', '#macChannel', function () {
    //         setTimeout(function() {$('#macModal').modal('hide');}, 1000);
    //         $('#macPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#mac_btn').click(function() {
    //         setTimeout(function() {
    //             $('#macPaymentModal').modal('hide');
    //         }, 1000);
    //     });

    //     $(document).on('click', '#schoolChannel', function () {
    //         setTimeout(function() {$('#privateSchoolModal').modal('hide');}, 1000);
    //         $('#schoolPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#private_btn').click(function() {
    //         setTimeout(function() {
    //             $('#schoolPaymentModal').modal('hide');
    //         }, 1000);
    //     });

    //     $(document).on('click', '#selfChannel', function () {
    //         setTimeout(function() {$('#selfStudyModal').modal('hide');}, 1000);
    //         $('#selfPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#self_btn').click(function() {
    //         setTimeout(function() {
    //             $('#selfPaymentModal').modal('hide');
    //         }, 1000);
    //     });
</script>
@endpush
