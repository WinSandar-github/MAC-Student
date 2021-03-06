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
                    <h2 class="title">Teacher Registration  <span>Form</span></h2>
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

            <div class="row mt-5">

                    <div id="teacher_form" class="card border-success mb-3">
                        <div class="card-body p-4">
                            <form id="teacher_register_form" enctype="multipart/form-data" action="javascript:void();"  class="needs-validation" autocomplete="off" novalidate><!--class="needs-validation"-->
                                <div class="row mb-3">
                                    <h5 class="card-title text-center fw-bolder">??????????????????????????????????????????????????????????????????????????????</h5>
                                    <h5 class="card-title text-center fw-bolder">?????????????????????????????????????????????????????????????????????????????????????????????</h5>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-10"></div>
                                    <label class="col-md-2 col-form-label fw-bolder">????????????????????????-???</label>
                                                    
                                </div>
                              <div class="row mb-3">
                                <div class="col-md-8">

                                  <div class="row mb-5">
                                    <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????</label>
                                      <div class="col-md-6">
                                          <input type="email" name="email" class="form-control" placeholder="???????????????????????????????????????????????????????????????" id="email">
                                          
                                      </div>
                                  </div>

                                  <div class="row mb-5">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                        <div class="col-md-6">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="???????????????????????????????????????????????? ?????????????????????" autocomplete='off'  minlength="8" >
                                           
                                        </div>
                                  </div>

                                  <div class="row mb-5">
                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????????????????????????????????????????</label>
                                        <div class="col-md-6">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????" autocomplete='off' >
                                           
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-4 text-center">
                                  <div class="col-md-8 pull-right">
                                    
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
                                                <p >
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </p>
                                            </div>
                                    {{--User Photo--}}
                                  </div>
                                  
                                </div> 
                                
                              </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                    <div class="col-md-4">
                                        <input type="text" name="name_mm" id="name_mm" class="form-control"  placeholder="????????????(??????????????????)"  >
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="name_eng" class="form-control" placeholder="????????????(???????????????????????????)" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <div class="row" >
                                            <div class="col-md-2 col-5 pr-1">
                                                <select class="form-control form-select" name="nrc_state_region" id="nrc_state_region" >
                                                    <option value="" disabled selected>??????????????????</option>
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <select class="form-control form-select" name="nrc_township" id="nrc_township" >
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
                                                <select class="form-control form-select" name="nrc_citizen" id="nrc_citizen" >
                                                    <option value="" disabled selected>??????????????????</option>
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                            <input type="text" name="nrc_number" id="nrc_number" placeholder="??????????????? ?????????????????????" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^???-???]/g,'');"  maxlength="6" minlength="6"  style="height: 38px" autocomplete="off" >
                                            </div>
                                        </div>
                                    </div>
                              </div>

                                <div class="row mb-3">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                            <div class="row mb-3">
                                                <div class="col-md-6 ">
                                                    <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail shadow">
                                                            <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                        <div>
                                                            <span class="btn btn-secondary btn-round btn-file">
                                                                <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(???????????????)</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                
                                                                <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*" required>
                                                            </span>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                        </div>
                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
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
                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                  <label class="col-md-3 col-form-label label">{{ __('?????????????????? (??????????????????/???????????????????????????)') }}</label>
                                    <div class="col-md-4">
                                      <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" placeholder="?????????????????? (??????????????????)" autocomplete="off" >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="father_name_eng" class="form-control" placeholder="?????????????????? (???????????????????????????)" autocomplete="off" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                    <label class="col-md-3 col-form-label label">????????????/???(Gender)</label>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="form-check m-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"  value="male"> ????????????
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="female" > ???

                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????</label>
                                    <div class="col-md-8">
                                         <input type="text" placeholder="?????????????????????" name="race" autocomplete="off" class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="????????????????????????????????????????????????" autocomplete="off" name="religion" class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label for="" class="col-md-3 col-form-label label">????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" class="form-control" autocomplete="off"
                                                   placeholder="dd-mm-yyyy" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('?????????????????????????????????') }}</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control" placeholder="?????????????????????????????????" autocomplete="off" id="phone">
                                       
                                    </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(??????????????????)</label>
                                        <div class="col-md-8">
                                            <textarea placeholder="????????????????????????????????????????????????(??????????????????)" name="current_address"
                                                   class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(???????????????????????????)</label>
                                        <div class="col-md-8">
                                            <textarea type="text" placeholder="????????????????????????????????????????????????(???????????????????????????)" name="eng_current_address"
                                                   class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                        </div>
                                </div>

                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????????????????????????????(??????????????????)</label>
                                        <div class="col-md-8">
                                            <textarea type="text" placeholder="?????????????????????????????????????????????????????????(??????????????????)" name="address"
                                                   class="form-control" value="{{ old('current_address') }}" autocomplete="off"></textarea>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????????????????????????????(???????????????????????????)</label>
                                        <div class="col-md-8">
                                            <textarea type="text" placeholder="?????????????????????????????????????????????????????????(???????????????????????????)" name="eng_address"
                                                   class="form-control" value="{{ old('current_address') }}" autocomplete="off"></textarea>
                                        </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('???????????????????????????????????????') }}</label>
                                    <div class="col-md-8">
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
                                                <tr>
                                                    <td class="text-center"><input type="number" class="form-control" value="1" style="border:none"/></td>
                                                    <td><input type="text" name="degrees[]" class="form-control"  autocomplete="off" required></td>
                                                    <td><input type="file" name="degrees_certificates[]" class="form-control"  required></td>
                                                    <td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick='delRowEducation("tbl_degree_body")'><li class="fa fa-times"></li></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:25px;margin-top:-12px;text-align:right;">
                                            <div class="col-md-11 pull-right">
                                                <label class="invalid-feedback degree text-right text-danger">??????????????????????????????????????? ??????????????????</label>
                                            </div>

                                </div>
                                <div class="row mb-3" style="clear:both;">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('????????????????????????????????????????????? ????????????/???????????????') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_staff1" value="1" onclick="selectStaff(1)" > ????????????
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gov_employee" id="gov_staff" value="0" onclick="selectStaff(0)" > ???????????????

                                            </div>
                                            <div class="col-md-4">
                                                <label class="invalid-feedback gov_employee text-danger">????????????????????????????????????????????? ????????????/??????????????? ??????????????????</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="hinitial_status">
                                <div class="row">
                                    <div id="rec_letter" style="display:none" >
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-labe mt-1 label_align_right">?????????????????????????????? ???????????????????????????????????? ???????????????????????????????????????</label>

                                                    <div class="col-md-8">
                                                        <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                        
                                                    </div>
                                            </div>
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">???????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="???????????????" name="position" class="form-control"
                                                            value="{{ old('position') }}" autocomplete="off" >
                                                    </div>
                                            </div>

                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">?????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="?????????" name="department" class="form-control"
                                                            value="{{ old('department') }}" autocomplete="off" >
                                                    </div>
                                            </div>
                                            <div class="row mb-3">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-3 col-form-label label_align_right">??????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="??????????????????????????????????????????" name="organization"
                                                            class="form-control" value="{{ old('organization') }}" autocomplete="off" >
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                    
                                
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-3 col-form-label label">???????????????????????????????????????????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="form-check m-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="school_type" id="school_staff1" value="1" onclick="selectSchoolType(1)" > Private
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="school_type" id="school_staff2" value="0" onclick="selectSchoolType(0)" > Individual

                                            </div>
                                            <div class="col-md-8">
                                                <label class="invalid-feedback school_type text-danger">??????????????????????????????????????????????????????????????????????????????????????? Private/Individual ??????????????????</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-3 col-form-label label"></label>
                                    <div class="col-md-8">
                                        <div class="private_type">
                                            <select class="form-control form-select" name="selected_school_id" id="selected_school_id"  >
                                                    <option value="" disabled selected>??????????????????</option>
                                                    
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"></label>
                                                        <label class="col-md-3 col-form-label label"></label>
                                                        <div class="col-md-8">
                                                            <div class="private_type">
                                                                <input type="text" class="form-control" id="school_name" name="school_name">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-4 col-form-label"><b>{{ __('????????????????????????????????????????????????????????????????????? ?????????????????????????????????') }}</b></label>
                                    <div class="col-md-6 pull-right" style="text-align:right;">
                                        <label class="invalid-feedback col-form-label certificate text-danger">????????????????????????????????????????????????????????????????????? ????????????????????????????????? ??????????????????</label>
                                    </div>

                                </div>
                                <!-- <input type="hidden" id="course_name">
                                <input type="hidden" id="membership_id"> -->
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label" ></label>
                                    <label class="col-md-3 col-form-label label" >{{ __('???????????????????????? ???????????????????????????????????????????????????????????????????????????') }}</label>
                                    <div class="col-md-8">
                                        <select class="select2 form-control" name="certificates[]" id="selected_cpa_subject"  multiple="multiple"  style="width: 100%;"  >
                                               
                                        </select>
                                        
                                    </div>
                                    
                                    
                        
                                </div>
                                
                                <div class="row mb-3" >
                                    <label class="col-md-1 col-form-label "></label>
                                    <label class="col-md-3 col-form-label label" >{{ __('??????????????????????????????????????????????????????????????????????????????') }}</label>
                                    <div class="col-md-8">
                                        <select class="form-control select2" name="diplomas[]" id="selected_da_subject"  multiple="multiple"  style="width: 100%;" >
                                               
                                        </select>
                                       
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ?????????????????????????????????????????????????????????') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control " name="exp_desc" rows="3" placeholder="????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ?????????????????????????????????????????????????????????" ></textarea>
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-10 col-form-label fw-bolder">
                                        <input type="checkbox" id="submit_confirm" onclick="ConfirmSubmitTeacher()">
                                        {{ __('???????????????????????????????????? ??????????????????????????????????????? ?????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????') }}
                                    </label>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100 submit_reg_btn" id="teacher_submit" disabled>{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div  id="teacher_update" style="display:none;">
                                    <div class="card border-success mb-3">
                                        <div class="card-body p-4">
                                            <div class="col-12">
                                            <div class="row mb-3">
                                                <h5 class="card-title text-center fw-bolder">??????????????????????????????????????????????????????????????????????????????</h5>
                                                <h5 class="card-title text-center fw-bolder">?????????????????????????????????????????????????????????????????????????????????????????????</h5>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-10"></div>
                                                <label class="col-md-2 col-form-label fw-bolder">????????????????????????-???</label>
                                                                
                                            </div>
                                                <form enctype="multipart/form-data" action="javascript:updateTeacherByReject();" id="teacher_update_form">
                                                
                                                    <div class="row mb-2">
                                                        <div class="col-md-8">

                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>

                                                                <label class="col-md-5 col-form-label label" >{{ __('????????????????????????') }}</label>
                                                                <div class="col-md-6">
                                                                    <input type="email" name="email" class="form-control" autocomplete='off' >
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('????????????(??????????????????/???????????????????????????)') }}</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' >
                                                                    
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_eng" class="form-control"autocomplete='off' >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('?????????????????? (??????????????????/???????????????????????????)') }}</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" autocomplete='off'>
                                                                    
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="father_name_eng" class="form-control" autocomplete='off' >
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-md-4 text-center">
                                                            <div class="col-md-8 pull-right">
                                                                <input type="hidden" id="hidden_profile">
                                                                
                                                                {{--User Photo--}}
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail img-circle shadow">
                                                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="previewImg"  accept="image/png,image/jpeg" alt="">
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
                                                                    <p >
                                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                    </p>
                                                                </div>
                                                            {{--User Photo--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                                    <label class="col-md-1 col-form-label ">{{ __('??????') }}</label>
                                                                    <label class="col-md-3 col-form-label label">{{ __('??????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                                                    <div class="col-md-8">
                                                                        <div class="row" >
                                                                            <div class="col-md-2 col-5 px-1">
                                                                                <select class="form-control" name="update_nrc_state_region" id="update_nrc_state_region" >
                                                                                    @foreach($nrc_regions as $region)
                                                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3 col-7 px-1">
                                                                                <select class="form-control" name="update_nrc_township" id="update_nrc_township" >
                                                                                    @foreach($nrc_townships as $township)
                                                                                        <option value="{{ $township['township_mm'] }}">
                                                                                            {{ $township['township_mm'] }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-2 col-5 px-1">
                                                                                <select class="form-control" name="update_nrc_citizen" id="update_nrc_citizen" >
                                                                                    @foreach($nrc_citizens as $citizen)
                                                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-md-5 col-7 pl-1">
                                                                            <input type="text" name="update_nrc_number" id="update_nrc_number"  autocomplete='off'  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^???-???]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                    
                                                    <div class="row mb-3">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-8">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6 ">
                                                                            <input type="hidden" id="hidden_nrc_front">
                                                                            <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                                                <div class="fileinput-new thumbnail shadow">
                                                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_front_img"  accept="image/png,image/jpeg" alt="">
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
                                                                                <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <input type="hidden" id="hidden_nrc_back">
                                                                            <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                                                <div class="fileinput-new thumbnail shadow">
                                                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_back_img"  accept="image/png,image/jpeg" alt="">
                                                                                </div>
                                                                                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                                                <div>
                                                                                    <span class="btn btn-secondary btn-round btn-file">
                                                                                        <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                                                        <span class="fileinput-exists">Change</span>
                                                                                        <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" >
                                                                                    </span>
                                                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                                                </div>
                                                                                <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label class="col-md-3 col-form-label label">????????????/???(Gender)</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">

                                                                <div class="form-check m-2 form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender"  value="male" id="male"> ????????????
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" value="female" id="female"> ???

                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="race" class="form-control" >
                                                            </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="text"   name="religion" class="form-control" >
                                                            </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label">????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="date_of_birth" class="form-control" >
                                                            </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                            <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label class="col-md-3 col-form-label label">{{ __('?????????????????????????????????') }}</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="phone_number" class="form-control"  autocomplete="off">
                                                            
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(??????????????????)</label>
                                                            <div class="col-md-8">
                                                                <textarea  name="current_address"
                                                                    class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(???????????????????????????)</label>
                                                            <div class="col-md-8">
                                                                <textarea   name="eng_current_address"
                                                                    class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                                            </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                                <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                                <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????????????????????????????(??????????????????)</label>
                                                                <div class="col-md-8">
                                                                    <textarea   name="address" class="form-control" autocomplete="off" ></textarea>
                                                                </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                                <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                                <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????????????????????????????(???????????????????????????)</label>
                                                                <div class="col-md-8">
                                                                    <textarea   name="eng_address" class="form-control" autocomplete="off" ></textarea>
                                                                </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label">{{ __('???????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <table class="table tbl_degree_update table-bordered input-table">
                                                                <thead>
                                                                    <tr >
                                                                        <th class="less-font-weight text-center" width="10%">?????????</th>
                                                                        <th class="less-font-weight text-center"  width="40%">???????????????????????????/????????????/????????????????????????</th>
                                                                        <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                                        <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree_update")'><li class="fa fa-plus"></li></button></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="tbl_degree_update_body">

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>   
                                                    <div class="row mb-3" style="clear:both;">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label">{{ __('????????????????????????????????????????????? ????????????/???????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <div class="form-check mt-2 form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee1" value="1" onclick="selectStaff(1)">????????????
                                                                    
                                                                </div>
                                                                <div class="form-check mt-2 form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gov_employee" id="gov_employee2" value="0" onclick="selectStaff(0)">???????????????
                                                            

                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                            <div id="update_rec_letter" style="display:none" >
                                                                    <div class="row">
                                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                                            <label for="" class="col-md-3 col-form-labe mt-1 label_align_right">?????????????????????????????? ???????????????????????????????????? ???????????????????????????????????????</label>

                                                                            <div class="col-md-8">
                                                                                <input type="file"  class="form-control" id="recommend_letter"  name="recommend_letter">
                                                                                
                                                                            </div>
                                                                            <label for="" class="col-md-4"></label>
                                                                            <div class="col-md-8 recommend_letter">
                                                                    
                                                                            </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                                            <label for="" class="col-md-3 col-form-label label_align_right">???????????????</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="position" class="form-control" autocomplete="off">
                                                                            </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                                            <label for="" class="col-md-3 col-form-label label_align_right">?????????</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="department" class="form-control" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                                            <label for="" class="col-md-3 col-form-label label_align_right">??????????????????????????????????????????</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="organization" class="form-control" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                        <div class="row mb-5">
                                                                <input type="hidden" id="hrecommend_letter">
                                                                <input type="hidden" id="student_info_id">
                                                                <input type="hidden" id="teacher_id">
                                                                <input type="hidden" id="hschool_name">
                                                                <input type="hidden" id="payment_date">
                                                                <input type="hidden" id="initial_reject" value="This user is rejecter but this user is updated">
                                                        </div>
                                                        
                                                        <div class="row mb-3">
                                                            <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                            <label class="col-md-3 col-form-label label">???????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <div class="form-group">

                                                                    <div class="form-check m-2 form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="update_school_type" id="school_staff1" value="1" onclick="selectSchoolType(1)" > Private
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="update_school_type" id="school_staff2" value="0" onclick="selectSchoolType(0)" > Individual

                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <label class="invalid-feedback school_type text-danger">??????????????????????????????????????????????????????????????????????????????????????? Private/Individual ??????????????????</label>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-md-1 col-form-label"></label>
                                                            <label class="col-md-3 col-form-label label"></label>
                                                            <div class="col-md-8">
                                                                <div class="private_type">
                                                                    <select class="form-control form-select" name="update_selected_school_id" id="update_selected_school_id"  >
                                                                            <option value="" disabled selected>??????????????????</option>
                                                                            
                                                                    </select>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-md-1 col-form-label"></label>
                                                            <label class="col-md-3 col-form-label label"></label>
                                                            <div class="col-md-8">
                                                                <div class="private_type">
                                                                    <input type="text" class="form-control" id="update_school_name" name="update_school_name">
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-4 col-form-label"><b>{{ __('????????????????????????????????????????????????????????????????????? ?????????????????????????????????') }}</b></label>
                                                        

                                                    </div>


                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label" >{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label" >{{ __('???????????????????????? ???????????????????????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <select class="form-control select2" name="certificates[]" id="selected_cpa_subject_up"  multiple="multiple" style="width: 100%;">
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label " >{{ __('??????????????????????????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <select class="form-control select2" name="diplomas[]" id="selected_da_subject_up"  multiple="multiple" style="width: 100%;">
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label">{{ __('????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ?????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <textarea class="form-control " name="exp_desc" rows="3" ></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="teacher_exist_user" style="display:none;">
                                                        <input type="hidden" id="offline_user" > 
                                                        <div class="row mb-3">
                                                                            <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                                            <label class="col-md-3 col-form-label label">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????</label>
                                                                                <div class="col-md-8">
                                                                                    <input type="text" class="form-control" id="from_valid_date" name="from_valid_date" placeholder="dd-mm-yyyy" autocomplete="off">
                                                                                    
                                                                                </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                                            <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                                            <label class="col-md-3 col-form-label label">???????????????????????????????????????????????????????????????????????????</label>
                                                                                <div class="col-md-8">
                                                                                    <input type="text" class="form-control" id="t_code" name="t_code" autocomplete="off">
                                                                                    
                                                                                </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                                            <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                                            <label class="col-md-3 col-form-label label">?????????????????????????????????????????????????????????????????????????????????</label>
                                                                                <div class="col-md-8">
                                                                                    <input type="file" name="teacher_card" class="form-control" accept="image/*">
                                                                                    
                                                                                </div>
                                                                                <input type="hidden" id="hteacher_card">
                                                                                <label for="" class="col-md-4"></label>
                                                                                <div class="col-md-8 teacher_card_letter">
                                                                        
                                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                       
                                                        <label class="col-md-12 col-form-label fw-bolder">
                                                            <input type="checkbox" id="submit_update" onclick="ConfirmSubmitTeacher()">
                                                            {{ __('???????????????????????????????????? ??????????????????????????????????????? ?????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????') }}
                                                        </label>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <div class="col-md-2 offset-md-5">
                                                            <button type="submit" class="btn btn-success btn-hover-dark w-100 submit_btn"  disabled>{{ __('Submit') }}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                    </div>
                    <div class="row" id="teacher_renew_update" style="display:none;">
                                    <div class="card border-success mb-3">
                                        <div class="card-body p-4">
                                            <div class="col-12">
                                            <div class="row mb-3">
                                                <h5 class="card-title text-center fw-bolder">??????????????????????????????????????????????????????????????????????????????</h5>
                                                <h5 class="card-title text-center fw-bolder">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h5>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-10"></div>
                                                <label class="col-md-2 col-form-label fw-bolder">????????????????????????-???</label>
                                                                
                                            </div>
                                                <form enctype="multipart/form-data" action="javascript:updateRenewTeacherByReject();" id="teacher_renewupdate_form">
                                                    <div class="row mb-2">
                                                        <div class="col-md-8">

                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>

                                                                <label class="col-md-5 col-form-label label" >{{ __('????????????????????????') }}</label>
                                                                <div class="col-md-6">
                                                                    <input type="email" name="email" class="form-control" autocomplete='off' readonly>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('????????????(??????????????????/???????????????????????????)') }}</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' readonly>
                                                                    
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="name_eng" class="form-control"autocomplete='off' readonly>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                                <label class="col-md-5 col-form-label label">{{ __('?????????????????? (??????????????????/???????????????????????????)') }}</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" autocomplete='off' readonly>
                                                                    
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="father_name_eng" class="form-control" autocomplete='off' readonly>
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-md-4 text-center">
                                                            <div class="col-md-8 pull-right">
                                                                <input type="hidden" id="hidden_profile">
                                                                
                                                                {{--User Photo--}}
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail img-circle shadow">
                                                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}" id="previewImg"  accept="image/png,image/jpeg" alt="">
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
                                                                    <p >
                                                                        <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                    </p>
                                                                </div>
                                                            {{--User Photo--}}
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                                <label class="col-md-1 col-form-label ">{{ __('??????') }}</label>
                                                                <label class="col-md-3 col-form-label label">{{ __('??????????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                                                <div class="col-md-8">
                                                                    <div class="row" >
                                                                        <div class="col-md-2 col-5 px-1">
                                                                            <input type="text" class="form-control" name="nrc_state_region" id="nrc_state_region" readonly>
                                                                            <!-- <select class="form-control" name="nrc_state_region" id="nrc_state_region" readonly>
                                                                                @foreach($nrc_regions as $region)
                                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select> -->
                                                                        </div>
                                                                        <div class="col-md-3 col-7 px-1">
                                                                            <input type="text" class="form-control" name="nrc_township" id="nrc_township" readonly>
                                                                            <!-- <select class="form-control" name="nrc_township" id="nrc_township" readonly>
                                                                                @foreach($nrc_townships as $township)
                                                                                    <option value="{{ $township['township_mm'] }}">
                                                                                        {{ $township['township_mm'] }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select> -->
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2 col-5 px-1">
                                                                            <input type="text" class="form-control" name="nrc_citizen" id="nrc_citizen" readonly>
                                                                            <!-- <select class="form-control" name="nrc_citizen" id="nrc_citizen" readonly>
                                                                                @foreach($nrc_citizens as $citizen)
                                                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select> -->
                                                                        </div>

                                                                        <div class="col-md-5 col-7 pl-1">
                                                                        <input type="text" name="nrc_number" id="nrc_number" readonly autocomplete='off'  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^???-???]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                
                                                    <div class="row mb-3">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-8">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6 ">
                                                                        <input type="hidden" id="hidden_nrc_front">
                                                                        <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail shadow">
                                                                                <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_front_img_renew"  accept="image/png,image/jpeg" alt="">
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
                                                                            <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <input type="hidden" id="hidden_nrc_back">
                                                                        <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail shadow">
                                                                                <img src="{{ asset('assets/images/image_placeholder.png') }}" id="nrc_back_img_renew"  accept="image/png,image/jpeg" alt="">
                                                                            </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                                            <div>
                                                                                <span class="btn btn-secondary btn-round btn-file">
                                                                                    <span class="fileinput-new">???????????????????????????????????????????????????????????????????????????(??????????????????)</span>
                                                                                    <span class="fileinput-exists">Change</span>
                                                                                    <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*" >
                                                                                </span>
                                                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                                            </div>
                                                                            <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row mb-3">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="race" class="form-control" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text"   name="religion" class="form-control" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label for="" class="col-md-3 col-form-label label">????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="date_of_birth" class="form-control" disabled>
                                                        </div>
                                                    </div> -->

                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label class="col-md-3 col-form-label label">{{ __('?????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="phone" class="form-control"  autocomplete="off">
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(??????????????????)</label>
                                                            <div class="col-md-8">
                                                                <textarea placeholder="????????????????????????????????????????????????(??????????????????)" name="current_address"
                                                                    class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                                            </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">????????????????????????????????????????????????(???????????????????????????)</label>
                                                            <div class="col-md-8">
                                                                <textarea type="text" placeholder="????????????????????????????????????????????????(???????????????????????????)" name="eng_current_address"
                                                                    class="form-control" value="{{ old('address') }}" autocomplete="off" ></textarea>
                                                            </div>
                                                    </div>

                                                    <!-- <div class="row mb-3">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">?????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="text"  name="address" class="form-control" readonly>
                                                            </div>
                                                    </div> -->

                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                    <label class="col-md-3 col-form-label label">{{ __('???????????????????????????????????????') }}</label>
                                                    <div class="col-md-8">
                                                        <table class="table tbl_degree_renew_update table-bordered input-table">
                                                            <thead>
                                                                <tr >
                                                                    <th class="less-font-weight text-center" width="10%">?????????</th>
                                                                    <th class="less-font-weight text-center"  width="40%">???????????????????????????/????????????/????????????????????????</th>
                                                                    <th class="less-font-weight text-center"  width="40%">Attached Certificate</th>
                                                                    <th class="text-center" width="10%"><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("tbl_degree_renew_update")'><li class="fa fa-plus"></li></button></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="tbl_degree_renew_update_body">

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                    
                                               
                                                    <div class="row mb-5">
                                                            
                                                            <input type="hidden" id="student_info_id">
                                                            <input type="hidden" id="teacher_id">
                                                            <input type="hidden" id="hschool_name_renew">
                                                            <input type="hidden" id="hinitial_status">
                                                            
                                                            <input type="hidden" id="renew_teacher_id">
                                                            
                                                            <input type="hidden" id="renew_reject" value="This account is rejecter but it is upudated">
                                                    </div>
                                                    
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('??????') }}</label>
                                                        <label class="col-md-3 col-form-label label">???????????????????????????????????????????????????????????????????????????????????????</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">

                                                                <div class="form-check m-2 form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="school_type_renew" id="school_staff_renew1" value="1" onclick="selectSchoolType(1)" > Private
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="school_type_renew" id="school_staff_renew2" value="0" onclick="selectSchoolType(0)" > Individual

                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label class="invalid-feedback school_type text-danger">??????????????????????????????????????????????????????????????????????????????????????? Private/Individual ??????????????????</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"></label>
                                                        <label class="col-md-3 col-form-label label"></label>
                                                        <div class="col-md-8">
                                                            <div class="private_type">
                                                                <select class="form-control form-select" name="renew_selected_school_id" id="renew_selected_school_id"  >
                                                                        <option value="" disabled selected>??????????????????</option>
                                                                        
                                                                </select>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"></label>
                                                        <label class="col-md-3 col-form-label label"></label>
                                                        <div class="col-md-8">
                                                            <div class="private_type">
                                                                <input type="text" class="form-control" id="school_name_renew" name="school_name_renew" autocomplete="off">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                    <label class="col-md-4 col-form-label"><b>{{ __('????????????????????????????????????????????????????????????????????? ?????????????????????????????????') }}</b></label>
                                                    

                                                </div>


                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label" >{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label" >{{ __('???????????????????????? ???????????????????????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <select class="form-control select2" name="certificates[]" id="selected_cpa_subject_renew_update"  multiple="multiple" style="width: 100%;">
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                                        <label class="col-md-3 col-form-label label " >{{ __('??????????????????????????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <select class="form-control select2" name="diplomas[]" id="selected_da_subject_renew_update"  multiple="multiple" style="width: 100%;">
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label">???????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="renew_t_code" name="renew_t_code" readonly>
                                                                
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label">?????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-8">
                                                                <input type="file" name="renew_teacher_card" class="form-control" accept="image/*" >
                                                                
                                                            </div>
                                                    </div> 
                                                    <div class="row">
                                                    <input type="hidden" id="hrenew_teacher_card">
                                                                                <label for="" class="col-md-4"></label>
                                                                                <div class="col-md-8 renew_teacher_card_letter">
                                                                        
                                                                                </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-10 col-form-label fw-bolder">
                                                            <input type="checkbox" id="submit_renewUpdate" onclick="ConfirmSubmitTeacher()">
                                                            {{ __('???????????????????????????????????? ??????????????????????????????????????? ?????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????') }}
                                                        </label>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <div class="col-md-2 offset-md-5">
                                                            <button type="submit" class="btn btn-success btn-hover-dark w-100 submit_renewbtn"  disabled>{{ __('Submit') }}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                </div>
            </div>
            <div class="row">
                
            </div>
            <!-- Modal -->
            <form method="post" id="form1" class="needs-validation" action="javascript:void();" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <button type="submit" id="btn1" onclick="check_email_teacher()" class="btn btn-success btn-hover-dark w-30">Verify
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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/teacher_register.js')}}"></script>
<script src="{{ asset('js/form_validation/teacher_validation.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
        
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
        });
        $("input[name='from_valid_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
        });
        $('.select2').select2({
                placeholder: "Select"
        });
        $( "#teacher_register_form" ).submit(function( event ) {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            var tbl_degree = $('.tbl_degree_body tr').length;
            var tbl_certificate = $('#selected_cpa_subject').length;
            var tbl_diploma = $('#selected_da_subject').length;
            var school_type = $('input[name="school_type"]:checked').length;
            if (!checkedNum) {
                $(".gov_employee").show();
                event.preventDefault();
            }
            if(!tbl_degree){
                $(".degree").show();
                event.preventDefault();
            }
            if(!tbl_certificate){
                $(".certificate").show();
                event.preventDefault();
            }
            if(!tbl_diploma){
                $(".certificate").show();
                event.preventDefault();
            }
            if(!school_type){
                $(".school_type").show();
                event.preventDefault();
            }
            
        });
        $('input[type=radio][name="gov_employee"]').change(function() {
            var checkedNum = $('input[name="gov_employee"]:checked').length;
            if (!checkedNum) {
                $(".gov_employee").show();
            }
            else {
                $(".gov_employee").hide();
            }
        });
        $('input[type=radio][name="school_type"]').change(function() {
            var school_type = $('input[name="school_type"]:checked').length;
            if (!school_type) {
                $(".school_type").show();
            }
            else {
                $(".school_type").hide();
            }
        });
        $("input[id*='name_mm'], text[id*='name_mm']").on('keyup', function(e) {
            myanmarLetterOnly($(this));
        });
        $(document).on('keydown', '#name_mm', function () {
            myanmarLetterOnly($(this));
        });
        $("input[id*='father_name_mm'], text[id*='father_name_mm']").on('keyup', function(e) {
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
        loadSubject(2,"selected_cpa_subject");
        loadSubject(1,"selected_da_subject");
        
        loadSchoolList();
        updateTeacher();
         
    });

</script>
@endpush
