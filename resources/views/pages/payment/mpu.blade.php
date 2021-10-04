@extends('layouts.app')
@section('content')

    <?php
    
    //var_dump($_POST);
    
    $mpu_merchant_ID = constant('mpu_merchant_ID');
    $pgw_test_Url = constant('pgw_test_Url');
    // $amount="000000010000";
    // $invoice_no = $invoice_no.rand(10,1000);
    //echo $invoice_no;
    // $product_Desc="Form Fee";
    
    $invoice_no = $data['invoiceNo'];
    $product_desc = $data['productDesc'];
    // $amount = str_pad($data['amount'], 20, "0", STR_PAD_LEFT);
    $amount = str_pad($data['amount'] * 5000, 12, '0', STR_PAD_LEFT);
    $currencyCode = '104';
    $name = $data['name_eng'];
    $email = $data['email'];
    $phone = $data['phone'];
    
    $mpu_data = [
        'merchantID' => $mpu_merchant_ID,
        'invoiceNo' => $invoice_no,
        'productDesc' => $product_desc,
        'amount' => $amount,
        'currencyCode' => $currencyCode,
        'userDefined1' => $name,
        'userDefined2' => $email,
        'userDefined3' => $phone,
    ];
    
    function generate_hash_value($data)
    {
        $input_fields_array = $data;
        $signature_string = create_signature_string($input_fields_array);
        $secret_Key = constant('secret_Key');
    
        $hash_value = hash_hmac('sha1', $signature_string, $secret_Key, false);
        $hash_value = strtoupper($hash_value);
    
        return $hash_value;
    }
    
    function create_signature_string($input_fields_array)
    {
        sort($input_fields_array, SORT_STRING);
    
        $signature_string = '';
        foreach ($input_fields_array as $value) {
            if ($value != '') {
                $signature_string .= $value;
            }
        }
    
        return $signature_string;
    }
    
    ?>
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
        <div class="container" style="overflow: hidden; margin-bottom:10% ;">
            <label for="email">Email</label>{{ $data['email'] }}<br>
            <label for="email">name_eng</label>{{ $data['name_eng'] }}<br>
            <label for="email">phone</label>{{ $data['phone'] }}<br>
            <label for="email">invoice no.</label>{{ $data['invoiceNo'] }}<br>
            <label for="email">description</label>{{ $data['productDesc'] }}<br>
            <label for="email">form_fee</label>{{ $data['amount'] }}<br>
        </div>
    </div>

    <h1>Redirecting to MPU Payment Gateway ...</h1>

    <form id="hidden_form" name="hidden_form" method="post" action="<?php echo $pgw_test_Url; ?>">
        <input type="submit" value="Click here if it is taking too long to redirect!" />
        <div style="visibility: initial;">
            <?php foreach($mpu_data as $key => $value): ?>
            <?php if ($value != ""): ?>
            <label><?php echo htmlspecialchars($key); ?></label>
            <input type="text" name="<?php echo htmlspecialchars($key); ?>" value="<?php echo htmlspecialchars($value); ?>" />
            <br />
            <?php endif; ?>
            <?php endforeach; ?>
            <input type="text" name="hashValue" value="<?php echo generate_hash_value($mpu_data); ?>" />
            <br />
        </div>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/payment.js') }}"></script>
    <script type="text/javascript">
        // loadStdData();
        // loadFees();
    </script>

    <script>
        function submitForm() {
            document.forms["hidden_form"].submit();
        }

        if (window.attachEvent) {
            window.attachEvent("onload", submitForm);
        } else {
            window.addEventListener("load", submitForm, false);
        }
    </script>
@endpush
