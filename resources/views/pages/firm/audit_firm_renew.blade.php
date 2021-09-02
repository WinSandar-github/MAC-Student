@extends('layouts.app')
@section('content')
<div class="main-wrapper">
    <div class="overlay"></div>
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
                <h2 class="title">Audit Firm Renew <span>Form</span></h2>
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
    <div class="container approve_request" style="overflow: hidden;">
        <div class="email_verify" style="display:block; margin-top:5%; margin-bottom: 5%;">
            <form method="post" class="" action="javascript:renewSubscribe();" enctype="multipart/form-data" >
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="col-md-12">

                            {{--<table width="100%">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <label class="col-form-label">Accountancy Firm Name</label>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <input type="text" class="form-control" id="accountancy_firm_name" readonly="">
                                        </div>
                                    </td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <label class="col-form-label">Accountancy Firm Registeration No</label>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <input type="text" class="form-control" id="accountancy_firm_reg_no" readonly="">
                                        </div>
                                    </td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <label class="col-form-label">Applied Date</label>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <input type="text" class="form-control" id="register_date" readonly="">
                                        </div>
                                    </td>
                                    <td width="20%"></td>
                                </tr>
                            </table>--}}

                            <div class="row">
                              <div class="col-md-8">
                                <div class="row">
                                    <label class="col-md-4 col-form-label" style="align-self:center;">{{ __('Accountancy Firm Name') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group single-form">
                                          <input type="text" class="form-control" id="accountancy_firm_name" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label" style="align-self:center;">{{ __('Accountancy Firm Registeration No') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group single-form">
                                          <input type="text" class="form-control" id="accountancy_firm_reg_no" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label" style="align-self:center;">{{ __('Applied Date') }}</label>
                                    <div class="col-md-7">
                                        <div class="form-group single-form">
                                          <input type="text" class="form-control" id="register_date" readonly="">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="col-md-6 pull-right">
                                  <img class="col-md-3 profile-style" id="previewImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                  <p class="mt-2">
                                    <input type="file" value="" class="custom-file-input" id="audit_renew_profile" name="profile_photo" onchange="previewImageFile(this);" required>
                                  </p>
                                </div>
                              </div>
                            </div>


                            <table width="100%">
                                <tr>
                                    <td>
                                        <div class="text-center mt-4">
                                            <label class="col-form-label"><h3>Your registeration is expired.You need to subscribe again!</h3></label>
                                        </div>
                                    </td>
                                </tr>
                            </table><br>

                            <div class="row mb-3">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
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
<script>
    $(document).ready(function(){
        getAuditData();
    });
</script>
@endpush
