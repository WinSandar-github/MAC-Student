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
                    <h2 class="title">Audit <span>Firm</span></h2>
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
            <div id="audit_form_pending" style="display:none; margin-top:5%;">
                <div class="card text-white bg-primary my-3">

                    <div class="card-body">
                        <p class="card-text">Your Audit Firm Form is checking</p>
                    </div>
                </div>
            </div>
            <div id="audit_reject" style="display:none; margin-top:5%;">
                <div class="card text-white bg-dark mb-3">

                    <div class="card-body">
                        {{--<p class="card-text reject">Your Audit Firm Registration Form need to prepare.Please update your form
                         </p>--}}
                        <p class="card-text reject">Your need to resubmit your audit firm registration form. Please fill your form again.
                          </p>
                    </div>
                </div>
            </div>
            <div class="row" id="audit_container"style="display:none; margin:5%;">
                <form method="post" enctype="multipart/form-data">
                    <div class="card border-success mb-3">
                        <div class="card-body text-success">
                            <div class="col-md-12">
                                {{--<div class="row">
                                    <center><h4>Audit Firm Data</h4></center><br><br>
                                    <table class="table table-bordered input-table border-success" width="100%" style="text-align:center;">
                                        <tr>
                                            <th>Accountancy Firm Name</th>
                                            <th>Applied Date</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td><span id="accountancy_firm_name"></span></td>
                                            <td><span id="register_date"></span></td>
                                            <td><span id="message"></span></td>
                                        </tr>
                                    </table>
                                    <div class="row" id="check_renew" style="display:none;">
                                        <div class="form-group">
                                            <a href="{{ url('/audit_firm_renew') }}" class="btn btn-sm btn-block btn-info pull-right">Audit Firm Renew Form</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="check_status" style="display:none;">
                                    <div class="form-group">
                                        <a href="#" class="btn btn-sm btn-block btn-info pull-right">Choose Payment</a>
                                    </div>
                                </div>--}}
                                <table width="100%">
                                    <tr>
                                        <td width="15%">
                                            <div class="single-form">
                                                <label class="col-form-label">Accountancy Firm Name</label>
                                            </div>
                                        </td>
                                        <td width="85%">
                                            <div class="single-form">
                                                <input type="text" class="form-control" id="accountancy_firm_name" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">
                                            <div class="single-form">
                                                <label class="col-form-label">Applied Date</label>
                                            </div>
                                        </td>
                                        <td width="85%">
                                            <div class="single-form">
                                                <input type="text" class="form-control" id="register_date" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">
                                            <div class="single-form">
                                                <label class="col-form-label">Status</label>
                                            </div>
                                        </td>
                                        <td width="85%">
                                            <div class="single-form">
                                                <input type="text" class="form-control" id="message" readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="row" id="check_renew" style="display:none;text-align: center; margin-top: 2%;">
                                    <div class="form-group">
                                        <center>
                                            <a href="{{ url('/audit_firm_renew') }}" class="btn btn-sm btn-block btn-info">Audit Firm Renew Form</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="blog-details-comment" id="app_form" style="display:block">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <form id="audit_firm_form" class="" method="post" action="javascript:createAuditFirm();" enctype="multipart/form-data" novalidate>
                            @csrf
                            <input type="hidden" value="1" name="audit_firm_type_id">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-success mb-3 p-3">
                                        <div class="card-body">
                                            <div class="row">
                                              <div class="col-md-8">
                                                <div class="row">
                                                    <label for="" class="col-md-2 col-form-label">1.</label>
                                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                                    <div class="col-md-6">
                                                        <input type="email" placeholder="Enter your Email address!" name="email" class="form-control" value="{{ old('email') }}" required="">
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <label for="" class="col-md-2 col-form-label">2.</label>
                                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" placeholder="Enter your Password!" name="password" class="form-control" value="{{ old('password') }}" required="">
                                                    </div>

                                                </div><br>

                                                <div class="row">
                                                    <label for="" class="col-md-2 col-form-label">3.</label>
                                                    <label for="" class="col-md-4 col-form-label">Confirm Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" placeholder="Enter your Password again!" name="confirm_password" class="form-control"  required="">
                                                    </div>
                                                </div><br>


                                                {{--<div class="row">

                                                    <table width="100%">
                                                        <tr>
                                                            <td width="5%"><label>4.</label></td>
                                                            <td width="15%"><label>Accountancy Firm Registration Number</label></td>
                                                            <td width="80%">
                                                                <div>
                                                                    <input type="text" name="accountancy_firm_reg_no" class="form-control" placeholder="Accountancy Firm Registration No" autocomplete="off" value="{{ old('accountancy_firm_reg_no') }}" required="">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>--}}

                                                <div class="row">
                                                    <label for="" class="col-md-2 col-form-label">4.</label>
                                                    <label for="" class="col-md-4 col-form-label">Accountancy Firm Name</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="accountancy_firm_name"  class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Accountancy Firm Name!" autocomplete="off" value="{{ old('accountancy_firm_name') }}" required="">
                                                    </div>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div><br>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="col-md-6 pull-right">
                                                  <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                  <p class="mt-2">
                                                    <input type="file" class="custom-file-input" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">5.</label>
                                                <label for="" class="col-md-3 col-form-label">Address Of Practice(Head Office)</label>
                                                <div class="col-md-2">
                                                    <input type="text" name="township" class="form-control" placeholder="Township" autocomplete="off" value="{{ old('township') }}" required="">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" name="post_code" class="form-control" placeholder="Post Code" autocomplete="off" value="{{ old('post_code') }}" required="">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" name="city" class="form-control" placeholder="City" autocomplete="off" value="{{ old('city') }}" required="">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" name="state" class="form-control" placeholder="State/Region" autocomplete="off" value="{{ old('state') }}" required="">
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-4 col-form-label"></div>
                                                <div class="col-md-2">
                                                    <input type="text" name="phone_no" class="form-control" placeholder="Telephone" autocomplete="off" value="{{ old('phone_no') }}" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="email" name="h_email" class="form-control" placeholder="Email Address" autocomplete="off" value="{{ old('h_email') }}" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="website" class="form-control" placeholder="Website Address" autocomplete="off" value="{{ old('website') }}" required="">
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">6.</label>
                                                <label for="" class="col-md-11 col-form-label">Branch Office</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1 col-form-label"></div>
                                                <div class="col-md-11 col-form-label">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <table class="table branch table-bordered input-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="less-font-weight">Name</th>
                                                                        <th class="less-font-weight">Township</th>
                                                                        <th class="less-font-weight">Post Code</th>
                                                                        <th class="less-font-weight">City</th>
                                                                        <th class="less-font-weight">State/Region</th>
                                                                        <th class="less-font-weight">Telephone</th>
                                                                        <th class="less-font-weight">Email</th>
                                                                        <th class="less-font-weight">Website</th>
                                                                        <th >

                                                                            <button class="btn btn-primary btn-sm" type="button" onclick='addRowBranch("branch")'>
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>
                                                                <thead>
                                                                <tbody>
                                                                    <tr>
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
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">7.</label>
                                                <label for="" class="col-md-11 col-form-label">Organization Structure</label>
                                            </div>
                                            <div class="row">
                      		                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                      		                    <!-- <label class="col-md-1 col-form-label">{{ __('') }}</label> -->
                                                <div class="col-md-8" id="audit_org_validate" style="display:none;">
                                                        <label class="text-danger">Organization Structure ရွေးချယ်ပါ</label>
                                                </div>
                      		                </div><br>

                                            <div class='row organization_data'></div><br/>

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
                                                                            <label class="form-label">(a) Copy of Public Practice Accountant Certificate</label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="controls1">
                                                                        <div class="entry1">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">

                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls1","entry1")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                    <div class="controls2">
                                                                        <div class="entry2">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="letterheads[]">
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls2","entry2")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                    <div class="controls3">
                                                                        <div class="entry3">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="tax_clearances[]">
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls3","entry3")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls4","entry4")'>
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
                                                                            <label class="form-label">(a) Copy of Public Practice Accountant Certificate all partners</label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="controls9">
                                                                        <div class="entry9">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">

                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls9","entry9")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <input type="file" class="form-control" name="certi_or_regs[]">

                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls10","entry10")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls11","entry11")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls12","entry12")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls13","entry13")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls14","entry14")'>
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
                                                        <div class="col-md-10">
                                                            <div class="card" id="audit_company">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <label class="col-md-12 col-form-label"><b> For Company Incorporated</b></label>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(a) Copy of Public Practice Accountant Certificate all shareholders</label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="controls19">
                                                                        <div class="entry19">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">

                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls19","entry19")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls20","entry20")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <input type="file" class="form-control" name="memorandums[]">

                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls21","entry21")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls22","entry22")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls23","entry23")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls24","entry24")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls25","entry25")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls26","entry26")'>
                                                                                        <i class="fa fa-plus"></i>
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
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls27","entry27")'>
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

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">8.</label>
                                                <label for="" class="col-md-11 col-form-label">Sole Proprietor/Partners/Shareholders</label>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="20%"></td>
                                                        <td width="80%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table id="myTable" class="table partner_list table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight" rowspan="2">Sr</th>
                                                                                <th class="less-font-weight" rowspan="2">Name</th>
                                                                                <th class="less-font-weight" rowspan="2">Public Practice Reg.No</th>
                                                                                <th class="less-font-weight" colspan="2">Have authority to sign Auditors' report?</th>
                                                                                <th class="less-font-weight" rowspan="2" style="text-align: right;">
                                                                                    <button class="btn btn-primary btn-sm" type="button" onclick='addRowPartner("partner_list")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td><input type="text" value="" name="foa_name[]" class="form-control" autocomplete="off" required></td>
                                                                                <td><input type="text" value="" name="foa_pub_pri_reg_no[]" id="foa_pub_pri_reg_no" onchange="checkPAPPExist(this.value,this.id)" class="form-control" autocomplete="off" required></td>
                                                                                <td>
                                                                                    <input type="radio" value="1" name="foa_authority_to_sign" id="report_yes" required>
                                                                                    <label class="form-check-label">Yes</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="radio" value="2" name="foa_authority_to_sign" id="report_yes" required>
                                                                                    <label class="form-check-label">No</label>
                                                                                </td>
                                                                                <td>
                              																										<button class="delete btn btn-danger btn-sm" type="button" onclick='delRowPartner("partner_list")'><i class="fa fa-trash"></i></button>
                              																									</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">9.</label>
                                                <label for="" class="col-md-11 col-form-label">Director(s)/Officer(s)</label>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-1 col-form-label"></div>
                                                <div class="col-md-11 col-form-label">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <table id="myTable" class="table director table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="less-font-weight">Sr</th>
                                                                        <th class="less-font-weight">Name</th>
                                                                        <th class="less-font-weight">Position</th>
                                                                        <th class="less-font-weight" >CPA Reg.No/Qualification</th>
                                                                        <th class="less-font-weight" >Public Practice Reg.No</th>
                                                                        <th class="less-font-weight" style="text-align: right;">

                                                                            <button class="btn btn-primary btn-sm" type="button" onclick='addRowDirector("director")'>
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><input type="text" value="" name="do_name[]" class="form-control" autocomplete="off" required></td>
                                                                        <td><input type="text" value="" name="do_position[]" class="form-control" autocomplete="off" required></td>
                                                                        <td><input type="text" value="" name="do_cpa_reg_no[]" class="form-control" autocomplete="off" required></td>
                                                                        <td><input type="text" value="" name="do_pub_pri_reg_no[]" class="form-control" autocomplete="off" required></td>
                                                                        <td>
                                                                                                                            <button class="delete btn btn-danger btn-sm" type="button" onclick='delRowDirector("director")'><i class="fa fa-trash"></i></button>
                                                                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">10.</label>
                                                <label for="" class="col-md-3 col-form-label">Name Of Sole Proprietor/ Managing Partner</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="name_sole_proprietor" class="form-control" autocomplete="off" value="{{ old('name_sole_proprietor') }}" placeholder="Enter Name Of Sole Proprietor/ Managing Partner!" required="">
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">11.</label>
                                                <label for="" class="col-md-2 col-form-label">Total Staff</label>
                                            </div><br>

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
                                                <label for="" class="col-md-1 col-form-label">12.</label>
                                                <label for="" class="col-md-2 col-form-label">Audit Staff</label>
                                            </div><br>

                                            <div class="row">
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
                                            </div><br><br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">13.</label>
                                                <label for="" class="col-md-3 col-form-label">Types Of Service Provided</label>
                                                <div class="col-md-4"><div class="row type_service_provided mt-1"></div></div>
                                                <div class="col-md-4 col-form-label text-danger" id="t_s_p_id_validate" style="display:none;" >
                                                        Type of Service Provided ရွေးချယ်ပါ
                                                </div>
                                            </div><br>

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
                                                <label class="col-md-1 col-form-label">{{ __('14.') }}</label>
                                                <label class="col-md-2 col-form-label">{{ __('Declaration') }}</label>
                                                <label class="col-form-label" style="display:contents;">{{ __('I') }}</label>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" name="declaration" class=" @error('date_of_birth') is-invalid @enderror form-control" autocomplete="off" value="{{ old('declaration') }}" placeholder="(sole proprietor/ managing partner)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
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
                                                    <!-- <button type="submit" id="btn_submit_audit_firm" class="btn btn-success btn-hover-dark w-100" disabled>{{ __('Submit') }}</button> -->
                                                    <button type="submit" id="" class="btn btn-success btn-hover-dark w-100" >{{ __('Submit') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>
    <!-- JavaScript Section -->
@endsection
@push('scripts')
@endpush
@push('scripts')
<script>
$(document).ready(function(){
    $("#audit_firm_form").submit(function(event){
        if($("input[name='t_s_p_id']:checked").length == 0){
            $('#t_s_p_id_validate').css('display','block');
        }
        else{
            $('#t_s_p_id_validate').css('display','none');
        }

        // organization_structure radio button required validation
        if($("input[name='org_stru_id']:checked").length == 0){
            $('#audit_org_validate').css('display','block');
        }
        else{
            $('#audit_org_validate').css('display','none');
        }
    });

    loadAuditOrganization();
    loadAuditTypeOfService();
    loadAuditTotalStaffReg();
    loadAuditStaffReg();
    audit_reg_feedback();
    auditData();
    // pendingStatus();
    dateQuery();
    verifyStatus();

    // getTotalStaff();

    });

</script>
@endpush