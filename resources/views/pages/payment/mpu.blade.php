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
    <div class="container" style="overflow: hidden; margin-bottom:10% ;">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="name_eng" readonly="">
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Email</label>
                <input type="text" class="form-control" id="email" readonly="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Phone Number</label>
                <input type="text" class="form-control" id="phone" readonly="">
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Invoice No.</label>
                <input type="text" class="form-control" id="invoice_no" readonly="">
            </div>
        </div>
        <strong><span id="total"></span> MMK</strong>
        <p>Product : Description => Diploma in Accountancy(Part 1)</p>
	</div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/payment.js') }}"></script>
    <script type="text/javascript">
        loadStdData();
        loadFees();
    </script>
@endpush