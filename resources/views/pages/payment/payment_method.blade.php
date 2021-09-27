@extends('layouts.app')
@section('content')
<style type="text/css">
    .container {
      max-width: 960px;
    }

    .lh-condensed { line-height: 1.25; }
</style>
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
                <h2 class="title">Payment <span>Method</span></h2>
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
            <div class="card border-success mb-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 order-md-2 mb-4">
                                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted">Fees</span>
                                    </h4>
                                    <ul class="list-group mb-3 sticky-top">
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div>
                                                <h6 class="my-0">Application Form Fee</h6>
                                                <small class="text-muted">Diploma in Accountancy(Part 1)</small>
                                            </div>
                                            <span class="text-muted">1500 MMK</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Total (MMK)</span>
                                            <strong>1500 MMK</strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 order-md-1">
                                    <h4 class="mb-3">User Information</h4>
                                    <form class="needs-validation" novalidate="">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">Name(mm)</label>
                                                <input type="text" class="form-control" id="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName">Name(eng)</label>
                                                <input type="text" class="form-control" id="">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email <span class="text-muted"></span></label>
                                            <input type="email" class="form-control" id="">
                                        </div>
                                        <br>
                                        <h4 class="mb-3">Choose Payment Method</h4>
                                        <div class="d-block my-3">
                                            <div class="row justify-content-center mb-4 radio-group">
                                                <div class="col-sm-3 col-5">
                                                    <div class='radio mx-auto'> <img class="fit-image" src="{{asset('img/mpu.png')}}" width="70px" height="60px" data-value="MPU" id="channel"> </div>
                                                </div>
                                                <div class="col-sm-3 col-5">
                                                    <div class='radio mx-auto'> <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="70px" height="60px" data-value="CBPAY" id="channel"> </div>
                                                </div>
                                                <div class="col-sm-3 col-5">
                                                    <div class='radio mx-auto'> <img class="fit-image" src="{{asset('img/visa.png')}}" width="70px" height="60px" data-value="VISA" id="channel"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush