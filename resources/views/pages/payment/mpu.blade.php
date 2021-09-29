@extends('layouts.app')
@section('content')


<?php


   //var_dump($_POST);

   $merchant_ID="204104001306141";
       

   $mpu_data=array("merchantID"=>$merchant_ID,"invoiceNo"=>$invoiceNo,"productDesc"=>$product_Desc,"amount"=>$amount,"currencyCode"=>"104","userDefined1"=>$userDefined1,"userDefined2"=>$userDefined1,"userDefined3"=>$userDefined3);


   $secret_Key = "GQVVS3MOUU06XDCFRJDIVHI3WXWYH04P";
   $pgw_test_Url = "https://www.mpuecomuat.com:60145/UAT/Payment/Payment/pay";
   $pgw_live_Url = "https://www.mpuecomuat.com:60145/UAT/Payment/Payment/pay";


   function create_signature_string($input_fields_array)
    {

      
        sort($input_fields_array, SORT_STRING);
        
        $signature_string = "";
        foreach($input_fields_array as $value)
        {
            if ($value != "")
            {
                $signature_string .= $value;    
            }
        }
        
        return $signature_string;
    }
    
    function generate_hash_value()
    {
      
        global $mpu_data;

     
        $input_fields_array=$mpu_data; 
                            
        $signature_string = create_signature_string($input_fields_array);
        global $secret_Key;
        
        $hash_value = hash_hmac('sha1', $signature_string, $secret_Key, false);
        $hash_value = strtoupper($hash_value);

      
        
        return $hash_value;
    }

?>
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


<html>

<head>
</head>

<body>
    <h1>Redirecting to MPU Payment Gateway ...</h1>

    <form id="hidden_form" name="hidden_form" method="post" action="<?php echo $pgw_test_Url; ?>"> 
        <input type="submit" value="Click here if it is taking too long to redirect!" />
        <div style="visibility: initial;">
            <?php foreach($mpu_data as $key => $value): ?>
                <?php if ($value != ""): ?>
                    <label><?php echo htmlspecialchars($key); ?></label>
                    <input type="text" name="<?php echo htmlspecialchars($key); ?>" 
                        value="<?php echo htmlspecialchars($value); ?>" />
                    <br />
                <?php endif; ?>
            <?php endforeach; ?>
            <input type="text" name="hashValue" value="<?php echo generate_hash_value(); ?>" />
            <br />
        </div>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/payment.js') }}"></script>
    <script type="text/javascript">
        loadStdData();
        loadFees();
    </script>

    <script>
        function submitForm()
        {
          // document.forms["hidden_form"].submit();
        }
        
        if(window.attachEvent)
        {
            window.attachEvent("onload", submitForm);
        }
        else
        {
            window.addEventListener("load", submitForm, false);
        }
    </script>
@endpush