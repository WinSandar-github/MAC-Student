@extends('layouts.app')
@section('content')
    <style type="text/css">
        .container {
            max-width: 960px;
        }

        .lh-condensed {
            line-height: 1.25;
        }

        .cc-selector{
            display: flex;
            justify-content: space-between;
        }
        .cc-selector input {
            margin: 0;
            padding: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        
        .mpu {
            background-image: url({{ asset('img/payment/mpu.png') }});
        }
        .cbpay {
            background-image: url({{ asset('img/payment/cbpay.png') }});
        }
        .visa {
            background-image: url({{ asset('img/payment/visa.png')}});
        }

        .mastercard {
            background-image: url({{ asset('img/payment/master.png')}});
        }

        .cc-selector input:active+.drinkcard-cc {
            opacity: .9;
        }

        .cc-selector input:checked+.drinkcard-cc {
            -webkit-filter: none;
            -moz-filter: none;
            filter: none;
        }

        .drinkcard-cc {
            cursor: pointer;
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
            width: 100px;
            height: 70px;
            -webkit-transition: all 100ms ease-in;
            -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
            -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
        }

        .drinkcard-cc:hover {
            -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
            -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
        }

        /* Extras */
        a:visited {
            color: #888
        }

        a {
            color: #444;
            text-decoration: none;
        }

        p {
            margin-bottom: .3em;
        }

    </style>
    <div class="main-wrapper">
        <div class="overlay"></div>
        <div class="section page-banner">
            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">
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
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">
            </div>
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">
            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">
        </div>
        <div class="container approve_request" style="overflow: hidden;">
            <div class="email_verify" style="display:block; margin-top:5%; margin-bottom: 5%;">
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="container">
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
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
                                                    <span class="text-muted" name="fee" id="fee"></span>&nbsp;<span> MMK</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Total (MMK)</span>
                                                    <strong><span id="total"></span> MMK</strong>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 order-md-1">
                                            <h4 class="mb-3">User Information</h4>
                                            
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">Name</label>
                                                        <input type="text" class="form-control" name="name_eng" id="name_eng" readonly="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Email</label>
                                                        <input type="text" class="form-control" name="email" id="email" readonly="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone" id="phone" readonly="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Invoice No.</label>
                                                        <input type="text" class="form-control" name="invoice_no" value="123456" readonly="">
                                                    </div>
                                                </div>
                                                <input type="hidden"  name="form_fee" id="form_fee">
                                                {{--<div class="mb-3">
                                                    <label for="email">Email <span class="text-muted"></span></label>
                                                    <input type="email" class="form-control" id="email" readonly="">
                                                </div>--}}
                                                <br>
                                                <h4 class="mb-3">Choose Payment Method</h4>
                                                <div class="d-block my-3">
                                                    <div class="custom-control custom-radio">
                                                        <input value="mpu" name="payment_method" type="radio" class="custom-control-input" checked="" required="">
                                                        <label class="custom-control-label" for="credit">MPU</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input value="cbpay" name="payment_method" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="debit">CBPAY</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input value="visa" name="payment_method" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="paypal">VISA</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input value="master" name="payment_method" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="paypal">MASTER</label>
                                                    </div>
                                                </div>
                                                {{--<h4 class="mb-3">Choose Payment Method</h4>
                                                <div class="d-block my-3">
                                                    <div class="row justify-content-center mb-4 radio-group">
                                                        <div class="col-sm-3 col-5">
                                                            <div class='radio mx-auto'> <img class="fit-image"
                                                                    src="{{ asset('img/payment/mpu.png') }}" width="100px" height="60px"
                                                                    value="MPU" name="payment_method"> </div>
                                                        </div>
                                                        <div class="col-sm-3 col-5">
                                                            <div class='radio mx-auto'> <img class="fit-image"
                                                                    src="{{ asset('img/payment/cbpay.png') }}" width="100px"
                                                                    height="60px" value="CBPAY" name="payment_method"> </div>
                                                        </div>
                                                        <div class="col-sm-3 col-5">
                                                            <div class='radio mx-auto'> <img class="fit-image"
                                                                    src="{{ asset('img/payment/visa.png') }}" width="100px" height="60px"
                                                                    value="VISA" name="payment_method"> </div>
                                                        </div>
                                                        <div class="col-sm-3 col-5">
                                                            <div class='radio mx-auto'> <img class="fit-image"
                                                                    src="{{ asset('img/payment/master.png') }}" width="100px" height="60px"
                                                                    value="MASTER" name="payment_method"> </div>
                                                        </div>
                                                    </div>
                                                </div>--}}
                                                <button class="btn btn-success btn-block" type="submit">Continue to checkout</button>
                                                {{--<div class="cc-selector">
                                                    <input id="mpu" type="radio" name="credit-card" value="mpu" />
                                                    <label class="drinkcard-cc mpu" for="mpu"></label>
                                                    <input id="cbpay" type="radio" name="credit-card" value="cbpay" />
                                                    <label class="drinkcard-cc cbpay" for="cbpay"></label>
                                                    <input id="visa" type="radio" name="credit-card" value="visa" />
                                                    <label class="drinkcard-cc visa" for="visa"></label>
                                                    <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
                                                    <label class="drinkcard-cc mastercard" for="mastercard"></label>
                                                </div>--}}
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
@endsection
