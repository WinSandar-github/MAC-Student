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
                <h2 class="title">Payment <span>Method</span></h2>
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
            <form method="post">
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <center>
                                    <img src="{{asset('img/cash.png')}}" class="img-fluid">
                                </center>
                                
                                <div class="col-12" >
                                    <h3 class="heading text-center">CBPay</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <p>
                                        CBPay is a mobile wallet platform powered by CB Bank,
                                        one of the most trusted banks in Myanmar. Now available for download across the country, it’s the safer, simpler and more convenient way to transact money. With just a few taps on your phone, whether you wish to pay, transfer, cash in or cash out – it’s easy with CBPay!
                                    </p>
                                </div>
                            </div><br>
                            <input type="hidden" name="payment_status" value="1">
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
@endsection