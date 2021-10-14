@extends('layouts.app')
@section('content')



<?php

function create_signature_string($input_fields_array)
{
    unset($input_fields_array["hashValue"]);    // exclude hash value from signature string
    
    sort($input_fields_array, SORT_STRING);
    
    $signature_string = "";
    foreach($input_fields_array as $key => $value)
    {   
        $signature_string .= $value;    
    }
    
    return $signature_string;
}

function generate_hash_value()
{
    $input_fields_array = $_POST;
    $secret_Key = constant('secret_Key');                       
    $signature_string = create_signature_string($input_fields_array);
  //  global $secret_key;
  //$secret_Key = constant('secret_Key');
    
    $hash_value = hash_hmac('sha1', $signature_string, $secret_Key, false);
    $hash_value = strtoupper($hash_value);
    
    return $hash_value;
}

function is_hash_value_matched()
{    $secret_Key = constant('secret_Key');
    $is_matched = false;
    $generated_hash_value = generate_hash_value();        
    $server_hash_value = $_POST["hashValue"];
    
    if ($generated_hash_value == $server_hash_value)
    {
        $is_matched = true;
    }
    
    return $is_matched;
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
    <div class="container py-5 text-center" style="overflow: hidden; margin-bottom:10%;">
     
    
    
 

        <?php

      
        if(($_POST['status']=="DE") && (is_hash_value_matched())){

?>
 <h3>You Payment is Fail!</h3>


 <?php

        }else if(($_POST['status']=="AP") && (is_hash_value_matched())){
?>
   <h3>You Payment is Successfull!</h3>

   <?php

        }
    ?>




        <a href="{{ route('home') }}" class="btn btn-success" >Back to Dashboard</a>
	</div>
</div>
@endsection