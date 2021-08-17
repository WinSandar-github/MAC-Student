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
                    <h2 class="title">AA Registration <span>Form</span></h2>
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
                <div class="comment-form" style="margin-bottom: 10%;">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <form method="post" action="javascript:createAAMacRegister();" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" id="form_type" class="form-control">
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                    <table width="100%">
                                        <tr>
                                            <td width="30%">
                                                <label class="col-form-label">Choose Mentor</label>
                                            </td>
                                            <td width="70%">
                                                <div class="form-group"> 
                                                    <select class="form-control" name="mentor_id" id="selected_mentor_id" style="width: 100%;">
                                                        <option value="" disabled selected>Select Mentor</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </table><br>

                                    <table width="100%">
                                        <tr>
                                            <td width="30%">
                                                <label class="col-form-label">Choose Register Type</label>
                                            </td>
                                            <td width="40%">
                                                <div class="form-group">                                
                                                    <select class="form-control" name="current_check_service_id" id="selected_service_id" style="width: 100%;">
                                                        <option value="" disabled selected>Select Current Service</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td width="30%">
                                                <div class="form-group check-service-other" style="visibility:hidden;">
                                                   <input type="text" name="current_check_services_other" class="form-control" placeholder="other" >
                                                </div>
                                            </td>
                                        </tr>
                                    </table><br>

                                    <table width="100%">
                                        <tr>
                                            <td width="30%">
                                                <label class="col-form-label">Recommend Letter (jpg,pdf)</label>
                                            </td>
                                            <td width="70%">
                                                <div class="">
                                                    <input type="file" id="recommend_file" class="form-control" placeholder="upload photo" name="recommend_file" required="">
                                                </div>
                                            </td>
                                        </tr>
                                    </table><br>

                                    <div class="row mt-4">
                                        <div class="col-md-3 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                <!-- Form Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Section -->
@endsection
@push('scripts')
<script>
    // $('#form_type').val(localStorage.getItem('course_id'));
    loadCheckServiceMAC();
    loadMentor();
</script>
@endpush
