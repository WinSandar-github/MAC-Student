@extends('layouts.app')
@section('content')
<div class="main-wrapper">
    <div class="overlay"></div>
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
                <h2 class="title">Audit Firm <span>Form</span></h2>
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
    <div class="container approve_request" style="overflow: hidden;">
        <div class="email_verify" style="display:block; margin-top:5%; margin-bottom: 5%;">
            <form id="audit_reject_register_form" method="post" class="" action="javascript:void();" enctype="multipart/form-data" >
                        <input type="hidden" name="audit_firm_type_id" id="audit_firm_type_id" value="1" />
                        <input type="hidden" name="firm_id" id="firm_id" value="" />
                        <input type="hidden" name="reject_type" id="reject_type" value="0" />
                        <input type="hidden" value="" name="offline_user">

                        <div class="col-md-12">
                            <div class="card border-success mb-3" style="padding:3% 3% 3% 3%;">
                              <div class="row mb-5">
                                  <h5 class="card-title text-center fw-bolder">
                                      APPLICATION FOR REGISTRATION OF ACCOUNTANCY FIRM NAME
                                  </h5>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="col-md-2 pull-right">
                                      <h6>For the year - {{ date('Y') }}</h6>
                                    </div>
                                    <div id="reg_no_box" style="display:none;">
                                      <div class="col-md-3 pull-left">
                                        <label for="" class="control-label text-muted fw-bolder"><small>Registration No.</small></label>
                                        <input  type="text" placeholder="Enter Registration No.!" name="accountancy_firm_reg_no" class="form-control" value="" >
                                      </div>
                                    </div>
                                </div>
                              </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                          <div class="row mb-5">
                                              {{--<label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                              <label for="" class="col-md-5 col-form-label label_align_right">Email</label>--}}
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('1.') }}</span>Email</label>
                                              <div class="col-md-8">
                                                  <input  type="email" placeholder="Enter Email!" name="email" class="form-control" value="{{ old('email') }}" >
                                                  @if ($errors->has('email'))
                                                      <span class="text-danger">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          {{--<div class="row mb-5">
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('2.') }}</span>Password</label>
                                              <div class="col-md-8">
                                                  <input type="password" placeholder="Enter Password!" name="password" id="password" class="form-control" value="" >
                                              </div>
                                              @if ($errors->has('password'))
                                                  <span class="text-danger">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                  </span>
                                              @endif
                                          </div>--}}

                                          {{--<div class="row mb-5">
                                              <label for="" class="col-md-5 col-form-label label_align_right">Confirm Password</label>
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('3.') }}</span>Confirm Password</label>
                                              <div class="col-md-8">
                                                  <input type="password" placeholder="Confirm Password!" name="confirm_password" id="confirm_password" class="form-control" >
                                              </div>
                                          </div>--}}

                                          <div class="row mb-5">
                                              {{--<label for="" class="col-md-1 col-form-label">{{ __('2.') }}</label>
                                              <label for="" class="col-md-5 col-form-label label_align_right">Accountancy Firm Name</label>--}}
                                              <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('2.') }}</span>Accountancy Firm Name</label>
                                              <div class="col-md-8">
                                                  <input  type="text" class="form-control" id="accountancy_firm_name" name="accountancy_firm_name">
                                              </div>
                                          </div>

                                          {{--<div class="row mb-5">
                                              <label class="col-md-1 col-form-label" >{{ __('3.') }}</label>
                                              <label class="col-md-5 col-form-label label_align_right">{{ __('Accountancy Firm Registration No.') }}</label>
                                              <div class="col-md-6">
                                                  <div class="form-group ">
                                                  <input type="text" class="form-control" id="accountancy_firm_reg_no" >
                                                  </div>
                                              </div>
                                          </div>--}}

                                          {{--<div class="row mb-5">
                                              <label class="col-md-1 col-form-label" >{{ __('4.') }}</label>
                                              <label class="col-md-5 col-form-label label_align_right" >{{ __('Applied Date') }}</label>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                  <input type="text" class="form-control" id="register_date" >
                                                  </div>
                                              </div>
                                          </div>--}}
                                        </div>
                                        <div class="col-md-4 text-center">
                                            {{--<div class="col-md-7 pull-right">
                                                <input type="hidden" id="hidden_profile">
                                                <div class="form-text mb-2 text-warning">Update Your Profile Photo!</div>
                                                <img class="col-md-3 profile-style" id="previewImg" src="{{ asset('assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">
                                                <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                                </p>
                                                <div class="form-text mb-2">Allowed Jpeg and Png Image.</div>
                                            </div>--}}

                                            {{--User Photo--}}
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail img-circle shadow">
                                                    <img id="previewImg" src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                         alt="Upload Photo">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                                <div class="d-flex justify-content-center">
                                                    <span class="btn btn-round btn-secondary btn-file">
                                                    <span class="fileinput-new">ဓာတ်ပုံ</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" id="profile_photo" name="profile_photo" accept="image/*" ></span>
                                                    <br>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                            {{--User Photo--}}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                      <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('3.') }}</span>Address Of Practice(Head Office)</label>
                                      <div class="col-md-8">
                                          <label for="" class="control-label text-muted fw-bolder"><small>Head Office Address(English)</small></label>
                                          <textarea name="head_office_address" class="form-control" placeholder="" autocomplete="off" value="" rows="3" style="resize:none;"></textarea>
                                      </div>
                                    </div>

                                    <div class="row mb-3">
                                      <label class="col-md-4 col-form-label label"><span class="pull-left"></span></label>
                                      <div class="col-md-8">
                                          <label for="" class="control-label text-muted fw-bolder"><small>Head Office Address(Myanmar)</small></label>
                                          <textarea id="head_office_address_mm" name="head_office_address_mm" class="form-control" placeholder="" autocomplete="off" value="" rows="3" style="resize:none;"></textarea>
                                      </div>
                                    </div>

                                    <div class="row mb-3">
                                        {{--<div class="col-md-2 offset-md-4">
                                            <label for="" class="control-label text-muted fw-bolder"><small>Township</small></label>
                                            <input  type="text" name="township" class="form-control" placeholder="" autocomplete="off" value="{{ old('township') }}" required="">
                                        </div>--}}
                                        <div class="col-md-2 offset-md-4">
                                          <label for="" class="control-label text-muted fw-bolder"><small>Post Code</small></label>
                                          <input  type="text" name="post_code" class="form-control" placeholder="" autocomplete="off" value="{{ old('post_code') }}" required="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="control-label text-muted fw-bolder"><small>Website Address</small></label>
                                            <input  type="text" name="website" class="form-control" placeholder="" autocomplete="off" value="{{ old('website') }}" required="">
                                        </div>
                                        {{--<div class="col-md-2">
                                            <label for="" class="control-label text-muted fw-bolder"><small>City</small></label>
                                            <input  type="text" name="city" class="form-control" placeholder="" autocomplete="off" value="{{ old('city') }}" required="">
                                        </div>--}}
                                        {{--<div class="col-md-2">
                                          <label for="" class="control-label text-muted fw-bolder"><small>State/Region</small></label>
                                          <input  type="text" name="state" class="form-control" placeholder="" autocomplete="off" value="{{ old('state') }}" required="">
                                        </div>--}}
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4 col-form-label"></div>
                                        <div class="col-md-2">
                                            <label for="" class="control-label text-muted fw-bolder"><small>Telephone</small></label>
                                            <input  type="text" name="phone_no" class="form-control" placeholder="" autocomplete="off" value="{{ old('phone_no') }}" required="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="control-label text-muted fw-bolder"><small>Email Address</small></label>
                                            <input  type="email" name="h_email" class="form-control" placeholder="" autocomplete="off" value="{{ old('h_email') }}" required="">
                                        </div>

                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">4.</label>
                                        <label for="" class="col-md-2 col-form-label">Branch Office</label>
                                        <label for="" class="col-md-4 branch_office_validate col-form-label" style="display:none;color:#ef815;">Please Fill Branch Office</label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12 col-form-label">
                                          <table class="table branch table-bordered input-table">
                                              <thead>
                                                  <tr>
                                                      <th class="less-font-weight">Name</th>
                                                      <th class="less-font-weight">Address</th>
                                                      <th class="less-font-weight">Township</th>
                                                      <th class="less-font-weight">Post Code</th>
                                                      <th class="less-font-weight">City</th>
                                                      <th class="less-font-weight">State/Region</th>
                                                      <th class="less-font-weight">Telephone</th>
                                                      <th class="less-font-weight">Email</th>
                                                      <th class="less-font-weight">Website</th>
                                                      <th  class="less-font-weight text-center"  >
                                                        <button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowBranch("branch")'>
                                                          <li class="fa fa-plus"></li>
                                                        </button>
                                                      </th>
                                                  </tr>
                                              <thead>
                                              <tbody id="tbl_branch_body">
                                                  <!-- <tr>
                                                      <td><input type="text" name="bo_branch_name[]" class="form-control" autocomplete="off" required></td>
                                                      <td><input type="text" name="bo_township[]" class="form-control" autocomplete="off" required></td>
                                                      <td><input type="text" name="bo_post_code[]" class="form-control" autocomplete="off" required></td>
                                                      <td><input type="text" name="bo_city[]" class="form-control" autocomplete="off" required></td>
                                                      <td><input type="text" name="bo_state_region[]" class="form-control" autocomplete="off" required></td>
                                                      <td>
                                                          <input type="text" name="bo_phone[]" class="form-control" autocomplete="off" required>
                                                      </td>
                                                      {{--<td>
                                                          <button class="btn btn-primary btn-sm" type="button" onclick='addInputTele("branch")'>
                                                              <i class="fa fa-plus"></i>
                                                          </button>

                                                      </td>--}}
                                                      <td><input type="text" name="bo_email[]" class="form-control" autocomplete="off" required></td>
                                                      <td><input type="text" name="bo_website[]" class="form-control" autocomplete="off" required></td>
                                                      <td>
                                                          <button class="delete btn btn-danger btn-sm" type="button" onclick='delRowBranch("branch")'><i class="fa fa-trash"></i></button>
                                                      </td>
                                                  </tr> -->
                                              </tbody>
                                          </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">5.</label>
                                        <label for="" class="col-md-11 col-form-label">Organization Structure</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <!-- <label class="col-md-1 col-form-label">{{ __('') }}</label> -->
                                        <div class="col-md-8" id="audit_org_validate" style="display:none;">
                                                <label class="text-danger">Organization Structure ရွေးချယ်ပါ</label>
                                        </div>
                                    </div>

                                    <div class='row organization_data mb-3'></div>

                                    <div id="sole-proprietorship">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <div class="card" id="audit_sole_proprietorship">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <label class="col-md-12 col-form-label"><b> For Sole Proprietorship</b></label>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(a) Copy of valid Public Practice Accountant Certificate</label>

                                                                </div>
                                                            </div>
                                                            <div class="public_practice_acc_certi mb-3">
                                                            </div>
                                                            <div class="controls1">
                                                                <div class="entry1">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="ppa_certis[]" >

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button type="button" class="btn btn-success btn-add btn-sm custom-btn" onclick='addInputFileFirm("controls1","entry1")'>
                                                                              <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(b) Copy of stationery/letterhead to be used in signing of auditor's report</label>
                                                                </div>
                                                            </div>
                                                            <div class="stationery_letterhead mb-3">
                                                            </div>
                                                            <div class="controls2">
                                                                <div class="entry2">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="letterheads[]" >
                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls2","entry2")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(c) Copy of Tax clearance from Internal Revenue Department</label>
                                                                </div>
                                                            </div>
                                                            <div class="tax_clearances mb-3">
                                                            </div>
                                                            <div class="controls3">
                                                                <div class="entry3">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="tax_clearances[]" >
                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls3","entry3")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{--<div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(d) Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
                                                                </div>
                                                            </div>
                                                            <div class="controls4">
                                                                <div class="entry4">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="representatives[]">
                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls4","entry4")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div id="partnership">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <div class="card" id="audit_partnership">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <label class="col-md-12 col-form-label"><b> For Partnership</b></label>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(a) Copy of valid Public Practice Accountant Certificate of all partners</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls9">
                                                                <div class="entry9">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="ppa_certis[]" required>

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls9","entry9")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(b) Copy of Certificate or Registration, if any</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls10">
                                                                <div class="entry10">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="certi_or_regs[]" >

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls10","entry10")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(c) Copy of signed Partnership Deeds/ Memorandum of Agreement</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls11">
                                                                <div class="entry11">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="deeds_memos[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls11","entry11")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(d) Copy of stationery/letterhead to be used in signing of auditor's report</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls12">
                                                                <div class="entry12">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="letterheads[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls12","entry12")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(e) Copy of Tax clearance from Internal Revenue Department</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls13">
                                                                <div class="entry13">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="tax_clearances[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls13","entry13")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{--<div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(f)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls14">
                                                                <div class="entry14">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="representatives[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls14","entry14")'>
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div id="company">
                                      <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <div class="card" id="audit_company">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <label class="col-md-12 col-form-label"><b> For Company Incorporated</b></label>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(a) Copy of valid Public Practice Accountant Certificate of all shareholders</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls19">
                                                                <div class="entry19">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="ppa_certis[]" required>
                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls19","entry19")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(b) Copy of Certificate of Incorporation</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls20">
                                                                <div class="entry20">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="certificate_incors[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls20","entry20")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(c) Copy of signed Memorandum of Associations and Articles of Associations or constitution</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls21">
                                                                <div class="entry21">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="deeds_memos[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls21","entry21")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{--<div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(d)Copy of Form 6, Form 26 and Form E</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls22">
                                                                <div class="entry22">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="form6_26e[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls22","entry22")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}

                                                            {{--<div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(e)Copy of Form A1 and/or Additional Form</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls23">
                                                                <div class="entry23">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="form_a1[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls23","entry23")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(d) Copy of commercial tax registration certificate</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls24">
                                                                <div class="entry24">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="tax_reg_certificate[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls24","entry24")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(e) Copy of stationery/letterhead to be used in signing of auditor's report</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls25">
                                                                <div class="entry25">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="letterheads[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls25","entry25")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(f) Copy of Tax clearance from Internal Revenue Department</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls26">
                                                                <div class="entry26">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="tax_clearances[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-success btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls26","entry26")'>
                                                                                <li class="fa fa-plus"></li>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{--<div class="row mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">(i)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>

                                                                </div>
                                                            </div>
                                                            <div class="controls27">
                                                                <div class="entry27">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-11 col-auto">
                                                                            <input type="file" class="form-control" name="representatives[]">

                                                                        </div>
                                                                        <div class="col-md-1 col-auto">
                                                                            <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFileFirm("controls27","entry27")'>
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div><br>

                                    <div class="modal fade" id="fileModal">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">View File</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body image-body">
                                                <div class="image-div">
                                                    <img src="" id="file" class="image-logo" />
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">6.</label>
                                        <label for="" class="col-md-4 col-form-label">Sole Proprietor/Partners/Shareholders</label>
                                        <label for="" class="col-md-6 partner_list_validate col-form-label" style="display:none;color:#ef815;">Please Fill Sole Proprietor/Partners/Shareholders</label>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label"></label>
                                        <label for="" class="col-md-11 col-form-label text-primary">
                                          Only Public Practice Accountants can be sole proprietor,partners or shareholders of an accountancy firm.
                                          (Please list down sole proprietor,partners or shareholders including all engagement partner(s) who will be signing
                                          auditor's report of the accountancy firm)
                                        </label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12 col-form-label">
                                          <table id="myTable" class="table partner_list table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th class="less-font-weight" rowspan="2">Sr</th>
                                                      <th class="less-font-weight" rowspan="2">Public Practice Reg.No</th>
                                                      <th class="less-font-weight" rowspan="2">Name</th>
                                                      <th class="less-font-weight" colspan="2">Have authority to sign Auditors' report?</th>
                                                      <th  class="less-font-weight text-center">
                                                        <button id="partner_add_btn" type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowPartnerOffline("partner_list")'>
                                                          <li class="fa fa-plus"></li>
                                                        </button>
                                                      </th>
                                                  </tr>

                                              </thead>
                                              <tbody id="tbl_partner_body">

                                              </tbody>
                                          </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">7.</label>
                                        <label for="" class="col-md-4 col-form-label">Director(s)/Officer(s)/Sole Proprietor</label>
                                        <label for="" class="col-md-4 director_validate col-form-label" style="display:none;color:#ef815;">Please Fill Director(s)/Officer(s)</label>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label"></label>
                                        <label for="" class="col-md-11 col-form-label text-primary">
                                          All directors or officers of the audit firm may not need to be a CPA(Full-Fledged)
                                        </label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12 col-form-label">
                                          <table id="myTable" class="table director table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th class="less-font-weight">Sr</th>
                                                      <th class="less-font-weight">Name</th>
                                                      <th class="less-font-weight">Position</th>
                                                      <th class="less-font-weight" >CPA Reg.No/Qualification</th>
                                                      <th class="less-font-weight" >Public Practice Reg.No</th>
                                                      <th  class="less-font-weight text-center"  >
                                                        <button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowDirector("director")'>
                                                          <li class="fa fa-plus"></li>
                                                        </button>
                                                      </th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tbl_director_body">

                                              </tbody>
                                          </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label"></label>
                                        <label for="" class="col-md-11 col-form-label text-primary">
                                          Sole proprietor/managing partner will be fully responsible for the application and updates of the firm particulars
                                        </label>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">8.</label>
                                        <label for="" class="col-md-4 col-form-label">Name Of Sole Proprietor/ Managing Partner</label>
                                        <div class="col-md-7">
                                            <input type="text" name="name_sole_proprietor" class="form-control" autocomplete="off" value="{{ old('name_sole_proprietor') }}" placeholder="Enter Name Of Sole Proprietor/ Managing Partner!" >
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">9.</label>
                                        <label for="" class="col-md-2 col-form-label">Total Staff</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 col-form-label"></div>
                                        <div class="col-md-11 col-form-label">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table id="tbl_audit_total_staff" class="table text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th class="less-font-weight" ></th>

                                                                <th class="less-font-weight">Audit Staff</th>
                                                                <th class="less-font-weight">Non-Audit Staff</th>
                                                                <th class="less-font-weight">Total</th>

                                                            </tr>

                                                        </thead>
                                                        <tbody id="tbl_audit_total_staff_body">

                                                        </tbody>
                                                        <tfoot id="tbl_audit_total_staff_foot">
                                                            <tr>
                                                                <td>Total</td>
                                                                <td><input  type='number' disabled value='0' name='total_staff[]' class='form-control' id="total_audit"  ></td>
                                                                <td><input  type='number' disabled value='0' name='total_audit_staff[]' class='form-control' id="total_non_audit"></td>
                                                                <td><input  type='number' disabled value='0' name='total_non_audit_staff[]' class='form-control' id="total_staff"></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">10.</label>
                                        <label for="" class="col-md-2 col-form-label">Audit Staff</label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-1 col-form-label"></div>
                                        <div class="col-md-11 col-form-label">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table id="tbl_audit_staff" class="table text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th class="less-font-weight" ></th>
                                                                <th class="less-font-weight" >Full Time</th>
                                                                <th class="less-font-weight" >Part Time</th>
                                                                <th class="less-font-weight">Total Time</th>

                                                            </tr>

                                                        </thead>
                                                        <tbody id="tbl_audit_staff_body">

                                                        </tbody>
                                                        <tfoot id="tbl_audit_staff_foot">
                                                            <tr>
                                                                <td>Total</td>
                                                                <td><input  disabled type='number' value='0' name='total_audit_staff[]' class='form-control' id="total_full_time"></td>
                                                                <td><input  disabled type='number' value='0' name='total_full_time[]' class='form-control' id="total_part_time"></td>
                                                                <td><input  disabled type='number' value='0' name='total_part_time[]' class='form-control' id="total_time"></td>
                                                            </tr>
                                                        </tfoot>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-1 col-form-label">11.</label>
                                        <label for="" class="col-md-3 col-form-label">Types Of Service Provided</label>
                                        <div class="col-md-4"><div class="row type_service_provided mt-1"></div></div>
                                        <div class="col-md-4 col-form-label text-danger" id="t_s_p_id_validate" style="display:none;" >
                                                Type of Service Provided ရွေးချယ်ပါ
                                        </div>
                                    </div>

                                    <div id="last_registered_year_box" style="display:none;">
                                      <div class="row mb-5">
                                          <label for="" class="col-md-1 col-form-label">12.</label>
                                          <label for="" class="col-md-4 col-form-label">Last Registered Year</label>

                                          <div class="col-md-3">
                                              <input type="text" placeholder="YYYY" name="last_registered_year" class="form-control" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>

                                    <div style="display:none" id="req_for_stop_box">
                                      <div class="row mb-5">
                                          <label for="" class="col-md-1 col-form-label">13.</label>
                                          <label for="" class="col-md-4 col-form-label">Suspended Year</label>
                                          <div class="row col-md-7 py-2">
                                              <div class="col-md-3 form-check-radio mx-2">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" id="yes"
                                                              name="req_for_stop" value="1" >
                                                      <span class="form-check-sign"></span>
                                                      Yes
                                                  </label>
                                              </div>
                                              <div class="col-md-3 form-check-radio mx-2">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" id="no"
                                                              name="req_for_stop" value="2" >
                                                      <span class="form-check-sign"></span>
                                                      No
                                                  </label>
                                              </div>

                                              <label  class="error attend_place_error" style="display:none;" for="req_for_stop">Please select one</label>
                                          </div>
                                      </div>
                                    </div>

                                    <div id="req_to_dissconect" style="display:none;">
                                      <div class="row mb-5">
                                          <label for="" class="col-md-1 col-form-label"></label>
                                          <label for="" class="col-md-4 col-form-label"></label>
                                          <div class="col-md-2">
                                              <label for="" class="col-form-label">Year</label>
                                          </div>
                                          <div class="col-md-3">
                                              <input type="text" placeholder="YYYY" name="suspended_year" class="form-control" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>

                                    {{--<div class="row">
                                        <table width="100%">
                                            <tr>
                                                <td width="5%">15</td>
                                                <td width="15%"><label class="col-form-label">လျှောက်လွှာကြေး(၁၀၀၀ ကျပ်)</label>
                                                </td>
                                                <td width="80%">
                                                    <div class="form-group">
                                                        <!-- <a href="#" class="btn btn-sm btn-block btn-info">Choose Payment</a> -->
                                                        <p class="col-md-9 text-primary">Payment System Coming Soon</p>
                                                        <input type="hidden" value="1000" name="form_fee">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>--}}

                                    {{--<div class="row">
                                        <table width="100%">
                                            <tr>
                                                <td width="5%">16</td>
                                                <td width="15%"><label class="col-form-label">မှတ်ပုံတင်ကြေး Audit Report တွင်လက်မှတ်ရေးထိုးမည့်သူတစ်ဦးလျှင်(၁၀၀,၀၀၀ ကျပ်)</label>
                                                </td>
                                                <td width="80%">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <!-- <a href="#" class="btn btn-sm btn-block btn-info">Choose Payment</a> -->
                                                        <p class="col-md-9 text-primary">Payment System Coming Soon</p>
                                                        <input type="hidden" value="100000" name="nrc_fee">
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>--}}

                                    <div class="row">
                                        <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label class="col-md-2 col-form-label" style="font-weight:bold;">{{ __('Declaration') }}</label>
                                        <label class="col-form-label" style="display:contents;font-weight:bold;">{{ __('I') }}</label>
                                        <div class="col-md-4" style="font-weight:bold;">
                                            <div class="form-group">
                                                <input style="font-weight:bold;" type="text" name="declaration" class=" @error('date_of_birth') is-invalid @enderror form-control" autocomplete="off" value="{{ old('declaration') }}" placeholder="(sole proprietor/ managing partner)" >
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="font-weight:bold;">
                                            <div class="form-group">
                                                    (sole proprietor/ managing partner)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <label class="col-md-3 col-form-label">{{ __('') }}</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                            representing all the members of the firm, confirm that the particulars stated in this form, attached supporting documents are correct.
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-2 offset-md-5">
                                            <button type="submit" id="btn_submit_audit_firm" class="btn btn-success btn-hover-dark w-100" >{{ __('Submit') }}</button>
                                            {{--<button type="submit" id="" class="btn btn-success btn-hover-dark w-100" >{{ __('Submit') }}</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset("js/form_validation/audit_reject_register_validation.js") }}"></script>
<script>
    $(document).ready(function(){

      $("input[name='last_registered_year']").flatpickr({
          enableTime: false,
          dateFormat: "Y",
          //dateFormat: "Y",
          allowInput: true,
      });
      $("input[name='suspended_year']").flatpickr({
          enableTime: false,
          dateFormat: "Y",
          //dateFormat: "Y",
          allowInput: true,
      });

    	$("input[id*='head_office_address_mm'], text[id*='head_office_address_mm']").change(function (e) {
    			myanmarLetterOnly($(this));
    	});

    	$(document).on('keydown', '#head_office_address_mm', function () {
    			myanmarLetterOnly($(this));
    	});

      $("input[name=req_for_stop]").change(function(){
        if($(this).val() == 1){
          $("#req_to_dissconect").css("display","block");
        }
        else{
          $("#req_to_dissconect").css("display","none");
        }
      });

    	function myanmarLetterOnly(self) {
    			val = self.val();
    			if (/[a-zA-Z0-9]+$/.test(val)) {
    					self.val(val.replace(/[a-zA-Z0-9]+$/, ''));
    			}
    	}

        loadAuditOrganization();
        loadAuditTypeOfService();
        loadAuditTotalStaffReg();
        loadAuditStaffReg();
        getAuditDataForRejectUpdate();
    });
</script>
@endpush
